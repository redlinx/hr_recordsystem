<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ranking Chairman</title>
<style>
table, td, th
{
border:1px solid HotPink;
}
#header
{
background-color: MediumBlue;
color:white;
}
th
{
background-color: MediumBlue;
color:white;
}
#buttons
{
    background-color: MediumBlue;
    color:white;
    padding: 4px;
    width: 115px;
    border-radius: 6px;
}
#username, #pass
{
    background-color: white;
    color:black;
    width: 150px;
    border-radius: 6px;

}

#list
{
    text-align: center;
}
#container
{
    margin: auto;
}
</style>
</head>
<body>
<table width="600" border="0" align="center">
	<tr>
		<td id="header">
			<h2>Records Management System</h2>
			<h4>Ranking Chairman | University of the Immaculate Conception</h4>
		</td>
	</tr>
	
</table>
  

     <table width="600" border="0" align="center">

       
		
		<?php
		$LA = array(
				''  					=> 'Program:',
				//'LA' 					=> 'Liberal Arts',
				'ABA' 					=> 'Accountancy and Business Administration',
				'Engineering'			=> 'Engineering',
				'Education'				=> 'Education',
				'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				'Music'					=> 'Music',
				'ITE'					=> 'Information Technology Education',
				'MLS'					=> 'Medical Laboratory Science',
				'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				'Nursing'				=> 'Nursing',
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Dean of Liberal Arts Program:</td>
			<td><?php echo form_dropdown('LA', $LA); ?></td>
		</tr>
		<?php
		$ABA = array(
				''  					=> 'Program:',
				'LA' 					=> 'Liberal Arts',
				//'ABA' 					=> 'Accountancy and Business Administration',
				'Engineering'			=> 'Engineering',
				'Education'				=> 'Education',
				'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				'Music'					=> 'Music',
				'ITE'					=> 'Information Technology Education',
				'MLS'					=> 'Medical Laboratory Science',
				'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				'Nursing'				=> 'Nursing',
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Dean of Accountancy and Business Administration Program:</td>
			<td><?php echo form_dropdown('ABA', $ABA); ?></td>
		</tr>
		<?php
		$engr = array(
				''  					=> 'Program:',
				'LA' 					=> 'Liberal Arts',
				'ABA' 					=> 'Accountancy and Business Administration',
				//'Engineering'			=> 'Engineering',
				'Education'				=> 'Education',
				'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				'Music'					=> 'Music',
				'ITE'					=> 'Information Technology Education',
				'MLS'					=> 'Medical Laboratory Science',
				'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				'Nursing'				=> 'Nursing',
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Dean of Engineering Program:</td>
			<td><?php echo form_dropdown('engr', $engr); ?></td>
		</tr>
		<?php
		$edu = array(
				''  					=> 'Program:',
				'LA' 					=> 'Liberal Arts',
				'ABA' 					=> 'Accountancy and Business Administration',
				'Engineering'			=> 'Engineering',
				//'Education'				=> 'Education',
				'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				'Music'					=> 'Music',
				'ITE'					=> 'Information Technology Education',
				'MLS'					=> 'Medical Laboratory Science',
				'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				'Nursing'				=> 'Nursing',
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Dean of Education Program:</td>
			<td><?php echo form_dropdown('edu', $edu); ?></td>
		</tr>
		<?php
		$hrm = array(
				''  					=> 'Program:',
				'LA' 					=> 'Liberal Arts',
				'ABA' 					=> 'Accountancy and Business Administration',
				'Engineering'			=> 'Engineering',
				'Education'				=> 'Education',
				//'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				'Music'					=> 'Music',
				'ITE'					=> 'Information Technology Education',
				'MLS'					=> 'Medical Laboratory Science',
				'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				'Nursing'				=> 'Nursing',
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Dean of Nutritionist and Dietetics/Hotel Restaurant Management Program:</td>
			<td><?php echo form_dropdown('hrm', $hrm); ?></td>
		</tr>
		<?php
		$music = array(
				''  					=> 'Program:',
				'LA' 					=> 'Liberal Arts',
				'ABA' 					=> 'Accountancy and Business Administration',
				'Engineering'			=> 'Engineering',
				'Education'				=> 'Education',
				'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				//'Music'					=> 'Music',
				'ITE'					=> 'Information Technology Education',
				'MLS'					=> 'Medical Laboratory Science',
				'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				'Nursing'				=> 'Nursing',
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Dean of Music Program:</td>
			<td><?php echo form_dropdown('music', $music); ?></td>
		</tr>
		<?php
		$ITE = array(
				''  					=> 'Program:',
				'LA' 					=> 'Liberal Arts',
				'ABA' 					=> 'Accountancy and Business Administration',
				'Engineering'			=> 'Engineering',
				'Education'				=> 'Education',
				'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				'Music'					=> 'Music',
				//'ITE'					=> 'Information Technology Education',
				'MLS'					=> 'Medical Laboratory Science',
				'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				'Nursing'				=> 'Nursing',
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Dean of Information Technology Education Program:</td>
			<td><?php echo form_dropdown('ITE', $ITE); ?></td>
		</tr>
		<?php
		$MLS = array(
				''  					=> 'Program:',
				'LA' 					=> 'Liberal Arts',
				'ABA' 					=> 'Accountancy and Business Administration',
				'Engineering'			=> 'Engineering',
				'Education'				=> 'Education',
				'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				'Music'					=> 'Music',
				'ITE'					=> 'Information Technology Education',
				//'MLS'					=> 'Medical Laboratory Science',
				'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				'Nursing'				=> 'Nursing',
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Dean of Medical Laboratory and Sciences Program:</td>
			<td><?php echo form_dropdown('MLS', $MLS); ?></td>
		</tr>
		<?php
		$PC = array(
				''  					=> 'Program:',
				'LA' 					=> 'Liberal Arts',
				'ABA' 					=> 'Accountancy and Business Administration',
				'Engineering'			=> 'Engineering',
				'Education'				=> 'Education',
				'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				'Music'					=> 'Music',
				'ITE'					=> 'Information Technology Education',
				'MLS'					=> 'Medical Laboratory Science',
				//'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				'Nursing'				=> 'Nursing',
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Dean of Pharmacy/Chemistry Program:</td>
			<td><?php echo form_dropdown('PC', $PC); ?></td>
		</tr>
		<?php
		$nursing = array(
				''  					=> 'Program:',
				'LA' 					=> 'Liberal Arts',
				'ABA' 					=> 'Accountancy and Business Administration',
				'Engineering'			=> 'Engineering',
				'Education'				=> 'Education',
				'ND/HRM'				=> 'Nutrition and Dietetics/ Hotel and Restaurant Management',
				'Music'					=> 'Music',
				'ITE'					=> 'Information Technology Education',
				'MLS'					=> 'Medical Laboratory Science',
				'Pharma/Chem'			=> 'Pharmacy/Chemistry',
				//'Nursing'				=> 'Nursing',
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Dean of Nursing Program:</td>
			<td><?php echo form_dropdown('nursing', $nursing); ?></td>
		</tr>
		
		
		
			
		<tr>
			<td align="right" bgcolor="#FFFFFF">&nbsp;</td>
			<td>
				<?php echo form_submit('submit', 'Submit');?>
				<?php echo form_reset('reset', 'Clear');?>
		</tr>
	
    </table>
    <?php echo form_close();
?>
</body>
</html>