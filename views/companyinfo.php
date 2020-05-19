<?php include_once('Main.php');
    include_once '../controllers/companyinfoController.php';
    $cinfos=getComInfo();
    $cId="";
    $name="";
    $amount="";
    $vat="";
    $address="";
    $number="";
    $country="";
    $currency="";
    $message="";
    foreach($cinfos as $cinfo)
    {   
        $cId=$cinfo["cId"];
        $name=$cinfo["cName"];
        $amount=$cinfo["chargeAmount"];
        $vat=$cinfo["vatCharge"];
        $address=$cinfo["cAddress"];
        $number=$cinfo["cphoneNo"];
        $country=$cinfo["country"];
        $currency=$cinfo["currency"];
        $message=$cinfo["message"];
    }
    
?>

<script>
    function valid()
    {
        cname=document.getElementById("cname").value;
        crgamount=document.getElementById("amountId").value;
        vatCrg=document.getElementById("vatId").value;
        address=document.getElementById("address").value;
        num=document.getElementById("phnNumber").value;
        cun=document.getElementById("country").value;
        

        var valid=true;

        if(cname=="")
        {
            document.getElementById("err_cname").innerHTML="*Invalid Company Name!";
            valid=false;
        }

        else if(!isNaN(cname))
        {
            document.getElementById("err_cname").innerHTML="*Invalid Company Name!";
            valid=false;
        }

        else
        {
            document.getElementById("err_cname").innerHTML="";
        }

        if(isNaN(crgamount))
        {
            document.getElementById("err_amount").innerHTML="Only Number contains!";
            valid=false;
        }

        else if(crgamount=="")
        {
            document.getElementById("err_amount").innerHTML="*Invalid Amount!";
            valid=false;
        }

        else
        {
            document.getElementById("err_amount").innerHTML="";
        }

        if(isNaN(vatCrg))
        {
            document.getElementById("err_vat").innerHTML="*Only Number contains!";
            valid=false;
        }
        else if(vatCrg=="")
        {
            document.getElementById("err_vat").innerHTML="*Invalid Amount!";
            valid=false;
        }
        else
        {
            document.getElementById("err_vat").innerHTML="";
        }

        if(isNaN(num))
        {
            document.getElementById("err_num").innerHTML="*Only Number contains!";
            valid=false;
        }
        else if(num=="")
        {
            document.getElementById("err_num").innerHTML="*Invalid Number!";
            valid=false;
        }

        else
        {
            document.getElementById("err_num").innerHTML="";
        }

        if(cun=="")
        {
            document.getElementById("err_cun").innerHTML="*Invalid Country";
            valid=false;
        }

        else if(!isNaN(cun))
        {
            document.getElementById("err_cun").innerHTML="*Invalid Country";
            valid=false;
        }
        else
        {
            document.getElementById("err_cun").innerHTML="";
        }
        

        return valid;
    }
</script>
    
<div class="companyinfo">
    <h1 class="companyh1"> Company Information</h1>
<div>

<form onsubmit="return valid()" action="../controllers/companyinfoController.php" method="post">
    <input type="hidden" name="id" value= "<?php echo $cId;?>">
    Company Name <br> <input class="form form-control" type="text" name="cname" id="cname" value="<?php echo "$name"; ?>"> <br><span class="text-danger font-weight-bold" id="err_cname"></span> <br> 
	<b>Charge Amount (%)</b> <br> 
    <input class="form form-control" type="text" name="amount" id="amountId" value="<?php echo $amount;?>"> <br> 
    <span class="text-danger font-weight-bold" id="err_amount"></span><br>
    
    <b>Vat Charge (%)</b> <br> 
    <input class="form form-control" type="text" name="vat" id="vatId" value="<?php echo $vat; ?>" > <br> 
    <span class="text-danger font-weight-bold" id="err_vat"></span><br>
	
    <b>Address </b><br><input class="form form-control" type="text" name="address" id="address" value="<?php echo $address; ?>"> <br> 
    <span class="text-danger font-weight-bold" id="err_add"></span> <br>
	
    <b>Phone No </b><br> <input class="form form-control" type="text" name="phnNumber" id="phnNumber" value="<?php echo $number; ?>"> <br> 
    <span class="text-danger font-weight-bold" id="err_num"></span><br>
    
    <b>Country</b><br> <input class="form form-control"  type="text" name="country" id="country" value="<?php echo $country; ?>"> <br> 
    <span class="text-danger font-weight-bold" id="err_cun"></span><br>
    <b> Currency </b> <br>
    <select  class="form form-control" class="currency" name="currency" id="currency"  > <br> <br>
        <option  selected> <?php echo $currency; ?></option>
		<option>USD</option>
        <option>Pound</option>
        <option>Can. Dollar</option>
    </select>
    <br><span class="text-danger font-weight-bold" id="err_curr"></span><br>
          
    <b>Message</b>   <br>  <textarea class="form form-control" name="message" rows="6" cols="64"> <?php echo $message; ?> </textarea> <br>
    
    <div align="center"><span><input class="btn btn-primary" type="submit" name="save" value="Save"></span></div><br><br> <br>
			
</form>
</div>




</div>


<?php include_once('Adminfooter.php') ?>