@extends('admin.admin_master')


@section('custom_css')
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/editor.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/typography.css') }}" />
    {{-- <script src="https://cdn.tiny.cloud/1/your-tinymce-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
@endsection




@section('admin')

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Package Category/ </span>Package Category</h4>

    <div class="row row ">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Package Category</h5>

                </div>



                <div class="card-body">




                    <form method="POST" action="{{ route('insert_PricingPackageDetails') }}" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">Package Feature
                                    Title </label>
                                <select name="package_id" class="form-control">
                                    @foreach ($PricingPackage as $item)
                                        <option value="{{ $item->id }}">{{ $item->package_header }}</option>
                                    @endforeach
                                    @error('package_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </select>

                            </div>


                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">Package Feature
                                </label>
                                <input type="text" name="package_feature" class="form-control">

                                @error('package_feature')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
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
