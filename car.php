<?php

include "db.php";

class Car extends Db implements Table{
    public $tblname = "car";

    public function createtbl()
    {
        $sql = "CREATE DATABASE IF NOT EXISTS $this->tblname(
            id int primary key auto_increment,
            company text,
            model number,
            horsepower number,
            price number
            )";
        $this->initialize();
        $this->sql($sql);
    }

    public function insert($company, $model, $power, $price)
    {
        $insert = "INSERT INTO $this->tblname(id, company, model, horsepower, price)
        VALUES(NULL, $company, $model, $power, $price)";
        $this->sql($insert);
    }

    public function fetch_car()
    {
        $all = $this->sql("SELECT * FROM $this->tblname");
        return $all->fetch_all(MYSQLI_ASSOC);
    }

    public function delete_car($id)
    {
        return $this->sql("DELETE FROM $this->tblname WHERE id = $id");
    }
}
?>