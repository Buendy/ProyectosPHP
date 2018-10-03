<!DOCTYPE html>
<html>
<head>
	<title>tabla</title>
	<meta charset="utf-8">
	<style type="text/css">
		    table th {
      text-align: center;
    }
        table tr {
      text-align: center;
    }
        table td {
      text-align: center;
    }
	</style>
</head>
<body>
<?php $numero = $_POST['numero'];?>
<table class="egt">



<tr>
	<th> <?php echo $numero; ?> </th>
	<th>cuadrado</th>
	<th>cubo</th>
</tr>
<tr>
	<td><?php echo $numero+=1 ?></td>
	<td><?php echo pow($numero,2) ?></td>
	<td><?php echo pow($numero,3) ?></td>
</tr>
<tr>
	<td><?php echo $numero+=1 ?></td>
	<td><?php echo pow($numero,2) ?></td>
	<td><?php echo pow($numero,3) ?></td>
</tr>
<tr>
	<td><?php echo $numero+=1 ?></td>
	<td><?php echo pow($numero,2) ?></td>
	<td><?php echo pow($numero,3) ?></td>
</tr>
<tr>
	<td><?php echo $numero+=1 ?></td>
	<td><?php echo pow($numero,2) ?></td>
	<td><?php echo pow($numero,3) ?></td>
</tr>
<tr>
	<td><?php echo $numero+=1 ?></td>
	<td><?php echo pow($numero,2) ?></td>
	<td><?php echo pow($numero,3) ?></td>
</tr>
</table>

<br>
<a href="../index.php">Regresar al menú</a>	

</body>
</html>


