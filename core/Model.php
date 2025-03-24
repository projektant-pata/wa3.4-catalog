<?php
class Model extends Database {

    function __construct() {
        parent::__construct(DB_TYPE,DB_HOST,DB_NAME,DB_USER, DB_PASS);
        $this->exec('SET NAMES utf8');
    }

}