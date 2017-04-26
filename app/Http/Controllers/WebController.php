<?php

namespace App\Http\Controllers;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;
use Psy\Exception\FatalErrorException;
use Symfony\Component\Debug\Exception\FatalThrowableError;

class WebController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function findCentre($location = null)
    {
        /*Mapper::map(
            7.517848,
            4.528361,
            [
                'zoom' => 17,
                'draggable' => true,
                'marker' => true,
            ]
        );*/

        $defaultLocation = 'department of chemistry';

        if($location != null && Mapper::location($location))
        {
            $defaultLocation = $location;
        } else {
            $defaultLocation = 'computer auditorium';
        }

        /*try {
            Mapper::location($location);
            $defaultLocation = $location;
        } catch (FatalThrowableError $e) {

            return 'Maximum time passed';

        } finally {*/

            Mapper::location($defaultLocation.', OAU Ife');
            Mapper::location($defaultLocation.', OAU Ife')->map(['zoom' => 17, 'center' => true, 'marker' => true, 'type' => 'ROADMAP', 'overlay' => 'TRAFFIC']);
            //Mapper::location('OAU of Chemistry')-, Ife Department>streetview(1, 1, ['ui' => false]);

            return view('find_centre', compact('defaultLocation'));
        //}
    }
}
