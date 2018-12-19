<?php
/* Orignally written by Andrew Niemantsverdriet 
 * email: andrewniemants@gmail.com
 * website: http://www.rimrockhosting.com
 *
 * This code is on Github: https://github.com/kaptk2/portal
 * 
 * Additional Modifications by P5Software
 *
 * Copyright (c) 2015, Andrew Niemantsverdriet <andrewniemants@gmail.com>
 * Copyright (c) 2018, P5Software, LLC
 * 
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met: 
 *
 * 1. Redistributions of source code must retain the above copyright notice, this
 *    list of conditions and the following disclaimer. 
 * 2. Redistributions in binary form must reproduce the above copyright notice,
 *    this list of conditions and the following disclaimer in the documentation
 *    and/or other materials provided with the distribution. 
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * The views and conclusions contained in the software and documentation are those
 * of the authors and should not be interpreted as representing official policies, 
 * either expressed or implied, of the FreeBSD Project.
*/
// Start a session to capure the id and url of the incomming connection
session_start();

//UniFi will pass the MAC address as 'id'; create a session variable for it
if ($_GET['id']) {
  $_SESSION['macAddress'] = $_GET['id'];
}
else {

  //Do not allow users to hit this page directly
  echo "Direct Access is not allowed";
  header('Content-type:text/html', true, 403);
  exit();
}

// Display the login form
?>
<html>
      <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Guest Network Captive Portal Challenge</title>
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
          }
        </style>
      </head>
      <body>
       
      <div class="outerContainer"><h2>Guest Internet Access</h2>
      <div class="innerContainer">
            <form name="frmMain" action="authorize.php" method="POST">
            <input name="txtPassword" type="text"  placeholder="Password"><br>
            <input name="cmdConnect" value="Connect" type="submit">
            </form>
            </div>
        </div>
  </body>
</html>