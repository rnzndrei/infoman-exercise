<?php
require("../include/conn.php");

$vcoursecode=$_POST['txtcoursecode'];
$vcourse=$_POST['txtcourse'];
$vunits=$_POST['txtunits'];
//Old course code
$vcoursecodeold = $_POST['txtcoursecodeold'];

$vindex=0;

$sql = "DELETE FROM tblcourse WHERE fldcoursecode='$vcoursecode'";
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
