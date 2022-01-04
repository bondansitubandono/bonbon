<?php
$url = 'http://10.5.53.43:1990/Products';
$data = file_get_contents($url); // put the contents of the file into a variable
$opendata = json_decode($data);
foreach ($opendata as $key => $value) {

}
?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <style>
  table {
   width: 100%; 
  }
  table tr td {
   padding: 1rem;
  }
 </style>
      </head>  
      <body>  
           <table>
	<tr>
	<td >id</td>
	<td >name</td>
	</tr>
	<?php
	foreach ($opendata as $key => $value) {
		echo '<tr>
		    <td>'.$value->product_name.'</td>
			<td>'.$value->product_price.'</td>
			<td></td>
			</tr>';
	}
	?>
</table>
 
      </body>  
 </html>  
