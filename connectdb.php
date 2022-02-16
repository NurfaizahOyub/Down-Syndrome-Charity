<?php
$data = mysqli_connect('localhost', 'root', '', 'syndrome');
if ($data -> connect_error) {
        		die ("Connection failed: " .$data->connect_error);
        	}
?>