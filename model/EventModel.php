<?php
$price = 55;
//Haalt alle events op uit de database
function getAllEvents()
{
	$db = openDatabaseConnection();

	$sql = "SELECT events.event_id, visitors.visitor_id, visitors.visitor_name, horses.horse_name, events.event_time FROM ((events
INNER JOIN visitors ON events.event_rider = visitors.visitor_id)
INNER JOIN horses ON events.event_horse = horses.id)";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

//Haalt 1 event op uit de database met het gegeven id
function getEvent($event_id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM events WHERE event_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $event_id);
	$query->execute();

	$db = null;

	return $query->fetch();
}

//Event aanmaken
function createEvent($data) 
{	
	//Prijs
	$event_price = 55;
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO events (event_rider, event_time, event_horse, event_price) VALUES (?,?,?,?)";
	$query = $db->prepare($sql);
	$query->execute([$data['visitor_id'], $data['time'], $data['horse'], $event_price]);

	$db = null; 
	
}

//Een event bewerken
function updateEvent($data) 
{
	$event_price = 55;

	$db = openDatabaseConnection();

	$sql = "UPDATE events SET event_rider = :rider, event_time = :event_time, event_horse = :horse, event_price = :price WHERE event_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':rider', $data['event_rider']);
    $query->bindParam(':event_time', $data['time']);
    $query->bindParam(':horse', $data['horse']);
    $query->bindParam(':price', $eventprice);
    $query->bindParam(':id', $data['id']);
	$query->execute();

	$db = null; 
}

//Event verwijderen
function deleteEvent($event_id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM events WHERE event_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':id', $event_id);
	$query->execute();

	$db = null; 
}

function getEventDetails($id)
{	
	$db = openDatabaseConnection();

	$sql = "SELECT horses.horse_name, events.event_time, events.event_price FROM events INNER JOIN horses ON events.event_horse = horses.id WHERE event_rider = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}