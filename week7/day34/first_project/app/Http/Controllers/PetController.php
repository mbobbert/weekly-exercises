<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{

    public function index()
    {
        //give me the name of the owner that belongs to pet with id=5
        $pet = Pet::find(5);
        $owner = $pet->owner;
        return $owner->name;

        //find the owner that belongs to pet with id=6
        $pet = Pet::find(6);
        $owner = $pet->owner;
        return $owner;

        //find pet with id=4, find its owner, and give me back all the other pets that this owner has
        $pet = Pet::find(4);
        $owner = $pet->owner;
        return $owner->pets;

        return $pets;

        $pet = Pet::find(2);
        $owner = $pet->owner;
        return $owner->pets;


        // CREATE NEW
        $newPet = new Pet();
        $newPet->name = 'Gigi';
        $newPet->user_id = 1;
        $newPet->save();
        return Pet::all();


        // DELETE pet with id = 1
        $pet = Pet::find(1);
        $pet->delete();
        return $pet;

        // UPDATE pet with id = 2
       $garfield = Pet::find(2);
       $garfield->name = 'New Garfield';
       $garfield->save();

        //GET ALL
        return $garfield;
        $pets = Pet::all();

        return $pets;


    }
}
