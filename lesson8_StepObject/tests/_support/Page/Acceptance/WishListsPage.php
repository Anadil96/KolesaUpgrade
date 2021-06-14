<?php

namespace Page\Acceptance;

/**
 * Класс для стрнаницы избранных продуктов
 */
class WishListsPage
{
     /**
     * Страница cо списком избранных товаров
     */
    public static $URL = '?fc=module&module=blockwishlist&controller=mywishlist';

    /**
     * Селектор количества добавленных товаров
     */
    public static $qty = '#block-history .align_center';

    /**
     * Селектор кнопки удалить из избранных
     */
    public static $deleteButton = '.icon-remove';

    /**
     * Селектор блока с информацией о товарах
     */
    public static $historyOfWishedItems = '//*[@id="block-history"]';
    
}
