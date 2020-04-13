<?php include('Main.php');?>
    
<div class="companyinfo">
    <h1 class="companyh1"> Company Information</h1>
<div>

<form  action="" method="post">
    Company Name <br> <input type="text" name="fname"> <br> 
	Charge Amount (%)<br> <input  type="text" name="email"> <br> 
    Vat Charge (%) <br> <input  type="text" name="fname"> <br> 
	Address <br><input  type="text" name="lname"> <br> 
	Phone No <br> <input  type="text" name="pnumber"> <br>
    Country<br> <input  type="text" name="pnumber"> <br>
    <select  class="currency"><br>
        <option  selected="selected">Select Currency</option>
		<option>USD</option>
        <option>TK</option>
        <option></option>
        <option></option>
    </select>
    <br><br>
          
    Message   <br>  <textarea name="message" rows="6" cols="64">  </textarea> <br>
    <span><input class="save" type="submit" name="Save" value="Save"></span><br><br> <br>
			
</form>
</div>




</div>


<?php include('Adminfooter.php') ?>