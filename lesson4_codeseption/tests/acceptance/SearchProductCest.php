<?php

class SearchProductCest
{
    /*
     * Проверить поиск определенного товара
     */
    public function checkSearchProduct(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.left-block > div');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div');
        $I->click('#homefeatured > li.ajax_block_product.col-xs-12.col-sm-4.col-md-3.last-item-of-mobile-line.hovered > div > div.left-block > div > a.quick-view');
        $I->waitForElementVisible('.fancybox-iframe');
        $I->switchToIFrame('.fancybox-iframe');
        $I->see('Blouse');
    }
}
