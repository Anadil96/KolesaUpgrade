<?php

use Codeception\Example;
use Page\Acceptance\SearchPage;

/**
 * класс для выбора элементов меню
 * @group test
 */
class SelectElementCest
{
    /**
     * функция для выбора категории в меню
     * @param Example $data
     * @dataProvider getElementsForClick
     */
    public function SelectCategory(AcceptanceTester $I, Example $data)
    {
        $I->amOnPage('');
        $I->waitForElement(SearchPage::$mainMenu);
        $I->click(sprintf(SearchPage::$menuElement, $data['categoryName']));
        $I->seeInCurrentUrl($data['categoryName']);
        $I->waitForText($data['header'], 10, SearchPage::$PageHeader);
        //var_dump($data['header']);*/
    }

    /**
     * функция для рандомного выбора 2 категорий
     */
    protected function getElementsForClick()
    {
    $input = array(
                /*array("categoryName" => "top", 
                    "header" => "Все потоки"),*/
                array("categoryName" => "develop", 
                    "header" => "Разработка"),
                array("categoryName" => "admin", 
                    "header" => "Администрирование"),
                array("categoryName" => "design", 
                    "header" => "Дизайн"),
                array("categoryName" => "management", 
                    "header" => "Менеджмент"),
                array("categoryName" => "marketing", 
                    "header" => "Маркетинг"),
                array("categoryName" => "popsci", 
                    "header" => "Научпоп")
                    );
    $rand_keys = array_rand($input,2);

        return   [
                $input[$rand_keys[0]],
                $input[$rand_keys[1]]
                ];
    
    }

}
