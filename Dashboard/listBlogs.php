<?php include "../connection.php";
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query = "delete from blog where BLOG_ID=$id";
  $result = $conn->query($query);
}

?>
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
                <table class='table table-hover'>
                    <thead>
                      <tr>
                        <th scope='col'>BLOG_ID</th>
                        <th scope='col'>TITLE</th>
                        <th scope='col'>CATEGORY_NAME</th>
                        <th scope='col'>PRODUCT_LINK</th>
                        <th scope='col'>CREATED_DATE</th>
                      </tr>
                    </thead>
                    <tbody>
                <?php
                    $query = "SELECT b.BLOG_ID,b.TITLE,c.CATEGORY_NAME,b.PRODUCT_LINK,b.CREATED_DATE FROM blog as b INNER JOIN category as c
                    ON b.CATEGORY_ID = c.CATEGORY_ID";
                    $result = $conn->query($query);
                    $BLOG_ID = "";
                    $TITLE = "";
                    $CATEGORY_NAME="";
                    $PRODUCT_LINK = "";
                    $CREATED_DATE = "";
                    $BLOG_ID_SELECTED="";
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $BLOG_ID = $row["BLOG_ID"];
                            $TITLE = $row["TITLE"];
                            $CATEGORY_NAME = $row["CATEGORY_NAME"];
                            $PRODUCT_LINK = $row["PRODUCT_LINK"];
                            $CREATED_DATE = $row["CREATED_DATE"];
                            echo "<tr>
                                <th scope='row'>$BLOG_ID</th>
                                <td>$TITLE</td>
                                <td>$CATEGORY_NAME</td>
                                <td>$PRODUCT_LINK</td>
                                <td>$CREATED_DATE</td>
                                <td><a href='listBlogs.php?id=$BLOG_ID' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#mymodal'>
                                    Delete
                                  </button></td>
                              </tr>
                          ";
                        }
                    }
                   
                ?>
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal fade" id="mymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body" id="modal_body">
                    Are you sure wannt to delete this blog!
                    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
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