<?php
class Controller_User extends Controller
{

    function __construct()
    {
        $this->model = new Model_User();
        $this->view = new View();
    }

    function get_name()
    {
        $data = $this->model->get_user();
        $this->view->generate('user_view.php', 'template_view.php', $data);
    }
}
