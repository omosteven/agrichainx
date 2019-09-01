<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width">
<meta name="description" content="Agrichainx - <b>Powering global agricultural supply chain and food security.</b> Agrichainx is a blockchain and internet of things ecosystem that simplifies and streamlines agricultural commodities trade, supply chain, value chain, food security, international collaboration, contracting, logistics, financing and payment for all stakeholders</b>"/>
<link rel="shortcut icon" href="../img/11 (2).png" type="image/logo">
<header style="z-index:999">


  <div class="container">
    <div class="branding">
      <a href="About.php"> <img class="logo" style="padding-top:5px;" width="150px" src="../img/11 (2).png" alt=""></a>


      <div class="dropdowna">
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

          <a href="articles.php">
            <h2>Article</h2>
          </a>
          <center>


            <a href="news.php" class="current">
              <h2>News</h2>
            </a>

            <a href="events.php">
              <h2>Events</h2>
            </a>

            <a href="videos.php">
              <h2>Videos</h2>
            </a>
            <a href="https://agrichainx.com" class="current">
              <h2>Agrichainx</h2>
            </a>
            <?php
            if (!empty($_SESSION['agrichainxmail']) and $_SESSION['user'] == "ADMIN") {
              echo '<a href="publish.php"> <h2>Publish</h2></a>';
              echo '<a href="posts.php"> <h2>Posts</h2></a>';
            }
            ?>
            <a>
              <h2>
                <?php
                if (!empty($_SESSION['agrichainxmail'])) {
                  if ($_SESSION['user'] == "ADMIN") {
                    $display = substr($_SESSION['agrichainxfirstname'], 0, 1) . '.' . substr($_SESSION['agrichainxlastname'], 0, 1) . '->' . "ADMIN";
                  } else {
                    $display = substr($_SESSION['agrichainxfirstname'], 0, 1) . '.' . substr($_SESSION['agrichainxlastname'], 0, 1);
                  }
                  $display = strtoupper($display);
                  echo $display;
                }
                ?>
              </h2>
            </a>
          </center>





          </a>

        </div>

        <div id="main" style="display:inline;">

          <span style="font-size:30px;cursor:pointer; float:Right; display:inline; padding-top:13px" onclick="openNav()"><i class="fas fa-bars" style="color:#ffffff "></i></span>
        </div>

      </div>


      <nav style="font-family: cursive;">
        <ul>
          <li class="current"><a href="https://Agrichainx.com">Agrichainx</a></li>

          <li><a href="articles.php">Article</a></li>

          <li class="current"><a href="news.php">News</a></li>

          <li><a href="events.php">Events</a></li>

          <li><a href="videos.php">Videos</a></li>
          <?php
          if (!empty($_SESSION['agrichainxmail']) and $_SESSION['user'] == "ADMIN") {
            echo '<li><a href="publish.php">Publish</a></li>';
            echo '<li><a href="posts.php">Posts</a></li>';
          }
          ?>
          <li>
            <i class="fa fa-user" style='color:white'></i><span>
              <?php
              if (!empty($_SESSION['agrichainxmail'])) {
                if ($_SESSION['user'] == "ADMIN") {
                  $display = substr($_SESSION['agrichainxfirstname'], 0, 1) . '.' . substr($_SESSION['agrichainxlastname'], 0, 1) . '->' . "ADMIN";
                } else {
                  $display = substr($_SESSION['agrichainxfirstname'], 0, 1) . '.' . substr($_SESSION['agrichainxlastname'], 0, 1);
                }
                $display = strtoupper($display);
                echo $display;
              }
              ?>
            </span>
          </li>
        </ul>

      </nav>






    </div>

  </div>


</header>