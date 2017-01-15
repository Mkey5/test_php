<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 22.10.2016 г.
 * Time: 18:29 ч.
 */

    /* http_build_query() - Generates a URL-encoded query string from
    *the associative (or indexed) array provided. */

    $data = array('foo'=>'bar',
        'baz'=>'boom',
        'cow'=>'milk',
        'php'=>'hypertext processor');

    echo http_build_query($data) . "\n";
    echo http_build_query($data, '', '&amp;');

    echo "\n";

    // reading files

    // if we have a file with name names.txt

    $content = file_get_contents("name.txt"); //returns a string
    var_dump($content);

    echo "\n";

    $lines = file('name.txt'); // returns an array of strings , splitted line by line from the file
    var_dump($lines);

    // Loop through our array, show HTML source as HTML source; and line numbers too.
    foreach ($lines as $line_num => $line) {
        echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
    }


?>