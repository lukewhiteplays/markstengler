<?php include "partials/header.php"; ?>
<div class="row cart-nav">
	<ul class="nav nav-tabs nav-justified">
		<li class="active">
			<a href="#cart-details" data-toggle="tab"><span class="fa fa-shopping-cart"></span> My Cart</a>
		</li>
		
		<li>
			<a href="#cart-login" data-toggle="tab"><span class="fa fa-user"></span> Login</a>
		</li>
		
		<li>
			<a href="#cart-shipping" data-toggle="tab"><span class="fa fa-home"></span> Shipping</a>
		</li>
		
		<li>
			<a href="#cart-billing" data-toggle="tab"><span class="fa fa-home"></span> Billing</a>
		</li>
		
		<li>
			<a href="#cart-payment" data-toggle="tab"><span class="fa fa-credit-card"></span> Payment Info</a>
		</li>
		
		<li>
			<a href="#cart-review" data-toggle="tab"><span class="fa fa-money"></span> Review</a>
		</li>
	</ul>
</div>
<div class="tab-content">
	<div class="row tab-pane active cart-details" id="cart-details">
		<table class="table table-striped table-hover cart-products" role="table">
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
					<td class="detail">
						<div class="media">
							<a href="#" class="pull-left">
								<img src="http://placehold.it/64x64" class="media-object">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Mega Flora</h4>
								Foods that heal; natural cures that work better than drugs; new breakthroughs in holistic medicine
							</div>
						</div>
					</td>
					<td class="price">$56.73</td>
					<td class="quantity">				
						<input type="number" class="input-xs" value="1">
						<i class="fa fa-trash-o fa-lg"></i>
					</td>
					<td class="total">$56.73</td>
				</tr>
				<tr>
					<td class="detail">
						<div class="media">
							<a href="#" class="pull-left">
								<img src="http://placehold.it/64x64" class="media-object">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Mega Flora</h4>
								Foods that heal; natural cures that work better than drugs; new breakthroughs in holistic medicine
							</div>
						</div>
					</td>
					<td class="price">$56.73</td>
					<td class="quantity">					
						<input type="number" class="input-xs" value="1">
						<i class="fa fa-trash-o fa-lg"></i>
					</td>
					<td class="total">$56.73</td>
				</tr>
				<tr>
					<td class="detail">
						<div class="media">
							<a href="#" class="pull-left">
								<img src="http://placehold.it/64x64" class="media-object">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Mega Flora</h4>
								Foods that heal; natural cures that work better than drugs; new breakthroughs in holistic medicine
							</div>
						</div>
					</td>
					<td class="price">$56.73</td>
					<td class="quantity">
						<input type="number" class="input-xs" value="1">
						<i class="fa fa-trash-o fa-lg"></i>
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
		
		<div class="col-lg-12 promo-code">
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
							
		<div class="col-lg-12 actions cart-actions text-right">
			<button class="btn btn-default btn-lg" type="button">Continue Shopping</button>
			<button class="btn btn-default btn-lg" type="button">Update Cart</button>
			<button class="btn btn-danger btn-lg" type="button"><span class="fa fa-shopping-cart"></span> Checkout</button>
		</div>
	</div><!-- ./tab-pane ./cart-cart -->
	
	<div class="row tab-pane cart-login" id="cart-login">
		<div class="col-lg-5 col-lg-offset-1">
			<h3>Returning Customers</h3>
			<p class="lead">If you have an account with us, log in using your username.</p>
			<form class="form form-login" role="form">
				<div class="form-group">
					<label>Username</label>
						<input type="text"
							name="username"
							autocomplete="off"
							spellcheck="false"
							autofocus="yes"
							class="form-control input-lg"
							placeholder="Your Username">
					
				</div>
				
				<div class="form-group">
					<label>Password</label>
						<input type="password"
							name="password"
							autocomplete="off"
							class="form-control input-lg"
							placeholder="Your Password">
				</div>
				
				<div class="form-group form-group-actions text-right">
					<button class="btn btn-danger btn-lg" type="button">Login</button>
				</div>
			</form>
		</div>
		
		<div class="col-lg-5 col-form-register">
			<h3>New Customers</h3>
			<form class="form form-register" role="form">
				<div class="form-group">
					<label>Email</label>
					<input type="email"
						name="email"
						class="form-control input-lg"
						autocomplete="off"
						spellcheck="false"
						placeholder="Email Address">
				</div>
				
				<div class="form-group">
					<label>Location</label>
					<input type="text"
						name="text"
						class="form-control input-lg"
						autocomplete="off"
						spellcheck="false"
						placeholder="Anytown, USA">
				</div>
				
				<div class="form-group">
					<label>Date of Birth</label>
					<input type="date"
						name="date_of_birth"
						class="form-control input-lg"
						autocomplete="off"
						spellcheck="false"
						placeholder="">
				</div>

				<div class="form-group form-group-actions text-right">
					<button class="btn btn-danger btn-lg" type="button">Register</button>
				</div>
			</form>
		</div>
		
	</div><!-- ./tab-pane ./cart-login -->
	
	<div class="row tab-pane cart-shipping" id="cart-shipping">
		<form class="form" role="form">
			<div class="col-lg-6">
				<div class="form-group">
					<label>Full Name</label>
						<input type="text"
							autofocus="yes"
							name="shipping_name"
							class="form-control input-lg"
						>
				</div>
				<div class="form-group">
					<label>Address</label>
						<input type="text"
							name="shipping_address"
							class="form-control input-lg address"
						>
				</div>
				<div class="form-group">
					<label>Apartment or Suite</label>
						<input type="text"
							name="shipping_address_two"
							class="form-control input-lg address"
						>
				</div>
				<div class="form-group">
					<label>Phone</label>
						<input type="text"
							name="shipping_phone"
							class="form-control input-lg phone"
						>
				</div>
				<div class="form-group form-group-actions">
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-large dropdown-toggle" data-toggle="dropdown">
							<span class="fa fa-home"></span> Saved Addresses <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Home</a></li>
							<li><a href="#">Work</a></li>
							<li><a herf="#">School</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6">
				<div class="form-group">
					<label>Country</label>
						<input type="text"
							name="shipping_country"
							class="form-control input-lg country"
						>
				</div>
				<div class="form-group">
					<label>City</label>
						<input type="text"
							name="shipping_city"
							class="form-control input-lg city"
						>
				</div>
				<div class="form-group form-group-state">
					<label>State</label>
						<input type="text"
							name="shipping_state"
							class="form-control input-lg state typeahead"
						>
				</div>
				<div class="form-group">
					<label>Zip</label>
						<input type="text"
							name="shipping_zip"
							class="form-control input-lg zip"
						>
				</div>
				
				
				<div class="form-group form-group-actions text-right">
					<label><input type="checkbox"> Save this address for future purchases?</label>
					<button class="btn btn-danger btn-lg btn-next" type="submit">Billing <span class="fa fa-long-arrow-right"></span></button>
				</div>
				
			</div>
			
			
		</form>
	</div><!-- ./cart-shipping -->
	
	<div class="row tab-pane cart-billing" id="cart-billing">
		<form class="form" role="form">
			<div class="col-lg-6">
				<div class="form-group">
					<label>Full Name</label>
						<input type="text"
							autofocus="yes"
							name="billing_name"
							class="form-control input-lg"
						>
				</div>
				<div class="form-group">
					<label>Address</label>
						<input type="text"
							name="billing_address"
							class="form-control input-lg address"
						>
				</div>
				<div class="form-group">
					<label>Apartment or Suite</label>
						<input type="text"
							name="billing_address_two"
							class="form-control input-lg address"
						>
				</div>
				<div class="form-group">
					<label>Phone</label>
						<input type="text"
							name="billing_phone"
							class="form-control input-lg phone"
						>
				</div>
				<div class="form-group form-group-actions">
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-large dropdown-toggle" data-toggle="dropdown">
							<span class="fa fa-home"></span> Saved Addresses <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Home</a></li>
							<li><a href="#">Work</a></li>
							<li><a herf="#">School</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6">
				<div class="form-group">
					<label>Country</label>
						<input type="phone"
							name="billing_country"
							class="form-control input-lg country"
						>
				</div>
				
				<div class="form-group">
					<label>City</label>
						<input type="text"
							name="billing_city"
							class="form-control input-lg city"
						>
				</div>
				<div class="form-group">
					<label>State</label>
						<input type="text"
							name="billing_state"
							class="form-control input-lg state"
						>
				</div>
				<div class="form-group">
					<label>Zip</label>
						<input type="text"
							name="billing_zip"
							class="form-control input-lg zip"
						>
				</div>
				
				
				<div class="form-group form-group-actions text-right">
					<button class="btn btn-default btn-lg btn-use-shipping" type="button">Use Shipping Address</button>
					<button class="btn btn-danger btn-lg btn-next" type="submit">Payment <span class="fa fa-long-arrow-right"></span></button>
				</div>
				
			</div>
			
			
		</form>
	</div><!-- ./cart-billing -->
	
	
	<div class="row tab-pane cart-payment" id="cart-payment">
		<div class="col-lg-5 col-md-5 col-lg-offset-1 col-credit-card">
			<h4>
				Payment Details
				<img class="credit-card-icon" src="" />
			</h4>
			<form class="form" role="form">
				<div class="form-group col-lg-12">
					<label>Card Number</label>
					
					<input type="text" 
						class="form-control input-lg credit-card-number"
						name="credit_card_number">
						
				</div>
				
				<div class="form-group col-lg-12">
					<label>Name on Card</label>
					<input type="text" 
						class="form-control input-lg"
						name="credit_card_name">
				</div>
				
				<div class="form-group col-lg-9 col-md-9">
					<label>Expiration</label>
					<div class="input-group">
						<div class="btn-group">
							<button class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown">
								January (01) <span class="caret"></span>
							</button>
						</div>
						
						<div class="btn-group">
							<button class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown">
								2014 <span class="caret"></span>
							</button>
						</div>
					</div>
				</div>
				
				<div class="form-group col-lg-3 col-md-3">
					<label>CCV Code</label>
					<input type="text"
						class="form-control input-lg"
						name="credit_card_ccv">
				</div>
				<div class="col-lg-12">&nbsp;</div>
			</form>
		</div>
		<div class="col-lg-5 col-md-5 col-paypal">
			<img src="/assets/img/paypal.png" class="img-responsive" />
		</div>
		<div class="col-lg-5 col-md-5 col-lg-offset-1 text-center">
			<h4>Pay with Credit Card</h4>
		</div>
		<div class="col-lg-5 col-md-5 text-center">
			<h4>Pay with PayPal</h4>
		</div>
		<div class="col-lg-12 text-right">
			<button class="btn btn-danger btn-next btn-lg">Review <span class="fa fa-long-arrow-right"></span></button>
		</div>
	</div><!-- ./cart-payment -->
	
	<!-- cart-review-->
	<div class="row tab-pane cart-review" id="cart-review">
		<div class="col-lg-3 cart-review-details">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Cart Details</h3>
				</div>
				<div class="panel-body">
					<ul class="media-list">
						<li class="media">
							<a href="#" class="pull-left">
								<img src="http://placehold.it/32x32" class="media-object">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Mega Flora
									<span class="cart-review-detail-price pull-right">$53.20</span>
								</h4>
								
							</div>
						</li>
							
						<li class="media">
							<a href="#" class="pull-left">
								<img src="http://placehold.it/32x32" class="media-object">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Vitamin C
									<span class="cart-review-detail-price pull-right">$16.58</span>
								</h4>
								
							</div>
						</li>
						
						<li class="media">
							<a href="#" class="pull-left">
								<img src="http://placehold.it/32x32" class="media-object">
							</a>
							<div class="media-body">
								<h4 class="media-heading">IV Therapy
									<span class="cart-review-detail-price pull-right">$116.58</span>
								</h4>
								
							</div>
						</li>
						
						<li class="media sub-total">
							<div class="media-body">
								<h4 class="media-heading">Sub Total
									<span class="price pull-right">$182.03</span>
								</h4>	
							</div>
						</li>
						
						<li class="media taxes">
							<div class="media-body">
								<h4 class="media-heading">Taxes
									<span class="price pull-right">$8.24</span>
								</h4>	
							</div>
						</li>
						<li class="media shipping">
							<div class="media-body">
								<h4 class="media-heading">Shipping
									<span class="price pull-right">$32.93</span>
								</h4>	
							</div>
						</li>
					</ul>
				</div>
				<div class="panel-footer">
					<h4 class="total">Total
						<span class="price pull-right">$212.45</span>
					</h4>	
				</div>
			</div><!-- ./panel -->
		</div><!-- ./col-lg-3 -->		
		
		<div class="col-lg-3 cart-review-shipping">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">Shipping Address</h4>
				</div>
				<div class="panel-body">
					<address>
						<strong>Christopher L White</strong><br>
						11613 Moorpark St<br>
						Apt 5<br>
						North Hollywood, CA<br>
						91602<br>
						347-967-6767
					</address>
				</div>
				<div class="panel-footer text-right">
					<button class="btn btn-danger btn-xs"><span class="fa fa-pencil"></span> Edit</button>
					<button class="btn btn-default btn-xs"><span class="fa fa-check"></span> Save</button>
				</div>
			</div>
		</div>	
		
		<div class="col-lg-3 cart-review-billing">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">Billing Address</h4>
				</div>
				<div class="panel-body">
					<address>
						<strong>Christopher L White</strong><br>
						11613 Moorpark St<br>
						Apt 5<br>
						North Hollywood, CA<br>
						91602<br>
						347-967-6767
					</address>
				</div>
				<div class="panel-footer text-right">
					<button class="btn btn-danger btn-xs"><span class="fa fa-pencil"></span> Edit</button>
					<button class="btn btn-default btn-xs"><span class="fa fa-check"></span> Save</button>
				</div>
			</div><!-- ./panel -->
		</div><!-- ./col-lg-3 -->	
		
		<div class="col-lg-3 cart-review-payment">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">Payment Details</h4>
				</div>
				<div class="panel-body">
					<div class="media">
						<a href="#" class="pull-left">
							<img src="/assets/img/icons/visa.png" class="img-responsive">
						</a>
						<div class="media-body">
							Christopher L White
							<br> Card ending in *349
							<br> Expires 04/19
						</div>
					</div>
				</div>
				<div class="panel-footer text-right">
					<button class="btn btn-danger btn-xs"><span class="fa fa-pencil"></span> Edit</button>
					<button class="btn btn-default btn-xs"><span class="fa fa-check"></span> Save</button>
				</div>
			</div>
			
			
		</div><!-- ./cart-review-payment -->
		<div class="col-lg-12 cart-review-actions text-right">
			Click "Finalize" to complete your purchase <span class="fa fa-angle-double-right"></span> 
			<button class="btn btn-lg btn-danger btn-next" type="button">Finalize</button>
		</div>
	</div>	
</div>

<?php include "partials/footer.php"; ?>