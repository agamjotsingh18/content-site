

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All Stored Hostels</title>
</head>
<body>
        <style type="text/css">
         #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
           height: 190px;
   }
   @media screen and (max-width:1000px) { 
        #content{
        width:90%;
        }
   }
   @media screen and (max-width:520px) { 
        #content{
        width: 100%;
        border: none;
        }
        img{
   	width: 250px !important;
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
   	width: 300px;
   	height: 140px;
   }
   h4{
           padding-top: 30px;
   }
   #parts{
        display: flex;
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
 <div className="App-header">

        <?php
        $db = mysqli_connect("localhost", "root", "", "hostels");
        if(isset($_GET["hostel_city"])){
          echo $hostel_city = $_GET['hostel_city'];
          $result = mysqli_query($db, "SELECT * FROM hostel where hostel_city = ".$hostel_city) or die( mysqli_error($db));
        }
        $content="content";
        $parts="parts";
        
        

          while ($row = mysqli_fetch_array($result)) {
                    echo "<div id=$content >";
                            echo "<img id=$parts src='images/".$row['hostel_image']."' >";
                            echo "<h4 id=$parts >".$row['hostel_name']."</h4>";
                            echo "<p id=$parts>".$row['hostel_city']."</p>";
                            echo "<p id=$parts>".$row['hostel_address']."</p>";
                            echo "<p id=$parts>".$row['owner_name']."</p>";
                            echo "<p id=$parts>".$row['phone_number']."</p>";
                            echo "<p id=$parts>".$row['price_range']."</p>";
                    echo "</div>";
          }
        
         ?>
</div>
</body>
</html>