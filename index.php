<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="body">
<form action="insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
             <h3 class="text-center text-primary">TODO LIST BY Engineer Saad</h3>
             <div class="col-8">
             <input type="text" name="title" class="form-control">
             </div>
             <div class="col-2">
                <button class="btn btn-outline-primary">ADD</button>
             </div>
            </div>
            
        </div>
        </form>
<!-- Getting data from database -->
<?php
    include "config.php";
    $rawData = mysqli_query($con, "select * from tbltodo"); 
    
    ?>

        <div class="container ">
            <div class="col-8 bg-white m-auto mt-3">

           
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>TODO</th>
                    <th>Status</th>
                    <th >Update</th>
                    <th >Delete</th>
                </tr>
                <?php
                 while($row=mysqli_fetch_array($rawData)){
                ?>
                <?php
        if(!$rawData){
            ?>
            <h3> Todo list is empty </h3>
        <?php
        }
        else{
        ?>
                 <tr>
                    <td><?php echo $row['id'] ?> </td>
                    <td><?php echo $row['title'] ?> </td>
                    <?php  if($row['status']==false){ ?>  
                    <td>Incomplete</td>
                    <?php 
                    }else{ 
                    ?>
                    <td>Complete</td>
                    <?php
                    }
                    ?>

                    <?php  if($row['status']==false){ ?>  
                    <td style="width:10%"><a class="btn btn-success" href="update.php ? ID=<?php echo $row['id'] ?>">Complete</a></td>
                    <?php 
                    }else{ 
                    ?>
                    <td style="width:10%">Complete</td>
                    <?php
                    }
                    ?>
                    
                    <td style="width:10%"><a class="btn btn-danger" href="delete.php ? ID=<?php echo $row['id'] ?>">Delete</a></td>
                </tr>
                <?php
                 } }
                ?>
                
            </tbody>
        </table>
        <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3">
        <a class="btn btn-danger col-2" href="deleteall.php">Delete All</a>
        </div>
        
        </div>
        </div>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
</body>
</html>