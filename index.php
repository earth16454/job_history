<?php
require_once('process/config.php');
// session_start();

include('pagination.php');

// $timeStamp = $row['date'];
// $timeStamp = date( "m/d/Y", strtotime($timeStamp));

// $job_history['application_date'] = date("d/M/Y H:i", strtotime($job_history['application_date']));
// $time = date("d-M-Y H:i:s", strtotime($job_history['application_date']));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Application History</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <?php include('component/header.html'); ?>

  <div class="box bg-white shadow px-2 py-3 p-md-4">
    <h2>Job application history</h2>
    <hr class="mb-4">
    <div class="row mb-3">
      <div class="col-2">
        <form action="index.php" method="post">
          <select name="records-limit" id="records-limit" class="form-select custom-select">
            <option disabled selected>Records Limit</option>
            <?php foreach ([5, 7, 10, 12, $allRecrods] as $limit) : ?>
              <option <?php if (isset($_SESSION['records-limit']) && $_SESSION['records-limit'] == $limit) echo 'selected'; ?> value="<?= $limit; ?>">
                <?= $limit; ?>
              </option>
            <?php endforeach; ?>
          </select>
        </form>
      </div>
      <div class="col-2 d-flex align-items-center">
        <p class="m-0 fw-bold">Total records : <span class="text-indigo"><?php echo $allRecrods; ?></span></p>
      </div>
      <div class="col-8 text-end">
        <a href="create.php" class="btn btn-outline-success" style="width: 8rem;">Add</a>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-sm table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Company Name:</th>
            <th>Job Position:</th>
            <th>Description:</th>
            <th>Application Date:</th>
            <th>Status:</th>
            <th>View:</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($job_historys as $job_history) : ?>
            <?php $job_history['application_date'] = date("d/m/Y, H:i น.", strtotime($job_history['application_date'])); ?>
            <tr>
              <th class="col" scope="row"><?php echo $job_history['id']; ?></th>
              <td class="col-3"><?php echo $job_history['company_name']; ?></td>
              <td class="col-2"><?php echo $job_history['job_position']; ?></td>
              <td class="col-2"><?php echo $job_history['description']; ?></td>
              <td><?php echo $job_history['application_date']; ?></td>
              <td class="<?php include("color.php"); ?>"><?php echo $job_history["job_status"]; ?></td>
              <td><a href="detail.php?id=<?php echo $job_history['id']; ?>" class="link-body-emphasis">View</a></td>
              <td><a href="edit.php?edit_id=<?php echo $job_history['id']; ?>" class="btn btn-sm btn-warning">Edit</a></td>
              <td><a href="delete.php?delete_id=<?php echo $job_history["id"]; ?>" class="btn btn-sm btn-outline-danger">Delete</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>

      <!-- Pagination -->
      <nav aria-label="Page navigation example mt-5">
        <ul class="pagination justify-content-center">
          <li class="page-item <?php if ($page <= 1) {
                                  echo 'disabled';
                                } ?>">
            <a class="page-link" href="<?php if ($page <= 1) {
                                          echo '#';
                                        } else {
                                          echo "?page=" . $prev;
                                        } ?>">Previous</a>
          </li>
          <?php for ($i = 1; $i <= $totoalPages; $i++) : ?>
            <li class="page-item <?php if ($page == $i) {
                                    echo 'active';
                                  } ?>">
              <a class="page-link" href="index.php?page=<?= $i; ?>"> <?= $i; ?> </a>
            </li>
          <?php endfor; ?>
          <li class="page-item <?php if ($page >= $totoalPages) {
                                  echo 'disabled';
                                } ?>">
            <a class="page-link" href="<?php if ($page >= $totoalPages) {
                                          echo '#';
                                        } else {
                                          echo "?page=" . $next;
                                        } ?>">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- jQuery + Bootstrap JS -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#records-limit').change(function() {
        $('form').submit();
      })
    });
  </script>

</body>

</html>