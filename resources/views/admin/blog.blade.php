<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Task</title> 
    <link rel="shortcut icon" href="/asset/images/fav-icon.png" type="image/x-icon">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Vendor CSS Files -->
    <link href="/admin_asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin_asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="/admin_asset/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    @include('admin/header')
    <!-- ======= Sidebar ======= -->
    @include('admin/sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Blogs</h1>
            <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav> -->
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="content-header">
                    <div class="blogs-add-new-btn">
                        <a href="/admin_add_blogs" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Add
                            New</a>
                    </div>
                </div>

                <div class="content">
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Short Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($blogs as $index => $gal)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $gal->title }}</td>
                                <td><img class="thumb-img" src="/asset/images/blogs/{{ $gal->image}}"></td>
                                <td>{{ $gal->short_description }}</td>
                                <td class="text-center">
                                    <a href="{{ route('edit_blogs', ['id' => $gal->id]) }}" class="btn btn-success"
                                        type="button"><span><i class="bi bi-download"></i></span> Edit</a>
                                    <a href="{{ route('delet_blogs', ['id' => $gal->id]) }}" class="btn btn-danger"
                                        type="button"><span><i class="bi bi-trash3-fill"></i></span> Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="back-to-top">
                        <a href="#" class="back-to-top d-flex align-items-center btn btn-outline-secondary"><i
                                class="bi bi-arrow-up-short"></i> Back to Top</a>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('admin/footer')



    <!-- Vendor JS Files -->
    <script src="/admin_asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/admin_asset/js/dashboard.js"></script>

</body>

</html>