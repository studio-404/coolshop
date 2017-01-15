
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta charset="utf-8"/>
<title>Pages - Front End</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<link rel="apple-touch-icon" href="">
<link rel="apple-touch-icon" sizes="76x76" href="">
<link rel="apple-touch-icon" sizes="120x120" href="">
<link rel="apple-touch-icon" sizes="152x152" href="">
<link rel="icon" type="image/x-icon" href=""/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="description"/>
<meta content="" name="author"/>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
<link rel="stylesheet" type="text/css" href="css/examples.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!--[if IE]>
<script type="text/javascript">
	var console = { log: function() {} };
</script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/materialize.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.easings.min.js"></script>
<script type="text/javascript" src="js/jquery.fullpage.extensions.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#myContainer').fullpage({
			anchors: ['firstPage', 'secondPage'],
			sectionsColor: ['', '#000000'],
			menu: '#menu',
			continuousHorizontal: false,
			slidesNavigation: true,
			afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){
				console.log("slideLoad--" + "anchorLink: " + anchorLink + " index: " + index + " slideAnchor: " + slideAnchor + " slideIndex: " + slideIndex);

			},
			onSlideLeave: function(anchorLink, index, slideIndex, direction){
				console.log("----------------");
				console.log("onSlideLeave--" + "anchorLink: " + anchorLink + " index: " + index + " slideIndex: " + slideIndex + " direction: " + direction);
			}, 
			afterRender: function () {
				setInterval(function () {
					$.fn.fullpage.moveSlideRight();
				}, 5000);
			}
		});
	});
</script>
</head>
<body>
<div class="navigation-box">
	<div class="cartIcon">
		<a href="#firstPage" class="whitetext tooltipped" data-position="bottom" data-delay="50" data-tooltip="მთავარი">
			<i class="material-icons">store</i>
		</a>
	</div>
	<div class="cartIcon">
		<a href="#secondPage" class="whitetext tooltipped" data-position="bottom" data-delay="50" data-tooltip="კატალოგი">
		<i class="material-icons">view_list</i>
		</a>
	</div>
	<div class="cartIcon tooltipped" data-position="bottom" data-delay="50" data-tooltip="კალათა">
		<i class="material-icons">shopping_cart</i>
	</div>	
</div>

<div id="myContainer">

	<div class="section">
		<div class="black-cover"></div>
		<div class="slide" style="background-image:url('images/slider/image1.jpg');">			
			<div class="slide-text">
				<div class="big-text">დიდი ფასდაკლება 19 იანვრამდე !</div>
				<div class="small-text">50%-იანი ფასდაკლება ყველა ნივთზე, იჩქარეთ რაოდენობა შეზღუდულია.</div>
			</div>
		</div>
		<div class="slide" style="background-image:url('images/slider/image2.jpg');">
			<div class="slide-text">
				<div class="big-text">დიდი ფასდაკლება 19 იანვრამდე !</div>
				<div class="small-text">50%-იანი ფასდაკლება ყველა ნივთზე, იჩქარეთ რაოდენობა შეზღუდულია.</div>
			</div>
		</div>
		<div class="slide" style="background-image:url('images/slider/image3.jpg');">
			<div class="slide-text">
				<div class="big-text">დიდი ფასდაკლება 19 იანვრამდე !</div>
				<div class="small-text">50%-იანი ფასდაკლება ყველა ნივთზე, იჩქარეთ რაოდენობა შეზღუდულია.</div>
			</div>
		</div>
	</div>
	<div class="section">
		
		<div class="products">
			<div class="row">	
				<div class="col-sm-12 col-md-3">					
					<div class="list-group">
					  <a href="#" class="list-group-item active">
					   ყველა
					  </a>
					  <a href="#" class="list-group-item">საათები</a>
					  <a href="#" class="list-group-item">ბრასლეტები</a>
					  <a href="#" class="list-group-item">ყელსაბამი</a>
					  <a href="#" class="list-group-item">ბეჭედი</a>
					</div>
				</div>	
				<div class="col-sm-12 col-md-9">	
					
					<div class="col-sm-12 col-md-4">
						<div class="thumbnail">
							<img src="http://totowatch.ge/uploads/posts/2017-01/1484249716_15390793_1218411381575830_5858424840533741888_n.jpg" alt="" />
							<div class="caption">
								<h3>Thumbnail label</h3>
								<p>wow</p>
								<p>
									<a href="#" class="btn btn-primary" role="button">Button</a> 
									<a href="#" class="btn btn-default" role="button">Button</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-4">
						<div class="thumbnail">
							<img src="http://totowatch.ge/uploads/posts/2017-01/1484249716_15390793_1218411381575830_5858424840533741888_n.jpg" alt="" />
							<div class="caption">
								<h3>Thumbnail label</h3>
								<p>wow</p>
								<p>
									<a href="#" class="btn btn-primary" role="button">Button</a> 
									<a href="#" class="btn btn-default" role="button">Button</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-4">
						<div class="thumbnail">
							<img src="http://totowatch.ge/uploads/posts/2017-01/1484249716_15390793_1218411381575830_5858424840533741888_n.jpg" alt="" />
							<div class="caption">
								<h3>Thumbnail label</h3>
								<p>wow</p>
								<p>
									<a href="#" class="btn btn-primary" role="button">Button</a> 
									<a href="#" class="btn btn-default" role="button">Button</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-4">
						<div class="thumbnail">
							<img src="http://totowatch.ge/uploads/posts/2017-01/1484249716_15390793_1218411381575830_5858424840533741888_n.jpg" alt="" />
							<div class="caption">
								<h3>Thumbnail label</h3>
								<p>wow</p>
								<p>
									<a href="#" class="btn btn-primary" role="button">Button</a> 
									<a href="#" class="btn btn-default" role="button">Button</a>
								</p>
							</div>
						</div>
					</div>

				</div>

		</div>
	</div>
</div>

<input type="hidden" id="_4" value="3" />
</body> 
</html>