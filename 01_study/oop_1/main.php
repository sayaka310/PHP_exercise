<?php

require_once __DIR__ .  '/User.php';

$bob = new User('Bob', 21 );

echo $bob->selfIntroduction();