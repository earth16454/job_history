<?php
require_once('process/config.php');
session_start();

if(isset($_GET['edit_id'])){
  $id = $_GET['edit_id'];
  $stmt = $db->query("SELECT * FROM jobhistory WHERE id = $id");
  $stmt->execute();
  $data = $stmt->fetch();

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Application History</title>

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/styles.css" />

  <style>
    .container {
      max-width: 600px;
    }
  </style>
</head>

<body class="bg-light">
  <div class="container mt-5">
    <a href="index.php" class="btn btn-outline-secondary mb-3">back</a>
    <h1 class="">Job Application History</h1>
    <form method="POST" action="">
      <?php
      if (isset($_SESSION['error'])) {
      ?>
        <div class="alert alert-danger">
          <strong>Wrong! <?php echo $_SESSION['error']; unset($_SESSION['error']); ?></strong>
        </div>
      <?php } ?>


      <?php
      if (isset($_SESSION['success'])) {
      ?>
        <div class="alert alert-success">
          <strong>Success! <?php echo $_SESSION['success']; unset($_SESSION['success']); ?></strong>
        </div>
      <?php } ?>
      <div class="mb-3">
        <label for="companyName" class="form-label">Company Name</label>
        <input type="text" class="form-control" name="companyName" id="companyName" required value="<?php echo $data['company_name']; ?>" />
      </div>
      <div class="mb-3">
        <label for="jobPosition" class="form-label">Job Position</label>
        <input type="text" class="form-control" name="jobPosition" id="jobPosition" required value="<?php echo $data['job_position']; ?>" />
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"><?php echo $data['description']; ?></textarea>
      </div>
      <div class="mb-3">
        <label for="applicationDate" class="form-label">Application Date</label>
        <input type="datetime-local" class="form-control" name="applicationDate" id="applicationDate" required value="<?php echo $data['application_date']; ?>" />
      </div>
      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" name="jobStatus" id="status" required>
          <option value="" disabled>Select status</option>
          <option value="applied" class="text-info" <?php if($data['job_status'] == "applied") echo "selected"; ?> >Applied</option>
          <option value="interviewed" class="text-warning" <?php if($data['job_status'] == "interviewed")echo "selected" ?>>Interviewed</option>
          <option value="rejected" class="text-danger" <?php if($data['job_status'] == "rejected")echo "selected" ?>>Rejected</option>
          <option value="hired" class="text-success" <?php if($data['job_status'] == "hired")echo "selected" ?>>Hired</option>
        </select>
      </div>
      <button type="submit" name="submit" class="btn btn-success w-100">Save</button>
      <button type="reset" class="btn btn-outline-danger w-100 mt-2">Cancel</button>
    </form>
  </div>
</body>

</html>