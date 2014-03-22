<div class="body">
    <br/>
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <br/>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><h4>Results</h4>
    <table width="545" align="left" class="table table-stripped">
        <tr align="left">
            <th>Last Name</th>
            <th>First Name</th>
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
                    // if($val['acct_stat'] == 1)
                    // {
                    //     echo '<td><a href="'.base_url().'index.php/hr_update/deactivate/'.$val['emp_id'].'">Deactivate</a></td>';
                    // }
                    // else
                    // {
                    //     echo '<td><a href="'.base_url().'index.php/hr_update/activate/'.$val['emp_id'].'">Activate</a></td>';
                    // }
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
    <br/>
</div>