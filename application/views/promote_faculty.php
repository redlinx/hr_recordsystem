<div id="body">
    <script>
        function goBack()
        {
            window.history.go(-1)
        }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <?php
    foreach($page_content2 as $page)
    {
        if ($page['rank_desc'] == $page_view_content['rank_desc'])
        {
            $current_rank = $page['rank_id'];
        }
            $page_array2[$page['rank_id']] = $page['rank_desc'];
    }
        echo "<table>";
            echo form_open('hr_update/promote_faculty');
                echo form_hidden('emp_id', $page_view_content['emp_id']);
                echo "<tr><td>Rank</td><td>".form_dropdown('rank', $page_array2, $current_rank)."</td></tr>";
                echo "<tr><td colspan=2>".form_submit('mysubmit', 'Promote')."</td></tr>";   
            echo form_close();
        echo "</table>";
    ?>
    <br/>
</div>