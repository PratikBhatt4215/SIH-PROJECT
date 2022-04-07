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
    <style>
        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
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
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <div class="about-section " style="margin-top:4rem;">
        <h1 style="font-size:3rem; color:white;">We are team Engg-Genius. </h1>
        <p style="font-size:1rem; color:white;">Our Motto is to provide a clear infromation and data, which is necessary for all but no one works on it.</p>
    </div>

    <h2 style="text-align:center; margin-top:4rem; ">Our Team</h2>
    <div class="row">
        

        <div class="column">
            <div class="card">
                <img src="./team-member/aka.jpeg" alt="Jane" style="height: 215px; width: 173px;margin-left: 13rem; border-radius: 3rem;">
                <div class="container"style="margin-left: 1rem; ">
                    <h2>Akanksha Vishwakarma</h2>
                    <p class="title"> Team Engg-Genius</p>
                    <p>akankshavish127@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="./team-member/suravi.jpeg" alt="Jane" style="height: 215px; width: 173px;margin-left: 13rem;border-radius: 3rem; ">
                <div class="container"style="margin-left: 1rem; ">
                    <h2>Suravi Agarwala</h2>
                    <p class="title"> Team Engg-Genius</p>
                    <p>suraviagrawalla2001@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="./team-member/aditya.jpeg" alt="Jane" style="height: 215px; width: 173px;margin-left: 13rem;border-radius: 3rem; ">
                <div class="container"style="margin-left: 1rem; ">
                    <h2>Aditya Raj Tiwari</h2>
                    <p class="title"> Team Engg-Genius</p>
                    <p>mrtiwari0209@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="./team-member/sanket.jpeg" alt="Jane" style="height: 215px; width: 173px;margin-left: 13rem; border-radius: 3rem;">
                <div class="container"style="margin-left: 1rem; ">
                    <h2>Sanket Kumar Bera</h2>
                    <p class="title"> Team Engg-Genius</p>
                    <p>sanketbera30@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="./team-member/shantee.jpeg" alt="Jane" style="height: 215px; width: 173px;margin-left: 13rem;border-radius: 3rem; ">
                <div class="container"style="margin-left: 1rem; ">
                    <h2>Shantee Ram Mandal</h2>
                    <p class="title"> Team Engg-Genius</p>
                    <p>shanteeram7438@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="./team-member/Pratik-Img.jpeg" alt="Jane" style="height: 215px; width: 173px;margin-left: 13rem;border-radius: 3rem; ">
                <div class="container"style="margin-left: 1rem; ">
                <h2>Pratik Kumar</h2>
                    <p class="title"> Team Engg-Genius</p>
                    <p>pk4789218@gmail.com</p>
                </div>
            </div>
        </div>
    </div>













    </section>
    <footer class="footer mt-auto py-3 bg-light  text-center">
        <div class="container">
            <span class="">© 2022 Copyright: Created By Engg-Genius Groups Members</span>
        </div>
    </footer>
</body>

</html>