<?php
include_once("Base.php");

class Admin extends Base {

    protected $folder_name = "admin";

	public function index()
	{
        $data['content'] = "Admin-lte template";
        $this->load->view("{$this->folder_name}/index", $data);
	}

	public function about()
	{
        echo __CLASS__;
	}

    public function form_test()
    {
        if('POST' === $_SERVER['REQUEST_METHOD']) {
            var_dump($this->input->post());
        } else {
            $this->load->view("{$this->folder_name}/form_test");
        }
    }
}
