<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/printTable.js"></script>
<script>
// DROPDOWN ADD USER
$(document).ready(function () {
$("#btn-adduser").click(function () {
   $("#content-adduser").toggleClass("d-none");
   $("#btn-adduser > i").toggleClass("bi-caret-down-fill bi-caret-up-fill")
});
});
// DROPDOWN DETAIL
$(document).ready(function () {
$("#btn-detail").click(function () {
   $("#content-detail").toggleClass("d-none");
   $("#btn-detail > i").toggleClass("bi-caret-down-fill bi-caret-up-fill")
});
});
// DROPDOWN EDIT
$(document).ready(function () {
$("#btn-edit").click(function () {
   $("#content-edit").toggleClass("d-none");
   $("#btn-edit > i").toggleClass("bi-caret-down-fill bi-caret-up-fill")
});
});
</script>