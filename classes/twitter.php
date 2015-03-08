<?php
	class TwitterApi {
		public $arrayText = [];
		public $data;
		
		public function __construct($data) {
			$this->data = $data;
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
		
		public function returnDesiredValues(){
			$desiredValues = [];
			foreach($this->data as $key => $tweet){
				var_dump($tweet);
				$tweetValues = [];
				foreach($tweet as $key => $value){
					switch ($key){
						case "text":
							$tweetValues["text"] = $value;
							break;
						case "user_id":
							$tweetValues["user_id"] = $value;
							break;
						case "id_str":
							$tweetValues["id_str"] = $value;
							break;
						case "created_at":
							$tweetValues["created_at"] = $value;
							break;
						case "url":
							$tweetValues["url"] = $value[0];
							break;
						default:
							break;
					}
				}
				array_push($desiredValues, $tweetValues);
			}			
			
			return $desiredValues;
		}
		
		
	}
?>