
<?php
session_start();
if(isset($_GET['logout'])){
  session_destroy();
  header("location: .php");
}
?>

<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css">
<link href="bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/5.0.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.min.js"></script>





<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Dropdown Hover CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap Dropdown Hover JS -->
    <script src="js/bootstrap-dropdownhover.min.js"></script>
<script>

  function getOption() {
              selectElement = document.querySelector('#city-link');
                        
              output = 
                selectElement.options[selectElement.selectedIndex].value;
    
              document.querySelector('.output').textContent = output;
          }
          $(".aust").click(function() {
    var fired_button = $(".aust").val();
    alert(fired_button);
});

document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth > 992) {

	document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

		everyitem.addEventListener('mouseover', function(e){

			let el_link = this.querySelector('a[data-bs-toggle]');

			if(el_link != null){
				let nextEl = el_link.nextElementSibling;
				el_link.classList.add('show');
				nextEl.classList.add('show');
			}

		});
		everyitem.addEventListener('mouseleave', function(e){
			let el_link = this.querySelector('a[data-bs-toggle]');

			if(el_link != null){
				let nextEl = el_link.nextElementSibling;
				el_link.classList.remove('show');
				nextEl.classList.remove('show');
			}


		})
	});

}
// end if innerWidth
}); 
  </script>
</head>
<style>
  #aknow{
    text-decoration:none;
    list-style: none;
    color:black;
  }
  .navbar{
    margin-bottom: 0px !important;
  }
  #togglew{
    /* padding: 14px 10px;
    margin-top: 14px; */
    background-color: white !important;
    padding: 9px 11px;
    margin-top: 12px;
    margin-right: 14px;
    border-radius: 12px;
  }

  .container-fluid{
    /* display: flex;
    flex-direction: column;
    justify-content: center; */
    background-color: #e9e9e9;
    border-radius: 50px;
  }
  .container{
    /* max-width: 100% !important;
    display: inline-flex !important;
    flex-wrap: nowrap !important; */
    width: 100% !important;

  }
   #logo {
    float: left;
    margin: 8px 40px 0px 40px !important;
    width: 192px !important;
    height: 42px !important;
  }
.navbar-brand {
    height: auto;
    margin: 0;
    padding: 0;
    margin-right: 20px;
}
.navbar-default{
/* color: #fff; */
background-color: #19185f !important;
border-color: #000000;
}
.navbar-default .navbar-nav > li > a{
	color:#fff;
}
.navbar-default .navbar-nav > .dropdown > a .caret{
	border-top-color: black;
    border-bottom-color: black;
}
#carett{
  display: inline-block;
    width: 0px;
    height: 0;
    margin-left: 2px;
    vertical-align: middle;
    border-top: 5px dashed;
    border-top: 5px solid\9;
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
}
.navbar-default .navbar-brand{
	color:#fff;
}
.menu-large {
  position: static !important;
}
.megamenu{
  padding: 20px 0px;
  width:100%;
}
.megamenu> li > ul {
  padding: 0;
  margin: 0;
}
.megamenu> li > ul > li {
  list-style: none;
}
.megamenu> li > ul > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.428571429;
  color: #333333;
  white-space: normal;
}
.megamenu> li ul > li > a:hover,
.megamenu> li ul > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.megamenu.disabled > a,
.megamenu.disabled > a:hover,
.megamenu.disabled > a:focus {
  color: #999999;
}
.navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
  color: #00A7E8;
}
.megamenu.disabled > a:hover,
.megamenu.disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.megamenu.dropdown-header {
  color: #428bca;
  font-size: 18px;
}
@media (max-width: 768px) {
  .container{
    /* max-width: 100% !important;
    flex-wrap: nowrap !important;
    display: inline-flex; */
    
    width: 100% !important;
  }
  .megamenu{
    margin-left: 0 ;
    margin-right: 0 ;
  }
  .megamenu> li {
    margin-bottom: 30px;
  }
  .megamenu> li:last-child {
    margin-bottom: 0;
  }
  .megamenu.dropdown-header {
    padding: 3px 15px !important;
  }
  .navbar-nav .open .dropdown-menu .dropdown-header{
	color:#fff;
  }
  #know-more{
    float:none o !important;
    list-style: none;

  }
  .nav-link{
    display: flex !important;
    padding: 10px 3px !important;
  }
  .container-fluid{
    margin: 0 0 !important;
    padding: 0 0 !important;
    border-radius: 10px !important;
  }
  .navbar{
    margin: 0 !important;
  }
  .navbar-collapse{
    margin-bottom: 10px !important;
  }
  #carett{
    margin-top: 6px !important;
    margin-left: 5px !important;
   }
  #selectives{
    background-color: white;
    border-radius: 24px;
    margin: 5px;
   }
  #selectivess{
    background-color: white;
    border-radius: 24px;
    margin: 5px;
   }
   #sort{
    margin: 2px -110px 0 !important;
   }
  }
 

}



