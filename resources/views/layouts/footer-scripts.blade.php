<!-- jQuery -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>

		<!-- Select2 JS-->
		<script src="{{asset('js/select2.min.js')}}"></script>

		<script src="{{asset('js/jquery-ui.min.js')}}"></script>
		<script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>
		
		<!-- Datetimepicker JS -->  
		<script src="{{asset('js/moment.min.js')}}"></script>
		<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
		
		<!-- Calendar JS -->
		<script src="{{asset('js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('js/fullcalendar.min.js')}}"></script>
        <script src="{{asset('js/jquery.fullcalendar.js')}}"></script>

		<!-- Multiselect JS -->
		<script src="{{asset('js/multiselect.min.js')}}"></script>

		<!-- Datatable JS -->
		<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
		
<!-- Summernote JS -->
<script src="{{asset('plugins/summernote/dist/summernote-bs4.min.js')}}"></script>
		
			
		<script src="{{asset('plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>

		<!-- Task JS -->
		<script src="{{asset('js/task.js')}}"></script>

		<!-- Dropfiles JS
		<script src="{{asset('js/dropfiles.js')}}"></script> -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

		<!-- Custom JS -->
		<script src="{{asset('js/app.js')}}"></script>


<!-- Bootstrap 4 -->
<script src="{{URL::asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>




<!-- DataTables  & Plugins -->
<script src="http://127.0.0.1:8000/datatables/js/datatables/jquery.dataTables.min.js"></script>
<script src="http://127.0.0.1:8000/datatables/js/datatables-bs4/dataTables.bootstrap4.min.js"></script>
<script src="http://127.0.0.1:8000/datatables/js/datatables-responsive/dataTables.responsive.min.js"></script>
<script src="http://127.0.0.1:8000/datatables/js/datatables-responsive/responsive.bootstrap4.min.js"></script>
<script src="http://127.0.0.1:8000/datatables/js/datatables-buttons/dataTables.buttons.min.js"></script>
<script src="http://127.0.0.1:8000/datatables/js/datatables-buttons/buttons.bootstrap4.min.js"></script>
<script src="http://127.0.0.1:8000/datatables/js/jszip/jszip.min.js"></script>
<script src="http://127.0.0.1:8000/datatables/js/pdfmake/pdfmake.min.js"></script>
<script src="http://127.0.0.1:8000/datatables/js/pdfmake/vfs_fonts.js"></script>
<script src="http://127.0.0.1:8000/datatables/js/datatables-buttons/buttons.html5.min.js"></script>
<script src="http://127.0.0.1:8000/datatables/js/datatables-buttons/buttons.print.min.js"></script>
<script src="http://127.0.0.1:8000/datatables/js/datatables-buttons/buttons.colVis.min.js"></script>

<!-- AdminLTE App -->
<script src="{{URL::asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('js/demo.js')}}"></script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@yield('script')

