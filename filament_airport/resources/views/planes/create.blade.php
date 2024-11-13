
<form action="{{route('planes.store')}}" method="POST">
    @csrf
    <input type="text" name="title">
    <input type="submit">
</form>