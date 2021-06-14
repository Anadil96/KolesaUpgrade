<?php
namespace Page\Acceptance;

/**
 * Класс страницы авторизации
 */
class LoginPage
{
    /**
     * Email для авторизации
     */
    public const EMAIL = 'testkolesaupgrade@mail.ru';

    /**
     * Пароль для авторизации
     */
    public const PASSWORD = 'testkolesaupgrade1';
    
    /**
     * урл страницы авторизации
     */
    public static $URL = '?controller=authentication&back=my-account';

    /**
     * Урл личного кабинета
     */
    public static $myAccountUrl = '?controller=my-account';

    /**
     * Селектор формы ввода имейла
     */
    public static $email = '#email';

    /**
     * Селектор формы ввода пароля
     */
    public static $password = '#passwd';

    /**
     * Селектор кнопки авторизации
     */
    public static $signInButton = '#SubmitLogin';

    /**
     * Страница авторизации
     */
    public static $loginForm = '#login_form';

    /**
     * Селектор кнопки My Wishlists
     */
    public static $WishlistButton = '.lnk_wishlist';

     /**
     * Селектор кнопки выхода из учетки
     */
    public static $signOutButton = '.logout';

}
