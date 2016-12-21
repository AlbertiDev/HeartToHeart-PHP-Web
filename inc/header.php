
<!-- Start WOWSlider.com BODY section -->
<?php include "wowS.php"?>
<!-- End WOWSlider.com BODY section -->


<div class="usr">
<div class="usrD">
<?php 
				//Nese sesioni egzistion i cili eshte krijuar me heret gjate logimit ne checklogin.php ateher shfaq disa te dhena nga sessioni
				//Ne kete forme te njejte mund ta ndalojme dhe qasjen ne fajlla te caktuar nese vizitori nuk eshte i kyqur
				if(isset($_SESSION['logged_in']) ){ 
					echo "<h4>Miresevini</h4>";
					echo ($_SESSION['name'] . " " . $_SESSION['name']);

					$visit = $_COOKIE['lastVisit']; 
					echo "<p>Vizita e juaj e fundit ishte me - ". $visit ."</p>";
				}

				?>
<!--<div class="usrM">Mirserdhe</div> -->
</div>
</div>