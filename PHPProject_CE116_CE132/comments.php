<!doctype html>
<html lang="en" bgcolor="black">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Views</title>
</head>

<body>

    <?php  include 'partials/_header.php'; ?>

    <div class=" px-4 py-5 text-center bg-dark bg-gradient text-white container-fluid">
        <div class="py-5 conatiner-fluid ">
 <?php
        include 'partials/_dbconnect.php';

        $sql = "SELECT * FROM `feedback`";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result))
        {
            $name=$row["name"];
            $clg = $row["clg"];
            $dept=$row["dept"];
            $exp=$row["exp"];
            $batch=$row["batch"];
            $sem=$row["sem"];
            $comment=$row["comment"]."";

           echo'<div class="container">
                    <div class="card text-dark border-danger bg-light mb-3 container-fluid" style=" max-width: 50rem;">
                        <div class="card-header text-center">
                          <h2><i>'.$clg.'</i></h2>
                        </div>
                            <div class="card-body">
                                <h3 class="card-title text-center">'.$name.'</h3>
                                <div class="card-footer bg-transparent border-success">
                                    <h3 class="card-title text-center ">' .$dept.'--'.$sem.'</h3>
                                    <div class="card-footer bg-transparent border-success">
                                        <h3 class="card-title text-center ">' .$batch.'</h3>
                                    <div class="card-footer bg-transparent border-success">
                                         <h4 class="card-title text-center">' .$exp.'</h4>
                                        <h5 class="card-text" align="left"> '.$comment.'</h5>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>';
        }

    ?>

        </div>
    </div>


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
