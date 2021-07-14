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
                        <a href="/contact">Contact</a>
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
                        <p>Enjoy your Reading</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
    <iframe src="https://drive.google.com/file/d/1ysDLK3CUa948bOq7AOVfVsEXpoNlnh-L/preview" 
        style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;" allow="autoplay"></iframe>
    </section>


    @include('layouts.includes.footer')

    @include('layouts.includes.scripts')


</body>

</html>