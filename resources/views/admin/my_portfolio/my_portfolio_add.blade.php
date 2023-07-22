@extends('admin.admin_master')


@section('custom_css')
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/editor.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/quill/typography.css') }}" />
    <script src="https://cdn.tiny.cloud/1/your-tinymce-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection




@section('admin')

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Features Card / </span>Features Card</h4>

    <div class="row row ">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Features Card</h5>

                </div>



                <div class="card-body">




                    <form method="POST" action="{{ route('my_portfolio_insert') }}" enctype="multipart/form-data">

                        @csrf

                        <div class="row">
                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">View Title </label>
                                <input type="text" name="view_title" class="form-control">

                                @error('view_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="col-md-6">


                                <label class="form-label" for="basic-default-phone">Inside Title</label>
                                <input type="text" name="inside_title" class="form-control">

                                @error('inside_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>



                        </div>


                        <div class="row row ">
                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">Short Description</label>
                                <input type="text" name="short_description" class="form-control">

                                @error('short_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="col-md-6">


                                <label class="form-label" for="basic-default-phone">Small Inside Title</label>
                                <input type="text" name="small_inside_title" class="form-control">

                                @error('small_inside_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>



                        </div>



                        <div class="row">




                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">Seo View Image </label>
                                <input type="text" name="view_alt_image" class="form-control">

                                @error('view_alt_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">Seo Inside Image </label>
                                <input type="text" name="inside_alt_image" class="form-control">

                                @error('inside_alt_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>




                        <div class="row">


                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">View Image</label>
                                <input type="file" name="view_image" onChange="mainThamUrl(this)"
                                    class="form-control phone-mask">
                                <img src="" id="mainThmb">
                                @error('view_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">Inside Image</label>
                                <input type="file" name="inside_image" onChange="mainThamUrll(this)"
                                    class="form-control phone-mask">
                                <img src="" id="mainThmbb">
                                @error('inside_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>







                        </div>








                        <div class="row mb-4">

                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">link </label>
                                <input type="text" name="link" class="form-control">

                                @error('link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-md-6">

                                <label class="form-label" for="basic-default-phone">visibility </label>
                                <input type="number" name="visibility" class="form-control">

                                @error('visibility')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>





                        <div class="col-12">
                            <div class="card">
                                <h5 class="card-header">Full Editor</h5>
                                <div class="card-body">
                                    <div id="full-editor">
                                        <!-- Your full editor input field here -->
                                        {{-- <textarea name="editor_content" id="editor_content"></textarea> --}}
                                    </div>
                                </div>
                            </div>




                        </div>



                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit"
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







    <!-- Vendors JS -->
    <script src="{{ asset('backend/assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('backend/assets/js/forms-editors.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/libs/quill/quill.js') }}"></script>

    {{--
    <script>
        // Initialize the TinyMCE editor
        tinymce.init({
            selector: 'textarea[name="long_description"]',
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            toolbar: 'undo redo | styleselect | bold italic | link image',
            height: 300, // Set the desired height of the editor
        });
    </script> --}}




@endsection
@endsection
