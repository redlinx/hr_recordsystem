<div class="body">
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/education"> <button type="mysubmit"class="btn btn-primary">Add</button> </a>
    <br/><br/><h4>Academic and Professional Preparation</h4><br/>
        <table width="700" align="left" class="table">
            <tr align="left">
                <th>School</th>
                <th></th>
                <th>Address</th>
                <th>Year</th>
                <th></th>
                <th>Type</th>
                <th>Degree</th>
                <th>Edit</th>
            </tr>
            <?php
                for($x=0;$x<count($page_view_content);$x++)
                {
                    echo '<tr>';
                    echo '<td>'.$page_view_content[$x]['school_name'].'</td>';
                    echo '<td></td>';
                    echo '<td>'.$page_view_content[$x]['address'].'</td>';
                    echo '<td>'.$page_view_content[$x]['year'].'</td>';
                    echo '<td></td>';
                    echo '<td>'.$page_view_content[$x]['type_desc'].'</td>';
                    echo '<td>'.$page_view_content[$x]['degree'].'</td>';
                    echo '<td><a href="'.base_url().'index.php/update_form/education/'.$page_view_content[$x]['educ_id'].'">Edit</a></td>';
                    echo '</tr>';
                }
            ?>
        </table>
        <br/>
</div>