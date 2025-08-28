
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>
       @include('admin.slidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
  
 <div class="container-fluid page-body-wrapper">
    <div class="contariner" align="center">
  <h1 class="heading-of-product">Add Product</h1>
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            X
        </button>
    </div>
@endif
<div class="container-fluid page-body-wrapper">
 <form action="{{ route('uploadproduct') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="product-enter-title">
      <label>Product Title</label>
      <input type="text" name="title" placeholder="Give a Product Title" required>
    </div>

    <div class="product-enter-title">
      <label>Price</label>
      <input type="number" name="price" placeholder="Give a Product Price" required>
    </div>

    <div class="product-enter-title">
      <label>Description</label>
      <textarea name="des" placeholder="Give a Product Description" required></textarea>
    </div>

    <div class="product-enter-title">
      <label>Quantity</label>
      <input type="number" name="quantity" placeholder="Give a Product Quantity" required>
    </div>

    <div class="product-enter-title">
      <label>Product Image</label>
      <input type="file" name="file">
    </div>

    <div class="product-submit_btn">
      <button type="submit">Add Product</button>
    </div>
  </form>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>