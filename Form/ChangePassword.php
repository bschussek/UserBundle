<?php

namespace FOS\UserBundle\Form;
use FOS\UserBundle\Model\User;

class ChangePassword extends ResetPassword
{
    /**
     * @var string
     */
    public $current;

    public function process()
    {
        $this->user->setPlainPassword($this->new);
        $this->userManager->updateUser($user);
    }
}
