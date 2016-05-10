<!-- loop row data -->
	<?php while ($row = mysql_fetch_array($query)): ?>
	<div class="item" id="item-<?php echo $row['id']?>">
		<h2>
			<span class="num"><?php echo $row['id']?></span>
			<span class="name"><?php echo $row['first_name'].' '.$row['last_name']?></span>
		</h2>
		<p><?php echo $row['film_info']?></p>
	</div>
	<?php endwhile?>

	<!--page navigation-->
	<?php if (isset($siguiente)): ?>
	<div class="nav">
		<a href='index.php?p=<?php echo $siguiente?>'></a>
	</div>
	<?php endif?>