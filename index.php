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
  
  


	
</style>



<html>  
  <title>Vergel Profile</title>

  <body> 

    <div class="medialink">
      <a href="" ><img src="./media_logo/facebook.png" class="logo" style="width:62px; height:60px" title="Facebook"></a>
      <a href="" ><img src="./media_logo/gmail.png" class="logo" style="width:62px; height:60px" title="Gmail "></a>
      <a href="" ><img src="./media_logo/instagram.png" class="logo" style="width:62px; height:60px" title="Instagram"></a>
      <a href="" ><img src="./media_logo/twitter.png" class="logo" style="width:62px; height:60px" title="Twitter"></a>
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
      <button class="button">ASPIRATION</button>	
      <button class="button">INTEREST</button>	</center>

    </div>


    
    <div id="aboutme" class="modal">
      
       
    </div>




    <div id="education" class="modal">
      
       
    </div>


    <div id="achievement" class="modal">
      
       
    </div>







  </body>
</html>