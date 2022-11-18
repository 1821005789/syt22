<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style4.css" />
    <link rel="stylesheet" href="style3.css" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <title></title>
  </head>
  <body>
    <nav class="nav">
      <div class="container4">
      <img src="logo1.png" alt="Logo" width="10%">
        <ul>
          <li><a href="index.php" accesskey="1" title="">Home</a></li>
          <li><a href="aboutus.php" accesskey="2" title="">About US</a></li>
          <li><a href="upload.php" class="current" accesskey="3" title="">Careers </a></li>
          <li><a href="orderonline.php" accesskey="4" title="">Order online </a></li>
          <li><a href="contactus.php" accesskey="5" title="">Contact Us</a></li>
          <li><a href="register.php" accesskey="6" title="">Register</a></li>
        </ul>
        <header>
          <form id="form">
            <input type="text" id="search" class="search" placeholder="Search">
          </form>
        </header>
      </div>
    </nav>

    <div class="hero2">
      <div class="container4">
        
        <h1>Join our team</h1>
        
    <h3> We are expanding our branches and need experienced baker regularly.</n>
            Send us your detail with the form below</br>
        and we will be in contact shortly</h3>
				
      </div>
    </div>

    <div id="three-column" class="container">
           
        <div class="title">
            <h2>Fill out the form below and upload your cover letter and resume</h2>
            <form action="file_upload.php" method="POST"
    enctype="multipart/form-data">


 
<label for="name">First name:</label><br>
<input type="text" id="name" name="name"/><br>
<label for="email">Last name:</label><br>
<input type="text" id="email"name="email" /><br>
<label for="telephone">Email address:</label><br>
<input type="text" id="telephone" name="telephone"/><br>
<label for="message">Work experience</label><br>
<textarea name="message" id="message" cols="30" rows="10"></textarea><br />
<p>
    Select files to upload:
     
    <!-- name of the input fields are going to
        be used in our php script-->
    <input type="file" name="files[]" multiple><br>
    Select files to upload:
    <input type="file" name="files[]" multiple>
    <br><br>
     
    <input type="submit" name="submit" class="button3" value="Upload" >
</p>

</form>
        
        </div>
    
        
        
    </div>

    <script src="script4.js"></script>
    <script src="script3.js"></script>
   
    <footer  class="footer2">  
        Shelby 20IT1 （Shi Yutao）
      </footer>




      <style type="text/css">



body {background-image: URL("picture3.png");

background-position: right;

background-repeat: no-repeat;

background-attachment: fixed;}



</style>





</body>
</html>