.navbar .megamenu{ padding: 1rem; }

/* ============ desktop view ============ */
@media all and (min-width: 992px) {
  .navbar{
    padding: 0 0 !important;
  }
  .navbar .has-megamenu{position:static!important;}
  .navbar .megamenu{left:0; right:0; width: 60%; margin-top:0; }
  .logo{     padding: 5px 25px !important;}
  #city-link{
    
    font-size: 20px;
    background-color: white;
    color: grey;
    padding-bottom: 17px;
    padding-left: 15px;
    padding-right: 12px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;


  }
  #city-linkk{
    
    font-size: 20px;
    background-color: white;
    color: grey;
    margin: 7px;
    padding-top: 9px;
    padding-bottom: 11px;
    padding-left: 15px;
    padding-right: 12px;
    border-radius: 20px;


  }
  
  #know-more{     
    display: inline-flex;
    font-size: 20px;
    background-color: white;
    color: black;
    margin: 10px 36px 0 31px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 15px;
    float: right;
    list-style: none;

}

    .city-drop-link-group{
      webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 5;
    }
    .dropdown-menu{
      width: 60%;
      border: 1px solid rgba(0,0,0,.15);
      padding: 10px 0 !important;
    margin: 0px -20px!important;
     border-end-start-radius: 10px !important;
     border-end-end-radius: 10px !important;
     box-shadow: 0px 10px 35px #5e5e5e !important;
     -moz-box-shadow:0px 10px 35px -6px #5e5e5e !important;
-webkit-box-shadow:0px 10px 35px -6px #5e5e5e !important ;
-khtml-box-shadow: 0px 10px 35px -6px #5e5e5e !important ;
    }
    #selectives{
      padding: 20px 0 !important;
    margin: 0px 120px!important;
    }
    #selectivess{
      padding: 20px 0 !important;
    margin: 0px 22px!important;
    }
    .all{
      width: 100%;
    }
    .city-drop-link-group li {
      list-style: none;
      text-decoration: none;
    }
    .city-drop-link-group li a {
      list-style: none;
      text-decoration: none;
      color: black;
    }
    .city-drop-link-group li a:hover {
      list-style: none;
      color: #0d6efd;
    }

}	
/* ============ desktop view .end// ============ */

/* ============ mobile view ============ */
@media(max-width: 991px){
  .navbar.fixed-top .navbar-collapse, .navbar.sticky-top .navbar-collapse{
    overflow-y: auto;
      max-height: 90vh;
      margin-top:10px;
  }
  #know-more{     
    display: inline-flex;
    font-size: 20px;
    background-color: white;
    color: black;
    margin: 10px 36px 0 31px;    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 15px;
    list-style: none;

  }

    #city-link{

    font-size: 20px;
    background-color: white;
    color: grey;
    padding-bottom: 17px;
    padding-left: 15px;
    padding-right: 12px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    display: inline-block;
    margin-left: 40px;
    }
    #city-linkk{
    font-size: 20px;
    background-color: white;
    color: grey;
    margin: 7px;
    padding-top: 9px;
    padding-bottom: 11px;
    padding-left: 15px;
    padding-right: 12px;
    border-radius: 20px;
    display: inline-block;
    margin-left: 40px;
    }
    .city-drop-link-group{
      webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    }
    .city-drop-link-group li {
      list-style: none;
      text-decoration: none;
    }
    .city-drop-link-group li a {
      list-style: none;
      text-decoration: none;
      color: black;
    }
    .city-drop-link-group li a:hover {
      list-style: none;
      color: #0d6efd;
    }
  .logo{     padding: 0px 25px !important;}

}

