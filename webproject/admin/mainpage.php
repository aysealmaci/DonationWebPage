<!DOCTYPE html>
<html>
    <head> 
    <style>
      nav {
	margin: 27px auto 0;
 
	position: relative;
	width: 590px;
	height: 50px;
	background-color: #34495e;
	
	font-size: 0;
}
nav a {
	line-height: 50px;
	height: 100%;
	font-size: 15px;
	display: inline-block;
	position: relative;
	z-index: 1;
	text-decoration: none;
	text-transform: uppercase;
	text-align: center;
	color: white;
	cursor: pointer;
}
nav .animation {
	position: absolute;
	height: 100%;
	top: 0;
	z-index: 0;
	transition: all .5s ease 0s;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

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

    
a:nth-child(1) {
	width: 100px;
}
a:nth-child(2) {
	width: 110px;
}
a:nth-child(3) {
	width: 100px;
}
a:nth-child(4) {
	width: 160px;
}
a:nth-child(5) {
	width: 120px;
}
nav .start-home, a:nth-child(1):hover~.animation {
	width: 100px;
	left: 0;
	background-color: #9624bc;
}
nav .start-about, a:nth-child(2):hover~.animation {
	width: 110px;
	left: 100px;
	background-color: #e74c3c;
}
nav .start-blog, a:nth-child(3):hover~.animation {
	width: 100px;
	left: 210px;
	background-color: #3498db;
}
nav .start-portefolio, a:nth-child(4):hover~.animation {
	width: 160px;
	left: 310px;
	background-color: #34dee4;
}
nav .start-contact, a:nth-child(5):hover~.animation {
	width: 120px;
	left: 470px;
	background-color: #e67e22;
}
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
background: #dcdde1;
}
h1 {
text-align: center;
margin: 40px 0 40px;
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
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #e272af;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
   
  }
  
  input[type=submit]:hover {
    background-color: #9eb6ff;
  }
  
  .container {
    border-radius: 5px;
    background-color: #e1a0ff;
    padding: 20px;
  }

  /* The Modal (background) */
.modal {
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 1; /* Sit on top */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	padding-top: 60px;
  }
  
  /* Modal Content/Box */
  .modal-content {
	background-color: #fefefe;
	margin: 5px auto; /* 15% from the top and centered */
	border: 1px solid #888;
	width: 80%; /* Could be more or less, depending on screen size */
  }
  
  /* The Close Button */
  .close {
	/* Position it in the top right corner outside of the modal */
	position: absolute;
	right: 25px;
	top: 0;
	color: #000;
	font-size: 35px;
	font-weight: bold;
  }
  img{max-height: fit-content;
max-width: fit-content;}
  
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
    </style>
    </head>
    <body>
        <header>  
            <Center> <h1>DONATION WEBSITE</h1></Center>

            <nav>
            <a href="mainpage.php">Main Page</a>
                <a href="about_us_page.html">About Us</a>
                <a href="donate_stuff_page.php">Donate</a>
                <a href="">Find Product</a>
                <a href="contact.php">Contact Us</a>
                <div class="animation start-home"></div>

          
            </nav>
           <hr>
         </header>
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

