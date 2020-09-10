<?php

class Rooms extends baseModel
{
    private $name;
    private $type_id;

    public function __construct( $_name = null, $_type = null)
    {
        $this->table = "habitacion";
        $this->name = $_name;
        $this->type_id = $_type;

        parent::__construct();
    }
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    public function save()
    {
        $sql =$this->dbConnection->prepare("INSERT INTO habitacion (name, type_id) VALUES (?,?)");

        $name = $this->getName();
        $type_id = $this->getType_id();

        $sql->bindParam(1,$name);
        $sql->bindParam(2,$type_id);

        $sql->execute();
    }
    public function update($id)
    {
        try
        {
            $sql = $this->dbConnection->prepare("UPDATE habitacion SET name=:name, type_id=:type_id WHERE id=:id");

            $name = $this->getName();
            $type_id = $this->getType_id();

            $sql->bindParam('name',$name);
            $sql->bindParam('type_id',$type_id);
            $sql->bindParam('id', $id);
            $sql->execute();
        }
        catch (PDOException $ex)
        {
            $ex->errorInfo;
        }
    }
    public function delete($id)
    {
        $sql = $this->dbConnection->prepare("DELETE FROM habitacion WHERE id=:id");

        $sql->bindParam('id',$id);
        $sql->execute();
    }

    
}