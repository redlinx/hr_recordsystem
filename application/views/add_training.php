<div id="body">
    <div style="float: left">
        <?php
        $months = array(
                    '1'  => 'Jan',
                    '2'  => 'Feb',
                    '3'  => 'Mar',
                    '4'  => 'Apr',
                    '5'  => 'May',
                    '6'  => 'Jun',
                    '7'  => 'Jul',
                    '8'  => 'Aug',
                    '9'  => 'Sep',
                    '10' => 'Oct',
                    '11' => 'Nov',
                    '12' => 'Dec',
                    );
        for ($x=1; $x<=31; $x++)
        {
            $days[$x] = $x;
        }
        for ($x=date('o'); $x>=1940; $x--)
        {
            $year[$x] = $x;
        }
            for($x=0;$x<count($page_content);$x++)
            {
                $type_option[$page_content[$x]['type_id']] = $page_content[$x]['type_desc'];
            } ?>
            <table class="table table-striped">
                <?php
                echo form_open('add/training');
                    echo "<tr><td>Training Title</td><td>".form_input('trainingTitle')."</td></tr>";
                    echo "<tr><td>Venue</td><td>".form_input('venue')."</td></tr>";
                    echo "<tr><td>Date</td><td>".form_dropdown('month',$months)."".form_dropdown('day',$days)."".form_dropdown('year',$year)."</td></tr>";
                    echo "<tr><td>Organizer</td><td>".form_input('organizer')."</td></tr>";
                    echo "<tr><td>Role</td><td>".form_input('role')."</td></tr>";
                    echo "<tr><td>Type</td><td>".form_dropdown('type',$type_option)."</td></tr>"; ?>
                    <tr><td colspan=2><button type="mysubmit" class="btn btn-primary">Add</button></td></tr>  
               <?php
                echo form_close();
            echo "</table>";
        ?>
    </div>
    <div style="float: right; padding-left: 5em">
    <?php
        for($x=0;$x<count($page_content);$x++)
        {
            $category_option[$page_content[$x]['category_id']] = $page_content[$x]['category_name'];
        }
    ?>
    <?php echo '<a href="'.base_url().'index.php/view_faculty/uploads/'.$this->session->userdata('emp_id').'">'; ?> <button type="submit" class="btn btn-primary">Gallery</button> </a>
    <br/><br/>
    <table>
        <?php echo $error;?>
            <?php echo form_open_multipart('upload/do_upload');?>
                <tr>
                    <td>
                        <input type="file" name="userfile" size="20" />
                        <input type="hidden" name="name" value="<?php echo $this->session->userdata('emp_id'); ?>" size="20" /> 
                        <input type="hidden" name="user" value="<?php echo $this->session->userdata('emp_id'); ?>" size="20" /> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>Title: <input type="text" name="title" class="form-control" placeholder="Title">
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>Remarks: <textarea rows="5" cols="50" name="remarks" class="form-control" placeholder="Remarks"> </textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>Category: <?php echo form_dropdown('type', $category_option, NULL, 'class="form-control input-sm"'); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><button type="submit" class="btn btn-primary">Upload</button>
                    </td>
                </tr>
            <?php echo form_close(); ?>
    </table>
    </div>
</div>