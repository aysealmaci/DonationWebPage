<?php
   include("connectdb.php");
   
   $message="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
     $StuffName = $_POST['stuff_name'];
	 $DonatorName = $_POST['donator_name'];
	if(!empty($_FILES['resim']['name'])) { 
        $fileName = basename($_FILES["resim"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 

        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){
	    $image = $_FILES['resim']['tmp_name']; 
       $imgContent = addslashes(file_get_contents($image));
	   //addslashes===>Add a backslash in front of each double quote (")===>\"text\"
		}
else{
print( 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.' );
die();}
	}
else{ 
        print( 'Please select an image file to upload.'); 
    die();}	
	
       $query = "INSERT INTO stuff (stuff_name,resim,donator_name	
       ) VALUES('$StuffName', '$imgContent','$DonatorName')";
	   
    $result=mysqli_query($connect, $query);
	
    if($result){
	$message = "Students Contacts Information added successfully.";
    } else{
     $message = "ERROR: Could not able to execute $query. ";  
      }
   }
   
?>
<html>
   
   <head>
      <title>Insert Students Contacts Information</title>
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
         table { background-color: #ADD8E6 }
 td    { padding-top: 2px; padding-bottom: 2px;
		 padding-left: 4px;padding-right: 4px;
		 border-width: 1px; border-style: inset }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
            <div><b>Students Contacts Information </b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post" enctype="multipart/form-data">
			   
                  <label>Stuff Name :</label><input type = "text" name = "stuff_name" class = "box"/><br /><br />
               
				  
				  <label>Donator Name  :</label><input type = "text" name = "donator_name" class = "box" /><br/><br />
				
				  <label>Select Image File:</label><input type="file" name="resim">
				  <br/><br /> 
                  <input type = "submit" value = " Insert "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $message; ?></div>
         </div>

         <?php
   include("connectdb.php");

	 $query = "SELECT * FROM stuff";

  ?>
			
      </div>
      <table>
		<tr>
			<td>Stuff Name</td>
			<td>Donator Name</td>
			<td>Stuff is</td>
			
		</tr>
		<?php if($result->num_rows > 0){ ?> 
   
        <?php while($row = $result->fetch_assoc()){  

			print("<tr><td>".$row["stuff_name"].$row["donator_name"].
			"</td><>");?>
			<td>
				<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['resim']); ?>"/>
			</td>
		</tr>
        <?php } ?> 
    
		<?php }else{ ?>
			<p class="status error">Students Contacts Information not found...</p> 
		<?php } ?>
</table>
   </body>
</html>

















