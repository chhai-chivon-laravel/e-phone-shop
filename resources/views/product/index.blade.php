<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>
<body>

<div class="container">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>CRUD</h2>
            <a href="http://localhost:8000/products/create">
                <button type="button" class="btn btn-success">
                    Create Item
                </button>
            </a>
        </div>
    </div>

    <!-- Item Listing -->
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th width="200px">Action</th>
        </tr>
        <tbody>
            @foreach($products  as $pro)
                <tr>
                    <td>{{ $pro.name }}</td>
                    <td>{{ $pro.description }}</td>
                    <td>{{ $pro.price }}</td>
                    <td>
                        <button class="btn btn-primary" >Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/item.js"></script>

</body>
</html>