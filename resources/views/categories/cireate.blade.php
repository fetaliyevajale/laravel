<form action="{{route'categories.uptade', ['id' =>$category->id]}}" method="post">
    @csrf
    <label for="name">Category name :</label>
    <input type="text" value="{{$category->name}}" id="name" name="name" required><br><br>
    <button type="submit">Submit</button>
</form>
