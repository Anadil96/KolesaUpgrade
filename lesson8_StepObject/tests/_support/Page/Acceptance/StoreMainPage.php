<?php
namespace Page\Acceptance;

/**
 * класс страницы магазина
 */
class StoreMainPage
{
    
    /**
     * Урл главной страницы магазина
     */
    public static $URL = '';

    /**??
     * Локатор блока с товарами
     */
    public static $centerBlock = '#center_column';

    /**
     * Селектор карточки товара
     */
    public static $productCard = '#homefeatured > li:nth-child(%s)';

    /**
     * Селектор кнопки быстрого просмотра товара
     */
    public static $quickViewButton = '#homefeatured > li:nth-child(%s) .quick-view';

    /**
     * Локатор формы быстрого просмотра
     */
    public static $productView = '#index > div.fancybox-overlay.fancybox-overlay-fixed > div > div';
   
    /**
     * Селектор iframe
     */
    public static $iframe = '.fancybox-iframe';
    
    /**
     * Селектор кнопки добавления товара в избранное
     */
    public static $addButton = '#wishlist_button';

    /**
     * Селектор модалки с сообщением об успешном добавлении товара
     */
    public static $successMessageFrame = '.fancybox-opened';

    /**
     * Селектор кнопки закрыть iframe
     */
    public static $closeFrame = '.fancybox-close';

    /**
     * Селектор кнопки закрыть для модалки с сообщением об успешном добавлении товара
     */
    public static $closeSuccesFrame = '.fancybox-item';
    
    /**
     * Селектор кнопки личного кабинета
     */
    public static $Account = '.account';

    /**
     * Сообщение после добавления товара в избранное
     */
    public static $successMessage = 'Added to your wishlist.';

      /**??
       * Селектор кнопки избранного на странице товаров
       */
    public static $cartListButton = '//a[@title="View my shopping cart"]';

}
