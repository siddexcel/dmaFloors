<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr" >
<head>
<title>DMA Floors - Floors for Hospitality</title>
<meta name="description" content="DMA Floors is a full service commercial and industrial flooring company serving central Virginia, Richmond, Williamsburg, Fredericksburg, Charlottesville, and parts of North Carolina.  We specialize in all flooring including epoxy and resinous systems, concrete stains and polished concrete." />
<meta name="author" content="Mary Layman TriMedia Richmond, VA" />
   <?php include '../includes/head-scripts.php';?>
</head>
<body id="retail-hospitality-floors">
 <div class="alert">Alert</div>
	<?php include '../includes/header.php';?>
<main class="main-wrapper grid"><h1>Floors in Hospitality Environments</h1>
  <div class="wrapper-left-right grid">
    <div class="sidebar-vertical-left"><?php include 'includes/menu-hospitality-floors.php';?></div>
	<div class="content-center">
	<h3>Overview</h3>
	<img alt="CWF-Conf-Area-stairs" src="/forDMA/images/hospitality/CWF-Conf-Area-stairs.webp" height="188" width="250">
	<p>Whether an international presence, a boutique hotel, or a bed and breakfast, a hotel has to develop and promote a strong brand identity. With all of the choices of where to stay, what can we do to make sure that your facility is peoples’ first choice? Many of the details that draw people to a particular brand or facility are out of our hands, but appearances count for a great deal and we can provide that. Guest room flooring is typically replaced every five years and common areas every 10-15 years, though some brands call for updating more often to maintain a clean, fresh look and a competitive edge. Floor coverings need to be durable and help reduce maintenance costs. When specifying for remodels, the replacement needs to be able to move forward with as little operational disruption as possible.</p>


	</div>
    <div class="sidebar-vertical-right"><?php include 'includes/links-hospitality-floors.php';?></div>
  </div>
</main>
<footer class="grid">
  <div class="footer-section">


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