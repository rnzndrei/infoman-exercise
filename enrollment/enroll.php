    <?php
    require("../include/conn.php");
    ?>
    <table border="1" style="width: 80%; height: auto;" align=center>
    <tr>
    <td colspan="7" align=center>
        <b>Enroll Student</b>    
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
    $sql = "SELECT * FROM tblstudent order by fldindex";
            $result = $conn->query($sql);
            if($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc())
                {
                    
                    $vstudentnumber=$row['fldstudentnumber'];			
                    $vlastname=$row['fldlastname'];	
                    $vfirstname=$row['fldfirstname'];	
                    $vmiddlename=$row['fldmiddlename'];	
                    $vprogramofstudy=$row['fldprogramofstudy'];	
                    ?>
                    <tr>
                    <td>
                    <?php
                    echo $vstudentnumber;
                    ?>
                    </td>
                    <td>
                    <?php
                    echo $row['fldlastname'];	
                    ?>
                    </td>
                    <td>
                    <?php
                    echo $vfirstname;
                    ?>
                    </td>
                    <td>
                    <?php
                    echo $vmiddlename;
                    ?>
                    </td>
                    <td>
                    <?php
                    echo $vprogramofstudy;
                    ?>
                    </td>
                        
                    <td>
                    <button type="button" class="btn btn-warning btn-s" onClick="window.location.href='enroll1.php?vid=<?php echo $vstudentnumber; ?>'">Enlist</button>
                    </td>

                    <td>
                    <button type="button" class="btn btn-warning btn-s" onClick="window.location.href='enrollview.php?vid=<?php echo $vstudentnumber; ?>'">View</button>
                    </td>

                    </tr>
                    <?php
                }
            }
    ?>
    <tr>
    <td colspan="5" align=center>
        <button type="button" class="btn btn-warning btn-s" onClick="window.location.href='student.php'">Display All</button>
        <button type="reset" class="btn btn-warning btn-s" onClick="window.location.href='tcpdf6/examples/aaarepstudent.php'">Print</button>
        <button type="reset" class="btn btn-warning btn-s" onClick="window.location.href='../index.php'">Back</button>
        <a href="tcpdf6/examples/aaarepstudent.php" target="_blank"> Print</a>
    </td>
    </tr>

    </table>