@media(max-width: 450px){
  .city-drop-link-group{
    webkit-column-count: 3;
  -moz-column-count: 3;
  column-count: 2;
  }
}


@media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{   }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
}	

        </style>
      
<div class="navbar navbar-default navbar-static-top" style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" id="togglew" data-toggle="collapse" data-target=".navbar-collapse">
    
        <i class="fa fa-sort-down" style="
            font-size: 35px;
            margin-top: -15px;
            color: #19185f !important;
        "></i>
      </button>
      <!-- <div className="logo" > -->
        <img src="logo-m.png" alt="Logo" id="logo" width="160px"/>  
        <!-- </div>   -->
  </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
    
        <li class="dropdown menu-large" style="padding-top: 6px;">          
        <a readonly href="#"  class="dropdown-toggle" id="city-link" data-toggle="dropdown" value="Select a city">Select a city <b class="caret" id="carett"></b></a>          
     
            <ul class="dropdown-menu megamenu city-drop-link-group" id="selectives">

  <li> <a href="http://localhost/hostels/index.php?hostel_city=agra" class="aust" >Agra</a> 
  </li>
  <li>                    
  <a href="http://localhost/hostels/index.php?hostel_city=Durgapur" class="aust">Durgapur</a>
  </li>
  <li>       
  <a href="http://localhost/hostels/index.php?hostel_city=Kochi" class="aust">Kochi</a>
  </li>
  <li>                
  <a href="http://localhost/hostels/index.php?hostel_city=Palghar" class="aust">Palghar</a>
  </li>
  <li>         
  <a href="http://localhost/hostels/index.php?hostel_city=Trichy" class="aust">Trichy</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Allahabad" class="aust">Allahabad</a>
  </li>
  <li>                    
  <a href="http://localhost/hostels/index.php?hostel_city=Goa" class="aust">Goa</a>
  </li>
  <li>       
  <a href="http://localhost/hostels/index.php?hostel_city=Kottayam" class="aust">Kottayam</a>
  </li>
  <li>                    
  <a href="http://localhost/hostels/index.php?hostel_city=Patna" class="aust">Patna</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Udaipur" class="aust">Udaipur</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Aurangabad" class="aust">Aurangabad</a>      
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Gorakhpur" class="aust">Gorakhpur</a>
  </li> 
  <li>                   
  <a href="http://localhost/hostels/index.php?hostel_city=Kozhikode" class="aust">Kozhikode</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Rajahmundry" class="aust">Rajahmundry</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Udupi" class="aust">Udupi</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Bhiwadi" class="aust">Bhiwadi</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Guntur" class="aust">Guntur</a>
  </li>

  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Lucknow" class="aust">Lucknow</a>
  </li>
  <li>                 
  <a href="http://localhost/hostels/index.php?hostel_city=Ranchi" class="aust">Ranchi</a>
  </li>   
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Vadodara" class="aust">Vadodara</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Bhopal" class="aust">Bhopal</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Guwahati" class="aust">Guwahati</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Madurai" class="aust">Madurai</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Raipur" class="aust">Raipur</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Vapi" class="aust">Vapi</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Bhubaneswar" class="aust">Bhubaneswar</a>
  </li>  
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Haridwar" class="aust">Haridwar</a>
  </li> 
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Mangalore" class="aust">Mangalore</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Salem" class="aust">Salem</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Varanasi" class="aust">Varanasi</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Bokaro Steel City" class="aust">Bokaro Steel City</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Indore" class="aust">Indore</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Sonipat" class="aust">Sonipat</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Vijayawada" class="aust">Vijayawada</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Chandigarh" class="aust">Chandigarh</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Jaipur" class="aust">Jaipur</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Mysore">Mysore</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Surat" class="aust">Surat</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Visakhapatnam" class="aust">Visakhapatnam</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Coimbatore" class="aust">Coimbatore</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Jamshedpur" class="aust">Jamshedpur</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Nagpur" class="aust">Nagpur</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Thrissur" class="aust">Thrissur</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Ahmadnagar" class="aust">Ahmadnagar</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Dehradun" class="aust">Dehradun</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Jodhpur" class="aust">Jodhpur</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Nashik" class="aust">Nashik</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Tirupati" class="aust">Tirupati</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Kanpur" class="aust">Kanpur</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Navsari" class="aust">Navsari</a>
  </li>
  <li>
  <a href="http://localhost/hostels/index.php?hostel_city=Trivandrum" class="aust">Trivandrum</a>
  </li>

  </ul> 
  </li>
  </ul>
  <ul class="nav navbar-nav" style="margin-left: 10px;">
  <li class="dropdown menu" style="padding-top: 6px;">          
          <a readonly href="#"  class="dropdown-toggle" id="city-link" data-toggle="dropdown" value="Select Category">Select Category <b class="caret" id="carett"></b></a>          
      
              <ul  class="dropdown-menu megamenu " id="selectivess">

  <li> <a href="http://localhost/hostels/index.php?hostel_category=travel" class="aust" >Travel Hostels</a> 
  </li>
  <li> <a href="http://localhost/hostels/index.php?hostel_category=student" class="aust" >Student Hostels</a> 
  </li>
  </ul>
  </li>
  </ul>



  <li className="nav-item" id="know-more" >
    <a className="nav-link" id="aknow" href="login.php"> Login</a>
    <span>&nbsp;|&nbsp;</span>
    <a className="nav-link" id="aknow" href="register.php"> Sign Up </a>
  </li>
    </div>
  </div>
