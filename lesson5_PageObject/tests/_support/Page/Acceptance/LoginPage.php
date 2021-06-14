<?php
namespace Page\Acceptance;

class LoginPage
{
    /**
     * Заблокированный логин пользователя
     */
    public const USERNAME = 'locked_out_user';

    /**
     * Пароль для заблокированного пользователя
     */
    public const PASSWORD = 'locked_out_user';


    /**
     * URL авторизации
     */
    public static $URL = '';

    /**
     * Селектор поля для ввода логина пользователя
     */
    public static $loginInput = '#user-name';

    /**
     * Селектор поля для ввода пароля пользователя
     */
    public static $passwordInput = '#password';

    /**
     * Селектор кнопки для авторизации
     */
    public static $loginButton = '#login-button';

    /**
     * Селектор окна ошибки
     */
    public static $errorMessage = '.error-message-container.error';

    /**
     * Селектор кнопки закрытия окна ошибки
     */
    public static $errorButton = '.error-button';
    
    
    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;


    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Заполняет поле логином пользователя
     */
    public function fillUsernameField()
    {   
        $this->acceptanceTester->fillField(self::$loginInput, self::USERNAME);
        return $this;
    }

    /**
     * Заполняет пароль пользователя
     */
    public function fillPasswordField()
    {   
        $this->acceptanceTester->fillField(self::$passwordInput, self::PASSWORD);
        return $this;
    }

    /**
     * Нажимает кнопку авторизации
     */
    public function clickSubmit()
    {   
        $this->acceptanceTester->click(self::$loginButton);
    }

    /**
     * Нажимает кнопку закрытия окна ошибки
     */
    public function clickErrorButton()
    {   
        $this->acceptanceTester->click(self::$errorButton);
    }

}
