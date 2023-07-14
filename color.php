<?php

if($job_history["job_status"] == "applied"){
  echo 'text-primary';
} 
else if($job_history["job_status"] == "interviewed"){
  echo 'text-warning';
} 
else if($job_history["job_status"] == "rejected"){
  echo '<text-danger';
}
else if($job_history["job_status"] == "hired"){
  echo 'class="text-success';
} else {
  echo '';
}

if($applied == "applied"){
  echo 'text-primary';
} else if($interviewed == "interviewed"){
  echo 'text-warning';
} else if($rejected == "rejected"){
  echo '<text-danger';
} else if($hired == "hired"){
  echo 'class="text-success';
} else {
  echo '';
}

?>