<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="./register.css">
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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="./login.php"><button type="button" class="btn btn-primary button">
                            Login
                        </button></a>
                </div>
            </div>
        </div>
    </nav>




    <div class="contact-main">
        <h2><span> Wants To Register!! </span> Fill The Below Form</h2>

        <div class="w-50 m-auto">
            <form action="regist.php" method="post">
                <div class="d-flex justify-content-around">
                    <div class="btn-group  gap-3" role="group" aria-label="Basic example">
                    <a href="./RWI.php"><button type="button" class="btn btn-primary">Register With Institute</button></a>
                    <a href="./RWC.php"><button type="button" class="btn btn-primary">Register With Company</button></a>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pwd">Username:</label>
                    <input type="text" class="form-control" name="user">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" name="email" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="pwd">Confirm-Password:</label>
                    <input type="password" class="form-control" name="cpassword">
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>



        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light fixed-bottom text-center">
        <div class="container">
            <span class="">© 2022 Copyright: Created By Engg-Genius Groups Members</span>
        </div>
    </footer>


</body>

</html>