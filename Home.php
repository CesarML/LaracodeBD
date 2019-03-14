<?php

require 'Main.php';

includeModels

class Home extends Main {
	
	public function __construct() {
		parent::__construct();
	}

	public function load() {
		# ORM Instance
		instanceTables

		# Test FindAll
		echo "<br />";
		echo "<table>";
		foreach ($pedidos->findAll() as $array) {
			echo "<tr>";
			foreach ($array as $key => $value) {
				echo "<td>".$value."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		# Test Remove
		if( $pedidos->remove(['id' => '1']) ) {
			echo "<br />Se elimino el registro 1<br />";
		} else {
			echo "<br />Error al eliminar<br />";
		}

		# Test Find
		echo "<br />";
		echo "<table>";
		foreach ($pedidos->find([],[]) as $array) {
			echo "<tr>";
			foreach ($array as $key => $value) {
				echo "<td>".$value."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		# Test Add
		if( $pedidos->add(['1','Jeans']) ) {
			echo "<br />Se agrego un registro<br />";
		} else {
			echo "<br />Error al agregar<br />";
		}

		# Test Find
		echo "<br />";
		echo "<table>";
		foreach ($pedidos->find([],['id' => 1]) as $array) {
			echo "<tr>";
			foreach ($array as $key => $value) {
				echo "<td>".$value."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		# Test Add
		if( $pedidos->edit(['pedidos' => 'Pantalones'],['id' => '1']) ) {
			echo "<br />Se modifico el registro 1<br />";
		} else {
			echo "<br />Error al modificar<br />";
		}

		# Test Find
		echo "<br />";
		echo "<table>";
		foreach ($pedidos->find(['pedidos'],['id' => 1]) as $array) {
			echo "<tr>";
			foreach ($array as $key => $value) {
				echo "<td>".$value."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";

		$this->loadView('main');
	}

	$old_error_reporting = error_reporting(0); 

}

?>