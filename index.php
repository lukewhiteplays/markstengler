<?php include "partials/header.php"; ?>
<div id="carousel-example-generic" class="features carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/assets/img/carousel/carousel_handsearth_1800x700_01.jpg" alt="...">
      <div class="carousel-caption">
        <h1>Thyroid Wellness <span>ON SALE</span></h1>
        <p class="lead">Purchase your next supplement now in our store <i class="fa fa-long-arrow-right"></i></p>
      </div>
    </div>
    <div class="item">
      <img src="/assets/img/carousel/carousel_sunset_1800x700_01.jpg" alt="...">
      <div class="carousel-caption">
        <h1>IV Nutrient Therapy</h1>
        <p class="lead">From Vitamin C to Cancer Treatments. Read more <i class="fa fa-long-arrow-right"></i></p>
      </div>
    </div>
    <div class="item">
      <img src="/assets/img/carousel/carousel_organic_1800x700_01.jpg" alt="...">
      <div class="carousel-caption">
        <h1>"Organic Is Best"</h1>
        <p class="lead">Read why Organics are the cure for everything under the sun</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>


<div class="row features features-second-row">
	<div class="col-lg-6 feature-video-large">
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1qju3xg3SjU?controls=0&showinfo=0"></iframe>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="row">
			<div class="col-lg-6 feature" style="background-image:url(/assets/img/placeholder/cholesterol-under-control.jpg);">
				<div class="caption fade in">
					<h3>More than Cholesterol<small>by Mark Stengler</small></h3>
					<p class="lead">Research has demonstrated that the lipid doesn't assess your cardiovascular risk.</p>
					<a href="/content/article.php">Read More <span class="fa fa-arrow-right"></span></a>
				</div>
			</div>
			<div class="col-lg-6 feature feature-alt" style="background-image:url(/assets/img/backgrounds/healthy-life-09-400x266.jpg);">
				<div class="caption fade in">
					<h3>HCG Weight Loss<small>by Mark Stengler</small></h3>
					<p class="lead">Over the years I have modernized this HCG program in various ways</p>
					<a href="/content/article.php">Read More <span class="fa fa-arrow-right"></span></a>
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="row features">
	<div class="col-lg-3">
		<img src="http://placehold.it/450x375" class="img-responsive">
	</div>
	<div class="col-lg-3">
		<img src="http://placehold.it/450x375" class="img-responsive">
	</div>
	<div class="col-lg-3">
		<img src="http://placehold.it/450x375" class="img-responsive">
	</div>
	<div class="col-lg-3">
		<img src="http://placehold.it/450x375" class="img-responsive">
	</div>
</div>
<div class="row features">
	<div class="col-lg-12">
		<img src="http://placehold.it/1900x800" class="img-responsive">
	</div>
</div>
<div class="row features">
	<div class="col-lg-4">
		<img src="http://placehold.it/640x375" class="img-responsive">
	</div>
	<div class="col-lg-4">
		<img src="http://placehold.it/640x375" class="img-responsive">
	</div>
	<div class="col-lg-4">
		<img src="http://placehold.it/640x375" class="img-responsive">
	</div>
</div>

<script>
	var rowHeight 	= $('.feature-video-large').height(),
		features	= $('.features-second-row').find('.feature');
		
	features.each(function(e){
		console.log(e);
		$(this).height(rowHeight);
	});
	
</script>
<?php include "partials/footer.php"; ?>