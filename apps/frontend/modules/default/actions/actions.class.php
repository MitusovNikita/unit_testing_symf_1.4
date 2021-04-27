<?php

/**
 * default actions.
 *
 * @package    symfony1.4
 * @subpackage default
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class defaultActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
//        $mailer = sfContext::getInstance()->getMailer();
//
//        print_r($mailer);

    }
    public function executeUser(sfWebRequest $request)
    {
        $criteriaUsers = new Criteria();
        $criteriaUsers->addAscendingOrderByColumn(UsersPeer::ID);

        $this->users = UsersPeer::doSelect($criteriaUsers);
    }
    public function executeTest()
    {
        require_once ROOT.'/../test/bootstrap/unit.php';

        $t = new lime_test(1);

        /*
         * ok($test)
         * is($value1, $value2)
         * isnt($value1, $value2)
         * like($string, $regexp)
         * unlike($string, $regexp)
         * is_deeply($array1, $array2)
         *
         * fail()
         * pass()
         * skip($msg, $nb_tests)
         * todo()
         * comment($msg)
         * */

        die;
    }
}
