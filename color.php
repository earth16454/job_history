<?php

if($job_history["job_status"] == "applied"){
  echo 'text-primary';
} 
else if($job_history["job_status"] == "contacted_back"){
  echo 'text-info';
}
else if($job_history["job_status"] == "interviewed"){
  echo 'text-warning';
} 
else if($job_history["job_status"] == "rejected"){
  echo 'text-danger';
}
else if($job_history["job_status"] == "hired"){
  echo 'text-success';
} else {
  echo '';
}

?>