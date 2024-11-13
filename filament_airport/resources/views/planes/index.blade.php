<a href="{{route('planes.create')}}">new </a> <br>

@foreach ($planes as $plane)
    <a href="{{route('planes.show',['plane'=>$plane->id])}}">{{$plane->title}}</a>
    <a href="{{route('planes.edit',['plane'=>$plane->id])}}">e</a>
    
    <br>
@endforeach