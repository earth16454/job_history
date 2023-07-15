<?php

require_once('config.php');
session_start();

if (isset($_REQUEST['submit'])) {
  $company_name = $_REQUEST['companyName'];
  $job_position = $_REQUEST['jobPosition'];
  $job_salary = $_REQUEST['jobSaraly'];
  $submit_by1 = Null;
  $submit_by2 = Null;
  $submit_by3 = Null;
  $submit_by4 = Null;
  if(isset($_REQUEST['submit_by1'])){
    $submit_by1 = $_REQUEST['submit_by1'];
  }
  if(isset($_REQUEST['submit_by2'])){
    $submit_by2 = $_REQUEST['submit_by2'];
  }
  if(isset($_REQUEST['submit_by3'])){
    $submit_by3 = $_REQUEST['submit_by3'];
  }
  if(isset($_REQUEST['submit_by4'])){
    $submit_by4 = $_REQUEST['submit_by4'];
  }

  $description = $_REQUEST['description'];
  $location = $_REQUEST['location'];
  $address = $_REQUEST['address'];
  $link = $_REQUEST['link'];
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
  } else if(empty($submit_by)){
    $submit_by = "Other";
  } else {
    try {
      if(!isset($_SESSION['error'])){
        $insert_stmt = $db->prepare("INSERT INTO jobhistory(company_name, job_position, job_salary, submit_by1, submit_by2, submit_by3, submit_by4, description, location, address, link, application_date, job_status) VALUES (:company_name, :job_position, :job_salary, :submit_by1, :submit_by2, :submit_by3, :submit_by4, :description, :location, :address, :link, :application_date, :job_status)");
        $insert_stmt->bindParam(':company_name', $company_name);
        $insert_stmt->bindParam(':job_position', $job_position);
        $insert_stmt->bindParam(':job_salary', $job_salary);
        $insert_stmt->bindParam(':submit_by1', $submit_by1);
        $insert_stmt->bindParam(':submit_by2', $submit_by2);
        $insert_stmt->bindParam(':submit_by3', $submit_by3);
        $insert_stmt->bindParam(':submit_by4', $submit_by4);
        $insert_stmt->bindParam(':description', $description);
        $insert_stmt->bindParam(':location', $location);
        $insert_stmt->bindParam(':address', $address);
        $insert_stmt->bindParam(':link', $link);
        $insert_stmt->bindParam(':application_date', $application_date);
        $insert_stmt->bindParam(':job_status', $job_status);
        $insert_stmt->execute();
        $_SESSION['success'] = "Insert Successfully...";
        header("refresh:1; ../index.php");
      } else {
        $_SESSION['error'] = "Something went wrong!";
        header("location: ../create.php");
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
