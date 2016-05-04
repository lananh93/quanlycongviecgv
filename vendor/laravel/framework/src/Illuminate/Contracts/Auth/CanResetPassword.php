<?php

namespace Illuminate\Contracts\Auth;

interface CanResetPassword
{
    /**
     * Get the e-email address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset();
}
