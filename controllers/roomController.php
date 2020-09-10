<?php

class roomController extends baseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $roomObj = new Rooms();
        // $adminObj->PermisoAdmin();
        $allRooms = $roomObj->getAll();
        $currentView = "Rooms/indexView.php";
        require_once 'views/layouts/'.$this->layout;

    }
    public function create()
    {   
        $typeObj = new typeRoom();
        $currentView = "Rooms/createView.php";
        require_once 'views/layouts/'.$this->layout;
    }
    public function save()
    {
        if (isset($_POST["txtName"])) {
            $name = isset($_POST['txtName']) ? $_POST['txtName'] : "";
            $type = isset($_POST['txtType']) ? $_POST['txtType'] : "";
            // Crear Objeto Paciente con los datos del formulario
            $roomObj = new Rooms($name,$type);
            var_dump($type);
            $roomObj->save();
        }
        header('location:index.php?controller=rooms&action=index');      
    }
    public function edit()
    {
        $roomObj = new Rooms();
        $id = isset($_GET['id'])?$_GET['id']:"";
        $allRooms = $roomObj->getRoomId($id);       
        $currentView = "Rooms/editView.php";
        require_once 'views/layouts/'.$this->layout;
    }
    public function update()
    {
        $id = isset($_GET['id'])?$_GET['id']:"";
        $name = isset($_POST['txtName']) ? $_POST['txtName'] : "";
        $type = isset($_POST['txtType']) ? $_POST['txtType'] : "";
        // Crear Objeto Paciente con los datos del formulario
        $roomObj = new Rooms($name,$type);
        $roomObj->update($id);
        header('location:index.php?controller=rooms&action=index');      
    }
    public function Delete()
    {
        $id = isset($_GET['id'])? $_GET['id']:"";
        $roomObj = new Rooms();
        $roomObj->delete($id);
        header("location:index.php?controller=rooms&action=index");
    }
}