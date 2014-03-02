<div id="body">
    <?php
    for($x=0;$x<count($page_content);$x++)
    {
        $program_option[$page_content[$x]['prog_id']] = $page_content[$x]['prog_name'];
    }
        echo "<table>";
            $this->load->helper('form');
            echo form_open('add_rankingMember/add_new_member');
                echo "<tr><td>Last Name</td><td>".form_input('lastname')."</td></tr>";
                echo "<tr><td>First Name</td><td>".form_input('firstname')."</td></tr>";
                echo "<tr><td>Email Name</td><td>".form_input('email')."</td></tr>";
                echo "<tr><td>Username</td><td>".form_input('username')."</td></tr>";
                echo "<tr><td>Password</td><td>".form_password('password')."</td></tr>";
                echo "<tr><td>Program</td><td>".form_dropdown('program',$program_option)."</td></tr>";
                echo "<tr><td colspan=2>".form_submit('mysubmit', 'Register')."</td></tr>";
            echo form_close();
        echo "</table>";
    ?>
</div>