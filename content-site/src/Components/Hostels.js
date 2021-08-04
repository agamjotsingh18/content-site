import React from 'react'
import logo from "./logo.png"
import 'bootstrap/dist/js/bootstrap.js';
import hostel1 from "./images.jfif"
import "./hostels.css"

function Hostels(props) {
    return (
        <>
    
                <div className="hostels">
                    <div className="hostels-image">
                    <img src={hostel1} alt="Logo" className="logo" width="100%" height="100%"/>  
                    </div>
                    <div className="content">
                        <h4>
                            {props.Hostel_Name}
                        </h4>
                        <p>
                            {props.Hostel_City}
                        </p>
                    </div>

            </div>
        </>
    )
}

export default Hostels
