 <html>
    <title> 201 File </title>
<body bgcolor="pink">
    <p></p><center><b>University of the Immaculate Conception
    <br/>Fr. Selga Street, Davao City
    <br/><br/> FACULTY'S INFORMATION SHEET</b></center></p>
    <br/>
<center>

<form>
	    <fieldset style="width: 520px;">
	    <legend><b>Information about Spouse(Husband/Wife):</b></legend>
	    Family Name:<input type="text" name="Lname"><br/>
	    First Name:<input type="text" name="Fname"><br/>
	    Middle Name:<input type="text" name="Mname"><br/>
	    Date of Birth:<input type="text" name="DOB"><br/>
	    Place of Brith:<input type="text" name="POB"><br/>
	    Contact #:<input type="text" name="contact"><br/>
	    Educational Attainment(highest Degree):<input type="text" name="EA"><br/>
	    Present Occupation:<input type="text" name="PO"><br/>
	    Employer/Address:<input type="text" name="EmA"><br/>
	    SSS#:<input type="text" name="SSS"><br/>
	    Pag-ibig:<input type="text" name="Pag-ibig"><br/>
	    Philhealth#:<input type="text" name="PH"><br/>
	    TIN:<input type="text" name="TIN"><br/>
	  

        <tr>
            <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
            <td>
                <?php echo form_submit('submit', 'Update');?>
        </tr>
            </fieldset>
        </form>
        <input type="button" name="b1" value="back" onclick="location.href='fifthpage'">
     <input type="button" name="b2" value="home" onclick="location.href='home_controller'">
