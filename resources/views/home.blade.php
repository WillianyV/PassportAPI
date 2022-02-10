@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h4>
                    Bem-vindo, Name!
                </h4>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <a href="http://localhost:8080/home" style="text-decoration: none" target="_blank">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">PassportClient1</h5>
                                    <p class="card-text">Sistema de Cliente 1.</p>
                                </div>
                            </div>
                        </a>                        
                    </div>
                    <div class="col-sm-3">
                        <a href="http://localhost:8081/home" style="text-decoration: none" target="_blank">
                            <div class="card text-white bg-secondary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">PassportClient2</h5>
                                    <p class="card-text">Sistema de Cliente 2.</p>
                                </div>
                            </div>
                        </a>                        
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title">PassportClient3</h5>
                                <p class="card-text">Sistema de Cliente 3.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-white bg-danger  mb-3">
                            <div class="card-body">
                                <h5 class="card-title">PassportClient4</h5>
                                <p class="card-text">Sistema de Cliente 4.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
