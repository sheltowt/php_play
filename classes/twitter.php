<?php
	class TwitterApi {
		public $arrayText = [];
		public $data;
		
		public function __construct($data) {
			$this->data = $data;
			echo $this->data;
		}
		
		public function extractText(){
			foreach($this->data as $key => $tweet){
				foreach($tweet as $key => $value){
					if ($key == "text"){
						echo $value;
						array_push($this->arrayText, $value);
					}
				}
			}
			return $this->arrayText;
		}
		
		
	}
?>