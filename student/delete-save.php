<?php
require("../include/conn.php");

$vstudentnumber=$_POST['txtstudentnumber'];
$vlastname=$_POST['txtlastname'];
$vfirstname=$_POST['txtfirstname'];
$vmiddlename=$_POST['txtmiddlename'];
$vprogramofstudy=$_POST['txtprogramofstudy'];
//Old student number
$originalstudentnumber = $_POST['txtoriginal_studentnumber'];

$sql = "DELETE FROM tblstudent WHERE fldstudentnumber='$vstudentnumber'";

                    if (mysqli_query($conn, $sql)) {
                      //echo "Record deleted successfully";
                    } else {
                      //echo "Error deleting record: " . mysqli_error($conn);
                    }

?>

<script>
    alert("Record Deleted.");								
</script>
<meta  http-equiv="refresh" content=".000001;url=student.php" />