<?php

$showAlert=false;
$showError=false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include 'partials/_dbconnect.php';
  $name =  $_POST["name"];
  $email =  $_POST["email"];
  $dob =  $_POST["dob"];
  $clg =  $_POST["clg"];
  $sem =  $_POST["sem"];
  $batch =  $_POST["batch"];
  $dept =  $_POST["dept"];
  $exp =  $_POST["exp"];
  $comment =  $_POST["comment"];

  $exists=false;

  if(($exists==false))
  {
    $sql = "INSERT INTO `feedback`(`name`, `email`, `dob`, `clg`, `sem`, `batch`, `dept`, `exp`, `comment`) 
    VALUES ('$name', '$email', '$dob', '$clg', '$sem', '$batch', '$dept', '$exp', '$comment')";

    $result = mysqli_query($conn, $sql);

    if($result=true)
    {
      $showAlert = true;
    }
    else
    {
      $showError="Form Not filled.!";
    }
  }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>FeedBack | CLG-feedback</title>
</head>

<body>

<<<<<<< HEAD
=======
    <title>FeedBack | CLG-feedback</title>
  </head>
  <body>
    
>>>>>>> 4825b80016757a2acdef669841631a1169bf3371
    <?php  include 'partials/_header.php'; ?>
    <?php
      if($showAlert){
        echo '  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Done!! </strong> Your feedback is added..!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
      }
      if($showError){
        echo '  <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oops!! </strong> '. $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>';
      }
    ?>
    <!-- Adding Corosuel-->

    <div class="container my-2">
        <img src="img/fb1.jfif" class="card-img-top" alt="...">
        <div class="card-body container text-center">
            <h4 class="card-title">Your FeedBack Matters....! </h4>
            <p class="card-text">Add some of your details
                and some reviews to particular college and We will definitely refer it.!!!
            </p>
        </div>
    </div>


    <div class="container my-6">
        <hr class="featurette-divider">
        <h1>Your FeedBack</h1>
        <!-- Feedback Form -->

        <form class="row g-3" action="feedback.php" method="post">
            <div class="col-md-6">
                <label for="name" class="form-label">Name*</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name." required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email ID."
                    required>
            </div>
            <div class="col-md-6">
                <label for="dob" class="form-label">Date of Birth*</label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter your date of birth."
                    required>
            </div>
            <div class="col-md-6">
                <label for="clg" class="form-label">College Name*</label>
                <input type="text" class="form-control" id="clg" name="clg"
                    placeholder="Enter a name of college whose feedback you want to give" required>
            </div>
            <div class="col-md-6">
                <label for="sem" class="form-label">Semester*</label>
                <input type="text" class="form-control" id="sem" name="sem" placeholder="Enter your semester." required>
            </div>
            <div class="col-md-6">
                <label for="batch" class="form-label">Batch*</label>
                <input type="text" class="form-control" id="batch" name="batch" placeholder="Enter a Batch Year."
                    required>
            </div>
            <div class="col-12">
                <label for="dept" class="form-label">Department*</label>
                <input type="text" class="form-control" id="dept" name="dept" placeholder="Enter your department."
                    required>
            </div>
            <div class="col-12">
                <label for="exp" class="form-label">Experience*</label>
                <div class="container">
                    <div class="form-check col-2 form-check-inline">
                        <input  type="radio" name="exp" value="Excellent" >
                        <label >
                            Excellent
                        </label>
                    </div>
                    <div class="form-check col-2 form-check-inline">
                        <input  type="radio" name="exp" value="Good" checked>
                        <label >
                            Good
                        </label>
                    </div>
                    <div class="form-check col-2 form-check-inline">
                        <input  type="radio" name="exp" value="Moderate">
                        <label>
                            Moderate
                        </label>
                    </div>
                    <div class="form-check col-2 form-check-inline">
                        <input  type="radio" name="exp" value="Inappropriate">
                        <label >
                            Inappropriate
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="comment" class="form-label">Additional reviews*</label>
                <textarea class="form-control" id="comment" name="comment" rows="5"
                    placeholder="You can add more comments" required></textarea>

            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-outline-danger col-2">Submit</button>
                <button type="reset" class="btn btn-outline-danger col-2">Reset</button>
            </div>
        </form>
    </div>
    <!-- Form done -->

    <?php  include 'partials/_footer.php'; ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>