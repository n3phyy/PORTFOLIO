<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Nephyy</title>
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="media.css">
</head>


<body>

    <nav id="desktop-nav">
        <div class="logo"> Projects </div>
        <div>
            <ul class="nav-links">
                <li><a href="index.php"> Back To Home </a></li>
                <li><a href="about.php"> About</a></li>
                <li><a href="experience.php"> Experience</a></li>  
                <li><a href="contacts.php"> Contact</a></li>
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
            <li><a href="index.html" onclick="toggleMenu()"> Home </a></li>
                <li><a href="about.html" onclick="toggleMenu()"> About </a></li>
                <li><a href="experience.html" onclick="toggleMenu()"> Experience</a></li>
                <li><a href="contacts.php" onclick="toggleMenu()"> Contact</a></li>
            </div>
        </div>
    </nav>

    <div id="digi_slider">

        <h1 class="org__title"> Featured Digital Artworks </h1>

        <input type="radio" name="digi_slider" id="digi_slide1" checked>
        <input type="radio" name="digi_slider" id="digi_slide2">
        <input type="radio" name="digi_slider" id="digi_slide3">
        <input type="radio" name="digi_slider" id="digi_slide4">
        <div id="digi_slides">
           <div id="digi_overflow">
              <div class="digi_inner">
                 <div class="digi_slide digi_slide_1">
                    <div class="digi_slide-content">
                       <h2>Featured Artwork 1</h2>
                       <p>
                        Crafted in July 2021, I introduced an original pink ninja character of my own design.</p>
                    </div>
                 </div>
                 <div class="digi_slide digi_slide_2">
                    <div class="digi_slide-content">
                       <h2>Gojo Satoru Fanart</h2>
                       <p>In December 2021, I crafted a fanart illustration featuring Gojo, a beloved character from the anime series "Jujutsu Kaisen.2</p>
                    </div>
                 </div>
                 <div class="digi_slide digi_slide_3">
                    <div class="digi_slide-content">
                       <h2>Cosplayer: Knite Fanart</h2>
                       <p>
                        I created a fanart tribute to Knite Coser, a cosplayer whom I deeply admire and respect for their talent and dedication to their craft.</p>
                    </div>
                 </div>
                 <div class="digi_slide digi_slide_4">
                    <div class="digi_slide-content">
                       <h2>MLBB Character ALICE Fanart</h2>
                       <p>
                        Though it's an older piece, it remains a cherished favorite of mine—an artwork featuring one of the playable characters from the popular MOBA game Mobile Legends.</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div id="digi_controls">
           <label for="digi_slide1"></label>
           <label for="digi_slide2"></label>
           <label for="digi_slide3"></label>
           <label for="digi_slide4"></label>
        </div>
        <div id="digi_bullets">
           <label for="digi_slide1"></label>
           <label for="digi_slide2"></label>
           <label for="digi_slide3"></label>
           <label for="digi_slide4"></label>
        </div>
    </div>


    <div id="trad_slider">

        <h1 class="org__title"> Featured Traditional Artworks </h1>

        <input type="radio" name="trad_sliderslider" id="trad_slide1" checked>
        <input type="radio" name="trad_sliderslider" id="trad_slide2">
        <input type="radio" name="trad_sliderslider" id="trad_slide3">
        <input type="radio" name="trad_sliderslider" id="trad_slide4">
        <div id="trad_slides">
           <div id="trad_overflow">
              <div class="trad_inner">
                 <div class="trad_slide trad_slide_1">
                    <div class="trad_slide-content">
                       <h2>Dazai Anime Fanart</h2>
                       <p>
                        A timeless traditional fanart masterpiece depicting Dazai, a beloved character from the anime series "Bungo Stray Dogs.</p>
                    </div>
                 </div>
                 <div class="trad_slide trad_slide_2">
                    <div class="trad_slide-content">
                       <h2>Naruto Baryon Mode Fanart</h2>
                       <p>An artist's personal favorite—a stunning creation brought to life with pen and watercolors, meticulously crafted on paper.
                       </p>
                    </div>
                 </div>
                 <div class="trad_slide trad_slide_3">
                    <div class="trad_slide-content">
                       <h2>Fairy Girl</h2>
                       <p>
                        A fully watercolored traditional art piece that serves as a nostalgic reflection of my youth, delicately capturing the essence of my younger years.</p>
                    </div>
                 </div>
                 <div class="trad_slide trad_slide_4">
                    <div class="trad_slide-content">
                       <h2>Coffee Painting</h2>
                       <p>A captivating artwork from the culmination of our final project during my inaugural year of college—a testament to the growth and creativity fostered in those early academic endeavors.</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div id="trad_controls">
           <label for="trad_slide1"></label>
           <label for="trad_slide2"></label>
           <label for="trad_slide3"></label>
           <label for="trad_slide4"></label>
        </div>
        <div id="trad_bullets">
           <label for="trad_slide1"></label>
           <label for="trad_slide2"></label>
           <label for="trad_slide3"></label>
           <label for="trad_slide4"></label>
        </div>
     </div>


     <div id="comms_slider">

        <h1 class="org__title"> Featured Commissioned Arts </h1>

        <input type="radio" name="comms_slider" id="comms_slide1" checked>
        <input type="radio" name="comms_slider" id="comms_slide2">
        <input type="radio" name="comms_slider" id="comms_slide3">
        <input type="radio" name="comms_slider" id="comms_slide4">
        <div id="comms_slides">
           <div id="comms_overflow">
              <div class="comms_inner">
                 <div class="comms_slide comms_slide_1">
                    <div class="comms_slide-content">
                       <h2>Foreign Client</h2>
                       <p>A commissioned masterpiece meticulously crafted for an esteemed overseas patron, exemplifying the global reach and universal appeal of my artistic talent.</p>
                    </div>
                 </div>
                 <div class="comms_slide comms_slide_2">
                    <div class="comms_slide-content">
                       <h2>Foreign Client</h2>
                       <p>An exclusive artwork commissioned by an international client, showcasing the transcendent nature of creativity and the seamless connection forged across borders through art.</p>
                    </div>
                 </div>
                 <div class="comms_slide comms_slide_3">
                    <div class="comms_slide-content">
                       <h2>Local Client</h2>
                       <p>A bespoke creation tailored to the discerning tastes of a local client, symbolizing the harmonious fusion of cultural influences and artistic expression.</p>
                    </div>
                 </div>
                 <div class="comms_slide comms_slide_4">
                    <div class="comms_slide-content">
                       <h2>Foreign Client</h2>
                       <p>A personalized art piece commissioned by a client from abroad, embodying the collaborative spirit and mutual appreciation shared between artist and patron across continents.</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div id="comms_controls">
           <label for="comms_slide1"></label>
           <label for="comms_slide2"></label>
           <label for="comms_slide3"></label>
           <label for="comms_slide4"></label>
        </div>
        <div id="comms_bullets">
           <label for="comms_slide1"></label>
           <label for="comms_slide2"></label>
           <label for="comms_slide3"></label>
           <label for="comms_slide4"></label>
        </div>
     </div>
   

    <div id="pub_slider">

        <h1 class="org__title"> Published Artworks </h1>

        <input type="radio" name="pub_slider" id="pub_slide1" checked>
        <input type="radio" name="pub_slider" id="pub_slide2">
        <input type="radio" name="pub_slider" id="pub_slide3">
        <input type="radio" name="pub_slider" id="pub_slide4">
        <div id="pub_slides">
           <div id="pub_overflow">
              <div class="pub_inner">
                 <div class="pub_slide pub_slide_1">
                    <div class="pub_slide-content">
                       <h2>2023</h2>
                       <p>Venom Publication </p>
                    </div>
                 </div>
                 <div class="pub_slide pub_slide_2">
                    <div class="pub_slide-content">
                       <h2>2022</h2>
                       <p>Venom Publication </p>
                    </div>
                 </div>
                 <div class="pub_slide pub_slide_3">
                    <div class="pub_slide-content">
                       <h2>2018</h2>
                       <p>Suluhan Publication</p>
                    </div>
                 </div>
                 <div class="pub_slide pub_slide_4">
                    <div class="pub_slide-content">
                       <h2>2017</h2>
                       <p>Veritas Publication</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div id="pub_controls">
           <label for="pub_slide1"></label>
           <label for="pub_slide2"></label>
           <label for="pub_slide3"></label>
           <label for="pub_slide4"></label>
        </div>
        <div id="pub_bullets">
           <label for="pub_slide1"></label>
           <label for="pub_slide2"></label>
           <label for="pub_slide3"></label>
           <label for="pub_slide4"></label>
        </div>
     </div>



     <footer>
        <nav>
             <div class="nav-links-container">
                 <ul class="nav-links">
                  <li><a href="index.php"> Back To Home </a></li>
                  <li><a href="about.php"> About</a></li>
                  <li><a href="experience.php"> Experience</a></li>  
                  <li><a href="contacts.php"> Contact</a></li>
                 </ul>
             </div>
        </nav>
        <p> Copyright &#169; 2024 Nephyy. All Rights Reserve CHAR HAHA</p>
         
     </footer>



    <script src="script.js"> </script>

</body>



</html>