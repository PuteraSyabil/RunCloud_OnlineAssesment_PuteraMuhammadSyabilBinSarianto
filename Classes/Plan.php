<?php

   
    abstract class Plan
    {
        public $namePlan = "";
        abstract public function displayPlan() : string;
    }

    class BasicPlan extends Plan
    {
        public function __construct()
        {
            $this->namePlan= "BasicPlan";
        }
        public function displayPlan() : string
        {
            
            return $this->namePlan;
        }
    }

    class ProPlan extends Plan
    {

        public function __construct()
        {
            $this->namePlan="ProPlan";
        }

        public function displayPlan() : string
        {
            return $this->namePlan;
        }
    }

    class BusinessPlan extends Plan
    {
        public function __construct()
        {
            $this->namePlan="BusinessPlan";
        }

        public function displayPlan() : string
        {

            return $this->namePlan;
        }
    }

?>