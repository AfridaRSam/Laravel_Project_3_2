@extends('layouts.app')

@section('title','Edit')

@push('css')
  
@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            @include('layouts.partial.msg')

             
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Edit Doctor</h4>
                  
                </div>
                <div class="card-body" style="font-size:15px">
                <form method="POST" action="{{route('doctor.update', $doctor->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" value="{{ $doctor->name }}"  name="name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department Name</label>
                          <select class="form-control" name="department">
                            @foreach($departments as $department)
                                <option {{ $department->id == $doctor->department->id ? 'selected' : '' }} value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" class="form-control" value="{{ $doctor->description }}"  name="description">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Payment</label>
                          <input type="text" class="form-control" value="{{ $doctor->doc_fee }}" name="doc_fee">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                            <label class="control-label">Image</label>
                              <input type="file" name="image">
                      </div>
                    </div>
                    <br> <br> 
                    <a href="{{route('doctor.index')}}" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

@endsection

@push('scripts')

@endpush