@extends('admin.admin_master')


@section('custom_css')
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/editor.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/typography.css') }}" />
    {{-- <script src="https://cdn.tiny.cloud/1/your-tinymce-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
@endsection




@section('admin')

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Blog / </span> Blog</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Blog</h5>

                </div>



                <div class="card-body">




                    <form method="POST" action="{{ route('update_blogs') }}" enctype="multipart/form-data">

                        @csrf
                        <input type="hidden" value="{{ $blog->id }}" name="id">

                        <input type="hidden" value="{{ $blog->image }}" name="oldImage">

                        <div class="row">
                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">Small Title</label>
                                <input value="{{ $blog->small_title }}" type="text" name="small_title"
                                    class="form-control">

                                @error('small_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">


                                <label class="form-label" for="basic-default-phone">Title</label>
                                <input value="{{ $blog->title }}" type="text" name="title" class="form-control">

                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>

                        </div>




                        <div class="row">

                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">Image</label>
                                <input type="file" name="image" onChange="mainThamUrl(this)"
                                    class="form-control phone-mask">
                                <img width="100px" height="100px" src="{{ asset($blog->image) }}"
                                    alt="{{ $blog->alt_image }}">

                                <img src="" id="mainThmb">

                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">Seo Image </label>
                                <input type="text" value="{{ $blog->alt_image }}" name="alt_image" class="form-control">

                                @error('alt_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <label class="form-label" for="basic-default-phone">Created Date</label>
                                <input type="date" value="{{ $blog->created_date }}" name="created_date"
                                    class="form-control">

                                @error('created_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>




                        </div>




                        <div class="col-12">
                            <div class="card">
                                <h5 class="card-header">Full Editor</h5>
                                <div class="card-body">
                                    <textarea name="full_editor_data" style="display:none" id="full_editor_data" required></textarea>
                                    <div id="full-editor" data-name="content">
                                        {!! $blog->long_description !!}
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="d-flex justify-content-center mt-3">
                            <button id="btnMySubmit" type="submit"
                                class="btn btn-primary btn-lg w-25 waves-effect waves-light">Submit</button>
                        </div>
                    </form>




                </div>

            </div>
        </div>
    </div>
    </div>

@section('custom_js')
    <script type="text/javascript">
        function mainThamUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThmb').attr('src', e.target.result).width(100).height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


    <script type="text/javascript">
        function mainThamUrll(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThmbb').attr('src', e.target.result).width(100).height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <!-- Add this script after the HTML code above -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector(
                "form"); // Replace "form" with your actual form ID or class if needed
            const editorTextarea = document.getElementById("full_editor_data");

            form.addEventListener("submit", function(event) {
                if (editorTextarea.value.trim() === "") {
                    alert("Editor content is required.");
                    event.preventDefault(); // Prevent form submission
                }
            });
        });
    </script>







    <!-- Vendors JS -->
    <script src="{{ asset('backend/assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('backend/assets/js/forms-editors.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/libs/quill/quill.js') }}"></script>


    <script>
        $(document).ready(function() {
            $(document).on('click', '#btnMySubmit', function(e) {
                e.preventDefault();
                $("#full_editor_data").val($("#full-editor").html());
                $(this).parents('form').submit();
            });
        });
    </script>
@endsection
@endsection
