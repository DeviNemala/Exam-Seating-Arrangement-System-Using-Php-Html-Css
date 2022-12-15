<?php
include("../pdo.php");
$query="SELECT * FROM roomdetails";
$result=mysqli_query($con,$query);
$query1="SELECT * from title";
$result1=mysqli_query($con,$query1);
$temp=$result1->fetch_assoc();
$query3="SELECT * FROM students WHERE catg='A'";
$agroup=mysqli_query($con,$query3);
$query4="SELECT * FROM students WHERE catg='B'";
$bgroup=mysqli_query($con,$query4);

$var1=array();
while($row1=$agroup->fetch_assoc())
{
	array_push($var1,$row1['id']);
}

$var2=array();
while($row2=$bgroup->fetch_assoc())
{
	array_push($var2,$row2['id']);
}

?>
<html>
<head>
<meta charset="UTF-8">
<title>RGUKTSKLM EXAM CELL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style type="text/css">
	table{
		border: 1px solid black;
		margin-bottom: 70px;
	}
	td,th{
		border: 2px solid black;
		height: 40px;
	}
	th{
		font-size: 20px;
	}
</style>
</head>
<body>
<div class="container" style="padding-top:50px">
<h1 align="center">RGUKT SKLM SEATING ARRANGEMENT </h1>
</div>
<button class="btn-primary right" onclick="window.print();return false;" style="cursor:pointer;">Print</button>
<div class="container">
	<?php  
				while($row=$result->fetch_assoc())
				{

					?>
	<table class="text-center col-12">
		<tr>
			<th colspan="8">RAJIV GANDHI UNIVERSITY OF KNOWELDGE AND TECHNOLOGIES-SRIKAKULAM</th>
		</tr>
		<tr>
			<td colspan="6" style="font-size: 22px;"><?php echo $temp['title'];?></td>
			<td colspan="2" style="font-size: 22px;"><?php echo $temp['date'];?></td>
		</tr>
		<tr>
			<td>ROW/COLOUMN</td>
			<td>C-1</td>
			<td>C-2</td>
			<td>C-3</td>
			<td>&nbsp</td>
			<td>C-4</td>
			<td>C-5</td>
			<td>C-6</td>
		</tr>
        <tr>
        	<td>ROW/COLOUMN</td>
        	<td colspan="3">LEFT SIDE</td>
        	<td style="font-size: 28px;"><?php echo $row['name']; ?></td>
        	<td colspan="3">RIGHT SIDE</td>
        </tr>
        <tr>
        	<td>R-1</td>
        	<td><?php echo $var1[0];?><br>4F</td>
            <td><?php echo $var2[0];?><br>4F</td>
            <td><?php echo $var1[0];?><br>4F</td>
            <td>&nbsp</td>
            <td><?php echo $var2[0];?><br>4F</td>
            <td><?php echo $var1[0];?><br>4F</td>
            <td><?php echo $var2[0];?><br>4F</td>       	
        </tr>
        <tr>
        	<td>R-2</td>
        	<td><?php echo $var1[1];?><br>4F</td>
            <td><?php echo $var2[1];?><br>4F</td>
            <td><?php echo $var1[1];?><br>4F</td>
            <td>&nbsp</td>
            <td><?php echo $var2[1];?><br>4F</td>
            <td><?php echo $var1[1];?><br>4F</td>
            <td><?php echo $var2[1];?><br>4F</td>       	
        </tr>
        <tr>
        	<td>R-3</td>
        	<td><?php echo $var1[2];?><br>4F</td>
            <td><?php echo $var2[2];?><br>4F</td>
            <td><?php echo $var1[2];?><br>4F</td>
            <td>&nbsp</td>
            <td><?php echo $var2[2];?><br>4F</td>
            <td><?php echo $var1[2];?><br>4F</td>
            <td><?php echo $var2[2];?><br>4F</td>       	
        </tr>
        <tr>
        	<td>R-4</td>
        	<td><?php echo $var1[3];?><br>4F</td>
            <td><?php echo $var2[3];?><br>4F</td>
            <td><?php echo $var1[3];?><br>4F</td>
            <td>&nbsp</td>
            <td><?php echo $var2[3];?><br>4F</td>
            <td><?php echo $var1[3];?><br>4F</td>
            <td><?php echo $var2[3];?><br>4F</td>       	
        </tr>
        <tr>
        	<td>R-5</td>
        	<td><?php echo $var1[4];?><br>4F</td>
            <td><?php echo $var2[4];?><br>4F</td>
            <td><?php echo $var1[4];?><br>4F</td>
            <td>&nbsp</td>
            <td><?php echo $var2[4];?><br>4F</td>
            <td><?php echo $var1[4];?><br>4F</td>
            <td><?php echo $var2[4];?><br>4F</td>       	
        </tr>
	</table>
<?php
				}
	?>
</div>

</body
</html>