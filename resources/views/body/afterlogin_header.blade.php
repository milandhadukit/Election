<!--top-header-start-->
<header>

    <nav class="navbar navbar-expand-lg top-header">
        <div class="container">
            <div class="custum-nav">
                {{-- <a class="navbar-brand" href="index.html"><img src="images/fitness-logo.png" alt="logo"></a> --}}
                <a href="/"><button type="button" class="btn btn-warning">Election </button></a>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">

                    @if (Auth::user()->role_id == '2')
                        <ul class="nav justify-content-center">

                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page"
                                    href="{{ route('voters.view-election') }}">Election List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page"
                                    href="{{ route('voters.view-candidate') }}">View Candidate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#">Contact </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#">Profile Edit </a>
                            </li> --}}
                            <div class="sign-up">
                                <a href="{{ route('user.register') }}" class="nav-link">Register</a>
                            </div>
                            {{-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a> --}}
                            </li>
                        </ul>


                </div>
            @elseif (Auth::user()->role_id == '1')
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('admin.new-election') }}">New
                            Election</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page"
                            href="{{ route('admin.view-candidates') }}">Candidate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('admin.view-voters') }}">Voters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('admin.view-elections') }}">View
                            Election Result</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('admin.pandding-users') }}">Pandding Users
                            </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('admin.view-result') }}">View Result</a>
                    </li> --}}

                    <div class="sign-in-up-wrap">
                        {{-- <div class="sign-in">
                            <a href="{{ route('custom.login') }}" class="nav-link">Sign in</a>
                        </div> --}}
                        <div class="sign-up">
                            <a href="{{ route('user.register') }}" class="nav-link">Register</a>
                        </div>
                        <ul class="navbar-nav ms-auto">
                        </ul>
                    </div>
                    @elseif (Auth::user()->role_id == '3')
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/home">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " aria-current="page"
                                    href="{{ route('candidate.total-vote') }}">ToTal Vote</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page"
                                    href="{{ route('candidate.view-election-vote') }}">View Election Vote</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link " aria-current="page"
                                    href="{{ route('candidate.view-election-list') }}">View Election</a>
                            </li> --}}
                        </ul>
                        @endif

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
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
