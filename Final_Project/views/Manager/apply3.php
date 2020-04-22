<?php
include('../../controllers/ticketController.php');
$ticket=count(getAllTicket());
echo $ticket;
?>