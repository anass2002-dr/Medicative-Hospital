<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
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
                  <h4 class="card-title"> New blog</h4>
                  <p class="card-description">
                    Create new blog
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Blog Title</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">blog category</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Add Cover Photo</label>
                      <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                    <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Add Video</label>
                      <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                    <div class="mb-3">
                      <input type="button" class="btn btn-dark text-white" value="Bold" id="bold" onclick="">
                      <input type="button" class="btn btn-light text-primary" value="Link" id="link">
                      <input type="button" class="btn btn-secondary text-white" value="Italic" id="italic">
                    </div>
                    <div class="form-group">
                      <label for="textarea">Tape your blog</label>
                      <textarea class="form-control" rows=" 20" id="textarea"></textarea>
                    </div>
                    <p id="paragrah">
                      <!-- hello today <b>txt</b> -->

                    </p>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
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
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('#textarea').keyup(function() {
        var txt = $('#textarea').val()
        $('#paragrah').html(txt)
        // this.val(text_area)
      })
      $('#textarea').keypress(function(e) {
        if (e.which == 13) {
          var txt = $('#textarea').val()
          txt = txt + '<br>'
          console.log(txt)
          $('#textarea').val(txt)
        }
        // this.val(text_area)
      })
      $.fn.myFunction = function(para) {
        var textarea = $('#textarea').val()
        var startPos = $('#textarea').prop('selectionStart');
        var endPos = $('#textarea').prop('selectionEnd');
        var selectionBefore = textarea.substring(0, startPos);
        var selection = textarea.substring(startPos, endPos);
        var selectionAfter = textarea.substring(endPos);
        var surrounder = selection.replace(selection, "<" + para + ">" + selection + "</" + para + ">");
        var newText = selectionBefore + surrounder + selectionAfter;
        $('#textarea').val(newText)
      }
      $('#bold').click(function() {
        $.fn.myFunction('strong')
      })
      $('#italic').click(function() {
        $.fn.myFunction('i')
      })
    })
    // var bold = document.getElementById('bold')
    // var link = document.getElementById('link')
    // var italic = document.getElementById('italic')
    // var text_area = document.getElementById('textarea')
    // var paragrah = document.getElementById('paragrah')

    // // text_area.addEventListener('')
    // function tobold() {
    //   startPos = text_area.selectionStart;
    //   endPos = text_area.selectionEnd
    //   var selectionBefore = textarea.value.substring(0, startPos);
    //   var selection = text_area.value.substring(startPos, endPos);
    //   var selectionAfter = text_area.value.substring(startPos);
    //   var surrounder = selection.replace(selection, "<strong>" + selection + "</strong>");
    //   var newText = selectionBefore + surrounder + selectionAfter;
    //   text_area.innerHTML = newText;
    // }
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