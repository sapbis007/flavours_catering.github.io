<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Our Menus</title>
<script>
if(screen.width<1500)
	document.write('<link rel="stylesheet" href="style/style3.css"/>');
else
	document.write('<link rel="stylesheet" href="style/style2.css"/>');
</script>
<style>
.menu_body
{
	margin-left:15px;
	margin-right:15px;
	margin-top:250px;
	border-top: inset .5px #CCFFFF;
}
.menu_body h3
{
	color: #0090d5;
    font-family:"Comic Sans MS", cursive;
    letter-spacing: 2px;
    text-align: center;
    text-transform: uppercase;
	font-size:20px;
}
.menu_body p
{
	color:#C00;
	font-family:"Comic Sans MS", cursive;
	font-size:15px;
}
.menu_body img
{
	width:450px;
	height:400px;
}
</style>
</head>

<body>
<div class="wrap">
	<header>
    	<img src="img/logo.png"/>
		<h1><?php include("header.php"); ?></h1>
	</header>
   
    <nav>
    	<?php include("navigation.php"); ?>
    </nav>
    <div class="menu_body" align="center">
    	<h3>WELCOME DRINKS</h3>
        	<img src="img/soft-drinks-orange-juice-and-coke-glasses-with-straw-durham-durham-DEHCXX.jpg" />
        	<p>MOCKTAIL COUNTER</p> 
			<p>VICTORIA COUNTER</p> 
			<p>FUIRTS COUNTER</p> 
			<p>FRESH JUICE COUNTER</p> 
 			<p>SOFT DRINKS COUNTER</p> 
  			<p>PINEAPPLE BOLOOSAM</p> 
			<p>MANGO LASSI</p> 	
        <h3>STARTER</h3>
        	<img src="img/Fast-Food-Bar-B-Que-Wallpapers-1140x600.jpg" />
        	<p>CHICKEN RESHMI KABAB</p>
            <p>CHICKEN TIKKA KABAB</p>
            <p>CHICKEN HARIWALI KABAB</p>
            <p>CHICKEN LOLYPOP</p>
            <p>CHICKEN DRUMSTICK</p>
            <p>CHICKEN PAKORA</p>
            <p>MUTTON KHASTA KABAB</p>
            <p>MUTTON KIMA BOWL</p>
            <p>FISH FINGER</p>
            <p>FISH BUTTER BOWL</p> 
        <h3>HI TEA</h3>
        	 <img src="img/MarmaladepantryAfternoonTea2.JPG.jpg" />
        	 <p>COFFEE</p>
             <p>TEA</p> 
        <h3>MAIN COURSE</h3>
        	<img src="img/chole-recipe-main-course-recipes1.jpg" />
        	<p>AMRITSARI KULCHA</p>
            <p>MASALA KULCHA</p>
            <p>TAWA TAWANCHI</p>
            <p>JHAL FREEZI</p>
            <p>JAFRIAN PALOU</p>
            <p>DOM PALOU</p>
            <p>BANGLA PALOU</p>
            <p>FISH HARIWALI TANDOOR </p>
            <p>MUTTON DO-PIAJA</p>
            <p>MUTTON CHILLY</p>    
        <h3>DESERT</h3>
        	<img src="img/rasgulla.jpg" />
        	<p>RAJBHOG</p>
            <p>KESARIABHOG</p>
            <p>KAMALABHOG</p>
            <p>MITHA PAN</p>
            <p>BENARASHI PAN</p>
            <p>ICE CREAM</p>  
    </div>
</div>
</body>
</html>