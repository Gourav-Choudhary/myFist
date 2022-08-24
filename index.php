    <?php 
 $obj=file_get_contents("https://www.i.starr365.com/API/OFFICEAPP/requestURL.php?tt=fdrtygfrtyhgvcdfrtyhtrf");
  $arr = json_decode($obj, true);
  // print_r($arr);
  // $arr = $arr['URL'];
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
    <title>manager 365</title>
    <style>
      .topnav {
        overflow: hidden;
        background-color: #eeeeee;
      }

      .topnav a {
        float: left; 
        display: block;
        color: #000000;
        padding: 10px 12px;
        text-decoration: none;
        font-size: 17px;
        border-bottom: solid 1px rgb(144 144 144);
        margin-left: 10px;
        display: none;
      }

      .topnav a:hover {
        background-color: #ddd;
        color: black;
      }

      .topnav .icon {
        display: none;
      }
      .topnav a img {
        width: 92px;
        height: 98px;
      }
      .topnav a.logo {
        text-align: center;
      }
      .container-fluid{
        padding: 0px;
      }

      @media screen and (max-width: 600px) {
        .topnav a {
          display: none;
        }
        .topnav a.icon {
          float: left;
          display: block;
          border: solid 1px #000 !important;
          border-radius: 9px;
          color: #000;
        }
      }

      @media screen and (max-width: 600px) {
        .topnav.responsive {
          position: relative;
        }
        .topnav.responsive .icon {
          position: absolute;
          left: 0;
          top: 0;
        }
        .topnav.responsive a {
          float: none;
          display: block;
        }
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="mobile_nav">
        <div class="topnav" id="myTopnav">
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
          <?php 

          foreach ($arr as $key => $array) {
          // print_r($array['url']);
        ?>
          <a href="<?php echo $array['url']?>"><?php echo $array['name']?></a>
<?php

          }

          ?>

  <!--         <a href="#" class="logo"><img src="barnd_logo.png" /></a>
          <a href="#">Overview</a>
          <a href="#">Fleet</a>
          <a href="#">Client Balance</a>
          <a href="#">Invoices</a>
          <a href="#">Receipt</a>
          <a href="#">Transaction</a>
          <a href="#">Client/s</a>
          <a href="#">Inspection</a>
          <a href="#">Add Invoic</a>
          <a href="#">Notification</a> -->
        </div>
      </div>
    </div>

    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>

  </body>
</html>
