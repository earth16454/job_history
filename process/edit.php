<?php

require_once('config.php');
session_start();

if (isset($_REQUEST['submit'])) {
  $id = $_REQUEST['id'];
  $company_name = $_REQUEST['companyName'];
  $job_position = $_REQUEST['jobPosition'];
  $description = $_REQUEST['description'];
  $location = $_REQUEST['location'];
  $address = $_REQUEST['address'];
  $link = $_REQUEST['link'];
  $application_date = $_REQUEST['applicationDate'];
  $job_status = $_REQUEST['jobStatus'];

  if (empty($company_name)) {
    $_SESSION['error'] = "Please enter Company Name";
    header("location: ../edit.php");
  } else if (empty($job_position)) {
    $_SESSION['error'] = "please Enter Job Position";
    header("location: ../edit.php");
  } else if (empty($application_date)) {
    $_SESSION['error'] = "please Enter Application Date";
    header("location: ../edit.php");
  } else {
    try {
      if (!isset($_SESSION['error'])) {
        $insert_stmt = $db->prepare("UPDATE jobhistory SET company_name = :company_name, 
          job_position = :job_position, 
          description = :description, 
          location = :location,
          address = :address,
          link = :link,
          application_date = :application_date, 
          job_status = :job_status 
          WHERE id = :id");
        $insert_stmt->bindParam(':company_name', $company_name);
        $insert_stmt->bindParam(':job_position', $job_position);
        $insert_stmt->bindParam(':description', $description);
        $insert_stmt->bindParam(':location', $location);
        $insert_stmt->bindParam(':address', $address);
        $insert_stmt->bindParam(':link', $link);
        $insert_stmt->bindParam(':application_date', $application_date);
        $insert_stmt->bindParam(':job_status', $job_status);
        $insert_stmt->bindParam(':id', $id);
        $insert_stmt->execute();
        if ($insert_stmt) {
          $_SESSION['success'] = "Update Successfully...";
          header("refresh:1; ../index.php");
        }
      } else {
        $_SESSION['error'] = "Something went wrong!";
        header("location: ../edit.php");
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
