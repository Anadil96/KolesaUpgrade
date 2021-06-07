<?php

use Page\Acceptance\LoginPage;
use Page\Acceptance\StoreMainPage;
use Page\Acceptance\WishListsPage;

/**
 * Класс для тестирования функционала добавления товаров в избранное 
 */
class ProductCest
{

    public const PRODUCT_NMB = 2;
    
    /**
     * Действия до основного теста, вход в учетку
     */
    public function _before(\Step\Acceptance\LoginStep $I)
    {
        $I->login();
    }

    /**
     * Сравнение количества добавленных товаров
     */
    public function checkCountProducts(\Step\Acceptance\ShopStep $I)
    {
        $I->amOnPage(StoreMainPage::$URL);
        $I->addToWishlist();
        $I->scrollTo(StoreMainPage::$Account);
        $I->click(StoreMainPage::$Account);
        $I->seeInCurrentUrl(LoginPage::$myAccountUrl);
        $I->click(LoginPage::$WishlistButton);
        $I->seeInCurrentUrl(WishListsPage::$URL);
        $I->scrollTo(WishListsPage::$historyOfWishedItems);
        $countProductInWishList = $I->grabTextFrom(WishListsPage::$qty);
        $I->wait(5);
        $I->assertEquals(strval(self::PRODUCT_NMB), $countProductInWishList); 
    } 
/*
    /**
     * Действие после каждого теста
     * 
     * @param \AcceptanceTester $I
     */
    public function _after(\AcceptanceTester $I){
        $I->amOnPage(WishListsPage::$URL);
        $I->click(WishListsPage::$deleteButton);
        $I->acceptPopup();
        $I->wait(5);
        $I->click(LoginPage::$signOutButton);
        $I->waitForElementNotVisible(StoreMainPage::$Account);
    }
}
