<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$title}}</title>

    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/unicons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="{{URL::asset('css/tooplate-style.css')}}">
    
  </head>
  <body>

    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><i class='uil uil-user'></i> {{$title}}</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="{{__('read.About')}}">{{__('read.About')}}</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link"><span data-hover="Projects">{{__('read.Projects')}}</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="Resume">{{__('read.Resume')}}</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contactus')}}" class="nav-link"><span data-hover="Contact">{{__('read.Contact')}}</span></a>
                    </li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        </li>
                        @else
                            <a href="{{ route('login') }}" class="nav-link"><span data-hover="Log in">Log in</span></a>

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link"><span data-hover="Register">Register</span></a>
                            </li>
                        @endif
                    @endauth
                 @endif
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        Color mode
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

@yield('homePageContent')
@yield('contactus')
    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        <p class="copyright-text text-center">Copyright &copy; 2019 Company Name . All rights reserved</p>
                        <p class="copyright-text text-center">Designed by <a href="#">Ahmed</a></p>
                    </div>
                    
               </div>
          </div>
     </footer>

   
     <script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/Headroom.js')}}"></script>
    <script src="{{URL::asset('js/jQuery.headroom.js')}}"></script>
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/smoothscroll.js')}}"></script>
    <script src="{{URL::asset('js/custom.js')}}"></script>

  </body>
</html>