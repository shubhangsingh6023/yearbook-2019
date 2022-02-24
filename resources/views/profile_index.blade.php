<!DOCTYPE html>
<html lang="en">
<head>

      <!-- ==============================================
    Title and Meta Tags
    =============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />   
    <link rel="icon" href="{{asset('img/navbar/kgplogo1.png')}}" sizes="32x32" type="image/gif"/>
      <!-- ==============================================
    CSS
    =============================================== -->
    
    <link type="text/css" href="{{ asset('css/demos/photo.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/demos/timeline.css') }}" rel="stylesheet" />

    
    <!-- ==============================================
    Feauture Detection
    =============================================== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  
    
    <style>
    
    .cover-img{
      background-image: url('img/bg/collage.jpg');
      height:30vw;
      background-size: 100% 100%;
      background-repeat: no-repeat;

    }
    .back{
      background-image: url('img/bg/bgbg.jpg');
      background-attachment: fixed;
    }
    @media (min-width: 768px) { 
      .details-box{
        margin-right: -120px;
      }
     }
  </style>
</head>

<body>

     <!-- ==============================================
     Navigation Section
     =============================================== -->  
     @extends('navbar')

   <!-- ==============================================
   Navbar Second Section
   =============================================== -->
   

   <!-- ==============================================
   News Feed Section
   =============================================== --> 



@section('main-content')
<div class="main-container">
  <div class="profile">
    <img src="img/bg/collage.jpg" alt="" class="profile-cover">

    <div class="profile-avatar">
      <div class="profile-photo">
        <img src="<?php if (!empty(Auth::user()->pro_pic)){echo Auth::user()->pro_pic; } else { echo 'index.png';}?>" alt="" class="profile-img">
        <div class="profile-name">{{Auth::user()->name}}</div>
      </div>
      <div class="caption">
        @if(!empty(Auth::user()->view_self))
        {{Auth::user()->view_self}}
        @else
        Your Caption Here!
        @endif
      </div> 
      <div class="timeline">
        <div class="timeline-left">
          <div class="intro box">
            <div class="intro-title">
              Introduction
            </div>
            <div class="info">
              <div class="info-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 503.889 503.889" fill="currentColor">
                  <path d="M453.727 114.266H345.151V70.515c0-20.832-16.948-37.779-37.78-37.779H196.517c-20.832 0-37.78 16.947-37.78 37.779v43.751H50.162C22.502 114.266 0 136.769 0 164.428v256.563c0 27.659 22.502 50.161 50.162 50.161h403.565c27.659 0 50.162-22.502 50.162-50.161V164.428c0-27.659-22.503-50.162-50.162-50.162zm-262.99-43.751a5.786 5.786 0 015.78-5.779h110.854a5.786 5.786 0 015.78 5.779v43.751H190.737zM32 164.428c0-10.015 8.147-18.162 18.162-18.162h403.565c10.014 0 18.162 8.147 18.162 18.162v23.681c0 22.212-14.894 42.061-36.22 48.27l-167.345 48.723a58.482 58.482 0 01-32.76 0L68.22 236.378C46.894 230.169 32 210.321 32 188.109zm421.727 274.725H50.162c-10.014 0-18.162-8.147-18.162-18.161V253.258c8.063 6.232 17.254 10.927 27.274 13.845 184.859 53.822 175.358 52.341 192.67 52.341 17.541 0 7.595 1.544 192.67-52.341 10.021-2.918 19.212-7.613 27.274-13.845v167.733c.001 10.014-8.147 18.162-18.161 18.162z" /></svg>
                Roll No. : <a href="#"><?php echo Auth::user()->rollno; ?></a>
              </div>
              <div class="info-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                  <path d="M9 22V12h6v10" />
                </svg>
                Hall of Residence: <a href="#"><?php echo Auth::user()->HOR; ?></a>
              </div>
              <div class="info-item">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                  <path d="M437 75C388.7 26.6 324.4 0 256 0S123.3 26.6 75 75C26.6 123.3 0 187.6 0 256s26.6 132.7 75 181c48.3 48.4 112.6 75 181 75s132.7-26.6 181-75c48.4-48.3 75-112.6 75-181s-26.6-132.7-75-181zM252.4 481.9c-52-.9-103.7-19.5-145.2-55.8L256 277.2l21.7 21.8a165.9 165.9 0 00-35.7 87c-3.5 30.5 0 63.3 10.4 95.9zM299 320.3l105.7 105.8a224.8 224.8 0 01-121.3 54.1C262 419.5 268 360.3 299 320.3zm21.2-21.2c40-31 99.2-37 160-15.6A224.8 224.8 0 01426 404.8zM482 252.4a231.7 231.7 0 00-96-10.4 165.9 165.9 0 00-87 35.7L277.3 256l148.9-148.8c36.3 41.5 55 93.2 55.8 145.2zm-290.2-39.5c-40 31-99.2 37-160 15.6A224.8 224.8 0 0186 107.2zm-84.5-127a224.8 224.8 0 01121.3-54.1C250 92.5 244 151.7 213 191.7zM270 126c3.5-30.5 0-63.3-10.4-95.9 52 .9 103.7 19.5 145.2 55.8L256 234.8 234.3 213a165.9 165.9 0 0035.7-87zM30 259.6a242 242 0 0072.7 11.7c7.8 0 15.6-.5 23.2-1.3a165.9 165.9 0 0087-35.7l21.8 21.7L85.9 404.8a225.3 225.3 0 01-55.8-145.2z" /></svg>
                Email: <a href="#"><?php if (Auth::user()->email) { echo Auth::user()->email;}else{echo "No Email Provided";}?></a>
              </div>
              <div class="info-item">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                  <path d="M437 75C388.7 26.6 324.4 0 256 0S123.3 26.6 75 75C26.6 123.3 0 187.6 0 256s26.6 132.7 75 181c48.3 48.4 112.6 75 181 75s132.7-26.6 181-75c48.4-48.3 75-112.6 75-181s-26.6-132.7-75-181zM252.4 481.9c-52-.9-103.7-19.5-145.2-55.8L256 277.2l21.7 21.8a165.9 165.9 0 00-35.7 87c-3.5 30.5 0 63.3 10.4 95.9zM299 320.3l105.7 105.8a224.8 224.8 0 01-121.3 54.1C262 419.5 268 360.3 299 320.3zm21.2-21.2c40-31 99.2-37 160-15.6A224.8 224.8 0 01426 404.8zM482 252.4a231.7 231.7 0 00-96-10.4 165.9 165.9 0 00-87 35.7L277.3 256l148.9-148.8c36.3 41.5 55 93.2 55.8 145.2zm-290.2-39.5c-40 31-99.2 37-160 15.6A224.8 224.8 0 0186 107.2zm-84.5-127a224.8 224.8 0 01121.3-54.1C250 92.5 244 151.7 213 191.7zM270 126c3.5-30.5 0-63.3-10.4-95.9 52 .9 103.7 19.5 145.2 55.8L256 234.8 234.3 213a165.9 165.9 0 0035.7-87zM30 259.6a242 242 0 0072.7 11.7c7.8 0 15.6-.5 23.2-1.3a165.9 165.9 0 0087-35.7l21.8 21.7L85.9 404.8a225.3 225.3 0 01-55.8-145.2z" /></svg>
                Department: <a href="#"><?php echo Auth::user()->department; ?></a>
              </div>
            </div>
          </div>
        </div>
        <div class="timeline-right">
          <div class="album box">
            <h2>Testimonials</h2>
            <ul id='timeline'>
              <?php
    
                $dept = Auth::user()->department;
                $rollno = Auth::user()->rollno;
                $j=0;
                $i=0;
                $index=1;
    
                foreach($myviews as $view)
                {
                  $id=$view['id'];
                  echo '
                    <li class="work">
                      <input class="radio" id="work'.$index.'" name="works" type="radio" checked>
                      <div class="relative">
                        <label for="work'.$index.'">'.$view['user'].'</label>
                        <span class="date">'.$view->created_at->diffForHumans().'</span>
                        <span class="circle"></span>
                      </div>
                      <div class="content">
                        <p>
                          '.$view['views'].'
                          <br>
                          ';
                          if($view['approval']=='1'){
                            echo '<button type="button" class="status-share btn btn-danger disapprove "  data-no="'.json_encode($i).'" data-id="'.json_encode($id).'" id= "'.$id.'" >Disapprove</button>';
                          }else{
    
                            echo '<button type="button" class="status-share btn btn-success approve "  data-no="'.json_encode($i).'" data-id="'.json_encode($id).'" id= "'.$id.'" );" >Approve</button> <div class="text_show'.$i.'" style= "padding-left: 15px;"></div>';
                          }
                        
                          
                        echo '</p>
                        
                      </div>
                    </li>';
                  
    
                  $j=1;
                  $index++;
                }         
                if($j==0)
                {
    
                  echo '<div font-family: Aclonica"><h3 style="color: #fff;">No Testimonials Given!</h3></div>';
                }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>  
  </div>
  
