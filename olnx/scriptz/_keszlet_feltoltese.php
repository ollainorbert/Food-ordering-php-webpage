<?php

$sql = "INSERT INTO stock (item_name, item_ar)
VALUES
('Pizza A1', '500'),
('Pizza A2', '800'),
('Pizza A3', '1500'),
('Pizza B1', '400'),
('Pizza B2', '700'),
('Pizza B3', '900'),
('Pizza C1', '200'),
('Pizza C2', '400'),
('Pizza C3', '700'),
('Pizza XT', '2500'),

('Hambi A1', '500'),
('Hambi A2', '800'),
('Hambi A3', '1500'),
('Hambi B1', '400'),
('Hambi B2', '700'),
('Hambi B3', '900'),
('Hambi C1', '200'),
('Hambi C2', '400'),
('Hambi C3', '700'),
('Hambi XXL', '2500'),

('Szendó A1', '500'),
('Szendó A2', '800'),
('Szendó A3', '1500'),
('Szendó B1', '400'),
('Szendó B2', '700'),
('Szendó B3', '900'),
('Szendó C1', '200'),
('Szendó C2', '400'),
('Szendó C3', '700'),
('Szendó XT', '2500'),

('Krumpli A1', '500'),
('Krumpli A2', '800'),
('Krumpli A3', '1500'),
('Krumpli B1', '400'),
('Krumpli B2', '700'),
('Krumpli B3', '900'),
('Krumpli C1', '200'),
('Krumpli C2', '400'),
('Krumpli C3', '700'),
('Krumpli X', '2500'),

('Csirke A1', '500'),
('Csirke A2', '800'),
('Csirke A3', '1500'),
('Csirke B1', '400'),
('Csirke B2', '700'),
('Csirke B3', '900'),
('Csirke C1', '200'),
('Csirke C2', '400'),
('Csirke C3', '700'),
('Csirke XL', '2500')";


if(mysqli_query($connection, $sql) === TRUE) {
	//akkor a készlet feltöltve.
} else {
	echo "Készlet feltöltése sikertelen!";
	echo "Hiba: " . $sql . "<br>" . $connection->error;
}

?>