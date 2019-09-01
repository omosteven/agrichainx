<header style="z-index:999">


    <div class="container">
      <div class="branding">
        <a href="../index"> <img class="logo" style="padding-top:5px;" width="100%" src="../img/11 (2).png" alt=""></a>


        <div class="dropdowna">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../index" class="current">
              <h2>Home</h2>
            </a>
            <center>


              <a href="../about">
                <h2>About</h2>
              </a>

              <a href="../solution">
                <h2>Solution</h2>
              </a>

              <a href="../resources">
                <h2>Resources</h2>
              </a>

              <a href="../blog/news">
                <h2>Blog</h2>
              </a>

              <a href="../tokensale">
                <h2>Token Sale</h2>
              </a>
              <a href="../investinequity">
                <h2>Invest In Equity</h2>
              </a>



              <?php
              if (!empty($_SESSION['agrichainxmail'])) {
                echo "<a href='../logout'> <h2>Logout</h2></a>";
              } else {
                echo "<a href='../login'> <h2>Login</h2></a>";
              }
              ?>
                <?php
                if (!empty($_SESSION['agrichainxmail'])) {
                  if ($_SESSION['user'] == "ADMIN") {
                    $display = substr($_SESSION['agrichainxfirstname'], 0, 1) . '.' . substr($_SESSION['agrichainxlastname'], 0, 1) . '->' . "ADMIN";
                  } else {
                    $display = substr($_SESSION['agrichainxfirstname'], 0, 1) . '.' . substr($_SESSION['agrichainxlastname'], 0, 1);
                  }
                  $display = strtoupper($display);
                  echo "<a href='../user/index' title='My Dashboard ~ $_SESSION[agrichainxmail]'><h2 style='cursor:pointer;'><i class='fa fa-user' style='color:#ffffff;font-size:0.9em;'></i>$display</h2></a>";
                }
                ?>
            </center>

          </div>

          <div id="main" style="display:inline; ">

            <span style="font-size:30px;cursor:pointer; float:Right; display:inline; padding-top:13px" onclick="openNav()"><i class="fas fa-bars" style="color:#ffffff "></i></span>
          </div>

        </div>


        <nav style="font-family: cursive;">
          <ul>
            <li class="current"><a href="../index">Home</a></li>
            <li><a href="../about">About</a></li>

            <li><a href="../solution">Solution</a></li>

            <li><a href="../resources">Resource</a></li>


            <li><a href="../blog/news">Blog</a></li>

            <li><a href="../tokensale">Token Sale</a></li>
            <li> <a href="../investinequity">INVEST IN EQUITY </a> </li>

            <?php
            if (!empty($_SESSION['agrichainxmail'])) {
              echo "<li><a href='../logout'>Logout</a></li>";
            } else {
              echo "<li><a href='../login'>Login</a></li>";
            }
            ?>
            <?php
                          if (!empty($_SESSION['agrichainxmail'])) {
                            if ($_SESSION['user'] == "ADMIN") {
                              $display = substr($_SESSION['agrichainxfirstname'], 0, 1) . '.' . substr($_SESSION['agrichainxlastname'], 0, 1) . '->' . "ADMIN";
                            } else {
                              $display = substr($_SESSION['agrichainxfirstname'], 0, 1) . '.' . substr($_SESSION['agrichainxlastname'], 0, 1);
                            }
                            $display = strtoupper($display);           
                            echo "<li><a href='../user/index' title='My Dashboard ~ $_SESSION[agrichainxmail]'><i class='fa fa-user' style='color:#ffffff;font-size:0.9em;'></i>$display</a></li>";
                          }
                          ?>
          </ul>

        </nav>






      </div>

    </div>


  </header>