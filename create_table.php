<?php 
	echo "<table>";
	echo "<tr><th></th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th></tr>";

	for ($row = 1; $row <= 10; $row++) {
		echo "<tr><th>$row</th>";
		for ($col = 1; $col <= 10; $col++) {
			echo "<td>".$row * $col."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>