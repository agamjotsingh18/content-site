import React from 'react'
import 'bootstrap/dist/js/bootstrap.js';
import "./hostels.css"

function HostelsRegister() {
    return (
        <>
    
    <div className="cont">

<form action="http://localhost/hostels/index.php" method="post"  enctype="multipart/form-data" className="form">
<span>
Enter the Hostel Image:
</span>
&nbsp;&nbsp;
<input name="hostel_image" id="image" accept="image/JPEG" type="file"/><br /><br />
<span>
Enter the Hostel Name:
</span>
&nbsp;&nbsp;
<input type="text" name="hostel_name" /><br />
<span>
Enter the Hostel City:
</span>
&nbsp;&nbsp;
<input type="text" name="hostel_city" /><br />
<span>
Enter the Hostel Address:
</span>
&nbsp;&nbsp;
<input type="text" name="hostel_address" /><br />
<span>
Enter the Owner Name:
</span>
&nbsp;&nbsp;
<input type="text" name="owner_name" /><br />
<span>
Enter the Phone Number:
</span>
&nbsp;&nbsp;
<input type="tel" name="phone_number" /><br />
<span>
Enter the Price Range:
</span>
&nbsp;&nbsp;
<input type="number" name="price_range" /><br />
<br></br>
<input type="submit" value="Submit" name="submit" id="submit" />
</form>
{/* <HostelDashboard /> */}
    </div>

        </>
    )
}

export default HostelsRegister
