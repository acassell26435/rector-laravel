<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en">
<!-- <![endif]-->
<!-- head -->
<head>
<title>
  @if ($contacts)
    @foreach ($contacts as $contact)
      @for ($i=1; $i <= 1; $i++)
        {{ $contact->c_name }}
      @endfor
    @endforeach
  @else
    Car Wash
  @endif
</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Auto Plus" />
<meta name="keywords" content="car wash, html template, car wash template, auto plus, car repair, auto wash, auto detail, auto detailing, car, cleaning, mechanic, repair, wash, car service, workshop">
<meta name="author" content="Media City" />
<meta name="MobileOptimized" content="320" />
<link rel="icon" type="image/icon" href="images/favicon/favicon.ico"> <!-- favicon-icon -->
<!-- theme style -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="{{ asset('css/icon-font.css') }}" rel="stylesheet" type="text/css"/> <!-- icon-font css -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Poppins:400,500,700" rel="stylesheet"> <!-- google font -->
<link href="{{ asset('css/menumaker.css') }}" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="{{ asset('css/datepicker.css') }}" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/> <!-- custom css -->
<!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader -->
  <div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader -->
<!--  navigation -->
  <div class="nav-bar comming-soon-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="logo">
            @if ($contacts)
              @foreach ($contacts as $contact)
                @for ($i=0; $i < 1; $i++)
                  <a href="{{ url('/') }}"><img src="{{ asset('images/logo') }}/{{ $contact->logo }}" class="img-responsive" alt="logo"></a>
                @endfor
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end navigation -->
<!-- error block -->
  <div id="comming-soon" class="comming-soon-main text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="comming-soon-block">
            <h1 class="comming-soon-heading">Under Construction</h1>
            <p>We're currently working on creating something fantastic, We'll be here soon.</p>
            <div class="comming-block">
              <div class="countdown"><div class="comming-countdown" data-countdown="2017/06/01"></div></div>
            </div>
            <form id="subscribe-form" class="form-inline subscribe-form">
              <div class="form-group">
                <input type="email" class="form-control" id="mc-email" placeholder="Enter Your E-mail">
              </div>
              <button type="submit" class="btn btn-default">Subscribe Now</button>
              <label for="mc-email"></label>
            </form>
          </div>
          <div class="social-icon">
            <ul>
              <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- end error block -->
<!-- jquery -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script> <!-- jquery library js -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script> <!-- bootstrap js -->
<script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script> <!-- owl carousel js -->
<script type="text/javascript" src="{{ asset('js/jquery.ajaxchimp.js') }}"></script> <!-- mail chimp js -->
<script type="text/javascript" src="{{ asset('js/smooth-scroll.js') }}"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script> <!-- magnify popup js -->
<script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="{{ asset('js/jquery.counterup.js') }}"></script> <!-- facts count js-->
<script type="text/javascript" src="{{ asset('js/menumaker.js') }}"></script> <!-- menu js-->
<script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script> <!-- progress bar js -->
<script type="text/javascript" src="{{ asset('js/jquery.countdown.js') }}"></script>  <!-- event countdown js -->
<script type="text/javascript" src="{{ asset('js/price-slider.js') }}"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js') }}"></script> <!-- bootstrap datepicker js-->
<script type="text/javascript" src="{{ asset('js/jquery.elevatezoom.js') }}"></script> <!-- image zoom js-->
<script type="text/javascript" src="{{ asset('js/theme.js') }}"></script> <!-- custom js -->
<!-- end jquery -->
</body>
<!--body end -->
</html>
