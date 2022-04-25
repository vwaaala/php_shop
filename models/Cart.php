<?php

class Cart
{
    public $db = null;

    public function __construct(DBcontroller $db)
    {
        if(!isset($db->con))return null;
        $this->db=$db;
    }

    public function insertIntoCart($params = null, $table = 'cart')
    {
        if($this->db->con !=null)
        {
            if($params !=null)
            {
                // get column name
                $columns = implode(',',array_keys($params));
                // get values
                $values = implode(',',array_values($params));
                // create sql statement
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,$columns,$values);
                // execute sql statement
                $result = $this->db->con->query($query_string);
            }
        }
    }
}