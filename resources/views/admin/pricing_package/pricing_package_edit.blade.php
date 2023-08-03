@extends('admin.admin_master')

@section('admin')
@section('custom_css')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
@endsection





<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Table / </span>Pricing Package</h4>

<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Pricing Package</h5>

            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('update_PricingPackage') }}" enctype="multipart/form-data">
                    <input type="hidden" value="{{ $PricingPackage->id }}" name="id">
                    @csrf
                    <div class="row">


                        <div class="col-md-6">

                            <label class="form-label" for="basic-default-phone">Package Category
                                Title </label>
                            <input type="text" name="package_header" value="{{ $PricingPackage->package_header }}"
                                class="form-control">

                            @error('package_header')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-6">

                            <label class="form-label" for="basic-default-phone">Package Title <span
                                    class="text-danger"></span></label>
                            <input type="text" name="package_title" class="form-control"
                                value="{{ $PricingPackage->package_title }}">


                            @error('package_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6">

                            <label class="form-label" for="basic-default-phone">Package Subtitle<span
                                    class="text-danger"></span></label>
                            <input type="text" name="package_subtitle"
                                value="{{ $PricingPackage->package_subtitle }}" class="form-control">

                            @error('package_subtitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>




                        <div class="col-md-6">

                            <label class="form-label" for="basic-default-phone">Package Short Description <span
                                    class="text-danger"></span></label>
                            <textarea type="text" name="package_short_description" class="form-control">{{ $PricingPackage->package_short_description }}</textarea>

                            @error('package_short_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>




                    <div class="d-flex justify-content-center ">

                        <button type="submit"
                            class="btn btn-primary waves-effect waves-light mt-4 btn-lg w-25">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

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
    $(document).ready(function() {

        $(".add-more").click(function() {
            var html = $(".copy").html();
            $(".after-add-more").after(html);
        });

        $("body").on("click", ".remove", function() {
            $(this).parents(".control-group").remove();
        });

    });
</script>
@endsection
