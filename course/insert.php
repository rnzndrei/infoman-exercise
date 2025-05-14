<?php
require("../include/conn.php");

$vcoursecode="";
$vcourse="";
$vunits="";

?>
<html>
    <body>
    <form action="insert-save.php" method="post" name="formadd" enctype="multipart/form-data" novalidate>
        <table border="1" style="width: 80%; height: auto;" align=center>    
            <tr>
                <td colspan="2" align=center>
                    <b>Insert Course</b>
                </td>
            </tr>
            <tr>
                <td>
                <label >Enter Course Code:</label>
                </td>
                <td>
                <input type="text" name="txtcoursecode" id="txtcoursecode" value="<?php echo $vcoursecode; ?>">
                </td>
            </tr>
            
            <tr>
                <td>
                <label >Enter Course Title:</label>
                </td>
                <td>
                <input type="text" name="txtcourse" id="txtcourse" value="<?php echo $vcourse; ?>">
                </td>
            </tr>
            
            <tr>
                <td>
                <label >Enter Number of Units:</label>
                </td>
                <td>
                <input type="text" name="txtunits" id="txtunits" value="<?php echo $vunits; ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2" align=center>
                <input type="submit" value="Save Record" />
                <button type="reset" class="btn btn-warning btn-s" onClick="window.location.href='course.php'">Back</button>
                </td>
            </tr>
            
        </table>
    </form>
        
    </body>
</html>