<?php

namespace App\Http\Controllers;

use App\TimeTable;
use App\UserTimeTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ScheduleController extends Controller
{
    public static function sendTimeTable()
    {
        foreach(UserTimeTable::get() as $user)
        {
            if($timetable = TimeTable::where('department', $user->department)->where('level', $user->level)->where('semester', $user->semester)->first())
            {

                Mail::send(['html' => 'emails.timetable'], ['user' => $user, 'timeTable' => $timetable->timetable], function($message) use ($user)
                {
                    $message->to($user->email)->subject(config('app.name').' - Your Timetable');
                });

                Log::info('Timetable sent to: '.$user->email);

            } else {
                //Send mail for no timetable
            }
        }
    }
}
