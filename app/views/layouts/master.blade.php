<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <!--[if lt IE 9]>
  <script src="{{asset('static/js/html5shiv.js')}}"></script>
  <![endif]-->
<!--  <link href='//fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,700' rel='stylesheet' type='text/css'>-->
  <link rel="stylesheet" href="{{asset('static/css/a-nimate-custom.css')}}">
  <link rel="stylesheet" href="{{asset('static/css/style.css')}}">
</head>
<body>
  <div class="wrap">
    <!-- header -->
    <header>
      <div class="header-inner">
        <div class="header-title animated fadeInDown">
          <div class="home-btn"><a href=""><i class="typcn typcn-home-outline"></i></a></div>
          <h1><a href="">Devplus.me</a></h1>
          <div class="search-btn"><a href=""><i class="typcn typcn-zoom-outline"></i></a></div>
        </div>
        <nav id="menu">
          <ul>
          <li>
              <a href="/" data-color="black"><span data-hover="首页">首页</span></a>
              
            </li>
  
          @foreach(HomeController::getNavs() as $nav)
            <li>
              <a href="{{action('CategoryController@getAlias',$nav->category_alias)}}" data-color="{{$nav->color}}"><span data-hover="{{$nav->category_name}}">{{$nav->category_name}}</span></a>
              <div class="sub-menu" id="category-{{$nav->count}}">
                <div class="sub-menu-content">
                  <ul>
                    @foreach($nav->child as $k)
                    <li><a href="{{action('CategoryController@getAlias',$k->category_alias)}}">{{$k->category_name}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </li>
           @endforeach
          </ul>
        </nav>
      </div>
    </header>
    
    @yield("content")
      <!-- search -->
  <div class="search-w" style="display:none;">
    <a class="close" href=""><i class="ion-android-close"></i></a>
    <div class="search-content">
      <div class="search-input-w">
        <div class="search-input">
          <label for=""><i class="ion-ios7-search-strong"></i></label>
          <input type="text" placeholder="Type here to Search...">
        </div>
      </div>
      <div class="search-info">
        <p>Displaying result 1-10 of 82</p>
        <h2>Search result for <b>Python</b></h2>
      </div>
      <div class="search-result">
        <ul>
          <li class="search-item">
            <div class="img-w">
              <img src="{{asset('static/img/content_img/search_img.jpg')}}" alt="">
            </div>
            <div class="search-item-info">
              <h3><a href="">Are App Developers Enabled Enough in 
the Internet of Things Era?</a></h3>
              <span>16 Jan, 09:46pm</span>
            </div>
          </li>

          <li class="search-item">
            <div class="img-w">
              <img src="{{asset('static/img/content_img/search_img.jpg')}}" alt="">
            </div>
            <div class="search-item-info">
              <h3><a href="">Are App Developers Enabled Enough in 
the Internet of Things Era?</a></h3>
              <span>16 Jan, 09:46pm</span>
            </div>
          </li>

          <li class="search-item">
            <div class="img-w">
              <img src="{{asset('static/img/content_img/search_img.jpg')}}" alt="">
            </div>
            <div class="search-item-info">
              <h3><a href="">Are App Developers Enabled Enough in 
the Internet of Things Era?</a></h3>
              <span>16 Jan, 09:46pm</span>
            </div>
          </li>

          <li class="search-item">
            <div class="img-w">
              <img src="{{asset('static/img/content_img/search_img.jpg')}}" alt="">
            </div>
            <div class="search-item-info">
              <h3><a href="">Are App Developers Enabled Enough in 
the Internet of Things Era?</a></h3>
              <span>16 Jan, 09:46pm</span>
            </div>
          </li>

          <li class="search-item">
            <div class="img-w">
              <img src="{{asset('static/img/content_img/search_img.jpg')}}" alt="">
            </div>
            <div class="search-item-info">
              <h3><a href="">Are App Developers Enabled Enough in 
the Internet of Things Era?</a></h3>
              <span>16 Jan, 09:46pm</span>
            </div>
          </li>

          <li class="search-item">
            <div class="img-w">
              <img src="{{asset('static/img/content_img/search_img.jpg')}}" alt="">
            </div>
            <div class="search-item-info">
              <h3><a href="">Are App Developers Enabled Enough in 
the Internet of Things Era?</a></h3>
              <span>16 Jan, 09:46pm</span>
            </div>
          </li>

          <li class="search-item">
            <div class="img-w">
              <img src="{{asset('static/img/content_img/search_img.jpg')}}" alt="">
            </div>
            <div class="search-item-info">
              <h3><a href="">Are App Developers Enabled Enough in 
the Internet of Things Era?</a></h3>
              <span>16 Jan, 09:46pm</span>
            </div>
          </li>

          <li class="search-item">
            <div class="img-w">
              <img src="{{asset('static/img/content_img/search_img.jpg')}}" alt="">
            </div>
            <div class="search-item-info">
              <h3><a href="">Are App Developers Enabled Enough in 
the Internet of Things Era?</a></h3>
              <span>16 Jan, 09:46pm</span>
            </div>
          </li>

          <li class="search-item">
            <div class="img-w">
              <img src="{{asset('static/img/content_img/search_img.jpg')}}" alt="">
            </div>
            <div class="search-item-info">
              <h3><a href="">Are App Developers Enabled Enough in 
the Internet of Things Era?</a></h3>
              <span>16 Jan, 09:46pm</span>
            </div>
          </li>

          <li class="search-item">
            <div class="img-w">
              <img src="{{asset('static/img/content_img/search_img.jpg')}}" alt="">
            </div>
            <div class="search-item-info">
              <h3><a href="">Are App Developers Enabled Enough in 
the Internet of Things Era?</a></h3>
              <span>16 Jan, 09:46pm</span>
            </div>
          </li>


        </ul>
        <div class="pagenav">
          <a class="prevpage" href="">« Previous page</a>
          <a class="nextpage" href="">Next page »</a>
        </div>
      </div>
    </div>
  </div>
<script src="{{asset('static/js/main.min.js')}}"></script>
<!--<script src="{{asset('static/js/libs/scripts/jquery.syntaxhighlighter.min.js')}}" type="text/javascript"></script>
-->
<script type="text/javascript" src="http://balupton.github.com/jquery-syntaxhighlighter/scripts/jquery.syntaxhighlighter.min.js"></script>

<script>
  $(".index-content").gridalicious({
    width: 300,
    animate: true,
    gutter: 16
  });
  @yield('script')
</script>
</body>
</html>
    
   
