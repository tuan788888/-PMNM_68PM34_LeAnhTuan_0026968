<?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
class SinhVien
{
    public function index()
    {
        require_once '../app/views/sinhvien/index.php';
    }
    public function create()
    {
        require_once '../app/views/sinhvien/create.php';<?php
class sinhvien {
function index() {
        echo "Đây là danh sách sinh viên";
        //trả về view 
        require_once '../app/views/sinhvien/index.php';
<?php
require_once '../app/core/Controller.php';
class sinhvien extends Controller {
    function index() {
        $SinhvienModel = $this->model('SinhvienModel');
        $sinhvien = $SinhvienModel -> getAllSinhvien();
        $this -> view('sinhvien/index', ['sinhvien' => $sinhvien]);
    }

    function create() {
        //trả về view 
        require_once '../app/views/sinhvien/create.php';
}
}
    }
    public function login()
    {
        require_once '../app/views/home/login.php';
    }
}
?>
}