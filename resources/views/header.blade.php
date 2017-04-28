<header id="navigation">
    <div class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden" href="{{ route('home') }}"><h1><img src="images/logo.png" alt="logo"></h1></a>
                <a class="navbar-brand" href="{{ route('home') }}"><h1 style="color: #444" class="hidden-xs hidden-sm">{{ config('app.name') }}</h1></a>
                <a class="navbar-brand" href="{{ route('home') }}"><h1 style="color: #444" class="visible-xs visible-sm">OAU SLF</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class=" active"><a href="{{ route('home') }}">Home</a></li>
                    <li class=""><a href="{{ route('find-centre') }}">Find a location on campus</a></li>
                </ul>
            </div>
        </div>
    </div><!--/navbar-->
</header> <!--/#navigation-->