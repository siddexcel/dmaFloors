<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr" >
<head>
<title>DMA Floors - Ceramic Tile Floors and Walls</title>
<meta name="description" content="DMA Floors is a full service commercial and industrial flooring company serving central Virginia, Richmond, Williamsburg, Fredericksburg, Charlottesville, and parts of North Carolina.  We specialize in all flooring including epoxy and resinous systems, concrete stains and polished concrete." />
<meta name="author" content="Mary Layman TriMedia Richmond, VA" />
   <?php include '../includes/head-scripts.php';?>
</head>
<body id="floortype-ceramic-tile">
 <div class="alert">Alert</div>
	<?php include '../includes/header.php';?>
<main class="main-wrapper grid"><h1>Ceramic</h1>
  <div class="wrapper-left-right grid">
    <div class="sidebar-vertical-left"><?php include 'includes/menu-ceramic-tile.php';?></div>
	<div class="content-center">
	<h3>Overview</h3>
	<p>Few flooring options can boast a potential life cycle in excess of a millennium. Not that every tile floor is designed to last a thousand years or more, but ceramic and stone have demonstrated superior resiliency through the ages. DMA has project managers who specialize in tile and understand the importance of proper specification and installation. We can work with you at your facility or in our showroom to help you find the best solution for your space.</p>
	<p><a href="http://www.tcnatile.com" target="_blank"><img class="left" src="/forDMA/images/logos/logo-TCNA.webp" width="181" height="75" alt="logo-TCNA"></a><b>TCNA Handbook</b> -The current TCNA Handbook, in conjunction with ANSI A108, A110 and A136, provides detailed installation guides for proper specification, preparation and installation methods for ceramic, stone and glass for virtually any condition. It also contains guidelines for wet areas, above ground concrete, and ISO mortar and grout.</p>
	</div>
    <div class="sidebar-vertical-right"><?php include 'includes/links-ceramic-tile.php';?></div>
  </div>
</main>
<footer class="grid">
  <div class="portfolio-gallery">
  <h3>Our Work in Ceramic Tile Floors and Walls</h3>
	<?php include 'blocks/image-gallery-footer-ceramic-tile.php';?>
  </div>
  <?php include '../includes/footer.php';?>
</footer>
<script>
	var modal = document.getElementById('myModal');
	var images = document.getElementsByClassName('myImages');
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");

	for (var i = 0; i < images.length; i++) {
	  var img = images[i];
	  img.onclick = function(evt) {
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
	  }
	}
	var span = document.getElementsByClassName("close")[0];
	span.onclick = function() {modal.style.display = "none";}
</script>
<script type="text/javascript"
src="https://trimediaus.com/forDMA/js/script-utilities.js">
</script>
</body>
</html>