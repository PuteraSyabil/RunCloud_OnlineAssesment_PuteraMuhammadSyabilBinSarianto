<?php

    //uncomment if not use composer autoloader
    //require 'Classes/Plan.php';
    //require 'Classes/Server.php';

    class User{
        public String $name;
        public Plan $plan;
        public $server;
        public $serverList = [];
    

        public function getName()
        {
            return $this->name;
        }

        public function subscribe(Plan $plan)
        {
            echo "<br>";
             echo "Action: Subscribing to plan ".$plan->namePlan." ...";
             echo "<br>";
             $this->plan=$plan;
             echo "Subscribed to plan ".$this->plan->namePlan;
             echo "<br>";
        }

        public function unsubscribe()
        {
            //assuming when unsubscribing a plan, the server is deleted.
            echo "<br>";
            echo "Action: Cancelling Subscription !";
            unset($this->plan);
            unset($this->server);
            unset($this->serverList);

        }

        public function connectServer(Server $server)
        {
            
            echo "Action: Connecting to Server ". $server->getName();


                if(isset($this->plan)==false)
                {   echo "<br>";
                    echo "Error => user is not subscribe to any plan";
                    echo "<br>";
                }
                else
                {
                    if($this->plan->displayPlan()=="BasicPlan")
                    {          
                        if($this->server != NULL)
                        {
                            echo "<br>";
                            echo "Error => user exceeded plan.";
                            echo "<br>";
                        }
                        else
                        {
                            echo "<br>";
                            echo "Action => ".$server->getName(). " is connected";
                            $this->server=$server;
                            $this->serverList[]= $server;
                            echo "<br>";
                            echo "User's name : ". $this->name;
                            echo "<br>";
                            echo "Current Plan : ". $this->plan->displayPlan();
                            echo "<br>";
                            echo "Connected Servers: ". $this->server->getName(). " [ ". $this->server->getIpAddress(). " ] ";
                        
                        } 
                
                    }
                    else if($this->plan->displayPlan()=="ProPlan")
                    {
                        echo "<br>";
                        echo "Action => ".$server->getName(). " is connected";
                        $this->server = $server;
                        $this->serverList[]= $server; 
                        echo "<br>";
                        echo "User's name : ". $this->name;
                        echo "<br>";
                        echo "Current Plan : ". $this->plan->displayPlan();
                        echo "<br>";
                        echo "Connected Servers: ";
                        foreach($this->serverList as $temp=>$value)
                        {
                            echo $value->getName(). " [". $value->getIpAddress(). "], ";
                        }
                    
                    }
                    else if($this->plan->displayPlan()=="BusinessPlan")
                    {
                        echo "<br>";
                        echo "Action => ".$server->getName(). " is connected";
                        $this->server = $server;
                        $this->serverList[]= $server; 
                        echo "<br>";
                        echo "User's name : ". $this->name;
                        echo "<br>";
                        echo "Current Plan : ". $this->plan->displayPlan();
                        echo "<br>";
                        echo "Connected Servers: ";
                        foreach($this->serverList as $temp=>$value)
                        {
                            echo $value->getName(). " [". $value->getIpAddress(). "], ";
                        }
                    }
                }
                
                
                
           

            
            
        }
       

    
    }
