<?php

if(isset($_POST["submit"])) {

    $username =  $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = $email;
    $subject = $message;

    $message = "Phone: ($phone)" . $message;

    //Always set content-type when sending HTML email

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers = "Content-type: text/html;charset=UTF-8" . "\r\n";

    //More headers

    $headers = "From: soipanjenkins@gmail.com" . "\r\n";
    $mail = mail($to,$subject,$message,$headers);

  if ($mail) {
    echo "<script>alert('Mail Sent.');</script>";
  }else{
    echo "<script>alert('Mail Not Sent.');</script>";
  }
 
}

?>

<!DOCTYPE html>
    <html lang="en">

        <head>

            <title> Contact Us </title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="https://kit.fontawesome.com/a382b82c21.js" crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        
            <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    
} 

body{
    background: linear-gradient(90deg,#0e3959 0%, #0e3959 30%, #03a9f5 30%, #03a9f5 100%);
}
.contactUs
{
    position:relative;
    width: 100%;
    padding: 40px 100px
}
.contactUs .title
{
     display: flex;
     justify-content: center;
     align-items: center;
     font-size: 2em;
}
.contactUs .title h2
{
    color:#fff;
    font-weight: 500;
}
.form 
{
    grid-area: form;
}

.info 
{
    grid-area: info;
}

.map 
{
    grid-area: map;
}
.contact 
{
    padding: 40px;
    background: #fff;
    box-shadow: 0 5px 35px rgba(0,0,0,0.15);
}
.box
{
    position: relative;
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-template-rows: 5fr 4fr;
    grid-template-areas:
    "form info"
    "form map";
    grid-gap: 20px;
    margin-top: 20px;

}

.contact h3
{
    color: #0e3959;
    font-weight:500;
    font-size: 1.4em;
    margin-bottom: 10px;
}

/*----Form------*/

.formBox {
    position: relative;
    width: 100%

}


.formBox .row50
{
    display: flex;
    gap: 20px;
}

.inputBox
{
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
    width: 50%;
}

.formBox .row100 .inputBox
{
    width: 100%
}

.inputBox span 
{
    color: #18b7ff;
    margin-top: 10px;
    margin-bottom: 5px;
    font-weight: 500;
}

.inputBox input 
{
    padding: 10px;
    font-size: 1.1em;
    outline: none;
    border: 1px solid #333;

}

.inputBox textarea 
{
    padding: 10px;
    font-size: 1.1em;
    outline: none;
    border: 1px solid #333;
    resize: none;
    min-height: 220px;
    margin-bottom: 10px;

}

.inputBox input[type="submit"]
{
    background: #ff578b;
    color: #fff;
    border:none;
    font-size: 1.1em;
    max-width: 120px;
    font-weight: 500;
    cursor: pointer;
    padding: 14px 15px;

}

.inputBox ::placeholder
{
    color: #999;
}

/*info*/
.info 
{
    background: #0e3959;

}

.info h3 
{
    color: #fff
}

.info .infoBox div 
{
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.info .infoBox div span
{
    min-width: 40px;
    height: 40px;
    color: #fff;
    background: #18b7ff;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.5em;
    border-radius: 50%;
    margin-right: 15px;
}

.info .infoBox div p 
{
    color:#fff;
    font-size: 1.1em;
}

.info .infoBox div a
{
    color:#fff;
    text-decoration:none;
    font-size: 1.1em;
}

.sci 
{
    margin-top: 40px;
    display: flex;
}

.sci li 
{
    list-style: none;
    margin-right: 15px;
} 

.sci li a 
{
    color: #fff;
    font-size: 2em;
    color: #ccc;
}

.sci li a:hover 
{
    color: #fff;
}

.map 
{
    padding: 0;
}

.map iframe
{
    width:100%;
    height: 100%
}

/*Responsive Design*/
@media (max-width: 991px)
{
    body
    {
        background: #03a9f5;
    }
    .contactUs
    {
        padding:20px;
    }

    .box 
    {
        position: relative;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        grid-template-areas:
        "form"
        "info"
        "map";
    }

    .map 
    {
        min-height: 300px;
    }

    .formBox .row50 
    {
        display: flex;
        gap: 0;
        flex-direction:column;
    }

    .inputBox 
    {
       
        width: 100%
    }

    .contact 
    {
        padding:30px;
    } 

    .map 
    {
        min-height: 300px;
        padding: 0;
    }
}
/*.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(photos/contact-us-lettering.jpg);
    background-size: cover;
    background-position: center;
}.navbar img{
    width: 100px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 20%;

}
.navbar{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content:
    space-between;
}

.logo{
    width: 120px;
    cursor: pointer;
}

.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}

.navbar ul li a{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
}

.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #960032;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
    
}

.navbar ul li:hover::after{
    width: 100%;
}

.social-icons{
    margin-left: 300px auto;
    text-align: left;
}

.social-icons img{
    width: 30px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 50%;
    display:flex;
    flex-direction:column;
    

}*/



            </style>
            
        </head>

            <body>

            

            <!--------- <div class="banner">
                <div class="navbar">

                    <img src="photos/logo.png" class="logo">
                    <ul>
                        <li><a href="home.php">Home</a></li>\

                        </ul>                    
                </div>
            </div> ------->

        <div class="contactUs">
                <div class="title">
                    <h2>Get in Touch</h2>
                </div>
            <div class="box">
                    <!---- Form ---->
                <div class="contact form">
                    <h3>Send a Message</h3>
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>Name</span>
                                <input type="text" placeholder="">
                            </div>
        
                        </div>   

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="email" placeholder="">
                            </div>
                        </div>

                        <div class="row50">
                                <div class="inputBox">
                                    <span>Mobile</span></span>
                                    <input type="text" placeholder="">
                                </div>
                            
                        </div>

                        <div class="row50">
                                <div class="inputBox">
                                    <span>Subject</span></span>
                                    <input type="text" placeholder="">
                                </div>
                            
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea placeholder="Write your messsage here...."></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                               <input type="submit" value="Send">
                            </div>
                        </div>
                        
                    </div>
                       
                </div>
                
                    
                     <!---- Info Box ---->
                    <div class="contact info">
                        <h3>Contact info</h3>
                        <div class="infoBox">
                            <div>
                                <span><ion-icon name="location"></ion-icon></span>
                                <p> Nairobi Garage, Nairobi <br> KENYA </p>
                            </div>
                            <div>
                                <span><ion-icon name="mail"></ion-icon></span>
                                <a href="mailto:vitalvibe@email.com">loremimpsum@gmail.com</a>
                            </div>
                            <div>
                                <span><ion-icon name="call"></ion-icon></span>
                                <a href="tel:+91721345678">+254 921 345 678</a>
                            </div>

                            <!-------Social Media Links--->
                            <ul class="sci">
                                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                            </ul>
                        </div>
                    </div>

                     <!---- Map ---->
                    <div class="contact map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8439238172227!2d36.79948701434545!3d-1.266303399076381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17390a6a9c79%3A0xe74f55367c903b6e!2sNairobi%20Garage!5e0!3m2!1sen!2ske!4v1670177974908!5m2!1sen!2ske" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

            </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>


    

</html>