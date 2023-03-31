<!--template for categories-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vector</title>
	<style type="text/css">
		body{
			background-color: #96CEB4;
		}
		img {
		  background: #F1F1FA;
		  width: 400px;
		  height: 300px;
		  display: inline;
		  margin: 10px auto;
		  border: 0;
		}
		#MainDiv
		{
			height: 100%;
			width: 100%;
		}
		#display
		{
			margin-top: 50px;
			border-style: dotted;
  			border-width: 2px;
  			border-color: greenyellow;
			height: 80%;
			width: 87.9%;
		}
		.button
					{
						cursor: pointer;
						outline: none;
						border-radius: 30px;
						position: relative;
						padding: 5px;
						  color: black;
						  font-size: 16px;
						  text-decoration: none;
						  overflow: hidden;
						  transition: .5s;
						  letter-spacing: 4px;
						 background-color: #7f5a83;
						background-image: linear-gradient(315deg, #7f5a83 0%, #0d324d 74%);
						margin-top: 10px;
						margin-left: 5%;
					}
					.button:hover
					{
						background: #03e9f4;
					  	color: #fff;
					  /*border-radius: 5px;*/
					  box-shadow: 0 0 5px #03e9f4,
					              0 0 25px #03e9f4,
					              0 0 50px #03e9f4,
					              0 0 100px #03e9f4;
					}
	</style>
	<script type="text/javascript">
						document.addEventListener("DOMContentLoaded", function() {
				  var lazyloadImages = document.querySelectorAll("img.lazy");    
				  var lazyloadThrottleTimeout;
				  
				  function lazyload () {
				    if(lazyloadThrottleTimeout) {
				      clearTimeout(lazyloadThrottleTimeout);
				    }    
				    
				    lazyloadThrottleTimeout = setTimeout(function() {
				        var scrollTop = window.pageYOffset;
				        lazyloadImages.forEach(function(img) {
				            if(img.offsetTop < (window.innerHeight + scrollTop)) {
				              img.src = img.dataset.src;
				              img.classList.remove('lazy');
				            }
				        });
				        if(lazyloadImages.length == 0) { 
				          document.removeEventListener("scroll", lazyload);
				          window.removeEventListener("resize", lazyload);
				          window.removeEventListener("orientationChange", lazyload);
				        }
				    }, 20);
				  }
				  
				  document.addEventListener("scroll", lazyload);
				  window.addEventListener("resize", lazyload);
				  window.addEventListener("orientationChange", lazyload);
				});

				
</script>
</head>

<body>
	<div id="MainDiv">
		<section id="top">
		<form action="categories.php">
			<input class="button" type="submit" name="Logout" value="Back">
		</form>
		<h1 align="center">VECTORS</h1>
		<div id="display">
			<img src="https://ik.imagekit.io/demo/img/image1.jpeg?tr=w-400,h-300" />
			<img src="https://ik.imagekit.io/demo/img/image2.jpeg?tr=w-400,h-300" />
			<img src="https://ik.imagekit.io/demo/img/image3.jpg?tr=w-400,h-300" />
			<img class="lazy" data-src="https://ik.imagekit.io/demo/img/image4.jpeg?tr=w-400,h-300" />
			<img class="lazy" data-src="https://ik.imagekit.io/demo/img/image5.jpeg?tr=w-400,h-300" />
			<img class="lazy" data-src="https://ik.imagekit.io/demo/img/image6.jpeg?tr=w-400,h-300" />
			<img class="lazy" data-src="https://ik.imagekit.io/demo/img/image7.jpeg?tr=w-400,h-300" />
			<img class="lazy" data-src="https://ik.imagekit.io/demo/img/image8.jpeg?tr=w-400,h-300" />
			<img class="lazy" data-src="https://ik.imagekit.io/demo/img/image9.jpeg?tr=w-400,h-300" />
			<img class="lazy" data-src="https://ik.imagekit.io/demo/img/image10.jpeg?tr=w-400,h-300" />
		</div>
		</section>
		<hr>
		<footer>
		<a class="button" href="#top">BACK TO TOP</a>
		</footer>
	</div>
</body>
</html>