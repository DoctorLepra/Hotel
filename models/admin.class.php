<?php

class Admin extends baseModel
{
    private $name;
    private $type_document;
    private $document;
    private $cellphone;
    private $email;
    private $password;

    public function __construct($_name=null, $_type_doc=null, $_doc=null, $_cell=null, $_email=null, $_pass=null)
    {
        $this->table = "administrador";
        $this->name = $_name;
        $this->type_document = $_type_doc;
        $this->document = $_doc;
        $this->cellphone = $_cell;
        $this->email = $_email;
        $this->password = $_pass;

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
     * Get the value of document
     */ 
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set the value of document
     *
     * @return  self
     */ 
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get the value of cellphone
     */ 
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set the value of cellphone
     *
     * @return  self
     */ 
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of type_document
     */ 
    public function getType_document()
    {
        return $this->type_document;
    }

    /**
     * Set the value of type_document
     *
     * @return  self
     */ 
    public function setType_document($type_document)
    {
        $this->type_document = $type_document;

        return $this;
    }
    public function save()
    {
        $sql = $this->dbConnection->prepare("INSERT INTO administrador (name, type_document, document, cellphone, email, password) VALUES (?, ?, ?, ?, ?, ?)");

        $name = $this->getName();
        $type_document = $this->getType_document();
        $document = $this->getDocument();
        $cellphone = $this->getCellphone();
        $email = $this->getEmail();
        $pass = $this->getPassword();
        // $encriptada = password_hash($this->pass, PASSWORD_BCRYPT);

        $sql->bindParam(1, $name);
        $sql->bindParam(2, $type_document);
        $sql->bindParam(3, $document);
        $sql->bindParam(4, $cellphone);
        $sql->bindParam(5, $email);
        $sql->bindParam(6, $pass);
        // Excecute
        $sql->execute();      
    }
    public function update($name,$type_document,$document, $cellphone, $email, $password)
    {
        try
        {
            $sql = $this->dbConnection->prepare("UPDATE administrador SET name=:name, type_document=:type_document, document=:document, cellphone=:cellphone, email=:email, password=:password WHERE document=:document");

            $sql->bindParam('name',$name);
            $sql->bindParam('type_document',$type_document);
            $sql->bindParam('document',$document);
            $sql->bindParam('cellphone',$cellphone);
            $sql->bindParam('email',$email);
            $sql->bindParam('password',$password);
            $sql->execute();
        }
        catch (PDOException $ex)
        {
            $ex->errorInfo;
        }
    }
    public function delete($document)
    {
        $sql = $this->dbConnection->prepare("DELETE FROM administrador WHERE document=:document");

        $sql->bindParam('document',$document);
        $sql->execute();
    }
}