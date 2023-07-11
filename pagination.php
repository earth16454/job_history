<?php

// Database 
require_once('process/config.php');

// Set Session
session_start();

if(isset($_POST['records-limit'])){
  $_SESSION['records-limit'] = $_POST['records-limit'];
}

$limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 5;
// if(isset($_SESSION['records-limit'])){
//   $limit = $_SESSION['records-limit'];
// } else {
//   $limit = 5;
// }
$page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
// if(isset($_GET['page']) && is_numeric($_GET['page'])){
//   $page = $_GET['page'];
// } else {
//   $page = 1;
// }

$paginationStart = ($page - 1) * $limit;
$job_historys = $db->query("SELECT * FROM jobhistory LIMIT $paginationStart, $limit")->fetchAll();

// Get total records
$sql = $db->query("SELECT count(id) AS id FROM jobhistory")->fetchAll();
$allRecrods = $sql[0]['id'];

// Calculate total pages
$totoalPages = ceil($allRecrods / $limit);

// Prev + Next
$prev = $page - 1;
$next = $page + 1;

?>