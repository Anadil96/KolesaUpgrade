<?php
namespace Step\Acceptance;

use Page\Acceptance\StoreMainPage;

/**
 * Класс для добавления товаров в wishlist
 */
class ShopStep extends \AcceptanceTester
{
    public const PRODUCT_NMB = 2;

    /**
     * Добавление нескольких товаров в wishlist
     */
    public function addToWishlist()
    {
        for($i = 1; $i <= self::PRODUCT_NMB; $i++)
        {
            $I = $this;

            $I->waitForElementVisible(sprintf(StoreMainPage::$productCard, $i));
            $I->moveMouseOver(sprintf(StoreMainPage::$productCard, $i));
            $I->waitForElementVisible(sprintf(StoreMainPage::$quickViewButton, $i));
            $I->click(sprintf(StoreMainPage::$quickViewButton, $i));
            $I->wait(10);
            $I->waitForElementVisible(StoreMainPage::$productView);
            $I->switchToIFrame(StoreMainPage::$iframe);
            $I->waitForElementVisible(StoreMainPage::$addButton);
            $I->click(StoreMainPage::$addButton);
            $I->waitForElementVisible(StoreMainPage::$successMessageFrame);
            $text = $I->grabTextFrom(StoreMainPage::$successMessageFrame);
            //var_dump($text);
            $I->assertEquals(StoreMainPage::$successMessage, $text);
            $I->click(StoreMainPage::$closeSuccesFrame);
            $I->switchToIFrame();
            $I->wait(5);
            $I->click(StoreMainPage::$closeFrame);
        }
    }
}