<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function(Browser $browser) {

            $html = $browser->visit('https://www.coingecko.com/en')
                            ->element('div')
                            ->getAttribute('innerHTML');

           // now in $html you have HTML inside div.content element
        });

         // $html = $this->browser->visit('https://www.coingecko.com/en')
         //            ->element('body')
         //            ->getAttribute('innerHTML');
    }
}
