<?php
namespace Step\Acceptance;

class AllStep extends \AcceptanceTester
{
    public const USERS_NMB = 10;
    protected $data;
    public $users = array();
    public $killedBySnap = array();
    public $DontKilledbySnap = array();

    /**
     * Функция для создания пользователей с фейкером
     */
    public function CreateUser()
    {
        $I = $this;
        $faker = $I->getFaker();

        for($i = 1; $i<=self::USERS_NMB; $i++)
        {
            $this->data = [
                'job' => $faker->company,
                'superhero' => $faker->boolean(),
                'skill' => $faker->word,
                'email' => $faker->email,
                'name' => $faker->firstname,
                'DOB' => $faker->date("Y-m-d"),
                'avatar' => $faker->imageUrl(),
                'canBeKilledBySnap' => $faker->boolean(70),
                'created_at' => $faker->date("Y-m-d"),
                'owner' => 'AAnadil',
            ];
            
            $I->haveInCollection('people', $this->data);
            $I->seeInCollection('people', $this->data);

            $user = $I -> grabFromCollection('people',$this->data);
            array_push($this->users, $user);

        }

    }
    /**
     * функция сортировки пользователей по флагу canBeKilledBySnap
     */
    public function saveAndDelete()
    {
        foreach($this->users as $snap) {
            if ($snap['canBeKilledBySnap']== true)
             {
                array_push($this->killedBySnap, $snap);
             }  
             else  
             {
                array_push($this->DontKilledbySnap, $snap);
             }   
            }
    }

    /**
     * проверка отображения удаленныхь и сохраненых пользователей
     */
    public function checkKilledUsers()
    {
        $I = $this;

        foreach($this->killedBySnap as $val) 
        {
            $I->dontSee($val ['name']); 
        }

        foreach($this->DontKilledbySnap as $val) 
        {
            $I->see($val ['name']);
        }

    }

    /*public function countUser()
    {
        $I = $this;
        $count = $I->grabCollectionCount('people', array('owner' => 'AAnadil'));
    }*/

    
}