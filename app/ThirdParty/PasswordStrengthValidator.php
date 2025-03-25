<?php

/**
 * @author Darko Todorić
 * @url https://github.com/darkotodoric/password-strength-validator
 */

namespace App\ThirdParty;

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
    }

    /**
     * Check password strength
     * @return bool
     * public function even($value, ?string &$error = null): bool
     */
    public function PasswordIsValid($value, ?string &$error = null): bool
    {
        $this->password = $value;
        if (!$this->isLongEnough()) {
            $this->errorMessage = "Password length must be at least {$this->minLength} characters long.";
            $error = $this->errorMessage;
            return false;
        }

        if ($this->requireSpecialChar && !$this->hasSpecialChar()) {
            $this->errorMessage = "Special characters required.";
            return false;
        }

        if ($this->requireNumber && !$this->hasNumber()) {
            $this->errorMessage = "Number required.";
            return false;
        }

        if ($this->requireUpperCase && !$this->hasUpperCase()) {
            $this->errorMessage = "Uppercase required.";
            return false;
        }

        if ($this->requireLowerCase && !$this->hasLowerCase()) {
            $this->errorMessage = "Lowercase required.";
            return false;
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
     * @return bool
     */
    private function isLongEnough(): bool
    {
        return mb_strlen($this->password) >= $this->minLength;
    }

    /**
     * @return bool
     */
    private function hasSpecialChar(): bool
    {
        return preg_match('/[\p{P}\p{S}]/', $this->password);
    }

    /**
     * @return bool
     */
    private function hasNumber(): bool
    {
        return preg_match('/[0-9]/', $this->password);
    }

    /**
     * @return bool
     */
    private function hasUpperCase(): bool
    {
        return preg_match('/[A-Z]/', $this->password);
    }

    /**
     * @return bool
     */
    private function hasLowerCase(): bool
    {
        return preg_match('/[a-z]/', $this->password);
    }
}
