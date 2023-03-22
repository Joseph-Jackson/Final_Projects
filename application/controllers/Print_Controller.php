<?php 
require FCPATH.'vendor/autoload.php';

class Print_Controller extends CI_Controller
{
   function __construct()
   {
        parent::__construct();
    }
    public function print_user()
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
    }

}
?>