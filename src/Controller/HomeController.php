<?php

namespace App\Controller;

use RedBeanPHP\R;

class HomeController extends AbstractController
{
    public function index()
    {
        $this->render('home/index');
    }

    public static function readProject()
    {
        $projects = R::find('project', $_SESSION['user']->id);
        foreach ($projects as $project) { ?>
            <div class="project">

            </div> <?php
        }
    }

    public function createProject()
    {
        if ($this->isFormSubmitted()) {
            $user = R::findOne('user', 'id=?', [$_SESSION['user']->id]);
            $project = R::dispense('project');
            $project->title = $this->sanitizeString($this->getField('title'));
            $project->task = 'Nouvelle Tâche';
            $user->ownProjectList[] = $project;

            R::store($user);
            $this->render('home/index');
            exit();
        }
    }

    public function createTask()
    {

    }
}
