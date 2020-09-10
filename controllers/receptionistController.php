<?php

class receptionistController extends baseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $receptionistObj = new Receptionist();
        // $adminObj->PermisoAdmin();
        $allReceptionist = $receptionistObj->getAll();

        $currentView = "Receptionist/indexView.php";
        require_once 'views/layouts/'.$this->layout;

    }
    public function create()
    {        
        $currentView = "Receptionist/createView.php";
        require_once 'views/layouts/'.$this->layout;
    }
    public function save()
    {
        if (isset($_POST["txtNombre"])) {
            $name = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
            $type_document = isset($_POST['txtdocument']) ? $_POST['txtdocument'] : "";
            $document = isset($_POST['txtnumberdocument']) ? $_POST['txtnumberdocument'] : "";
            $cellphone = isset($_POST['txtCellphone']) ? $_POST['txtCellphone'] : "";
            $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
            $pass = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : "";
            // Crear Objeto Paciente con los datos del formulario
            $receptionistObj = new Receptionist($name,$type_document,$document, $cellphone, $email, $pass);

            // Se llama al metodo que inserta en la base de datos.
            // $paciente_obj->validacion();
            $receptionistObj->save();
        }
        header('location:index.php?controller=receptionist&action=index');      
    }
    public function edit()
    {
        $receptionistObj = new Receptionist();
        $id = isset($_GET['id'])?$_GET['id']:"";
        $allReceptionist = $receptionistObj->getRid($id);       
        $currentView = "Receptionist/editView.php";
        require_once 'views/layouts/'.$this->layout;
    }
    public function update()
    {
            $name = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
            $type_document = isset($_POST['txtdocument']) ? $_POST['txtdocument'] : "";
            $document = isset($_POST['txtnumberdocument']) ? $_POST['txtnumberdocument'] : "";
            $cellphone = isset($_POST['txtCellphone']) ? $_POST['txtCellphone'] : "";
            $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
            $password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : "";
            // Crear Objeto Paciente con los datos del formulario
            $receptionistObj = new Receptionist();
            $receptionistObj->update($name,$type_document,$document, $cellphone, $email, $password);
        header('location:index.php?controller=receptionist&action=index');      
    }
    public function Delete()
    {
        $document = isset($_GET['id'])? $_GET['id']:"";
        $receptionistObj = new Receptionist();
        $receptionistObj->delete($document);
        header("location:index.php?controller=receptionist&action=index");
    }
}