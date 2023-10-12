<?php
declare(strict_types=1);
namespace App_Core;
class Validator {
    public static function Password(string $password, int $min = 1, int $max = INF): bool {
        $password = trim($password);
        if (strlen($password) > $min && strlen($password) < $max && preg_match('/[a-z]/', $password) && preg_match('/[A-Z]/', $password) && preg_match('/[0-9]/', $password)) {
            return true;
        }
        return false;
    }
    public static function Email(string $email): bool {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return strlen($email) >= 9 && strlen($email) <= 60;
        }
        return false;
    }
}
?>