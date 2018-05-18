<!DOCTYPE html>

<html lang="en">
<head runat="server">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Site.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Stylelandingpage.css')}}">
    <title>Own Gym</title>
</head>
<body>
    <div class="navbarAndTitleHousingContainer">
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" runat="server" href="/"><span>Own Gym</span></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="link" href="/"><span>Home</span></a></li>
                        <li><a class="link" href="/About"><span>About</span></a></li>
                        <li><a class="link" href="/Features"><span>Features</span></a></li>
                        <li><a class="link" href="/Pricing"><span>Pricing</span></a></li>
                        <li><a class="linkLast" runat="server" href="/Contact"><span>Contact</span></a></li>
                        <li><a class="signInButton" runat="server" href="~/SignIn">
                            <div class="Sign_Up">Sign In</div>
                        </a></li>
                        <li><a class="signUpButton" runat="server" href="~/SignUp">
                            <div class="Sign_Up">Sign Up</div>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
        @yield('title')
    </div>
    <div class="container body-content">
        @yield('content')
    </div>
    <div class="container">
    </div>
</body>
</html>
