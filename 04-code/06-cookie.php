<?php 

	//如何获取cookie中的值
	var_dump($_COOKIE);

	//服务器端之所以可以拿到浏览器端存储的cookie是因为
	//浏览器中的每一次请求，都会将当前域名下存储的所有的cookie信息发送给服务器！


	echo $_COOKIE["name"];

	//如何设置cookie
	setcookie("php", "houtai");

	//服务器端设置cookie并不是直接，将cookie存入浏览器
	//而是在请求的响应头中添加了一个内容Set-Cookie:php=houtai
	//浏览器在接收到响应之后，根据响应头中的内容，将cookie存入浏览器！
 ?>

 <img src=".sdf.jpg" />