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
    <br/><br/>
    <table width="500" align="left">
    <?php
        $this->load->helper('form');
        echo form_open('ranking_committee/rank_faculty/'.$faculty_profile['emp_id']);
            echo "<td>Educational Qualification</td><td><input type='textarea' size='20' class='form-control input-sm' name='EQ' placeholder='2'></td></tr>";
            echo "<td>Teaching Proficiency</td><td><input type='textarea' size='20' class='form-control input-sm' name='TeachP' placeholder='7'></td></tr>";
            echo "<td>Research/ Pr. Research</td><td><input type='textarea' size='20' class='form-control input-sm' name='Research' placeholder='5'></td></tr>";
            echo "<td>Community Services</td><td><input type='textarea' size='20' class='form-control input-sm' name='CS' placeholder='4'></td></tr>";
            echo "<td>Training Programs</td><td><input type='textarea' size='20' class='form-control input-sm' name='TrainP' placeholder='1'></td></tr>";
            echo "<td>Ivolvement in Ogranizations</td><td><input type='textarea' size='20' class='form-control input-sm' name='Involvement' placeholder='1'></td></tr>";
            echo "<tr><td colspan=2>".form_submit('mysubmit', 'Rank', 'class="btn btn-default"')."</td></tr>";
        echo form_close();
    ?> 
    </table>
    <br/>
</div>