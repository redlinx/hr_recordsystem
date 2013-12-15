<html>
    <title> Upload Faculty Credentials </title>
<body bgcolor="pink">
    <p></p><center><b>University of the Immaculate Conception
    <br/>Fr. Selga Street, Davao City
    <br/><br/> FACULTY'S INFORMATION SHEET</b></center></p>
        <form>
    <fieldset style="width: 500px;">
		<legend><b>Uploading Faculty Credentials:</b></legend>
<?php //echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>
1.<input type="file" name="userfile" size="20" />
<br/>
2. <?php
		$category = array(
				''  					=> 'Choose Options:',
				'EQ' 					=> 'Educational Qualification',
				'CES' 					=> 'Community Extension Services (within or outside UIC',
				'TPS'			=> 'Training Programs, Seminars, ETC.',
				'IPO'				=> 'Involvement in Professional Organizations'
				
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Categories:</td>
			<td><?php echo form_dropdown('category', $category); ?></td>
		</tr>
		
<br />
3. <?php
		$choose = array(
				''  					=> 'Choose Options:',
				'EQ' 					=> 'Educational Qualification',
				'CES' 					=> 'Community Extension Services (within or outside UIC',
				'TPS'			=> 'Training Programs, Seminars, ETC.',
				'IPO'				=> 'Involvement in Professional Organizations'
				
				//'value' => $this->form_validation->set_value('program'),
			);
		?>
			
			
			
		<tr>
			<td align="left" bgcolor="#FFFFFF">Set:</td>
			<td><?php echo form_dropdown('set', $choose); ?></td>
		</tr>
		
<br/>
4. Remarks <textarea rows="4" cols="50">
</textarea>
<br/>
<input type="submit" value="upload" />

</form>

</body>
</html>