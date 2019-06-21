<?php

require(ROOT . "model/VisitorModel.php");

//Index
function index()
{
	render("visitor/index", array(
		'visitors' => getAllVisitors()
	));
}

//Bezoeker aanmaken
function create() 
{
	render('visitor/create');
}

function store()
{
    $data = $_POST;
    createVisitor($data);
    header( "Location:  /Manege/framework-php/visitor/index" );
}

//Bezoeker verwijderen
function delete($id)
{
    $visitor = getVisitor($id);
    render('visitor/delete', ['visitor' => $visitor]);
}

function destroy($id) 
{
	deleteVisitor($id);
    header( "Location:  /Manege/framework-php/visitor/index" );
}

//Bezoeker bewerken
function edit($id){
    $visitor = getVisitor($id);
    render('visitor/update', ['visitor' => $visitor]);
}

function update(){
    $data = $_POST;
    updateVisitor($data);
    header( "Location: /Manege/framework-php/visitor/index" );
}












