<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php' ?>

<form action="action.php" class="register-form">
	<h1 id="register">Регистрация</h1>
	<input type="email" placeholder="Почта" name="email" required>
	<input type="password" placeholder="Пароль" name="password" required>
	<input type="password" placeholder="Повторите пароль" name="password-confirm" required>
	<button type="submit" class="btn-submit btn-submit-auth">Зарегистрироваться</button>
	<div class="auth-help">
		<a href="login.php">Вход</a> | <a href="#">Забыли пароль ?</a>
	</div>
</form>



<script src="/js/jquery-1.11.0.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>


