<?php

class SearchProductCest
{
    /*
     * Проверить поиск определенного товара
     */
    public function checkSearchProduct(AcceptanceTester $I)
    {
        $SearchBlouseCSS1 = '#homefeatured>li:nth-child(2) img[alt="Blouse"]';
        $SearchBlouseXPath1 = '//ul[@id="homefeatured"]/li[2]';
        $SearchBlouseCSS2 = '#homefeatured > li:nth-child(2) > div > div.left-block > div';
        $SearchBlouseXPath2 = '//ul[@id="homefeatured"]/li[2]/div[//img[contains(@alt,"Blouse")]]';
        $SearchButtonCSS = '#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view'; 
        $SearchButtonXPath = '//*[@id="homefeatured"]/li[2]/div/div[1]/div/a[2]'; 
        $ModalWindowCSS =  '.fancybox-iframe';
        $ModalWindowXPath =  '//*[@class="fancybox-iframe"]';

        $I->amOnPage('');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.left-block > div');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div');
        $I->click('#homefeatured > li.ajax_block_product.col-xs-12.col-sm-4.col-md-3.last-item-of-mobile-line.hovered > div > div.left-block > div > a.quick-view');
        $I->waitForElementVisible('.fancybox-iframe');
        $I->switchToIFrame('.fancybox-iframe');
        $I->see('Blouse');
    }
}
