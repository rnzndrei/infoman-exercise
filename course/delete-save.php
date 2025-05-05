<?php
require("../include/conn.php");

$vcourse_code=$_POST['txtcourse_code'];
$vcourse_title=$_POST['txtcourse_title'];
$vunits=$_POST['txtunits'];
//Old student number
$original_course_code = $_POST['txtoriginal_course_code'];

$vindex=0;

$sql = "DELETE FROM tblcourse WHERE course_code='$vcourse_code'";
                    if (mysqli_query($conn, $sql)) {
                      //echo "Record deleted successfully";
                    } else {
                      //echo "Error deleting record: " . mysqli_error($conn);
                    }

?>
<script>
    alert("Record Deleted.");								
</script>
<meta  http-equiv="refresh" content=".000001;url=course.php" />
