@extends('food.layout')
 
@section('content')
    <div class="row mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Test</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('alergy.create') }}">Add Allergic</a>
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

    
    <form action="{{ route('foods.store') }}" method="POST">
        @csrf
        <div class="row mb-5">            
            <div class="col col-lg-4 margin-tb">
                <select class="form-select" name="food_id">
                    <option selected>Open this select menu</option>
                    @foreach ($foods as $food)
                        <option value="{{ $food->id }}">{{ $food->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col col-lg-4">            
                <select class="form-select" name="alergy_id">
                    <option selected>Open this select menu</option>
                    @foreach ($alergies as $alergy)
                        <option value="{{ $alergy->id }}">{{ $alergy->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col col-lg-4">
                <div class="pull-right">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>

            </div>
        
        </div>
    </form>
   
    <table class="table table-bordered">
        <tr>
            <th>Food</th>
            <th>Alergy</th>
        </tr>
        @foreach ($eats as $eat)

        <tr>
            <td>{{ $eat->food->name }}</td>
            <td>{{ $eat->alergy->name }}</td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $posts->links() !!} --}}
      
@endsection