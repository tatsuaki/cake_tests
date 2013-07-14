<?php
App::uses('AppController','Controller');

header("Content-type : text/html ; charset=UTF-8");

class Sample2Controller extends AppController {
	
	public function index() {
        $this -> autoRender = false;
        $date = new DateTime();
        $date->setTimeZone(new DateTimeZone('Asia/Tokyo'));
        $str = $date->format("H:i:s");
		echo "<html><head></head><body>";
		echo "<h1>サンプルです</h1>";
		echo "<p>これはもぷるぷるのページです</p>";
		echo "<p>送られた値 : " .$str . "</p>";
		echo "</body></html>";
	}
	/*
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