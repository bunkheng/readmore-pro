<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('layouts.includes.meta')
</head>

<body>

    <!-- Header Section Begin -->
    @include('layouts.includes.header')
    <!-- Header End -->

    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <a href="{{ url('bookmark') }}">Bookmark</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Bookmark</h2>
                        <p>Find your favorite books here</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


    @include('layouts.includes.footer')

    @include('layouts.includes.scripts')


</body>

</html>