<?php
// archive.php
// 要打包是需要在php.ini设置phar.readonly = off的，默认是on
$phar = new Phar('Foo.phar', 0, 'Foo.phar');
$phar->buildFromDirectory(__DIR__.'/Foo');