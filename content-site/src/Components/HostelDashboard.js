import React from 'react'
import 'bootstrap/dist/js/bootstrap.js';
import "./hostels.css"
import Navbar from './Navbar';
import Hostels from "./Hostels"
import { Route, NavLink } from "react-router-dom";
import HostelsRegister from './HostelsRegister';

export default function HostelDashboard() {
    return (
        <>
   <div>
       <Navbar />
       {/* <Hostels src="{hostel1}" Hostel_Name="Hostel 1" Hostel_City="Agra"/>
      <Hostels src="{hostel2}" Hostel_Name="Hostel 2" Hostel_City="Patna"/> */}
      <NavLink to="/HostelsRegister"  path="/HostelsRegister" id="register">Register </NavLink>
      <Route path="/HostelsRegister" component={HostelsRegister}></Route>

   </div>
        </>
    )
}


