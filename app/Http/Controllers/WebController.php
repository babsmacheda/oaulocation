<?php

namespace App\Http\Controllers;

use App\UserTimeTable;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        //ScheduleController::sendTimeTable();
        return view('welcome');
    }

    public function findCentre($location = null)
    {
        if($location != null && Mapper::location($location))
        {
            $defaultLocation = $location;
        } else {
            $defaultLocation = 'computer auditorium';
        }

        Mapper::location($defaultLocation.', OAU Ife')->map(['zoom' => 17, 'center' => true, 'marker' => true, 'type' => 'ROADMAP', 'overlay' => 'TRAFFIC']);

        return view('find_centre', compact('defaultLocation'));
    }

    public function submitTimetable(Request $request)
    {
        $this->validate($request, [
            'email' => 'bail|required|email|unique:user_timetable',
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
