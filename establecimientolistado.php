<?php include_once('header.html') ?>


<?php 
	require 'scripts/db.php';
	
	$sql = $db->prepare('select * from establecimiento');
	//$sql->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
//	$statement->execute(array(':name' => "Jimbo"));
	//$row = $statement->fetch(); 
	$sql->execute();
	?>
	
<table id="pattern-style-a" summary="Listado">
<thead>
    	<tr>
			<th scope="col">ID</th>
        	<th scope="col">Calle</th>
            <th scope="col">Barrio</th>
			<th scope="col">UV</th>
            <th scope="col">MZ</th>
			<th scope="col">LAT</th>
            <th scope="col">LNG</th>
        </tr>
  </thead>
  <tbody>
<?php
	echo '<tr>';
	while ($row = $sql->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
      $data = '<td>'.$row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td><td>" . $row[6] . "</td></tr><tr>";
	  print $data;
    }
	echo '</tr>';
?>
</tbody>
</table>

<?php include_once('footer.html') ?>

