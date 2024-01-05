@extends('auth.layouts.auth-layout')
@section('auth-content')
<section>
    <div class="container">
        <div class="row">
            <div class="w-50 mx-auto">
                <h2>Reset Your Password</h2>
                <form action="{{ route('password.email') }}" method="POST" class="mt-3">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Enter Your Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Sent Password Request</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection