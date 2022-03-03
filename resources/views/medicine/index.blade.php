<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medicines</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    h2 {
        text-align:center;
    }
</style>
<body>

<div class="container">
  <h2>List Medicines</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Generic Name</th>
        <th>Formulas</th>
        <th>Restriction Formula</th>
        <th>Price</th>
        <th>Description</th>
        <th>Faskes TK1</th>
        <th>Faskes TK2</th>
        <th>Faskes TK3</th>
        <th>Image</th>
        <th>Created At</th>
        <th>Update At</th>
        <th>Category</th>
      </tr>
    </thead>
    <tbody>

    @foreach($listdata as $li)
      <tr>
        <td>{{$li->id}}</td>
        <td>{{$li->generic_name}}</td>
        <td>{{$li->formulas}}</td>
        <td>{{$li->restriction_formula}}</td>
        <td>{{$li->price}}</td>
        <td>{{$li->description}}</td>
        <td>{{$li->faskes_TK1}}</td>
        <td>{{$li->faskes_TK2}}</td>
        <td>{{$li->faskes_TK3}}</td>
        <td>{{$li->image}}</td>
        <td>{{$li->created_at}}</td>
        <td>{{$li->updated_at}}</td>
        <td>{{$li->category}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>