<div id="body">
    <b>
        Upload Profile Picture 
    </b><br/>
<<<<<<< HEAD
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <table class="table table-striped">
=======
    <table>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
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