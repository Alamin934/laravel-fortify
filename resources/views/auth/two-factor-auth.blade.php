@extends('auth.layouts.auth-layout')
@section('auth-content')
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Enable Two Factory Authentication</h2>
                @if (auth()->user()->two_factor_confirmed_at)
                <ul>
                    @foreach (auth()->user()->recoveryCodes() as $code)
                    <li>{{ $code }}</li>
                    @endforeach
                </ul>
                <form action="{{route('two-factor.disable')}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Disabled</button>
                </form>
                @elseif (auth()->user()->two_factor_secret)
                {!! auth()->user()->twoFactorQrCodeSvg() !!}
                <form action="{{route('two-factor.confirm')}}" method="post">
                    @csrf
                    <div class="my-3">
                        <label for="code" class="form-label">Scan the Qr-code and Enter 6 digit code</label>
                        <input type="text" name="code" id="code" class="form-control w-25">
                    </div>
                    <button type="submit" class="btn btn-secondary">Continue</button>
                </form>
                {{-- @if (session('status') == 'two-factor-authentication-confirmed') --}}
                @if (session('status') == 'two-factor-authentication-enabled')
                <div class="mb-4 font-medium text-sm">
                    {{-- Two factor authentication confirmed and enabled successfully. --}}
                    Please finish configuring two factor authentication below.
                </div>
                @endif

                @else

                <form action="{{route('two-factor.enable')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Enable</button>
                </form>
                @if (session('status') == 'two-factor-authentication-enabled')
                <div class="mb-4 font-medium text-sm">
                    Please finish configuring two factor authentication below.
                </div>
                @endif

                @endif

            </div>
        </div>
    </div>
</section>
@endsection