<?php

include __DIR__ . '/ICommand.php';
include __DIR__ . '/InputHandler.php';
include __DIR__ . '/FireCommand.php';
include __DIR__ . '/JumpCommand.php';
include __DIR__ . '/MoveUnitCommand.php';

$person = new Person(0, 0);
$inputHandler = new InputHandler($person);

$state = $inputHandler->handleInput('down');
$inputHandler->handleInput('down');
$inputHandler->handleInput('left');
$inputHandler->handleInput('left');
$inputHandler->handleInput('up');
$inputHandler->handleInput('up');
$inputHandler->handleInput('right');
$inputHandler->handleInput('right');
$inputHandler->handleInput('right');
$inputHandler->handleInput('up');

var_dump($state->undo()->person->getPosition());
var_dump($state->undo()->person->getPosition());
var_dump($state->undo()->person->getPosition());
var_dump($state->undo()->person->getPosition());
var_dump($state->undo()->person->getPosition());
var_dump($state->undo()->person->getPosition());
var_dump($state->undo()->person->getPosition());
var_dump($state->undo()->person->getPosition());
var_dump($state->undo()->person->getPosition());
