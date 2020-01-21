public function registration()
{
$this->load->model('studentregistration');
$item = new studentregistration;
$item->registeruser();
redirect(base_url().'index.php/Welcome/recep_stu','refresh');

}