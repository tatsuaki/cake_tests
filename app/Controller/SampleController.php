<?php
App::uses('AppController','Controller');
App::uses('Sanitize', 'Utility');

 header("Content-type : text/html ; charset=UTF-8");

class SampleController extends AppController {

	public function index() {}
	
	public function form() {
		$text1 = $this->data["text1"];
		$check = isset($this ->data["check1"]) ? "On" : "Off";
		$radio1 = $this-> data["radio1"];
		$this-> set("text1", $text1);
		$this-> set("check1", $check);
		$this-> set("radio1", $radio1);
	}
	
	/*
	public function index() {
		$this->autoLayout = true;
		$this->set("title_for_layout","index_page");
		$this->set("msg","hellor!");
		$this->set("datas",array("One","Two"));
	}
	
	public function index() {
        $this -> autoRender = false;
        $date = new DateTime();
        $date->setTimeZone(new DateTimeZone('Asia/Tokyo'));
        $str = $date->format("H:i:s");
        $this->redirect("./other/" ."maki");
	}

	public function index() {
	    $this -> autoRender = false;
	    $this->setAction("other");
	}
	*/
	
	public function other($param) {
	header("Content-type : text/html ; charset=UTF-8");
		$this-> autoRender = false;
		$str = urldecode($param);
		echo "<html><head></head><body>";
		echo "<h1>サンプルです</h1>";
		echo "<p>これはもう一つのページです</p>";
		echo "<p>送られた値 : " .$str . "</p>";
		echo "</body></html>";
	}
}