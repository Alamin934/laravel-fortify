@extends('auth.layouts.auth-layout')
@section('auth-content')
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="mb-3">You must be varify your email to access</h3>
                <form action="{{ route('verification.send')}}" method="post">
                    @csrf
                    <button class="btn btn-dark">Resend Email Varification</button>
                </form>
                @if (session('status') == 'verification-link-sent')
                <div class="mt-2">
                    <small class="text-italic">A new email verification link has been emailed to you!</small>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection