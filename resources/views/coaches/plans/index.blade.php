@extends('coaches.layouts.app')
@section('title', 'Create Plan')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Create a New Plan</h6>
                <form method="POST" action="/plans" >
                    @csrf
                    <div class="mb-3">
                        <label for="plan_name" class="form-label">Plan Name</label>
                        <input type="text" class="form-control" id="plan_name" name="plan_name">
                        @error('plan_name')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration </label>
                        <input type="text" name="duration" class="form-control" id="duration" requierd>
                    @error('duration')
                            <strong>{{ $message }}</strong>
                    @enderror
                    </div>
                    <div class="mb-3">
                       <label for="price" class="form-label">Price </label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="0" >
                        @error('price')
                                <strong>{{ $message }}</strong>
                        @enderror
                      </div>
                    <div class="mb-3">
                        <label for="discount" class="form-label">Discount in % </label>
                        <input type="number" class="form-control" id="discount" name="discount" placeholder="0" min="0" max="100" >
                        @error('discount')
                                <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <form method="POST" action="/profile" enctype="multipart/form-data" >
                    <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Your Current Plans</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Name</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Final Price</th>
                                    <th scope="col" colspan="2" >Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($plans as $plan)
                                <tr>
                                    <td>{{$plan->plan_name}}</td>
                                    <td>{{$plan->duration}}</td>
                                    <td>{{$plan->price}}</td>
                                    <td>{{$plan->discount}}</td>
                                    <td>{{intval(($plan->price)*(1-($plan->discount)/100))}}</td>
                                    <td><form method="POST" action="/plans">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="plan_id" value="{{$plan->id}}">
                                        <button class="btn btn-sm btn-primary" href="">Delete</button></td>
                                    </form>
                                    <td><form method="POST" action="/plans">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="plan_id" value="{{$plan->id}}">
                                        <button class="btn btn-sm btn-primary" href="">Remove discount</button></td>
                                    </form>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection