<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medicines in One Category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .col {
        margin: 10px;
        border: 1px solid black;
    }
    img {
        width: 200px;
        height: 200px;
    }
    h2 {
        text-align: center;
    }
</style>
<body>

<div class="container-fluid">
<h2>{{$listdatagrid[0]->name}}</h2>
  <div class="row">
    @foreach($listdatagrid as $g)
    <div class="col">
        <p style='text-align: center;'>{{$g->generic_name}}</p>
        <p style='text-align: center;'><img src ='{{ asset("images/".$g->image) }}' /></p>
        <p>Formulas: {{$g->formulas}}</p>
        <p>Price: {{$g->price}}</p>
    </div>
    @endforeach
  </div>
</div>

</body>
</html>