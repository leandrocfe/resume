<?php

namespace Tests\Browser\site;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SiteTest extends DuskTestCase
{
    /**
     * Verificando se o container main foi carregado.
     *
     * @return void
     */
    public function testContainerExists()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/')
            ->assertPresent('.main-container');
        });
    }
}