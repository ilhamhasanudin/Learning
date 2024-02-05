<?php 

class Employee extends Controller {
    public function index() 
    {
        $data['judul'] = 'List Employee';
        $data['dataemp'] = $this->model('EmployeeModel')->getAllEmployee();
        $this->view('template/header', $data);
        $this->view('employee/index', $data);
        $this->view('template/footer');
    }
}