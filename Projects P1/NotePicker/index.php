<?php
	include 'header.php';
?>

<div class="container">
	<div class="align-center">
		<form action="search.php" method="POST"> <br>
			<input type="text" name="search" placeholder="Search">
			<button type="submit" name="submit">Search</button>
		<a href="upload2.php">Add new article</a><br><br>
		</form>
	</div>


	<h2>All articles:</h2>


	<div class="article-container">
	<?php
		$sql = "SELECT * FROM `article`";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);
		if ($queryResult > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='article-box'>";
					echo "<h3>".$row['a_title']."</h3>";
					echo "<p>".$row['a_text']."</p>";
					echo "<p>".$row['a_date']."</p>";
		    echo "</div>";
			}
		} else {
			echo "There are no articles.";
		}
	?>
	</div>
</div>

</body>
</html>
