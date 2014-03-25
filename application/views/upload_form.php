<div class="body">
    <br/>
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