<?php include('Main.php');?>
<div class='productinner'>
    <h1 class="producth1"> <b>Add Product </b> </h1>
    
    <form class="product_form" action="" method="post">
        <b>Image </b> <br> <input type="file" id="file" accept="image/*"> 
        <label for="file">
            <i class="material-icons">
                add_photo_alternate
            </i> &nbsp;
            Choose a Photo 
        </label><br><br><br>
        <b> Product Name </b> <br> <input type="text" name="pname" id="pname" placeholder="Enter Product Name"> <br><br>
        <b> Price </b> <br> <input type="text" name="price" id="price" placeholder="Enter Price"> <br> <br>
        <b> Description </b> <br>  <textarea name="description" rows="6" cols="60">  </textarea> <br> <br>
        <b> Category </b> <br> 
        <select name="category" class="category" id="category">
			<option  selected="selected">Select Category</option>
			<option>Sides</option>
			<option>Appetizer</option>
        </select><br> <br>
        <b> Store </b> <br> 
        <select name="store" class="store">
			<option  selected="selected">Select Store</option>
			<option>Store 1</option>
            <option>Store 2</option>
            <option>Store 3</option>
            <option>Store 4</option>
        </select><br> <br> 

        <b> Active </b> <br> 
        <select name="active" class="active" id="active">
			<option  selected="selected">Yes</option>
			<option>No</option>
        </select><br>

        <span><input class="save" type="submit" name="Save" value="Save"></span> <br><br><br>


    </form> 
</div>
<?php include('Adminfooter.php') ?>