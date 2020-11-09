<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2020</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
<script type="text/javascript">
$(document).ready(function(){
function loadTable(){
$.ajax({
url:'./operations/read.php',
type:'POST',
success:function(data){
$('#data').html(data)
console.log(data);
}
})
}
loadTable();
$('#saveButton').on('click',function(e){
e.preventDefault();
var title=$('#title').val();
var descrip=$('#descrip').val();
var basic=$('#basic');
var success=$('#success');
var error=$('#error');
if(title==''  || descrip==''){
error.show();
error.html('all filed must required').slideDown();
}else {
  var file_data = $('#fileses').prop('files')[0];
  var form_data = new FormData();
  form_data.append('image', file_data);
  form_data.append('title',title);
  form_data.append('descrip',descrip);
$.ajax({
url:'./operations/insert.php',
type:'POST',
data:form_data,
processData: false,
contentType: false,
success:function(data){
loadTable();
basic.trigger('reset');
success.html('data Inserted').slideDown();
}
})
}
})
})


</script>
</body>
</html>
