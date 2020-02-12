@extends('dashboard.navbar_top')

@section('title', 'Home')

@section('navbar_top')
@parent
   
@endsection
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style type="text/css">
.lingkaran1{
  width: 150px;
  height: 180px;
  background: #dac52c;
  border-radius: 100%;
}
</style>
@section('content')
  <header class="text-white" id="home">
    <div class="row">
      <div class="col-lg-9 mx-auto d-block img-fluid" style="margin-top: -110px; height: 700px; background-image: url({{asset('storage/app/public/wallpaper/gambar_1.jpg')}}); background-size: cover; opacity: 0.7;"> 
             @if (session('status'))
                <div class="alert alert-primary alert-dismissible fade show" style="margin-top: 10px;">
                   <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ session('status') }}
                </div> 
             @endif
             @if (session('danger'))
                <div class="alert alert-danger alert-dismissible fade show" style="margin-top: 10px;">
                   <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ session('danger') }}
                </div> 
             @endif
           

      <div class="col-lg-12 text-white mx-auto" style="margin-top: -50px;">
        <label style="margin-top: 150px;" class="float-right">
          <h3>HELLO, I'M</h3>
          <br>
          <h1 style="margin-top: -25px; "><b>DEDE AFTAFIANDI</b></h1>
          <br>
          <h4 style="margin-top: -25px; ">Junior Programmer</h4>
        </label>
      </div>
      </div>
      <div class="col-lg-3" style="margin-top: -110px; height: 700px; background-color: #854847;">
        <div class="row">
          <div class="col-lg-6 mx-auto text-center" style="margin-top: 100px;">
            <img src="{{asset('storage/app/public/wallpaper/photo_profile.jpg')}}" alt="photo_profile" class="lingkaran1">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center" style="margin-top: 20px;">
            <label >        
              <h4 ><b>DEDE AFTAFIANDI</b></h4>
              <br>
              <h5 style="margin-top: -25px; ">Junior Programmer</h5>
            </label>
          </div>
        </div>
        <div class="row" style="margin-top: 100px;">
          <div class="col-lg-12 text-center" style="word-spacing: 15px;">         
          <a href="https://www.instagram.com/aftafiandi/" style="color: white;" data-toggle="tooltip" data-placement="left" title="instagram/aftafiandi" target="_blank"><i style='font-size:24px' class='fab'>&#xf16d;</i></a>         
          <a href="https://www.facebook.com/DedeAfafiandi" style="color: white;" data-toggle="tooltip" data-placement="top" title="Facebook/aftafiandi" target="_blank"><i style='font-size:24px' class='fab'>&#xf39e;</i></a>
          <a href="https://www.linkedin.com/in/dede-aftafiandi-b0a21516b/" style="color: white;" data-placement="bottom" data-toggle="tooltip" title="linkedin.com/aftafiandi" target="_blank"><i style='font-size:24px' class='fab'>&#xf08c;</i></a>

           <a href="#" style="color: white;" data-toggle="modal" data-target="#myModal"><i style='font-size:24px' class='fas'>&#xf0e0;</i></a>
          </div>
        </div>
       </div>
    </div>
  </header> 

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>About Me</h2>
          <p class="lead">With a curious desire, I ventured to plunge into the world of programming. I have the expertise and background to be the professional needed to deep dive into the world of programming. As an enthusiastic and highly motivated player with good communication to create and build an application. Browse my site to see everything I created.</p>         
        </div>
      </div>
    </div>
  </section>

  <section id="Education" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="row">
            <div class="col-lg-6">
              <h2>Education</h2>     
                <ul>
                  <li><p class="lead">2012 - 2016</p></li>
                  <ul>
                    <li>University Putera Indonesia, Padang - West Sumatera</li>
                    <li>Bachelor of Computer: Informatics Engineering</li>
                    <li>GPA: 3.16/4.00</li>
                  </ul>
                  <li><p class="lead">2009 - 2012</p></li>
                  <ul>
                     <li>SMK N 4 Padang - West Sumatera</li>
                     <li>Major: Design Communication Visual</li>
                  </ul>
                </ul>              
            </div>
            <div class="col-lg-6 mx-auto">
              <h2>Experience</h2>
              <ul>
                <li><p class="lead">Kinema Systrans Multimedia</p></li>
                  <ul>
                   <li>2018 - {{date('Y')}}
                   <ul>
                     <li class="text-bold">Wide Information System <br> <a href="#" class="float-left"><img src="{{asset('storage/app/public/iconic/wis.png')}}" alt="Wide Informatiions System" height="40px" class="rounded"></a></li>
                   </ul>                   
                   </li>
                  </ul>               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="skill">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Skill</h2>          
          <div class="container">
            <div class="row">
            <div class="col-lg-12">@include('tableSkill')</div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@include('modal.emails.modal_email')
@endsection
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

