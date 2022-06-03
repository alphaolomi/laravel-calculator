<?php

use JasiriLabs\Calculator\CalculatorFacade as Calc;

test('can use facade', function () {;
    $this->assertEquals(3, Calc::add(1, 2));
});
