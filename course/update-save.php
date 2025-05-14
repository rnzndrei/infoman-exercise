<?php
require("../include/conn.php");

$vcoursecode=$_POST['txtcoursecode'];
$vcourse=$_POST['txtcourse'];
$vunits=$_POST['txtunits'];
//Old student number
$vcoursecodeold = $_POST['txtcoursecodeold'];

$vindex=$_POST['txtindex'];

$vdup=0;

if($vcoursecode==$vcoursecodeold)
{
    $vdup=0;
}
else
{
    $sql = "SELECT * FROM tblcourse WHERE fldcoursecode='$vcoursecode'  ORDER BY fldindex";
    $result = $conn->query($sql);
    if($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc())
        {
        
            $vdup=1;
                
        }
    }

}

if($vdup==0)
{
    $sql = "UPDATE tblcourse SET              
	        fldcoursecode='$vcoursecode',
            fldcourse='$vcourse',
            fldunits='$vunits' 
                WHERE fldcoursecode='$vcoursecodeold'";
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
    <meta  http-equiv="refresh" content=".000001;url=course.php" />

<?php
}
else
{
?>
    <script>
    alert("Duplicate Course Code.");								
    </script>
    <meta  http-equiv="refresh" content=".000001;url=update.php?vid=<?php echo $vcoursecodeold; ?>" />
<?php
}
?>