<!--top-header-start-->
<header>

    <nav class="navbar navbar-expand-lg top-header">
        <div class="container">
            <div class="custum-nav">
                {{-- <a class="navbar-brand" href="index.html"><img src="images/fitness-logo.png" alt="logo"></a> --}}
                <a href="/"><button type="button" class="btn btn-warning">Election </button></a>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">

                    {{-- @if (Auth::user()->role_id == '3') --}}
                    <ul class="nav justify-content-center">

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Testomonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Contact </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Sign Up</a>
                        </li>
                    </ul>

                </div>
                {{-- @elseif (Auth::user()->role_id == '1') --}}
                {{-- <ul class="nav justify-content-center">

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">New Election</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">View Election</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">View Result</a>
                    </li>
                </ul> --}}
                {{-- @elseif (Auth::user()->role_id == '2') --}}
                <ul class="nav justify-content-center">

                    {{-- <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">2</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">View Election</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">View Result</a>
                        </li> --}}
                </ul>
                {{-- @endif --}}





                <div class="sign-in-up-wrap">
                    <div class="sign-in">
                        <a href="{{ route('custom.login') }}" class="nav-link">Sign in</a>
                    </div>
                    <div class="sign-up">
                        <a href="{{ route('user.register') }}" class="nav-link">Register</a>
                    </div>
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{-- {{ Auth::user()->name }} --}}
                            </a>

                            <a href="{{ route('signout') }}">
                                <button type="button" class="btn btn-outline-secondary">LogOut</button>
                            </a>
                </div>
                </li>

            </ul>
                <button class="navbar-toggler tBtn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span>-->
                    <span class="navTrigger">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
                </button>
            </div>
        </div>
        </div>
    </nav>

</header>
<marquee class="li" direction=”left” onmouseover="stop()" onmouseout="start()">★ Welcome To ★
</marquee>
<!--top-header-ends-->
