<!DOCTYPE html>
<html>
<body>
	
	<form method="POST" action="">
	Enter a  Number : <input type="number" name="num"> <input type="submit" value="submit"> <br>
	
	<?php
		$n = $_POST['num'];
		function facto($n){
			if($n == 1 or $n == 0) return 1;
		
		
		else{
			
			return $n*facto($n-1);
		
		}
		}
		
		echo "Factorial of your number is"." ".facto($n);
		
		?>
	  
	</form>
</body>+
</html>
