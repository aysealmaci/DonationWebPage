

<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="designs.css">
         <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
  text-decoration: none;
}
footer{
  width: 100%;
 
  position: fixed;
  bottom: 0;
  left: 0;
  background: rgb(21, 6, 50);
}
footer .content{
  max-width: 1350px;
  margin: auto;
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
footer .content p,a{
  color: #fff;
}
footer .content .box{
  width: 33%;
  transition: all 0.4s ease;
}
footer .content .topic{
  font-size: 22px;
  font-weight: 600;
  color: #fff;
  margin-bottom: 16px;

}
footer .content p{
  text-align: justify;
}
footer .content .lower .topic{
  margin: 24px 0 5px 0;
}
footer .content .lower i{
  padding-right: 16px;
}
footer .content .middle{
  padding-left: 80px;
}
footer .content .middle a{
  line-height: 32px;
}
footer .content .right input[type="text"]{
  height: 45px;
  width: 100%;
  outline: none;
  color: #d9d9d9;
  background: #000;
  border-radius: 5px;
  padding-left: 10px;
  font-size: 17px;
  border: 2px solid #222222;
}
footer .content .right input[type="submit"]{
  height: 42px;
  width: 100%;
  font-size: 18px;
  color: #d9d9d9;
  background: #eb2f06;
  outline: none;
  border-radius: 5px;
  letter-spacing: 1px;
  cursor: pointer;
  margin-top: 12px;
  border: 2px solid #eb2f06;
  transition: all 0.3s ease-in-out;
}


footer .bottom{
  width: 100%;
  text-align: right;
  color: #d9d9d9;
  padding: 0 40px 5px 0;
}
footer .bottom a{
  color: #eb2f06;
}
footer a{
  transition: all 0.3s ease;
}
footer a:hover{
  color: #eb2f06;
}
@media (max-width:1100px) {
  footer .content .middle{
    padding-left: 50px;
  }
}
@media (max-width:950px){
  footer .content .box{
    width: 50%;
  }
  .content .right{
    margin-top: 40px;
  }
}
@media (max-width:560px){
  footer{
    position: relative;
  }
  footer .content .box{
    width: 100%;
    margin-top: 30px;
  }
  footer .content .middle{
    padding-left: 0;
  }
}

    </style>
    </head>
      <body>
        <header>  
            <Center> <h1>DONATİON WEBSITE</h1></Center>
            <nav>
            <a href="main_page.php">main page</a>
            <a href="mainpage.php">Main Page</a>
                <a href="about_us_page.html">About Us</a>
                <a href="donate_stuff_page.php">Donate</a>
                <a href="">Find Product</a>
                <a href="contact.php">Contact Us</a>
                <div class="animation start-home"></div>
            </nav>
            <hr>
         </header>
         <section style="padding: 50px;">
            <h3>Contact Us via This Form</h3>
    
    <div class="container">
      <form action="contact.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
    
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="turkey">Turkey</option>
          <option value="germany">Germany</option>
          <option value="belgium">Belgium</option>
        </select>
    
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    
        <input type="submit" value="Submit">
      </form>
    </div>
         </section>
         <footer>
            <div class="content">
              <div class="left box">
                <div class="upper">
                 
         
                </div>
                <div>
                  <div class="topic">Contact us</div>
                  <div class="phone">
                    <a href="#"><i class="fas fa-phone-volume"></i>0534 612 2631</a>
                  </div>
                  <div class="email">
                    <a href="#"><i class="fas fa-envelope"></i>ayseeealmaciii@gmail.com</a>
                  </div>
                </div>
              </div>
              <div class="middle box">
                <div class="topic">Sections</div>
                <a href="main_page.php">Main Page</a>
                <BR></BR>
                <a href="about_us_page.html">About Us</a>
                <BR></BR>
                <a href="donate_stuff_page.php">Donate</a>
               
                <BR></BR>
                <a href="contact.php">Contact Us</a>
              </div>
              <div class="right box">
          
            </div>
            <div class="bottom">
            <p style="color: rgb(121, 1, 130); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">BY AYSE ALMACI</p>
          </footer>
    </body>
</html>

<?php

include("database_connection.php");

if(isset($_POST["firstname"],$_POST["lastname"],$_POST["country"],$_POST["subject"])){
    $name = $_POST["firstname"];
    $surname = $_POST["lastname"];
    $counrty = $_POST["country"];
    $subject = $_POST["subject"];

    $addtocontact = "INSERT INTO contact(firstname,lastname, country, msj) VALUES ('".$name."','".$surname."','".$counrty."','".$subject."' )";

    if($database->query($addtocontact)===TRUE){
        echo "<script>
        alert('Mesaj gönderildi')
        </script>";
    }
   
}
?>

