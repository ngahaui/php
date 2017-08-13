<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method ="post">
		<input type="text" placeholder="nhập a" name="a"> <label for="">X <sup>2</sup>+</label>
		<input type="text" placeholder="nhập b" name="b"> <label for="">X =</label>
		<input type="text" placeholder="nhập c" name="c">
		<button type="submit">Tính</button>
	</form>
	<?php 
		if($_SERVER['REQUEST_METHOD']== 'POST'){
			$a=$_POST['a'];
			$b=$_POST['b'];
			$b=$_POST['c'];
			if($a==0){
				echo 'phuong trinh co nghiep la' . $c/$-b;
				if($b==0)
					echo 'phuong trinh co vo so nghiep' ;
			}
			else{
				$delta=
			}
		}
		
	?>
</body>
</html>
