<?php
require_once('config.php');

if (isset($_REQUEST['submit'])) {
  $company_name = $_REQUEST['companyName'];
  $job_position = $_REQUEST['jobPosition'];
  $description = $_REQUEST['description'];
  $application_date = $_REQUEST['applicationDate'];
  $job_status = $_REQUEST['jobStatus'];

  if (empty($company_name)) {
    $_SESSION['error'] = "Please enter Company Name";
    header("location: ../create.php");
  } else if (empty($job_position)) {
    $_SESSION['error'] = "please Enter Job Position";
    header("location: ../create.php");
  } else if (empty($application_date)) {
    $_SESSION['error'] = "please Enter Application Date";
    header("location: ../create.php");
  } else {
    try {
      if(!isset($_SESSION['error'])){
        $insert_stmt = $db->prepare("INSERT INTO jobhistory(company_name, job_position, description, application_date, job_status) VALUES (:company_name, :job_position, :description, :application_date, :job_status)");
        $insert_stmt->bindParam(':company_name', $company_name);
        $insert_stmt->bindParam(':job_position', $job_position);
        $insert_stmt->bindParam(':description', $description);
        $insert_stmt->bindParam(':application_date', $application_date);
        $insert_stmt->bindParam(':job_status', $job_status);
        $insert_stmt->execute();
        $_SESSION['success'] = "Insert Successfully...";
        header("refresh:2; ../index.php");
      } else {
        $_SESSION['error'] = "Something went wrong!";
        header("location: ../create.php");
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}

?>