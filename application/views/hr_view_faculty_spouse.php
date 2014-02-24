<div id="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()"> Back </button>  
    <table align="center">
        <?php
            if($faculty_spouse != NULL)
            {
                echo form_open();
                    echo "<tr><td>Last Name</td><td>:  ".$faculty_spouse['lastname']."</td></tr>";
                    echo "<tr><td>First Name</td><td>:  ".$faculty_spouse['firstname']."</td></tr>";
                    echo "<tr><td>Middle Name</td><td>:  ".$faculty_spouse['middlename']."</td></tr>";
                    echo "<tr><td>Birthday</td><td>:  ".$faculty_spouse['MonthName'].' '.$faculty_spouse['Day'].', '.$faculty_spouse['Year']."</td></tr>";
                    echo "<tr><td>Birth Place</td><td>:  ".$faculty_spouse['birth_place']."</td></tr>";
                    echo "<tr><td>Spouse Col</td><td>:  ".$faculty_spouse['faculty_spousecol']."</td></tr>";
                    echo "<tr><td>Contant No. #</td><td>:  ".$faculty_spouse['contact_no']."</td></tr>";
                    echo "<tr><td>Highest Educ. Attain. </td><td>:  ".$faculty_spouse['educational_attainment']."</td></tr>";
                    echo "<tr><td>Occupation </td><td>:  ".$faculty_spouse['occupation']."</td></tr>";
                    echo "<tr><td>Employer</td><td>:  ".$faculty_spouse['employer']."</td></tr>";
                    echo "<tr><td>Address</td><td>:  ".$faculty_spouse['address']."</td></tr>";
                    echo "<tr><td>SSS</td><td>:  ".$faculty_spouse['SSS']."</td></tr>";
                    echo "<tr><td>Pag-Ibig</td><td>:  ".$faculty_spouse['pag_ibig']."</td></tr>";
                    echo "<tr><td>PhilHealth</td><td>:  ".$faculty_spouse['philhealth']."</td></tr>";
                    echo "<tr><td>TIN</td><td>:  ".$faculty_spouse['TIN']."</td></tr>";
                echo form_close();
            }
            else
            {
                echo "<script> alert('No Data Found'); </script>";
            }
        ?>
    </table>
</div>