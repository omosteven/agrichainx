<div class="footer" style="    background-color: #3B5323; height:auto; width:100%; color:white;">

    <div class="container">
        <div class="">


        </div>

        <br>

        <div class="side">


            <center>

                <p> Suit 66, <br> De Avalon Plaza, <br> Utako Road Wuse Berger, <br> Abuja.</p>

        </div>
        <div class="side">


            <nav style=" width:auto; color:#999">


                <center>
                    ________________
                </center>



            </nav>

        </div>

        <div class="side">
            <center>

                <p>Appreciation. Thanks For Supporting.</p>

            </center>


        </div>
        <!--  <div class="side">
<center><button style="color: #ffffff; margin: 10px; padding: 0px 30px 0px 10px;"class=" btn button" type="button" name="button"><span class="text"  style="color:#ffffff"> <a href="pricing.html"> Pricing </a> </span></button></center>

<center><button style="color: #ffffff; margin: 10px; padding: 0px 30px 0px 10px;"class=" btn button" type="button" name="button"><span class="text"  style="color:#ffffff" > <a href="about.html"> About Us </a> </span></button></center>

<center><button style="color: #ffffff; margin: 10px; padding: 0px 30px 0px 10px;"class=" btn button" type="button" name="button"><span class="text"  style="color:#ffffff"> <a href="login.html"> Contact Us </a> </span></button></center>


</div>-->

        <div class="side">

            <center>




                <p> Get In Touch</p>






                <a href="  https://web.facebook.com/agrichaincoin/"><i class="fab fa-facebook-f"></i></a>
                <a href="  https://twitter.com/agrichaincoin"> <i class="fab fa-twitter"></i></a>

                <a href="https://www.instagram.com/agrichaincoin/"><i class="fab fa-instagram"></i></a>
                <a href=" https://www.linkedin.com/company/agrichaincoins/"> <i class="fab fa-linkedin-in"></i></a>

                <a href="https://t.me/joinchat/ERFdJkzw5JT7I9nFGoP8yw"><i class="fab fa-telegram-plane"></i></a>
                <a href="https://www.reddit.com/r/agrichaincoin"> <i class="fab fa-reddit-alien"></i></a>




            </center>


        </div>

        <div class="side">

            <center>


                <p> © 2019 All Rights Reserved | Made in NIG </p>





            </center>


        </div>




    </div>

</div>
<script src="https://unpkg.com/scrollreveal"></script>

<script type="text/javascript">
    ScrollReveal().reveal('.row');
</script>
<!-- javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript -->
<!-- javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript -->
<!-- javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript -->
<!-- javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript -->
<!-- javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript -->
<!-- javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript -->
<!-- javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript -->
<!-- javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript javascript -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.tabs').tabs();
        $('.datepicker').datepicker({
            disableWeekends: true
        });
        $('.tooltipped').tooltip();
    });
</script>


<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>


<script type="text/javascript">
    var Index = 1;
    Slides(Index);

    function Slides(n) {
        var k;
        var a = document.getElementsByClassName('quote-slide');
        if (n > a.length) {
            Index = 2
        }
        if (n < 1) {
            Index = a.length
        };
        for (var k = 0; k < a.length; k++) {
            a[k].style.display = 'none';
        }
        a[Index - 1].style.display = 'block';
    }
    var my = 0;
    carousel();

    function carousel() {
        var k;
        var y = document.getElementsByClassName('quote-slide');
        for (var k = 0; k < y.length; k++) {
            y[k].style.display = 'none';
        }
        my++;
        if (my > y.length) {
            my = 1
        }
        y[my - 1].style.display = 'block';
        setTimeout(carousel, 12000);
    }
</script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>


<script src="..js/jquery.2.2.3.min.js"></script>
<script src="..js/popper.min.js"></script>
<script src="..js/bootstrap.min.js"></script>
<script src="../owl-carousel/owl.carousel.min.js"></script>