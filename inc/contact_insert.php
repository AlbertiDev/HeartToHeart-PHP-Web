<?php
		include('db_con.php');
		
		//Marrja e te dhenave nga kontakt forma
		$emri = $_POST['fname'];
		$email = $_POST['email'];
		$komentet = $_POST['msg'];
		
		$rdb = $_POST['rdo'];
		$ckb = implode(',',$_POST['ckb']);
		$sltm = $_POST['Field'];
		
		
		//Query per INSERT ne tabelen kontakti si dhe atributet te cilat do te insertohen
		$sql_insert ="INSERT INTO kontakti (emri, email, rdb, ckb, sltm, komentet)
				VALUE ('$emri', '$email', '$rdb','$ckb','$sltm', '$komentet')";
		
		$query=mysql_query($sql_insert);
		
		if($query)
		{
			//Shfaq nje mesazh qe te dhenat u rujten me sukses dhe ridrejto ne index.php pas 2 sekondave
			echo"<h1>Te dhenat u ruajten me sukses</h1>";
			header( "refresh:2; url=../index.php" );
			
			
		}
		else{
			
				echo"<h1>Te dhenat nuk ruajten</h1>" or die ('invalid query:'. mysql_error());
			
		}
		?>
	