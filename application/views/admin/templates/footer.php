<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018-<?php echo date('Y'); ?> <a href="<?php echo $baseUrl; ?>">Pessuk</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $baseUrl; ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo $baseUrl; ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo $baseUrl; ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $baseUrl; ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo $baseUrl; ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo $baseUrl; ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $baseUrl; ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $baseUrl; ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo $baseUrl; ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo $baseUrl; ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo $baseUrl; ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->

<script src="<?php echo $baseUrl; ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $baseUrl; ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



<script src="<?php echo $baseUrl; ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo $baseUrl; ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $baseUrl; ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $baseUrl; ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $baseUrl; ?>assets/dist/js/demo.js"></script>
<script src="<?php echo $baseUrl; ?>assets/bower_components/ckeditor/ckeditor.js"></script>
<!-- Select2 -->
<script src="<?php echo $baseUrl; ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!--placepicker scripts start-->
<!--
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places&key=AIzaSyBxMeZhnLJfK4ax7_GOGDd00OS5-jBFc4M"></script>

    <script src="<?php echo $baseUrl; ?>assets/dist/js/jquery.placepicker.js"></script>

    <script>

      $(document).ready(function() {

        // Basic usage
        $(".placepicker").placepicker();

        // Advanced usage
        $("#advanced-placepicker").each(function() {
          var target = this;
          var $collapse = $(this).parents('.form-group').next('.collapse');
          var $map = $collapse.find('.another-map-class');

          var placepicker = $(this).placepicker({
            map: $map.get(0),
            placeChanged: function(place) {
              console.log("place changed: ", place.formatted_address, this.getLocation());
            }
          }).data('placepicker');
        });

      }); 

    </script>
-->
    <!--placepicker scripts end-->

<!--
<script type="application/javascript">
$('document').ready(function(){

  $("#findcheckvalue").change(function () {
      alert('there');
    if ($(this).is(':checked')) {
        alert('inside checked');
        $("#findcheckvalue").val("1");
    }
      else{
          alert('not checked');
          $("#findcheckvalue").val("0");
      }
});  

});
</script>
-->


<script>
  $(function () {
      //Initialize Select2 Elements
    $('.select2').select2()
    $('#example1').DataTable({
        'ordering'    : false,
    })
      $('.example1').DataTable({
        'ordering'    : false,
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
    $('.datepicker').datepicker({
      autoclose: true
    })
</script>



<!--mutiple file uploader scripts start-->

<script id="template-upload" type="text/x-tmpl">

{%

for (var i=0, file; file=o.files[i]; i++) {  customfiles.push(file);     %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <!--<td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>-->
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <!--<button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>-->
            {% } %}
            {% if (!i) { %}
            <a id="{%=customfiles.length%}" class="btn btn-warning cancel customcancelimglink"><i class="glyphicon glyphicon-ban-circle"></i><span>Cancel</span></a>
                <!--<button id="{%=customfiles.length%}" class="btn btn-warning cancel ">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>-->
            {% } %}
        </td>
    </tr>
{% } 

%}
</script>
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) {  %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo $baseUrl; ?>assets/dist/js/mutiplefilesupload/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->

<script src="<?php echo $baseUrl; ?>assets/dist/js/mutiplefilesupload/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo $baseUrl; ?>assets/dist/js/mutiplefilesupload/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo $baseUrl; ?>assets/dist/js/mutiplefilesupload/jquery.fileupload-image.js"></script>

<!-- The File Upload validation plugin -->
<script src="<?php echo $baseUrl; ?>assets/dist/js/mutiplefilesupload/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?php echo $baseUrl; ?>assets/dist/js/mutiplefilesupload/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="<?php echo $baseUrl; ?>assets/dist/js/mutiplefilesupload/main.js"></script>





<script src="<?php echo $baseUrl; ?>assets/dist/js/icheck.min.js"></script>

<script src="<?php echo $baseUrl; ?>assets/dist/js/custom.js"></script>



</body>
</html>
