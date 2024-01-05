@extends('auth.layouts.auth-layout')
@section('auth-content')
<section>
    <div class="container">
        <div class="row">
            <div class="w-50 mx-auto">
                <h2>Delete Your Account</h2>
                <form action="{{route('account.destroy')}}" method="POST" class="mt-3">
                    @csrf
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection