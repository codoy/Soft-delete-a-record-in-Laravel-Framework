@extends('layout.main')
@section('content')
<div class="container">
   <div class="col-md-8">
      <table class="table table-hover">
         <thead>
            <tr>
               <th width="90%">State</th>
               <th>Delete</th>
            </tr>
         </thead>
         <tbody>
            @foreach($states as $state)
            <tr>
               <td>{{$state->name}}</td>
               <td> <a href="active/delete/{{$state->id}}" class="btn btn-xs btn-primary">Delete</a> </td>
            </tr>
            @endForeach
         </tbody>
      </table>
   </div>
   <div class="col-md-4">  </div>
</div>
@endsection