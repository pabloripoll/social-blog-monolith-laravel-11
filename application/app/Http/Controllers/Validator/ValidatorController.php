<?php

namespace App\Http\Controllers\Validator;

class ValidatorController
{
    public function limit($value, array $limit = []): mixed
    {
        $min = $limit[0] ?? 0;
        $max = $limit[1] ?? 1024;

        return strlen($value) < $min || strlen($value) > $max ? false : true;
    }

    public function id($value, array $limit = [1, 20]): mixed
    {
        if (! $this->limit($value, $limit) || $value < 1 || ! is_int($value)) {
            return null;
        }

        return (int) $value;
    }

    public function boolean($value)
    {
        if (! ($value == 1 || $value == 0 || $value === true || $value === false || $value === TRUE || $value === FALSE)) {
            return null;
        }

        return $value === 0 || $value === false || $value === FALSE ? boolval('false') : boolval('true');
    }

    public function number($value, array $limit = [0, 20]): mixed
    {
        if (! $this->limit($value, $limit) || ! is_numeric($value)) {
            return null;
        }

        return $value;
    }

    public function email(string $value, array $limit = [8, 64]): mixed
    {
        if (! $this->limit($value, $limit) || filter_var($value, FILTER_VALIDATE_EMAIL) === false) {
            return null;
        }

        return $value;
    }

    public function alias(string $value, array $limit = [0, 16]): mixed
    {
        if (! $this->limit($value, $limit) || ! preg_match('/[a-z0-9.-_]+/', $value)) {
            return null;
        }

        return $value;
    }

    public function password(string $value, array $limit = [8, 64]): mixed
    {
        if (! $this->limit($value, $limit) || ! preg_match("/^[A-Za-z0-9*$|@¿?¡!~·#%&()._\-\/ ]{8,32}$/", $value)) {
            return null;
        }

        return $value;
    }

    public function phone(string $value, array $limit = [0, 32]): mixed
    {
        if (! preg_match('/^[0-9+ \-]{9,32}$/', $value)) {
            return null;
        }

        return $value;
    }

    public function naming(string $value, array $limit = [0, 255]): mixed
    {
        if (! $this->limit($value, $limit) || ! preg_match('/[\\w?áéíóúÁÉÍÚÓñÑàèìòùÀÈÌÒÙçÇ.-]$/', $value)) {
            return null;
        }

        return $value;
    }

    public function char(string $value, array $limit = [0, 255]): mixed
    {
        if (! $this->limit($value, $limit) || ! preg_match('/[\\w?áéíóúÁÉÍÚÓñÑàèìòùÀÈÌÒÙçÇ¿¡!@+*!#$%&-]$/', $value)) {
            return null;
        }

        return $value;
    }

    public function text(string $value, array $limit = [0, 65535]): mixed
    {
        if (! $this->limit($value, $limit) || ! preg_match('/[\\w?áéíóúÁÉÍÚÓñÑàèìòùÀÈÌÒÙçÇ¿¡!@+*!#$%&-]$/', $value)) {
            return null;
        }

        return $value;
    }

    public function json(string $value, array $limit = [0, 65535]): mixed
    {
        if (! $this->limit($value, $limit) || ! json_validate($value)) {
            return null;
        }

        return $value;
    }

    public function datetime(string $value): mixed
    {
        if (\DateTime::createFromFormat('Y/m/d H:i:s', $value) !== false) {
            return null;
        }

        return $value;
    }

    public function token(string $value, array $limit = [64, 64]): mixed
    {
        if (! $this->limit($value, $limit) || ! ctype_alnum($value)) {
            return null;
        }

        return $value;
    }

    public function ip(string $value): mixed
    {
        if (! filter_var($value, FILTER_VALIDATE_IP)) {
            return null;
        }

        return $value;
    }

}
