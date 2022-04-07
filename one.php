<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Piechrat codes -->
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css" />
    <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js">
    </script>



    <title>SIH|Status of all candidates </title>
    <style>

        
        h3 {
            text-align: center;
            text-transform: uppercase;
        }

        .button {
            margin-right: 1rem;
        }

        .navI {
            margin-left: 0.8rem;
        }

        .logo {
            height: 58px;
            width: 112px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <img src="./gec-images/logo6.png" class="logo" alt="" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ml-1 nav-tabs">

                </ul>
            </div>
            <div class="d-flex ">
                <a href="./contact.html"><button  type=" button" class="btn btn-primary button">
                        Contact Us
                    </button></a>
            </div>
        </div>
    </nav>


    <!-- PieChart of the all candidates -->
    <div class="col-xs-12  mt-3 text-center">
        <h2>STATATICS OF STUDENTS </h2>
    </div>

    <div id="donut-chart"></div>



    <!-- Code of selected students -->
    <h3>Status of the candidates throughout the process conducted by various companies--</h3>

    <table class="table">
        <thead>
            <tr>
                <th>SL.No</th>
                <th>Name</th>
                <th>DOS</th>
                <th>Status</th>
                <th>Company</th>
                <th>E-mail</th>
                <th>Verification</th>

            </tr>
        </thead>
        <tbody>
            <tr class="table-primary">
                <td>1</td>
                <td>Ananya Kumari</td>
                <td>04/07/2005</td>
                <td>selected</td>
                <td>TATA CONSULTANCY SERVICE</td>
                <td>Ananya@gmail.com</td>
               <td> <a class="" href="verify.php">Review</a></td>
            </tr>
            <tr class="table-primary">
                <td>2</td>
                <td>Raghav singh</td>
                <td>04/07/2005</td>
                <td>selected</td>
                <td>TATA CONSULTANCY SERVICE</td>
                <td>raghav@gmail.com</td>
                <td> <a class="" href="verify.php">Review</a></td>
            </tr>
            <tr class="table-primary">
                <td>3</td>
                <td>Anuragh Malhotra</td>
                <td>10/07/2005</td>
                <td>selected</td>
                <td>WIPRO</td>
                <td>anuragh@gmail.com</td>
                <td> <a class="" href="verify.php">Review</a></td>
            </tr>
            <tr class="table-primary">
                <td>4</td>
                <td>Megha Sharma</td>
                <td>10/07/2005</td>
                <td>selected</td>
                <td>WIPRO</td>
                <td>meghasharma@gmail.com</td>
                <td> <a class="" href="verify.php">Review</a></td>
            </tr>
            <tr class="table-dark">
                <td>5</td>
                <td>Aman Mathur</td>
                <td>10/07/2005</td>
                <td>Not-selected</td>
                <td> WIPRO</td>
                <td>aman12@gmail.com</td>
                <td></td>

            </tr>
            <tr class="table-dark">
                <td>6</td>
                <td>Rohan Sharma</td>
                <td>12/08/2005</td>
                <td>Not-selected</td>
                <td>INFOSYS</td>
                <td>rohan12@gmail.com</td>
                <td></td>
                
            </tr>
            <tr class="table-primary">
                <td>7</td>
                <td>Himanshu Kumar</td>
                <td>12/08/2005</td>
                <td>selected</td>
                <td>INFOSYS</td>
                <td>himanshu32@gmail.com</td>
                <td> <a class="" href="verify.php">Review</a></td>
            </tr>
            <tr class="table-primary">
                <td>8</td>
                <td>Rahul Gupta</td>
                <td>12/08/2005</td>
                <td>selected</td>
                <td>INFOSYS</td>
                <td>rahulkumar@gmail.com</td>
                <td></td>
            </tr>
            <tr class="table-dark">
                <td>9</td>
                <td>Shalini Kumari</td>
                <td>10/10/2005</td>
                <td>Not-selected</td>
                <td>Capgemini</td>
                <td>shalini78@gmail.com</td>
                <td> <a class="" href="verify.php">Review</a></td>
                
            </tr>
            <tr class="table-warning">
                <td>10</td>
                <td>Sameer Bhol</td>
                <td>10/10/2005</td>
                <td>Pending</td>
                <td>Capgemini</td>
                <td>sameerbhol@gmail.com</td>
                <td></td>
            </tr>
            <tr class="table-primary">
                <td>11</td>
                <td>Payal Roy</td>
                <td>10/10/2005</td>
                <td>selected</td>
                <td>Capgemini</td>
                <td>payal12@gmail.com</td>
                <td> <a class="" href="verify.php">Review</a></td>
            </tr>
            <tr class="table-primary">
                <td>12</td>
                <td>Ashish Thakur</td>
                <td>12/08/2005</td>
                <td>selected</td>
                <td>Capgemini</td>
                <td>ashish91@gmail.com</td>
                <td> <a class="" href="verify.php">Review</a></td>
            </tr>
            <tr class="table-primary">
                <td>13</td>
                <td> Piyush Jena</td>
                <td>02/12/2005</td>
                <td>selected</td>
                <td>Accenture</td>
                <td>piyush12@gmail.com</td>
                <td> <a class="" href="verify.php">Review</a></td>
            </tr>
            <tr class="table-warning">
                <td>14</td>
                <td>Sumit Kumar</td>
                <td>02/12/2005</td>
                <td>Pending</td>
                <td>Accenture</td>
                <td>sumitkumar12@gmail.com</td>
                <td></td>
            </tr>
            <tr class="table-dark">
                <td>15</td>
                <td>Vikram Kumar</td>
                <td>02/12/2005</td>
                <td>Not-selected</td>
                <td>Accenture</td>
                <td>vikram12@gmail.com</td>
                <td></td>
                
            </tr>
            <tr class="table-warning">
                <td>16</td>
                <td>Sourav Kumar</td>
                <td>02/08/2005</td>
                <td>Pending</td>
                <td>TATA CONSULTANCY SERVICE</td>
                <td>sourav12@gmail.com</td>
                <td></td>
            </tr>
            <tr class="table-primary">
                <td>17</td>
                <td>Sonam Gupta</td>
                <td>02/10/2005</td>
                <td>selected</td>
                <td>Accenture</td>
                <td>sonam123@gmail.com</td>
                <td> <a class="" href="verify.php">Review</a></td>
            </tr>
            <tr class="table-warning">
                <td>18</td>
                <td>Sumit Kumar</td>
                <td>02/12/2005</td>
                <td>Pending</td>
                <td>Accenture</td>
                <td>sumit30@gmail.com</td>
                <td> </td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Footer Parts starts from here -->
    <footer class="footer mt-auto py-3 bg-light  text-center">
        <div class="container">
            <span class="">© 2022 Copyright: Created By Engg-Genius Groups Members</span>
        </div>
    </footer>

    <!-- Javascript for piechart -->
    <script>
        var chart = bb.generate({
            data: {
                columns: [
                    ["Selected", 4],
                    ["Not-selected", 2],
                    ["Pending", 2],
                ],
                type: "donut",
                onclick: function (d, i) {
                    console.log("onclick", d, i);
                },
                onover: function (d, i) {
                    console.log("onover", d, i);
                },
                onout: function (d, i) {
                    console.log("onout", d, i);
                },
            },
            donut: {
                title: "",
            },
            bindto: "#donut-chart",
        });
    </script>

</body>

</html>