<?php

class typeRoom extends baseModel
{
    private $name;
    private $description;
    private $maxpeople;

    public function __construct( $_name = null, $_desc = null, $_maxp = null)
    {
        $this->table = "tipo_habitacion";
        $this->name = $_name;
        $this->description = $_desc;
        $this->maxpeople = $_maxp;

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
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of maxpeople
     */ 
    public function getMaxpeople()
    {
        return $this->maxpeople;
    }

    /**
     * Set the value of maxpeople
     *
     * @return  self
     */ 
    public function setMaxpeople($maxpeople)
    {
        $this->maxpeople = $maxpeople;

        return $this;
    }

    public function save()
    {
        $sql =$this->dbConnection->prepare("INSERT INTO tipo_habitacion (name, description, maxpeople) VALUES (?,?,?)");

        $name = $this->getName();
        $description = $this->getDescription();
        $maxpeople = $this->getMaxpeople();

        $sql->bindParam(1,$name);
        $sql->bindParam(2,$description);
        $sql->bindParam(3,$maxpeople);

        $sql->execute();
    }
    public function update($id)
    {
        try
        {
            $sql = $this->dbConnection->prepare("UPDATE tipo_habitacion SET name=:name, description=:description, maxpeople=:maxpeople WHERE id=:id");

            $name = $this->getName();
            $description = $this->getDescription();
            $maxpeople = $this->getMaxpeople();

            $sql->bindParam('name',$name);
            $sql->bindParam('description',$description);
            $sql->bindParam('maxpeople',$maxpeople);
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
        $sql = $this->dbConnection->prepare("DELETE FROM tipo_habitacion WHERE id=:id");

        $sql->bindParam('id',$id);
        $sql->execute();
    }
}