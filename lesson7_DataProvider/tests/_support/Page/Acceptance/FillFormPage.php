<?php
namespace Page\Acceptance;

/**
 * класс для работы с формой для заполнения
 */
class FillFormPage
{
    /**
     * Урл страницы формы
     */
    public static $URL = '';

    /**
     * Локатор имени
     */
    public static $firstName = '#firstName';

    /**
     * Локатор фамилии
     */
    public static $lastName = '#lastName';

    /**
     * Локатор email
     */
    public static $email = "//*[@type = 'email']";

    /**
     * Локатор Номера телефона
     */
    public static $phoneNumber = '#phoneNumber';

    /**
     * Локатор поля Адресс
     */
    public static $address = '#address';

    /**
     * Локатор поля Город
     */
    public static $city = '#city';

    /**
     * Локатор поля региона
     */
    public static $state = '#state';

    /**
     * Локатор поля Почтового индекса
     */
    public static $postal = '#postal';

    /**
     * Локатор поля имени в форме card
     */
    public static $cardFirstName = '#input_32_cc_firstName';

    /**
     * Локатор поля фамилии в форме card
     */
    public static $cardLastName = '#input_32_cc_lastName';

    /**
     * Локатор поля Номер карты
     */
    public static $cardNumber = '#input_32_cc_number';

    /**
     * Локатор поля ccv карты
     */
    public static $ccv = '#input_32_cc_ccv';

    /**
     * Локатор поля месяца истечения срока годности карты
     */
    public static $expMonth = '#input_32_cc_exp_month';
   
    /**
     * Селектор месяца
     */
    public static $expirationMonth = '#input_32_cc_exp_month>option:nth-child(4)';

    /**
     * Селектор года
     */
    public static $expirationYear = '#input_32_cc_exp_year>option:nth-child(9)';

    /**
     * Селектор country
     */
    public static $States = '#input_32_country>option:nth-child(3)';
    
    /**
     * Локатор поля год истечения срока годности карты
     */
    public static $expYear = '#input_32_cc_exp_year';

    /**
     * Локатор поля Address
     */
    public static $streetAddress = '#input_32_addr_line1';

    /**
     * Локатор поля Город
     */
    public static $billingCity = '#input_32_city';

    /**
     * Локатор поля региона
     */
    public static $billingState = '#input_32_state';

    /**
     * Локатор поля Почтового кода
     */
    public static $billingPostal = '#input_32_postal';

    /**
     * Локатор поля Страна
     */
    public static $country = '#input_32_country';

    /**
     * Локатор кнопки Зарегестрирвоать
     */
    public static $registerButton = '#input_36';

    /**
     * Cелектор оплаты картой
     */
    public static $paymentRadio = '#input_32_paymentType_credit';

    /**
     * Локатор данных для оплаты картой
     */
    public static $cardPaymentForm = '#creditCardTable';

}