</div>

<div class="navbar" style=" margin-left:10px;
    margin-right: 10px;">
	    	<div class="container-fluid">
	    			<ul class="nav" style="    display: flex;
    flex-direction: row;
    justify-content: center;">
				        <li style="font-weight: bolder;"><a style="color:black;" href="#">Filters</a></li>
                <li class="nav-item dropdown">
        <a style="color:black;" class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Price <span class="caret" id="carett"></span>
        </a>
        <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li><a href="#">Separated link</a></li>
  </ul>
      </li>
                <li class="nav-item dropdown">
        <a style="color:black;" class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Facilities <span class="caret" id="carett"></span>
        </a>
        <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li><a href="#">Separated link</a></li>
  </ul>
      </li>
                <li class="nav-item dropdown">
        <a style="color:black;" class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Location <span class="caret" id="carett"></span>
        </a>
        <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li><a href="#">Separated link</a></li>
  </ul>
      </li>
                <li class="nav-item dropdown">
        <a style="color:black;" class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Locality <span class="caret" id="carett"></span>
        </a>
        <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li><a href="#">Separated link</a></li>
  </ul>
      </li>
                <li class="nav-item dropdown">
        <a style="color:black;" class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sort<span class="caret" id="carett"></span>
        </a>
        <ul class="dropdown-menu" id="sort">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li><a href="#">Separated link</a></li>
  </ul>
      </li>
				    </ul>
				
	    		</div>
          <?php if(isset($_SESSION['success'])) : ?>
              <div class="error success">
                <h3>
                  <?php
                  echo $_SESSION['success'];
                  unset($_SESSION['success']);
                  ?>
                  </h3>
            </div>
            
            <?php endif ?>
            <?php if(isset($_SESSION['username'])): ?>
              <h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
              <button>
                <a href="index.php?logout='1'">Logout</a>
            </button>
            <?php endif ?>
