<?php

		include('db_con.php');
		
		$titulli = $_POST['emri'];
		$pershkrimi = $_POST['pershkrimi'];
		$kategori = "Lajme";
		
		
		$sql_insert ="INSERT INTO faqet (titulli, pershkrimi, kategori)
				VALUE ('$titulli', '$pershkrimi', '$kategori')";
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			
						//Shfaq nje mesazh qe te dhenat u rujten me sukses dhe ridrejto ne index.php
			echo"<h1>Te dhenat u ruajten me sukses</h1>";
			header( "refresh:2; url=../index.php?faqe=lajme" );
			
			
		}
		else{
			
				echo"<h1>Te dhenat nuk ruajten</h1>";
			
		}
		?>
	