<?php

namespace FOS\UserBundle\Form;
use FOS\UserBundle\Model\User;
use FOS\UserBundle\Model\UserManagerInterface;

class ResetPassword
{
    /**
     * User whose password is changed
     *
     * @var User
     */
    public $user;

    /**
     * @var string
     */
    public $new;

    protected $userManager;

    public function __construct(User $user, UserManagerInterface $userManager)
    {
        $this->user = $user;
        $this->userManager = $userManager;
    }
}
