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
            <a href="{{ route('website.index') }}"><button class="btn btn-danger">Back</button></a> 
        </div>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">List Websites</h5>
                        <table id="example" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"> Data</th>
                                    <th scope="col"> Url</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formdataes as $item)
                                <tr>
                                    <th scope="row">{{$count++}}</th>
                                    <td>                    
                                        @foreach (json_decode($item->inputvalue) as $key => $value)
                                        {{$key}} = {{$value}} ,
                                            
                                        @endforeach
                                    </td>
                                    <td>{{$item->url}}</td>
                                    <td>{{$item->created_at->format('d-m-y')}}</td>
                                   
                                    {{-- <td>{{$item->inputvalue}}</td> --}}
                                    <td class="d-flex justify-content-between">
                                        <a href="{{route('formdata.show', $item->id)}}"><button class="btn btn-sm btn-warning">Show</button></a>
                                </tr>
                                    
                                @endforeach

                            </tbody>
                        </table>


                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection