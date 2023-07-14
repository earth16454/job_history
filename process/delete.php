<?php 

require_once('config.php');
session_start();

if (isset($_REQUEST['delete_id'])) {
  $id = $_REQUEST['delete_id'];

  $select_stmt = $db->prepare("SELECT * FROM jobhistory WHERE id = :id");
  $select_stmt->bindParam(':id', $id);
  $select_stmt->execute();
  $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

  // Delete an original record from db
  $delete_stmt = $db->prepare('DELETE FROM jobhistory WHERE id = :id');
  $delete_stmt->bindParam(':id', $id);
  $delete_stmt->execute();

  header('Location: ../index.php');
}

?>