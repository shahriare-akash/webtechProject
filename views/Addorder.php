<?php include_once('Main.php');?>
<div >
	<h1 class="orderh1"> <b>Add Order </b>  </h1>
	<form class="add_form" action="" method="post">
	<table>
	<br>
		<tr> 
			<b>Table <?php echo " "; ?></b> 
				<select id="Group">
					<option  selected="selected">Select Table</option>
					<option>Table 1</option>
					<option>Table 2</option>
				</select><br> <br>
		</tr>
			  
		<tr> 
            <td><b>Product </b><?php echo "<br>" ?></td>
			<td id="qty"><b>	Qty</b><?php echo "<br>" ?></td>
			<td id="Rate"><b>	Rate</b><?php echo "<br>" ?></td>
			<td id="Amount"><b>	Amount</b> <?php echo "<br>" ?></td>
            <td ><i class="far fa-plus-square"></i> <?php echo "<br>" ?></td>
        </tr>
			

				<tr> 
				      <td>    <select  id="Store">
			          <option  selected="selected">Select Product</option>
				 <option>Pizza</option>
				 <option>Burger</option>
					  </select></td> 
			
			      <td> <input type="text" name="Qty" id="Qty">  </td>
				  <td> <input type="text" name="rate" id="rate">  </td>	
				  <td> <input type="text" name="Amount" id="amount"></td>
				  <td> 	
					<i class="fas fa-times-circle"></i> <?php echo "<br>" ?>
                     
					</td>
				
		</tr>


				<tr>
					
					<td>
				  </td>
				  

				  <td class="addGross">
					<span>  <b class="gamount">Gross Amount</b> </span>
				  </td>

				  <td>
				  <td> <input type="text" name="Gamount" id="Gamount">  </td>
                  </td>
			 </tr>
			
			 <tr>
					<td>



					
				  </td>
				  

				  <td class="add"> 
					  <b>Vat 13%</b> 
				  </td>

				  <td>
				  <td> <input type="text" name="vat" id="vat">  </td>
                  </td>
			 </tr>
			 <tr>
					<td>
				  </td>
				  

				  <td class="add">
					  <b>Discount</b> 
				  </td>

				  <td>
				  <td> <input type="text" name="discount" id="discount">  </td>
                  </td>
			 </tr>
			 <tr>
					<td>
				  </td>
				  

				  <td class="add">
					  <b>Net Amount</b> 
				  </td>

				  <td>
				  <td> <input type="text" name="Netamount" id="Namount">  </td>
                  </td>
             </tr>
</table>
<span><input id="save2" type="submit" name="Save" value="Save"></span> <br> <br> <br>
				
</form>


</div>
<?php include_once('Adminfooter.php') ?>































