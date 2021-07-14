<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('layouts.includes.meta')
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    @include('layouts.includes.header')
    <!-- Header End -->

    <!-- Manga Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- <div class="anime__details__pic set-bg" data-setbg="img/{{ $book->img }}">
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div> -->
                        <img class="img-fluid" src="{{ $book->img }}">
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3> {{$book->title}} </h3>
                                <!-- <span>フェイト／ステイナイト, Feito／sutei naito</span> -->
                            </div>
                            <!-- <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div> -->
                            <p>{{$book->description}}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Genre:</span> {{$book->genre}}</li>
                                            <li><span>Rating:</span> {{$book->rating}} </li>
                                            <li><span>Volume:</span> {{$book->volume}} </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">

                                @if ($book->status == 'FALSE')
                                <td class="mr-5">
                                    <form action="{{ route('bookmarks.update', $book->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" class="display-none" required>
                                            <option selected value="TRUE"></option>
                                        </select>
                                        <button type="submit" class="btn btn-danger px-3 mr-5"> <i class="fa fa-bookmark-o"></i>Bookmark </button>
                                    </form>
                                </td>
                                @endif
                                <!-- @if ($book->status == 'TRUE')
                                <td>
                                    <form action="{{ route('bookmarks.update', $book->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" class="display-none" required>
                                            <option value="FALSE" selected></option>
                                        </select>
                                        <button type="submit" class="btn btn-danger px-3 mr-5">Bookmark</button>
                                    </form>
                                    <a type="button" class="btn btn-secondary">Marked</a>
                                </td>
                                @endif -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-5 bg-white">
                <div class="intro-lists">
                    <div class="tab-content">
                        <!-- start ch -->
                        <div id="ch" class="tab-pane fade in active show">
                            <div class="row">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th><a href="/chapter">CH. 1, Rin Shima and the Camping</a></th>
                                        </tr>
                                        <tr>
                                            <th><a href="/chapter1">CH. 2, A Snowy day</a></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end ch -->
                    </div>
                </div>
            </div>


            <!-- <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="anime__details__review">
                            <div class="section-title">
                                <h5>Reviews</h5>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/anime/review-1.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                    <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                    "demons" LOL</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/anime/review-2.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                    <p>Finally it came out ages ago</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/anime/review-3.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                    <p>Where is the episode 15 ? Slow update! Tch</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/anime/review-4.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                    <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                    "demons" LOL</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/anime/review-5.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                    <p>Finally it came out ages ago</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="img/anime/review-6.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                    <p>Where is the episode 15 ? Slow update! Tch</p>
                                </div>
                            </div>
                        </div>
                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>Your Comment</h5>
                            </div>
                            <form action="#">
                                <textarea placeholder="Your Comment"></textarea>
                                <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                            </form>
                        </div>
                    </div> -->
        </div>
        </div>
    </section>
    <!-- Anime Section End -->

    @include('layouts.includes.footer')

    @include('layouts.includes.scripts')


</body>

</html>