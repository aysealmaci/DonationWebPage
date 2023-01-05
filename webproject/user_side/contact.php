

<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="designs.css">
    </head>
      <body>
        <header>  
            <Center> <h1>DONATİON WEBSITE</h1></Center>
            <nav>
                <a href="index.html">main page</a>
                <a href="about_us.html">About Us</a>
                <a href="donate_page.html">Donate</a>
                <a href="find_product_page.html">Find Product</a>
               <a href="contact_us.html">Contact Us</a>
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

