<?php
// test/unit/model/UserDbTest.php
include(dirname(__FILE__) . '/../../bootstrap/Propel.php');

$t = new lime_test(1);
$t->comment('->save()');

$user= create_user();
$user->save();

$t->ok(is_int($user->getStatusId()), 'int status');

function create_user($defaults = array())
{
    $user = new Users();
    $user->fromArray(array_merge(array(
        'name'         => 'Konan',
        'status_id'    => 1,
    ), $defaults), BasePeer::TYPE_FIELDNAME);

    return $user;
}