<body>

<p>
    Hello {{ $user->level }}L {{ $user->department }} student,
</p>
<br clear="all">
<p>
    Please find an image of your departmental timetable below
</p>

<img src="{{ $message->embed(public_path('timetables/'.$timeTable)) }}">

<p>
    Regards,
    <br clear="all">
    {{ config('app.name') }}
</p>

<br clear="all">
<br clear="all">

<p style="background-color: #F5F5F5">
    Copyright &copy; {{ date('Y') }} - <b>SWEP 200 Group 9 Project</b> | All Rights Reserved
</p>

</body>