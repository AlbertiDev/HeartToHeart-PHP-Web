<div class="rrethina">
<?php
if(isset($_SESSION['logged_in']) ){ 

	$selektimi = 'SELECT * from kontakti order by id desc';
	$result = mysql_query($selektimi) or die ('invalid query:'. mysql_error());
	echo '<table border=\'1px\' cellspacing=\'0\' cellpadding=\'0\'>'; 
echo '<h3>Kontaktet e listuara nga databaza</h3>';
echo '<tr>'; 
echo '<td><p>Emri </p></td>'; 
echo '<td><p>Email </p></td>';  
echo '<td><p>Radio Btn </p></td>'; 
echo '<td><p>Chek Box</p></td>'; 
echo '<td><p>Slt Menu </p></td>'; 
echo '<td><p>Komentet </p></td>'; 
echo '</tr>'; 

	while($row = mysql_fetch_array($result))
	{
		
		list($id, $emri, $email, $rdb, $ckb, $sltm, $komentet)=$row;
		echo '  <tr>'; 
		echo '<td>'.$emri.' </td>';  
		echo '<td>'.$email.' </td>'; 
		echo '<td>'.$rdb.' </td>'; 
		echo '<td>'.$ckb.' </td>';
		echo '<td>'.$sltm.' </td>'; 		
		echo '<td>'.$komentet.' </td>'; 
		echo '  </tr>'; 
	}
	
	echo '</table>';
	}
	else{
		
		echo 'Duhet te jeni i kyqur qe te mund te shikoni kontatet nga databaza';
		
	}
	?>
</div>
<?php include "inc/meny.php"?>