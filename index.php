<style> 

  body {
  
    font-family: Georgia, "Arial", serif;
  	background-image: url("./images/funnydog.jpg");
	  background-size: cover;	 
	    }


  .btn-group .button {
    margin: 70px 0 5px 12;
    background-color: transparent;
    border: 4px solid white;
    color: white;
    padding: 15px 25px;
    display: inline-block;
    font-size: 18px;
    cursor: pointer;
    border-radius: 12px;
      }


  .btn-group .button:hover {
    background-color: white;
    color: black;
      }  


  .medialink{
  float: right;
  padding: 25px 20px;
    }


  .medialink .logo:hover {
    background-color: white;
    border-radius: 12px;
      }



  .intro {
    margin: 0px 10 0px 80;
    padding: 1px 1px;
    width: 30%;
    background-size: cover;
    color: white; 
    font-size: 18px;
    text-align: center;
    line-height: 1.5;
    text-shadow: 1px 1px black;
      }


  .intro .logo1 {
    border-radius: 10px;
    border: 4px solid white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }


  .p .quote {
    background-color: white;
    color: transparent;
      }


  .image {
    border-radius: 100%;
    border: 4px solid white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }



  .modal {
    display: none; 
    position: fixed; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.8); 
    padding-top: 40px;
      }


  .container {
    padding: 26px;
    font-family: 'arial', cursive; 
    font-weight: normal;
      }


  .modal-content {
    background-color: #fefefe;
    margin: 3% auto 15% auto; 
    border: 1px solid #888;
    width: 75%;
    border-radius: 12px;
    line-height: 2.5;
    font-style: Arial;
      }


  
  .close {
    position: absolute;
    right: 57px;
    top: 0px;
    color: white;
    font-size: 90px;
    font-weight: bold;
      }

  

  .close:hover,
  .close:focus {
    color: red;
    cursor: pointer;
      }

    
  .aspiration {
    padding: 16px 40 116px 40;
    background-size: cover;
    border-radius: 12px;
    font-size: 18px;
    text-align: justify;
    background-image: url("./modalcontent_background/aspirationbackground.jpg");
    text-shadow: 1px 1px black;
    color: #c9d0d4;  
      }


  .achievement {
    padding: 16px 40 16px 80;
    background-image: url("./modalcontent_background/achievementbackground.jpg");
    color: #c9d0d4;
    border-radius: 12px;
    font-size: 18px;
    text-shadow: 1px 1px black;
      }
	
  
  .interest{
    padding: 16px 40 16px 40;
    background-size: cover;
    color: white;
    border-radius: 12px;
    font-size: 18px;
    font face: Arial;
    background-image: url("./modalcontent_background/interestbackground.jpg");
    text-shadow: 1px 1px black;
      }


</style>



