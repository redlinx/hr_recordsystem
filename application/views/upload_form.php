<div id="body">
    <?php
        for($x=0;$x<count($page_content);$x++)
        {
            $category_option[$page_content[$x]['category_id']] = $page_content[$x]['category_name'];
        }
    ?>
<<<<<<< HEAD
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <table class="table table-striped">
=======
<<<<<<< HEAD
    <table class="table table-striped">
=======
    <?php echo '<a href="'.base_url().'index.php/view_faculty/uploads/'.$this->session->userdata('emp_id').'">'; ?> <?php echo form_submit('mysubmit', 'Gallery') ?> </a>
    <table>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        <?php echo $error;?>
            <?php echo form_open_multipart('upload/do_upload');?>
                <tr>
                    <td>
                        <input type="file" name="userfile" size="20" />
                        <input type="hidden" name="name" value="<?php echo $this->session->userdata('lastname'); ?>" size="20" /> 
                        <input type="hidden" name="user" value="<?php echo $this->session->userdata('emp_id'); ?>" size="20" /> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Title: <?php echo form_input('title'); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Remarks: <br/> <?php echo form_textarea('remarks'); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo form_dropdown('type', $category_option); ?>
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