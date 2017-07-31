<?php
// Foo.class.php

class Foo
{
    public function __construct()
    {
        echo 'A Foo is created', PHP_EOL;
        echo 'and the current dir is ', __DIR__;
    }
}


