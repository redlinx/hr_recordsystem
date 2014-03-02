<div id="body">
    <table>
        <?php echo $error;?>
        <?php echo form_open_multipart('upload/do_upload');?>
             <div id="body">
            <form>
                 
                  <?php echo form_open_multipart('upload/do_upload');?>
            1.<input type="file" name="userfile" size="20" />
                    <input type="hidden" name="user" value="<?php echo $this->session->userdata('emp_id'); ?>" size="20" /> 
                    <br/>
            2.  <?php $category = array(
                                ''    => 'Choose Options:',
                                'EQ'  => 'Educational Qualification',
                                'CES'   => 'Community Extension Services (within or outside UIC',
                                'TPS' => 'Training Programs, Seminars, ETC.',
                                'IPO' => 'Involvement in Professional Organizations'
                                //'value' => $this->form_validation->set_value('program'),
                              );?>
                Categories: <?php echo form_dropdown('category', $category); ?> <br/> 
            3. Remarks<br/> 
                  <textarea rows="4" cols="50">
                  </textarea> <br/>
                  <input type="submit" value="Upload" />
              
        <?php echo form_close(); ?>
    </table>
</div>