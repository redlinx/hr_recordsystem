<div class="nav">
    
    <nav class="navbar navbar-primary" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-default" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="active">
            <?php echo '<a href="'.base_url().'index.php/view_faculty/education/'.$this->session->userdata('emp_id').'">'; ?>
            Education
            </a>
        </li>
       <li class="active">
            <?php echo '<a href="'.base_url().'index.php/view_faculty/training/'.$this->session->userdata('emp_id').'">'; ?>
            Training
        </a></li>
         <li class="active">
            <?php echo '<a href="'.base_url().'index.php/view_faculty/work/'.$this->session->userdata('emp_id').'">'; ?>
            Work
        </a>
         <li class="active">
            <?php echo '<a href="'.base_url().'index.php/view_faculty/skill/'.$this->session->userdata('emp_id').'">'; ?>
            Skills
        </a>
        </li>
         <li class="active">
            <a href="http://localhost/hr_recordsystem/index.php/upload">Upload</a>
        </li>
      </ul>
      
   
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>