@if(session('alertError'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                {{ session('alertError') }}
            </div>
        </div>
    </div>
@endif