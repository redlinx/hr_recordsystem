<div id="body">
    <h3>Upload Profile Picture</h3>
    <table align="left" class="table table-striped" >
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
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </td>
                </tr>
            <?php echo form_close(); ?>
    </table>
    <br/>
</div>