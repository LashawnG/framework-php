<?php
//Haalt alle paarden op uit de database
function getAllHorses()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM horses";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

//Haalt een paard op uit de database met het gegeven id
function getHorse($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM horses WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();

	$db = null;

	return $query->fetch();
}

//Een paard aanmaken
function createHorse($data) 
{
if ($data['horse_height'] <= 147.5)
{
	$jumpsport = 'nee';
	$race = 'pony';
} else 
{
	$jumpsport = 'ja';
	$race = 'paard';
}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO horses (jumpsport, horse_age, horse_race, horse_name, horse_height) VALUES (?,?,?,?,?)";
	$query = $db->prepare($sql);
	$query->execute([ $jumpsport ,$data['horse_age'], $race , $data['horse_name'], $data['horse_height']]);

	$db = null; 
	
}

//Een paard bewerken
function updateHorse($data) 
{	
	if ($data['horse_height'] <= 147.5)
{
	$jumpsport = 'nee';
	$race = 'pony';
} else 
{
	$jumpsport = 'ja';
	$race = 'paard';
}

	$db = openDatabaseConnection();

	$sql = "UPDATE horses SET jumpsport = :jumpsport, horse_age = :horse_age, horse_race = :horse_race, horse_name = :horse_name, horse_height = :horse_height WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':jumpsport', $jumpsport);
    $query->bindParam(':horse_age', $data['horse_age']);
    $query->bindParam(':horse_race', $race);
    $query->bindParam(':horse_name', $data['horse_name']);
    $query->bindParam(':horse_height', $data['horse_height']);
    $query->bindParam(':id', $data['id']);
	$query->execute();

	$db = null; 
}

//Een paard verwijderen
function deleteHorse($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM horses WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();

	$db = null; 
}