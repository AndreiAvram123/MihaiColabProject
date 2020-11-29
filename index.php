<?php
  require("CarManager.php");
  $manager = CarManager::getInstance();
  $cars = $manager->getRecentCars();

  $view = new stdClass();
  $view->cars = $cars;


    require_once("index.phtml");

?>