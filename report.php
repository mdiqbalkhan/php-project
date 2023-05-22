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
    if (isset($_GET['report'])) {
            $ID= $_GET['report'];
            $result=$mysqli->query("SELECT * FROM marksheet WHERE ID=$ID") or die(mysqli->error());
            if (!empty($result)) {
              $row=$result->fetch_array();

             
            }
          }
       ?>
   

  <div class="row">
       <div class="col-md-2"></div>
       <div class="col-md-8 from_area">
        <div class="table_area">
       
            <h2 style="text-align: center;"> Bhaluar Char High School </h2>
            <h4  style="text-align: center;">Final Exam</h4>
            <div class="row">
                <div class="col-md-6">
                    <h5>Student Name:&nbsp; <?php echo $row ['name'] ?> </h5>
                </div>
                <div class="col-md-6">
                    <h5 class="roll">Student Roll:&nbsp; <?php echo $row ['roll'] ?></h5>
                </div>
            </div>

            <br>
            <br>
            <table class="table table-success table-striped-columns">
          
					  <thead>
					    <tr>
					
					      <th scope="col">Subject</th>
					      <th scope="col">Full Marks</th>
					      <th scope="col">Obtain Marks</th>
					      <th scope="col" >Total</th>
                          <th scope="col">Percentage</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					   		
					      <td>Bangla</td>
					      <td>100</td>
                          <td><?php echo $row ['bangla'] ?></td>
                          <td rowspan="8"><?php echo $row ['total'] ?></td>
                          <td rowspan="8"><?php echo $row ['percentage'] ?></td>
					      
					    </tr>
                        
                             <tr>
					   		
                               <td>Mathematics</td>
                               <td>100</td>
                               <td><?php echo $row ['math'] ?></td>
                              
                               
                             </tr>
                             <tr>
					   		
                               <td>English</td>
                               <td>100</td>
                               <td><?php echo $row ['english'] ?></td>
                              
                               
                             </tr>
                             <tr>
					   		
                               <td>BGS</td>
                               <td>100</td>
                               <td><?php echo $row ['bgs'] ?></td>
                              
                             
                               
                             </tr>
                             <tr>
					   		
                               <td>Science</td>
                               <td>100</td>
                               <td><?php echo $row ['science'] ?></td>
                               
                               
                             </tr>
                             <tr>
					   		
                               <td>Religion</td>
                               <td>100</td>
                               <td><?php echo $row ['religion'] ?></td>
                              
                               
                             </tr>
					  
					  </tbody>
				
</table>
           
                <a href="add.php" class="btn btn-success" style="box-shadow: 3px 3px 8px #157347;">Add New </a>
                <td> <a href="edit.php?edit=<?php echo $row['ID']; ?> " class="btn btn-warning" style="box-shadow: 3px 3px 8px #FFCA2C;">Edit</a></td>
                <a href="index.php" class="btn btn-info" style="box-shadow: 3px 3px 8px #31D2F2;">View Others </a>

        </div>



       </div>
    




       <div class="col-md-2"></div>
     </div>












  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>