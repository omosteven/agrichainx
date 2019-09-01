<?php
session_start();
if (empty($_SESSION['agrichainxmail']) and empty($_SESSION['user'])) {
    $redrr = '../login.php';
    header("location:$redrr");
}
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
        body {
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
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }

        .section-2 {

            padding: 0px 0%;
            text-align: center;
            color: #666;

        }



        .vid-bgr-content {

            back z-index: 1;
            opacity: 0.8;
        }


        .vid-bgr-container {

            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }


        .color-overlay {
            /*background-color: green;*/
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            opacity: 0.8;
        }



        .dropdown-content img {
            width: 10%
        }

        @media (max-width:500px) {
            .dropdown-content img {
                width: 50%
            }

        }
    </style>
</head>

<body>

    <?php
    include('header-blog.php');
    include('../agricdb.php');
    ?>

    <main style="z-index:-1; ">
        <span id="top"></span>

        <section class="section-3">
            <div class="">

                <section class="section-3">
                    <div class="container">
                        <br><br><br>

                        <?php
                        if (!empty($_GET['News']) or !empty($_GET['Article']) or !empty($_GET['Event'])) {
                            $fetchNews = mysqli_query($db, "SELECT * FROM blogpost WHERE URL = '$_GET[News]' or URL = '$_GET[Article]' or URL = '$_GET[Event]'");
                            if (mysqli_num_rows($fetchNews)) {
                                $post = mysqli_fetch_array($fetchNews);
                                echo "<h1>$post[TITLE]</h1>";
                                echo "<span style='float:left; color:#666; color:#666'>$post[POSTEDDATE]</span>";
                                echo "<span style='float:right; color:#666; color:#666'>$post[TYPE]</span>";
                                echo "<br><br><div class=''>
                                <img src='blog-contents/$post[HEADERFILE]' style='width:100%' alt=''>
                            <p></p>";
                                echo "<section style='text-align:justify'>$post[CONTENT]
                        </section>";
                            } else {
                                echo "<div style='text-align:center;color:red;font-size:1.5em'>Sorry, This link is either incorrect or the contents in it is expired</div>";
                            }
                        } else {
                            echo "<div style='text-align:center;color:red;font-size:1.5em'>Sorry, This link is either incorrect or the contents in it is expired</div>";
                        }
                        ?>

                        <br><br><br>
                    </div>

                </section>
        </section>
    </main>

    <?php
    include('footer-blog.php');
    ?>
</body>

</html>