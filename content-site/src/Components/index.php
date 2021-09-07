
<?php
session_start();

// if(isset($_SESSION['username'])){
//   // $_SESSION['msg']= "Go! mand Login first";
//   header("location: login.php");

// }

if(isset($_GET['logout'])){
  session_destroy();
  // unset($_SESSION['username']);
  header("location: .php");
}
?>

<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<link href="bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">

<!-- <link rel="stylesheet" href="mega-menu.css"> -->
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

// $(function(){
//     $('.dropdown').hover(function() {
//         $(this).addClass('open');
//     },
//     function() {
//         $(this).removeClass('open');
//     });
// });

//           $(document).ready(function(){
//   $("#city-link").click(function(){
//     // $("#selectives");
//     // $("input").css('borderRadius', '2px 2px 0px 0px');
//   });


//   $(".aust").click(function(){
//     var das = $(this).html();
//     $("#city-link").val(das);
//     // $("#selectives");
//     // $("input").css('borderRadius', '2px');
//   });

// });
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
    /* #drop{
      padding: 20px 0 !important;
    margin: 0px 120px!important;
   
    } */
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
      /* font-size: 25px;
    background-color: white;
    color: grey;
    margin: 17px;
    padding-top: 10px;
    padding-bottom:10px;
    padding-left: 15px;
    padding-right: 12px;
    border-radius: 55px; */


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
        <!-- <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> -->
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
    
        <li class="dropdown menu-large" style="
    padding-top: 6px;
">
        <!-- <input readonly id="city-link" type="text" data-toggle="dropdown" value="Select a city" class="dropdown-toggle"><b class="caret" id="carett"></b> -->
          <a readonly href="#"  class="dropdown-toggle" id="city-link" data-toggle="dropdown" value="Select a city">Select a city <b class="caret" id="carett"></b></a>          
          <!-- <ul class="dropdown-menu megamenu row">
            <li class="col-sm-3"> -->
              <!-- <select class="dropdown-toggle" id="city-link" data-toggle="dropdown" onchange="location = this.value;">
              <option value="http://localhost/hostels/index.php?hostel_city=agra">Agra</option>
              <option value="Durgapur" ><a href="http://localhost/hostels/index.php?hostel_city=Durgapur">Durgapur</a></option>
              <option value="Kochi"><a href="http://localhost/hostels/index.php?hostel_city=Kochi">Kochi</a></option>
          </select> -->
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
<!-- </li>
</ul> -->
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


<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-secondary text-dark">
 <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav">
		<li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
	
		<li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Hover me  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
			  <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
			  <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
		    </ul>
		</li>
		<li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Hover me  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
			  <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
			  <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
		    </ul>
		</li>
		<li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Hover me  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
			  <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
			  <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
		    </ul>
		</li>
		<li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Hover me  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
			  <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
			  <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
		    </ul>
		</li>
	</ul>
  </div> 
 </div> 
</nav> -->
<div class="navbar" style=" margin-left:10px;
    margin-right: 10px;">
	    	<div class="container-fluid">
	    		<!-- <div class="navbar-header">
          <button type="button" id="togglew" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapibleMenu" style="border: 1px solid black;">
        <span class="icon-bar" style="border: 1px solid black;"></span>
        <span class="icon-bar"style="border: 1px solid black;"></span>
        <span class="icon-bar" style="border: 1px solid black;"></span>
      </button>
	    		</div> -->
	    		<!-- <div class="collapse navbar-collapse" id="collapibleMenu"> -->
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
         
            <!-- <script src="//code.jquery.com/jquery.min.js"></script>
2
<script src="js/main.js"></script> -->

	<!-- </div> -->
<script>
//         $(document).ready(function() {
//   jQuery(document).ready(function(){
//     $(".dropdown").hover(
//       function() { $('.dropdown-menu', this).stop().fadeIn("fast");
//         },
//       function() { $('.dropdown-menu', this).stop().fadeOut("fast");
//     });
//   });
// }
        </script>
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

        // image file directory
        $target = "images/".basename($image);

        $sql = "INSERT INTO hostel (hostel_image, hostel_name, hostel_city, hostel_address, owner_name, phone_number, price_range, hostel_feature, hostel_description ) VALUES ('$image', '$hostel_name', '$hostel_city', '$hostel_address', '$owner_name', '$phone_number', '$price_range', '$hostel_feature', '$hostel_description')";
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
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";


        echo "<div class='modal fade' id=$myModal role='dialog' >";
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
            echo "<p id=$parts>".$row['hostel_category']."</p>";
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
        <!-- <link rel="stylesheet" href="navbar.css"> -->
       
        <!-- <link href="/Components/navbar.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script> -->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        </head>
<body>
       

        <style type="text/css">
        /* #myModal{
          display: flex !important;
    padding-right: 16px !important;
    align-items: center !important;
        }
       */
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
           height: 210px;
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
   @media screen and (max-width:1000px) { 
        #content{
        width:90%;
        }
        #contentt{
        width:100%;
        }
   }
   @media screen and (max-width:667px) { 
     #cl{
      padding-left: 6px !important;
     }
        #content{
        width: 100%;
        border: none;
        height: 140px;
        border-radius: 10px !important;

        }
        #contentt{
        width: 100%;
        border: none;
        height: 140px;
        border-radius: 10px !important;

        }
        img{
           width: 140px !important;
           margin: 0px !important;
           height: 140px !important;
           padding: 0 0 !important;
           border-radius: 10px !important;
   }

   i{
     padding:2px !important;
   }
   h4,h5{
    margin: 2px 0 !important;
    margin-top: 5px !important;
   }

   #price{
    margin-bottom: 0 !important;
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
  
  
   #lightbox {
  position: fixed;
  z-index: 1000;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .8);
  display: none;
}

#lightbox.active {
  display: flex;
  justify-content: center;
  align-items: center;
}

#lightbox img {
  max-width: 90%;
  max-height: 80%;
  padding: 4px;
  background-color: black;
  border: 2px solid white;
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
              echo "<p id=$parts>".$row['hostel_category']."</p>";
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
//   const lightbox = document.createElement('div')
// lightbox.id = 'lightbox'
// document.body.appendChild(lightbox)

// const images = document.querySelectorAll('img')
// const p = document.querySelectorAll('p')
// images.forEach(image => {
//   image.addEventListener('click', e => {
//     lightbox.classList.add('active')
//     const img = document.createElement('img')
//     img.src = image.src
//     while (lightbox.firstChild) {
//       lightbox.removeChild(lightbox.firstChild)
//     }
//     lightbox.appendChild(img)
//   })
// })

// Get the modal
// var modal = document.getElementById("myModal");

// Get the button that opens the modal
// var btn = document.getElement("img");

// // Get the <span> element that closes the modal
// var span = document.getElementsById("close")[0];

// // When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
$(document).ready(function(){
  $(".image").click(function(){
    $("#myModal").modal();
  });
});
// ppp.forEach(pp => {
//   pp.addEventListener('click', e => {
//     lightbox.classList.add('active')
//     const p = document.createElement('p')
//     p.src = pp.src
//     while (lightbox.firstChild) {
//       lightbox.removeChild(lightbox.firstChild)
//     }
//     lightbox.appendChild(p)
//   })
// })

lightbox.addEventListener('click', e => {
  if (e.target !== e.currentTarget) return
  lightbox.classList.remove('active')
})
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>