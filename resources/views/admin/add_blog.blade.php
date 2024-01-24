<!DOCTYPE html>
<html>

<head>
    <title>Task</title>
    <link rel="shortcut icon" href="/asset/images/fav-icon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="utf-8" http-equiv="encoding">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link href="admin_asset/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="admin_asset/vendor/bootstrap-icons/bootstrap-icons.css">
    <link href="admin_asset//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="admin_asset/ckeditor/ckeditor.js"></script>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    @include('admin/header')
    <!-- End Header -->
    <!-- ======= Sidebar ======= -->
    @include('admin/sidebar')
    <!-- End Sidebar-->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Blogs</h1>
        </div>
        <!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <div class="content-header">

                </div>
                <div class="alert-msg " style="color:red;"> @if(Session::has('msg'))
                    {{Session::get('msg') }}
                    @endif
                </div>
                <div class="content">
                    <form class="form-horizontal" action="/insert_blog" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Title</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                                        @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-3">
                                <div class="col-md-3">
                                    <label class="control-label">Blog category</label>
                                </div>
                                <div class="col-md-9 pb-4">
                                    <select class="form-control select2" name="category" style="width: 100%;">
                                        <option value="" disabled {{ old('category') ? '' : 'selected' }}>Select
                                            category</option>
                                        <option value="Health Care" {{ old('category')=='Health Care' ? 'selected' : ''
                                            }}>Health Care</option>
                                        <option value="Fashion" {{ old('category')=='Fashion' ? 'selected' : '' }}>
                                            Fashion</option>
                                        <option value="Food" {{ old('category')=='Food' ? 'selected' : '' }}>Food
                                        </option>
                                    </select>
                                    @if ($errors->has('category'))
                                    <span class="text-danger">{{ $errors->first('category') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Short Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        @if ($errors->has('content'))
                                        <span class="text-danger">{{ $errors->first('content') }}</span>
                                        @endif
                                        <textarea class="form-control" 
                                            name="content">{{ old('content') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                        <textarea class="form-control" 
                                            name="description">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label ">Upload File</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="browse">
                                            @if ($errors->has('image'))
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                            @endif
                                            <input type="file" class="hide_file form-control" name="image"
                                                value="{{ old('image') }}">
                                            @if(old('image'))
                                            <p>Old Image: {{ old('image') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Date</label>
                                    </div>
                                    <div class="col-md-9">
                                        @php
                                        use Carbon\Carbon;
                                        @endphp
                                        <input type="date" class="form-control" id="date" name="date"
                                            placeholder="Appointment Date">
                                        @if ($errors->has('date'))
                                        <span class="text-danger">{{ $errors->first('date') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-9 col-md-offset-2">
                                        <button type="Submit" name="submit" class="btn btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                            Submit
                                        </button>
                                        <button type="Submit" class="btn btn-danger ext_mar_sm">
                                            <i class="bi bi-trash3-fill"></i>
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright
            <strong>
                <span>Udhayam</span>
            </strong>
            . All Rights Reserved
        </div>
        <div class="credits">
            Powered by
            <a href="https://www.cortexmarketing.in/"> Cortex Media Marketing Pvt Ltd</a>
        </div>
    </footer>
    <!-- End Footer -->
</body>
<script>
    CKEDITOR.replace('content');
    CKEDITOR.replace('description');
</script>
<script src="admin_asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="admin_asset/js/dashboard.js"></script>

</html>