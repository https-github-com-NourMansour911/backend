@extends('coaches.layouts.app')
@section('title', 'Transformations')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add New Transformation</h6>
                <form method="POST" action="/transformations" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="client_name" class="form-label">Client Name</label>
                        <input type="text" class="form-control" id="client_name" name="client_name" requierd>
                        @error('client_name')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="client_age" class="form-label">Client Age</label>
                        <input type="number" name="client_age" class="form-control" id="client_age" requierd>
                        @error('client_age')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label for="formFileSm" class="form-label">Transformation after and before</label>
                        <input class="form-control form-control-sm bg-dark" id="formFileSm" name="img" type="file" accept=".jpeg,.png,.jpg,.gif,.svg">
                        @error('img')
                            <span class="alert alert-danger mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                    <div class="bg-secondary text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Your Current Transformations</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-white">
                                        <th scope="col">Client Name</th>
                                        <th scope="col">Client Age</th>
                                        <th scope="col">Transformation Image</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transformations as $trans)
                                    <tr>
                                        <td align="center">{{$trans->client_name}}</td>
                                        <td align="center">{{$trans->client_age}}</td>
                                        <td align="center"><img style="width:250px" src="{{ asset( "$trans->img") }}"></img></td>
                                        <td align="center">
                                            <form method="POST" action="/transformations">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{$trans->id}}">
                                                <button class="btn btn-sm btn-primary" href="">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection