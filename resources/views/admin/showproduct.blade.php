
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
           <table>
            <tr style="background-color:gray;">
                <td style="padding:20px;" >Title</td>
                <td style="padding:20px;" >Description</td>
                <td style="padding:20px;" >Price</td>
                <td style="padding:20px;" >Image</td>
                <td style="padding:20px;" >update</td>
                <td style="padding:20px;" >Delete</td>
            </tr>
            @foreach($data as $product)
             <tr align="center" style="background-color:black; ">
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                       <td><img height="100" width="100" src="/productimage/{{$product->image}}" alt=""></td>
                
                       <td>
         <a class="btn btn-denger" href="{{url('deleteproduct',$product->id)}}">Delate</a>
                </td>
                <td>
                    <a class="btn btn-primery" href="">Update</a>
                </td>
            </tr>
            @endforeach
           </table>
        </div>
        
      </div>
    
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