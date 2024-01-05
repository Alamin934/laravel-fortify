@extends('auth.layouts.auth-layout')
@section('auth-content')
<section>
    <div class="container">
        <div class="row">
            <div class="w-50 mx-auto">
                <h2>Update Password</h2>
                <form action="{{ route('user-password.update') }}" method="POST" class="mt-3">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                            id="current_password" name="current_password">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                            id="confirm_password" name="password_confirmation">
                        @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Reset</button>
                </form>
                @if (session('status') === 'password-updated')
                <div class="alert alert-success">Password has been updated</div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection