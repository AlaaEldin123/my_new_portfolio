@extends('admin.admin_master')

@section('admin')


    <script>
        $(function() {
            $(document).on("click", "#delete", function(e) {
                e.preventDefault();
                var link = $(this).attr("href");
                Swal.fire({
                    title: "Are you sure?",
                    text: "Delete This Data?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link;
                        Swal.fire("Deleted!", "Your file has been deleted.", "success");
                    }
                });
            });
        });
    </script>



@section('custom_css')
    <!-- Font Awesome -->

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
@endsection -
<div class="row">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Table /</span>My Resume Professional Skills</h4>
    <div class="card">
        <div class="card-header">


            <div class="d-flex justify-content-end">
                <a href="{{ route('add_my_resume_professional_skills') }}">
                    <button type="button" class="fw-bold py-3 mb-4 btn rounded-pill btn-success ">Professional
                        Skills</button>
                </a>
            </div>
            <h3 class="card-title">Professional Skills</h3>

        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        Image
                        <th>Title</th>

                        <th>from_date_to_date</th>








                        <th>Status</th>

                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonial as $item)
                        <tr>

                            <td>
                                <img width="100px" height="100px" src="{{ asset($item->image) }}"
                                    alt="{{ $item->alt_image }}">
                            </td>


                            <td>{{ $item->title }}</td>

                            <td>{{ $item->from_date_to_date }}</td>







                            <td>{{ $item->from_date_to_date }}</td>
                            <td>{{ $item->from_date_to_date }}</td>
                            <td>{{ $item->from_date_to_date }}</td>
                            <td>{{ $item->from_date_to_date }}</td>
                            <td>{{ $item->from_date_to_date }}</td>
                            <td>{{ $item->from_date_to_date }}</td>






                            <td>
                                @if ($item->status == 1)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Un Active</span>
                                @endif


                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href="{{ route('edit_my_resume_professional_skills', $item->id) }}"
                                    class="btn rounded-pill btn-info waves-effect waves-light">Edit</a>

                                <a href="{{ route('delete_my_resume_professional_skills', $item->id) }}"
                                    class="btn rounded-pill btn-danger waves-effect waves-light" id="delete">Delete
                                </a>
                                @if ($item->status == 1)
                                    <a href="{{ route('unactive_my_resume_professional_skills', $item->id) }}"
                                        class="btn btn-warning">Un Active</a>
                                @else
                                    <a href="{{ route('active_my_resume_professional_skills', $item->id) }}"
                                        class="btn btn-success">Active</a>
                                @endif
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

        <!-- /.card-body -->
    </div>


</div>


@section('custom_js')
    <script src="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->

    <!-- AdminLTE for demo purposes -->


    <script src="{{ asset('backend/assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('backend/assets/plugins/toastr/toastr.min.js') }}"></script>
    <!-- AdminLTE App -->


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
@endsection






@endsection
