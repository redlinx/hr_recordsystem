<?php 

class Report_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->helper('html');
		$this->load->library('table');
		$this->load->model('m_display');
		$this->load->model('m_view');
		$this->load->model('hr');
	}

	public function reports()
	{
		date_default_timezone_set('Asia/Taipei');
		define('FPDF_FONTPATH', APPPATH . 'plugins/font/');
		require(APPPATH . 'plugins/html2fpdf.php');
		$pdf = new HTML2FPDF('p','mm','A4');
		$pdf -> AddPage();
		$pdf -> setDisplayMode ('fullpage');
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
		$info = array();
		$info = $this->m_display->display_regular_faculty($info);
		$pdf -> WriteHTML('<tr><th> Regular Faculty</th></tr>');
		$pdf -> WriteHTML('<table align="auto" border="1" width="7in">');
		$pdf -> WriteHTML('<tr><th>LastName</th><th>FirstName</th><th>MiddleName</th><th>Date Hired</th><th>Date Regular</th></tr>');
		for($x=0;$x<=count($info);$x++)
            {
                // echo form_open();
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
      //  $pdf -> image('uploads/uic.jpg',10,3,60,0,'');
      //  $this->fpdf->image(base_url().'hr_recordsystem/application/plugins/header.jpg',10,3,60,0,'');
		$info = array();
		$info = $this->m_display->display_regular_faculty($info);
		$pdf -> WriteHTML('<tr><th>Regular Faculty</th></tr>');
		$pdf -> WriteHTML('<table align="auto" border="0.5" width="7in">');
		$pdf -> WriteHTML('<tr><th>LastName</th><th>FirstName</th><th>MiddleName</th><th>Date Hired</th><th>Date Regular</th></tr>');
		for($x=0;$x<=count($info);$x++)
            {
                
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".$info[$x]['lastname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['firstname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['middlename']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['MonthName'].' '.$info[$x]['Day'].', '.$info[$x]['Year']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['RMonthName'].' '.$info[$x]['RDay'].', '.$info[$x]['RYear']."</td>");
                    $pdf -> WriteHTML('</tr>');
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
                // echo form_close();
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }
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
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        $pdf -> WriteHTML('</table>');

		$pdf -> Output('Regular_Faculty.pdf', 'D');


	}
	public function Un_Reg_reports()
	{
		date_default_timezone_set('Asia/Taipei');
		define('FPDF_FONTPATH', APPPATH . 'plugins/font/');
		require(APPPATH . 'plugins/html2fpdf.php');
		$pdf = new HTML2FPDF('p','mm','A4');
		$pdf -> AddPage();
		$pdf -> setDisplayMode ('fullpage');
		$info = array();
		$info = $this->m_display->display_unRegular_faculty($info);
<<<<<<< HEAD
		$pdf -> WriteHTML('<tr><th> Regular Faculty</th></tr>');
=======
<<<<<<< HEAD
		$pdf -> WriteHTML('<tr><th> Regular Faculty</th></tr>');
=======
<<<<<<< HEAD
		$pdf -> WriteHTML('<tr><th> Regular Faculty</th></tr>');
=======
<<<<<<< HEAD
		$pdf -> WriteHTML('<tr><th> Regular Faculty</th></tr>');
=======
<<<<<<< HEAD
		$pdf -> WriteHTML('<tr><th> Regular Faculty</th></tr>');
=======
<<<<<<< HEAD
		$pdf -> WriteHTML('<tr><th> Regular Faculty</th></tr>');
=======
<<<<<<< HEAD
		$pdf -> WriteHTML('<tr><th> Regular Faculty</th></tr>');
=======
		$pdf -> WriteHTML('<center><b>UNREGULAR FACULTY</b></center><br><br>');
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
		$pdf -> WriteHTML('<table align="auto" border="1" width="7in">');
		$pdf -> WriteHTML('<tr><th>LastName</th><th>FirstName</th><th>MiddleName</th><th>Date Hired</th></tr>');
		for($x=0;$x<=count($info);$x++)
            {
<<<<<<< HEAD
                // echo form_open();
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".count($info)."</td>");
=======
<<<<<<< HEAD
                // echo form_open();
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".count($info)."</td>");
=======
<<<<<<< HEAD
                // echo form_open();
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".count($info)."</td>");
=======
<<<<<<< HEAD
                // echo form_open();
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".count($info)."</td>");
=======
<<<<<<< HEAD
                // echo form_open();
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".count($info)."</td>");
=======
<<<<<<< HEAD
                // echo form_open();
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".count($info)."</td>");
=======
<<<<<<< HEAD
                // echo form_open();
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".count($info)."</td>");
=======
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".$info[$x]['lastname']."</td>");
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
                    $pdf -> WriteHTML("<td>".$info[$x]['firstname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['middlename']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['MonthName'].' '.$info[$x]['Day'].', '.$info[$x]['Year']."</td>");
                  
                    $pdf -> WriteHTML('</tr>');
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
                // echo form_close();
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }
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
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        $pdf -> WriteHTML('</table>');

		$pdf -> Output('UnRegular_Faculty.pdf', 'D');


	}

	public function candidate_reports()
	{
		date_default_timezone_set('Asia/Taipei');
		define('FPDF_FONTPATH', APPPATH . 'plugins/font/');
		require(APPPATH . 'plugins/html2fpdf.php');
		$pdf = new HTML2FPDF('p','mm','A4');
		$pdf -> AddPage();
		$pdf -> setDisplayMode ('fullpage');
		$info = array();
		$info = $this->hr->display_regularization_candidate($info);
		$pdf -> WriteHTML('<tr><th> Candidates Of Regularization</th></tr>');
		$pdf -> WriteHTML('<table align="auto" border="1" width="7in">');
		$pdf -> WriteHTML('<tr><th>LastName</th><th>FirstName</th><th>MiddleName</th><th>Date Hired</th><th>Year Of Services</th></tr>');
		for($x=0;$x<=count($info);$x++)
            {
<<<<<<< HEAD
                // echo form_open();
=======
<<<<<<< HEAD
                // echo form_open();
=======
<<<<<<< HEAD
                // echo form_open();
=======
<<<<<<< HEAD
                // echo form_open();
=======
<<<<<<< HEAD
                // echo form_open();
=======
<<<<<<< HEAD
                // echo form_open();
=======
<<<<<<< HEAD
                // echo form_open();
=======
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".$info[$x]['lastname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['firstname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['middlename']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['MonthName'].' '.$info[$x]['Day'].', '.$info[$x]['Year']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['Years_Of_Service']."</td>");
                    $pdf -> WriteHTML('</tr>');
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
                // echo form_close();
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }
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
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        $pdf -> WriteHTML('</table>');

		$pdf -> Output('Candidates.pdf', 'D');


	}
	public function files_reports($empID)
	{
		date_default_timezone_set('Asia/Taipei');
		define('FPDF_FONTPATH', APPPATH . 'plugins/font/');
		require(APPPATH . 'plugins/html2fpdf.php');
		$pdf = new HTML2FPDF('p','mm','A4');
		$pdf -> AddPage();
		$pdf -> setDisplayMode ('fullpage');
		$info = array();
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

=======
         
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
		$info = $this->m_view->profile($empID);
		$educ = $this->m_view->education($empID);
		$skills = $this->m_view->skills($empID);
		$work = $this->m_view->work($empID);
		$child = $this->m_view->children($empID);
		$spouse = $this->m_view->spouse($empID);
		//$pdf -> image('uploads/Aming_1_11.jpg');
		$pdf -> WriteHTML('<center><b>EMPLOYEE`S INFORMATION SHEET</b></center><br><br>');
		$pdf -> WriteHTML('<table align="auto" border="1" width="7in">');
		$pdf -> WriteHTML('<tr><th colspan="5" height=".5in"></th></tr>');

                    $pdf -> WriteHTML("<tr><th>Name</th><td>".$info['lastname'].", " . $info['firstname'] . " " . $info['middlename'] . "</td></tr>");
                    $pdf -> WriteHTML("<tr><th>Gender</th><td>".$info['gender']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th>Religion</th><td>".$info['religion']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th>Date Of Birth</th><td>".$info['']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th>Place Of Birth</th><td>".$info['']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th>City Address</th><td>".$info['']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th>Province Address</th><td>".$info['']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th>Telephone #</th><td>".$info['tell_no']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th>Cellphone #</th><td>".$info['cell_no']."</td></tr>");
                     $pdf -> WriteHTML("<tr><th>Email Address</th><td>".$info['email']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th>Province Address</th><td>".$info['']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th>Civil Status</th><td>".$info['civil_status']."</td></tr>");
                   	$pdf -> WriteHTML('</table><br>');

        $pdf -> WriteHTML('<table align="auto" border="1"  width="7in">');
        $pdf -> WriteHTML('<tr><th colspan="5" height=".5in">Educational Attainment</th></tr>');
        $pdf -> WriteHTML('<tr><th>Type</th><th>School</th><th>Address</th><th>Year</th><th>Degree</th></tr>');
        for($a = 0; $a <= count($educ); $a++)
        {
        	$pdf -> WriteHTML("<tr>");
        	$pdf -> WriteHTML("<td>".$educ[$a]['type_desc']."</td><td>".$educ[$a]['school_name']."</td><td>" . $educ[$a]['address'] . "</td><td>" . $educ[$a]['year'] . "</td><td>" . $educ[$a]['degree'] . "</td>");
        	$pdf -> WriteHTML("</tr>");
        }
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        $pdf -> WriteHTML('</table><br>');

         $pdf -> WriteHTML('<table align="auto" border="1"  width="7in">');
        $pdf -> WriteHTML('<tr><th colspan="4" height=".5in">Skills</th></tr>');
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        for($b = 0; $b <= count($skills); $b++)
        {
        	$pdf -> WriteHTML("<tr>");
        	$pdf -> WriteHTML("<td>".$skills[$b]['skill_name']."</td>");
        	$pdf -> WriteHTML("</tr>");
        }
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        $pdf -> WriteHTML('</table><br>');


        $pdf -> WriteHTML('<table align="auto" border="1"  width="7in">');
        $pdf -> WriteHTML('<tr><th colspan="4" height=".5in">Work Experience</th></tr>');
        $pdf -> WriteHTML('<tr><th>Company</th><th>Position</th><th>Inclusive Dates</th></tr>');
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
<<<<<<< HEAD
       // $pdf -> WriteHTML('<tr><th>Skills</th>></tr>');
=======
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        for($c = 0; $c <= count($work); $c++)
        {
        	$pdf -> WriteHTML("<tr>");
        	$pdf -> WriteHTML("<td>".$work[$c]['company']."</td><td>".$work[$c]['position']."</td><td>".$work[$c]['StartMonthName'].', '.$work[$c]['StartDay'].', '.$work[$c]['StartYear']."</td>");
        	$pdf -> WriteHTML("</tr>");
        }
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        $pdf -> WriteHTML('</table><br>');
           
        $pdf -> WriteHTML('<table align="auto" border="1"  width="7in">');
        $pdf -> WriteHTML('<tr><th colspan="4" height=".5in"></th></tr>');
       $pdf -> WriteHTML('<tr><th>Name Of Children</th><th>Date of Birth</th></tr>');
        for($d = 0; $d <= count($child); $d++)
        {
        	$pdf -> WriteHTML("<tr>");
        	$pdf -> WriteHTML("<td>".$child[$d]['name']."</td><td>".$child[$d]['MonthName'].', '.$child[$d]['Day'].', '.$child[$d]['Year']."</td>");
        	$pdf -> WriteHTML("</tr>");
        }
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        $pdf -> WriteHTML('</table><br>');


        
        $pdf -> WriteHTML('<table align="auto" border="1"  width="7in">');
        $pdf -> WriteHTML('<tr><th colspan="4" height=".5in">Spouse</th></tr>');
        
                  $pdf -> WriteHTML("<tr><th>Name of Spouse(husband/Wife</th><td>".$spouse['lastname'].", " . $spouse['firstname'] . " " . $spouse['middlename'] . "</td></tr>");
                  $pdf -> WriteHTML("<tr><th>Date Of Birth</th><td>".$spouse['MonthName'].', '.$spouse['Day'].', '.$spouse['Year']."</td>");
                  $pdf -> WriteHTML("<tr><th>Birth Place</th><td>".$spouse['birth_place']."</td></tr>");
<<<<<<< HEAD
                   $pdf -> WriteHTML("<tr><th>Contact #</th><td>".$spouse['contact_no']."</td></tr>");
=======
<<<<<<< HEAD
                   $pdf -> WriteHTML("<tr><th>Contact #</th><td>".$spouse['contact_no']."</td></tr>");
=======
<<<<<<< HEAD
                   $pdf -> WriteHTML("<tr><th>Contact #</th><td>".$spouse['contact_no']."</td></tr>");
=======
<<<<<<< HEAD
                   $pdf -> WriteHTML("<tr><th>Contact #</th><td>".$spouse['contact_no']."</td></tr>");
=======
<<<<<<< HEAD
                   $pdf -> WriteHTML("<tr><th>Contact #</th><td>".$spouse['contact_no']."</td></tr>");
=======
<<<<<<< HEAD
                   $pdf -> WriteHTML("<tr><th>Contact #</th><td>".$spouse['contact_no']."</td></tr>");
=======
<<<<<<< HEAD
                   $pdf -> WriteHTML("<tr><th>Contact #</th><td>".$spouse['contact_no']."</td></tr>");
=======
                  $pdf -> WriteHTML("<tr><th>Contact #</th><td>".$spouse['contact_no']."</td></tr>");
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        	      $pdf -> WriteHTML("<tr><th>Educational Attainment(highest Degree)</th><td>".$spouse['educational_attainment']."</td></tr>");
        	      $pdf -> WriteHTML("<tr><th>Present Occupation</th><td>".$spouse['occupation']."</td></tr>");
                  $pdf -> WriteHTML("<tr><th>Employeer/Address</th><td>".$spouse['employer']."</td></tr>");
                  $pdf -> WriteHTML('</table><br>');
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
<<<<<<< HEAD
        // $pdf -> WriteHTML('<tr><td>' . print_r($educ) . '</td></tr>');
=======
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
>>>>>>> ba8b69dfff351ca86dbdb27da91b052c05cac7ce
>>>>>>> ae4d9117a2a10501d24d453974b081a981ff7089
        $pdf -> WriteHTML('</table><br>');
		$pdf -> Output('files.pdf', 'D');


	}

}
?>
