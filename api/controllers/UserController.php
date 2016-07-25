<?php

namespace api\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\ForbiddenHttpException;

class UserController extends ActiveController
{
    public $modelClass = 'common\models\User';

}
