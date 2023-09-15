@extends('coaches.layouts.app')
@section('title', 'Certifications')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add New Certification</h6>
                <form method="POST" action="/certifications" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Certification Name</label>
                        <input type="text" class="form-control" id="name" name="name" requierd>
                        @error('name')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label for="formFileSm" class="form-label">Image</label>
                        <input class="form-control form-control-sm bg-dark" id="formFileSm" name="img" type="file"
                            accept=".jpeg,.png,.jpg,.gif,.svg">
                        @error('img')
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Your Current Certifications</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($certifications as $cert)
                                <tr>
                                    <td align="center">{{$cert->name}}</td>
                                    <td align="center"><img style="width:250px" src="{{ asset("$cert->img ")
                                        }}"></img></td>
                                    <td align="center">
                                        <form method="POST" action="/certifications">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{$cert->id}}">
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