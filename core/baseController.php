<?php
// session_start();
class baseController
{
    protected $layout;
    protected $loginLayout;
    public function __construct()
    {
        $this->layout = "adminLayout.php";
        $this->loginLayout = "loginLayout.php";
        require_once 'connection.php';
        require_once 'baseModel.php';

        require_once 'models/admin.class.php';
        require_once 'models/receptionist.class.php';
        require_once 'models/client.class.php';
        require_once 'models/room.class.php';
        require_once 'models/typeRoom.class.php';

        // if (isset($_SESSION['timeout']))
        // {
        //     $session_time = time() - $_SESSION["timeout"];
        //     if ($session_time > (TIME_OUT * 60)){
        //         session_destroy();
        //         header("location:index.php?controller=login&action=logout");
        //     }
        //     else
        //     {
        //         $_SESSION['timeout'] = time();
        //     }
        // }
    }
}
?>