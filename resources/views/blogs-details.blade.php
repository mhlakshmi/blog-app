<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="shortcut icon" href="/asset/images/fav-icon.png" type="image/x-icon">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="/asset/css/style.css">
    <link rel="stylesheet" href="/asset/css/addons.css">
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/bootstrap-icons-1.10.2/bootstrap-icons.css">
    <link rel="stylesheet" href="/asset/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/asset/css/jquery.fancybox.css">
    <link rel="stylesheet" href="/asset/css/meanmenu.css">
    <link rel="stylesheet" href="/asset/css/media.css">
    <link rel="stylesheet" href="/asset/css/owl.carousel.css">
    <link rel="stylesheet" href="/asset/css/owl.theme.css">
    <link rel="stylesheet" href="/asset/css/owl.transitions.css">
    <script src="/asset/js/jquery.min.js"></script>
</head>

<body>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!--Page Body Wrapper-->
        <div class="page-body-wrapper">
            <section>
                <div class="blogs-page-area-sec pb-5 pt-5">
                    <div class="container">
                        <div class="row">
                            @foreach ($blogs as $blog)
                            @php
                            $date_string = $blog->date;
                            $date_components = explode(' ', $date_string);

                            $year = explode('-', $date_components[0])[0];
                            $date_time = \Carbon\Carbon::parse($date_string);
                            $month = $date_time->format('F');
                            $day = explode('-', $date_components[0])[2];
                            $time = count($date_components) > 1 ? $date_components[1] : '';
                            @endphp
                            <div class="col-lg-12 col-md-12 col-sm-12 pb-5">
                                <div class="blogs-details-content-box">
                                    <div class="blogs-content-img-area mb-4">
                                         <div class="blogs-date">
                                                <p>{{ $month }} {{ $day }}, {{ $year }}</p>
                                            </div>
                                        <div class="blogs-img">
                                            <h3>{{ $blog->title }}</h3>
                                            <img src="/asset/images/blogs/{{ $blog->image }}" class="img-fluid" alt="">
                                        </div>

                                    </div>
                                    <div class="blogs-details-content title">

                                        {!! $blog->description !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
    </div>
    <script src="/asset/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/js/jquery-addons.js"></script>
    <script src="/asset/js/script.js"></script>
    <script src="/asset/js/wow.min.js"></script>
    <script></script>
</body>

</html>