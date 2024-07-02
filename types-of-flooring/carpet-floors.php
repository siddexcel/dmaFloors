<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr" >
<head>
<title>DMA Floors - Carpet Flooring</title>
<meta name="description" content="DMA Floors is a full service commercial and industrial flooring company serving central Virginia, Richmond, Williamsburg, Fredericksburg, Charlottesville, and parts of North Carolina.  We specialize in all flooring including epoxy and resinous systems, concrete stains and polished concrete." />
<meta name="author" content="Mary Layman TriMedia Richmond, VA" />
   <?php include '../includes/head-scripts.php';?>
</head>
<body id="floortype-carpet">
 <div class="alert">Alert</div>
	<?php include '../includes/header.php';?>
<main class="main-wrapper grid"><h1>Carpet (Broadloom and Tile)</h1>
  <div class="wrapper-left-right grid">
    <div class="sidebar-vertical-left"><?php include 'includes/menu-carpet-floors.php';?></div>
	<div class="content-center">
	<h3>Overview</h3>
	<p>Whether you are specifying a carpet for a school library, hotel lobby, or a senior living facility, you want to make sure that you not only meet the aesthetic desires of your customer, but you also need to meet their budgetary, maintenance, and longevity concerns. The Carpet and Rug Institute has developed a six step plan to help us identify and rate those needs. If we use this plan it can help ensure that we best fulfill all of those needs and ultimately provide the best solution. DMA also has a skilled team of project managers and a full library in our showroom to help you select the options best suited to your space.</p>
	</div>
    <div class="sidebar-vertical-right"><?php include 'includes/links-carpet-floors.php';?></div>
  </div>
</main>
<footer class="grid">
  <div class="footer-section">
  <h3 class="indent">Our Work in Carpet Flooring &amp; Wall Panels</h3>
	<?php include 'blocks/image-gallery-footer-carpet-floors.php';?>
	</div>
  <div class="contact-info-bottom"></div>
  <div class="tog2"></div>
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