<?php

namespace tests\codeception\api\functional;

use tests\codeception\api\FunctionalTester;

/* @var $scenario \Codeception\Scenario */

$I = new FunctionalTester($scenario);

// Asegurando que retorna (Ok) código 200
$I->sendGET("users");
$I->seeResponseCodeIs(200);

// Asegurando que retorna un Json
$I->sendGET("users");
$I->seeResponseIsJson();

// Asegurando que retorna estado Mérida
$I->sendGET("users/1");
$I->canSeeResponseContainsJson(['username' => 'miguel.cervantes']);
