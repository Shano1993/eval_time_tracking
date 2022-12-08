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
            $user->mail = filter_var($this->getField('mail'), FILTER_SANITIZE_EMAIL);
            $user->username = trim($this->sanitizeString($this->getField('username')));
            $user->password = $this->getField('password');
            $user->role = 'user';

            if ($user->password === $this->getField('passwordRepeat')) { ?>
                <div id="success">L'inscription est validée</div> <?php
                $user->password = password_hash($this->getField('password'), PASSWORD_DEFAULT);
                $insertId = R::store($user);
            }
            else { ?>
                <div id="error">Les mots de passe ne correspondent pas</div> <?php
                $this->render('user/inscription');
                exit();
            }
            $this->render('user/connection');
            exit();
        }
        $this->render('user/inscription');
    }

    public function connection() {
        if ($this->isFormSubmitted()) {
            $mail = $this->sanitizeString($this->getField('mail'));
            $password = $this->getField('password');
            $user = R::findOne('user', 'mail=?', [$mail]);
            if (null !== $user) {
                if (password_verify($password, $user->password)) {
                    $_SESSION['user'] = $user;
                    $this->render('home/index');
                    exit();
                }
                else { ?>
                    <div id="error">L'adresse email n'existe pas ou le mot de passe est incorrect</div> <?php
                    $this->render('user/connection');
                    exit();
                }
            }
        }
        $this->render('user/connection');
    }

    public function logout()
    {
        session_destroy();
        $this->render('user/connection');
        exit();
    }
}
