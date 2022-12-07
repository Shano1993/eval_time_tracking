<?php

namespace App\Controller;

use RedBeanPHP\R;
use RedBeanPHP\RedException\SQL;

class UserController extends AbstractController
{
    public function index()
    {
        $this->render('home/index');
    }

    /**
     * @throws SQL
     */
    public function inscription() {
        if ($this->isFormSubmitted()) {
            $user = R::dispense('user');
            $user->mail = $this->sanitizeString($this->getField('mail'));
            $user->username = trim($this->sanitizeString($this->getField('username')));
            $user->password = $this->getField('password');
            $user->role = 'user';
            $id = R::store($user); ?>

            <div class="success">L'inscription est validée</div> <?php
            $this->render('user/connection');
            die();
        }
        $this->render('user/inscription');
    }

    public function connection() {
        $this->render('user/connection');
    }
}
