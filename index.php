<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./index.css" />

    <title>Smart India Hackathon-2022</title>
    <style>
        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }





    </style>
</head>

<body>


    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <img src="logo.png" class="logo" alt="" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto navi mb-2 mb-lg-0 ml-1 nav-tabs">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                </ul>
                <div class="d-flex ">
                    <a href="home.php"><button class="btn btn-primary " style="margin-right: 2.5rem;">Student
                            View</button></a>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle " type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 2.5rem;">
                            Login
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="logincomp.php">Company</a></li>
                            <li><a class="dropdown-item" href="insitution.php">Institute</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle " type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 2.5rem;">
                            Register
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="RWC.php">Company</a></li>
                            <li><a class="dropdown-item" href="RWI.php">Institute</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    


<div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./index-images/aicte.jpg" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="./index-images/aicte2.jpg" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="./index-images/aicte3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
    <div class="row align-items-center vh-100">
        <div class="col-6 mx-auto" style="margin-bottom: 21rem">
            <div class="card shadow border">
                <div class="card-body d-flex flex-column align-items-center">
                    <p class="card-text">Welcome to AICTE All India Council for Technical Education (AICTE) was set up in November 1945 as a national-level Apex Advisory Body to conduct a survey on the facilities available for technical
                         education and to promote development in the country in a coordinated and integrated manner.</p>
                    <a href="index.php" class="btn btn-primary">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

 


    <footer class="footer mt-auto py-3 bg-light fixed-bottom text-center">
        <div class="container">
            <span class="">© 2022 Copyright: Created By Engg-Genius Groups Members</span>
        </div>
    </footer>



    <script src="./index.js"></script>

</body>

</html>