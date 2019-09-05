<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="col-md-4">
          <form action="{{route('orderitem.store')}}" method="POST">
              @csrf
              <div class="form-group">
                  <label for="quantity">Quantity</label>
                  <input type="text" class="form-control" id="exampleInputquantity1" name="quantity" placeholder="Enter Quantity">
              </div>
              <div class="form-group">
                  <label for="unitprice">UnitPrice</label>
                  <input type="text" class="form-control" id="exampleInputPrice1" name="unitprice" placeholder="Enter Price">
              </div>
              <button type="submit" class="btn btn-primary"> Submit</button>
              <button type="cancel" class="btn btn-danger">Cancel</button>
          </form>
      </div>
      <div class="container">
      <table class="table">
      <thead>
      <tr>
      <th>Order Quantity</th>
      <th>Order Price</th>
      <th>Action</th>
      </tr>
      </thead>

      <tbody>
      @foreach($orderitems as $data)
      <tr>
      <td scope="row"> {{$data->order_quantity}}  </td>
      <td> {{$data->order_price}} </td>
      <td> <button type="edit" class="btn btn-primary"> EDIT </button>
      <button type="delete" class="btn btn-danger"> DELETE</button></td>
      </tr>
      @endforeach
      </tbody>
      
      </table></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>