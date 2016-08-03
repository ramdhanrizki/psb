<?php 
function anti_sql_injection($kata) {
$kata = stripslashes($kata);
$kata = strip_tags($kata);
$kata = mysql_real_escape_string($kata);
return $kata;
}

?>