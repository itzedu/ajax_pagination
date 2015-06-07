<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<title>Pagination</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/app.js"></script>
	<style type="text/css">
		#partial {
			margin: 0;
			padding: 0;
		}

		ul {
			list-style-type: none;
		}
		ul li {
			display: inline;
			color: blue;
			text-decoration: underline;
			margin-right: 10px;
			cursor: pointer;
		}
	</style>
</head>
<body>
<div id="container">
	<div id="search">
		<form action="index.php/leads/get_leads" method="post">
			<p>
				<label>Name:</label>
				<input type="text" name="name">
			</p>
			<p>
				<label>From:</label>
				<input type="date" name="from">
			</p>
			<p>
				<label>To:</label>
				<input type="date" name="to">
			</p>
			<input id="number" type="hidden" name="page_number" value="">
			<input type="submit" value="Search">		
		</form>
	</div>
<div id="partial">
<?php 
  echo "<ul>";
  for ($i= 1; $i <= ceil($total/10) ; $i++) { 
    echo "<li>" . $i . "</li>";
  }
  echo "</ul>";
?>
	<div id="table">
		<table>
			<thead>
				<tr>
					<td>leads_id</td>
					<td>first name</td>
					<td>last name</td>
					<td>registered datetime</td>
					<td>email</td>
				</tr>
			</thead>
			<tbody>
<?php 
				foreach ($leads as $lead)
				{
?>				
				<tr>
					<td><?= $lead['id']?></td>
					<td><?= $lead['first_name']?></td>
					<td><?= $lead['last_name']?></td>
					<td><?= $lead['created_at']?></td>
					<td><?= $lead['email']?></td>
				</tr>
<?php  
				}
?>				
			</tbody>
		</table>
	</div>

</div>

</div>

</body>
</html>