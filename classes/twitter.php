<?php
	class TwitterApi {
		public $arrayText = [];
		public $data;
		
		public function __construct($data) {
			$this->data = $data;
			echo $this->data;
		}
		
		public function extractText(){
			$arrayNames = [];
			foreach($this->data as $key => $tweet){
				foreach($tweet as $key => $value){
					if ($key == "text"){
						array_push($arrayNames, $value);
					}
				}
			}
			return $arrayNames;
		}
		
		
	}
?>