</div>

     <!-- ==============================================
   Scripts
   =============================================== -->
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/base.js') }}"></script>
   <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.js') }}"></script>
   <script>
    $('#Slim,#Slim2').slimScroll({
      height:"auto",
      position: 'right',
      railVisible: true,
      alwaysVisible: true,
      size:"8px",
    });   
  </script>

{{-- @include('footer') --}}

</body>
</html>
<script type="text/javascript">

  function call($id)
  {
    alert($id);
  }
  $('#OpenImgUpload').click(function() {
    window.location = "{{url('/home')}}";
  });
  $('.approve').click('.approve', function(){


    var rollno = $(this).attr('id');
    var no = $(this).attr('data-no');
    var id = $(this).attr('data-id');
    var query= id;

    $.ajax({
      url: "{{ url('/approve') }}"+ '/' +id,
      type: "GET",
      data: {'id': id, 'i': no, 'rollno': rollno,},

      success: function(response)
      {
        console.log(response);
        document.getElementById(id).className = "status-share btn btn-danger disapprove app";
        document.getElementById(id).innerHTML = "Disapprove";
      },
      error: function(data)
      {

      }
    });

  }); 
  $('.disapprove').click('.disapprove',function(){

    var rollno = $(this).attr('id');
    var no = $(this).attr('data-no');
    var id = $(this).attr('data-id');
    var obj = $(this)
    var query= '1';
    console.log(obj);
    $.ajax({
      url: "{{ url('/disapprove') }}"+ '/' +id,
      type: "GET",
      data: {'id': id, 'i': no, 'rollno': rollno,},

      success: function(response)
      { 
        console.log(response);
        document.getElementById(id).className = "status-share approve btn app";
        document.getElementById(id).innerHTML = "Approve";
      },
      error: function(data)
      {

      }
    });
  }); 


</script>
@endsection