<?php //echo base_url; die; ?>

<a href="products/view_cart"><button>View Cart</button></a> <br><br>

<form method="post" action="products/add_to_cart">
	<input type="hidden" name="id" value="sku_123ABC">
	<input type="hidden" name="name" value="T-Shirt">
	<input type="hidden" name="qty" value="1">
	<input type="hidden" name="price" value="40">
	<input type="hidden" name="Size" value="L">
	<input type="hidden" name="color" value="Red">
	Rs. 40 <br>
	<input type="Submit" value="Buy Now">
</form>

<form method="post" action="products/add_to_cart">
	<input type="hidden" name="id" value="sku_567ZYX">
	<input type="hidden" name="name" value="Coffee Mug">
	<input type="hidden" name="qty" value="1">
	<input type="hidden" name="price" value="10">
	Rs. 10 <br>
	<input type="Submit" value="Buy Now">
</form>

<form method="post" action="products/add_to_cart">
	<input type="hidden" name="id" value="sku_965QRS">
	<input type="hidden" name="name" value="Shot Glass">
	<input type="hidden" name="qty" value="1">
	<input type="hidden" name="price" value="30">
	Rs. 30 <br>
	<input type="Submit" value="Buy Now">
</form>

