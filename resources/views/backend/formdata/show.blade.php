@extends('backend.layout.app')
@section('content')
<main id="main" class="main">
    <div class="pagetitle d-flex justify-content-between">

        <div>
            <h1>Formdata</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('backend.home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Formdata</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ url()->previous() }}"><button class="btn btn-danger">Back</button></a> 
        </div>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    @foreach ($data as $key => $value)
                    {{$key}} = {{$value}} <br>
                        
                    @endforeach
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection