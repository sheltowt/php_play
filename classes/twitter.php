<?php
	class TwitterApi {
		public $arrayNames = [];
		public $data;
		
		public function __construct($data) {
			$this->data = $data;
			echo $this->data;
		}
		
		public function extractUrls(){
			for($i = 0; $i < count($this->data); ++$i){
				echo "hello";
				var_dump($this->data[$i]);
			}
		}
		
		
	}
?>