<div id="single-post-slider">
	<?php
		$titles = ['Ысык-Көл', 'Нарын', 'Талас', 'Бишкек', 'Ош', 'Жалал-Абад', 'Баткен'];
		for($i = 0; $i < count($titles); $i++) {
			echo 
			"<div class='single-post-slide'>
				<div class='image'>
					<img class='single-post-slide-img' src='/img/$i.jpg' alt=''>
				</div>
			</div>
			";
		}
	?>
</div>