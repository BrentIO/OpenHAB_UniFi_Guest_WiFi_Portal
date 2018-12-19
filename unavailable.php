<?php
  //Return Unavailable
  http_response_code(503);
?>
<html>
      <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Service Unavailable</title>
        <style>
          * {font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif; }
          body {background-color: #363636;}
          .outerContainer {
            border-radius: 25px;
            position: absolute;
            bottom: 0;
            right: 0;
            margin: auto;
            width: 50%;
            height: 20%;
            background-color: #b2b2b2;
            text-align: center;
            vertical-align: middle;
            top: 50%;
            left: 50%;
            width: 50%;
            margin: -5% 0 0 -25%;
            min-height: 175px;
          }
          .innerContainer{
            position: relative;
            top: 50%;
            left: 50%;
            width: 50%;
            margin: -5% 0 0 -25%;
          }
        </style>
      </head>
      <body>
      <div class="outerContainer">
        <div class="innerContainer"><h2>Service Unavailable</h2></div>
      </div>
  </body>
</html>