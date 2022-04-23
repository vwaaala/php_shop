<?php
// Product
class Product
{
    public $db = null;
    public function __construct(DBcontroller $db)
    {
        if(!isset($db->con)) return null;
        $this->db=$db;
    }

    /**
        fetch all data from product table
     **/
    public function getData($table='product')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $data = array();
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            $data[] = $item;
        }
        return $data;
    }
}