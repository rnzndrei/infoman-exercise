<?php
require("../include/conn.php");

$vstudentnumber = $_POST['txtstudentnumber'];
$vcoursecode = $_POST['txtcoursecode'];

$sql = "SELECT * FROM tblstudent where fldstudentnumber='$vstudentnumber'  order by fldindex";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vlastname=$row['fldlastname'];			
                $vfirstname=$row['fldfirstname'];			
                $vmiddlename=$row['fldmiddlename'];			
                $vprogramofstudy=$row['fldprogramofstudy'];
                
            }
        }

$sql2 = "SELECT * FROM tblcourse where fldcoursecode='$vcoursecode'  order by fldindex";
        $result2 = $conn->query($sql2);
        if($result2->num_rows > 0) 
        {
            while($row2 = $result2->fetch_assoc())
            {
                
                $vcourse=$row2['fldcourse'];			
                $vunits=$row2['fldunits'];			
                
            }
        }

?>

<html>
<body>
<form action="enrolldrop-save.php" method="post">
    <table border="1" style="width: auto; height: auto;" align=center>  
        <tr>
            <td colspan="2" align="center">
                <b>Confirm Drop Course</b>
            </td>
        </tr>

        <tr>
            <td><label>Student Number:</label></td>
            <td>
                <input type="hidden" name="txtstudentnumber" value="<?php echo $vstudentnumber; ?>">
                <input type="text" readonly value="<?php echo $vstudentnumber; ?>">
            </td>
        </tr>

        <tr>
            <td><label>Last Name:</label></td>
            <td><input type="text" readonly value="<?php echo $vlastname; ?>"></td>
        </tr>

        <tr>
            <td><label>First Name:</label></td>
            <td><input type="text" readonly value="<?php echo $vfirstname; ?>"></td>
        </tr>

        <tr>
            <td><label>Middle Name:</label></td>
            <td><input type="text" readonly value="<?php echo $vmiddlename; ?>"></td>
        </tr>

        <tr>
            <td><label>Program of Study:</label></td>
            <td><input type="text" readonly value="<?php echo $vprogramofstudy; ?>"></td>
        </tr>

        <tr>
            <td><label>Course Code:</label></td>
            <td>
                <input type="hidden" name="txtcoursecode" value="<?php echo $vcoursecode; ?>">
                <input type="text" readonly value="<?php echo $vcoursecode; ?>">
            </td>
        </tr>

        <tr>
            <td><label>Course Name:</label></td>
            <td><input type="text" readonly value="<?php echo $vcourse; ?>"></td>
        </tr>

        <tr>
            <td><label>Units:</label></td>
            <td><input type="text" readonly value="<?php echo $vunits; ?>"></td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Drop Course" />
                <button type="button" onclick="window.history.back()">Cancel</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
