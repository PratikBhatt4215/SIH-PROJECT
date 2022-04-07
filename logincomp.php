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

<body>
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

  <section class="vh-100 banner " style="background-color: #b4c5e6;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <h3 class="mb-5">Login As Company</h3>
              <form action="loginF.php" method="post">
                <div class="form-group">
                  <label for="pwd">Username:</label>
                  <input type="text" class="form-control" name="user">
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <button type="submit" class="btn  btn-primary mt-3"  >Submit</button>
              </form>
              <hr class="my-4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="footer mt-auto py-3 bg-light fixed-bottom text-center">
    <div class="container">
      <span class="">© 2022 Copyright: Created By Engg-Genius Groups Members</span>
    </div>
  </footer>
</body>

</html>