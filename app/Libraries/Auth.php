<?php

namespace App\Libraries;

class Auth
{

    //private $session;

    public function __construct()
    {
        // Load the session library
        //$this->session = \Config\Services::session();
    }

    public function isLoggedIn()
    {
        // Check if the user is logged in
        return session()->has('user') ?? false;
    }


    public function checkOtp()
    {
        // Check if the user has verified their OTP
        return session()->get('user')['otp_verified'] ?? false;
    }

    /**
     * Check if the user is logged in and has verified their OTP.
     * If both conditions are met, return true. Otherwise, return false.
     */
    public function isCompleteLoging(): bool
    {
        // Set the user session data
        return ($this->isLoggedIn() && $this->checkOtp()) ? true : false;
    }


    public function getUser()
    {
        // Get the logged-in user
        return session()->get('user');
    }
}
