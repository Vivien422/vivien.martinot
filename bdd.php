<?php
class Database 
{
    public $bdd;
    public function __construct()
    {
        $this->bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root');
    }
}