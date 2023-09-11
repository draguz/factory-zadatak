@extends('layout')

@section('content')
    
<div class="container">

<h1>Jela svijeta</h1>

@if (count($meals)==0)

    <p>Nije pronađeno niti jedno jelo!</p>
    
@else
<form method="get" action="/search">
    <div class="input-group">
        <input name="search" class="form-control"  value="{{ isset($search) ? $search : ''}}">
            <button type="submit" class="btn btn-primary">Search</button>
      </div>
  
    
</form>
<br><br>
<table class="table table-striped">
    <tr>
        <td>Naziv</td>
        <td>Kategorija</td>
        <td>Created at</td>
        <td>Updated at</td>
    </tr>
    @foreach ($meals as $item)
    <tr>
        <td><h2><a href="/jela/{{$item->id}}">{{ $item->naziv }}</a></h2></td>
        <td>{{ ($item->category->title) }}</td>
        <td>{{ ($item->created_at) }}</td>
        <td>{{ ($item->updated_at) }}</td>
    </tr>
    @endforeach
</table>

@endif



</div>
@endsection