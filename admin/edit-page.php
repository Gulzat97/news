<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php' ?>

<div class="main">
	<div class="main-holder">
		

		<form action="save.php" class="post-edit-form single-post">
			<label for="post-title">Заголовок</label>
				<input type="text" name="post-title">
			<label for="post-desc">Описание</label>
				<input type="text" name="post-desc">
			<label for="post-content">Контент</label>
				<textarea name="post-content" contenteditable="true">
					
					<!--Этот код должен работать, если создают новый пост -->
			
					<h1 style="text-align: center;">Header TEXT</h1>

					<figure class="easyimage easyimage-full header-image">
						<img alt="" src="/img/1.jpg" width="1000" />
						<figcaption>Description</figcaption>
					</figure>

					<!-- В другом случае нужно вставить сюда контент изменяемого поста -->
			
				</textarea>


			<button type="submit" class="btn-submit btn-submit-post">Сохранить</button>

		</form>


	</div>
</div>

<script src="/ckeditor/ckeditor.js"></script>
<script>
	editor = CKEDITOR.replace('post-content', {
		extraPlugins: 'autogrow',
		autoGrow_minHeight: 500,
		allowedContent: true,
		width: '100%',
		height: 1000,
	});

	editor.addCommand("addPostHeader", {
	    exec: function(edt) {
	        editor.insertHtml( 'sasas' );
	    }
	});

	editor.ui.addButton('SuperButton', { // add new button and bind our command
	    label: "Add Simple Post Header",
	    command: 'addPostHeader',
	    toolbar: 'insert',
	    icon: 'https://avatars1.githubusercontent.com/u/5500999?v=2&s=16'
	});

</script>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php' ?>
