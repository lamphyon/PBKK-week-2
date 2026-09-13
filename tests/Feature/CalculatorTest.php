<?php

test('calculator form page loads', function () {
    $response = $this->get('/hitung');

    $response->assertOk();
    $response->assertSee('IP1');
    $response->assertSee('IP2');
});

test('calculator result route accepts numeric values', function () {
    $response = $this->get('/hitung/3.5/4.0');

    $response->assertOk();
    $response->assertSee('3.50');
    $response->assertSee('4.00');
});
