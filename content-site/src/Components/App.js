import './App.css';
import HostelsRegister from "./HostelsRegister"
import HostelDashboard from "./HostelDashboard"
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.js';
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";



export default function App() {
  return (
    
    /* <Navbar /> */
      /* <div className="container"> */
/* <!-- this form is user to display all the images--> */
/* <form action="index.php" method="post"  enctype="multipart/form-data">
Retrive all the images:
<input type="submit" value="submit" name="retrive" />
</form> */
      <Router>
      <div>
        <Switch>
      <Route path="/">
    <HostelDashboard/>
      </Route>
{/*     
      <Route path="/" >
      <HostelsRegister/>
    </Route> */}
        </Switch>
      </div>
      </Router>
      /* <HostelsRegister /> */
      /* <Hostels src="{hostel1}" Hostel_Name="Hostel 1" Hostel_City="Agra"/>
      <Hostels src="{hostel2}" Hostel_Name="Hostel 2" Hostel_City="Patna"/> */
      /* </div> */
  );
}


