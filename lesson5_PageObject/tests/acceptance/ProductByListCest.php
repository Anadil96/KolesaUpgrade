<?php

use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

/**
 * Класс для проверки выбора просмотра поиска в виде списка
 */
class ProductByListCest
{
    /**
     * Проверка показа поиска списком
     */
    public function SearchProductByList(AcceptanceTester $I)
    {
        $mainPage = new MainPage($I);
        $searchPage = new SearchPage($I);

        $I->amOnPage(MainPage::$URL);
        $mainPage->SearchCategory()
            ->clickSubCategory();
        $searchPage->searchGridSelected()
            ->searchTableView()
            ->clickListView()
            ->searchListView();
        $I->wait(2);

    }
}
