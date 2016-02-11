<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

   /**
    * Define custom actions here
    */

  public function login($name, $password)
  {
    $I = $this;

    if ($I->loadSessionSnapshot('login')) {
      return;
    }

    $I->amOnPage('/wp/wp-login.php');
    $I->submitForm('#loginform', [
      'log' => $name,
      'pwd' => $password
    ]);

    $I->saveSessionSnapshot('login');
  }

}
