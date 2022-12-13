<?php

namespace App\Controller;

use RedBeanPHP\R;

class HomeController extends AbstractController
{
    public function index()
    {
        $this->render('home/index');
    }

    public function createProject()
    {
        if ($this->isFormSubmitted()) {
            $user = R::findOne('user', 'id=?', [$_SESSION['user']->id]);
            $project = R::dispense('project');
            $project->title = $this->sanitizeString($this->getField('title'));
            $user->ownProjectList[] = $project;
            R::store($user);
            $this->render('home/index');
            exit();
        }
    }
}
