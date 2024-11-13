
<form action="{{route('planes.update',['plane'=>$plane->id])}}" method="POST">
    @csrf
    <input type="text" name="title" value="{{$plane->title}}">
    <input type="submit">
</form>