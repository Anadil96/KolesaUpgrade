<?php

namespace Tests\Acceptance;

use Faker\Factory;
use Page\Acceptance\FillFormPage;

/**
 * Класс для заполения формы
 */
class FillFormCest
{
     /**
     * Заполнение полей с помощью Faker
     */
    public function checkFillForm(\AcceptanceTester $I)
    {
        $faker = Factory::create('ru_RU');
         
        $name = $faker->firstname;
        $lastName = $faker->lastName;
        $email = $faker->email;
        $phoneNumber = $faker->phoneNumber;
        $address = $faker->address;
        $city = $faker->city;
        $region = $faker->region;
        $postal = $faker->postcode;
        $securityCode = random_int(100,999);

        $I->amOnPage(FillFormPage::$URL);
        $I->fillField(FillFormPage::$firstName, $name);
        $I->fillField(FillFormPage::$lastName, $lastName);
        $I->fillField(FillFormPage::$email, $email);
        $I->fillField(FillFormPage::$phoneNumber, $phoneNumber);
        $I->fillField(FillFormPage::$address, $address);
        $I->fillField(FillFormPage::$city, $city);
        $I->fillField(FillFormPage::$state, $region);
        $I->fillField(FillFormPage::$postal, $postal);

        $I->click(FillFormPage::$paymentRadio);
        $I->waitForElement(FillFormPage::$cardPaymentForm);
        $I->fillField(FillFormPage::$cardFirstName, $name);
        $I->fillField(FillFormPage::$cardLastName, $lastName); 
        //$I->wait(10);
        $I->fillField(FillFormPage::$cardNumber, $I->getFaker()->getCardNumber());
        $I->fillField(FillFormPage::$ccv, $securityCode);
        $I->click(FillFormPage::$expirationMonth);
        $I->waitForElementVisible(FillFormPage::$expirationMonth);
        $I->click(FillFormPage::$expMonth);
        $I->click(FillFormPage::$expirationMonth);
        $I->waitForElementVisible(FillFormPage::$expYear);
        $I->click(FillFormPage::$expirationYear);
        $I->fillField(FillFormPage::$streetAddress, $address);
        $I->fillField(FillFormPage::$billingCity, $city);
        $I->fillField(FillFormPage::$billingState, $region);
        $I->fillField(FillFormPage::$billingPostal, $postal);
        $I->click(FillFormPage::$country);
        $I->waitForElementVisible(FillFormPage::$States);
        $I->click(FillFormPage::$States);
        $I->wait(10);
        $I->click(FillFormPage::$registerButton);
        $I->waitForText('Good job');
    }
}