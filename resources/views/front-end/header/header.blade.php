
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('/') }}"><img src="{{ asset('/') }}front-end/images/version/tech-logo.png" alt=""></a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('/') }}">Home</a>
            </li>
            @foreach($categories as $category)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('post',['id' =>$category->id]) }}">{{ $category->category_name }}</a>
            </li>
            @endforeach
        </ul>
        <ul class="navbar-nav mr-2">
            @if (Session::get('visitorId'))
                <div class="dropdown show">
                    <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Session::get('visitorName') }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item bg-primary text-white" href="#" onclick="event.preventDefault();document.getElementById('visitorLogoutForm').submit()">Logout</a>
                        <form id="visitorLogoutForm" action="{{ route('visitor-logout') }}" method="post">
                            @csrf
                        </form>
                    </div>
                </div>
            @else
                <li class="nav-item"><a class="nav-link" href="{{ route('visitor-login') }}">Login</a> </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('sign-up') }}">Sign up</a></li>
            @endif

        </ul>
    </div>
</nav>