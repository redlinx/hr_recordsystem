<div id="body">
    <?php
        for($x=0;$x<count($page_content);$x++)
        {
            $category_option[$page_content[$x]['category_id']] = $page_content[$x]['category_name'];
        }
    ?>
    <?php echo '<a href="'.base_url().'index.php/view_faculty/uploads/'.$this->session->userdata('emp_id').'">'; ?> <?php echo form_submit('mysubmit', 'Gallery') ?> </a>
    <table>
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