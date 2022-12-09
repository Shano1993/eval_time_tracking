<?php

namespace App\Controller;

use RedBeanPHP\R;

class HomeController extends AbstractController
{
    public function index()
    {
        $this->render('home/index');
    }

    /**
     * @return void
     */
    public static function readProject(): void
    {
        $user = R::findOne('user', 'id=?', [$_SESSION['user']->id]);
        foreach ($user->ownProjectList as $project) {?>
            <div class="project">
                <i class="fa fa-trash time"></i>
                <h2><?= $project->title . " ID = " . $project->id ?></h2>
                <div class="task">
                    <form action="/index.php?c=home&a=create-task&id=<?=$project->id?>" method="post">
                        <input type="text" name="taskName" id="taskName">
                        <input type="submit" name="save" value="Ajouter la tâche">
                    </form>
                </div>
                <div class="divView">
                    <div class="divRightLeft">
                        <i class="fa fa-calendar time"></i>
                        <span class="Date Time">Date Time</span>
                    </div>
                    <div class="divRightLeft">
                        <i class="fa fa-clock-o time"></i>
                        <span class="Total Time">Total Time</span>
                    </div>
                </div>
            </div> <?php
        }
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

    public function createTask()
    {

    }
}
