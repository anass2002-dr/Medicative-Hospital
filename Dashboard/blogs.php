<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
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
                    <div class="mb-3 para_i">
                      <!-- <input type="button" class="btn btn-dark text-white" value="Bold" id="bold" onclick="">
                      <input type="button" class="btn btn-light text-primary" value="Link" id="link">
                      <input type="button" class="btn btn-secondary text-white" value="Italic" id="italic"> -->
                      <button type="button" class="btn border border-secondary"  id="bold"><b>B</b></button>
                      <button type="button" class="btn border border-secondary"  id="italic"><i class="ti-Italic"></i> </button>
                      <button type="button" class="btn border border-secondary"  id="link"><i class="ti-link"></i> add link</button>
                      <input type="button" id="_h1" class="btn border border-secondary" value="H1">
                      <input type="button" id="_h2" class="btn border border-secondary" value="H2">
                      <input type="button" id="_h3" class="btn border border-secondary" value="H3">
                      <input type="button" id="_h4" class="btn border border-secondary" value="H4">
                      <input type="button" id="_h5" class="btn border border-secondary" value="H5">
                      <input type="button" id="_h6" class="btn border border-secondary" value="H6">

                    </div>
                    <div class="form-group">
                      <label for="paragrah">Tape your blog</label>
                      <p id="paragrah" contenteditable="true" class="form-control" name="paragrah">
                      </p>
                      <input type="text" hidden id="paragraph_hiden">
                    </div>

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
    $(document).ready(
      function() {
        // $('#textarea').keyup(function() {
        //   var txt = $('#textarea').val()
        //   $('#paragrah').html(txt)
        //   // this.val(text_area)
        // })
       
        function myFunction(para) {


          var selection = window.getSelection();
          var start = selection.anchorOffset;
          var end = selection.focusOffset;
          if (start >= 0 && end >= 0){
            console.log("start: " + start);
            console.log("end: " + end);
          }
          var paragrah = $('#paragrah').html()
          var selectionBefore = paragrah.substring(0, start);
          var selection = paragrah.substring(start, end);
          var selectionAfter = paragrah.substring(end);
          var surrounder = selection.replace(selection, "<" + para + ">" + selection + "</" + para + ">");
          var newText = selectionBefore + surrounder + selectionAfter;
          $('#paragrah').html(newText)
        }
        
        function header_change(para){
          var h1 = prompt('Enter your title:');
          if(h1!=null){
            var paragrah = $('#paragrah').html()
            paragrah2=paragrah+'<'+para+'>'+h1+'</'+para+'>'
            console.log(paragrah2)
            $('#paragrah').html(paragrah2)
          }
         
        }
        $('#_h1').click(function(){
          header_change('h1')

        })
        $('#_h2').click(function(){
          header_change('h2')

        })
        $('#_h3').click(function(){
          header_change('h3')

        })
        $('#_h4').click(function(){
          header_change('h4')

        })
        $('#_h5').click(function(){
          header_change('h5')

        })
        $('#_h6').click(function(){
          header_change('h6')

        })
        var clickB = 0;
        $('#bold').click(function() {
          document.execCommand("bold");
        })
        $('#italic').click(function() {
          document.execCommand("italic");
        })
        $('#link').click(function() {
          var url = prompt('Enter a URL:', 'http://');
          var selection = document.getSelection();
          document.execCommand('createLink', true, url);
          console.log($('#paragrah').html())
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