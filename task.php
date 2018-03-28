<?php

	class Task{
		public $description;
		public $complete = false;

		public function __construct($description){
			$this->description = $description;
		}

		public function complete(){
			$this->complete = true;
		}

	}

	$task = new Task('learn OOP');
	
	$task->complete();
	var_dump($task);

?>
