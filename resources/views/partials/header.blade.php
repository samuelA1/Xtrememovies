<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="{{url('/')}}" class="scrollto">XMT</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-has-children"><a href="#">See A Movie</a>
                    <ul>
                        <li><a style="color: #18d26e" href="{{url('movies')}}">See All</a></li>
                    </ul>
                </li>
                <li class="menu-has-children"><a href="#">Coming Soon</a>
                    <ul>
                        <li><a style="color: #18d26e" href="{{url('soon')}}">See All</a></li>
                    </ul>
                </li>
                <li class="menu-has-children"><a href="#about">Food & Drinks</a></li>
                <li class="menu-has-children"><a href="{{url('gift-cards')}}">Gift Cards</a></li>
                <li><a href="{{url('search')}}">
                        <span  class="fa-stack">
                    <i class="fa fa-search fa-stack-2x"></i>
                  </span>
                    </a>
                </li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->