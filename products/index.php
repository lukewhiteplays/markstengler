<?php include "../partials/header.php"; ?>

<div class="row product-single">
	<div class="col-lg-5 product-image">
		<img src="http://placehold.it/640x640" class="img-responsive" />
		<div class="product-image-footer">
			<div class="product-image-thumbnails pull-left">
				<img src="http://placehold.it/48x48" class="" /> <img src="http://placehold.it/48x48" class="" />
			</div>
			<div class="product-rating pull-right">
				<button class="btn btn-danger pull-right" type="button">Review</button>
				<div class="product-rating-stars pull-right">
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star-half"></span>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-7 product-summary">
		<div class="row product-header">
				<h1>
					Mega Flora <small>Digestive Health</small>
					
					<div class="col-lg-5 pull-right">
						<button class="btn btn-lg btn-danger btn-product-add pull-right">Add to <span class="fa fa-shopping-cart"></span></button>
						<div class="product-price pull-right"><sup>$</sup>56.64</div>
			
					</div>	
				</h1>
				
		</div>
		
		<div class="row product-nav">
			<ul class="nav nav-tabs nav-justified">
				<li class="active">
					<a href="#product-description" data-toggle="tab">Description</a>
				</li>
				<li>
					<a href="#product-video" data-toggle="tab">Videos</a>
				</li>
				<li>
					<a href="#product-reviews" data-toggle="tab">Reviews <span class="badge pull-right">3</span></a>
				</li>
				<li>
					<a href="#product-ingredients" data-toggle="tab">Ingredients</a>
				</li>
				<li>
					<a href="#product-directions" data-toggle="tab">Directions</a>
				</li>
			</ul>
		</div>
		
		<div class="row product-content tab-content">
			<div class="tab-pane active" id="product-description">
				<blockquote><strong>Mega Flora</strong> helps maintain a healthy Intestinal Microecology and supports the Natural Immune Response, Bowel Regularity and Lactose Digestion</blockquote>
				<p>Mega Flora is a vegetarian, dairy- and gluten-free, four-strain probiotic totaling 100 billion CFU† per capsule. Each vegetarian capsule is sealed in nitrogen-purged aluminum blister packs to serve as protection from factors proven to compromise the stability of probiotics such as heat, moisture, and oxygen. ProbioMax DF provides four researched strains of beneficial bacteria, including the extensively studied HN019 strain of Bifidobacterium lactis. These live microorganisms have proven health benefits and well-established safety, and have been tested for epithelial cell adhesion and/or resistance to low pH.*

				<br><br>To further support resistance to low pH and the delivery of microorganisms to the small intestines, Mega Flora employs DRcaps™ gastro-resistant capsules. These specially designed, innovative capsules help slow exposure of actives to stomach acid and ensure more targeted release.
				</p>
			</div>
			
			<div class="tab-pane" id="product-video">
				<div class="row">
					<div class="col-lg-3">
						<div class="thumbnail">
							<a href="#">
								<img src="/assets/img/placeholder/videoPlaceholder.jpg" class="img-responsive" data-toggle="modal" data-target=".modal-product-video">
							</a>
							<div class="caption">
								<h6>Mega Flora</h6>
								It's so popular!
							</div>
						</div>
					</div>
					
					<div class="col-lg-3">
						<div class="thumbnail">
							<a href="#">
								<img src="/assets/img/placeholder/videoPlaceholder.jpg" class="img-responsive">
							</a>
							<div class="caption">
								<h6>Mega Flora</h6>
								Why is it popular!
							</div>
						</div>
					</div>
					
					<div class="col-lg-3">
						<div class="thumbnail">
							<a href="#">
								<img src="/assets/img/placeholder/videoPlaceholder.jpg" class="img-responsive">
							</a>
							<div class="caption">
								<h6>Mega Flora</h6>
								We don't know!
							</div>
						</div>
					</div>
					
					<div class="col-lg-3">
						<div class="thumbnail">
							<a href="#">
								<img src="/assets/img/placeholder/videoPlaceholder.jpg" class="img-responsive">
							</a>
							<div class="caption">
								<h6>Mega Flora</h6>
								One day!
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="tab-pane product-reviews" id="product-reviews">
				<ul class="media-list">
					<li class="media">
						<a href="#" class="pull-left">
							<img class="media-object" src="http://placehold.it/82x82">
						</a>
						<div class="media-body">
							<h5 class="media-heading">From <em>Betsy Walker, Manassas, VA</em></h5>
							I love your products! I want more! Give me moooooore! This product rules. It's awesome. I dig it. Let's get some more of that happening.
						</div>
					</li>
					
					<li class="media">
						<a href="#" class="pull-left">
							<img class="media-object" src="http://placehold.it/82x82">
						</a>
						<div class="media-body">
							<h5 class="media-heading">From <em>John Carrigan, New York, NY</em></h5>
							If you google the author and go to his site you can check out the books/volumes and get the books and a monthly newsletter for 12 months for just $37 a year. check it out and don't waste you $$ buying here.
						</div>
					</li>
					
					<li class="media">
						<a href="#" class="pull-left">
							<img class="media-object" src="http://placehold.it/82x82">
						</a>
						<div class="media-body">
							<h5 class="media-heading">From <em>M. Kowalski, San Diego, CA</em></h5>
							This is an excellent source of information for the one who wants to improve/enhance her health without side effects of any medications, given time and one's will. Any references/sources cited by the author can be easily checked. I love it!
						</div>
					</li>
				</ul>
				
				<form class="form form-horizontal" role="form">
					<legend>Write a Review</legend>
					<div class="form-group">
						<label class="col-lg-2 text-right">Name</label>
							<div class="input-group col-lg-8">
								<input 
									type="text" 
									name="name" 
									class="form-control input-lg"
									placeholder="Your Name">
							</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 text-right">Email</label>
						<div class="input-group col-lg-8">
							<input type="email" class="form-control input-lg" name="name" placeholder="Your Email">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 text-right">Location</label>
						<div class="input-group col-lg-8">
							<input type="text" name="name" class="form-control input-lg" placeholder="Anytown, USA">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 text-right">Comment</label>
						<div class="input-group col-lg-8">
							<textarea name="name" class="form-control" rows="4"></textarea>
						</div>
					</div>
					<div class="form-group pull-right col-lg-offset-2">
						<button type="submit" class="btn btn-danger btn-lg">Submit</button>
					</div>
				</form>
			</div><!-- ./tab-pane -->
			
			<!-- product-ingredients -->
			<div class="tab-pane product-ingredients" id="product-ingredients">
				<img src="/assets/img/placeholder/MegaFlora.jpg">
			</div>
			
			<div class="tab-pane product-directions" id="product-directions">
				<p>Take one capsule with water daily, or as directed by your healthcare practitioner.</p>
				<p>Children and pregnant or lactating women should consult their healthcare practitioner prior to use.</p>
				
				<p><strong>Does Not Contain:</strong> Wheat, gluten, corn, yeast, soy, animal or dairy products, fish, shellfish, peanuts, tree nuts, egg, ingredients derived from genetically modified organisms (GMOs), artificial colors, artificial sweeteners, or preservatives.</p>
				
				<p><strong>Storage: </strong> Keep closed in a cool, dry place out of reach of children.</p>
				
				<p><strong>Other Ingredients:</strong> HPMC (acid-resistant capsule), magnesium stearate, and silica.</p>
			</div>
		</div>
	</div>
