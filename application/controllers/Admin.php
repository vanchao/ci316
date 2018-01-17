<?php
include_once("Base.php");

class Admin extends Base {

    protected $folder_name;

    public function __construct()
    {
        parent::__construct();
        $this->folder_name = strtolower(__CLASS__);
    }

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
            redirect("admin/form_test", "location");
            // var_dump($this->input->post());
        } else {
            $this->load->view("{$this->folder_name}/form_test");
        }
    }
}
