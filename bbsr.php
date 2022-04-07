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
    <link rel="stylesheet" href="./s.css" />
    <title>Smart India Hackathon-2022</title>
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
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                </ul>
                <div class="d-flex ">
                    <a href="./login.php"><button " type=" button" class="btn btn-primary button">
                            Login
                        </button></a>
                    <a href="./register.php"><button type="button" class="btn btn-primary">Sign Up</button></a>
                </div>
            </div>
        </div>
    </nav>


    <section class="banner ">
        <div class="jumbotron text-center margintop">
            <h class="display-4 " style="font-size: 3.2rem; color:blue;">List Of Colleges In Bhubaneswar</h>
        </div>



        <form class="form-inline d-flex justify-content-center margintop">
            <div class="d-flex justify-content-center">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle " href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false" style=" width: 371px; background-color:blue; color:white;">
                        Check Colleges Here
                    </a>

                    <ul class="dropdown-menu scrollable-menu" role="menu">
                        <li><a class="dropdown-item" href="./gec2.php">Gandhi Engineering College</a></li>
                        <li><a class="dropdown-item" href="#">Silicon Institute of Techonology</a></li>
                        <li><a class="dropdown-item" href="#">CV Raman </a></li>
                        <li><a class="dropdown-item" href="#">ITER </a></li>
                        <li><a class="dropdown-item" href="#">CET </a></li>
                        <li><a class="dropdown-item" href="#">Trident </a></li>
                        <li><a class="dropdown-item" href="#">KIIT </a></li>
                        <li><a class="dropdown-item" href="#">Hitech </a></li>
                        <li><a class="dropdown-item" href="#">Nalanda Institute Of Techonology></a></li>
                        <li><a class="dropdown-item" href="#">Jupiter </a></li>

                    </ul>
                </div>
            </div>
        </form>











    </section>
    <footer class="footer mt-auto py-3 bg-light fixed-bottom text-center">
        <div class="container">
            <span class="">© 2022 Copyright: Created By Engg-Genius Groups Members</span>
        </div>
    </footer>
</body>

</html>