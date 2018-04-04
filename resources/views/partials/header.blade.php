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
                <li class="menu-has-children"><a href="#">Food & Drinks</a>
                    <ul>
                        <li><a href="#">Snacks & Meals</a></li>
                        <li><a href="#">Coca-Cola Freestyle</a></li>
                    </ul>
                </li>
                <li class="menu-has-children"><a href="#">Gift Cards</a>
                    <ul>
                        <li><a href="#">Bulk Gift Cards</a></li>
                        <li><a href="#">E-Card Gift Cards</a></li>
                        <li><a href="#">Gold Gift Cards</a></li>
                    </ul>
                </li>
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