<?php

// .

$user = find_user_by_username($root);

if ($user && password_verify($password, $user['password'])) {
    // log the user in
    session_regenerate_id();
    $_SESSION['user_id'] = $user['id'];
} else {
    echo 'Invalid username or password';
}