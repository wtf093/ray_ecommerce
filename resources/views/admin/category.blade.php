<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">

        @if(session()->has('message'))


        <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>

            {{session()->get('message')}}

        </div>
        @endif

        <div class="container">
   
    <form action="{{ url('/add_category') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="category_name">Category Name:</label>
            <input type="text" id="category_name" name="category_name" required>
        </div>
        <div class="form-group">
            <button type="submit" class="add-category-btn">Add Category</button>
        </div>
    </form>

    <h2>Existing Categories</h2>
    <table>
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
                <tr>
                    <td>{{ $data->category_name }}</td>
                    <td>
                            <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="
                            {{url('delete_category',$data->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



        

        </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>