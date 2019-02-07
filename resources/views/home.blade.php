<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2></h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Mamber</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr">
    </div>

<div class="form-group">
      <label for="usr">Number:</label>
      <input type="text" class="form-control" id="usr">
    </div>

<div class="form-group">
      <label for="usr">WorkId:</label>
      <input type="text" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd">
    </div>

    <div class="form-group">
      <label for="pwd">Who:</label>
<div class="form-group">
  
  <select class="form-control" id="sel1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Sign Up</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



<div class="container">
  <h2></h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Number</th>
        <th>Who</th>
        <th>Info</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>Police</td>
        <td><button type="button" class="btn btn-info">Info</button></td>
        </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>Police</td>
        <td><button type="button" class="btn btn-info">Info</button></td>
        
        </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>Police</td>
        <td><button type="button" class="btn btn-info">Info</button></td>
        
        </tr>
    </tbody>
  </table>
</div>

</body>
</html>