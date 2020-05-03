<?php
		require '../../controllers/hotelController.php';

		$key=$_GET["key"];
	
		$hotels = searchHotel($key);
?>

<table>
	<?php
	
			foreach($hotels as $hotel)
                            {
                                echo "<tr>";
                                echo "<td>".$hotel["h_id"]."</td>";
                                echo "<td>".$hotel["status"]."</td>";
                                echo "<td>".$hotel["ref"]."</td>";
                                echo "<td>$".$hotel["price"]."</td>";
                                echo "<td>".$hotel["room_no"]."</td>";
                                echo "<td>".$hotel["details"]."</td>";
                                echo "<td>".$hotel["location"]."</td>";
                                echo "<td>".$hotel["count"]."</td>";
                                echo '<td><a href="bookHotel.php?id='.$hotel["h_id"].'" >Select</a>';
                                echo "</tr>";
                            }
		
	?>
</table>