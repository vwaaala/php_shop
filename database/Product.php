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
    public function getData($table='product'): array
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $data = array();
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            $data[] = $item;
        }
        return $data;
    }

    /**
        GET SINGLE PRODUCT
     **/
    public function getOne($item_id, $table='product'): array
    {
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE id={$item_id}");
        $data = array();
        while ($item = mysqli_fetch_row($result))
        {
            $data['id'] = $item[0];
            $data['brand'] = $item[1];
            $data['name'] = $item[2];
            $data['price'] = $item[3];
            $data['image'] = $item[4];
            $data['created_at'] = $item[5];
        }
        return $data;
    }
}