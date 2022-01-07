<?php

file_put_contents('webhook.log', $_POST);

$var = exec("git pull");

file_put_contents('exec.log', $var);
