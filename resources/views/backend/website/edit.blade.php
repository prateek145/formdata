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

                        <form action="{{route('website.update', $website->id)}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{$website->name}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Url</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('url') is-invalid @enderror"
                                        name="url" value="{{$website->url}}">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" id=""
                                        class="form-control  @error('status') is-invalid @enderror">
                                        <option value="active" {{$website->status == 'active' ? "selected" : ""}}>Active</option>
                                        <option value="inactive" {{$website->status == 'inactive' ? "selected" : ""}}>InActive</option>
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