@extends('alergy.layout')
  
@section('content')
<div class="row mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="/"> Back</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('alergy.store') }}" method="POST">
    @csrf
  
     <div class="row mb-5 align-items-center">
        <div class="col-8">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-4 text-center">
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </div>   
</form>


<table class="table table-bordered">
    <tr>
        <th>Name</th>
    </tr>
    @foreach ($alergies as $alergy)
    <tr>
        <td>{{ $alergy->name }}</td>
    </tr>
    @endforeach
</table>

@endsection