<?php

it('loads the home page', function () {
    $this->get('/')
        ->assertStatus(200)
        ->assertSee('Express Quotations');
});
