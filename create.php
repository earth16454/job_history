<?php
  require_once('process/config.php');
  session_start();
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
    <form method="POST" action="process/add.php">
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
        <input type="text" class="form-control" name="companyName" id="companyName" required />
      </div>
      <div class="mb-3">
        <label for="jobPosition" class="form-label">Job Position</label>
        <input type="text" class="form-control" name="jobPosition" id="jobPosition" required />
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        <!-- <input type="text" class="form-control" name="description" id="description" /> -->
      </div>
      <div class="mb-3">
        <label for="applicationDate" class="form-label">Application Date</label>
        <input type="datetime-local" class="form-control" name="applicationDate" id="applicationDate" required />
      </div>
      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" name="jobStatus" id="status" required>
          <option value="" disabled selected>Select status</option>
          <option value="applied" class="text-info">Applied</option>
          <option value="interviewed" class="text-warning">Interviewed</option>
          <option value="rejected" class="text-danger">Rejected</option>
          <option value="hired" class="text-success">Hired</option>
        </select>
      </div>
      <button type="submit" name="submit" class="btn btn-success w-100">Save</button>
      <button type="reset" class="btn btn-outline-danger w-100 mt-2">Cancel</button>
    </form>
  </div>
</body>

</html>