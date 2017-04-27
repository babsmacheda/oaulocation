
<div style="position: absolute;width: 100%;z-index: 100000;top: 100px;">
    @if($errors->count() > 0)

        <div class="alert alert-danger">
            {!! $errors->first() !!}
        </div>

    @elseif(Session::has('success'))

        <div class="alert alert-success">
            {!! Session::get('success') !!}
        </div>

    @elseif(Session::has('warning'))

        <div class="alert alert-warning">
            {!! Session::get('warning') !!}
        </div>

    @elseif(Session::has('danger'))

        <div class="alert alert-danger">
            {!! Session::get('danger') !!}
        </div>

    @endif
</div>