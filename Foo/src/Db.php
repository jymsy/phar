<?php
use \Illuminate\Database\Capsule\Manager as Capsule;


class DB
{
    protected $_capsule;

    private function __construct(array $config)
    {
        $this->_capsule = new Capsule();

        $this->_capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'database',
            'username'  => 'root',
            'password'  => 'password',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
    }

    public function setConfig()
    {
        Zd::getInstance()->load('goods')->getGoodsInfo();
    }

}
