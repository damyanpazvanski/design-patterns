<?php

$classname = function ($file) {
    $path  = __DIR__ . '/' . $file . '.php';
    if (file_exists($path)) {
        include $path;
    }
};

spl_autoload_register($classname);

$markers = [
    new RegexrMarker('/f.ve/'),
    new MatchMarker('five'),
    new MarkLogicMarker('$input equals "five"')
];

foreach ($markers as $marker) {
    print get_class($marker) . '<br>';
    $question = new TextQuestion('How many beans make five', $marker);

    foreach (['five', 'four'] as $response) {
        print  '    response: ' . $response . ': ';

        if ($question->mark($response)) {
            print 'well done <br>';
        } else {
            print 'never mind <br>';
        }
    }
}
