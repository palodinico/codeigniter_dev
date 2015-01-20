<?php

class Products extends CI_Controller {

  public function index() {
  	echo "Products";
  }

  public function shoes($name, $id) {
  	echo "Name: $name";
  	echo "ID: $id";
  }
}

?>