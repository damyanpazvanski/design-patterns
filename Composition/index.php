<?php

$classname = function ($file) {
    $path  = __DIR__ . '/' . $file . '.php';
    if (file_exists($path)) {
        include $path;
    }
};

spl_autoload_register($classname);

$lessons = [];

$timedCostStrategy = new TimedCostStrategy();
$fixedCostStrategy = new FixedCostStrategy();

$lessons[] = new Lecture(4, $timedCostStrategy);
$lessons[] = new Lecture(1, $timedCostStrategy);
$lessons[] = new Seminar(3, $fixedCostStrategy);

/**
 * @var ALesson $lesson
 */
foreach ($lessons as $lesson) {
    print 'Lesson charge: ' . $lesson->cost() . "<br>";
    print 'Lesson charge type: ' . $lesson->chargeType() . "<br><br>";
}
