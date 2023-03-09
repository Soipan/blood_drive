
<!DOCTYPE html>
    <html lang="en">

        <head>

            <title> About Us </title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a382b82c21.js" crossorigin="anonymous"></script>
            


<style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
} 
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.60),rgba(0,0,0,0.60)),url(photos/fusion.png);
    background-size: cover;
    background-position: center;
}
.navbar img{
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
    width: 100px;
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
@media(max-width: 700px){
  
    .navbar ul li{
        display: block;
    }
    .navbar{
        position: absolute;
        background: #f44336;
        height: 100vh;
        width: 200px;
        top: 0;
        right: -200px;
        text-align: left;
        z-index: 2;
        transition: 1s;
    }

  

    .navbar ul {
        padding: 30px;
    }
}
.text-box{
    width: 90%;
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}

.text-box h1{
    font-size: 62px;

}

.text-box p{
    margin: 10px 0 40px;
    font-size: 17px;
    color: #fff;
}

.hero-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}

/*------.hero-btn:hover{
    border: 1px solid #f44336;
    background: #f44336;
    transition: 1s;
} ---------------*/


.fa-solid{
    display: block;
        color: #fff;
        margin: 10px;
        font-size: 22px;
        cursor: pointer;
        left: 20px;
}
        /*-------course----------*/
.course{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;

}

h1{
    font-size: 36px;
    font-weight: 600;
}

p{
    color: #777;
    font-size: 16px;
    font-weight: 300;
    line-height: 22px;
    padding: 10px;
}

.row{
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}

.course-col{
    flex-basis: 31%;
    background: #fff3f3;
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 20px 12px;
    box-sizing: border-box;
    transition: 0.5s;
}

h3{
    text-align: center;
    font-weight: 600;
    margin: 10px 0;

}

.course-col:hover{
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
}
@media(max-width: 700px){
    .row{
        flex-direction: column;
    }
}

    /*---------campus-------*/

.campus{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}

.campus-col{
    flex-basis: 30%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}
.campus-col img{
    width: 100%;
    display: block;
}
.layer{
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left:0;
    transition: 0.5s;
}
.layer:hover{
    background: rgba(226,0,0,0.7);
}

.layer h3{
    width: 100%;
    font-weight: 500;
    color: #fff;
    font-size: 26px;
    bottom: 0;
    left:50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
}
.layer:hover h3{
    bottom: 20%;
    opacity: 1;
}
.layer h4{
    width: 100%;
    font-weight: 500;
    color: #fff;
    font-size: 26px;
    bottom: 0;
    left:50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
}
.layer:hover h4{
    bottom: 20%;
    opacity: 1;
}
</style>

        </head>
<body>
    <div class="banner">
            <div class="navbar">
                    <img src="photos/logo.png" class="logo">
                    <ul>

                        <li><a href="home.php">Home</a></li>

                    </ul>                    
            </div>
            <div class="text-box" id="text-box">
            <h1>Services We Offer </h1>
        <p>Blood donation refers to a practice where people donate their blood to people so it helps them with their health problems. Blood is one of the most essential fluids of our body that helps in the smooth functioning of our body. If the body loses blood in excessive amounts, people to get deadly diseases and even die. Thus, we see how blood donation is literally life-saving which helps people. It is also a sign of humanity that unites people irrespective of caste, creed, religion and more.</p>
    <a href="#row" class="hero-btn">Scroll Down For More Information<br><br><i class="fa-solid fa-arrow-down" onclick="scroll()"></i></a>
</div>
</div>
    

    <!------Course------>

    <section class="course">
        

        <div class="row">
            <div class="course-col">
                <h3>World Blood Day</h3>
                <p> In order to raise awareness about this life-saving procedure, the world observes 14th June as Blood Donor Day. It promotes blood donation and urges people to save lives by donating blood. Furthermore, this day is quite an important day as it makes people about safe blood. People need to know the basics to be able to donate blood. For instance, there are certain criteria one must fulfill to donate blood. Not everyone knows that. Thus, this day helps in doing so.</p>
            </div>
            <div class="course-col">
                <h3>Benefits of Blood Donation</h3>
                <p>The blood that we donate helps a person in need. It enhances their health condition and makes them overcome their critical situation. In other words, blood donation does not simply help that specific person but also contributes to a responsible gesture towards society. Moreover, it also enhances the health of the donor. As the cell depletion allows a way for production, not new cells that freshen our body system.p>
            </div>
            <div class="course-col">
                <h3>Our Partners</h3>
                <p>The healthcare industry has responded with a proliferation of innovative and often technology-enabled models of delivering, accessing, and experiencing care. To deliver their full potential, these models require new business approaches and new capabilities. Partnering with organizations that have this initiative and drive further enhances the outreach to the people, safer means of handling donation and cohesion between donations and supply to ensure a smooth transition to recipients.</p>
            </div>
        </div>

        <!-------Campus------->

    </section>

    <section class="campus">

        <h1>Our Global Partners</h1>
        <p>Some of the huge global organizations we work together with are showcased below:</p>

        <div class="row">
            <div class="campus-col">
                <img src="photos/ifrc.png">
                <div class="layer">
                 <a href="https://www.ifrc.org/our-work/health-and-care/community-health/blood-donation"><h4>International Federation of Red Cross and Red Crescent Societies </h4></a> 
                </div>
            </div>

            <div class="campus-col">
                <img src="photos/who2.png">
                <div class="layer">
                <a href="https://www.who.int/news-room/fact-sheets/detail/blood-safety-and-availability"><h3>World Health Organization </h3></a> 
                </div>
            </div>

            <div class="campus-col">
                <img src="photos/transfusion2.png">
                <div class="layer">
                <a href="https://www.isbtweb.org"/><h3>International Society of Blood Transfusion</h3></a>
                </div>
            </div>
        </div>

    </section>


    <section class="campus">

        <h1>Our National Partners</h1>
        <p>Given that Kenya is the base of our operations, we have managed to work together with the listed organizations below</p>

        <div class="row">
            <div class="campus-col">
                <img src="photos/kenya.png">
                <div class="layer">
                 <a href="https://www.ktta.go.ke/"><h4>Kenya Tissue and Transplant Authority</h4></a> 
                </div>
            </div>

            <div class="campus-col">
                <img src="photos/tissue2.png">
                <div class="layer">
                <a href="https://damu-sasa.co.ke/"><h3>Damu Sasa </h3></a> 
                </div>
            </div>

            <div class="campus-col">
                <img src="photos/ministry.jpg">
                <div class="layer">
                <a href="https://www.health.go.ke/"/><h3>Ministry of Health</h3></a>
                </div>
            </div>
        </div>

    </section>

 
</body>
</html>