<html>  
  <title>Vergel Profile</title>

  <body> 

    <div class="medialink">
      <a href="http://www.facebook.com/29vergel" target="_blank"><img src="./media_logo/facebook.png" class="logo" style="width:62px; height:60px" title="Facebook"></a>
      <a href="http://claveriavergel@gmail.com" target="_blank"><img src="./media_logo/gmail.png" class="logo" style="width:62px; height:60px" title="Gmail "></a>
      <a href="http://www.instagram.com/i.am.vergel" target="_blank"><img src="./media_logo/instagram.png" class="logo" style="width:62px; height:60px" title="Instagram"></a>
      <a href="http://www.twitter.com/vclaveria123" target="_blank"><img src="./media_logo/twitter.png" class="logo" style="width:62px; height:60px" title="Twitter"></a>
    </div>


    <div class="container">
      <div class="intro">
        <center>
          <img src="./front_logo/vergelname.png" class="logo1" style="width:402px; height:100px"> <br> <br>
          <img src="./front_logo/vergelface.jpg" class="image" style="width:222px; height:200px"> 
          <p class="quote"> <h3> "Don't Take Yourself Seriously No One Else Does"</h3></p> 
        </center>
      </div>
    </div>
     


    <div class="btn-group">	<center>

      <button onclick="aboutme.style.display='block'"  style="width:auto;" class="button">ABOUT ME</button> 
      <button onclick="education.style.display='block'"  style="width:auto;" class="button">EDUCATION</button>
      <button onclick="achievement.style.display='block'"  style="width:auto;" class="button">ACHIEVEMENT</button>
      <button onclick="aspiration.style.display='block'"  style="width:auto;" class="button">ASPIRATION</button>	
      <button onclick="interest.style.display='block'"  style="width:auto;" class="button">INTEREST</button>	</center>

    </div>


    
    <div id="aboutme" class="modal">
    <span onclick="aboutme.style.display='none'" class="close" title="Close">×</span>
      <div class="modal-content">
          <div class="container">
     
          <center> About me</center>

          </div>
      </div>
    </div>




    <div id="education" class="modal">
    <span onclick="education.style.display='none'" class="close" title="Close">×</span>
      <div class="modal-content">
          <div class="container">
     
           <br>
           <center>
            <strong>Lianga Central Elementary School</strong><br>
                    Lianga, Surigao del Sur <br>
                    Graduated School Year 2003 – 2009<br> <br> 
          </center>

          <center>
           <strong>Surigao del Sur State University</strong><br>
                   Lianga, Surigao del Sur<br>
                   Graduated School Year 2009 – 2013 
          </center><br>

          <center>
          <strong>University of Southeastern Philippines</strong> <br>
                  Barrio Obrero, Davao City, Philippines<br>
                  Bachelor of Science in Computer Science (BSCS)<br> 
                  2013 – Present
          </center>

          </div>
      </div>
    </div>


    <div id="achievement" class="modal">
    <span onclick="achievement.style.display='none'" class="close" title="Close">×</span>
     <div class="modal-content">
          <div class="container">
     
          <center> 
          <div class="achievement">
          <h3>Achievements</h3> 
          <img src="./images/trophylogo.png" class="logo" style="width:62px; height:60px" > <br>
            <strong>Champion</strong> <br> Summer League Basketball tournament Under 16 <br>
            Year - 2012 <br> <br>
            <img src="./images/sportmanshiplogo.png" class="logo" style="width:62px; height:60px"> <br>
            <strong>Sportsmanship award</strong> <br> Christmas Basketball League Under 16<br>
            Year - 2012 <br> <br> 
            <img src="./images/memberlogo.png" class="logo" style="width:62px; height:60px"> <br>
            <strong>Member of Computer Science Students</strong> <br>
            Year - 2013 – Present <br>

           <strong> Member of Philippines Society of Information Technology Students</strong> <br>
            Year - 2013 – Present
          </center>

          </div>
          </div>
      </div>   
    </div>



    <div id="aspiration" class="modal">
    <span onclick="aspiration.style.display='none'" class="close" title="Close">×</span>
      <div class="modal-content">
          <div class="container">
          <div class=aspiration> 
            <center>
              <strong><h3>Aspiration in Life</h3> </strong> <br>
              <img src="./images/aspirationlogo.png" class="logo" style="width:62px; height:60px" title="Aspiration ">
            </center>
                My aspiration in life is to find my purpose and to fulfil my purpose in this world. And this purposed are
                to travel across the world to get to know different culture of people. Visit every historic place and the 
                beautiful wonders of the world. To became good at everything. To get married, have 3 or 4 children and enjoy 
                my entire life with my beautiful wife. To settle down and to start enjoying everything coz I won’t
                be living forever. And in the end, to die without regrets.
  
            <br>
            <center>
              <strong><h3>Goals in Life</h3> </strong>  
              <img src="./images/goallogo.png" class="logo" style="width:62px; height:60px" title="Goals ">
            </center>
                My main goal for now is to pass all the subjects and to graduate in this university and that make my parents
                proud of me. To give my parents good life. To get a stable job in well respected company nowadays. 
                To apply what I learn in college. To live young, wild and free!.
                 
	              
          </div>
          </div>
      </div>
    </div>


    <div id="interest" class="modal">
    <span onclick="interest.style.display='none'" class="close" title="Close">×</span>
      <div class="modal-content">
          <div class="container">
          <div class="interest">
          <center> <br>
            <img src="./images/sportlogo.png" class="logo" style="width:62px; height:60px" title="Sports">  &nbsp&nbsp&nbsp
            <img src="./images/musiclogo.png" class="logo" style="width:62px; height:60px" title="Music">  &nbsp&nbsp&nbsp
            <img src="./images/travellogo.png" class="logo" style="width:62px; height:60px" title="Travels">  &nbsp&nbsp&nbsp
            <img src="./images/cooklogo.png" class="logo" style="width:62px; height:60px" title="Cooking"> &nbsp&nbsp&nbsp
            <img src="./images/gamelogo.png" class="logo" style="width:62px; height:60px" title="Gaming"> &nbsp&nbsp&nbsp
            <img src="./images/partyinglogo.png" class="logo" style="width:62px; height:60px" title="Partying">
       
          <br>
            Sports  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
            Music   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
            Travel  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
            Cooking &nbsp&nbsp&nbsp&nbsp Gaming &nbsp&nbsp&nbsp&nbsp 
            Partying

          </center>
          </div>
          </div>
      </div>
    </div>







  </body>
</html>