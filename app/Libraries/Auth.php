<?php

namespace App\Libraries;

class Auth
{

    private $session;

    public function __construct()
    {
        // Load the session library
        $this->session = \Config\Services::session();
    }

    public function isLoggedIn()
    {
        // Check if the user is logged in
        return $this->session->has('user');
    }

    public function getUser()
    {
        // Get the logged-in user
        return $this->session->get('user');
    }

    public function checkOtp()
    {
        // Check if the user has verified their OTP
        return $this->session->get('user')['otp_verified'] ?? false;
    }
}
