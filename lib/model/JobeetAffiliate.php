<?php
// lib/model/JobeetAffiliate.php
class JobeetAffiliate extends BaseJobeetAffiliate
{
public function save(PropelPDO $con = null)
{
if (!$this->getToken())
{
$this->setToken(sha1($this->getEmail().rand(11111, 99999)));
}

return parent::save($con);
}

// ...
}