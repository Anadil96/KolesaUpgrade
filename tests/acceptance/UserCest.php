<?php

use Page\Acceptance\mainPage;
use Step\Acceptance\AllStep;

class UserCest
{
    
    /**
     * для вызова функции создания пользователей
     */
    public function _before(\Step\Acceptance\AllStep $I)
    {
        $I->createUser();
    }

    /**
     * Функция для проверки работы с сортировкой на удаление и сохранение
     * @group 1
     */
    public function checkUsersModify(\Step\Acceptance\AllStep $I)
    {
        $I->amOnPage(mainPage::$URL);
        $I->wait(5);

        foreach($I->users as $val) {
            $I -> waitForText($val ['name']);
        }  

        $I->saveAndDelete();
        
        $I -> click(mainPage::$snapBtn);
        $I -> wait(5);

        $I->checkKilledUsers();

        $I->dontSeeInCollection('people', $I->killedBySnap);

    }

}