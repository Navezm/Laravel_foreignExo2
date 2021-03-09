<div class="my-5">
    <h1>Add a Car</h1>
    <form action="/cars" method="POST">
        @csrf
        <div class="form-group">
        <label for="exampleInputEmail1">Brand</label>
        <input type="text" class="form-control" name="brand">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Year</label>
            <input type="text" class="form-control" name="year">
        </div>
        <select name="color_id" id="">
            @foreach ($colors as $item)
                <option value="{{$item->id}}">{{$item->color}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>