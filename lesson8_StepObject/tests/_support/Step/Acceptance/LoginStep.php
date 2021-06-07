<?php
namespace Step\Acceptance;

use AcceptanceTester;
use Page\Acceptance\LoginPage;

class LoginStep extends \AcceptanceTester
{
    public function login(){
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->waitForElement(LoginPage::$loginForm);
        $I->fillField(LoginPage::$email, LoginPage::EMAIL);
        $I->fillField(LoginPage::$password, LoginPage::PASSWORD);
        $I->click(LoginPage::$signInButton);
    }
}