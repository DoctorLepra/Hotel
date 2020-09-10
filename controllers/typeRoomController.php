<?php

class typeRoomController extends baseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $typeObj = new typeRoom();
        // $adminObj->PermisoAdmin();
        $alltypes = $typeObj->getAll();

        $currentView = "Rooms/type/indexView.php";
        require_once 'views/layouts/'.$this->layout;

    }
    public function create()
    {        
        $currentView = "Rooms/type/createView.php";
        require_once 'views/layouts/'.$this->layout;
    }
    public function save()
    {
        if (isset($_POST["txtName"])) {
            $name = isset($_POST['txtName']) ? $_POST['txtName'] : "";
            $description = isset($_POST['txtDescription']) ? $_POST['txtDescription'] : "";
            $maxpeople = isset($_POST['txtPersons']) ? $_POST['txtPersons'] : "";
            // Crear Objeto Paciente con los datos del formulario
            $typeObj = new typeRoom($name, $description, $maxpeople);
            $typeObj->save();
        }
        header('location:index.php?controller=typerooms&action=index');      
    }
    public function edit()
    {
        $typeObj = new typeRoom();
        $id = isset($_GET['id'])?$_GET['id']:"";
        $alltypes = $typeObj->gettypeId($id);       
        $currentView = "Rooms/type/editView.php";
        require_once 'views/layouts/'.$this->layout;
    }
    public function update()
    {
        $id = isset($_GET['id'])?$_GET['id']:"";
        $name = isset($_POST['txtName']) ? $_POST['txtName'] : "";
        $description = isset($_POST['txtDescription']) ? $_POST['txtDescription'] : "";
        $maxpeople = isset($_POST['txtPersons']) ? $_POST['txtPersons'] : "";
        // Crear Objeto Paciente con los datos del formulario
        $typeObj = new typeRoom($name, $description, $maxpeople);
        $typeObj->update($id);
        header('location:index.php?controller=typerooms&action=index');      
    }
    public function Delete()
    {
        $id = isset($_GET['id'])? $_GET['id']:"";
        $typeObj = new typeRoom();
        $typeObj->delete($id);
        header("location:index.php?controller=typerooms&action=index");
    }
}