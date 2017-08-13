<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bai14</title>
</head>
<body>
	<h2>Ngà ngố</h2>
	<!-- <?php
		for ($i=0; $i <	100 ; $i++) { 
			# code...
			?>
			<h2>vong lap thu: <?php echo $i;?></h2>
			<?php
		}
	?> -->
	<?php 
		$name='Ngà ngố';
		$age=25;
		//toán tử cộng ép kiểu về dạng số +
		//phép trừ -
		//phép cộng chuỗi .
		//phép chia /
		//toán tử chia lấy dư %;
		//0+25
		echo $name-$age;
		//cộng chuỗi thì ép tất cả về chuỗi
		//''kiểu ký tự: không thể in giá trị biến
		//""kiểu chuỗi: có thể in giá trị biến
		//nhận biết ký tự đặc biệt trong chuỗi bằng cách thêm dấu \
		//nhận biết ký tự đặc biệt trong chuỗi bằng cách thêm dấu \'
		$a=array();
	 	$a=[];
	 	$a=[1,2,3,4,5];
	 	// bỏ index ở element có key(tên vd name);
	 	// 
	 	$b=['name'=>'thien','age'=>15,100,200];
	 	// dừng lại có die
	 	var_dump($b['name']);die;
	 	echo 123;
	 	//aad mot phan tử trong mảng bằng array rỗng;
	 	$a[]=300;
	 	var_dump($a);die;
	 ?>

	<!-- mở ra php đóng php -->
</body>
</html>