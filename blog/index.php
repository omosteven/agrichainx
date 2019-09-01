<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="Bokehlicia-Captiva-Web-soundcloud.ico" type="image/x-icon">


<title>Agrichainx | Blog-News</title>
<link rel="stylesheet" href="css/w3c.css">
<script src="js/ajax.js"></script>
<script src="js/responsiveslides.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="css/dropdown.css">
<link rel="stylesheet" href="css/demo.css">
<link rel="stylesheet" href="css/main.css">


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome5.1.0.min.css">


<link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="owl-carousel/owl.theme.css">
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">



<style>

body{
  font-family: 'Raleway', sans-serif;

}


/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;

  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.section-2{

  padding: 0px 0%;
  text-align: center;
color: #666;

}



.vid-bgr-content{

back
z-index: 1;
opacity:0.8;
}


.vid-bgr-container{

position: absolute;
top: 0;
left: 0;
width: 100%;
}


.color-overlay{
  /*background-color: green;*/
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: auto;
  opacity: 0.8;
}



.dropdown-content img video{
  width: 10%
}

@media (max-width:500px) {
  .dropdown-content img video{
    width: 50%
  }

}

</style>
</head>

<body>

<!--
      <div class="pre-loader">
        <div class="sk-fading-circle">
          <div class="sk-circle1 sk-circle"></div>
          <div class="sk-circle2 sk-circle"></div>
          <div class="sk-circle3 sk-circle"></div>
          <div class="sk-circle4 sk-circle"></div>
          <div class="sk-circle5 sk-circle"></div>
          <div class="sk-circle6 sk-circle"></div>
          <div class="sk-circle7 sk-circle"></div>
          <div class="sk-circle8 sk-circle"></div>
          <div class="sk-circle9 sk-circle"></div>
          <div class="sk-circle10 sk-circle"></div>
          <div class="sk-circle11 sk-circle"></div>
          <div class="sk-circle12 sk-circle"></div>
        </div>
      </div>


      <script type="text/javascript">
      (function($){
        'use strict';
          $(window).on('load', function () {
              if ($(".pre-loader").length > 0)
              {
                  $(".pre-loader").fadeOut("slow");
              }
          });
      })(jQuery)



      </script>
-->
<!-- header header header header header header header header header header header headerheader header header header -->
<!-- header header header header header header header header header header header headerheader header header header -->
<!-- header header header header header header header header header header header headerheader header header header -->
<!-- header header header header header header header header header header header headerheader header header header -->
<!-- header header header header header header header header header header header headerheader header header header -->
<!-- header header header header header header header header header header header headerheader header header header -->

<?php
include('header-blog.php');
include('../agricdb.php');
?>
<!--  Content  -->



<!-- main main main main main main main main main main main main main main main main main main main main main main-->
<!-- main main main main main main main main main main main main main main main main main main main main main main-->
<!-- main main main main main main main main main main main main main main main main main main main main main main-->
<!-- main main main main main main main main main main main main main main main main main main main main main main-->
<!-- main main main main main main main main main main main main main main main main main main main main main main-->
<!-- main main main main main main main main main main main main main main main main main main main main main main-->
<!-- main main main main main main main main main main main main main main main main main main main main main main-->



<main style="z-index:-1; ">
<span id="top"></span>

<br><br>
<section class="section-4">

<div class="container">
<br><br>
<center>
<h1>Be the first to get the news!</h1> <br>

<form class="" action="index.html" method="post">
<input type="text" name=""  style="height:60px" value="" placeholder="Enter Your Email"><br>
<input type="button" width="30%"class="button" name="" value="subscribe" width="30%">
</form>

</center>                                                                                          </div>
<br>

<br>

  </section>






          <section class="section-3">
          <div class="container">
            <section>
            <br><br> <center>  <h1>NEWS</h1> <center> <br><br>
            </section>

          <center><h1></h1></center>
          
            <?php
            $fetchPost = mysqli_query($db,"SELECT * FROM blogpost WHERE PERMISSION = 1 and TYPE = 'news' ORDER BY id DESC");
            while($post = mysqli_fetch_array($fetchPost)){
              echo '<div class="row">';
              $fileType = substr($post['HEADERTYPE'],0,5);
              if($fileType == "image"){
                echo "<img src='blog-contents/$post[HEADERFILE]' style='width:100%' alt=''>";
              }else{
                $videoStream = "blog-contents/$post[HEADERFILE]";
                //$videoStream = "stream.php?stream=$videoStream";
                
                echo "<video  controls  style='width:100%'>
                <source src= '54703613_395799217643079_8359572908682510336_n.mp4' type='video/mp4'>
                </video>";
              }
              echo "<h4>$post[TITLE]</h4>";
              echo "<span style='float:left; color:#666; color:#666'>$post[POSTEDDATE]</span>
                      <span style='float:right; color:#666; color:#666'>$post[TYPE]</span>
                    <br>";
                    if(str_word_count($post['CONTENT'],0) > 25){
                      $words = str_word_count($post['CONTENT'],2);
                      $pos = array_keys($words);
                      $text = substr($post['CONTENT'],0,$pos[25]);
                      $numwords = 25;
                      $text = $text.'...';
                      //preg_match("/(\S+\s*){0,$numwords}/", $report, $regs);
                      //$text1 = trim($regs[0]);
                      }else{
                          $text = $post['CONTENT'];
                      }
              //$contents = susbtr($post['CONTENT'],0,100);
              echo "<p>$text</p>
              <!--form action ='read.php?news=$post[URL]' method='GET' name='readmore'>
              <button name='read' class='button' style='background-color:#4CAF50; margin: 10px 0;  border-color:#4CAF50;float:right; font-size:18px;' type='button'>Read More</button>
              </form-->
              <a href ='read.php?News=$post[URL]' name='read' class='button' style='background-color:#4CAF50; margin: 10px 0;  border-color:#4CAF50;float:right; font-size:18px;' type='button'>Read More</a>
              </div>";
            }
            ?>

          

          </div>
          </section>



<?php
include('footer-blog.php');
?>
</body>
</html>
