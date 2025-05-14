<?php
require("../include/conn.php");

$sql = "SELECT * FROM tblcourse order by fldindex desc";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vcoursecode=$row['coursecode'];			
                $vcourse=$row['course'];	
                $vunits=$row['units'];	
                ?>
                <br>
                <?php
                echo $vcoursecode." - ".$vcourse.", ",$vunits;
                
            }
        }
?>