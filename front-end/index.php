<?php require_once 'inc/header.php' ?>
<?php require_once 'inc/slider.php' ?>
	

	<div class="main">
		<div class="main-holder">
			<div class="posts">
				<?php
					for($i = 0; $i < 5; $i++) {
						echo
							"<div class='post'>
								<a href='post.php'>
										<img class='post-img' src='/img/$i.jpg' alt=''>
								</a>
								<div class='post-text'>
									<a href='/post.php'>
										<h2 class='post-title'>
											Рыбатекст " . ($i + 1) . "
										</h2>
									</a>
									
									<div class='post-intro'>
										Значимость этих проблем настолько очевидна, что
										начало повседневной работы по формированию
										позиции требуют от нас анализа системы обучения
										кадров, соответствует насущным потребностям.
									</div>
									<div class='post-date'>
										27/05/2017
									</div>
								</div>
							</div>";
					}
						
				?>
				
			</div>
			
		</div>
	</div>
	

<?php require_once 'inc/footer.php' ?>
