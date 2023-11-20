<?php

session_start();

  if( !isset($_SESSION["login"]) ) {
    header("Location: loginform.php");
    exit;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ForxRPL - Coding</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!-- buttons -->
  <link href="css/buttons.css" rel="stylesheet" />


</head>

<body>

<div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="main.html">
            <span>FOR XRPL</span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mainAbout.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://instagram.com/elpegesatu" target="_blank">Instagram</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="file_tugas.php">Coding</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://discord.gg/F9JfP3BTq" target="_blank">Discord</a>
              </li>
            </ul>
            <div class="quote_btn-container">
              <form class="form-inline">
                <button class="btn   nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="logout.php">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <span>

                  <!-- AKUN  -->
                  <?php echo $_SESSION["name"]?>
                  <!-- nama akun -->
                  
                </span>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <div class="buttons-container">
        
        <br>
        <!-- <h3>Pemrograman Berorientasi Objek ( C++ )</h3>
        <br>
        <a href="tugas_coding/pbo/convert-jam.html" target="_blank">
        <button class="button-30" role="button">Convert Jam</button>
        </a>
        <br> -->
        <h3>Pilih Bahasa Pemrograman Berikut</h3>
        <br>

        <a href="tugas_coding/xcpp.html">
        <button class="button-30" role="button">C++</button>
        </a>

        <br>
        <br>

        <a href="tugas_coding/xpython.php">
        <button class="button-30" role="button">Python</button>
        </a>


    </div>

</div>
    
</body>
</html>