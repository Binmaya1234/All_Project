<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Start your development with a Dashboard for Node.js.">
      <meta name="author" content="Creative Tim">
      <title>SDIB</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="{{ asset('images/sdiblogo.png') }}" rel="icon" type="image/png">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <link href="{{ asset('css/nucleo.css') }}" rel="stylesheet">
      <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
      <link type="text/css" href="{{ asset('css/argon.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/allPaid.min.css') }}">
      <link type="text/css" href="https://argon-dashboard-nodejs.creative-tim.com/public/css/argon.min.css?v=1.0.0" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   </head>
     <div class="control">
      
      <input type="hidden" id="scroll-check" checked>
    
      <input type="hidden" id="keyboard-check" checked>
    </div>
   <body class="bg-default">
      <div class="main-content">
         <div class="header bg-gradient-primary py-7 py-lg-8">
            <div class="container">
               <div class="header-body text-center mb-7">
                  <div class="row justify-content-center">
                  </div>
               </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
               <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
               </svg>
            </div>
         </div>
         <div class="container mt--8 pb-5" style="margin-top: -17rem!important; padding-bottom: 1rem!important;">
            <div class="row justify-content-center">
               <div class="col-lg-5 col-md-7">
                  <div class="card bg-secondary shadow border-0">
                     <center><img class="img-div" src="{{asset('image')}}/sdib-remove-bg.png" width="40%" style="margin-top: 17px;"></center>
                     <div class="card-header bg-transparent pb-5" style="padding: 0.25rem 1.5rem!important;     padding-bottom: 2rem!important;">
                     <center><h4 style="margin-top:20px;">Sick Bay</h4></center>
                        <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
                        <div class="btn-wrapper text-center">
                           <a href="#" class="btn btn-neutral btn-icon">
                           <span class="btn-inner--icon"><i class="fab fa-microsoft"></i></span>
                           <span class="btn-inner--text">Microsoft</span>
                           </a>
                           
                        </div>
                     </div>
                     <div class="card-body px-lg-5 py-lg-5" style="padding-bottom: 1rem!important;">
                        <div class="text-center text-muted mb-4" style="margin-top: -19px!important;">
                           <small>Or sign in with credentials</small>
                        </div>
                            @if(count($errors->all()))
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Alert!</strong> {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                        
                         <form role="form" method="POST" action="{{ route('admin.login') }}">
                            {!! csrf_field() !!}
                           <div class="form-group mb-3">
                              <div class="input-group input-group-alternative">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text col-form-label text-md-right" ><i class="fa fa-envelope"></i></span>
                                 </div>
                                 <input class="form-control" id="email" placeholder="Enter Your Email" type="text" name="email" autofocus required>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="input-group input-group-alternative">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                 </div>
                                 <input class="form-control" type="password" placeholder="Password" name="password" autofocus required>
                              </div>
                           </div>
                           <div class="custom-control custom-control-alternative custom-checkbox">
                              <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                           </div>
                           <div class="text-center">
                              <button type="submit" class="btn btn-primary my-4" style="margin-top: -0.5rem!important;">Sign in</button>
                    
                              <!--<a href="{{asset('/register')}}"><button type="button" class="btn btn-danger my-4" style="margin-top: -0.5rem!important;">Register</button></a>-->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <!--<script src="{{ asset('js/jquery.min.js') }}"></script>-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="https://argon-dashboard-nodejs.creative-tim.com/public/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"78c782ea49200d9a","version":"2022.11.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
       <script>
        $(document).ready(function () {
            $('.navbar-default .navbar-nav li').removeClass('active');
            $('.navbar-default .navbar-nav li.login').addClass('active');
        });

    </script>
    <script>
    $(document).ready(function() {
       
     setTimeout(function(){
        $(".alert-dismissable").hide();
    }, 2000);
    
    });
    </script>
   <script>
          const scrollCheck = document.querySelector("#scroll-check");
const keyboardCheck = document.querySelector("#keyboard-check");

document.addEventListener("keydown", function (e) {
  if (
    keyboardCheck.checked &&
    e.ctrlKey &&
    (e.keyCode == "61" ||
      e.keyCode == "107" ||
      e.keyCode == "173" ||
      e.keyCode == "109" ||
      e.keyCode == "187" ||
      e.keyCode == "189")
  ) {
    e.preventDefault();
  }
});
document.addEventListener(
  "wheel",
  function (e) {
    if (scrollCheck.checked && e.ctrlKey) {
      e.preventDefault();
    }
  },
  {
    passive: false
  }
);

      </script>
    
   </body>
</html>