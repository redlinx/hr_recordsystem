<div id="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()"> Back </button>
    <table width="545" align="left">
    <h3>Results</h2>
        <tr align="left">
            <th>Lastname</th>
            <th>Firstname</th>
            <th>View</th>
        </tr>
        <?php
        if($results != NULL)
        {
            foreach ($results as $val)
            {
                echo form_open();
                    echo '<tr>';
                    echo "<td>".$val['lastname']."</td>";
                    echo "<td>".$val['firstname']."</td>";
                    echo '<td><a href="'.base_url().'index.php/view_hr/faculty/'.$val['emp_id'].'">View</a></td>';
                    echo '</tr>';
                echo form_close();
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }
        }
        else
        {
           echo "<script> alert('No Data Found'); history.go(-1); </script>";
        }
        ?>  
    </table>
</div>