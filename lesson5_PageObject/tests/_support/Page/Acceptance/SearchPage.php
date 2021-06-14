<?php
namespace Page\Acceptance;

class SearchPage
{
    /**
     * URL на страницу поиска
     */
    public static $URL = '?id_category=11&controller=category';

    /**
     * селектор на выбранную кнопку в виде таблицы
     */
    public static $GridSelected = 'li.selected#grid';
    
    /**
     * селектор таблицы поиска
     */
    public static $TableView = '.product_list.row.grid';

    /**
     * селектор на кнопку список
     */
    public static $ListButton = '#list';

    /**
     * селектор списка поиска
     */
    public static $ListView = '.product_list.row.list';
    
    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
    
    /**
     * проверка на выбранный режим таблицы
     */
    public function searchGridSelected()
    {
        $this->acceptanceTester->waitForElement(self::$GridSelected);

        return $this;
    }

     /**
     * проверка отображения в виде таблицы
     */
    public function searchTableView()
    {
        $this->acceptanceTester->waitForElement(self::$TableView);

        return $this;
    }

    /**
     * нажимает на выбор отображения в виде списка
     */
    public function clickListView()
    {
        $this->acceptanceTester->click(self::$ListButton);

        return $this;
    }

    /**
     * проверяет отображение в виде списка
     */
    public function searchListView()
    {
        $this->acceptanceTester->waitForElement(self::$ListView);

        return $this;
    }

}
