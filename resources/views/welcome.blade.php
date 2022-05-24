<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lawyer</title>
    <link rel="shortcut icon" href="{{asset('assets1/images/fav.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('assets/images/fav-icon.png')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets1/css/responsive.css')}}" />
</head>
<body>
{{-- <header>
        <div class="_main_nav">
            <div class="container">
                <div class="row">
                    <div class="nav">
                        <div class="logo-01">
                            <h1>lawyer</h1>
                        </div>
                        <div class="menu-toggle"></div>
                        <div class="my-nav">
                            <div class="menu">
                              <ul>
                                <li class="logo"><a href="index.html">Lawyer</a></li>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="services.html"></a></li>
                                <li><a href="blog.html"></a></li>

                                <li class="link-01"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Se Connecter</a></li>
                                <li class="link-01"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>

                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header> --}}

<section class="slider" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="slider-content">
                    <h2>Power et </h2>
                    <p><span>Application sophistiquée pour la gestion de vos poulaillers(Aviculture).</span><br>
                        <span>simple utilisation,</span><br><span>rapidité de traitements</span><span>et securise</span>
                    </p>
                    <div class="btn-01">
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Se Connecter</a>
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
<script src="{{asset('assets1/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets1/js/popper.min.js')}}"></script>
<script src="{{asset('assets1/js/bootstrap.min.js')}}"></script>
<script>
      $(document).ready (function(){
        $('.menu-toggle').click(function(){
          $('.menu-toggle').toggleClass('active')
          $('.menu').toggleClass('active')
        })
      })
</script>

 <script>
      $( () => {

        //On Scroll Functionality
        $(window).scroll( () => {
          var windowTop = $(window).scrollTop();
          windowTop > 50 ? $('header').addClass('og-hf') : $('header').removeClass('og-hf');
        });
      });
    </script>
</html>
