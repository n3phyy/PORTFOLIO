
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Nephyy</title>
    <link rel="stylesheet" href="mecontact.css">
    <link rel="stylesheet" href="bstyles.css">
    <link rel="stylesheet" href="media.css">
</head>


<body>

    <nav id="desktop-nav">
        <div class="logo"> Contact Me</div>
        <div>
            <ul class="nav-links">
                <li><a href="index.php"> Back To Home </a></li>
                <li><a href="about.php"> About</a></li>
                <li><a href="experience.php"> Experience</a></li>  
                <li><a href="projects.php"> Projects</a></li>
            </ul>

        </div>
    </nav>

    <nav id="hamborger-nav"> <!-- Menu Nav po ito for responsive site heheh-->
        <div class="logo"> Nephyy</div>
        <div class="hamborger-menu">
            <div class = "hamborger-icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <li><a href="index.php" onclick="toggleMenu()"> Home</a></li>
                <li><a href="about.php" onclick="toggleMenu()"> About</a></li>
                <li><a href="experience.php" onclick="toggleMenu()"> Experience</a></li>
                <li><a href="projects.php" onclick="toggleMenu()"> Projects</a></li>
            </div>
        </div>
    </nav>

    

    <section id="contacts">
        <p class="section__text__p1"> Thank you for visiting!</p>
        <h1 class="title"> Contact Me </h1>
        
       <div class="contact-container">
        
            <div class="contactInfo">

                <div class="box">
                    <div class="cicon"> <img src="./assets/icons/add.png"> </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p> C1151 Sampaloc Drve, <br> Zamboanga City</p>
                    </div>
                </div>

                <div class="box">
                    <div class="cicon"> <img src="./assets/icons/mail.png"> </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p> nephyytan@gmail.com <br> xt202001936@wmsu.edu.ph</p>
                    </div>
                </div>

                <div class="box">
                    <div class="cicon"> <img src="./assets/icons/call.png"> </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p> 09774246907</p>
                    </div>
                </div>

            </div>
    
            <div class="contactForm">
                <form>
                    <h2 style="margin-bottom: 20px;">Send Message</h2>

                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span style="padding-left: 10px;"> Name </span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span style="padding-left: 10px;"> Email </span>
                    </div>

                    <div class="inputBox">
                       <textarea required="required" style="height: 100%;"></textarea>
                        <span style="padding-left: 10px;"> Type your message </span>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                     </div>
 

                </form>

            </div>
    
    
    
        </div>





    </section>




    <script src="script.js"> </script>

</body>



</html>
