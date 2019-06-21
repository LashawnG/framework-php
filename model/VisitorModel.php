<?php
//Haalt alle bezoekers op uit de database
function getAllVisitors()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM visitors";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

//Haalt 1 bezoeker met een gegeven ID op uit de database
function getVisitor($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM visitors WHERE visitor_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();

	$db = null;

	return $query->fetch();
}

//Voegt een bezoeker toe aan de database
function createVisitor($data) 
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO visitors (visitor_name, visitor_adres, visitor_phone) VALUES (?,?,?)";
	$query = $db->prepare($sql);
	$query->execute([$data['name'], $data['adres'], $data['phone']]);

	$db = null; 
}

function updateVisitor($data) 
{
	$db = openDatabaseConnection();

	$sql = "UPDATE visitors SET visitor_name = :name, visitor_adres = :adres, visitor_phone = :phone WHERE visitor_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':name', $data['name']);
    $query->bindParam(':adres', $data['adres']);
    $query->bindParam(':phone', $data['phone']);
    $query->bindParam(':id', $data['id']);
	$query->execute();

	$db = null; 
}

//Verwijderd een medewerker met het gegeven ID uit de database
function deleteVisitor($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM visitors WHERE visitor_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();

	$db = null; 
}

