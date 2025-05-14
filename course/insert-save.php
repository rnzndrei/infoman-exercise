<?php
require("../include/conn.php");

$vcoursecode = $_POST['txtcoursecode'];
$vcourse = $_POST['txtcourse'];
$vunits = $_POST['txtunits'];

$vdup=0;
$vindex=0;

$sql = "SELECT * FROM tblcourse  order by fldindex";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vindex=$row['fldindex'];			
                
            }
        }
        $vindex=$vindex+1;

$sql = "SELECT * FROM tblcourse  WHERE fldcoursecode='$vcoursecode' order by fldindex";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vdup=1;		
                
            }
        }

if($vdup ==  0){
    $sql = "INSERT INTO tblcourse (fldindex, fldcoursecode, fldcourse, fldunits) VALUES ('$vindex', '$vcoursecode', '$vcourse', '$vunits')";
    if ($conn->query($sql) === TRUE) {} 
        else {} 
        ?>
            <script>
                alert("Record Saved.");								
            </script>
            <meta  http-equiv="refresh" content=".000001;url=course.php" />
        <?php
}else{
    ?>
    <script>
    alert("Duplicate Course Code.");								
    </script>
    <meta  http-equiv="refresh" content=".000001;url=insert.php" />
    <?php
}
?>
