<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./index.css">
</head>
<style>
.card{
    padding:2 rem;
    height: 300px;
}
.card-body{
    display: flex;
    justify-content: center;
    /* background-color: cornflowerblue; */
    /* background-image: linear-gradient(cornflowerblue, yellow); */
    background: linear-gradient(#e66465, #9198e5);
}


.card-img-top{
    height:max-content;
}

.card-title {
    margin-bottom: .75rem;
    display: flex;
    justify-content: center;
    margin-top:7rem;
    cursor: pointer;
    
    
  }

  .heading1{
      display:flex;
      justify-content: center;

  }
.card-group {
  padding: 0px 4rem 0rem 5rem;
  column-gap: 14px;
}

.card-title:hover{
    letter-spacing: .3rem;
    transition: .6s;
    font-size:1.5rem;
}
.card-title:hover{
    text-decoration: none;
}


</style>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <img src="./gec-images/logo6.png" class="logogec" alt="" />
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
                        <a class="nav-link active" href="#">About Us</a>
                    </li>
                </ul>
                <div class="d-flex ">
                    <a href="#" target="_blank" class="fab fa-twitter  social-icon"></a>
                    <a href="#" target="_blank" class="fab fa-facebook-f social-icon"></a>
                    <a href="#" target="_blank" class="fab fa-instagram social-icon"></a>
                    <a href="#" target="_blank" class="fab fa-linkedin social-icon"></a>
                </div>
            </div>
        </div>
    </nav>



    <section class="section-block hero-carousel" style="margin-bottom: 2rem;" >
        <div class="container-fluid margin1">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="row">
                        <div class="col-md-9 offset-md-2">
                            <h1 style="font-weight: 900; font-size: 3rem;">Building technology for human progress</h1>
                            <p>We are an engineering institute advancing science and technology education for students
                                from all walks of life.</p>
                            <a href="#" class="blue-btn btn btn-primary">EXPLORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pr-md-0 ">
                    <div id="carouselExampleIndicators" style="margin-right: 4rem;" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="./gec-images/Final-Building-image.jpg"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100" src="./gec-images/Home Page-1.jpeg" alt="First slide">
                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100" src="./gec-images/Home Page-2.jpeg" alt="First slide">
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="heading1 mt-3 mb-3">
        <h1 class="main " style=" font-weight: 700; font-size: 4.5rem; margin-top: 5rem;">Campus Placement List:</h1>
    </div>
    <div class="card-group">
        <div class="card">
          <div class="card-body" >
            <a href="submit.php"><h5 class="card-title" style="text-decoration: none; color: white; font-size: 2rem;">2005-2010</h5></a>
           
          </div>
        </div>
        <div class="card">
            <div class="card-body" >
            <a href="submit.php"><h5 class="card-title" style="text-decoration: none; color: white; font-size: 2rem;">2011-2016</h5></a>

            
          </div>
        </div>
        <div class="card">
            <div class="card-body" >
            <a href="submit.php"><h5 class="card-title" style="text-decoration: none; color: white;font-size: 2rem; ">2017-2022</h5></a>
            
          </div>
        </div>
      </div>









    <section class="about-area pb-75 mt-4 mb-4">
        <div class="container">
            <div class="row align-items-center">
            <h1 class="about text-center " style="font-weight: 600; font-size: 4.5rem;">About Gec</h1>
                <div class="col-lg-6 col-md-12">

                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="about-image">
                                    <img src="./gec-images/about-us.jpeg" class="shadow" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <span class="sub-title ">
                            <h2 style="font-weight: 600; font-size: 2.5rem;">Gandhi Engineering College</h2>
                            <h6>Gandhi Engineering College, Bhubaneswar a name to reckon in the field of technical and
                                management education, was established in the year 2006, with the approval from AICTE,
                                New Delhi and affiliation with BPUT, Odisha.</h6>
                            <p>Under the aegis of Dr. SatyaPrakash Panda and the stewardship of Mr. ManasRanjan Panda,
                                the institution has grown leaps and bounds and has successfully carved a niche for
                                itself so much that today it is a cherished destination for students across the country.
                                It’s a dream come true college for any student with impeccable opportunities just
                                waiting for them. We strive to make it the best engineering college in Odisha by shaping
                                the future of students who will be the epitome of triumph. It always stands in the list
                                of top 10 engineering colleges in Odisha.</p>
                            <div class="crs_btn text-md-end mb-20">
                                <a class="thm_btn" href="#"> Read more... <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer2">
      <div class="container">
        <div class="col-left">
            <img class="footer-logo" src="./gec-images/logo6.png" alt="">
            <ul class="social-media-list">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="col-right">
            <ul class="links-container">
                <h4>OTHER LINKS</h4>
                <li><a href="#">About GEC</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Syllabus</a></li>
                <li><a href="#">Hostel</a></li>
                <li><a href="#">Cultural Activities</a></li>
            </ul>
            <ul class="links-container">
                <h4>IMPORTANT LINK</h4>
                <li><a href="#">Transport</a></li>
                <li><a href="#">Banking Services</a></li>
                <li><a href="#">Central Mess</a></li>
                <li><a href="#">24x7 Medical Facility</a></li>
            </ul>
            <ul class="links-container">
                <h4>ACADEMIC INFO</h4>
                <li><a href="#">Apply for Admission</a></li>
                <li><a href="#">Admission Procedure</a></li>
                <li><a href="#">B.Tech Programmes</a></li>
                <li><a href="#">PG Programmes</a></li>
                <li><a href="#">Time Table</a></li>
                <li><a href="#">NIRF</a></li>
                <li><a href="#">Bachelor Degree Programmes</a></li>
                <li><a href="#">Diploma Programmes</a></li>
            </ul>
        </div>
      </div>
   </footer>





</body>

</html>