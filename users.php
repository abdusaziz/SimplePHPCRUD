<?php

function getUsers(){
    $users = file_get_contents(__DIR__."/user.json");
    var_dump($users);
}

function getUserById ($id){

}

function createUser($data){

}

function updateUser($data, $id){

}

function deleteUser($id){

}
