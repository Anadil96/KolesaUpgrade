<?php

use Page\Acceptance\LoginPage;

/**
 * Класс для проверки авторизации
 */
class LoginCest
{
    /**
     * Проверить авторизацию заблокированого пользователя
     */
    public function checkLockedLogin(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);

        $I->amOnPage(LoginPage::$URL);
        $loginPage->fillUsernameField()
            ->fillPasswordField()
            ->clickSubmit();
        $I->waitForElement(LoginPage::$errorMessage);
        //$I->wait(2);
        $loginPage->clickErrorButton();
        $I->waitForElementNotVisible(LoginPage::$errorMessage);
        //$I->wait(2);
    }
}