<?php



$db = mysqli_connect("localhost", "root", "", "hostels");

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['submit'])) {
        // Get image name
        $image = $_FILES['hostel_image']['name'];
        // Get text
        $hostel_name = mysqli_real_escape_string($db, $_POST['hostel_name']);
        $hostel_city = mysqli_real_escape_string($db, $_POST['hostel_city']);
        $hostel_address = mysqli_real_escape_string($db, $_POST['hostel_address']);
        $owner_name = mysqli_real_escape_string($db, $_POST['owner_name']);
        $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
        $price_range = mysqli_real_escape_string($db, $_POST['price_range']);
        $hostel_feature = mysqli_real_escape_string($db, $_POST['hostel_feature']);
        $hostel_description = mysqli_real_escape_string($db, $_POST['hostel_description']);
        $hostel_category = mysqli_real_escape_string($db, $_POST['hostel_category']);

        // image file directory
        $target = "images/".basename($image);

        $sql = "INSERT INTO hostel (hostel_image, hostel_name, hostel_city, hostel_address, owner_name, phone_number, price_range, hostel_feature, hostel_description, hostel_category ) VALUES ('$image', '$hostel_name', '$hostel_city', '$hostel_address', '$owner_name', '$phone_number', '$price_range', '$hostel_feature', '$hostel_description', '$hostel_category')";
        // execute query
        mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['hostel_image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
        }else{
                $msg = "Failed to upload image";
        }
}
$result = mysqli_query($db, "SELECT * FROM hostel");


