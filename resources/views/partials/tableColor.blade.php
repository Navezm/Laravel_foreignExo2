<h1>Cars by Colors</h1>
<div class="mt-5">
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
                        <p>{{$item->brand}} {{$item->year}}</p>
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>