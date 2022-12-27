<?php
class Model {
    private $pdo;
    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost:1234;dbname=prixnoble;charset=utf8", "root", "");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }
    public function get_last()
    {
        $sql = "select * from nobels order by year desc limit 25";
        $res = $this->pdo->query($sql);
        $last = $res->fetchAll(PDO::FETCH_ASSOC);
        return $last;

    } 
    public function get_nb_nobel_prizes() {

        $sql = "select count(*) from nobels ";
        $res = $this->pdo->query($sql);
        $count = $res->fetchColumn();
        return $count;
    }
    public function get_nobel_prize_informations($id) {
        $sqlState = $this->pdo->query('SELECT * FROM nobels WHERE id='. $id);
        $user = $sqlState->fetchAll(PDO::FETCH_ASSOC);

            
        return $user;
    }



}








?>