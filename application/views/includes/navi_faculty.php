<div id="nav">
    <ul>
        <li>
            <a href="http://localhost/hr_recordsystem/index.php/verifylogin">Home</a>
        </li>
        <li>
            <?php echo '<a href="'.base_url().'index.php/view_faculty/profile/'.$this->session->userdata('emp_id').'">'; ?>
            Profile
            </a>
        </li>
        <li>
            <?php echo '<a href="'.base_url().'index.php/view_faculty/education/'.$this->session->userdata('emp_id').'">'; ?>
            Education
            </a>
        </li>
        <li>
            <?php echo '<a href="'.base_url().'index.php/view_faculty/training/'.$this->session->userdata('emp_id').'">'; ?>
            Training
        </a>
        <li>
            <?php echo '<a href="'.base_url().'index.php/view_faculty/work/'.$this->session->userdata('emp_id').'">'; ?>
            Work
        </a>
        <li>
            <?php echo '<a href="'.base_url().'index.php/view_faculty/skill/'.$this->session->userdata('emp_id').'">'; ?>
            Skills
        </a>
        </li>
        <li>
            <a href="http://localhost/hr_recordsystem/index.php/upload">Upload</a>
        </li>
        <li>
            <a href="http://localhost/hr_recordsystem/index.php/change_pass">Change Password</a>
        </li>
    </ul>
</div>