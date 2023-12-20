<?php
//include auth_session.php file on all user panel pages
include("../auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
        
    </style>

</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_COOKIE['user']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
    <div class="container">
        <div class="row">
            <div class="card border-dark mb-3 col-lg-5 col-md-7 col-10" >
                <div class="card-header">Thank you for</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">Choosing our Team</h5>
                    <p class="card-text"> do things in group  </p>
                </div>
                <div class="d-flex">
                    <a class="btn btn-primary mx-auto" href="../index.php">Go to Home</a>
                    <a class="btn btn-primary mx-auto " href="../wj">white jetha</a>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
