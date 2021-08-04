import React, { useState } from "react";
import "./navbar.css";
import {
  FaPlay,
  FaCameraRetro,
  FaVideo,
  FaMicrophoneAlt
} from "react-icons/fa";
import { IoMdChatbubbles } from "react-icons/io";
import { GiHamburgerMenu } from "react-icons/gi";
import logo from "./logo.png"
import { NavLink, Route } from "react-router-dom";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.js';


const Navbar = () => {
  const [showMediaIcons, setShowMediaIcons] = useState(false);

  function displaySelected() { var country = document.getElementById("countrySelect").value;
}
function resetSelection() {
document.getElementById("countrySelect").selectedIndex = 0;
}

    
  return (
    <>
     <nav className="navbar navbar-expand-lg navbar-dark bg-primary">
<div className="container-fluid">
        <div className="logo">
        <img src={logo} alt="Logo" className="logo" width="180px"/>  
        </div>
	<button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
		<span className="navbar-toggler-icon"></span>
	</button>
	<div className="collapse navbar-collapse" id="main_nav">
		<ul className="navbar-nav">
		
			<li className="nav-item dropdown has-megamenu" id="countrySelect" size="1" onchange="makeSubmenu(this.value)">
				<a value="" selected className="nav-link dropdown-toggle" id="city-link" href="#" data-bs-toggle="dropdown"> Select a City  </a>
				<div className="dropdown-menu megamenu" role="menu">
          <div className="all">

        <ul class="city-drop-link-group">

			      <li> <a href="http://localhost/hostels/index.php?hostel_city=agra" >Agra</a> 
      </li>
      <li>                    
            <a href="http://localhost/hostels/index.php?hostel_city=Durgapur">Durgapur</a>
      </li>
      <li>       
            <a href="http://localhost/hostels/index.php?hostel_city=Kochi">Kochi</a>
           </li>
      <li>                
            <a href="http://localhost/hostels/index.php?hostel_city=Palghar">Palghar</a>
         </li>
      <li>         
            <a href="http://localhost/hostels/index.php?hostel_city=Trichy">Trichy</a>
              </li>
      <li>
           <a href="http://localhost/hostels/index.php?hostel_city=Allahabad">Allahabad</a>
       </li>
          <li>                    
            <a href="http://localhost/hostels/index.php?hostel_city=Goa">Goa</a>
      </li>
      <li>       
            <a href="http://localhost/hostels/index.php?hostel_city=Kottayam">Kottayam</a>
        </li>
          <li>                    
            <a href="http://localhost/hostels/index.php?hostel_city=Patna">Patna</a>
      </li>
      <li>
                <a href="http://localhost/hostels/index.php?hostel_city=Udaipur">Udaipur</a>
      </li>
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Aurangabad">Aurangabad</a>      
      </li>
      <li>
      <a href="http://localhost/hostels/index.php?hostel_city=Gorakhpur">Gorakhpur</a>
       </li> 
      <li>                   
            <a href="http://localhost/hostels/index.php?hostel_city=Kozhikode">Kozhikode</a>
      </li>
      <li>
         <a href="http://localhost/hostels/index.php?hostel_city=Rajahmundry">Rajahmundry</a>
      </li>
      <li>
         <a href="http://localhost/hostels/index.php?hostel_city=Udupi">Udupi</a>
           </li>
      <li>
        <a href="http://localhost/hostels/index.php?hostel_city=Bhiwadi">Bhiwadi</a>
       </li>
      <li>
           <a href="http://localhost/hostels/index.php?hostel_city=Guntur">Guntur</a>
        </li>
 
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Lucknow">Lucknow</a>
  </li>
      <li>                 
            <a href="http://localhost/hostels/index.php?hostel_city=Ranchi">Ranchi</a>
      </li>   
      <li>
         <a href="http://localhost/hostels/index.php?hostel_city=Vadodara">Vadodara</a>
        </li>
      <li>
        <a href="http://localhost/hostels/index.php?hostel_city=Bhopal">Bhopal</a>
       </li>
      <li>
         <a href="http://localhost/hostels/index.php?hostel_city=Guwahati">Guwahati</a>
      </li>
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Madurai">Madurai</a>
        </li>
      <li>
         <a href="http://localhost/hostels/index.php?hostel_city=Raipur">Raipur</a>
         </li>
      <li>
       <a href="http://localhost/hostels/index.php?hostel_city=Vapi">Vapi</a>
          </li>
      <li>
        <a href="http://localhost/hostels/index.php?hostel_city=Bhubaneswar">Bhubaneswar</a>
       </li>  
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Haridwar">Haridwar</a>
          </li> 
      <li>
        <a href="http://localhost/hostels/index.php?hostel_city=Mangalore">Mangalore</a>
        </li>
      <li>
            <a href="http://localhost/hostels/index.php?hostel_city=Salem">Salem</a>
      </li>
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Varanasi">Varanasi</a>
            </li>
      <li>
           <a href="http://localhost/hostels/index.php?hostel_city=Bokaro Steel City">Bokaro Steel City</a>
        </li>
      <li>
           <a href="http://localhost/hostels/index.php?hostel_city=Indore">Indore</a>
          </li>
          <li>
            <a href="http://localhost/hostels/index.php?hostel_city=Sonipat">Sonipat</a>
        </li>
     <li>
           <a href="http://localhost/hostels/index.php?hostel_city=Vijayawada">Vijayawada</a>
      </li>
      <li>
           <a href="http://localhost/hostels/index.php?hostel_city=Chandigarh">Chandigarh</a>
       </li>
      <li>
       <a href="http://localhost/hostels/index.php?hostel_city=Jaipur">Jaipur</a>
         </li>
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Mysore">Mysore</a>
         </li>
      <li>
        <a href="http://localhost/hostels/index.php?hostel_city=Surat">Surat</a>
        </li>
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Visakhapatnam">Visakhapatnam</a>
        </li>
      <li>
         <a href="http://localhost/hostels/index.php?hostel_city=Coimbatore">Coimbatore</a>
       </li>
      <li>
         <a href="http://localhost/hostels/index.php?hostel_city=Jamshedpur">Jamshedpur</a>
          </li>
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Nagpur">Nagpur</a>
       </li>
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Thrissur">Thrissur</a>
        </li>
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Ahmadnagar">Ahmadnagar</a>
        </li>
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Dehradun">Dehradun</a>
      </li>
      <li>
         <a href="http://localhost/hostels/index.php?hostel_city=Jodhpur">Jodhpur</a>
        </li>
      <li>
       <a href="http://localhost/hostels/index.php?hostel_city=Nashik">Nashik</a>
        </li>
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Tirupati">Tirupati</a>
       </li>
      <li>
            <a href="http://localhost/hostels/index.php?hostel_city=Kanpur">Kanpur</a>
        </li>
      <li>
          <a href="http://localhost/hostels/index.php?hostel_city=Navsari">Navsari</a>
         </li>
      <li>
         <a href="http://localhost/hostels/index.php?hostel_city=Trivandrum">Trivandrum</a>
       </li>

  </ul> 
          </div>
				</div> 
			</li>
		</ul>
		<ul className="navbar-nav ms-auto">
			<li className="nav-item"><button className="nav-link" id="know-more" href="#"> Know More </button></li>
			
		</ul>
	</div> 
</div>
</nav>
    </>
  );
};

export default Navbar;