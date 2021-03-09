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

<div class="mt-5">
    <h1>All colors</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Color</th>
            <th scope="col">Cars</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($colors as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->color}}</td>
                <td>
                    @foreach ($item->cars as $item)
                        <p>{{$item->brand}}</p>
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>