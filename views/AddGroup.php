<?php include('Main.php');?>

<div class='groupinner'>
    <h1 class="grouph1"> <b>Add Group </b> </h1>
    
<form class="product_form" action="" method="post">
    <b> Group Name </b> <br> <input type="text" name="gname" id="gname" placeholder="Enter Group Name"> <br><br>
    <b> Description </b> <br>  <textarea name="description" rows="6" cols="51">  </textarea> <br> <br>
    <b> Active </b> <br> 
        <select name="active" class="active" id="active">
			<option  selected="selected">Yes</option>
			<option>No</option>
        </select><br>

    <span><input id="save1" type="submit" name="Save" value="Save"></span> <br><br><br>
</form>
</div>
<?php include('Adminfooter.php') ?>
