<h1>All Cars</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Brand</th>
        <th scope="col">Color</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($cars as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->brand}}</td>
            <td>{{$item->colors->color}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

