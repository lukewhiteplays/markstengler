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
					<td class="quantity">				
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
					<td class="quantity">					
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
					<td class="quantity">
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
		<div class="col-lg-4">
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
		
		<div class="col-lg-4 col-form-register">
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

				<div class="form-group form-group-actions text-right">
					<button class="btn btn-danger btn-lg" type="button">Register</button>
				</div>
			</form>
		</div>
	
		
		<div class="col-lg-4 col-help">
			<h3>Need Help?</h3>
			<ul class="list-group">			
				<li class="list-group-item"><span class="fa fa-fw fa-envelope"></span> Email Us</li>
				<li class="list-group-item"><span class="fa fa-fw fa-phone"></span> Call Us</li>
				<li class="list-group-item"><span class="fa fa-fw fa-fax"></span> Fax Us</li>
				<li class="list-group-item">
					<span class="fa fa-fw fa-home"></span> Make an Appointment
					<br>11613 Moorpark St, Apt 5
					<br>North Hollywood, CA 91602
					
				</li>
			</ul>
			
			<small>Your Mark Stengler purchase is 100% secure. Getting nutritional products has never been easier, or safer. 
			<a href="#">Learn more...</a>
			</small>
		</div><!-- ./tab-pane ./col-help -->		
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
							name="address"
							class="form-control input-lg"
						>
				</div>
				<div class="form-group">
					<label>Apartment or Suite</label>
						<input type="text"
							name="address_two"
							class="form-control input-lg"
						>
				</div>
				<div class="form-group">
					<label>Phone</label>
						<input type="text"
							name="phone"
							class="form-control input-lg bfh-phone"
							data-format="ddd-ddd-dddd"
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
					<label>City</label>
						<input type="text"
							name="city"
							class="form-control input-lg"
						>
				</div>
				<div class="form-group">
					<label>State</label>
						<input type="text"
							name="state"
							class="form-control input-lg"
						>
				</div>
				<div class="form-group">
					<label>Zip</label>
						<input type="text"
							name="zip"
							class="form-control input-lg bfh-number" 
							data-buttons="false" 
							data-zeros="true"
						>
				</div>
				<div class="form-group">
					<label>Country</label>
						<input type="text"
							name="country"
							class="form-control input-lg"
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
							name="shipping_name"
							class="form-control input-lg"
						>
				</div>
				<div class="form-group">
					<label>Address</label>
						<input type="text"
							name="address"
							class="form-control input-lg"
						>
				</div>
				<div class="form-group">
					<label>Apartment or Suite</label>
						<input type="text"
							name="address_two"
							class="form-control input-lg"
						>
				</div>
				<div class="form-group">
					<label>Phone</label>
						<input type="text"
							name="phone"
							class="form-control input-lg bfh-phone"
							data-format="ddd-ddd-dddd"
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
					<label>City</label>
						<input type="text"
							name="shipping_name"
							class="form-control input-lg"
						>
				</div>
				<div class="form-group">
					<label>State</label>
						<input type="text"
							name="address"
							class="form-control input-lg"
						>
				</div>
				<div class="form-group">
					<label>Zip</label>
						<input type="text"
							name="address_two"
							class="form-control input-lg"
						>
				</div>
				<div class="form-group">
					<label>Country</label>
						<input type="phone"
							name="phone"
							class="form-control input-lg"
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
		<div class="col-lg-12">
			<div class="col-lg-6 col-lg-offset-3 col-credit-card">
				<h4>Payment Details</h4>
				<form class="form" role="form">
					<div class="form-group col-lg-12">
						<label>Card Number</label>
						
						<input type="text" 
							class="form-control input-lg"
							name="credit_card_number">
							
					</div>
					
					<div class="form-group col-lg-12">
						<label>Name on Card</label>
						<input type="text" 
							class="form-control input-lg"
							name="credit_card_number">
					</div>
					
					<div class="form-group col-lg-9">
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
					
					<div class="form-group col-lg-3">
						<label>CCV Code</label>
						<input type="text"
							class="form-control input-lg"
							name="credit_card_ccv">
					</div>
					<div class="col-lg-12">&nbsp;</div>
				</form>
			</div>
		</div>
		<div class="col-lg-12 text-right">
			<button class="btn btn-danger btn-next btn-lg">Review <span class="fa fa-long-arrow-right"></span></button>
		</div>
	</div>
</div>

<?php include "partials/footer.php"; ?>