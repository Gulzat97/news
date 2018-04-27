<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Кыргызстан</title>
	<link rel="stylesheet" href="/css/single-post.css">
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link rel="stylesheet" href="/css/admin.css">
</head>
<body>
	
	<header>
		<div class="header-holder">
			<a class="logo" href="/">
				<i>LOGO</i>
			</a>

			<div class="admin-header">
				<span>name@domain.com</span>
				<a href="/">Выйти</a>
			</div>
		</div>
	</header>
	

	<div class="main">
		<div class="main-holder">
			<div class="posts">
				<a href="#" class="add-new-post">
					<i class="fa fa-plus-circle"></i>
				</a>
				<?php
					for($i = 0; $i < 2; $i++) {
						echo
							"<div class='post'>
							
								<a href='post.php'>
									<img class='post-img' src='/img/$i.jpg' alt=''>
								</a>
								<div class='post-text'>
									<a href='/edit-post.php'>
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


								<div class='admin-bar'>
									<a href='#'>
										<i class='fa fa-close admin-delete'></i>
									</a>
									<a href='/edit-post.php'>
										<i class='fa fa-pencil admin-edit'></i>
									</a>
								</div>
								

							</div>";
					}
						
				?>
				
			</div>
			
		</div>
	</div>
	

	<?php require_once 'inc/footer.php' ?>
