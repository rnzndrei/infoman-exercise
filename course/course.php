<?php
require("../include/conn.php");
?>
<table border="1" style="width: 80%; height: auto;" align=center>
<tr>
<td colspan="6" align=center>
    <b>Student Course</b>    
</td>
</tr>

<form action="search.php" method="post" name="formadd" enctype="multipart/form-data" novalidate>
    <tr>
        <td colspan="5" align=center>
            <input type="text" name="txtsearch" id="txtsearch">
        </td>
        <td colspan="2" align=center>
            <input type="submit" value="Search Record" />
        </td>
    </tr>
</form>

<?php
$sql = "SELECT * FROM tblcourse order by fldindex";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vcourse_code=$row['course_code'];			
                $vcourse_title=$row['course_title'];	
                $vunits=$row['units'];	
	                
                ?>
                <tr>
                <td>
                <?php
                echo $vcourse_code;
                ?>
                </td>
                <td>
                <?php
                echo $vcourse_title;
                ?>
                </td>
                <td>
                <?php
                echo $vunits;
                ?>
                </td>
                    
                <td>
                <button type="button" class="btn btn-warning btn-s" onClick="window.location.href='update.php?vid=<?php echo $vcourse_code; ?>'">Update</button>
                </td>
                <td>
                <button type="button" class="btn btn-warning btn-s" onClick="window.location.href='delete.php?vid=<?php echo $vcourse_code; ?>'">Delete</button>
                </td>

                </tr>
                <?php
            }
        }
?>
<tr>
<td colspan="5" align=center>
    <button type="button" class="btn btn-warning btn-s" onClick="window.location.href='course.php'">Display All</button>
    <button type="button" class="btn btn-warning btn-s" onClick="window.location.href='insert.php'">Insert</button>
    <button type="reset" class="btn btn-warning btn-s" onClick="window.location.href='tcpdf6/examples/aaarepstudent.php'">Print</button>
    <button type="reset" class="btn btn-warning btn-s" onClick="window.location.href='../index.php'">Back</button>
    <a href="tcpdf6/examples/aaarepstudent.php" target="_blank"> Print</a>
</td>
</tr>

</table>
