<?php

class SearchCest
{
    /*
     * Проверить поиск тексту и количество найденных товаров
     */
    public function checkSearchByText(FunctionalTester $I)
    {
        $SearchBoxCSS = '#searchbox';
        $SearchBoxXPath = '//*[@id="searchbox"]';
        $SearchInputBoxCSS1 = '#search_query_top';
        $SearchInputBoxXPath1 = //*[@id="search_query_top"]
        $SearchInputBoxCSS2 = '.search_query';
        $SearchInputBoxXPath2 = '//input[contains(@class,"search_query")]';
        $SearchButtonCSS = '#searchbox > button';                       //'form>button.btn'
        $SearchButtonXPath = '//form[@id="searchbox"]/button';          // '//form/button[contains(@class,"btn")]'   
        $SearchButtonXPath2 = 'button[@class="btn btn-default button-search"]';
        $CountElementCSS = 'ul.product_list>li';                        //li.ajax_block_product
        $CountElementXPath = '//li[contains(@class,"ajax_block_product")]';
        
        $I->amOnPage('');
        $I->seeElement('#searchbox');
        $I->click('#searchbox');
        $I->seeElement('#search_query_top'); //
        $I->fillField('#search_query_top','Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('li.ajax_block_product',5);
    }
}
