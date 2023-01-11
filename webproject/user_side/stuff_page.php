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
	<title>Stuffs</title>
	<link rel="stylesheet" href="table_design.css">

  <style>
    
  
header{font-size: 40px;
    height: 100px;
    
    }

   
   





   p{font-size: 20px;}
   .dropbtn {
background-color: #7b25c1;
color: white;
padding: 16px;
font-size: 16px;
border: none;
}

.dropdown {
position: relative;
display: inline-block;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #ffecec;
min-width: 160px;
box-shadow: -5px 8px 16px 5px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}


body {
	
font-size: 12px;
font-family: sans-serif;
background:#e1a0ff;
}
h1 {
text-align: center;
margin: 20px 0 20px;
text-align: center;
font-size: 30px;
color: #ecf0f1;
text-shadow: 2px 2px 4px #000000;
font-family: 'Cherry Swash', cursive;
}

p {
position: absolute;
bottom: 20px;
width: 100%;
text-align: center;
color: #ecf0f1;
font-family: 'Cherry Swash',cursive;
font-size: 16px;
}

span {
color: #2BD6B4;
} 


  
  /* Close button on hover */
  .close:hover,
  .close:focus {
	color: red;
	cursor: pointer;
  }
  
  /* Add Zoom Animation */
  .animate {
	-webkit-animation: animatezoom 0.6s;
	animation: animatezoom 0.6s
  }
  
  @-webkit-keyframes animatezoom {
	from {-webkit-transform: scale(0)}
	to {-webkit-transform: scale(1)}
  }
  
  @keyframes animatezoom {
	from {transform: scale(0)}
	to {transform: scale(1)}
  }
  td { padding-top: 2px; padding-bottom: 2px;
		 padding-left: 60px;padding-right: 60px;
      font-family: 'Courier New', Courier, monospace;
      font-size: larger;
    text-align: center;
  
		   }
 
 

  </style>
</head>
<body>



			<?php

	 

// build SELECT query
$query = "SELECT * FROM stuff";
if (!($result = mysqli_query($connect,$query) ) ){

   print( "Could not execute query! <br />" );

} // end if

?>
<!-- end PHP script -->
<h1>Stuff Informations</h1>
<table>

   <tr>
   <th>Stuff Name</th> 
	   <th>Donator Name</th>
	   <th>Stuff</th>
   </tr>
   <?php if($result->num_rows > 0){ ?> 

   <?php while($row = $result->fetch_assoc()){  
   
	   print("<tr><td>".$row["stuff_name"]."</td><td>".$row["donator_name"].
	   "</td><>");?>
	   <td>
		<BR></BR>
		   <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['resim']); ?>"/>
       <a href="needed_stuff.php">I need this.</a>
	   </td>
    
   </tr>
   <?php } ?> 

   <?php }else{ ?>
	   <p class="status error">Stuff Informations not found</p> 
   <?php } ?>
</table>
          
</body>
</html>