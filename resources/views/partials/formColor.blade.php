<h1>Add a color</h1>
<form action="/colors" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Add Color</label>
      <input type="text" class="form-control" name="color">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>