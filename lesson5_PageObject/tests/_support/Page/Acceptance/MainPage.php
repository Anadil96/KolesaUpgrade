<?php
namespace Page\Acceptance;

class MainPage
{
    /**
     * URL на начальную страницу
     */
    public static $URL = '';

    /**
     * селектор на каталог Dresses
     */
    public static $DressesCatalog = '#block_top_menu > ul > li:nth-child(2)';

    /**
     * селектор на подкаталог Dresses
     */
    public static $DressesSubCatalog = 'ul.submenu-container > li:nth-child(3) a[title="Summer Dresses"]';
    
    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
    
    /**
     * Поиск требуемого каталога
     */
    public function SearchCategory()
    {
        $this->acceptanceTester->seeElement(self::$DressesCatalog);
        $this->acceptanceTester->moveMouseOver(self::$DressesCatalog);
        
        return $this;
    }

     /**
     * Нажимает на выбранный подкаталог
     */
    public function clickSubCategory()
    {
        $this->acceptanceTester->click(self::$DressesSubCatalog);
        
        //return new SearchPage($this->acceptanceTester);
    }

}
