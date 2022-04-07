<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
</head>

<body style=" background-color:blanchedalmond;">
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid">
      <img src="logo.png" class="logo" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto navi mb-2 mb-lg-0 ml-1 nav-tabs ">
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#">About Us</a>
          </li>
        </ul>
        <div class="d-flex ">
                    
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle " type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 3rem;">
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

  <div class="jumbotron text-center margintop">
                    <h1 class="display-4" style="font-weight:700; ">EMPOWERING STUDENTS </h1>

                    <p style="font-weight:700;">
                      Inter-Linking Is  The Power We Want.
                    </p>
                    <p style="font-weight:700; ">
                      Transparency is the change we need.
                    </p>
                    <hr class="my-4" />

                </div>




  <form class="form-inline d-flex justify-content-center margintop">
    <div class="d-flex justify-content-center">
        <div class="dropdown">
            <input class="form-control mr-sm-2 btn1 " type="search" placeholder="Search" aria-label="Search" />
            <a class="btn btn-primary dropdown-toggle btn1 btn2" href="#" role="button" id="dropdownMenuLink"
                data-bs-toggle="dropdown" aria-expanded="false">
                Select State
            </a>

            <ul class="dropdown-menu scrollable-menu " role="menu">
                <li><a class="dropdown-item" href="#">Andra Pradesh</a></li>
                <li><a class="dropdown-item" href="#">Arunachal Pradesh</a></li>
                <li><a class="dropdown-item" href="#">Assam</a></li>
                <li><a class="dropdown-item" href="#">Bihar</a></li>
                <li><a class="dropdown-item" href="#">Chhattisgarh</a></li>
                <li><a class="dropdown-item" href="#">Goa</a></li>
                <li><a class="dropdown-item" href="#">Gujarat</a></li>
                <li><a class="dropdown-item" href="#">Haryana</a></li>
                <li><a class="dropdown-item" href="#">Himachal Pradesh</a></li>
                <li><a class="dropdown-item" href="#">Jharkhand</a></li>
                <li><a class="dropdown-item" href="#">Karnatka</a></li>
                <li><a class="dropdown-item" href="#">Kerala</a></li>
                <li><a class="dropdown-item" href="#">Madhya Pradesh</a></li>
                <li><a class="dropdown-item" href="#">Maharastra</a></li>
                <li><a class="dropdown-item" href="#">Manipur</a></li>
                <li><a class="dropdown-item" href="#">Meghalaya</a></li>
                <li><a class="dropdown-item" href="#">Mizoram</a></li>
                <li><a class="dropdown-item" href="#">Nagaland</a></li>
                <li><a class="dropdown-item" href="./bbsr.php">Odisha</a></li>
                <li><a class="dropdown-item" href="#">Punjab</a></li>
                <li><a class="dropdown-item" href="#">Rajasthan</a></li>
                <li><a class="dropdown-item" href="#">Sikkim</a></li>
                <li><a class="dropdown-item" href="#">Tamil Nadu</a></li>
                <li><a class="dropdown-item" href="#">Telangana</a></li>
                <li><a class="dropdown-item" href="#">Tripura</a></li>
                <li><a class="dropdown-item" href="#">Uttar Pradesh</a></li>
                <li><a class="dropdown-item" href="#">Uttarakhand</a></li>
                <li><a class="dropdown-item" href="#">West Bangal</a></li>
            </ul>
        </div>
    </div>
</form>


  <footer class="footer mt-auto py-3 bg-light fixed-bottom text-center">
    <div class="container">
      <span class="">© 2022 Copyright: Created By Engg-Genius Groups Members</span>
    </div>
  </footer>
</body>

</html>