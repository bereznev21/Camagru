<?php
include 'application/models/model_user.php';
class Controller_Login extends Controller
{

    function __construct()
    {
        $this->model = new Model_User();
        $this->view = new View();
    }

    function get_name()
    {
        //$data = $this->model->get_user();
        //$this->view->generate('login_view.php', 'template_view.php', $data);
    }
}
