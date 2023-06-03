<?php
include "db.php";

class Company extends Db implements Table
{
    public $tblname = "company";
    
    public function createtbl()
    {
        $sql = "CREATE TABLE IF NOT EXISTS $this->tblname(
            id int primary key auto_increment,
            company_name text,
            founder text,
            address text,
            phone number,
            year_made number)";

    $this->initialize();
    $this->sql($sql);
    }

    public function insert($company_name, $founder, $address, $phone, $year_made)
    {
        $insert = "INSERT INTO $this->tblname(id, company, model, horsepower, price)
        VALUES(NULL,$company_name, $founder, $address, $phone, $year_made)";
        $this->sql($insert);
    }

    public function fetch_company()
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