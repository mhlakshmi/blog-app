<!DOCTYPE html>
<html>

<head>
    <title>Task</title>
    <link rel="shortcut icon" href="/asset/images/fav-icon.png" type="image/x-icon">
    <link href="/admin_asset/images/favicon.png" rel="shortcut icon" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="utf-8" http-equiv="encoding">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link href="/admin_asset/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/admin_asset/vendor/bootstrap-icons/bootstrap-icons.css">
    <link href="/admin_asset//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/admin_asset/ckeditor/ckeditor.js"></script>
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
    @include('admin/sidebar')
    <!-- End Sidebar-->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Blogs <span><i class="bi bi-pencil-square"></i>Edit Blog</span></h1>
        </div>
        <!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <div class="alert-msg " style="color:red;"> @if(Session::has('msg'))
                    {{Session::get('msg') }}
                    @endif
                </div>
                <div class="content">
                    <form class="form-horizontal" action="{{ route('update_blogs', ['id' => $blogs->id]) }}"
                        method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Title</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="title" readonly value="{{ $blogs->title }}" required
                                            class=" form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-3">
                                    <label class="control-label">Blog category</label>
                                </div>
                                <div class="col-md-9 pb-4">
                                    <select class="form-control select2" name="category" style="width: 100%;" required>
                                        <option value="" disabled>Select category</option>
                                        @php
                                        $categories = ['Health Care', 'Fashion', 'Food'];
                                        @endphp
                                        @foreach($categories as $category)
                                        <option value="{{ $category }}" {{ $blogs->category == $category ? 'selected' :
                                            '' }}>
                                            {{ $category }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Short Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" required
                                            name="short_description">{{ $blogs->short_description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" required
                                            name="description">{{ $blogs->description }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row pb-4">
                                    <div class="col-md-3">
                                        <label class="control-label">Upload File</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="browse pb-4">
                                            <input type="file" class="hide_file form-control"
                                                onchange="updatePreview(this)" name="image" id="file_input">
                                        </div>
                                        <img src="/asset/images/blogs/{{ $blogs->image }}" id="image_preview"
                                            alt="Image Preview" style="max-width: 100%; max-height: 200px;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Date</label>
                                    </div>
                                    @php
                                    use Carbon\Carbon;
                                    @endphp
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" id="date" name="date"
                                            value="{{ optional(Carbon::parse($blogs->date))->format('Y-m-d') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-9 col-md-offset-2">
                                        <button type="Submit" name="submit" class="btn btn-success">
                                            <i class="fa fa-paper-plane"></i>
                                            Submit
                                        </button>
                                        <button type="Submit" class="btn btn-danger ext_mar_sm">
                                            <i class="fa fa-close"></i>
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
    @include('admin/footer')
    <!-- End Footer -->
</body>
<script>
    CKEDITOR.replace('short_description');
    CKEDITOR.replace('description');
</script>
<script src="/admin_asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin_asset/js/dashboard.js"></script>

</html>