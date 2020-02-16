<?php


use fize\provider\express\Express;
use PHPUnit\Framework\TestCase;

class TestExpress extends TestCase
{

    public function testGetInstance()
    {
        $config = [
            'customer' => '10086',
            'key' => '123456'
        ];
        $express = Express::getInstance('KuaiDi100', $config);
        $bool = $express->query('159786456', 'yuantong');
        var_dump($bool);
        var_dump($express->getErrcode());
        var_dump($express->getErrmsg());
        var_dump($express->getState());
        var_dump($express->getDetails());
        self::assertTrue(true);
    }
}
