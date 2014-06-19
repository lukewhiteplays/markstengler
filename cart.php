<?php include "partials/header.php"; ?>
<div class="row cart-nav">
	<ul class="nav nav-tabs nav-justified">
		<li class="active">
			<a href="#cart-details" data-toggle="pill"><span class="fa fa-shopping-cart"></span> Shopping Details</a>
		</li>
		
		<li>
			<a href="#cart-shipping" data-toggle="pill"><span class="fa fa-home"></span> Shipping Address</a>
		</li>
		
		<li>
			<a href="#cart-billing" data-toggle="pill"><span class="fa fa-home"></span> Billing Address</a>
		</li>
		
		<li>
			<a href="#cart-payment" data-toggle="pill"><span class="fa fa-credit-card"></span> Payment </a>
		</li>
		
		<li>
			<a href="#cart-review" data-toggle="pill"><span class="fa fa-money"></span> Review</a>
		</li>
	</ul>
</div>
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
				<button class="btn btn-danger btn-xs"><span class="fa fa-angle-left"></span></button>
				<input type="text" class="input-xs" style="width:25px;">
				<button class="btn btn-danger btn-xs"><span class="fa fa-angle-right"></span></button>
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
				<button class="btn btn-danger btn-xs"><span class="fa fa-angle-left"></span></button>
				<input type="text" class="input-xs" style="width:25px;">
				<button class="btn btn-danger btn-xs"><span class="fa fa-angle-right"></span></button>
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
				<button class="btn btn-danger btn-xs"><span class="fa fa-angle-left"></span></button>
				<input type="text" class="input-xs" style="width:25px;">
				<button class="btn btn-danger btn-xs"><span class="fa fa-angle-right"></span></button>
			</td>
			<td class="total">$56.73</td>
		</tr>
	</tbody>
</table>
			

<div class="cart-pagination">
	<ul class="pager cart-pager">
	  <li class="previous"><a href="#">Previous</a></li>
	  <li class="next"><a href="#">Next <span class="fa fa-angle-double-right"></span></a></li>
	</ul>
</div>





<?php include "partials/footer.php"; ?>