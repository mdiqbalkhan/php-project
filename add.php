<?php  include('action.php'); ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="table_area">
      <h2 style="text-align: center;"> Bhaluar Char High School</h2>
      <form action="action.php" method="post">
            <div class="mb-3">
            <label class="form-label">Student name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name">
            </div>

            <div class="mb-3">
            <label class="form-label">Student Roll</label>
            <input type="text" class="form-control" name="roll" placeholder="Enter your Roll">
            </div>
            
            <div class="mb-3">
            <label class="form-label">Student Registration</label>
            <input type="text" class="form-control" name="registration" placeholder="Enter your registration" >
            </div>

            <div class="mb-3">
            <label class="form-label">Bangla</label>
            <input type="text" class="form-control" name="bangla" placeholder="Enter your Bangla Number">
            </div>

            <div class="mb-3">
            <label class="form-label">Math</label>
            <input type="text" class="form-control" name="math" placeholder="Enter your Math Number">
            </div>

            <div class="mb-3">
            <label class="form-label">English</label>
            <input type="text" class="form-control" name="english" placeholder="Enter your English Number">
            </div>

            <div class="mb-3">
            <label class="form-label">BGS</label>
            <input type="text" class="form-control" name="bgs" placeholder="Enter your BGS Number">
            </div>

            <div class="mb-3">
            <label class="form-label">Science</label>
            <input type="text" class="form-control" name="science" placeholder="Enter your Science Number">
            </div>

            <div class="mb-3">
            <label class="form-label">Religion</label>
            <input type="text" class="form-control" name="religion" placeholder="Enter your Religion Number">
            </div>

            <button type="submit" class="btn btn-info"  name="add" style="margin-bottom: 5%; box-shadow: 3px 3px 8px #31D2F2;" >Add result</button>
            </form>
            <a href="index.php" class="btn btn-success" style="display: flex; justify-content: center;">Home</a>

      </div>
    </div>
    <div class="col-md-4"></div>

   </div>

