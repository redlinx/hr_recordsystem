<div class="body">
    <br/>
    <h4>Upload Profile Picture</h4>
    <table align="left" >
        <?php echo $error;?>
            <?php echo form_open_multipart('upload_profPic/do_upload');?>
                <tr>
                    <td>
                        <input type="file" name="userfile" size="20" />
                        <input type="hidden" name="name" value="<?php echo $this->session->userdata('emp_id'); ?>" size="20" /> 
                        <input type="hidden" name="user" value="<?php echo $this->session->userdata('emp_id'); ?>" size="20" /> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/><button type="submit" class="btn btn-default">Upload</button>
                    </td>
                </tr>
            <?php echo form_close(); ?>
    </table>
    <br/>
</div>