if(isset($_GET["hostel_city"])){
        $hostel_city = $_GET['hostel_city'];
        $result = mysqli_query($db, "SELECT * FROM hostel where hostel_city = '".$hostel_city."'");
      }
        
      if(isset($_GET["hostel_category"])){
        $hostel_category = $_GET['hostel_category'];
        $result = mysqli_query($db, "SELECT * FROM hostel where hostel_category = '".$hostel_category."'");
      }
   
      $content="content";
      $contentt="contentt";
      $myModal="myModal";
      $modal_content="modal_content";
      $parts="parts";
      $Featured="Featured";
      $con= "con";
      $co="co";
      $big="big";
      $small="small";
      $Rs="Rs.";
      $Category="Category";
      $Ratings="Ratings";
      $price="price";
      $Contact="Contact: ";
      $close="close";
      $Description="Description";
    $cl="cl";
    $cr="cr";
      while ($row = mysqli_fetch_array($result)) {
        echo "<div id=$content >";
        // echo "<span id="$close">";
        // echo "&times;";
        // echo "</span>";

        echo "<img id=$parts class='image' src='images/".$row['hostel_image']."' >";
        
        echo "<div id=$con >";
        echo "<div id=$co >";
      echo "<div id=$cl >";
      echo "<h4 id=$parts >".$row['hostel_name']."</h4>";
      echo "<p id=$parts>".$row['hostel_city']."</p>";
      echo "<p id=$parts>".$row['hostel_address']."</p>";
      echo "<h5 id=$parts >$Featured</h5>";
      echo "<p id=$parts>".$row['hostel_feature']."</p>";
      echo "<div id=$price class='cat'>";
      echo "<span id=$parts>$Category</span>";
      echo "&nbsp";
      echo "<span>".$row['hostel_category']."</span>";
      echo "</div >"; 
      
      echo "</div>";
      echo "<div id=$cr >";
      echo "<h4 id=$parts >$Ratings</h4>";
      echo '<i class="fa fa-star" style="
      padding: 5px;
      "></i><i class="fa fa-star" style="
      padding: 5px;
      "></i><i class="fa fa-star" style="
      padding: 5px;
      "></i><i class="fa fa-star" style="
      padding: 5px;
      "></i><i class="fa fa-star" style="
      padding: 5px;
      "></i>';
      echo "<br/>";
      
      echo "<div id=$price>";
      echo "<span>$Rs</span>";
      echo "<span>".$row['price_range']."</span>";
      echo "</div >";
      
      echo "<h4 id=$parts >$Contact</h4>";
      
      echo "<p id=$parts>".$row['phone_number']."</p>";
      echo "<p id=$parts>".$row['owner_name']."</p>";    
       echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";


        echo "<div class='modal fade' id=$myModal role='dialog' >";
        echo "<div class='modal-dialog'>";
        echo "<div id=$modal_content >";
              echo "<div id=$contentt >";
              echo "<div id=$big>";
              echo "<img id=$parts class='imageee' src='images/".$row['hostel_image']."' >";
              echo "<div id=$small>";
              echo "<img id=$parts class='imagee' src='images/".$row['hostel_image']."' >";
              echo "<img id=$parts class='imagee' src='images/".$row['hostel_image']."' >";
              echo "<img id=$parts class='imagee' src='images/".$row['hostel_image']."' >";
              echo "</div>";
              echo "</div>";
              echo "<div id=$con >";
              echo "<div id=$co >";
            echo "<div id=$cl >";
            echo "<h4 id=$parts >".$row['hostel_name']."</h4>";
            echo "<p id=$parts>".$row['hostel_city']."</p>";
            echo "<p id=$parts>".$row['hostel_address']."</p>";
            echo "<h5 id=$parts >$Featured</h5>";
            echo "<p id=$parts>".$row['hostel_feature']."</p>";
            echo "<h5 id=$parts >$Description</h5>";
            echo "<p id=$parts>".$row['hostel_description']."</p>";
            echo "</div>";
            echo "<div id=$cr >";
            echo "<h4 id=$parts >$Ratings</h4>";
            echo '<i class="fa fa-star" style="
            padding: 5px;
            "></i><i class="fa fa-star" style="
            padding: 5px;
            "></i><i class="fa fa-star" style="
            padding: 5px;
            "></i><i class="fa fa-star" style="
            padding: 5px;
            "></i><i class="fa fa-star" style="
            padding: 5px;
            "></i>';
            echo "<br/>";
            
            echo "<div id=$price>";
            echo "<span>$Rs</span>";
            echo "<span>".$row['price_range']."</span>";
            echo "</div >";
            
            echo "<h4 id=$parts >$Contact</h4>";
            
            echo "<p id=$parts>".$row['phone_number']."</p>";
            echo "<p id=$parts>".$row['owner_name']."</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
        
              
            }

        ?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All Registered Hostels</title>
  
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        </head>
<body>
       

        <style type="text/css">
      
        .cat{
          float: left !important;
    width: 100% !important;
    display: flex !important;
    flex-direction: row !important;
    margin: 1px 0 !important;
        }
       .modal{
        /* display: block; */
    margin: auto !important;
    height: fit-content !important;
       }
       .modal-dialog{
         width:60% !important;
       }
