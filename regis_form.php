<?php
require 'config/functions.php';

if( isset($_POST["submit"]) ) {

  if( register($_POST) > 0 ) {
    header("location:loginform.php");
    exit;
  }

  $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>XRPL - Register panel</title>

    <link rel="stylesheet" href="fonts/icon/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/form_account/regis.css" />
    <meta name="robots" content="noindex, follow" />
    <!-- <script nonce="e2ae6bb3-1a1e-49b2-a1ee-43ac3e2ce28d">
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
    <div class="main">
      <h1>Sign up</h1>
      <div class="container">
        <div class="sign-up-content">
          <form method="POST" class="signup-form">
            <h2 class="form-title">Register disini</h2>
            <div class="form-textbox">
              <label for="name">Username</label>
              <input type="text" name="name" id="name" />
            </div>
            <br>
            <div class="form-textbox">
              <label for="pass">Password</label>
              <input type="password" name="pass" id="pass" />
            </div>
            <div class="form-group">
              <input
                type="checkbox"
                name="agree-term"
                id="agree-term"
                class="agree-term"
              />
            </div>
            <br>
            <br>
            <div class="form-textbox">
              <input
                type="submit"
                name="submit"
                id="submit"
                class="submit"
                value="Create account"
              />
            </div>
          </form>
          <p class="loginhere">
            Already have an account ?<a href="login_form.php" class="loginhere-link">
              Log in</a
            >
          </p>
        </div>
      </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
    <!-- <script
      defer
      src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
      integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
      data-cf-beacon='{"rayId":"826363816957723b","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
      crossorigin="anonymous"
    ></script> -->
  </body>
</html>
