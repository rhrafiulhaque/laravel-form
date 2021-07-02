@extends('layout')

@section('body')
<main role="main" class="inner cover">
    <h1>Form in signin.</h1>
    <form action="{{route('form.save')}}" method="POST">
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Username">
        </div>
        
        <div class="form-group">
        <input class="form-control" type="email" name="email" placeholder="email">
        </div>
        
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</main>
@endsection