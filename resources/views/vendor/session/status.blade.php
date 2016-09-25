@if(session('succeedMessage'))
    <div class="alert alert-success">
        {{session('succeedMessage')}}
    </div>
@elseif(session('failedMessage'))
    <div class="alert alert-danger">
        {{session('failedMessage')}}
    </div>
@endif