<?php
	function AddConnectFilmRap($idphim,$idrap){
		global $conn ;
		$sql="insert into phim_rap(idphim,idrap) value(".$idphim.",".$idrap.")";
		$conn->exec($sql);
	}
	function AddSuatChieu($idFilmVSRap,$idphong,$thoigian){
		global $conn ;
	    $sql ="insert into suatchieu(thoigian,idphim_rap,idphongchieu) value('".$thoigian."', ".$idFilmVSRap." , ".$idphong.")";
	    $conn->exec($sql);
	}
	function addphim($tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$thoiluong,$noidung,$trangthai,$anhphim,$trailer,$banner,$ngaychieu,$rating)
	{
		global $conn ;
		$sql= "INSERT INTO phim (tenphim,tuoi,theloai,quocgia,dienvien,daodien,thoiluong,noidung,trangthai,anhphim,trailer,banner,ngaychieu,rating) VALUES ('$tenphim','$tuoi','$theloai','$quocgia','$dienvien','$daodien','$thoiluong','$noidung','$trangthai','$anhphim','$trailer','$banner','$ngaychieu','$rating')";
		$conn->exec($sql);
	}
	function addphong($tenphong,$idrap)
	{
		global $conn ;
		$sql= "INSERT INTO phongchieu (tenphong,idrap) VALUES ('$tenphong', '$idrap')";
		$conn->exec($sql);
	}
	function addrap($tenrap,$diachi,$idtinhthanh)
	{
		global $conn ;
		$sql= "INSERT INTO rap (tenrap, diachi, idtinhthanh) VALUES ('$tenrap', '$diachi', '$idtinhthanh')";
		$conn->exec($sql);
	}
?>