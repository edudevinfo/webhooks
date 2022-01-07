<?php

file_put_contents('webhook.log', json_decode($_POST), true);

exec("git pull");
