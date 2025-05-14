<?php
require("../include/conn.php");
$vcoursecode=$_REQUEST['vid'];

$sql = "SELECT * FROM tblcourse where fldcoursecode='$vcoursecode'  order by fldindex";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vcourse=$row['fldcourse'];			
                $vunits=$row['fldunits'];			
                
            }
        }

?>
<html>
    <body>
    <form action="delete-save.php" method="post" name="formadd" enctype="multipart/form-data" novalidate>
        <table border="1" style="width: 80%; height: auto;" align=center>    
            <tr>
                <td colspan="2" align=center>
                    <b>Delete Course</b>
                </td>
            </tr>
            <tr>
                <td>
                <label >Course Code:</label>
                </td>
                <td>
                <input type="hidden" name="txtcoursecodeold" value="<?php echo $vcoursecodeold; ?>">
                <input readonly type="text" name="txtcoursecode" id="txtcoursecode" value="<?php echo $vcoursecode; ?>">
                </td>
            </tr>
            
            <tr>
                <td>
                <label >Course Title:</label>
                </td>
                <td>
                <input readonly type="text" name="txtcourse" id="txtcourse" value="<?php echo $vcourse; ?>">
                </td>
            </tr>
            
            <tr>
                <td>
                <label >Course Units:</label>
                </td>
                <td>
                <input readonly type="text" name="txtunits" id="txtunits" value="<?php echo $vunits; ?>">
                </td>
            </tr>
            
            <tr>
                <td colspan="2" align=center>
                <input type="submit" value="Delete Record" />
                <button type="reset" class="btn btn-warning btn-s" onClick="window.location.href='course.php'">Back</button>
                </td>
            </tr>
        </table>
    </form>
        
    </body>
</html>