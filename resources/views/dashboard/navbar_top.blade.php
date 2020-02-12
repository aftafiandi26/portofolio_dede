<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

       <title>Dede Aftafiandi - @yield('title')</title>       
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> 
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="icon" type="image/png" href="{{asset('storage/app/public/iconic/iconic_2.png')}}" />
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/scrolling-nav.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">    

<style type="text/css">

body{
  font-family: initial;
}
.div {
  display:inline-block;
  overflow:hidden;
  white-space:nowrap;
}

.div:first-of-type {  
  animation: showup 7s infinite;
}

.div:last-of-type {
  width:0px;
  animation: reveal 7s infinite;
}

.div:last-of-type .span {
  margin-left:-355px;
  animation: slidein 7s infinite;
}

@keyframes showup {
    0% {opacity:0;}
    20% {opacity:1;}
    80% {opacity:1;}
    100% {opacity:0;}
}

@keyframes slidein {
    0% { margin-left:-800px; }
    20% { margin-left:-800px; }
    35% { margin-left:0px; }
    100% { margin-left:0px; }
}

@keyframes reveal {
    0% {opacity:0;width:0px;}
    20% {opacity:1;width:0px;}
    30% {width:155px;}
    80% {opacity:1;}
    100% {opacity:0;width:155px;}
}


.p {
  font-size:12px;
  color:#999;
  margin-top:200px;
}
</style>
    <body  id="page-top">
        @section('navbar_top')
          <div class="container btn-sm">
            <div class="row">
              <div class="col-lg-12">
                 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #743f3e;">
                  <div class="container">               
                    <a class="navbar-brand js-scroll-trigger div" href="#page-top">Dede <span class="span">Aftafiandi</span></a>                   
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                      <ul class="navbar-nav ml-auto" >
                        <li class="nav-item">
                          <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link js-scroll-trigger" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link js-scroll-trigger" href="#Education">Education & Experience</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link js-scroll-trigger" href="#skill">Skill & Language</a>
                        </li> 
                      </ul>
                    </div>
                  </div>
                </nav>    
              </div>
            </div>
          </div>          
        @show 
     
       <div class="container-fluid">
          @yield('content')
       </div>    

        @section('footer')
         <footer class="py-5" style="background-color: #743f3e;">
              <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website {{date('Y')}}</p>
              </div>        
            </footer>
           <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
           <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>         
           <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>          
           <script src="{{asset('js/scrolling-nav.js')}}"></script>
           @show
      
    </body>
</html>   

