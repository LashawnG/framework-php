<?php
require(ROOT . "model/HorseModel.php");

//Index
function index()
{
	render("horses/index", array(
		'horses' => getAllHorses()
	));
}

//Een paard aanmaken
function create() 
{
	render('horses/create');
}

function store()
{
    $data = $_POST;
    createHorse($data);
    header( "Location:  /Manege/framework-php/horse/index" );
}

//Paard bewerken
function edit($id){
    $horse = getHorse($id);
    render('horses/update', ['horse' => $horse]);
}

function update(){
    $data = $_POST;
    updateHorse($data);
    header( "Location: /Manege/framework-php/horse/index" );
}

//Paard verwijderen
function delete($id)
{
    $horse = getHorse($id);
    render('horses/delete', ['horse' => $horse]);
}

function destroy($id) 
{
	deleteHorse($id);
    header( "Location:  /Manege/framework-php/horse/index" );
}