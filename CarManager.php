<?php
require_once ("Database.php");
require_once ("Car.php");

class CarManager
{
    protected $_dbHandler;
    protected $_dbInstance;
    private static $dataManager;
    //method used to create a singleton pattern
    public static function getInstance()
    {
        if (self::$dataManager !== null) {
            return self::$dataManager;
        } else {
            self::$dataManager = new self();
            return self::$dataManager;
        }

    }

    private function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandler = $this->_dbInstance->getDatabaseConnection();
    }

    public function getRecentCars(){
        $query = "SELECT * FROM masini";
        $result = $this->_dbHandler->prepare($query);
        $result->execute();
        $cars= [];
        while($row = $result->fetch()){
             $car = new Car($row);
             $cars[] = $car;
        }

        return $cars;
    }


}

?>
