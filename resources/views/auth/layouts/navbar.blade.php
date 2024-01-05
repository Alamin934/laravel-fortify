<div>
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">Fortify</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Log in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                            @endguest

                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('change.password') }}">Change Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('account.delete') }}">Delete Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('auth.twoFactorAuth') }}">Two Factory</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('update.profile')}}">{{
                                    auth()->user()->name }}</a>
                            </li>
                            <li class="nav-item ms-3">
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button class="btn btn-outline-dark">Logout</button>
                                </form>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>