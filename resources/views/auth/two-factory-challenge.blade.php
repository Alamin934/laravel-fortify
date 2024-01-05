@extends('auth.layouts.auth-layout')
@section('auth-content')
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Enable Two Factory Authentication</h2>
                <form action="{{route('two-factor.login')}}" method="post">
                    @csrf
                    <div class="my-3">
                        <label for="code" class="form-label">Enter 6 digit code</label>
                        <input type="text" name="code" id="code" class="form-control w-25">
                    </div>
                    <button type="submit" class="btn btn-secondary">Continue</button>
                </form>
                <form action="{{route('two-factor.login')}}" method="post">
                    @csrf
                    <div class="my-3">
                        <label for="recovery_code" class="form-label">Enter Recovery Code</label>
                        <input type="text" name="recovery_code" id="recovery_code" class="form-control w-25">
                    </div>
                    <button type="submit" class="btn btn-secondary">Continue</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection