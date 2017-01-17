<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class AutoCompleteTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $one = seed('User',['name'   => 'juan', 'email'  => 'juamru-97@hotmail.com']);
        $two = seed('User',['name'   => 'johan', 'email'  => 'johisdev@hotmail.com']);
        $three = seed('User',['name'   => 'jose', 'email'  => 'jose@hotmail.com']);



        $this->get('/autocomplete/users?user=JUAN')
        ->seeStatusCode(200)
        ->seeJsonEquals([
            [
                'id'     => $one->id,
                'name'   => 'juan',
                'email'  => 'juamru-97@hotmail.com'
            ]
        ]);

        $this->get('/autocomplete/users?user=jo')
            ->seeStatusCode(200)
            ->seeJsonEquals([
                [
                    'id'     => $two->id,
                    'name'   => 'johan',
                    'email'  => 'johisdev@hotmail.com'
                ],
                [
                    'id'     => $three->id,
                    'name'   => 'jose',
                    'email'  => 'jose@hotmail.com'
                ]
            ]);
    }
}
