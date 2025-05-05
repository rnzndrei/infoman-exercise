<?php
require("../include/conn.php");

$vstudentnumber=$_POST['txtstudentnumber'];
$vlastname=$_POST['txtlastname'];
$vfirstname=$_POST['txtfirstname'];
$vmiddlename=$_POST['txtmiddlename'];
$vprogramofstudy=$_POST['txtprogramofstudy'];
//Old student number
$originalstudentnumber = $_POST['txtoriginal_studentnumber'];

$vindex=0;

$sql = "UPDATE tblstudent SET 
            fldstudentnumber='$vstudentnumber',
            fldlastname='$vlastname',
            fldfirstname='$vfirstname',
            fldmiddlename='$vmiddlename',
            fldprogramofstudy='$vprogramofstudy' 
                WHERE fldstudentnumber='$originalstudentnumber'";
                    if ($conn->query($sql) === TRUE) 
                    {
                        //echo "Record updated successfully";
                    } 
                    else 
                    {
                        //echo "Error updating record: " . mysqli_error($conn);
                    }
?>
<script>
    alert("Record Updated.");								
</script>
<meta  http-equiv="refresh" content=".000001;url=student.php" />