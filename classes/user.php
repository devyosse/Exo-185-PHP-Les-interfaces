<?php


require('interfaces/UserInterface.php');

class user implements UserInterface
{

    private $request;

    public function __construct() {
        $this->getRequest($_REQUEST);
    }

    public function getRequest($request)
    {
        return $this->request = $request;
    }

    public function parseRequest()
    {
     foreach($this->request as $request -> $lol){
         echo $request . "" . $lol;
     }
    }

}