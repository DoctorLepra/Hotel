<?php

class clientController extends baseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $clientObj = new Client();               

        $allClients = $clientObj->getAll();        

        $currentView = "Client/indexView.php";
        require_once 'views/layouts/'.$this->layout;

    }
    public function create()
    {        
        $currentView = "Client/createView.php";
        require_once 'views/layouts/'.$this->loginLayout;
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
            $adminObj = new Admin($name,$type_document,$document, $cellphone, $email, $pass);

            // Se llama al metodo que inserta en la base de datos.
            // $paciente_obj->validacion();
            $adminObj->save();
        }
        header('location:index.php?controller=admin&action=index');      
    }
    public function edit()
    {
        $adminObj = new Admin();
        $id = isset($_GET['id'])?$_GET['id']:"";
        $allAdmins = $adminObj->getId($id);       
        $currentView = "Admin/editView.php";
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
            $adminObj = new Admin();
            $adminObj->update($name,$type_document,$document, $cellphone, $email, $password);
        header('location:index.php?controller=admin&action=index');      
    }
    public function Delete()
    {
        $document = isset($_GET['id'])? $_GET['id']:"";
        $adminObj = new Admin();
        $adminObj->delete($document);
        header("location:index.php?controller=admin&action=index");
    }
}