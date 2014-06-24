<?php include "partials/header.php"; ?>
<div class="row cart-nav">
	<ul class="nav nav-tabs nav-justified">
		<li class="active">
			<a href="#cart-details" data-toggle="pill"><span class="fa fa-shopping-cart"></span> My Cart</a>
		</li>
		
		<li>
			<a href="#login" data-toggle="pill"><span class="fa fa-user"></span> Login</a>
		</li>
		
		<li>
			<a href="#cart-shipping" data-toggle="pill"><span class="fa fa-home"></span> Shipping</a>
		</li>
		
		<li>
			<a href="#cart-billing" data-toggle="pill"><span class="fa fa-home"></span> Billing</a>
		</li>
		
		<li>
			<a href="#cart-payment" data-toggle="pill"><span class="fa fa-credit-card"></span> Payment Info</a>
		</li>
		
		<li>
			<a href="#cart-review" data-toggle="pill"><span class="fa fa-money"></span> Review</a>
		</li>
	</ul>
</div>

<div class="row cart-products">
	<table class="table table-striped table-hover" role="table">
		<thead>
			<tr>
				<th>Detail</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<div class="media">
						<a href="#" class="pull-left">
							<img src="http://placehold.it/64x64" class="media-object">
						</a>
						<div class="media-body">
							<h5 class="media-heading">Mega Flora</h5>
							Foods that heal; natural cures that work better than drugs; new breakthroughs in holistic medicine
						</div>
					</div>
				</td>
				<td class="price">$56.73</td>
				<td>				
					<input type="number" class="input-xs" value="1">
				</td>
				<td class="total">$56.73</td>
			</tr>
			<tr>
				<td>
					<div class="media">
						<a href="#" class="pull-left">
							<img src="http://placehold.it/64x64" class="media-object">
						</a>
						<div class="media-body">
							<h5 class="media-heading">Mega Flora</h5>
							Foods that heal; natural cures that work better than drugs; new breakthroughs in holistic medicine
						</div>
					</div>
				</td>
				<td class="price">$56.73</td>
				<td>
					
					<input type="number" class="input-xs" value="1">
				</td>
				<td class="total">$56.73</td>
			</tr>
			<tr>
				<td>
					<div class="media">
						<a href="#" class="pull-left">
							<img src="http://placehold.it/64x64" class="media-object">
						</a>
						<div class="media-body">
							<h5 class="media-heading">Mega Flora</h5>
							Foods that heal; natural cures that work better than drugs; new breakthroughs in holistic medicine
						</div>
					</div>
				</td>
				<td class="price">$56.73</td>
				<td>
					
					<input type="number" class="input-xs" value="1">
				</td>
				<td class="total">$56.73</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td>Total</td>
				<td></td>
				<td></td>
				<td>$329.00</td>
			</tr>
		</tfoot>
	</table>
</div>
<div class="row promo-code">
	<div class="col-lg-6 col-lg-offset-6 text-right">
		<form class="form form-inline" role="form">
			<div class="form-group">
				<label>Promo Code</label>
				<div class="input-group">
					<input type="text" class="form-control input-lg" name="promo_code">
				</div>
				<button class="btn btn-primary btn-lg" type="button">Apply</button>
			</div>
		</form>
	</div>
</div>
					
<div class="row actions cart-actions text-right">
		<button class="btn btn-default btn-lg" type="button">Continue Shopping</button>
		<button class="btn btn-default btn-lg" type="button">Update Cart</button>
		<button class="btn btn-danger btn-lg" type="button"><span class="fa fa-shopping-cart"></span> Checkout</button>
</div>


<?php include "partials/footer.php"; ?>