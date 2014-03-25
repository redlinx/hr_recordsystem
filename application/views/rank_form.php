<div id="body">
    <script>
    function goBack()
    {
        window.history.go(-1)
    }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><br/>
    <table width="500" align="left" class="table table-striped">
        <tr>
            <th>Category</th>
            <th>Maximum Point</th>
            <th>Earned Point</th>
        </tr>
    <?php
        $this->load->helper('form');
        echo form_open('ranking_committee/rank_faculty/'.$faculty_profile['emp_id']);
            echo "<td>Educational Qualification</td>    <td align='center'>2</td><td><input type='textarea' size='20' class='form-control input-sm' name='EQ' placeholder='2'></td></tr>";
            echo "<td>Teaching Proficiency</td>         <td align='center'>7</td><td><input type='textarea' size='20' class='form-control input-sm' name='TeachP' placeholder='7'></td></tr>";
            echo "<td>Research/ Pr. Research</td>       <td align='center'>5</td><td><input type='textarea' size='20' class='form-control input-sm' name='Research' placeholder='5'></td></tr>";
            echo "<td>Community Services</td>           <td align='center'>4</td><td><input type='textarea' size='20' class='form-control input-sm' name='CS' placeholder='4'></td></tr>";
            echo "<td>Training Programs</td>            <td align='center'>1</td><td><input type='textarea' size='20' class='form-control input-sm' name='TrainP' placeholder='1'></td></tr>";
            echo "<td>Ivolvement in Ogranizations</td>  <td align='center'>1</td><td><input type='textarea' size='20' class='form-control input-sm' name='Involvement' placeholder='1'></td></tr>";
            echo "<tr><td align='right' colspan=3>".form_submit('mysubmit', 'Rank', 'class="btn btn-primary"')."</td></tr>";
        echo form_close();
    ?> 
    </table>
    <br/>
</div>