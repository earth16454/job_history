<?php

require_once('process/config.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $select_stmt = $db->query("SELECT * FROM jobhistory WHERE id = $id");
  $select_stmt->execute();
  $job_history = $select_stmt->fetch();
} else {
  echo "<script>alert('Something went wrong')</script>";
  header("location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail: <?php echo $job_history['company_name']; ?></title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">

  <style>
    .container {
      max-width: 1200px;
    }
  </style>

</head>

<body class="">
  <?php include('component/header.html'); ?>

  <div class="container">
    <a href="index.php" class="btn btn-outline-secondary mt-5 px-3">back</a>
    <div class="bg-white shadow p-4 mt-3 mb-5">
      <h2>Job application history</h2>
      <hr class="mb-3 mb-md-4">
      <div class="row mb-5">
        <div class="col-md-6">
          <div class="row gy-md-3 gy-2">
            <div class="col-4 fw-bold text-success">
              Company :
            </div>
            <div class="col-8">
              <?php echo $job_history['company_name']; ?>
            </div>
            <div class="col-4 fw-bold text-success">
              Position :
            </div>
            <div class="col-8">
              <?php echo $job_history['job_position']; ?>
            </div>
            <div class="col-4 fw-bold text-success">
              Salary :
            </div>
            <div class="col-8">
              <?php echo $job_history['job_salary']; ?>
            </div>
            <div class="col-4 fw-bold text-success">
              Submit By :
            </div>
            <div class="col-8">
              <?php 
                $submit_by = Null;
                for($i = 1; $i <=4; $i++){
                  if(!empty($job_history["submit_by$i"])){
                    if($submit_by == Null){
                      $submit_by = $job_history["submit_by$i"];
                    } else {
                      $submit_by = $submit_by . ", " . $job_history["submit_by$i"];
                    }
                  }
                }
                if(!empty($submit_by)) echo $submit_by;
              ?>
            </div>
            <div class="col-4 fw-bold text-success">
              Description :
            </div>
            <div class="col-8">
              <?php echo $job_history['description']; ?>
            </div>
            <div class="col-4 fw-bold text-success">
              Application Date :
            </div>
            <div class="col-8">
              <?php echo $job_history['application_date']; ?>
            </div>
            <div class="col-4 fw-bold text-success">
              Status :
            </div>
            <div class="col-8">
              <?php echo $job_history['job_status']; ?>
            </div>
            <div class="col-4 fw-bold text-success">
              Address :
            </div>
            <div class="col-8">
              <?php echo $job_history['address']; ?>
            </div>
            <div class="col-4 fw-bold text-success">
              Link :
            </div>
            <div class="col-8">
              <a href="<?php echo $job_history['link']; ?>" class="" target="_blank"><?php echo $job_history['link']; ?></a>
            </div>


          </div>
        </div>

        <div class="col-md-6 p-3">
          <h5 class="text-center">Location</h5>
          <div class="shadow map" id="map">
            <?php echo $job_history['location']; ?>
          </div>


        </div>
      </div>
    </div>
  </div>
  </div>

  </div>

  
  <script src="js/bootstrap.bundle.min.js"></script>

  <script>
    $('#map iframe').attr("width", "100%");
    $('#map iframe').attr("height", "100%");
  </script>
</body>

</html>