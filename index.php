<?php
include('admin/dbconn.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nephyy Portfolio</title>
    <link rel="stylesheet" href="bstyles.css">
    <link rel="stylesheet" href="mations.css">
    <link rel="stylesheet" href="mediaquery.css">
</head>

<body>
    <!-- <div class="animated-background"></div> -->
    <div class="random_line_thin" style="margin-top: 0;"> </div>
    <nav id="desktop-nav">
        <div class="logo"> Nephyy</div>
        <div>
            <ul class="nav-links">
                <li><a href="#about"> About</a></li>
                <li><a href="#experience"> Experience</a></li>
                <li><a href="#projects"> Projects</a></li>
                <li><a href="#contacts"> Contacts</a></li>
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
                <li><a href="#about" onclick="toggleMenu()"> About</a></li>
                <li><a href="#experience" onclick="toggleMenu()"> Experience</a></li>
                <li><a href="#projects" onclick="toggleMenu()"> Projects</a></li>
                <li><a href="#contacts" onclick="toggleMenu()"> Contacts</a></li>
            </div>
        </div>
    </nav>

    <section id="profile">
        <div class="section__pic-container">
            <img src="./assets/img/me.png" alt="Nephyy profile pic" class="prof">
        </div>
        <div class="section__text">
                    <?php 
                        $query = "SELECT * FROM main_prof";
                        $result = mysqli_query($connection, $query);

                        if(!$result) {
                            die("Query failed: " . mysqli_error($connection));
                        } 
                        
                        else {
 
                            while ($row = mysqli_fetch_assoc($result)){
                    ?>
                            <p class="section__text__p1"> Hello, I'm</p>
                            <h1 class="title"><?php echo $row['name']; ?></h1>
                            <p class="section__text__p2"><?php echo $row['label']; ?></p>
                            
                            <?php 
                                    }
                                }
                            ?>


            <div class="btn-container">
                <button class="btn btn-color-2" onclick="window.open('./assets/files/Saddarani, N.T..pdf')">
                Download Resume</button>
                <button class="btn btn-color-1" onclick="location.href='./#contacts'">
                Contact</button>
            </div>

            <div id="socials-container">
                <img src="./assets/icons/facebook.png" 
                alt="My Facebook Profile"
                class="icon" 
                onclick="location.href='https://www.facebook.com/nephyy.onii'" />
            
                <img src="./assets/icons/tik-tok.png" 
                alt="My Tiktok Profile"
                class="icon" 
                onclick="location.href='https://www.tiktok.com/@ur.n3phyy'"/>
                
                <img src="./assets/icons/instagram.png" style="width: 36px; height: 37px; margin-top: -1.5px;" 
                alt="My Tiktok Profile"
                class="icon" 
                onclick="location.href='https://www.instagram.com/'"/>
                
                <img src="./assets/icons/whatsapp.png"  style="width: 36.5px; height: 36.5px; margin-top: -1.5px;"
                alt="My Tiktok Profile"
                class="icon" 
                onclick="location.href='https://web.whatsapp.com/"/>

                <img src="./assets/icons/paper-plane.png"
                alt="My Tiktok Profile"
                class="icon" 
                onclick="location.href='https://web.telegram.org/a/'"/>

            </div>

        </div>
    </section>

    <div class="random_line_thick"> </div>

    <section id="about">
        <div class="text-about">
        <p class="section__text__p1"> Get To Know Something</p>
        <h1 class="title"> About Me </h1>
        </div>

            <div class="slider">

                
                <div class="slide"></div>
                <div class="slide"></div>
                <div class="slide"></div> 

        <div class="section-container">
          <!--  <div class="section__pic-container">
                <img
                src="./assets/img/kk.jpg"
                alt="Profile Picture"
                class="about-pic"
                />  
             </div>-->


            <div class="about-details-container">
                <div class="about-containers">
                    <div class="details-container">
                        <img
                        src="./assets/icons/like.png"
                        alt="Experience Icon"
                        class="icon"
                        style="width: 50px; height: 50px;"
                        />
                        <h3>Interests</h3>

                        <?php 
                        $query = "SELECT * FROM main_ab";
                        $result = mysqli_query($connection, $query);

                        if(!$result) {
                            die("Query failed: " . mysqli_error($connection));
                        } 
                        
                        else {
 
                            while ($row = mysqli_fetch_assoc($result)){
                    ?>

                        <p><?php echo $row['interests']; ?></p>

                        <?php 
                                    }
                                }
                            ?>
                    </div>


                    <div class="details-container">
                        <img
                        src="./assets/icons/mortarboard.png"
                        alt="Education Icon"
                        class="icon"
                        style="width: 50px; height: 50px;"
                        />
                        <h3>Education</h3>


                        <?php 
                        $query = "SELECT * FROM main_ab";
                        $result = mysqli_query($connection, $query);

                        if(!$result) {
                            die("Query failed: " . mysqli_error($connection));
                        } 
                        
                        else {
 
                            while ($row = mysqli_fetch_assoc($result)){
                    ?>

                        <p><?php echo $row['education']; ?></p>

                        <?php 
                                    }
                                }
                            ?>



                    </div>
                </div>
                <div class="text-container">

                <?php 
                        $query = "SELECT * FROM main_ab";
                        $result = mysqli_query($connection, $query);

                        if(!$result) {
                            die("Query failed: " . mysqli_error($connection));
                        } 
                        
                        else {
 
                            while ($row = mysqli_fetch_assoc($result)){
                    ?>

                        <p><?php echo $row['information']; ?></p>

                        <?php 
                                    }
                                }
                            ?>

                </div>

                <button class="btn btn-color-2 about-btn"
                        onclick="location.href= 'about.php'">
                        Learn More
                </button>

            </div>

            
        </div>

    </div>


    </section>

    <div class="random_line_thick"></div>


   


    <section id="experience">
        <p class="section__text__p1"> Explore My </p>
        <h1 class="title"> Organizations and Work Experience </h1>

        <div class="experience-details-container">
            <div class="about-containers">
                <div class="details-container">
                    <h2 class="experience-sub-title">Organizations</h2>
                    <div class="article-container">

                        <article>
                            <img
                            src="./assets/exp/venomm.png"
                            alt="Experience Icon"
                            class="icon"
                            />
                            <div>
                                <h3> Venom Publication </h3>
                                <p> Cartoonist </p>
                            </div>
                        </article>

                        <article>
                            <img
                            src="./assets/exp/suluhann.png"
                            alt="Experience Icon"
                            class="icon"
                            />
                            <div>
                                <h3> Suluhan Publication </h3>
                                <p> Cartoonist</p>
                            </div>
                        </article>

                        <article>
                            <img
                            src="./assets/exp/veritass.png"
                            alt="Experience Icon"
                            class="icon"
                            />
                            <div>
                                <h3> Veritas Publication </h3>
                                <p> Cartoonist </p>
                            </div>
                        </article>

                        <article>
                            <img
                            src="./assets/exp/jec.png"
                            alt="Experience Icon"
                            class="icon"
                            />
                            <div>
                                <h3> Junior Eagles Club </h3>
                                <p> Board of Directors </p>
                            </div>
                        </article>

                        <article>
                            <img
                            src="./assets/exp/venomm.png"
                            alt="Experience Icon"
                            class="icon"
                            />
                            <div>
                                <h3> Venom Publication </h3>
                                <p> Managing Editor </p>
                            </div>
                        </article>

                    </div>
                
                </div>

                <div class="details-container">
                    <h2 class="experience-sub-title">Work Experience</h2>
                    <div class="article-container">

                        <article>
                            <img
                            src="./assets/icons/pops.jpg"
                            alt="Experience Icon"
                            class="icon"
                            />
                            <div>
                                <h3> Cashier </h3>
                                <p> Popsilog ZCMC</p>
                            </div>
                        </article>

                        <article>
                            <img
                            src="./assets/icons/me.png"
                            alt="Experience Icon"
                            class="icon"
                            />
                            <div>
                                <h3> Commission </h3>
                                <p> Digital Art Commissions </p>
                            </div>
                        </article>

                        <article>
                            <img
                            src="./assets/icons/worklb.png"
                            alt="Experience Icon"
                            class="icon"
                            />
                            <div>
                                <h3> Receptionist </h3>
                                <p> Worklab.ZC </p>
                            </div>
                        </article>

                        <article>
                            <img
                            src="./assets/exp/jec.png"
                            alt="Experience Icon"
                            class="icon"
                            />
                            <div>
                                <h3> Fund Raising Event </h3>
                                <p> Organization Fund Raising</p>
                            </div>
                        </article>

                        <article>
                            <img
                            src="./assets/icons/n3c.png"
                            alt="Experience Icon"
                            class="icon"
                            />
                            <div>
                                <h3> T-Shirt Online Selling </h3>
                                <p> Selling T-Shirt Products </p>
                            </div>
                        </article>

                    </div>
                
                </div>
            </div>
        </div>
        <button class="btn btn-color-2 experience-btn"
                        onclick="location.href= 'experience.php'">
                        Know More
        </button>
    </section>

    <div class="random_line_thick"> </div>
    <div class="random_line_thin"> </div>


    <section id="projects">
        
        <p class="section__text__p1"> Browse my Recent</p>
        <h1 class="title"> Projects </h1>
        <div class="experience-details-container">
            <div class="about-containers">
                <div class="details-container color-container">
                    
                    <div class="article-container">
                        <img src="./assets/img/proj 1.png"
                        alt="Project 1"
                        class="project-img"
                        />
                    </div>
                    <h2 class="experience-sub-title project-title"> Fanart Knite Coser </h2>
                    <div class="btn-container">
                        <button class="btn btn-color-2 project-btn"
                        onclick="location.href='projects.php'">
                        Go to Projects
                        </button>
                        <button class="btn btn-color-2 project-btn"
                        onclick="location.href='https://www.instagram.com/n3phyy.arts/'">
                        Follow Me
                        </button>
                    </div>
                </div>

                <div class="details-container color-container">
                    <div class="article-container">
                        <img src="./assets/img/proj2.png"
                        alt="Project 2"
                        class="project-img"
                        />
                    </div>
                    <h2 class="experience-sub-title project-title"> Client Commission </h2>
                    <div class="btn-container">
                        <button class="btn btn-color-2 project-btn"
                        onclick="location.href='projects.php'">
                        Go to Projects
                        </button>
                        <button class="btn btn-color-2 project-btn"
                        onclick="location.href='https://www.instagram.com/n3phyy.artcomms/'">
                        Follow Me
                        </button>
                    </div>
                </div>

                <div class="details-container color-container">
                    <div class="article-container">
                        <img src="./assets/img/proj3.png"
                        alt="Project 3"
                        class="project-img"
                        />
                    </div>
                    <h2 class="experience-sub-title project-title"> Naruto Baryon Mode </h2>
                    <div class="btn-container">
                        <button class="btn btn-color-2 project-btn"
                        onclick="location.href='projects.php'">
                        Go to Projects
                        </button>
                        <button class="btn btn-color-2 project-btn"
                        onclick="location.href='https://www.instagram.com/n3phyy.arts/'">
                        Follow Me
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-color-2 experience-btn"
                        onclick="location.href= 'projects.php'">
                        See More
        </button>

    </section>
    
    <div class="random_line_thin"> </div>
    <div class="random_line_thin"> </div>

    <section id="contacts">
        <p class="section__text__p1"> Get In Touch </p>
        <h1 class="title"> Contact Me </h1>
        
        <div class="contact-info-upper-container">
            <div class="contact-info-container">
                <img
                src="./assets/icons/msg.png"
                alt="Email Icon"
                class="icon contact-icon"
                />
                <p><a href="mailto:example@gmail.com"> nephyytan@gmail.com </a></p>
            </div>

            <div class="contact-info-container">
                <img
                src="./assets/icons/facebook.png"
                alt="Education Icon"
                class="icon contact-icon"
                />
                <p><a href="https://www.facebook.com/nephyy.onii"> Nephyy Tan </a></p>
            </div>

        </div>

    </section>

    <footer>
       <nav>
            <div class="nav-links-container">
                <ul class="nav-links">
                    <li><a href="#about"> About</a></li>
                    <li><a href="#experience"> Experience</a></li>
                    <li><a href="#projects"> Projects</a></li>
                    <li><a href="#contacts"> Contacts</a></li>
                </ul>
            </div>
       </nav>
       <p> Copyright &#169; 2024 Nephyy. All Rights Reserve CHAR HAHA</p>
        
       <div class="random_line_thin"> </div>
       <div class="random_line_thick"> </div>
    </footer>

    <script src="script.js"> </script>
    
    
</body>
</html>