.imagee{
  margin: 2px !important;
    width: 100px !important;
    height: auto !important;
}
.imageee{
  margin: 4px !important;
    width: 300px !important;
    height: auto !important;
}
       #big{
         display: grid !important;
         padding: 5px !important;

       }
       #small{
         display: flex !important;
       }
        #con{
          width: 100%;
          display: flex;
          flex-direction: row-reverse;
        }
       
        #co{
          width: 100%;
          display: block;
          display: flex;
          flex-wrap: nowrap;
        }

        #cl{
          width:60% !important;
          max-width:60% !important;
        }
        #cr{
          width:40% !important;
          max-width:40% !important;
        }
         #content{
           width: 65%;
           margin: 20px auto;
           border: 1px solid #cbcbcb;
           height: 210px;
           background-color: #ededed;
           display: flex;
    flex-wrap: nowrap;
    border-radius: 10px !important;

   }
         #contentt{
           width: 100%;
           margin: 20px auto;
           border: 1px solid #cbcbcb;
           height: 310px;
           background-color: #ededed;
           display: flex;
    flex-wrap: nowrap;
    flex-direction:row !important;
    border-radius: 10px !important;

   }
   #price{
    display: flex;
    /* justify-content: center; */
    font-size: 17px;
    font-weight: bolder;
    margin-bottom: 15px;
   }
   .fa fa-star{
     padding: 5px !important;
   }
   @media screen and (max-width:1052px) { 
    .modal-dialog{
        

         display: flex !important;
    justify-content: center;
    width: 70% !important;
    margin: auto !important;
       }
        #content{
        width:90%;
        }
        #contentt{
        width:100%;
        height: 215px;

        }
        .imagee{
    width: 55px !important;
    height: 60px !important;

}
.imageee{
  width: 170px !important;
    height: 130px !important;
}
i{
     padding:2px !important;
   }
   #con{
          padding: 5px !important;
        }
   }
   @media screen and (max-width:698px) { 
    #big{
         padding: 11px 0 7px 7px !important;
       }
    #con{
          padding: 5px !important;
        }
    .modal-dialog{
        

        display: flex !important;
   justify-content: center;
   width: 95% !important;
   margin: auto !important;
      }
     #cl{
      padding-left: 6px !important;
     }

     .imagee{
    width: 58px !important;
    height: 65px !important;
display: none !important;
visibility: hidden !important;
}
.imageee{
  width: 150px !important;
    height: 170px !important;
}
        #content{
        width: 100%;
        border: none;
        height: 155px;
        border-radius: 10px !important;

        }
        #contentt{
        width: 100%;

        border: none;
           height: 200px;
        border-radius: 10px !important;

        }
        img{
           width: 140px !important;
           margin: 7px !important;
           height: 140px !important;
           padding: 0 0 !important;
           border-radius: 10px !important;
   }

   i{
     padding:1px !important;
   }
   h4,h5{
    margin: 2px 0 !important;
    margin-top: 5px !important;
   }

   #price{
    margin-bottom: 0 !important;
  }
  #parts{
        display: flex;
        flex-direction: row-reverse;
    // padding-right: 25px;
    font-size:13px;
   }
  }
   form{
           width: 50%;
           margin: 20px auto;
   }
   form div{
           margin-top: 5px;
   }
   #img_div{
           width: 80%;
           padding: 5px;
           margin: 15px auto;
           border: 1px solid #cbcbcb;
   }
   #img_div:after{
           content: "";
           display: block;
           clear: both;
   }
   img{
           float: left;
           margin: 24px;
           width: 242px;
    height: 160px;
    border-radius: 10px !important;
   }
   h4{
          //  padding-top: 30px;
          float: left !important;
    width: 100% !important;
    display: flex !important;
    flex-direction: row !important;
    font-weight: bolder !important;
    margin: 2px 0 !important;
    margin-top: 5px !important;
   }
   h5{
          //  padding-top: 30px;
          float: left !important;
    width: 100% !important;
    display: flex !important;
    flex-direction: row !important;
    font-weight: bolder !important;
    margin: 2px 0 !important;
    // margin-top: 5px !important;
    margin-top: 14px !important;
   }

   p{
     float: left !important;
     width: 100% !important;
    display: flex !important;
    flex-direction: row !important;
    margin: 1px 0 !important;
   }
   #parts{
        display: flex;
        flex-direction: row-reverse;
    // padding-right: 25px;
    /* font-size:13px; */
   }
   .App-header {
  background-color: #282c34;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-size: calc(10px + 2vmin);
  color: white;
   }
  
  
 

  </style>
  <div>
  
        
 <div className="App-header">

        <?php
        
        $content="content";
        $contentt="contentt";
        $myModal="myModal";
        $modal_content="modal_content";
        $parts="parts";
        $Featured="Featured";
        $con= "con";
        $co="co";
        $Rs="Rs.";
        $Ratings="Ratings";
        $price="price";
        $Contact="Contact: ";
        $close="close";
        $Description="Description";
        
      $cl="cl";
      $cr="cr";
        while ($row = mysqli_fetch_array($result)) {


          echo "<div id=$content >";
          // echo "<span id="$close">";
          // echo "&times;";
          // echo "</span>";

          echo "<img id=$parts class='image' src='images/".$row['hostel_image']."' >";
          echo "<div id=$con >";
          echo "<div id=$co >";
        echo "<div id=$cl >";
        echo "<h4 id=$parts >".$row['hostel_name']."</h4>";
        echo "<p id=$parts>".$row['hostel_city']."</p>";
        echo "<p id=$parts>".$row['hostel_address']."</p>";
        echo "<h5 id=$parts >$Featured</h5>";
        echo "<p id=$parts>".$row['hostel_feature']."</p>";
        echo "</div>";
        echo "<div id=$cr >";
        echo "<h4 id=$parts >$Ratings</h4>";
        echo '<i class="fa fa-star" style="
        padding: 5px;
        "></i><i class="fa fa-star" style="
        padding: 5px;
        "></i><i class="fa fa-star" style="
        padding: 5px;
        "></i><i class="fa fa-star" style="
        padding: 5px;
        "></i><i class="fa fa-star" style="
        padding: 5px;
        "></i>';
        echo "<br/>";
        
        echo "<div id=$price>";
        echo "<span>$Rs</span>";
        echo "<span>".$row['price_range']."</span>";
        echo "</div >";
        
        echo "<h4 id=$parts >$Contact</h4>";
        
        echo "<p id=$parts>".$row['phone_number']."</p>";
        echo "<p id=$parts>".$row['owner_name']."</p>";
        echo "<p id=$parts>".$row['hostel_category']."</p>";

        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";


          echo "<div class='modal fade' id=$myModal role='dialog' style='padding-right: 16px;display: flex;align-items: center;justify-content: center;' >";
          echo "<div class='modal-dialog'>";
          echo "<div id=$modal_content >";
                echo "<div id=$contentt >";
                // echo "<span id="$close">";
                // echo "&times;";
                // echo "</span>";

                echo "<img id=$parts class='image' src='images/".$row['hostel_image']."' >";
                echo "<div id=$con >";
                echo "<div id=$co >";
              echo "<div id=$cl >";
              echo "<h4 id=$parts >".$row['hostel_name']."</h4>";
              echo "<p id=$parts>".$row['hostel_city']."</p>";
              echo "<p id=$parts>".$row['hostel_address']."</p>";
              echo "<h5 id=$parts >$Featured</h5>";
              echo "<p id=$parts>".$row['hostel_feature']."</p>";
              echo "<h5 id=$parts >$Description</h5>";
              echo "<p >".$row['hostel_description']."</p>";
              echo "</div>";
              echo "<div id=$cr >";
              echo "<h4 id=$parts >$Ratings</h4>";
              echo '<i class="fa fa-star" style="
              padding: 5px;
              "></i><i class="fa fa-star" style="
              padding: 5px;
              "></i><i class="fa fa-star" style="
              padding: 5px;
              "></i><i class="fa fa-star" style="
              padding: 5px;
              "></i><i class="fa fa-star" style="
              padding: 5px;
              "></i>';
              echo "<br/>";
              
              echo "<div id=$price>";
              echo "<span>$Rs</span>";
              echo "<span>".$row['price_range']."</span>";
              echo "</div >";
              
              echo "<h4 id=$parts >$Contact</h4>";
              
              echo "<p id=$parts>".$row['phone_number']."</p>";
              echo "<p id=$parts>".$row['owner_name']."</p>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              
          
                
              }
              
         ?>
</div>
</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script>
$(document).ready(function(){
  $(".image").click(function(){
    $("#myModal").modal();
  });
});

lightbox.addEventListener('click', e => {
  if (e.target !== e.currentTarget) return
  lightbox.classList.remove('active')
})
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>