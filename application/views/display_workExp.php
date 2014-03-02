<div id="body">
<<<<<<< HEAD
    <h3>Work Experiences Notification</h3>
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <h3>Work Experiences Notification</h3>
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <h3>Work Experiences Notification</h3>
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <h3>Work Experiences Notification</h3>
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <h3>Work Experiences Notification</h3>
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <h3>Work Experiences Notification</h3>
    <table class="table table-striped">
=======
    <h3>Work Experiences</h3>
    <table width="400" align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
        <tr align="left">
            <th>Firstname</th>
            <th>Lastname</th>
            <th>View</th>
            <th>Verify</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo form_open();
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo '<td><a href="'.base_url().'index.php/display_notification/view_work/'.$page_view_content[$x]['work_exp_id'].'">View</a></td>';
                    echo '<td><a href="'.base_url().'index.php/display_notification/verify_workExp/'.$page_view_content[$x]['work_exp_id'].'"> Verify </a></td>';
                    echo '</tr>';
                echo form_close();
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }
        ?>  
    </table>
</div>