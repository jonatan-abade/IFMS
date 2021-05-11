<?php
class Model
{
    protected $db;

    public function __construct()
    {
        try {
            $this->db = new PDO('pgsql:host=localhost;port=5433;dbname=postgres', 'postgres', 'postgres');
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        };
    }
}
