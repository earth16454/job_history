<?php
require_once('process/config.php');
session_start();

if (isset($_GET['edit_id'])) {
  $id = $_GET['edit_id'];
  $stmt = $db->query("SELECT * FROM jobhistory WHERE id = $id");
  $stmt->execute();
  $job_history = $stmt->fetch();
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
      max-width: 840px;
    }
  </style>
</head>

<body>
  <div class="container my-5">
    <div class="bg-white shadow-sm p-md-5 p-2">
      <a href="index.php" class="btn btn-outline-secondary mb-3">back</a>
      <h1 class="">Job Application History <span class="fs-6 badge text-bg-warning">Edit page</span></h1>
      <hr class="mb-3">
      <form method="POST" action="process/edit.php" class="row">
        <?php if (isset($_SESSION['error'])) { ?>
          <div class="alert alert-danger">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
          </div>
        <?php } ?>
        <!-- <?php if (isset($_SESSION['success'])) { ?>
          <div class="alert alert-success">
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
          </div>
        <?php } ?> -->
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
        <div class="col-12 col-md-6 mb-3">
          <label for="companyName" class="form-label">Company Name</label>
          <input type="text" class="form-control" name="companyName" id="companyName" required value="<?php echo $job_history['company_name']; ?>" />
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="jobPosition" class="form-label">Job Position</label>
          <input type="text" class="form-control" name="jobPosition" id="jobPosition" required value="<?php echo $job_history['job_position']; ?>" />
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="jobPosition" class="form-label">Job Salary</label>
          <input type="text" class="form-control" name="jobSaraly" id="jobSaraly" value="<?php echo $job_history['job_salary']; ?>" />
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="" class="form-label">Submit by <span class="text-danger">*</span></label><br>
          <div class="row">
            <div class="col-6">
              <div class="form-check-inline">
                <input type="checkbox" name="submit_by1" id="submitBy_email" value="Email" <?php if($job_history['submit_by1'] == "Email") echo "checked"; ?>>
                <label for="submitBy_email" class="form-label fw-light">Email</label>
              </div>
              <div class="form-check-inline">
                <input type="checkbox" name="submit_by2" id="submitBy_jobnorth" value="JobNorth" <?php if($job_history['submit_by2'] == "JobNorth") echo "checked"; ?>>
                <label for="submitBy_jobnorth" class="form-label fw-light">JobNorth</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-check-inline">
                <input type="checkbox" name="submit_by3" id="submitBy_jobthai" value="JobThai" <?php if($job_history['submit_by3'] == "JobThai") echo "checked"; ?>>
                <label for="submitBy_jobthai" class="form-label fw-light">JobThai</label>
              </div>
              <div class="form-check-inline">
                <input type="checkbox" name="submit_by4" id="submitBy_other" value="Other" <?php if($job_history['submit_by4'] == "Other") echo "checked"; ?>>
                <label for="submitBy_other" class="form-label fw-light">Other</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description" rows="2"><?php echo $job_history['description']; ?></textarea>
        </div>
        <div class="col-12 mb-3">
          <label for="location" class="form-label">Location</label>
          <!-- <input type="text" class="form-control" name="location" id="location" value='<?php echo $job_history['location'] ?>'> -->
          <textarea class="form-control" name="location" id="location" rows="6"><?php echo $job_history['location'] ?></textarea>
        </div>
        <div class="col-12 mb-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" name="address" id="address" value="<?php echo $job_history['address'] ?>">
        </div>
        <div class="col-12 mb-3">
          <label for="address" class="form-label">Link</label>
          <input type="text" class="form-control" name="link" id="link" value="<?php echo $job_history['link'] ?>">
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="applicationDate" class="form-label">Application Date</label>
          <input type="datetime-local" class="form-control" name="applicationDate" id="applicationDate" required value="<?php echo $job_history['application_date']; ?>" />
        </div>
        <div class="col-12 col-md-6 mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select <?php include('color.php'); ?>" name="jobStatus" id="status" required>
            <option value="" disabled>Select status</option>
            <option value="applied" class="text-info" <?php if ($job_history['job_status'] == "applied") echo "selected"; ?>>Applied</option>
            <option value="contacted_back" class="text-info" <?php if ($job_history['job_status'] == "contacted_back") echo "selected"; ?>>Contacted back</option>
            <option value="interviewed" class="text-warning" <?php if ($job_history['job_status'] == "interviewed") echo "selected" ?>>Interviewed</option>
            <option value="rejected" class="text-danger" <?php if ($job_history['job_status'] == "rejected") echo "selected" ?>>Rejected</option>
            <option value="hired" class="text-success" <?php if ($job_history['job_status'] == "hired") echo "selected" ?>>Hired</option>
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