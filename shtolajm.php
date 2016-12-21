<div class="rrethina">
<?php 
if(isset($_SESSION['logged_in']) ){ 

?>

        
            
       
            <div id="headLine">
                <p>Shto nje lajm</p>
            </div>
            <div id="forma">
                <form name="myForm" method = "POST" action = "inc/page_insert.php" onsubmit="return validateForm()">
                    <label  for="titulli">Titulli:</label><input type="text" id="titulli" name="emri"/><br/>
                    <label  for="pershkrimi">Pershkrimi:</label> <textarea name="pershkrimi" id="pershkrimi"></textarea><br/>
                   
                 
					<input type="submit" value="Send">
                </form>
            </div>    

	<script type="text/javascript">
		function validateForm(){
			
			var titulli = document.getElementById("titulli").value;
			var pershkrimi = document.getElementById("pershkrimi").value;
		
			
			if(titulli==""){
				
				alert ("Shkruaj titull");
				return false;
				
			}
			else if(pershkrimi==""){
				
				alert ("Shkruaj pershkrim");
				return false;
				
				
			}
		}
		
		</script>
	<?php
	}
	else{
		
		echo 'Duhet te jeni i kyqur qe te mund te shikoni kontatet nga databaza';
		
	}
	?>
	</div>
	<?php include "inc/meny.php"?>
