<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.product_css')
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
   
        
        <div class="form-container">
        <h2 class="form-title">Add New Product</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product-title" class="form-label">Product Title</label>
                <input type="text" id="product-title" name="product_title" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="product-description" class="form-label">Product Description</label>
                <textarea id="product-description" name="product_description" rows="4" class="form-input" required></textarea>
            </div>
            <div class="form-group form-group-flex">
                <div class="form-group-half">
                    <label for="product-price" class="form-label">Product Price</label>
                    <input type="number" id="product-price" name="product_price" class="form-input" step="0.01" required>
                </div>
                <div class="form-group-half">
                    <label for="discount-price" class="form-label">Discount Price</label>
                    <input type="number" id="discount-price" name="discount_price" class="form-input" step="0.01">
                </div>
            </div>
            <div class="form-group">
                <label for="product-quantity" class="form-label">Product Quantity</label>
                <input type="number" id="product-quantity" name="product_quantity" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="product-category" class="form-label">Product Category</label>
                <select id="product-category" name="product_category" class="form-input" required>
                    <option value="" disabled selected>Select a category</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="home">Home</option>
                    <option value="books">Books</option>
                    <option value="toys">Toys</option>
                </select>
            </div>
            <div class="form-group">
                <label for="product-image" class="form-label">Product Image</label>
                <input type="file" id="product-image" name="product_image" class="form-file">
            </div>
            <div class="form-group">
                <button type="submit" class="form-submit">Submit</button>
            </div>
        </form>
    </div>

    </div>
    </div>




    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>