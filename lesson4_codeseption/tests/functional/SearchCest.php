<?php

class SearchCest
{
    /*
     * Проверить поиск тексту и количество найденных товаров
     */
    public function checkSearchByText(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#searchbox');
        $I->click('#searchbox');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top','Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('li.ajax_block_product',5);
    }
}
