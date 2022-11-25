<?php
    session_start();
?>

<!---Navbar-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">

      <a href="/" class="navbar-brand align-top"><img src="newLogo_neu1.jpg" width="90px"/></a>

      <button class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navmenu">

        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <?php
            if (isset($_SESSION['userID'])){
            ?>
          <li class="nav-item">
            <a href="news.php" class="nav-link">News</a>
          </li>
            <li class="nav-item">
            <a href="logout.php" class="nav-link">Logout</a>
            </li>
            <?php
            }
            else{
            ?>

            <li class="nav-item">
              <a href="register.php" class="nav-link">Registrieren</a>
            </li>
            <li class="nav-item">
              <a href="login.php" class="nav-link">Login</a>
            </li>
            <?php }?>
        </ul>
      </div>
    </div>
  </nav>
