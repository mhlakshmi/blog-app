<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="shortcut icon" href="" type="image/x-icon">
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
            <!--  blogs-start-->
            <section>
                <div class="blogs-section sec-bottom sec-top">
                    <div class="container">
                        <div class="row">
                            <div class="home-title-content blogs-title-area pb-4">
                                <h2 class="home-title-area">Our blog</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blogs-carousel owl-carousel owl-theme">
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


                                    <div class="blogs-content-sec">
                                        <div class="blogs-content-img-area">
                                            <div class="blogs-date">
                                                <p>{{ $month }} {{ $day }}, {{ $year }}</p>
                                            </div>
                                            <div class="blogs-img">
                                                <img src="/asset/images/blogs/{{ $blog->image }}" class="img-fluid"
                                                    alt="{{ $blog->title }}">
                                            </div>

                                        </div>
                                        <div class="blogs-title">
                                            <a href="{{ route('blog-details', ['id' => $blog->slug]) }}">
                                                <h5>{{ $blog->title }}</h5>
                                            </a>
                                            <p> {!! $blog->short_description !!} </p>

                                        </div>
                                        <!-- <div class="blogs-date-read-btn">
                                        <p class="mb-0">{{ $month }} {{ $day }}, {{ $year }}</p>
                                    
                                    </div> -->
                                    </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  blogs end-->


        </div>
    </div>
    <script src="/asset/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/js/jquery-addons.js"></script>
    <script src="/asset/js/script.js"></script>
    <script src="/asset/js/wow.min.js"></script>

</body>

</html>