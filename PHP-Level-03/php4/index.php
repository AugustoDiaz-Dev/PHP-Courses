<?php
// Data Types - Typecastig
// PHP is dynamically typed, happens at runtime
declare(strict_types=1);

# 4 Scalar Types
    # bool 
    echo '--- Boolean ---'.'<br/>';
    $completed = true; 
        // integers 0 -0 = false
        // floats 0,0 -0,0 = false
        // '' = false
        // '0' = false
        // [] = false
        // null = false
        var_dump($completed).'<br/>';
        is_bool($completed).'<br/>';

    # int 
    echo '--- Integer ---'.'<br/>';
    // The size depends if the system if 32 or 64 bits
    echo(PHP_INT_MAX).'<br/>';
    echo(PHP_INT_MIN).'<br/>';
    echo(PHP_INT_SIZE).'<br/>';
    $score = 10;
    $hexadecimal = 0x2a;
    echo $hexadecimal.'<br/>';
    $binary = 0b11;
    echo $binary.'<br/>';


    # float 
    echo '--- Float ---'.'<br/>';
    echo (PHP_FLOAT_MAX).'<br/>';
    echo (PHP_FLOAT_MIN).'<br/>';
    $price = 15.40;
    $exponential = 13.5e3;

    echo $exponential.'<br/>';
    echo floor($price).'<br/>';
    echo ceil($price).'<br/>';

    echo NAN.'<br/>';
    echo log(-1).'<br/>';

    echo INF.'<br/>';
    echo PHP_FLOAT_MAX * 2 .'<br/>';
    var_dump(is_infinite($exponential));
    var_dump(is_finite($exponential));
    var_dump(is_nan($exponential));
    var_dump(is_nan(log(-1)));

    # string
    // With double quotes you can have variables, with single quotes no.
    echo '<br/>'. '--- String ---'.'<br/>';
    $name = 'Augusto';

    echo $completed .'<br/>';
    echo $score .'<br/>';
    echo $price .'<br/>';
    echo $name .'<br/>';

    echo gettype($completed).'<br/>';
    var_dump($price).'<br/>';

    $my_variable = 1;
    // Heredoc ""
    // Varibles will be printed
    $text = <<<TEXT
    Line 1 $my_variable
    Line 2
    Line 3
    TEXT;
    echo nl2br($text).'<br/>';

    // Nowdoc ''
    // Varibles won't be printed
    $text = <<<'TEXT'
    Line 1 $my_variable
    Line 2
    Line 3
    TEXT;

    echo nl2br($text).'<br/>';

# 4 Compound Types
    # array
    echo '--- Array ---'.'<br/>';
    $items = [1,2,3, 'something', true];
    print_r($items).'<br/>';
    $programmingLanguages = ['PHP', 'Java', 'Python'];
    $programmingLanguages1 = array('JavaScript', 'Rust', 'C++');
    echo $programmingLanguages[0].'<br/>';
    var_dump(isset($programmingLanguages[0])).'<br/>'; // Returns boolean
    echo '<pre>';
    print_r($programmingLanguages).'<br/>';
    echo '</pre>';
    echo count($programmingLanguages).'<br/>';
    array_push($programmingLanguages, 'C++', 'C', 'Go');

    // custom keys
    $programmingLanguages2 = [
        'php' => '8.0',
        'python' => '3.9',
        'javascript' => [
            'creator' => 'Brendan Eich',
            'extension' => 'none',
            'website' => 'none',
            'isOpenSource' => '1',
            'versions' => [
                ['version' => 'ES1', 'release' => '1997'],
                ['version' => 'ES2', 'release' => '1998'],
            ],
        ]
    ];
    echo '<pre>';
    print_r($programmingLanguages2).'<br/>';
    echo '</pre>';
    echo $programmingLanguages2['php'].'<br/>';

    echo $programmingLanguages2['javascript']['website'].'<br/>';
    echo $programmingLanguages2['javascript']['versions'][0]['release'].'<br/>';

    $array = ['a' => 1, 'b' => null];
    var_dump(array_key_exists('b', $array)).'<br/>';
    var_dump(isset($array['b'])).'<br/>';

    # object
    # callable
    # interable

#2 Special Types
    # resource
    # null
    // null constant 
    $null = null;
    var_dump($null === null).'<br/>';
    echo $null.'<br/>';


    // Type cohersion. PHP adapt the types dynamically
function sum(int $x, int $y) {
    return $x + $y;
}
echo sum(2, 3).'<br/>';


// Use strict types as much as you can. See the declaration in line 4
function sum1(float $a, float $b) {
    return $a + $b;
}
echo sum1(2, 2).'<br/>';

// Type casting
$c = (int)'5';

var_dump($c);
?>