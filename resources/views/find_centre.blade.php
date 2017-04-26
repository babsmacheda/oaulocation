@extends('template')

@section('page_styles')
@endsection

@section('body_content')

    <div class="container" style="min-height: 600px">
        <div class="row" style="margin-top: 80px">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">Pick a location below</div>
                    </div>
                    <div class="panel-body text-center">
                        <a class="btn btn-success btn-xs" href="{{ route('find-centre', ['location' => 'awolowo hall']) }}">Awo Hall</a>
                        <a class="btn btn-success btn-xs" href="{{ route('find-centre', ['location' => 'department of chemistry']) }}">Yellow house</a>
                        <a class="btn btn-success btn-xs" href="{{ route('find-centre', ['location' => 'white house']) }}">white house</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div style="width: 100%; height: 450px;">
                    {!! Mapper::render(0) !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page_scripts')

@endsection