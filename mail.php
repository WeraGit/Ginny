<?php

    // ini_set('display_errors', 'On');
    // error_reporting(E_ALL);

$name = "";
$email = "";
$message = "";
$subject = "";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

header('Content-type: text/html; charset=iso-8859-1\n');
if ($name === ''){
print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
exit();
}
if ($email === ''){
print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
exit();
} 
// else {
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
// print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
// exit();
// }
// }
// if ($subject === ''){
// print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
// exit();
// }
// if ($message === ''){
// print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
// exit();
// }
$content="From: $name \nEmail: $email \nMessage: $message";
$mailheader = "From: $email";
// $sent = mail("ginnywhiting@btinternet.com", $subject, $content, $mailheader);

	if( mail("ginnywhiting@btinternet.com", $subject, $content, $mailheader) ){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <title> Contact </title>
          <meta charset="utf-8">
          <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:700i|Fira+Sans" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="./CSS/normalize.css">
          <link rel="stylesheet" type="text/css" href="./CSS/stylesContactTESTok.css">
          <meta name="description" content="Virginia Whiting - contemporary artist"/>
            
        </head>
        <body>
          <!-- container for the grid -->
          <div class="containerMain">

            <!-- main box -->
            <div class="item1"> 
              <h1>Thanks for sending the message!</h1>
              <p id="contactTxt">
                I'll get back to you shortly.
              </p>
              <br>
            </div>

            <!--   home icon LEFT up -->
            <div class="home">
              <a href="index.html"><img class="homeIcon" src="./media/home.png" ></a>
            </div>

            <!-- footer -->
            <footer class="foot">
              <p class="footerTxt">            
                2021 &nbsp; Virginia Whiting &nbsp; &#169  
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- <br> -->
                + &nbsp;website made by 
                &nbsp;&nbsp;
                <a href="https://limberger.co.uk/">
                  <img id="sigImage" src="./media/Signature Black.png"></a>
                &nbsp; &#169 
              </p>
            </footer>

          </div>
        </body>
        </html>
        <?php
	} else {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <title> Contact </title>
          <meta charset="utf-8">
          <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:700i|Fira+Sans" rel="stylesheet">

          <link rel="stylesheet" type="text/css" href="./CSS/normalize.css">
          <link rel="stylesheet" type="text/css" href="./CSS/stylesContactTESTno.css">
          <meta name="description" content="Virginia Whiting - contemporary artist"/>
            

        </head>
        <body>
        <!-- container for the grid -->
        <div class="containerMain">

          <!-- main box -->
          <div class="item1"> 
            <h1>Sending the message via the form failed...</h1>

            <p >
              Could you please contact me directly instead?
            </p>

            <div class="social">
              <a href="https://www.facebook.com/ginnywhiting09"><img class="socialIcon" src="media/face.webp"></a>
              &nbsp;facebook account
              <br>
              <a href="https://z-p42.www.instagram.com/virginiawhiting/"><img class="socialIcon" src="media/insta.webp"></a>
              &nbsp;instagram account
              <br>
              <a href="mailto:ginnywhiting@btinternet.com"><img class="mailIcon" src="media/mail.png"></a>
              &nbsp;ginnywhiting@btinternet.com
              <br>
              &nbsp;<img class="phoneIcon" src="media/phone.png"> 
              &nbsp;07799 528 148
            </div>
          </div>

          <!--   home icon LEFT up -->
          <div class="home">
            <a href="index.html"><img class="homeIcon" src="./media/home.png" ></a>
          </div>

          <!-- footer -->
          <footer class="foot">
            <p class="footerTxt">      
              
              2021 &nbsp; Virginia Whiting &nbsp; &#169  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <!-- <br> -->
              + &nbsp;website made by 
              &nbsp;&nbsp;
              <a href="https://limberger.co.uk/">
                <img id="sigImage" src="./media/Signature Black.png"></a>
              &nbsp; &#169 
            </p>
          </footer>
        </div>

        </body>
        </html>
    <?php
	}

?>



