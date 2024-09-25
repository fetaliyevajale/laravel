<h1>Kateqoriyalar Siyahısı (Cəmi: {{ $categories->total() }})</h1>
<a href="{{rotue('categories.')}}">
    <button></button>
</a>

<ul>
    @foreach($categories as $category)
        <li>{{ $category->name }}</li> 
    @endforeach
</ul>

{{ $categories->links() }} 
