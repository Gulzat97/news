<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php' ?>
<form action="action.php" class="login-form">
	<h1 id="login">Вход</h1>
	<input type="email" placeholder="Почта" name="email-input" required>
	<input type="password" placeholder="Пароль" name="password-input" required>
	<label>
		<input type="checkbox" checked="checked" name="remember"> Запомнить меня
	</label>
	<button type="submit" class="btn-submit btn-submit-auth">Войти</button>
	<div class="auth-help">
		<a href="register.php">Регистрация</a> | <a href="#">Забыли пароль ?</a>
	</div>
</form>



