<?php

use JasiriLabs\Calculator\Calculator;

test('can return hello world', function () {
    $calc = new Calculator;
        $this->assertEquals('Hello World', $calc->test());
});

test('can sum numbers', function () {
    $calc = new Calculator;    
    $this->assertEquals(3, $calc->add(1,2));
});

test('can use facade', function () {
    $calc = new Calculator;    
    $this->assertEquals(3, $calc->add(1,2));
});