</div>
<div class="row product-related">
	<div class="col-lg-12">
		<h3>Related Products...</h3>
	</div>
	<div class="col-lg-2">
		<a href="/products/" class="thumbnail">
			<img src="http://placehold.it/240x240">
		</a>
	</div>
	<div class="col-lg-2">
		<a href="/products/" class="thumbnail">
			<img src="http://placehold.it/240x240">
		</a>
	</div>
	<div class="col-lg-2">
		<a href="/products/" class="thumbnail">
			<img src="http://placehold.it/240x240">
		</a>
	</div>
	<div class="col-lg-2">
		<a href="/products/" class="thumbnail">
			<img src="http://placehold.it/240x240">
		</a>
	</div>
	<div class="col-lg-2">
		<a href="/products/" class="thumbnail">
			<img src="http://placehold.it/240x240">
		</a>
	</div>
	<div class="col-lg-2">
		<a href="/products/" class="thumbnail">
			<img src="http://placehold.it/240x240">
		</a>
	</div>
</div>

<div class="row product-reading">
	<div class="col-lg-12">
		<h3>Additional Reading...</h3>
	</div>
	<div class="col-lg-3">
		<div class="thumbnail">
			<a href="#">
				<img src="http://placehold.it/300x250" class="img-responsive">
			</a>
			<div class="caption">
				<h5>Article One</h5>
				<p>Read more about this product...</p>
				<button class="btn btn-default" type="button">Read More...</button>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="thumbnail">
			<a href="#">
				<img src="http://placehold.it/300x250" class="img-responsive">
			</a>
			<div class="caption">
				<h5>Article One</h5>
				<p>Read more about this product...</p>
				<button class="btn btn-default" type="button">Read More...</button>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="thumbnail">
			<a href="#">
				<img src="http://placehold.it/300x250" class="img-responsive">
			</a>
			<div class="caption">
				<h5>Article One</h5>
				<p>Read more about this product...</p>
				<button class="btn btn-default" type="button">Read More...</button>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="thumbnail">
			<a href="#">
				<img src="http://placehold.it/300x250" class="img-responsive">
			</a>
			<div class="caption">
				<h5>Article One</h5>
				<p>Read more about this product...</p>
				<button class="btn btn-default" type="button">Read More...</button>
			</div>
		</div>
	</div>
</div>

<?php include "../partials/footer.php"; ?>