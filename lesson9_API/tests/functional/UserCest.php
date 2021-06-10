<?php

use Faker\Factory;

/**
 * Класс для проверки создания, изменения и удаления пользователя
 */
class UserCest
{

    public static $defaultSchema = [
        'job'       => 'string',
        '_id'       => 'string',
        'email'     => 'string',
        'superhero' => 'boolean',
        'name'      => 'string',
        'owner'     => 'string'
    ];

    /**
     *Константа для изменения и удаления пользователя 
     */
    public const UpdateName = 'NameUpdated';

    /**
     * Проверка на создание пользователя
     * @group 1
     */
    public function CheckUserCreate(\FunctionalTester $I)
    {
        $faker = Factory::create('ru_RU');

        $UserDate = [
            'email' => $faker->email,
            'owner' => 'AAnadil',//.$faker->userName,
            'job'   => $faker->company,
            'name'  => $faker->name
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $UserDate);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $I->sendGet('people', $UserDate);
        $I->seeResponseMatchesJsonType(self::$defaultSchema);
    }

    /**
     * Проверка изменения данных пользователя
     * @group 2
     */
    public function CheckUserUpdate(\FunctionalTester $I)
    {
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendGet('people', ['owner' => 'AAnadil']);
        $I->seeResponseCodeIsSuccessful();

        $UserID = implode($I->grabDataFromResponseByJsonPath('0._id'));
        $url = 'human?_id='.$UserID;
        //var_dump($UserID);

        $I->sendPut($url, ['name' => self::UpdateName]);
        $I->seeResponseContainsJson(['nModified' => '1']);
        $I->sendGet('people', ['owner' => 'AAnadil']);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['name' => self::UpdateName]); 
    }

    /**
     * Проверка удаления данных пользователя
     * @group 3
     */
    public function CheckUserDelete(\FunctionalTester $I)
    {
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendGet('people', ['owner' => 'AAnadil']);
        $I->seeResponseCodeIsSuccessful();
        
        $UserID = implode($I->grabDataFromResponseByJsonPath('0._id'));
        $url = 'human?_id='.$UserID;
 
        $I->sendDelete($url);
        $I->seeResponseContainsJson(['deletedCount' => '1']);
        $I->sendGet('people', ['owner' => 'AAnadil']);
        $I->seeResponseCodeIsSuccessful();
        $I->dontSeeResponseContainsJson(['name' => self::UpdateName]);
    }
    
}
