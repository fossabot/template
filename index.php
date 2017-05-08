<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>pageTitle</title>
		<!-- build:remove:dev -->
		<script type="text/javascript">
			function loadCSS(hf) {
			          var ms=document.createElement("link");ms.rel="stylesheet";
			          ms.href=hf;document.getElementsByTagName("head")[0].appendChild(ms);
			      }
			      loadCSS("assets/css/all.min.css");
		</script>
		<noscript>
			<link rel="stylesheet" href="assets/css/all.min.css">
		</noscript>
		<!-- /build -->	</head>
	<body>
		<header>
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span>
							<span
							class="icon-bar"></span>
						</button><a class="navbar-brand icon-icon" href="#header"></a>

					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav" id="scroll-menu">
							<li><a href="#mission">One              </a>
							</li>
							<li><a href="#education">Two</a>
							</li>
							<li><a href="#sciense">Three</a>
							</li>
							<li><a href="#contacts">Four</a>
							</li>
							<li><a data-toggle="modal" data-target=".bs-example-modal-lg">Ajax Modal Form</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<section class="grid-list">
			<div class="container">
				<div class="row list-group" id="products">
					<div class="item col-xs-4 col-lg-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="assets/img/1.png" alt="1.png"
							/>
							<div class="caption">
								 <h4 class="group inner list-group-item-heading"> Product title</h4>

								<p class="group inner list-group-item-text">Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing
									elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
									erat volutpat.</p>
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<p class="lead">$21.000</p>
									</div>
									<div class="col-xs-12 col-md-6"><a class="btn btn-success" href="#">Add to cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item col-xs-4 col-lg-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="assets/img/2.png" alt="2.png"
							/>
							<div class="caption">
								 <h4 class="group inner list-group-item-heading"> Product title</h4>

								<p class="group inner list-group-item-text">Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing
									elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
									erat volutpat.</p>
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<p class="lead">$21.000</p>
									</div>
									<div class="col-xs-12 col-md-6"><a class="btn btn-success" href="#">Add to cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item col-xs-4 col-lg-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="assets/img/3.png" alt="3.png"
							/>
							<div class="caption">
								 <h4 class="group inner list-group-item-heading"> Product title</h4>

								<p class="group inner list-group-item-text">Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing
									elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
									erat volutpat.</p>
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<p class="lead">$21.000</p>
									</div>
									<div class="col-xs-12 col-md-6"><a class="btn btn-success" href="#">Add to cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						 <h1></h1>

						<div id="app"></div>
					</div>
					<div class="col-xs-12 col-sm-4">
						 <h2>Something</h2>

					</div>
					<div class="col-xs-12 col-sm-4">
						 <h3>Something</h3>

					</div>
				</div>
			</div>
		</section>
		<footer>
			<div id="content"></div>
		</footer>
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
		aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myLargeModalLabel">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="background">
						<div class="modal-header">
							<button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
							 <h4 class="modal-title">Example</h4>

						</div>
						<form action="POST" id="form-proposal">
							<div class="input-group ">
								<input class="form-control" type="text" placeholder="email" name="email">
								<input class="form-control" type="password" placeholder="password" name="password">
							</div>
							<button class="btn center-block" type="submit" name="do_login">Send Request</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- build:remove:dev -->
		<script async src="assets/js/all.min.js"></script>
		<!-- /build -->	</body>

</html>