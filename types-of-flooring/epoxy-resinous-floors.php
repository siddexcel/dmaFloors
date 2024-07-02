<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr" >
<head>
<title>DMA Floors - Epoxy / Resinous Floors</title>
<meta name="description" content="Ask us to recommend the best resinous system for your need and condition. DMA Floors works with many manufacturers to match your needs. Our team members are trained by the Society for Protective Coatings." />
<meta name="author" content="Mary Layman TriMedia Richmond, VA" />
   <?php include '../includes/head-scripts.php';?>
</head>
<body id="floortype-resinous">
 <div class="alert">Alert</div>
	<?php include '../includes/header.php';?>
<main class="main-wrapper grid"><h1>Epoxy / Resinous</h1>
  <div class="wrapper-left-right grid">
    <div class="sidebar-vertical-left"><?php include 'includes/menu-resinous.php';?></div>
	<div class="content-center">
	<h3>Overview</h3>
	<p>DMA works with several manufacturers of resinous systems to ensure that we can provide you with the best system for your needs. We have received training through the <a target="_blank" title="SSPC (Society for Protective Coatings)" href="http://www.sspc.org" rel="noopener">SSPC (Society for Protective Coatings)</a> as well as several manufacturers and have specialists to help answer any questions.</p>
	
	<p><strong>There is a resinous system for just about any need and condition.</strong> Protective to decorative, even "soft" or "comfort" floors, with options to meet just about anything you can throw at them, on them, or drive across them. The possibilities with resinous floors are only limited by your imagination.</p>
	</div>
    <div class="sidebar-vertical-right"><?php include 'includes/links-resinous.php';?></div>
  </div>
</main>
<footer class="grid">
  <div class="portfolio-gallery">
  <h3>Our Work in Epoxy Resinous Flooring</h3>
	<?php include 'blocks/image-gallery-footer-resinous.php';?>
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
	<?php include '../includes/script-utilities.php';?>
</body>
</html>