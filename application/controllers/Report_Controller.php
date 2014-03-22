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
      //  $pdf -> image('uploads/uic.jpg',10,3,60,0,'');
      //  $this->fpdf->image(base_url().'hr_recordsystem/application/plugins/header.jpg',10,3,60,0,'');
        $info = array();
        $info = $this->m_display->display_regular_faculty($info);
        $pdf -> WriteHTML('<tr><th>Regular Faculty</th></tr>');
        $pdf -> WriteHTML('<table align="auto" border="0.5" width="7in">');
        $pdf -> WriteHTML('<tr><th>LastName</th><th>FirstName</th><th>Program</th><th>Date Hired</th><th>Date Regular</th></tr>');
        for($x=0;$x<=count($info);$x++)
            {
                
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".$info[$x]['lastname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['firstname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['prog_name']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['MonthName'].' '.$info[$x]['Day'].' '.$info[$x]['Year']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['RMonthName'].' '.$info[$x]['RDay'].' '.$info[$x]['RYear']."</td>");
                    $pdf -> WriteHTML('</tr>');
                
                 }
        $pdf -> WriteHTML('</table>');

        $pdf -> Output('Regular_Faculty_reports.pdf', 'D');


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
        $pdf -> WriteHTML('<center><b>UNREGULAR FACULTY</b></center><br><br>');
        $pdf -> WriteHTML('<table align="auto" border="1" width="7in">');
        $pdf -> WriteHTML('<tr><th>LastName</th><th>FirstName</th><th>Program</th><th>Date Hired</th></tr>');
        for($x=0;$x<=count($info);$x++)
            {
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".$info[$x]['lastname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['firstname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['prog_name']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['MonthName'].' '.$info[$x]['Day'].' '.$info[$x]['Year']."</td>");
                  
                    $pdf -> WriteHTML('</tr>');
                
                 }
        $pdf -> WriteHTML('</table>');

        $pdf -> Output('UnRegular_Faculty_reports.pdf', 'D');


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
        $pdf -> WriteHTML('<tr><th>LastName</th><th>FirstName</th><th>Date Hired</th><th>Year Of Services</th></tr>');
        for($x=0;$x<=count($info);$x++)
            {
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".$info[$x]['lastname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['firstname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['MonthName'].' '.$info[$x]['Day'].', '.$info[$x]['Year']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['Years_Of_Service']."</td>");
                    $pdf -> WriteHTML('</tr>');
              
               }
        $pdf -> WriteHTML('</table>');

        $pdf -> Output('Candidates_reports.pdf', 'D');


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
         
        $info = $this->m_view->profile($empID);
        $educ = $this->m_view->education($empID);
        $skills = $this->m_view->skills($empID);
        $work = $this->m_view->work($empID);
        $child = $this->m_view->children($empID);
        $eligi= $this->m_view->eligibility($empID);
        $spouse = $this->m_view->spouse($empID);
        //$pdf -> image('uploads/Aming_1_11.jpg');
        $pdf -> WriteHTML('<center><b>EMPLOYEE`S INFORMATION SHEET</b></center><br><br>');
        $pdf -> WriteHTML('<table align="auto" width="8in">');
                    $pdf -> WriteHTML("<tr><th align='left'>Name</th><td>".$info['lastname'].", " . $info['firstname'] . " " . $info['middlename'] . "</td></tr>");
                    $pdf -> WriteHTML("<th align='left'>Gender</th><td>".$info['gender']."</td>");
                    $pdf -> WriteHTML("<tr><th align='left'>Civil Status</th><td>".$info['civil_status']."</td>");
                    $pdf -> WriteHTML("<th align='left'>Religion</th><td>".$info['religion']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th align='left'>Date Of Birth</th><td>".$info['MonthName']." " . $info['Day'] . ", " . $info['Year'] . "</td>");
                    $pdf -> WriteHTML("<th align='left'>Place Of Birth</th><td>".$info['birthplace']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th align='left'>City Address</th><td>".$info['city_add']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th align='left'>Province Address</th><td>".$info['prov_add']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th align='left'>Telephone #</th><td>".$info['tell_no']."</td>");
                    $pdf -> WriteHTML("<th align='left'>Cellphone #</th><td>".$info['cell_no']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th align='left'>Email Address</th><td>".$info['email']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th align='left'>SSS #</th><td>".$info['sss']."</td>");
                    $pdf -> WriteHTML("<th align='left'>Pag-ibig #</th><td>".$info['pag_ibig']."</td></tr>");
                    $pdf -> WriteHTML("<tr><th align='left'>PhilHealth #</th><td>".$info['philhealth']."</td>");
                    $pdf -> WriteHTML("<th align='left'>TIN #</th><td>".$info['tin']."</td></tr>");
        $pdf -> WriteHTML('</table><br>');

        $pdf -> WriteHTML('<table align="auto" border="1"  width="7in">');
        $pdf -> WriteHTML('<tr><th colspan="5" height=".5in">Educational Attainment</th></tr>');
        $pdf -> WriteHTML('<tr><th>Type</th><th>School Graduated</th><th>Address</th><th>Year</th><th>Degree</th></tr>');
        for($a = 0; $a <= count($educ); $a++)
        {
            $pdf -> WriteHTML("<tr>");
            $pdf -> WriteHTML("<td>".$educ[$a]['type_desc']."</td><td>".$educ[$a]['school_name']."</td><td>" . $educ[$a]['address'] . "</td><td>" . $educ[$a]['year'] . "</td><td>" . $educ[$a]['degree'] . "</td>");
            $pdf -> WriteHTML("</tr>");
        }
        $pdf -> WriteHTML('</table><br>');

            $pdf -> WriteHTML('</table><br>'); $pdf -> WriteHTML('<table align="auto" border="1"  width="7in">');
            $pdf -> WriteHTML('<tr><th colspan="5" height=".5in">Eligibilities</th></tr>');
            $pdf -> WriteHTML('<tr><th>Name Of Exam</th><th>Date</th><th>Place</th><th>Rating</th></tr>');
          for($e = 0; $e <= count($eligi); $e++)
        {
            $pdf -> WriteHTML("<tr>");
            $pdf -> WriteHTML("<td>".$eligi[$e]['exam_name']."</td><td>".$eligi[$e]['exam_date']."</td><td>" . $eligi[$e]['exam_place'] . "</td><td>" . $eligi[$e]['rating']. "</td>");
            $pdf -> WriteHTML("</tr>");
        }
        $pdf -> WriteHTML('</table><br>');


         $pdf -> WriteHTML('<table align="auto" border="1"  width="7in">');
        $pdf -> WriteHTML('<tr><th colspan="4" height=".5in">Talent/Skills</th></tr>');
        for($b = 0; $b <= count($skills); $b++)
        {
            $pdf -> WriteHTML("<tr>");
            $pdf -> WriteHTML("<td>".$skills[$b]['skill_name']."</td>");
            $pdf -> WriteHTML("</tr>");
        }
        $pdf -> WriteHTML('</table><br><br>');


        $pdf -> WriteHTML('<table align="auto" border="1"  width="7in">');
        $pdf -> WriteHTML('<tr><th colspan="4" height=".5in">Work Experience</th></tr>');
        $pdf -> WriteHTML('<tr><th>Company</th><th>Position</th><th>Inclusive Dates</th></tr>');
        for($c = 0; $c < count($work); $c++)
        {
            $pdf -> WriteHTML("<tr>");
            $pdf -> WriteHTML("<td>".$work[$c]['company']."</td><td>".$work[$c]['position']."</td><td>".$work[$c]['StartMonthName'].', '.$work[$c]['StartDay'].', '.$work[$c]['StartYear']."</td>");
            $pdf -> WriteHTML("</tr>");
        }
        $pdf -> WriteHTML('</table><br>');

        $pdf -> WriteHTML('<table align="auto" border="1"  width="7in">');
        $pdf -> WriteHTML('<tr><th colspan="4" height=".4in" align="left">Date Employed in UIC</th></tr>');
     
                    $pdf -> WriteHTML("<tr><th align='left'>Trainee</th><td>".$info['HMonthName'].", " . $info['HDay'] . " " . $info['HYear'] . "</td>");
                    $pdf -> WriteHTML("<th align='left'>Regular</th><td>".$info['RMonthName'].", " . $info['RDay'] . " " . $info['RYear'] ."</td></tr>");

                    
        
        $pdf -> WriteHTML('</table><br>');
           
        $pdf -> WriteHTML('<table align="auto" border="1"  width="7in">');
        $pdf -> WriteHTML('<tr><th colspan="4" height=".5in"></th></tr>');
       $pdf -> WriteHTML('<tr><th>Name Of Children</th><th>Date of Birth</th></tr>');
        for($d = 0; $d < count($child); $d++)
        {
            $pdf -> WriteHTML("<tr>");
            $pdf -> WriteHTML("<td>".$child[$d]['name']."</td><td>".$child[$d]['MonthName'].', '.$child[$d]['Day'].', '.$child[$d]['Year']."</td>");
            $pdf -> WriteHTML("</tr>");
        }
        $pdf -> WriteHTML('</table><br>');


        
        $pdf -> WriteHTML('<table align="auto" border="1"  width="7in">');
        $pdf -> WriteHTML('<tr><th colspan="4" height=".5in">Spouse</th></tr>');
        
                  $pdf -> WriteHTML("<tr><th align='left'>Name of Spouse(husband/Wife)</th><td>".$spouse['lastname'].", " . $spouse['firstname'] . " " . $spouse['middlename'] . "</td></tr>");
                  $pdf -> WriteHTML("<tr><th align='left'>Date Of Birth</th><td>".$spouse['MonthName'].', '.$spouse['Day'].', '.$spouse['Year']."</td>");
                  $pdf -> WriteHTML("<tr><th align='left'>Place of Birth</th><td>".$spouse['birth_place']."</td></tr>");
                  $pdf -> WriteHTML("<tr><th align='left'>Contact #</th><td>".$spouse['contact_no']."</td></tr>");
                  $pdf -> WriteHTML("<tr><th align='left'>Educational Attainment(highest Degree)</th><td>".$spouse['educational_attainment']."</td></tr>");
                  $pdf -> WriteHTML("<tr><th align='left'>Present Occupation</th><td>".$spouse['occupation']."</td></tr>");
                  $pdf -> WriteHTML("<tr><th align='left'>Employeer/Address</th><td>".$spouse['employer']."</td></tr>");
                  $pdf -> WriteHTML("<tr><th align='left'>SSS#</th><td>".$spouse['SSS']."</td></tr>");
                  $pdf -> WriteHTML("<tr><th align='left'>Pag-ibig</th><td>".$spouse['pag_ibig']."</td></tr>");
                  $pdf -> WriteHTML("<tr><th align='left'>PhilHealth</th><td>".$spouse['philhealth']."</td></tr>");
                  $pdf -> WriteHTML("<tr><th align='left'>TIN</th><td>".$spouse['TIN']."</td></tr>");
                    
                  $pdf -> WriteHTML('</table><br>');

        $pdf -> WriteHTML('</table><br>');
        $pdf -> Output('201files_reports.pdf', 'D');


    }


public function promotion_reports()
    {
        date_default_timezone_set('Asia/Taipei');
        define('FPDF_FONTPATH', APPPATH . 'plugins/font/');
        require(APPPATH . 'plugins/html2fpdf.php');
        $pdf = new HTML2FPDF('p','mm','A4');
        $pdf -> AddPage();
        $pdf -> setDisplayMode ('fullpage');
        $info = array();
        $info = $this->hr->display_rankPoints($info);
        $pdf -> WriteHTML('<tr><th>PROMOTIONS</th></tr>');
        $pdf -> WriteHTML('<table align="auto" border="1" width="7in">');
        $pdf -> WriteHTML('<tr><th>LastName</th><th>FirstName</th><th>MiddleName</th></th><th>rank_description</th><th>Date of Ranked</th></tr>');
        for($x=0;$x<=count($info);$x++)
            {
                    $pdf -> WriteHTML('<tr>');
                    $pdf -> WriteHTML("<td>".$info[$x]['lastname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['firstname']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['middlename']."</td>");
                    $pdf -> WriteHTML("<td>".$info[$x]['rank_desc']."</td>");
                     $pdf -> WriteHTML("<td>".$info[$x]['MonthName'].', '.$info[$x]['Day'].', '.$info[$x]['Year']."</td>");
                  $pdf -> WriteHTML('</tr>');
              
               }
            
    
        $pdf -> WriteHTML('</table>');

        $pdf -> Output('Promotions_reports.pdf', 'D');


    }
}
?>
