<!DOCTYPE html>
<html>
    <head>
        <title>Buildings</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    </head>
    <body>
    <div id="container">
        <div id="header">
            <div id="title">
                <h1>CONCRETE FRAME STRUCTURES</h1>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="service.html" title="service">Services</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <?php
            $host = 'db'; //service name from docker-compose.yml 
            $user = 'user1';
            $password = 'root';
            $db = 'myDatabase';

          //  $conn = new mysqli($host,$user,$password,$db);
          //  if($conn->connect_error){
          //      echo 'connection failed' . $conn->connect_error; 
		  //	}
          //  echo 'Sucessfully connect to MYSQL';
        ?>
    </div>
    </body>
</html>