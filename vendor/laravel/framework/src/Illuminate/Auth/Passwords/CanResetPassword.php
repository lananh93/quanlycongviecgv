<?php

namespace Illuminate\Auth\Passwords;

trait CanResetPassword
{
    /**
     * Get the e-email address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }
}
