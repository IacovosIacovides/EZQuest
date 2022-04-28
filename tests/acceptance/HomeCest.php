<?php

class HomeCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('EZQuest');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
