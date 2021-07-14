 <!-- Product Section Begin -->
 <section class="product spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="trending__product">
                     <div class="row">
                         <div class="col-lg-8 col-md-8 col-sm-8">
                             <div class="section-title">
                                 <h4>All Books</h4>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-4">
                             <div class="btn__all">
                                 <a href="/genre" class="primary-btn">View All <span class="arrow_right"></span></a>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         @foreach($books as $book)
                         <div class="col-lg-3 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="{{ $book->img }}">
                                     <div class="ep">{{ $book ->volume }}</div>
                                 </div>
                                 <div class="product__item__text">
                                     <h5><a href="{{route('book.show' ,$book->id)}}">{{ $book ->title }}</a></h5>
                                 </div>
                             </div>
                         </div>
                         @endforeach
                     </div>
                 </div>
                 <div class="popular__product">
                     <div class="row">
                         <div class="col-lg-8 col-md-8 col-sm-8">
                             <div class="section-title">
                                 <h4>Popular Books</h4>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-4">
                             <div class="btn__all">
                                 <a href="/genre" class="primary-btn">View All <span class="arrow_right"></span></a>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         @foreach($books as $book)
                         <div class="col-lg-3 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="{{ $book->img }}">
                                     <div class="ep">{{ $book->rating }}</div>

                                 </div>
                                 <div class="product__item__text">
                                     <h5><a href="{{route('book.show' ,$book->id)}}">{{ $book->title }}</a></h5>
                                 </div>
                             </div>
                         </div>
                         @endforeach
                     </div>
                 </div>
                 <div class="recent__product">
                     <div class="row">
                         <div class="col-lg-8 col-md-8 col-sm-8">
                             <div class="section-title">
                                 <h4>Recently Added Books</h4>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-4">
                             <div class="btn__all">
                                 <a href="/genre" class="primary-btn">View All <span class="arrow_right"></span></a>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         @foreach($books as $book)
                         <div class="col-lg-3 col-md-6 col-sm-6">
                             <div class="product__item">
                                 <div class="product__item__pic set-bg" data-setbg="{{ $book->img }}">
                                     <div class="ep">{{ $book->rating }}</div>

                                 </div>
                                 <div class="product__item__text">
                                     <h5><a href="{{route('book.show' ,$book->id)}}">{{ $book->title }}</a></h5>
                                 </div>
                             </div>
                         </div>
                         @endforeach
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Product Section End -->