@extends('admin.admin_master')

@section('admin')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Table / </span> My Resume Professional Skills</h4>

    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">My Resume Professional Skills</h5>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('insert_my_resume_professional_skills') }}"
                        enctype="multipart/form-data">

                        @csrf



                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Title <span
                                    class="text-danger"></span></label>
                            <input type="text" name="title" class="form-control">

                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Degree<span class="text-danger">It Should
                                    Be Like This (100%)</span></label>
                            <input type="number" name="degree" class="form-control">

                            @error('degree')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>





                        <div class="mb-3">

                            <label class="form-label" for="basic-default-phone">Type<span
                                    class="text-danger"></span></label>
                            <select name="type" class="form-control" required>

                                <option value="Design Skill
                                ">Design Skill
                                </option>
                                <option value="Development Skill">Development Skill</option>
                            </select>
                            @error('type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>





                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
@endsection
