<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styl8.css?v=1"> 
<title>Nasz sklep komputerowy</title>
</head>
<body>
	<header>	
		<div class="menu">
			<ul>
			<li><a href="index.php">Główna</a></li>
			<li><a href="procesory.html">Procesory</a></li>
			<li><a href="ram.html">RAM</a></li>
			<li><a href="grafika.html">Grafika</a></li>
		</ul>
		</div>
		<div class="logo">
			<h2>Podzespoły komputerowe</h2>
		</div>
	</header>
	<div class="glowny">
		<h1>Dzisiejsze promocje</h1>
		<table>
			<tr>
				<th>NUMER</th>
				<th>NAZWA PODZESPOŁU</th>
				<th>OPIS</th>
				<th>CENA</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>

			</tr>
				<?php 
				 $conn=mysqli_connect("localhost","root","","sklep");
				 $sql="Select id,nazwa,opis,cena From podzespoly Where cena<1000";
				 $res=$conn->query($sql);
				 foreach($res as $ok){
				 	echo "<tr>"."<td>".$ok['id']."</td>"."<td>".$ok['nazwa']."</td>"."<td>".$ok['opis']."</td>"
				 	."<td class='forright'>".$ok['cena']."</td>"."</tr>";
				 };
				 $conn->close();
				?>
		</table>

	</div>

	<footer> 
		<div class="fo1">
			<img src="scalak.jpg" alt="promocje na procesory">
		</div>
		<div class="fo2">
			<h4>Nasz Sklep Komputerowy</h4>
			<p>Współpracujemy z hurtownią <a href="http://www.edata.pl/">edata</a></p>
		</div>
		<div class="fo3"><p>zadzwoń: 601 602 603</p></div>
		<div class="fo4"><p>Stronę wykonał: 05280300000</div>
	</footer>
</body>
</html>
