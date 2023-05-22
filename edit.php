<?php  include('action.php'); ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>marksheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

<?php 
if (isset($_GET['edit'])) {
      $ID= $_GET['edit'];
      $result=$mysqli->query("SELECT * FROM marksheet WHERE ID=$ID") or die(mysqli->error());
      if (!empty($result)) {
        $row=$result->fetch_array();
        $name = $row['name'];
        $roll = $row['roll'];
        $registration = $row['registration'];
        $bangla = $row['bangla'];
        $math = $row['math'];
        $english = $row['english'];
        $bgs = $row['bgs'];
        $science = $row['science'];
        $religion = $row['religion'];

        
      }
    }
  ?>

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6 from_area">
  <div class="table_area">
      <h2 style="text-align: center;">Bhaluar Char High School</h2>
      <form action="action.php" method="post">
      <input type="hidden" name="ID" value="<?php echo $ID ?> ">
    <div class="mb-3">
      <label class="form-label">Student Name</label>
      <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="<?php echo $row ['name'] ?> ">
    </div>
    <div class="mb-3">
      <label class="form-label">Student Roll</label>
      <input type="text" class="form-control" name="roll" placeholder="Enter Your Roll" value="<?php echo $row ['roll'] ?> " >
    </div>
    
    <div class="mb-3">
      <label class="form-label">Student Registration</label>
      <input type="text" class="form-control" name="registration" placeholder="Enter Your Registration" value="<?php echo $row ['registration'] ?> ">
    </div>
    <div class="mb-3">
      <label class="form-label">Bangla</label>
      <input type="text" class="form-control" name="bangla" placeholder="Enter Your Bangla Number" value="<?php echo $row ['bangla'] ?> ">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Mathematics</label>
      <input type="text" class="form-control" name="math" placeholder="Enter Your Mathematics Number" value="<?php echo $row ['math'] ?> ">
    </div>
    <div class="mb-3">
      <label class="form-label">English</label>
      <input type="text" class="form-control" name="english" placeholder="Enter Your English Number" value="<?php echo $row ['english'] ?> ">
    </div>

    <div class="mb-3">
      <label class="form-label">BGS</label>
      <input type="text" class="form-control" name="bgs" placeholder="Enter Your BGS Number" value="<?php echo $row ['bgs'] ?> ">
    </div>
    <div class="mb-3">
      <label class="form-label">Science</label>
      <input type="text" class="form-control" name="science" placeholder="Enter Your Science Number" value="<?php echo $row ['science'] ?> ">
    </div>
    <div class="mb-3">
      <label class="form-label">Religion</label>
      <input type="text" class="form-control" name="religion" placeholder="Enter Your Religion Number" value="<?php echo $row ['religion'] ?> ">
    </div>
    
    <button type="submit" class="btn btn-success" style="box-shadow: 3px 3px 8px #157347;" name="edit" >Update </button>
    <a href="index.php" class="btn btn-info" style="box-shadow: 3px 3px 8px #31D2F2;">View All Results</a>
  </form>

  

  </div>



  </div>





       <div class="col-md-3"></div>
     </div>












  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>