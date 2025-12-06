<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class FetchRetElevators extends DuskTestCase
{
    public function testFetchElevators()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://www.ret.nl/home/reizen/omleidingen-verstoringen.html')
                ->pause(5000);

            $html = $browser->element('#panel-omleidingen-Lift')->getAttribute('outerHTML');

            dump($html);
        });
    }
}
