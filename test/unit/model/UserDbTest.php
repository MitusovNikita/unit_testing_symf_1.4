<?php
// test/unit/model/UserDbTest.php
include(dirname(__FILE__) . '/../../bootstrap/Propel.php');

$t = new lime_test(1);

$t->comment('->getName()');
$user = UsersPeer::doSelectOne(new Criteria());
$t->ok(is_string($user->getName()), 'is string');