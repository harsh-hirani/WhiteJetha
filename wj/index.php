<?php
include("../auth_session.php");
require('../registeration-login-system/db.php');
$sql = "SELECT * FROM `records` where type=1 ORDER BY udate DESC LIMIT 10";
$result = mysqli_query($con,$sql);
$rows = mysqli_num_rows($result);

// // $dumpData = mysqli_fetch_array($result);
// SELECT * FROM `$targettbname` WHERE Adecs='Anime' ORDER BY UDate DESC"/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    
    <!--<link rel="stylesheet" href="../../globle/Bootstrap/css/bootstrap.min.css">-->
    <title>Home Page</title>
    <style type="text/css">   

.story-indicator, 
.story-indicator-no-animation {
    font-size: 45 px;
    color: rgb(28, 122, 233);
    text-transform: uppercase;
    position: relative;
    padding-left: 10px;
    max-width: 303px;
}

.story-indicator::after {
    content: '';
    height: 3px;
    width: 100%;
    position: absolute;
    left: 10px;
    bottom: 1px;
    background: rgba(28, 122, 233, 1);
    animation: indicator 2s linear infinite;
}
@keyframes indicator {
    0% {
        width: 10%;
        left: 10px;
    }
    25% {
        width: 90%;
        left: 10px;
    }
    50% {
        width: 0%;
        right: 1px;
        left: calc(100% - 1px);
    }
    75% {
        width: 90%;
        left: 10px;
        right: calc(100% - 1px);
    }
    100% {
        width: 10%;
        left: calc(11px - 1px);
    }*/
}
@media (max-width:788px){
.story-indicator{
  max: width 270px;
}
.spinner-border{
  display: none;
}
}
.link-info-my:hover{
text-decoration: none;
color : rgba(25,220,253,0.99)
}
.link-info-my{
text-decoration:none ;
color : rgba(25,90,177,0.99)
}.cursor-pointer{
    cursor: pointer;
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid px-5">
    <a class="navbar-brand bg-purple" href="#">WJ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../">home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="registeration-login-system/logout.php" tabindex="-1" aria-disabled="true">log out</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<section class="upload">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h1 class="uploadHeading story-indicator w-lg-50">White jetha</h1>
            
            
            
          </div>
          <div class="card-body">
            <form class="form-horizontal" action="../upload.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-4 offset-1">
                  <select name="top" class="form-select" aria-label="Default select example" required>
                    <option> norml</option>
                    <option selected> ours</option>
                  </select>
                </div>
                <div class="col-4 offset-2">
                <select name="sub" class="form-select" aria-label="Default select example" required>
                  <option value="maths">maths</option>
                  <option value="chemistry">chemistry</option>
                  <option  value="BE">BE</option>                
                  <option  value="drawing">drawing</option>                
                  <option  value="comm">communication</option>                
                  <option  value="python">python</option>                
                  <option selected value="none">None</option>                
                </select>
                </div>
              </div>
              <div class="row my-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Topic</label>
                  <input type="text" class="form-control" name="topic" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Topic">
                  <small id="emailHelp" class="form-text text-muted">it will be easier to find.</small>
                </div>
              </div>
              <div class="row">
                <div class="col-10 offset-1" id="uploader_buttons">
                  File 1: <input type="file" name="fileToUpload0" id="fileToUpload">
                </div>
              </div>
              <div class="row my-2">
                <div class="col-lg-4 col-8 offset-lg-2">
                  <label for="quantity">Quantity (between 1 and 10):</label>
                  <input type="number" id="quantity" name="quantity" min="1" max="10" value="1" oninput="changenum(this)">
                </div>
                <div class="col-2">
                  <input type="submit" class="btn-3 disabled" value="Upload⬆️">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-12"></div>
    </div>
  </div>
</section>

<section>
  
  <div class="container" style="overflow:">
    <div class="row mb-2">
      <div class="col-12 bg-dark text-white" style="font-size: 22px;text-align: center;">NEW THINGS</div>
    </div>
    <div class="row px-3">
      <!-- <div class="card col-10 offset-1 mb-2">
        <div class="card-body my-0 py-0 d-flex togggled">
          <h3 class="card-title text-capitalize my-2 story-indicator-no-animation"> $topic</h3> 
          <h3 class=" my-2 mx-3  text-capitalize"> - anshul</h3>
          <h4 style="margin: 5px 5px 5px auto;">$date</h4>
        </div>
        <div class="card-body listed" style="user-select: auto;">
          <div class="row">
            <div class="col-lg-5 col-12">
              <ul class="list-group">
                <li class="list-group-item">$link1</li>
              </ul>
            </div>
            <div class="col-lg-7 col-12 mb-2">
              <p class="card-text d-flex" style="user-select: auto;">
                <span class="badge rounded-pill mx-1 text-capitalize bg-dark"></span>
                <span class="material-symbols-outlined edit-icon" style="margin-left:auto;margin-right: 4px;" onclick="addDIV('In Another World With My Smartphone','7.9/10','02','04');">Chat</span>
                <span class="edit-text" onclick="addDIV('In Another World With My Smartphone','7.9/10','02','04');">Chat</span>
              </p>
            </div>
          </div>
        </div>
      </div> -->
<?php
for ($i=0; $i <$rows; $i++) { 
  $dumpData = mysqli_fetch_array($result);
  $who = $dumpData['who'];
  $topic = $dumpData['topicc'];
  $date = $dumpData['date'];
  $subj = $dumpData['subj'];
echo '<div class="card col-lg-10 offset-lg-1 col-12 mb-2 p-0">
<div class="card-body my-0 py-0 d-flex togggled">
    <h3 class="card-title text-capitalize my-2 story-indicator-no-animation"> ['.$subj.'] '.$topic.'.</h3> 
    <h3 class=" my-2 mx-3  text-capitalize"> - '.$who.'</h3>
    <h4 style="margin: 5px 5px 5px auto;">'.$date.'</h4>
  </div>
  <div class="card-body listed px-2" style="user-select: auto;">
    <div class="row">
      <div class="col-lg-5 col-12">
        <ul class="list-group mx-lg-3">
          ';
          for($q=0;$q<10;$q++) {
            $strrr = 'l'.$q;
            if($dumpData[$strrr]=="NONE"){
              continue;
            }
            echo '<li class="list-group-item link-info cursor-pointer" onclick="show(this,'."'$dumpData[$strrr]'".')">OPEN</li>';
            echo '<li class="list-group-item"><a href="../uploads/umm/'.$dumpData[$strrr].'" class="link-info-my">'.$dumpData[$strrr].'</a></li>';

          }
          // <li class="list-group-item">$link1</li>
          echo '
        </ul>
      </div>
      <div class="col-lg-7 col-12 mb-2">
        <p class="card-text d-flex" style="user-select: auto;">
          <span class="badge rounded-pill mx-1 text-capitalize bg-dark"></span>
          <span class="material-symbols-outlined edit-icon" style="margin-left:auto;margin-right: 4px;">Chat</span>
          <span class="edit-text">Chat</span>
        </p>
      </div>
    </div>
  </div>
</div> ';
}
?>




  </div>
</div> 
</section>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<script src="../jquery-3.6.0.js"></script>
<script>
  var uploadBox = document.getElementById("uploader_buttons");
  function changenum(t){
    var changeText = "";
    for(i=0;i<t.value;i++){
      changeText += "File "+(i+1)+": <input type=\"file\" name=\"fileToUpload" + i + "\" \id=\"fileToUpload" + i + "\"><br>"
    }
    uploadBox.innerHTML = changeText;
  }
  function show(elem,tex){
    elem.innerHTML = '<img src="../uploads/umm/'+tex+'" class="w-100">';
  }
</script>
</body>
</html>