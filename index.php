<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dowload File Drive Nhanh Gọn</title>
</head>
<body>
<?php
	require_once('functions.php');
	include_once('config.php');
	ini_set('user_agent', 
		'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36; 
		zh-CN;  //蓝奏云必须设置这个且保持不变才能拿到数据
		Nexus 4 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19');
	//屏蔽显示
    error_reporting(0);
    //允许所有域访问
	header("Access-Control-Allow-Origin: *");
	//设置中文
	header("Content-type:text/html;charset=utf-8");
	//传值为谷歌网盘的处理
	if (!empty($_GET['id'])){
		$id = $_GET['id'];
		google_drive($id);
		}
	//蓝奏云直链获取
	elseif(!empty($_GET['lz'])){
		$lz = $_GET['lz'];
		$direct_link = lzy($lz);
		if ($direct_link)
		{
			echo $direct_link;
		}
		else{
			echo "Không lấy được liên kết, vui lòng thử lại";
		}
	}
	//蓝奏云直链下载
	elseif(!empty($_GET['lzd'])){
		$lz = $_GET['lzd'];
		$direct_link = lzy($lz);
		if ($direct_link)
		{
			header("Location: $direct_link"); //直接跳转到下载链接
		}
		else{
			echo "Không lấy được liên kết, vui lòng thử lại";
		}
	}
	//360直链下载
	elseif(!empty($_GET['360'])){
		$id=$_GET['360'];
		$direct_link = link_360($id);
		echo $direct_link;
		header("Location: $direct_link"); //跳转到直链下载
	}
	else{
		if(empty($site_name)){
			$site_name = "http://dldrive.trungkien99.com";
		}
		echo "
		<h1>Đây là trang tải File GG Drive 1 nốt nhạc :V :)))))</h1>
                 <p>Nhập với định dạng sau:
		<br>
		<code>
		".$site_name."?id=ID File
		</code>
		<br>
		Đây là link mẫu nè :
		<br>
		<code>
		https://drive.google.com/open?id=1TSlvfrRrGrT8a_84iFDIkSwrxU_53D6T
		</code>
		<br>
		bạn copy dòng ?id=1TSlvfrRrGrT8a_84iFDIkSwrxU_53D6T và pate vào để tải đi he !!!
		<br>
		<code>
		".$site_name."?id=1TSlvfrRrGrT8a_84iFDIkSwrxU_53D6T
		</code></p>
		:Facebook của Kiên<a href=\"https://m.me/kiendct3d\"> https://m.me/kiendct3d >3 >3</a>
		<iframe src="https://www.nhaccuatui.com/mh/background/BURxkFIxJbzY" width="1" height="1" frameborder="0" allowfullscreen allow="autoplay"></iframe>

		";
	}
?>
</body>
