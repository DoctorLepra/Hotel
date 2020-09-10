<?php

class baseModel extends connection
{
    protected $table;

    public function __construct()
    {
        parent:: __construct();
    }

    public function getAll()
    {
        try
        {
            $sql = $this->dbConnection->prepare("SELECT * FROM ".$this->table);
            $sql->execute();
            $resultSet = null;

            while ($row = $sql->fetch(PDO::FETCH_OBJ))
            {
                $resultSet[] = $row;
            }
            return $resultSet;
        }
        catch (PDOException $ex)
        {
            echo $ex->getMessage();
            die();
        }
    }
    public function getId($document)
    {
        try {
            // FETCH_OBJ
    
            $sql = $this->dbConnection->prepare("SELECT * FROM $this->table WHERE document=:document");

            $sql->bindParam('document',$document);
            // Ejecutamos
            $sql->execute();
            // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
            if($row = $sql->fetch(PDO::FETCH_OBJ)){
                $obj = new Admin($row->name,$row->type_document,$row->document, $row->cellphone, $row->email, $row->password);
            }else{
                $obj=null;
            }
            return $obj; 
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }
    public function getRid($document)
    {
        try {
            // FETCH_OBJ
    
            $sql = $this->dbConnection->prepare("SELECT * FROM $this->table WHERE document=:document");

            $sql->bindParam('document',$document);
            // Ejecutamos
            $sql->execute();
            // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
            if($row = $sql->fetch(PDO::FETCH_OBJ)){
                $obj = new Receptionist($row->name,$row->type_document,$row->document, $row->cellphone, $row->email, $row->password);
            }else{
                $obj=null;
            }
            return $obj; 
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }
    public function getRoomId($id)
    {
        try {
            // FETCH_OBJ
    
            $sql = $this->dbConnection->prepare("SELECT * FROM $this->table WHERE id=:id");

            $sql->bindParam('id',$id);
            // Ejecutamos
            $sql->execute();
            // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
            if($row = $sql->fetch(PDO::FETCH_OBJ)){
                $obj = new Rooms($row->name,$row->type_id);
            }else{
                $obj=null;
            }
            return $obj; 
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }
    public function gettypeId($id)
    {
        try {
            // FETCH_OBJ
    
            $sql = $this->dbConnection->prepare("SELECT * FROM $this->table WHERE id=:id");

            $sql->bindParam('id',$id);
            // Ejecutamos
            $sql->execute();
            // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
            if($row = $sql->fetch(PDO::FETCH_OBJ)){
                $obj = new typeRoom($row->name,$row->description, $row->maxpeople);
            }else{
                $obj=null;
            }
            return $obj; 
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }
}