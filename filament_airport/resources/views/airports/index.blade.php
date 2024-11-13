
<a href="{{route('airports.create')}}">new </a> <br>

@foreach ($airports as $airport)
    <a href="{{route('airports.show',['airport'=>$airport->id])}}">{{$airport->title}}</a>
    <a href="{{route('airports.edit',['airport'=>$airport->id])}}">e</a>
    
    <br>
@endforeach