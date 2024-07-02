<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr" >
<head>
<title>DMA Floors - Floors for Healthcare</title>
<meta name="description" content="DMA Floors is a full service commercial and industrial flooring company serving central Virginia, Richmond, Williamsburg, Fredericksburg, Charlottesville, and parts of North Carolina.  We specialize in all flooring including epoxy and resinous systems, concrete stains and polished concrete." />
<meta name="author" content="Mary Layman TriMedia Richmond, VA" />
   <?php include '../includes/head-scripts.php';?>
</head>
<body id="retail-healthcare-floors">
 <div class="alert">Alert</div>
	<?php include '../includes/header.php';?>
<main class="main-wrapper grid"><h1>Floors in Healthcare</h1>
  <div class="wrapper-left-right grid">
    <div class="sidebar-vertical-left"><?php include 'includes/menu-healthcare-floors.php';?></div>
	<div class="content-center">
	<h3>Overview</h3>
	<img alt="healthcare-overview" src="/forDMA/images/healthcare/healthcare-overview.webp" height="188" width="250">
	<p><strong>Healthcare facilities have been through many transitions over the years when it comes to flooring needs.</strong> We have moved from the sterility of waxed vinyl to the homey feel of&nbsp;<a href="/types-of-flooring/carpet-floors.html">carpet</a> and are now realizing that there are options that can bring us both a clean, safe environment, and a comfortable feel that is not so institutional. Use of individual spaces within the facility, maintenance plans, and type and level of traffic will all guide your selection. Ideally the finishes will aid in improving patient and staff safety, reduce patient and staff stress, speed healing and improve patient outcomes, improve the patient and family experience, improve staff effectiveness and satisfaction and positively impact the bottom line.</p>


	</div>
    <div class="sidebar-vertical-right"><?php include 'includes/links-healthcare-floors.php';?></div>
  </div>
</main>
<footer class="grid">
  <div class="footer-section">
  <h3>Our Work in Healthcare Flooring</h3>
	<?php include 'blocks/image-gallery-footer-healthcare-floors.php';?>
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
<script type="text/javascript"
src="https://trimediaus.com/forDMA/js/script-utilities.js">
</script>
</body>
</html>