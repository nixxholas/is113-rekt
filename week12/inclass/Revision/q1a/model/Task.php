<?php

    class Task{
        private $week_day;
        private $task;
         
        public function __construct($week_day, $task){
            $this->week_day = $week_day;
            $this->task = $task;
        }

        public function getWeekDay(){
            return $this->week_day;
        }

        public function getTask(){
            return $this->task;
        }
    }

?>