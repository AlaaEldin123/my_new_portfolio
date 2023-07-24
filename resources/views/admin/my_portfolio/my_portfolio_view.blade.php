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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Table /</span> My Portfolio</h4>
        <div class="card">

            {{-- <a href=""class="btn rounded-pill btn-info waves-effect waves-light">Info</a> --}}

            <div class="d-flex justify-content-end mt-3">
                <a href="{{ route('add_my_portfolio') }}" class="fw-bold py-3 mb-4 btn rounded-pill btn-success ">My Portfolio</a>
            </div>





            <div class="table-responsive text-nowrap">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th>view image</th>
                            <th>Seo view Image</th>

                            <th>Inside Image</th>
                            <th>Seo Inside Image</th>

                            <th>View Title</th>
                            <th>Inside Title</th>
                            <th>Smaill Inside Title</th>
                            <th>Link</th>

                            <th>Short Description</th>
                            {{-- <th>Long Description</th> --}}

                            <th>visibility</th>

                            <th>Created At</th>


                            <th>Updated At</th>


                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($my_portfolio as $item)
                            <tr>

                                <td>
                                    <img width="100px" height="100px" src="{{ asset($item->view_image) }}"
                                        alt="{{ $item->view_alt_image }}">
                                </td>

                                <td>{{ $item->view_alt_image }}</td>




                                <td>
                                    <img width="100px" height="100px" src="{{ asset($item->inside_image) }}"
                                        alt="{{ $item->inside_alt_image }}">
                                </td>

                                <td>{{ $item->inside_alt_image }}</td>

                                <td>{{ $item->view_title }}</td>
                                <td>{{ $item->inside_title }}</td>
                                <td>{{ $item->smaill_inside_title }}</td>
                                <td>{{ $item->link }}</td>
                                <td>{{ $item->short_description }}</td>

                                {{-- <td>{{ $item->long_description }}</td> --}}


                                <td>{{ $item->visibility }}</td>

                                <td>{{ $item->long_description }}</td>


                                <td>{{ $item->visibility }}</td>




                                <td>{{ $item->created_at }}</td>


                                <td>{{ $item->updated_at }}</td>






                                <td>
                                    <a href="{{ route('edit_my_portfolio', $item->id) }}"
                                        class="btn rounded-pill btn-info waves-effect waves-light">Edit</a>

                                    <a href="{{ route('delete_my_portfolio', $item->id) }}"
                                        class="btn rounded-pill btn-danger waves-effect waves-light" id="delete">Delete
                                    </a>

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
@endsection



@endsection
