<?php
session_start();

if( isset($_SESSION["login"])) {
  header("location:main.php");
  exit;
}

require 'config/functions.php';

if( isset($_POST["login"])) {

  $username = $_POST["name"];
  $password = $_POST["password"];

  // $str5ql = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
  // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  // $count = mysqli_num_rows($result);

 // cek username

  if( mysqli_num_rows($result) === 1 ) {

    //cek password
    $row = mysqli_fetch_assoc($result);

  //set agar dari login page , ketika berhasil. masuk ke dalam main.php
    
    if( password_verify($password, $row["password"]) ) {

      $_SESSION["login"] = true;
      $_SESSION["name"] = $username;

      header("Location: main.php");
      exit;
    } 
  }

  $error = true;



  //  set session

  // if($count == 1){
  //   // session_start();
  //   // $_SESSION['name'] = $username;
  //   header("location:main.php");
  // } else {
  //   // header("location:error.php");
  //   $error = true;

  // }


}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>XRPL - Login panel</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/form_account/login.css" />
    <!-- <script nonce="61d8fba9-21e4-493e-b8b8-6ee9fe1c0363">
      (function (w, d) {
        !(function (bS, bT, bU, bV) {
          bS[bU] = bS[bU] || {};
          bS[bU].executed = [];
          bS.zaraz = { deferred: [], listeners: [] };
          bS.zaraz.q = [];
          bS.zaraz._f = function (bW) {
            return async function () {
              var bX = Array.prototype.slice.call(arguments);
              bS.zaraz.q.push({ m: bW, a: bX });
            };
          };
          for (const bY of ["track", "set", "debug"])
            bS.zaraz[bY] = bS.zaraz._f(bY);
          bS.zaraz.init = () => {
            var bZ = bT.getElementsByTagName(bV)[0],
              b$ = bT.createElement(bV),
              ca = bT.getElementsByTagName("title")[0];
            ca && (bS[bU].t = bT.getElementsByTagName("title")[0].text);
            bS[bU].x = Math.random();
            bS[bU].w = bS.screen.width;
            bS[bU].h = bS.screen.height;
            bS[bU].j = bS.innerHeight;
            bS[bU].e = bS.innerWidth;
            bS[bU].l = bS.location.href;
            bS[bU].r = bT.referrer;
            bS[bU].k = bS.screen.colorDepth;
            bS[bU].n = bT.characterSet;
            bS[bU].o = new Date().getTimezoneOffset();
            if (bS.dataLayer)
              for (const ce of Object.entries(
                Object.entries(dataLayer).reduce(
                  (cf, cg) => ({ ...cf[1], ...cg[1] }),
                  {}
                )
              ))
                zaraz.set(ce[0], ce[1], { scope: "page" });
            bS[bU].q = [];
            for (; bS.zaraz.q.length; ) {
              const ch = bS.zaraz.q.shift();
              bS[bU].q.push(ch);
            }
            b$.defer = !0;
            for (const ci of [localStorage, sessionStorage])
              Object.keys(ci || {})
                .filter((ck) => ck.startsWith("_zaraz_"))
                .forEach((cj) => {
                  try {
                    bS[bU]["z_" + cj.slice(7)] = JSON.parse(ci.getItem(cj));
                  } catch {
                    bS[bU]["z_" + cj.slice(7)] = ci.getItem(cj);
                  }
                });
            b$.referrerPolicy = "origin";
            b$.src =
              "/cdn-cgi/zaraz/s.js?z=" +
              btoa(encodeURIComponent(JSON.stringify(bS[bU])));
            bZ.parentNode.insertBefore(b$, bZ);
          };
          ["complete", "interactive"].includes(bT.readyState)
            ? zaraz.init()
            : bS.addEventListener("DOMContentLoaded", zaraz.init);
        })(w, d, "zarazData", "script");
      })(window, document);
    </script> -->
  </head>
  <body>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Silahkan Login</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
              <div
                class="icon d-flex align-items-center justify-content-center"
              >
                <span class="fa fa-user-o"></span>
              </div>
              <h3 class="text-center mb-4">Sign In</h3>

              <?php if( isset($error) ) : ?>
                <p style="color: red; font-style: italic;">Username / Password salah!</p>
              <?php endif;?>


              <form action="#" class="login-form" method="post">
                <div class="form-group">
                  <input
                    type="text"
                    name="name"
                    class="form-control rounded-left"
                    placeholder="Username"
                    required
                  />
                </div>
                <div class="form-group d-flex">
                  <input
                    type="password"
                    name="password"
                    class="form-control rounded-left"
                    placeholder="Password"
                    required
                  />
                </div>
                <div class="form-group">
                  <button
                    type="submit"
                    name="login"
                    class="form-control btn btn-primary rounded submit px-3"
                  >
                    Login
                  </button>
                </div>
                <div class="form-group d-md-flex">
                  <div class="w-50">
                    <a href="regis_form.php">Sign up!</a>
                    </label>
                  </div>
                  <div class="w-50 text-md-right">
                    <a href="#">Forgot Password?</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- <script
      defer
      src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
      integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
      data-cf-beacon='{"rayId":"826353c3ed096d0a","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
      crossorigin="anonymous"
    ></script> -->
  </body>
</html>
