<?php

namespace App\Http\Controllers;

use App\UserTimeTable;
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
        $defaultLocation = 'department of chemistry';

/*        if($location != null && Mapper::location($location))
        {
            $defaultLocation = $location;
        } else {
            $defaultLocation = 'computer auditorium';
        }

        Mapper::location($defaultLocation.', OAU Ife');
        Mapper::location($defaultLocation.', OAU Ife')->map(['zoom' => 17, 'center' => true, 'marker' => true, 'type' => 'ROADMAP', 'overlay' => 'TRAFFIC']);
*/

        //Mapper::location('OAU of Chemistry')-, Ife Department>streetview(1, 1, ['ui' => false]);

        return view('find_centre', compact('defaultLocation'));
    }

    public function getTimetable()
    {
        return view('');
    }

    public function submitTimetable(Request $request)
    {
        $this->validate($request, [
            'email' => 'bail|required|email',
            'department' => 'bail|required|string',
            'level' => 'bail|required|string',
            'semester' => 'bail|required|string'
        ]);

        $info = [
            'email' => $request->email,
            'department' => $request->department,
            'level' => $request->level,
            'semester' => $request->semester,
        ];

        if(UserTimeTable::create($info))
        {
            return redirect()->back()->with('success', 'Congratulations, your details have been saved. You will now receive your timetable for your department');
        }

        return redirect()->back()->with('danger', 'Invalid');
    }
}
