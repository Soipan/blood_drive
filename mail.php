<?php

if(isset($_POST["submit"])) {

    $name =  $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailheader = "From:" .$name."<".$email.">\r\n";
    $recipient = "soipanjenkins@gmail.com";

    mail($recipient, $subject, $message, $mailheader)
    or die("Error!");

    echo '

    !DOCTYPE html>
    <html lang="en">

        <head>

            <title> Contact Us </title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="https://kit.fontawesome.com/a382b82c21.js" crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

            <style>
            a {
                color: #828282;
                font-style: italic;
            }

            a:hover{
                color: #fff;
            }
            </style>

        </head>
        <body>
           < div class ="container">
                <h1>Thank you for contacting us. We will get back to you as soon as possible</h1>
                <p class="back">Go back to the <a href="home.php">homepage</a></p>
            </div>

        </body>
        </html> ';
    
    
    
    
    

    
    
    
}

?>