<?php
require(ROOT . "model/EventModel.php");
require(ROOT . "model/HorseModel.php");
require(ROOT . "model/VisitorModel.php");


//Alle events
function index()
{	
	render("events/index", array(
		'events' => getAllEvents()
	));
}

//Event aanmaken (reserveren)
function create($id) 
{
	render('events/create', array(
		'horses' => getAllHorses(), 'visitor' => getVisitor($id)
	));
}

function store()
{
    $data = $_POST;
    createEvent($data);
    header( "Location:  /Manege/framework-php/event/index" );
   
}

//Event verwijderen
function delete($event_id)
{
    $event = getEvent($event_id);
    render('events/delete', ['event' => $event]);
}

function destroy($event_id) 
{
	deleteEvent($event_id);
    header( "Location:  /Manege/framework-php/event/index" );
}

//Event bewerken
function edit($event_id){
    render('events/update', array(
		'event' => getEvent($event_id), 'horse' => getAllHorses(), 'visitor' => getAllVisitors()

	));
}

function update(){
    $data = $_POST;
    updateEvent($data);
    header( "Location: /Manege/framework-php/event/index" );
}

//Detail pagina
function detail($id)
{
	$price = 55;
	$data = getEventDetails($id);
	$total = $price * count($data);
	render("events/detail", array(
		'visitor' => getVisitor($id), 'event' => getAllEvents(), 'horse' => getAllHorses(), 'detail' => getEventDetails($id), 'total' => $total
	));
}

