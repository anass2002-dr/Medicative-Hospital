<?php include "../Config.php";


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
                      $CATEGORY_NAME = "";
                      $PRODUCT_LINK = "";
                      $CREATED_DATE = "";
                      $BLOG_ID_SELECTED = "";
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
                                <td><button class='update btn btn-success' id='update_<?= $BLOG_ID ?>' data-id='$BLOG_ID' >update</button>
                                </td>
                                <td><button class='delete btn btn-danger' id='del_<?= $BLOG_ID ?>' data-id='$BLOG_ID' >Delete</button>
                                </td>
                               
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
          </div>
        </div>

      </div>
      <div class="modal fade" id="mymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body" id="modal_body">
              Do you really want to delete this blog?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" id="delete" data-bs-dismiss="modal">Delet</button>
              <button type="button" class="btn btn-secondary" id="Cancel" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:_footer.html -->

      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <?php
  include '_footer.php'
  ?>
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
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {

      // Delete 
      $('.delete').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        $('#mymodal').modal('show');
        $('#delete').click(function() {
          $.ajax({
            url: 'delete_blog.php',
            type: 'POST',
            data: {
              id: deleteid
            },
            success: function(response) {
              location.reload();
            }
          });
        });


      });
    });
  </script>
</body>

</html>