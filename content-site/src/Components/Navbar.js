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
import logo from "./logo-m.png"
import { NavLink, Route } from "react-router-dom";
// import 'bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.js';
// import 'bootstrap.min.js';


const Navbar = () => {
  const [showMediaIcons, setShowMediaIcons] = useState(false);

  function displaySelected() { var country = document.getElementById("countrySelect").value;
}
function resetSelection() {
document.getElementById("countrySelect").selectedIndex = 0;
}

    
  return (
    <>
 <div className="navbar navbar-default navbar-static-top" >
<div className="text-center w-20 p-3 m-auto" >
     
        <img src={logo} alt="Logo" id="logo" width="160px"/>  
  </div>
  </div>
    </>
  );
};

export default Navbar;