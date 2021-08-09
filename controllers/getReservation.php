<?php

include "../models/reservation.php";

$Reservation = new reservation();

if (session_id() == '') {

 session_start();
}

$id_user = $_SESSION['idU'];

$getResrvations = $Reservation->getAllreservation($id_user);
