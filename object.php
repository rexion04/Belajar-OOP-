<?php
class Kendaraan {
  // Properties
  public $name;
  public $jenis;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$motor = new Kendaraan();
$mobil = new Kendaraan();
$motor->set_name('Beat');
$mobil->set_name('Fortuner');

echo $motor->get_name();
echo "<br>";
echo $mobil->get_name();
?>