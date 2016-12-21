<div id="meny">
<div class="gjatM">

<div id="majt">
<img alt=" " src="img/logo.jpg">	</div>

<div id="djatht">			
<ul id="menu">
  <li><a href="?faqe=home">Home</a></li>
  <li><a href="?faqe=services">Services</a></li>
  <li><a href="?faqe=gallery">Gallery</a></li>
  <li><a href="?faqe=about">About</a></li>
  <li><a href="?faqe=contact">Contacts</a></li>
  <?php 				
					//Nese sesioni egzistion ateher shfaq ne menu pjeesen Logout Shfaq Kontaktet etj.
					if(isset($_SESSION['logged_in']) ){ 
					echo "<li><a href=\"?faqe=logout\">Logout</a></li>\n";
					echo "<li><a href=\"?faqe=shfaqkontaktet\">Shfaq kontaktet</a></li>\n";
					}
					else{
					echo "<li><a href=\"?faqe=login\">Login</a></li>\n";
					}
?>

					<li><a href="?faqe=shtolajm">Shto lajme</a></li>
  
</ul>
</div>
</div>
</div>