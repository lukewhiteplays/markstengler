<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mark Stengler Dev Environment</title>

    <!-- Bootstrap -->
    <link href="/assets/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="/assets/js/vendor/sidebarTransitions/modernizr.custom.js"></script>
  </head>
  <body>
  	<div class="st-container" id="st-container">
  		
		
		<div class="st-pusher">
			<nav class="st-menu st-effect-3" id="menu-3">
				<h2>Shopping Cart</h2>
				<ul>
					<li><a class="icon icon-data" href="#">Data Management</a></li>
					<li><a class="icon icon-location" href="#">Location</a></li>
					<li><a class="icon icon-study" href="#">Study</a></li>
					<li><a class="icon icon-photo" href="#">Collections</a></li>
					<li><a class="icon icon-wallet" href="#">Credits</a></li>
				</ul>
			</nav>
		
		
			<div class="st-content">
				<div class="st-content-inner">
					<!-- navigation bar -->
				    <nav class="navbar navbar-default navbar-inverse navbar-main navbar-fixed-top" role="navigation">
					  	<div class="container">
						    <!-- Brand and toggle get grouped for better mobile display -->
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						      <a class="navbar-brand" href="/"><span>DR</span> Mark Stengler</a>
						    </div>
						
						    <!-- Collect the nav links, forms, and other content for toggling -->
						    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						      <ul class="nav navbar-nav">
						        <li><a href="#" class="products-trigger">Products</a></li>
						        <li><a href="#">TV</a></li>
						        <li class="dropdown">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clinic <b class="caret"></b></a>
						          <ul class="dropdown-menu">
						            <li><a href="#">Action</a></li>
						            <li><a href="#">Another action</a></li>
						            <li><a href="#">Something else here</a></li>
						            <li class="divider"></li>
						            <li><a href="#">Separated link</a></li>
						            <li class="divider"></li>
						            <li><a href="#">One more separated link</a></li>
						          </ul>
						        </li>
						      </ul>
						      <ul class="nav navbar-nav navbar-right">
						      	<li><a href="#" class="search-trigger" data-toggle="modal" data-target="#modal-search"><span class="icon icon-search"></span></a></li>
						        <li><a href="#" class="login-trigger" data-toggle="modal" data-target="#modal-login">Login</a></li>
						        <li class="vertical-divider"></li>
						        <li><a href="#" class="join">Join</a></li>
						        <li><a href="#" class="cart-trigger" data-effect="st-effect-3"><span class="icon icon-shop"></span></a></li>
						      </ul>
						    </div><!-- /.navbar-collapse -->    
						</div><!-- /.container-fluid -->
					  	<div class="navbar-products">
					  		<div class="container">
						  		it has something
					  		</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
  	</div>
	
	<div class="modal modal-search" id="modal-search" tabindex="-1" aria-labeledby="modal-search-label" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		      </div>
		      <div class="modal-body">
		       <form class="form">
		        	<div class="form-group">
		        		<div class="input-group col-lg-12">
						    <input 
						    	type="search" 
						    	name="search" 
						    	class="input-lg"
						    	autofocus="yes"
						    	placeholder="Search for anything...">
		        		</div>
		        	</div>
		        </form>
		      </div>
		      <div class="modal-footer">
		      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<div class="modal modal-login fade" id="modal-login" tabindex="-1" aria-labeledby="modal-login-label" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h3 class="modal-title">Welcome</h3>
		      </div>
		      <div class="modal-body">
		       <form class="form form-horizontal">
		        	<div class="form-group">
		        		<div class="input-group">
						    <input 
						    	tabindex="3"
						    	type="text" 
						    	name="username" 
						    	class="input-lg"
						    	autofocus="yes"
						    	spellcheck="false"
						    	placeholder="username">
		        		</div>
		        	</div>
		        	
		        	<div class="form-group">
		        		<div class="input-group">
						    <input 
						    	tabindex="3"
						    	type="password" 
						    	name="password" 
						    	class="input-lg"
						    	spellcheck="false"
						    	placeholder="password">
		        		</div>
		        	</div>
		        	<button class="btn btn-primary btn-login" type="submit">Enter</button>
		        	<br><a href="#">Forgot your password?</a> | <a href="#">Close</a>
		        </form>
		      </div>
		      <div class="modal-footer">
		      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <script src="/assets/js/vendor/sidebarTransitions/classie.js"></script>
    <script src="/assets/js/vendor/sidebarTransitions/sidebarEffects.js"></script>
    
    <script>
    	$('.nav li .products-trigger').on('click',function(e){
    		e.preventDefault();
    		var productsWrapper = $('.navbar-products');
    		productsWrapper.slideToggle();
    	});
    	
    	$('.search-trigger').on('click',function(e){
    		e.preventDefault();
    		var $input = $('.modal-search').find('input[type=search]');
    		$input.focus();
    	});
    	
    </script>
  </body>
</html>