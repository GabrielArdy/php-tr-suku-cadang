<?php
class Connection
{
    public $hostname = '127.0.0.1';
    public $dbname = 'db_tr';
    public $username = 'root';
    public $password = '';

    public $data;

    public function __construct()
    {
        $this->data = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
    }
}
