@extends('auth.layouts.auth-layout')
@section('auth-content')
<section>
    <div class="container">
        <div class="row">
            <div class="w-50 mx-auto">
                <h2>Confirm Your Password</h2>
                <form action="{{route('password.confirm')}}" method="POST" class="mt-3">
                    @csrf
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Your Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Continue</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection