<?php


echo validation_errors();

echo "<div id='reg'>";
echo "<h1 id='battlefield'> БОЙНО ПОЛЕ</h1>";
echo "<h1> Нямаш профил? Регистрирай се!</h1>";
echo form_open('login/index');

echo"<p>Въведи потребител</p>";
echo form_input('username');

echo"<p>Въведи парола</p>";
echo form_password('password');

echo "<p id='sub'>".form_submit('submit', 'Регистрирай')."</p>";

echo form_close();

echo "<h1> Ако имаш потребителско име и парола: </h1>";

echo "<h2>".anchor('login/log-in', 'Вход')."</h2>";

echo "</div>";