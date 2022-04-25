<?php

class Cart
{
    public $db = null;

    public function __construct(DBcontroller $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    /**
        * insert data in cart table
        * takes array params
     **/
    public function insertIntoCart($params = null, $table = 'cart')
    {
        if ($this->db->con != null) {
            if ($params != null) {
                // get column name
                $columns = implode(',', array_keys($params));
                // get values
                $values = implode(',', array_values($params));
                // create sql statement
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                // execute sql statement
                return $this->db->con->query($query_string);
            }
        }
    }

    /**
        insert array in cart table
     **/
    public function addToCart($product_id, $user_id)
    {
        if(isset($user_id)&&isset($product_id))
        {
            $params = array("user_id"=>$user_id,"product_id"=>$product_id);
            // callback for data insertion
            $result = $this->insertIntoCart($params);
            if($result)
            {
                // RELOAD current page
                header('Location'.$_SERVER['PHP_SELF']);
            }
        }
    }

}