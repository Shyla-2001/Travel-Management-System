<!DOCTYPE html>
<html>
<head>
<style>
.p1
{
font-size:20px;
font-family:Cantal;
}
.ht
{
font-size:50px;
color:#800020;
text-align:center;
font-family:OCR A Std;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
</head>

<body style="background-color:#f6eabe;">
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<br>
<br>
<br>
<div style="height:50px"></div>
<div style="width:1200px; margin:auto" >

<div style="width:300px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:40px; color:#ff878d"><b><i>CATEGORY</i></b></td></tr>
<?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:10px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}
mysqli_close($cn);
?>

</table>

</div>

<div style="width:900px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="ht"><b><i><u>Welcome to Go Travel & Tourism Ltd</u></i></b></td></tr>
<tr><td class="paraText" width="900px"><p class="p1"><b>Go Travel & Tourism Ltd is unlike any other travel management company.<br></br> We provide a unique blend of customer service, innovative technology and tailored program development which drives exceptional value at every step of your journey through greater savings, improved efficiencies and maximum safety.<br></br>
At Go Travel & Tourism, we pride ourselves on going above and beyond industry expectations and in setting consistently new standards which reinforce our multi award-winning status.<br></br> Go Travel & Tourism is also accredited by the ATAS Code of Conduct.<br></br>

If your company is looking for a travel management solution which makes business travel more effective, reliable and enjoyable for every stakeholder, contact Go Travel & Tourism today.<br></br></b></p>
<img src="images/category.jpg" width="850" height="400">
</td><td style="background-image:url();align="right";background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:28px; " width="500px" height="350px" &nbsp;&nbsp;&nbsp; </div></td></tr></table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>