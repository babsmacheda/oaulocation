<?php

namespace App\Http\Controllers;

use App\TimeTable;
use App\UserTimeTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ScheduleController extends Controller
{
    public function sendTimeTable()
    {
        foreach(UserTimeTable::get() as $user)
        {
            if($timetable = TimeTable::where('department', $user->department)->where('level', $user->level)->where('semester', $user->semester)->first())
            {
                $data = [
                    'sender' => $sender,
                    'receiver' => $receiver,
                    'message_content' => $message
                ];

                Mail::send(['html' => 'emails.convert_birthday'], $data, function($message) use ($receiver, $sender, $subject)
                {
                    $message->from($sender['email']);
                    $message->to($receiver['email'])->subject(config('app.name').' - '.$subject);
                });

                /*Mail::send(['html' => 'emails.timetable'], [], function($message)
                {
                    $message->to('babsmacheda@ymail.com')->subject(config('app.name').' - Your Timetable');
                });*/

            } else {
                //Send mail for no timetable
            }
        }
    }
}
