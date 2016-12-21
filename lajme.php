<div class="rrethina">
<?php
	$selektimi = 'SELECT id, titulli , pershkrimi FROM faqet where kategori="Lajme"';
	$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
	
	while($row = mysql_fetch_row($result))
	{
		
		list($id, $titulli, $pershkrimi)=$row;
		echo'<h2>'.$titulli.'</h2>';
		echo'<p>'.$pershkrimi.'</p>';
		echo'<hr>';
	}
	
	?>
	</div>
	<?php include "inc/meny.php"?>