<script>
window.addEventListener('load', function() {

@if ($errors->any())
@foreach ($errors->all() as $error)
$.notify("<?= $error ?>","danger");
@endforeach
@endif

@if ($message = Session::get('success'))
$.notify("<?= $message ?>","success");

@endif
@if ($message = Session::get('error'))
$.notify("<?= $message ?>","danger");
@endif

@if ($message = Session::get('fail'))
$.notify("<?= $message ?>","danger");
@endif

@if ($message = Session::get('warning'))
$.notify("<?= $message ?>","warning");
@endif

@if ($message = Session::get('info'))
$.notify("<?= $message ?>","info");
@endif

@if ($message = Session::get('status'))
$.notify("<?= $message ?>","success");
@endif

});
</script>