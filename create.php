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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/styles.css" />

  <style>
    .container {
      max-width: 840px;
    }
  </style>
</head>

<body class="">
  <?php include('component/header.html'); ?>
  <div class="container my-5">
    <div class="bg-white shadow-sm p-md-5 p-3">
      <a href="index.php" class="btn btn-outline-secondary mb-3">back</a>
      <h1 class="">Job Application History</h1>
      <hr class="mb-3">
      <form method="POST" action="process/add.php" class="row">
        <?php if (isset($_SESSION['error'])) { ?>
          <div class="alert alert-danger">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
          </div>
        <?php } ?>
        <?php if (isset($_SESSION['success'])) { ?>
          <div class="alert alert-success">
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
          </div>
        <?php } ?>
        <div class="col-12 col-md-6 mb-3">
          <label for="companyName" class="form-label">Company Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="companyName" id="companyName" required />
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="jobPosition" class="form-label">Job Position <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="jobPosition" id="jobPosition" required />
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="jobPosition" class="form-label">Job Salary</label>
          <input type="text" class="form-control" name="jobSaraly" id="jobSaraly" />
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="" class="form-label">Submit by <span class="text-danger">*</span></label><br>
          <div class="row">
            <div class="col-6">
              <div class="form-check-inline">
                <input type="checkbox" name="submit_by1" id="submitBy_email" value="Email">
                <label for="submitBy_email" class="form-label fw-light">Email</label>
              </div>
              <div class="form-check-inline">
                <input type="checkbox" name="submit_by2" id="submitBy_jobnorth" value="JobNorth">
                <label for="submitBy_jobnorth" class="form-label fw-light">JobNorth</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-check-inline">
                <input type="checkbox" name="submit_by3" id="submitBy_jobthai" value="JobThai">
                <label for="submitBy_jobthai" class="form-label fw-light">JobThai</label>
              </div>
              <div class="form-check-inline">
                <input type="checkbox" name="submit_by4" id="submitBy_other" value="Other">
                <label for="submitBy_other" class="form-label fw-light">Other</label>
              </div>
            </div>
          </div>

        </div>
        <div class="col-12 mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description" rows="2"></textarea>
          <!-- <input type="text" class="form-control" name="description" id="description" /> -->
        </div>
        <div class="col-12 mb-3">
          <label for="location" class="form-label">Location</label>
          <!-- <input type="text" class="form-control" name="location" id="location" placeholder='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46154.16302962874!2d98.95017560242398!3d18.793812852526575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3b3487bc5d7b%3A0xdc4d4833433c7682!2sNever%20Sleep!5e0!3m2!1sth!2sth!4v1689196317299!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'> -->
          <textarea class="form-control" name="location" id="location" rows="6" placeholder='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46154.16302962874!2d98.95017560242398!3d18.793812852526575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3b3487bc5d7b%3A0xdc4d4833433c7682!2sNever%20Sleep!5e0!3m2!1sth!2sth!4v1689196317299!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'></textarea>
        </div>
        <div class="col-12 mb-3">
          <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="address" id="address" required>
        </div>
        <div class="col-12 mb-3">
          <label for="address" class="form-label">Link</label>
          <input type="text" class="form-control" name="link" id="link">
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="applicationDate" class="form-label">Application Date <span class="text-danger">*</span></label>
          <input type="datetime-local" class="form-control" name="applicationDate" id="applicationDate" required />
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
          <select class="form-select text-secondary" name="jobStatus" id="status" required>
            <option value="" disabled selected>Select status</option>
            <option value="applied" class="text-primary">Applied</option>
            <option value="contacted_back" class="text-info">Contacted back</option>
            <option value="interviewed" class="text-warning">Interviewed</option>
            <option value="rejected" class="text-danger">Rejected</option>
            <option value="hired" class="text-success">Hired</option>
          </select>
        </div>

        <div class="col-12 mt-4">
          <button type="submit" name="submit" class="btn btn-success w-100">Save</button>
          <a href="index.php" class="btn btn-outline-danger w-100 mt-2">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#status').change(function() {
        if ($('#status').val() == "applied") {
          $('#status').addClass("text-primary");
          $('#status').removeClass("text-warning text-danger text-success text-info text-secondary");
        } else if ($('#status').val() == "contacted_back") {
          $('#status').addClass("text-info");
          $('#status').removeClass("text-primary text-danger text-success text-warning text-secondary");
        } else if ($('#status').val() == "interviewed") {
          $('#status').addClass("text-warning");
          $('#status').removeClass("text-primary text-danger text-success text-info text-secondary");
        } else if ($('#status').val() == "rejected") {
          $('#status').addClass("text-danger");
          $('#status').removeClass("text-primary text-warning text-success text-info text-secondary");
        } else if ($('#status').val() == "hired") {
          $('#status').addClass("text-success");
          $('#status').removeClass("text-primary text-warning text-danger");
        } else {
          $('#status').removeClass("text-primary text-warning text-danger text-success text-info text-secondary");

        }

      })
    });
  </script>
</body>

</html>