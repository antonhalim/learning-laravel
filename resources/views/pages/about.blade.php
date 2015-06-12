@extends('app')

@section('content')

@if($first == 'Anton')
<h1>About Me</h1><h2>{!! $first !!} {!! $last !!}</h2> 
@else
<h1>Hey hey {!! $first !!} {!! $last !!}</h1>
@endif
<p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
@if(count($things))
  <h3>Things I Like</h3>
  <ul>
    @foreach ( $things as $thing)
      <li>{{$thing}}</li>
    @endforeach
  </ul>
@endif
@stop
