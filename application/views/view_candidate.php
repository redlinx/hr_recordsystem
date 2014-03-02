<<<<<<< HEAD
<div class="body">
    <table class="table table-striped">
=======
<<<<<<< HEAD
<div class="body">
    <table class="table table-striped">
=======
<<<<<<< HEAD
<div class="body">
    <table class="table table-striped">
=======
<<<<<<< HEAD
<div class="body">
    <table class="table table-striped">
=======
<<<<<<< HEAD
<div class="body">
    <table class="table table-striped">
=======
<<<<<<< HEAD
<div class="body">
    <table class="table table-striped">
=======
<<<<<<< HEAD
<div class="body">
    <table class="table table-striped">
=======
<div id="body">
    <table width="525" align="left">
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        <tr align="left">
            <th>Last Name</th>
            <th>First Name</th>
            <th>Date Hired</th>
<<<<<<< HEAD
            <th>Years of Service</th>
=======
<<<<<<< HEAD
            <th>Years of Service</th>
=======
<<<<<<< HEAD
            <th>Years of Service</th>
=======
<<<<<<< HEAD
            <th>Years of Service</th>
=======
<<<<<<< HEAD
            <th>Years of Service</th>
=======
<<<<<<< HEAD
            <th>Years of Service</th>
=======
<<<<<<< HEAD
            <th>Years of Service</th>
=======
            <th>YoS</th>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
            <th>Education</th>
            <th>Regular</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
<<<<<<< HEAD
            
            {

=======
<<<<<<< HEAD
            
            {

=======
<<<<<<< HEAD
            
            {

=======
<<<<<<< HEAD
            
            {

=======
<<<<<<< HEAD
            
            {

=======
<<<<<<< HEAD
            
            {

=======
<<<<<<< HEAD
            
            {

=======
            {
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
                echo form_open();
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['MonthName'].' '.$page_view_content[$x]['Day'].', '.$page_view_content[$x]['Year']."</td>";
                    echo "<td>".$page_view_content[$x]['Years_Of_Service']."</td>";
                    echo '<td><a href="'.base_url().'index.php/view_hr/education/'.$page_view_content[$x]['faculty_profile_emp_id'].'">View</a></td>';
                    echo '<td><a href="'.base_url().'index.php/regularization_candidate/verify_regularization/'.$page_view_content[$x]['account_id'].'"> Regular </a></td>';
                    echo '</tr>';
                echo form_close();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }  ?> 
            <button type="button" class="btn btn-default btn-mm"> 
              <?php echo '<a href="' . base_url() . 'index.php/Report_controller/candidate_reports"';  ?> 
            <span class="glyphicon glyphicon-print"></span> Generate
                </a></button>
         
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
            }
             echo '<a href="' . base_url() . 'index.php/Report_controller/candidate_reports">Generate</a>';
        ?>    
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
    </table>
</div>