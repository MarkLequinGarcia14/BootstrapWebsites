<!DOCTYPE html>
<html>
<title>My Online Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSwCiEp56b0cx6y80Rwzc2WCNDsMWxdvWDjfXq0YNg&amp;s" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p><?php echo "HOME" ?></p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p><?php echo "ABOUT"?></p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p><?php echo "PHOTOS" ?></p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p><?php echo "CONTACT" ?></p>
  </a>
</nav>
<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"></span> Mark Anthony Garcia</h1>
    <p><?php echo "Future Entrepreneur/Software Engineer/Game Developer/FreeLancer" ?></p>
    <img src="https://scontent.fmnl33-1.fna.fbcdn.net/v/t39.30808-6/344962305_231255872857221_553513905470461896_n.jpg?_nc_cat=102&amp;ccb=1-7&amp;_nc_sid=1b51e3&amp;_nc_eui2=AeGrEDohfiPZjC7li9fR7otr3c6JTxawbYPdzolPFrBtg9eTDIp8OCnWrwdlziEbhcQlBLliiwCgWDVXaMjHetql&amp;_nc_ohc=VQVq0s5YSGIAX_I18ij&amp;_nc_zt=23&amp;_nc_ht=scontent.fmnl33-1.fna&amp;oh=00_AfAZatn-8cUBzzYK_jo_cSGQWiJ35PW2Y1zC0bGjjQADog&amp;oe=6516AF28" alt="boy" class="" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-blue">About Me</h2>
    <hr style="width:200px" class="w3-opacity">
    <p><?php echo "My full name is Mark Anthony Gonzales Garcia, majority people I've been met called me as Mark, my age is 20 years old, I born in Philippines in the year of 2003,
    both of my parents are Catholic, my daily hobbies is gaming, progamming/coding, designing, editing videos/picture. Some of my hobbies are drawing, calligraphy, improving myself.
    What I mean about improving myself doing some outdoor/indoor activities for good physical posture on my free time, also am doing skin/hair routine when got
    extra money, the reason is I literally like to be good looking for the self-esteem. Also, am studying at STI College Marikina as a former of 3rd year tertiary college, taking BSCS course in the S.Y 2023-2024. <br>
    <br>
    <b>My goal is to became successful entrepreneur, because every entreprenuer need to think like that, otherwise it's better to stay at home. </b>" ?></p>


    <h3 class="w3-padding-16 w3-text-light-blue">My Skills</h3>
    <p class="w3-wide"><b>Business</b></p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:40%"> 40%</div>
    </div>
    <p class="w3-wide"><b>Programming/Coding</b></p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:30%"> 30%</div>
    </div>
    <p class="w3-wide"><b>Drawing, Calligraphy, and Editing</b></p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:10%"> 10%</div>
    </div>
    <p class="w3-wide"><b>Gaming</b></p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:20%"> 20%</div>
    </div>
    <p class="w3-wide"><b> Total</b></p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:100%"> 100%</div>
    </div><br>
        
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">5</span><br>
        True Friends in Bussiness
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">1</span><br>
        Projects Still Working
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">5</span><br>
        Clients Met/Inquire
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">2</span><br>
        Thesis Done
      </div>
    </div>

    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download Resume
    </button>
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">My Skill Need to Practice</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Entrepreneur</li>
          <li class="w3-padding-16">Improving my Problem Solving (Done)</li>
          <li class="w3-padding-16">Have Formal Psyhic & Posture (Still Working)</li>
          <li class="w3-padding-16">Have Formal HairStyle (Done)</li>
          <li class="w3-padding-16">Have Good Jawline and Clear Skin (Still Working)</li>
          <li class="w3-padding-16">Public/English Speaking (Need more to Improve)</li>
          <li class="w3-padding-16">Find more friends who can work and gain experience with you (Still finding more skilled people)</li>
          <li class="w3-padding-16">Bussiness Knowledge and Skills (Still working & practicing with my uncle)</li>
          <li class="w3-padding-16">Find a girl that fill my expectation/similar to your MOM (Still hardworking on her xD</li>
          <li class="w3-light-grey w3-padding-24">
            <button onclick="myFunction()" class="w3-button w3-white w3-padding-large w3-hover-black">Click me when you're done all of this!!</button>
            <script>
              function myFunction() {
                alert("Congrats self you done to be Successful Entreprenuer!!");
              }
              </script>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Soft En/Game Dev/FreeLancer</li>
          <li class="w3-padding-16">Web Designing (More practice needed)</li>
          <li class="w3-padding-16">Coding/Programming (More practice needed)</li>
          <li class="w3-padding-16">Problem Solving/Getting an idea quickly (For me considered as good)</li>
          <li class="w3-padding-16">Keyboard Typing Skill (Average of 60 wpm)</li>
          <li class="w3-padding-16">Genre Type on Game (RPG)</li>
          <li class="w3-padding-16">Friends focus on programming (Got 3 but the 2 is focus on bussiness including me)</li>
          <li class="w3-padding-16">Using Scratch in gaming (Got uncomplete scratch when have big free time I work on it)</li>
          <li class="w3-padding-16">Using Wix in web designing (Got uncomplete website)</li>
          <li class="w3-light-grey w3-padding-24">
          <button onclick="myNigga()" class="w3-button w3-white w3-padding-large w3-hover-black">Click me when you're done all of this!!</button>
            <script>
              function myNigga() {
                alert("Congrats self you done to be Software Engineer/Game Developer/FreeLancer!!");
              }
              </script>
          </li>
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
    
    <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-light-grey">Games I play</h3>  
    <img src="https://www.charlieintel.com/cdn-cgi/image/width=3840,quality=75,format=auto/https://editors.charlieintel.com/wp-content/uploads/2023/02/best-clash-of-clans-bases.jpg"  alt="Clash of Clans" class="w3-left w3-circle w3-margin-right" style="width:80px">   
      <img src="https://i.ytimg.com/vi/KLXQ8EOoCwo/maxresdefault.jpg"  alt="Day R Survival" class="w3-left w3-circle w3-margin-right" style="width:80px">   
      <img src="https://i0.wp.com/gamingonphone.com/wp-content/uploads/2021/02/Mobile-Legends-Hero.jpg"  alt="Mobile Legends" class="w3-left w3-circle w3-margin-right" style="width:80px">   
      <img src="https://play-lh.googleusercontent.com/0dF1gfAFCNgIk1RY9cuvOJf9dWJeOIW0xNXUI5ShMreqWOpVphGLEGzItpJsLXmhgsI=w526-h296-rw"  alt="Cafe Land" class="w3-left w3-circle w3-margin-right" style="width:80px">   
      <img src="https://blog.roblox.com/wp-content/uploads/2022/08/blog_evergreen.png"   alt="Roblox" class="w3-left w3-circle w3-margin-right" style="width:80px">   
      <img src="https://play-lh.googleusercontent.com/uqq6a-fHayQxsNQkxB9ZZXag8N7Du5mOEKcScr9yltHqx3RKgCdr9VJHKGO2vY_GUe0"  alt="Player Unknown Battle Ground" class="w3-left w3-circle w3-margin-right" style="width:80px">   
      <img src="https://play-lh.googleusercontent.com/5NmtLBXZ2R6I38QsVou42n_cMC3O4-4TlnZ2JmJEfmNis1guiXovLcUsm7UIUQOFOb8=w526-h296-rw"   alt="The Ants" class="w3-left w3-circle w3-margin-right" style="width:80px">   
      <img src="https://play-lh.googleusercontent.com/LW8XZ_CaAqXcNGCGj7EpYL862_tCwmhGUsgBLXn54Q9nqEMXlwdkAiVmxwQJB9nkCXw5=w526-h296-rw"  alt="Wild Rift" class="w3-left w3-circle w3-margin-right" style="width:80px">   
      <img src="https://img.redbull.com/images/c_crop,w_1607,h_803,x_0,y_92,f_auto,q_auto/c_scale,w_1200/redbullcom/2019/11/08/fc0f91de-3998-4be5-b50e-96d8d9e0cd45/lol-10-ans-league-of-legends"  alt="League of Legends" class="w3-left w3-circle w3-margin-right" style="width:80px">   
      <img src="https://cdn.vox-cdn.com/thumbor/eNOhiVdnvnyYEv_9kIw1IABEyZI=/0x0:3011x1447/1400x933/filters:focal(1123x329:1603x809):no_upscale()/cdn.vox-cdn.com/uploads/chorus_image/image/66954486/VALORANT_Jett_Red_crop.0.jpg"  alt="Valorant" class="w3-left w3-circle w3-margin-right" style="width:80px">   
      <img src="https://lh6.googleusercontent.com/EjWbZJHCPZSv5RizEXOn-raZqV0DnY2igSYGXX5w82H-KroN6ogVwbWzFHgCr0v8tq_ukNUI3kk3yeARRk3I1LIFY4Am9pMcD89mVM76v9-cbKD1OcPiKcb8GU2ivsN1mQ1p-Yxj"  alt="Team Fight Tactics" class="w3-left w3-circle w3-margin-right" style="width:80px">   
  <!-- End About Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Marikina City, Philippines</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 091234567890</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: niggalicious@gmail.com</p>
    </div><br>
    <p>Let's get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://code.visualstudio.com/" target="_blank" class="w3-hover-text-green">Visual Studio Code</a> and <a href="https://www.facebook.com/profile.php?id=100087588745459&mibextid=ZbWKwL" target="_blank" class="w3-hover-text-green">Coder</a> with the help of <a href="https://www.w3schools.com/" target="_blank" class="w3-hover-text-green">W3School</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
