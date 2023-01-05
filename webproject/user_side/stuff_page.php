<?php

$connect = new mysqli("localhost", "ayse", "2003", "maindb");
$connect->set_charset("utf8");
if ($connect) {
    echo "Database connection established successfully";
} else {
    echo "Error connecting to database: " . mysqli_connect_error();
}

?>

<!DOCTYPE html>
<head>
	<title>Search Results</title>
	<link rel="stylesheet" href="table_design.css">

</head>
<body>
<section class="intro">
  <div class="gradient-custom-2 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive">


			<?php

	 

// build SELECT query
$query = "SELECT * FROM stuff";
if (!($result = mysqli_query($connect,$query) ) ){

   print( "Could not execute query! <br />" );

} // end if

?>
<!-- end PHP script -->
<h3>Students Contacts Information</h3>
<table class="table table-dark table-bordered mb-0">

   <tr>
   <td>Stuff Name</td> 
	   <td>Donator Name</td>
	   <td>Stuff is</td>
   </tr>
   <?php if($result->num_rows > 0){ ?> 

   <?php while($row = $result->fetch_assoc()){  
   
	   print("<tr><td>".$row["stuff_name"]."</td><td>".$row["donator_name"].
	   "</td><>");?>
	   <td>
		<BR></BR>
		   <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['resim']); ?>"/>
	   </td>
   </tr>
   <?php } ?> 

   <?php }else{ ?>
	   <p class="status error">Students Contacts Information not found...</p> 
   <?php } ?>
</table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>