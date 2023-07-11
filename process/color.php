<?php

if($row["job_status"] == "applied"){
  echo '<td class="text-info"><?php echo $row["job_status"]; ?></td>';
} 
else if($row["job_status"] == "interviewed"){
  echo '<td class="text-warning"><?php echo $row["job_status"]; ?></td>';
} 
else if($row["job_status"] == "rejected"){
  echo '<td class="text-danger"><?php echo $row["job_status"]; ?></td>';
}
else if($row["job_status"] == "hired"){
  echo '<td class="text-success"><?php echo $row["job_status"]; ?></td>';
} else {
  echo '<td><?php echo $row["job_status"]; ?></td>';
}

?>