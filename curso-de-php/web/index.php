<?php

declare(strict_types=1);

var_dump(hash_file('sha256', 'Final_Mace_Descent.mp3'));


$hash = password_hash('1234', PASSWORD_ARGON2ID);

var_dump(password_verify('123', $hash));