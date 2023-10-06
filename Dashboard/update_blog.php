
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- plugins:css -->
  <?php
  include 'style.php'
  ?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:_navbar.html -->
    <?php
    include '_navbar.php'
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:_sidebar.html -->
      <?php
      include '_sidebar.php'
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> update Blog</h4>
                  <p class="card-description">
                    Update your blog Using html code
                  </p>
                  <?php
                   include '../Config.php';
                   if(isset($_GET["id"])){
                       $id=$_GET["id"];
                       $query = "select * from blog where BLOG_ID=$id";
                    //    echo $query;
                       $result = $conn->query($query);
                       $title = "";
                       $blog = "";
                       $product_link = "";
                       $photo = "";
                       $video = "";
                       $category_id = "";
                       $created_date = "";
                       if ($result->num_rows > 0) {
                           while ($row = $result->fetch_assoc()) {
                               $title = $row["TITLE"];
                               $blog = $row["CONTENT"];
                               $product_link = $row["PRODUCT_LINK"];
                               $category_id = $row["CATEGORY_ID"];
                           }
                       }
                      
                   }
                     echo   "<form class='forms-sample' method='post' action='insertBlog.php' enctype='multipart/form-data'>
                            <div class='form-group'>
                            <input hidden name='id' value='$id'>
                            <label for='titel'>Blog Title</label>
                            <input type='text' class='form-control' id='titel' placeholder='Title' name='title' require value='$title'>
                            </div>
                            <div class='form-group'>
                            <label for='category'>blog category</label>
                            <select class='form-control form-control-lg' id='category' name='category'>
                            ";    
                                
                                $query = "select * from category";
                                $result = $conn->query($query);
                                if ($result->num_rows > 0) {
                                // OUTPUT DATA OF EACH ROW 
                                while ($row = $result->fetch_assoc()) {
                                    if($row["CATEGORY_ID"]==$category_id){
                                        echo "<option value=" . $row["CATEGORY_ID"] . " selected >" . $row["CATEGORY_NAME"] . "</option>";
                                    }
                                    else{
                                        echo "<option value=" . $row["CATEGORY_ID"] . ">" . $row["CATEGORY_NAME"] . "</option>";
                                    }
                                }
                                } else {
                                echo "0 results";
                                }
                                
                            echo "
                                </select>
                                </div>
                                <div class='mb-3'>
                                <label for='photo' class='form-label'>Add Cover Photo</label>
                                <input class='form-control' type='file' id='photo' accept='image/png, image/jpeg, image/jpg' name='photo' require value='$'>
                                </div>
                                <div class='mb-3'>
                                <label for='video' class='form-label'>Add Video</label>
                                <input class='form-control' type='file' id='video' name='video' accept='video/mp4,video/x-m4v,video/*'>
                                </div>
                                <div class='mb-3'>
                                <label for='product_link' class='form-label'>product link</label>
                                <input class='form-control' type='text' id='product_link' name='product_link' placeholder='add product link'value='$product_link' require>
                                </div>

                                <div class='form-group'>
                                <label for='blog'>Enter your html code</label>
                                <textarea name='blog' id='blog' class='form-control'rows='10'>$blog</textarea>                   
                                </div>

                                <button type='submit' class='btn btn-primary me-2 text-light' id='submit'>Submit</button>

                            </form>
                        ";
                  ?>
                   
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->

        <div class="modal fade" id="mymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body" id="modal_body">

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Ok</button>

              </div>
            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:_footer.html -->
        <?php
        include '_footer.php'
        ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(
      function() {
        $('form').submit(function(e) {
        //   $("#paragraph_hiden").val($("#paragrah").text())
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'update.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                // alert(response);
                $('#modal_body').text(response);

                $('#mymodal').modal('show');
                // location.reload();
                }
          })
          $('#mymodal').on('hidden.bs.modal', function() {
            location.reload();
          })

          

        })
        

      })
  </script>
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>