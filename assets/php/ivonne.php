<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Computer Science - UPH</title>
    <link rel="icon" href="../img/logo-UPH.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="../fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../fonts/ionicons.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1"><a href="index.html"><img src="../img/Logo-UPH.svg" style="width: 150px;height: 100px;"></a>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Programs</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="informatics.html">Informatics</a><a class="dropdown-item" href="system-information.html">Information System</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">About us</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="faculty.html">About Faculty</a><a class="dropdown-item" href="our-people.html">Our People</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <img src="../img/dosen/users-user-female-icon.png.jpg" class="profilepicture">
    
    <table>
        
        <tr>
            
            <th>Name</th>
            <th>S1</th>
            <th>S2</th>
            <th>S3</th>
			<th>Disciplines</th>

        </tr>

        <?php
        $servername = "db";
        $username = "root";
        $password = "Arcane20";
        $dbname = "Dosen";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
       
        $sql = "SELECT ID, Name, S1, S2, S3, Disciplines from List_Dosen WHERE ID = 17";
        $result = mysqli_query($conn, $sql);

        if($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                echo "<tr><td>". $row["Name"] . "</td><td>". $row["S1"] ."</td><td>". $row["S2"] ."</td><td>". $row["S3"] ."</td><td>". $row["Disciplines"]. "</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }

        $conn -> close();
        ?>

    </table>
	
<div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul><img src="../img/Logo-UPH.svg" style="width: 150px;height: 100px;"></div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Programs</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Event</h3>
                        <ul>
                            <li><a href="#">i-Trip</a></li>
                            <li><a href="#">Falcon Project</a></li>
                            <li><a href="#">BBQ Night</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="https://www.facebook.com/UPHImpactlives" target="_blank"><i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/uphimpactslives?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="icon ion-social-twitter"></i></a><a href="https://www.instagram.com/uphimpactslives/?hl=en" target="_blank"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Universitas Pelita Harapan © 2020</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="../js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/-Filterable-Gallery-with-Lightbox-BS4-.js"></script>
</body>

</html>