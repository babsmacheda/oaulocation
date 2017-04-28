@extends('template')

@section('page_styles')
@endsection

@section('body_content')

    <div class="container" style="min-height: 400px;margin-top: 100px;">
        <div class="row hidden" style="">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <div class="panel-title">Pick a location below</div>
                    </div>
                    <div class="panel-body text-center">
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'awolowo hall']) }}">Awo Hall</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'department of chemistry']) }}">Yellow house</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'white house']) }}">white house</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Faculty of Law basement']) }}">Faculty of Law basement</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Students Union Building']) }}">Students Union Building</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Humanities']) }}">Humanities</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Humanities car park']) }}">Humanities car park</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Forks and Fingers']) }}">Forks and Fingers</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Skye Bank Single ATM Machine']) }}">Skye Bank Single ATM Machine</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Bims Catering Services']) }}">Bims Catering Services</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Risky Joint']) }}">Risky Joint</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Moremi buttery']) }}">Moremi buttery</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Bus stop 1']) }}">Bus stop 1</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Bus stop 2']) }}">Bus stop 2</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Health Centre']) }}">Health Centre</a>
                        <a style="margin-bottom: 5px; margin-right: 5px;" class="btn btn-primary btn-sm" href="{{ route('find-centre', ['location' => 'Oduduwa hall']) }}">Amphitheatre</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>

        <div class="text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">{{ ($defaultLocation != null) ? $defaultLocation : '' }}</h2>
                <p class="hidden"></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" style="margin-top: 20px;margin-bottom: 50px;">
                <div style="width: 100%; height: 400px;">
                    {!! Mapper::render(0) !!}
                </div>
            </div>
        </div>
    </div>

    <section id="about-us" style="padding-top: 30px">
        <div class="container">
            <div class="text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">Select a location on campus</h2>
                    <p class="hidden">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <br clear="all">
            <div class="about-us row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel-body text-center">
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'awolowo hall']) }}">Awo Hall</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'department of chemistry']) }}">Yellow house</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'white house']) }}">white house</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Faculty of Law basement']) }}">Faculty of Law basement</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Students Union Building']) }}">Students Union Building</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Humanities']) }}">Humanities</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Humanities car park']) }}">Humanities car park</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Forks and Fingers']) }}">Forks and Fingers</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Skye Bank Single ATM Machine']) }}">Skye Bank Single ATM Machine</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Bims Catering Services']) }}">Bims Catering Services</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Risky Joint']) }}">Risky Joint</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Moremi buttery']) }}">Moremi buttery</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Bus stop 1']) }}">Bus stop 1</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Bus stop 2']) }}">Bus stop 2</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Health Centre']) }}">Health Centre</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Oduduwa hall']) }}">Amphitheatre</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Computer Auditorium']) }}">Computer building and Faculty of Tech</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'University Zoo']) }}">OAU ZOO</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Biological Sciences']) }}">Biological Sciences</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Senate Car Park']) }}">senate car park</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Moremi Female Hostel']) }}">Moremi Female hostel</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'ETF Hall']) }}">ETF hostel</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Muritala Mohammend Post Graduate Hall']) }}">Post graduate hall</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Awolowo hall']) }}">Awolowo hall</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#about-us-->

    <section id="about-us" style="background-color: #FFF">
        <div class="container">
            <div class="text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">How much do you pay?</h2>
                </div>
            </div>
            <br clear="all">
            <div class="about-us row table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>FROM</th>
                        <th>TO</th>
                        <th>BUS <span class="fa fa-cab"></span></th>
                        <th>BIKE <span class="fa fa-bicycle"></span></th>
                    </tr>
                    <tr>

                    </tr>
                </table>
            </div>
        </div>
    </section>

@endsection

@section('page_scripts')

@endsection