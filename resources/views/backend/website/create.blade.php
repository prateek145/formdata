@extends('backend.layout.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Website</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('backend.home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Website</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Website</h5>

                        <form action="{{route('website.store')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Url</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('url') is-invalid @enderror"
                                        name="url" value="{{old('url')}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Users/Email</label>
                                <div class="col-sm-10">
                                    <select name="user_id" id=""
                                        class="form-control  @error('user_id') is-invalid @enderror">
                                        <option value="null">None</option>
                                        @foreach ($users as $item)
                                        <option value="{{$item->id}}">{{$item->name}} / {{$item->email}}</option>
                                            
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" id=""
                                        class="form-control  @error('status') is-invalid @enderror">
                                        <option value="active">Active</option>
                                        <option value="inactive">InActive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Submit Button</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>

                        </form>



                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection