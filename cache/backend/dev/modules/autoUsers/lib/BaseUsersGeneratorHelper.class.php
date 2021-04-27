<?php

/**
 * users module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage users
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseUsersGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'users' : 'users_'.$action;
  }
}
