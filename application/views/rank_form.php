<div id="body">
    <?php
    echo "<table>";
        $this->load->helper('form');
        echo form_open('ranking_committee/rank_faculty'.$faculty_profile['emp_id']);
            echo "<tr><td>Educational Qualification</td><td>".form_input('EQ')."</td></tr>";
            echo "<tr><td>Teaching Proficiency</td><td>".form_input('TeachP')."</td></tr>";
            echo "<tr><td>Research/ Pr. Research</td><td>".form_input('Research')."</td></tr>";
            echo "<tr><td>Community Services</td><td>".form_input('CS')."</td></tr>";
            echo "<tr><td>Training Programs</td><td>".form_input('TrainP')."</td></tr>";
            echo "<tr><td>Ivolvement in Ogranizations</td><td>".form_input('Involvement')."</td></tr>";
            echo "<tr><td colspan=2>".form_submit('mysubmit', 'Rank')."</td></tr>";
        echo form_close();
    echo "</table>";
    ?>
</div>