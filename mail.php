<?php

    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

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
// $sent = mail("contact@limberger.co.uk", $subject, $content, $mailheader);

	if( mail("contact@limberger.co.uk", $subject, $content, $mailheader) ){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <title> Weronika - Contact</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./CSS/normalize.css">
        <link rel="stylesheet" type="text/css" href="./CSS/myStyle5.css">
        

        </head>
        <body id="bodyContact">
            <header>
                <nav>
                    <ul>
                    <li><a class="navList" href="./index.html" >HOME</a></li>
                    <li><a class="navList" href="./portfolio/work.html" >PORTFOLIO</a></li>
                    <li><a class="navList" href="./about.html" >ABOUT</a></li>
                    <li><a class="navList" href="./contact.html" >CONTACT</a></li>
                    </ul>
                </nav>
            </header>
            <section id="contactBox3">
                <div id="contactDiv3">
                    <h1 class="workTxtHead"><?=$name?>, thanks for your message.</h1>
                    <p class="TxtPwork">I will reply as soon as I read it!</p>
                </div>
            </section>


        <footer>

        <img id="sigFoo" src="./Images/Signature Black.png" />     
        <br />
        All rights reserved. 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        2020 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <a href="mailto:contact@limberger.co.uk">contact@limberger.co.uk </a>
        <br><br>
        Special thanks for graphic & video work to FastTalkMedia.
        <br><br>

        </footer>
        <div id=”preloader”></div>

        <script type="text/javascript" src='./vendor/jquery/jquery-3.2.1.min.js' ></script> 
        <script type="text/javascript" src='./JavaScript/javas.js'></script> 

        </body>
        </html>
        <?php
	} else {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <title> Weronika - Contact</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./CSS/normalize.css">
        <link rel="stylesheet" type="text/css" href="./CSS/myStyle5.css">
        

        </head>
        <body id="bodyContact">
            <header>
                <nav>
                    <ul>
                    <li><a class="navList" href="./index.html" >HOME</a></li>
                    <li><a class="navList" href="./portfolio/work.html" >PORTFOLIO</a></li>
                    <li><a class="navList" href="./about.html" >ABOUT</a></li>
                    <li><a class="navList" href="./contact.html" >CONTACT</a></li>
                    </ul>
                </nav>
            </header>

            <section id="contactBox3">
            <div id="contactDiv3">

                <h1 class="workTxtHead"><?=$name?>,<br>something went wrong.</h1>
                <p class="workTxtP">Try again later or email me directly on 
                    <a href="mailto:contact@limberger.co.uk">contact@limberger.co.uk </a>.
                </p>

            </div>
            </section>

        <footer>

        <img id="sigFoo" src="./Images/Signature Black.png" />     
        <br />
        All rights reserved. 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        2020 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <a href="mailto:contact@limberger.co.uk">contact@limberger.co.uk </a>
        <br><br>
        Special thanks for graphic & video work to FastTalkMedia.
        <br><br>

        </footer>
        <div id=”preloader”></div>

        <script type="text/javascript" src='./vendor/jquery/jquery-3.2.1.min.js' ></script> 
        <script type="text/javascript" src='./JavaScript/javas.js'></script> 

        </body>
        </html>
    <?php
	}

?>



