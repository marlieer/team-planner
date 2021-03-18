<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Team Planner')</title>

    <!--Style-->
@yield('header')

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">


</head>
<body>
<header>
    <!-- Top nav bar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="/" class="navbar-brand">Team Planner</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{ route('project.index') }}"
                       class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('team_member.index') }}"
                       class="nav-link ">Signifly Team</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('skill.create') }}"
                       class="nav-link ">Add a Skill</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('team_member.create') }}"
                       class="nav-link ">Add a Team Member</a>
                </li>
            </ul>

            <!--Right side of nav bar-->
            <ul class="navbar-nav justify-content-end">
            </ul>
        </div>
    </nav>
</header>
<main>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <div class="container">
        @if ($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <p>
                        {{ $error }}
                    </p>
                </div>
            @endforeach
        @endif

        @if (Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{ Session::get('success') }}</li>
                </ul>
            </div>
        @endif
        <br>
        <div class="container">
            @yield('content')
        </div>
    </div>
</main>
</body>
</html>

