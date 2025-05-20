<?php
require("../include/conn.php");

// Handle form submission for dropping the course
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vstudentnumber = $_POST['txtstudentnumber'];
    $vcoursecode = $_POST['txtcoursecode'];

    // Get student index
    $sql = "SELECT fldindex FROM tblstudent WHERE fldstudentnumber='$vstudentnumber' ORDER BY fldindex";
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $vstudentindex = $row['fldindex'];
            }
        }

    // Get course index
    $sql2 = "SELECT fldindex FROM tblcourse WHERE fldcoursecode='$vcoursecode' ORDER BY fldindex";
    $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                $vcourseindex = $row2['fldindex'];
            }
        }

    // Delete course enrollment
    $sql_delete = "DELETE FROM tbllist WHERE fldstudentindex='$vstudentindex' AND fldcourseindex='$vcourseindex'";
        if ($conn->query($sql_delete) === TRUE) {
            echo "<script>alert('Course dropped successfully.'); window.location.href = 'enrollview.php?vid=$vstudentnumber';</script>";
        } else {
            echo "<script>alert('Error dropping course: " . $conn->error . "'); window.location.href = 'enrollview.php?vid=$vstudentnumber';</script>";
        }

    exit; // Stop further execution after processing form
}

// Display course drop confirmation form (if accessed via GET)
$vstudentnumber = $_GET['vid'] ?? '';
$vcoursecode = $_GET['course'] ?? '';

// Fetch student details
$sql = "SELECT * FROM tblstudent WHERE fldstudentnumber='$vstudentnumber' ORDER BY fldindex";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $vlastname = $row['fldlastname'];
        $vfirstname = $row['fldfirstname'];
        $vmiddlename = $row['fldmiddlename'];
        $vprogramofstudy = $row['fldprogramofstudy'];
    }

// Fetch course details
$sql2 = "SELECT * FROM tblcourse WHERE fldcoursecode='$vcoursecode' ORDER BY fldindex";
$result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();
        $vcourse = $row2['fldcourse'];
        $vunits = $row2['fldunits'];
    }
    ?>

<html>
<body>
<form action="enrollmentdrop.php" method="post">
    <table border="1" align="center">
        <tr><td colspan="2" align="center"><b>Confirm Drop Course</b></td></tr>
        <tr><td>Student Number:</td><td>
            <input type="hidden" name="txtstudentnumber" value="<?= $vstudentnumber; ?>">
            <input type="text" readonly value="<?= $vstudentnumber; ?>"></td></tr>
        <tr><td>Last Name:</td><td>
            <input type="text" readonly value="<?= $vlastname; ?>"></td></tr>
        <tr><td>First Name:</td><td>
            <input type="text" readonly value="<?= $vfirstname; ?>"></td></tr>
        <tr><td>Middle Name:</td><td>
            <input type="text" readonly value="<?= $vmiddlename; ?>"></td></tr>
        <tr><td>Program of Study:</td><td>
            <input type="text" readonly value="<?= $vprogramofstudy; ?>"></td></tr>
        <tr><td>Course Code:</td><td>
            <input type="hidden" name="txtcoursecode" value="<?= $vcoursecode; ?>"><input type="text" readonly value="<?= $vcoursecode; ?>"></td></tr>
        <tr><td>Course Name:</td><td>
            <input type="text" readonly value="<?= $vcourse; ?>"></td></tr>
        <tr><td>Units:</td><td>
            <input type="text" readonly value="<?= $vunits; ?>"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="Drop Course"><button type="button" onclick="window.history.back()">Cancel</button></td></tr>
    </table>
</form>
</body>
</html>