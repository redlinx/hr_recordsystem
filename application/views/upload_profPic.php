<div id="body">
    <b>
        Upload Profile Picture 
    </b><br/>
    <table class="table table-striped">
        <?php echo $error;?>
            <?php echo form_open_multipart('upload_profPic/do_upload');?>
                <tr>
                    <td>
                        <input type="file" name="userfile" size="20" />
                        <input type="hidden" name="name" value="<?php echo $this->session->userdata('lastname'); ?>_<?php echo $this->session->userdata('firstname'); ?>" size="20" /> 
                        <input type="hidden" name="user" value="<?php echo $this->session->userdata('emp_id'); ?>" size="20" /> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Upload" />
                    </td>
                </tr>
            <?php echo form_close(); ?>
    </table>
</div>