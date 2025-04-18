<?php

namespace App\Libraries;


/**
 * @author Darko Todorić
 * @url https://github.com/darkotodoric/password-strength-validator
 */

class PasswordStrengthValidator
{
    /** @var string */
    private string $password;

    /** @var string */
    private string $errorMessage;

    /** @var int */
    private int $minLength;

    /** @var bool */
    private bool $requireSpecialChar;

    /** @var bool */
    private bool $requireNumber;

    /** @var bool */
    private bool $requireUpperCase;

    /** @var bool */
    private bool $requireLowerCase;

    /**
     * @param string $password
     * @param int $minLength
     * @param bool $requireSpecialChar
     * @param bool $requireNumber
     * @param bool $requireUpperCase
     * @param bool $requireLowerCase
     */
    public function __construct(
        string $password = '',
        int    $minLength = 8,
        bool   $requireSpecialChar = true,
        bool   $requireNumber = true,
        bool   $requireUpperCase = true,
        bool   $requireLowerCase = true
    ) {
        $this->password = $password;
        $this->minLength = $minLength;
        $this->requireSpecialChar = $requireSpecialChar;
        $this->requireNumber = $requireNumber;
        $this->requireUpperCase = $requireUpperCase;
        $this->requireLowerCase = $requireLowerCase;
        $this->errorMessage = '';
    }


    /**
     * Check password strength
     * @return bool
     * public function even($value, ?string &$error = null): bool
     */
    public function PasswordIsValid($value, ?string &$error = null): bool
    {

        $this->password = $value;

        $methods = get_class_methods($this);

        //dd($methods);

        foreach ($methods as $method) {
            if (
                $method != '__construct' &&
                $method != 'PasswordIsValid'
                && $method != 'getErrorMessage'
            ) {
                if (method_exists($this, $method) && is_callable([$this, $method])) {

                    //dump($method);

                    if (!$this->{$method}()) {
                        //dd($this);
                        $error = $this->errorMessage;
                        return false;
                    }
                }
            }
        }

        return true;
    }

    /**
     * Return the error message
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * Check if the password length is at least the minimum length
     * @return bool
     */
    private function isLongEnough(): bool
    {

        if (!(mb_strlen($this->password) >= $this->minLength)) {
            $this->errorMessage = "Password length must be at least {$this->minLength} characters long.";
            return false;
        }
        return true;
    }

    /**
     * Check if the password contains at least one special character
     * @return bool
     */
    private function hasSpecialChar(): bool
    {

        if ($this->requireSpecialChar && !preg_match('/[\p{P}\p{S}]/', $this->password)) {
            $this->errorMessage = "Special characters required.";
            return false;
        }
        return true;
    }

    /**
     * Check if the password contains at least one number
     * @return bool
     */
    private function hasNumber(): bool
    {
        if ($this->requireNumber && !preg_match('/[0-9]/', $this->password)) {
            $this->errorMessage = "Number required.";
            return false;
        }
        return true;
    }

    /**
     * Check if the password contains at least one uppercase letter
     * @return bool
     */
    private function hasUpperCase(): bool
    {
        if ($this->requireUpperCase && !preg_match('/[A-Z]/', $this->password)) {
            $this->errorMessage = "Uppercase required.";
            return false;
        }
        return true;
    }

    /**
     * Check if the password contains at least one lowercase letter
     * @return bool
     */
    private function hasLowerCase(): bool
    {
        if ($this->requireLowerCase && !preg_match('/[a-z]/', $this->password)) {
            $this->errorMessage = "Lowercase required.";
            return false;
        }
        return true;
    }
}
