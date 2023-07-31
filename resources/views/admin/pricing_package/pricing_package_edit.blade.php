@extends('admin.admin_master')

@section('admin')

@section('custom_css')
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/editor.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/typography.css') }}" />
    {{-- <script src="https://cdn.tiny.cloud/1/your-tinymce-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
@endsection


<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Features Card / </span>Features Card Edit</h4>

<div class="row">
    <div class="col-xl">
        <div class="card mb-4">

            <div class="card-body">

                <form method="POST" action="{{ route('update_PricingPackage') }}" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $PricingPackage->id }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">

                            <label class="form-label" for="basic-default-phone">Package Category
                                Title </label>
                            <input type="text" name="package_header" class="form-control"
                                value="{{ $PricingPackage->package_header }}">

                            @error('package_header')
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
