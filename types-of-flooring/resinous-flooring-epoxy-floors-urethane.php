<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr" >
<head>
<title>DMA Floors - Epoxy / Resinous Floors</title>
<meta name="description" content="DMA Floors is a full service commercial and industrial flooring company serving central Virginia, Richmond, Williamsburg, Fredericksburg, Charlottesville, and parts of North Carolina.  We specialize in all flooring including epoxy and resinous systems, concrete stains and polished concrete." />
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
	<p itemscope="itemscope" itemtype="http://schema.org/Organization">DMA works with several manufacturers of resinous systems to ensure that we can provide you with the best system for your needs. We have received training through the <a target="_blank" title="SSPC (Society for Protective Coatings)" href="http://www.sspc.org" rel="noopener"><span itemprop="alternateName">SSPC</span> (<span itemprop="legalName">Society for Protective Coatings</span>)</a> as well as several manufacturers and have specialists to help answer any questions.</p>
	
	<p itemscope="itemscope" itemtype="http://schema.org/SomeProducts"><strong>There is a <span itemprop="description">resinous system</span> for just about any need and condition.</strong> Protective to decorative, even "soft" or "comfort" floors, with options to meet just about anything you can throw at them, on them, or drive across them. The possibilities with resinous floors are only limited by your imagination.</p>
	</div>
    <div class="sidebar-vertical-right"><?php include 'includes/links-resinous.php';?></div>
  </div>
</main>
<footer class="grid">
  <div class="footer-section">
  <h3>Our Work in Epoxy Resinous Flooring</h3>
	<?php include 'blocks/image-gallery-footer-resinous.php';?>
	</div>
  <div class="contact-info-bottom">Contact Info Bottom</div>
  <div class="tog2">TOG2</div>
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