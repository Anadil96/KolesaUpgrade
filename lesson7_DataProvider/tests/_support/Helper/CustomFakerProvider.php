<?php

namespace Helper;
use Faker\Provider\Base;

/**
 * Класс для работы с функцией получения номера карты
 */
class CustomFakerProvider extends Base
{
    /**
     * Возвращает номер карты
     */
    public function getCardNumber()
    {
        $cards = [
            9874565656565655, 
            2313231232323133, 
            3123434243243444,
        ];

        return $cards[array_rand($cards)];
    }

}
