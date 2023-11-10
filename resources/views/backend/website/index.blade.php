@extends('backend.layout.app')
@section('content')
<main id="main" class="main">
    <div class="pagetitle d-flex justify-content-between">

        <div>
            <h1>Websites</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('backend.home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Websites</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{route('website.create')}}"><button class="btn btn-primary">Add Website</button></a> 
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
                                    <th scope="col"> Name</th>
                                    <th scope="col"> Url</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($websites as $item)
                                <tr>
                                    <th scope="row">{{$count++}}</th>
                                    <td> <a href="{{route('formdata.edit', $item->id)}}"> {{$item->name}}</a></td>
                                    <td>{{$item->url}}</td>
                                    <td>{{strtoupper($item->status)}}</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="{{route('website.edit', $item->id)}}"><button class="btn btn-sm btn-warning">Edit</button></a>
                                        <form action="{{ route('website.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are You Sure ?')" type="submit"
                                                value="Delete">
                                        </form>
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