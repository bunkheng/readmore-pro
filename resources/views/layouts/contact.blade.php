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
                        <h2>Contact Us</h2>
                        <p>You can post submission below</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog spad">
        <div class="contact-container">
            <form>

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="country">Country</label><br>
                <select id="country" name="country">
                    <option value="australia">Cambodia</option>
                    <option value="canada">Vietnam</option>
                    <option value="usa">Thailand</option>
                    <option value="australia">Laos</option>
                    <option value="canada">Malaysia</option>
                    <option value="usa">Indonesia</option>
                    <option value="australia">Singapore</option>
                    <option value="canada">Myanmar</option>
                    <option value="usa">Brunei</option>
                </select>
                <br><br>
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write your message here." style="height:200px"></textarea>

                <input type="submit" value="Submit">

            </form>
        </div>
    </section>


    @include('layouts.includes.footer')

    @include('layouts.includes.scripts')


</body>

</html>