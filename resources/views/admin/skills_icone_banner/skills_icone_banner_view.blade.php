@extends('admin.admin_master')

@section('admin')

    {{-- @section('custom_css')
    <!-- Font Awesome -->

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
@endsection --}}
    <div class="row">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Table /</span> Skills Icons</h4>
        <div class="card">
            {{-- <a href=""class="btn rounded-pill btn-info waves-effect waves-light">Info</a> --}}

            <div class="d-flex justify-content-end mt-3">
                <a href="{{route('add_skills_banner_icon')}}" class="fw-bold py-3 mb-4 btn rounded-pill btn-success ">Skills Icons</a>
            </div>





                <div class="table-responsive text-nowrap">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Image Icone</th>
                                <th>Seo Image Icone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                            @foreach ($banner_ikons as $item)
                                <tr>
                                    <td>
                                        <img width="100px" height="100px" src="{{ asset($item->image) }}" alt="{{ $item->alt_image }}">
                                    </td>
                                    <td>{{ $item->alt_image }}</td>
                                    <td>

                                        <a href=""class="btn rounded-pill btn-info waves-effect waves-light">Info</a>
                                        <a
                                            href=""class="btn rounded-pill btn-danger waves-effect waves-light">Info</a>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>


        </div>


    </div>












@section('custom_js')
    {{-- <script src="{{ asset('backend/lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App --> --}}

    <!-- AdminLTE for demo purposes -->


    <script src="{{ asset('backend/lte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('backend/lte/plugins/toastr/toastr.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script>
        $(document).ready(function() {
            $('.upload_job_file').click(function() {
                var id = $(this).data('id');
                $('#jo_id').val(id);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.upload_job_file').click(function() {
                var id = $(this).data('id');
                $('#jo_id_bl').val(id);
            });
        });
    </script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
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

    <script>
        $(document).on('click', '#job_id', function() {
            var id = $(this).attr('data-id');
            $('#jo_id').val(id);
        })
    </script>
@endsection














@endsection
