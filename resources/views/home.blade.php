@extends('layouts.app')
@section('konten')
@foreach($guest as $g)
<section class="top-cover">

    <div class="inner">
        <div class="details">
            <div>
                <div class="text-01" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="500">
                    Yudha &amp; Era                </div>
                <div class="text-02" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="700">
                                Hai&nbsp;{{$g->name}}
                            </div>            </div>            
            <div>
                <div data-aos="fade-up" data-aos-duration="1200" data-aos-delay="900">
                    <a href="javascript:;" onclick="startTheJourney()" class="link-01">Let's Go</a>
                </div>                
            </div>
        </div>
    </div>

    <div class="cover-show" id="top-cover-banner" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="200"></div>
</section>



<!-- COVER -->
<section class="cover">

    <div class="cover-inner">
        <div class="cover-greet">
            <img class="logo" data-aos="fade-down" data-aos-duration="1000" src="#" alt="">        </div>
        <div class="cover-picture">
            <div class="cover-show" id="cover-real" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300"></div>        </div>
        <div class="cover-bridegroom" data-aos="zoom-out" data-aos-duration="1000">
            <p class="text-01" data-aos="fade-down" data-aos-duration="1000">Wedding Invitation</p>
            <h1 data-aos="zoom-out" data-aos-duration="1000">Yudha & Era</h1>
			<!-- <p class="text-02" data-aos="fade-up" data-aos-duration="1000">#twoDtogether</p>
            <div data-aos="fade-up" data-aos-duration="1000">
                <p class="text-03" data-aos="fade-up" data-aos-duration="1000">October 8<sup>st</sup>, 2021</p>
            </div> -->
        </div>

        <div class="cover-show" id="cover-banner" data-aos="zoom-in" data-aos-duration="1000"></div>
    </div>

</section>  


<!-- GREETINGS -->
            <section class="greetings">
                <div data-aos="zoom-in" data-aos-duration="1000">
                    <p data-aos="fade-down" data-aos-duration="1000">Hello..</p>
                    <h1 data-aos="zoom-in" data-aos-duration="1000">{{$g->name}}</h1>
                    <p data-aos="fade-up" data-aos-duration="1000">you're invited to our wedding</p>
                </div>
            </section>

<!-- BRIDEGROOM -->
<section class="bridegroom">
    <div class="bridegroom-inner">
        <div class="head">
            <h1 data-aos="fade-down" data-aos-duration="1000">The Wedding of</h1></div> 
        <div class="body ">
            <div class="groom">
                <div class="bridegroom-border" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="false">   
                                <img class="bridegroom-picture" data-aos="zoom-out-right" data-aos-duration="1000" data-aos-once="false" src="{{asset('src/src-foto-yudha.jpg')}}" alt="">
                            </div>                <div class="bridegroom-details">
                    <h1 data-aos="zoom-in" data-aos-duration="1000">Putu Bagus Willie Yudha Maheswara</h1>
                    <p data-aos="fade-up" data-aos-duration="1000">The Son of <br>
Mr. I Gede Widhiyasa and Mrs. Ni Made Sulensi</p>
                    <p class="bio" data-aos="fade-up" data-aos-duration="1000"></p>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <a href="itsdaff/index.htm" target="_blank"> <em></em></a>                    </div>
                </div>
            </div>
            <div class="bridegroom-separator" data-aos="zoom-out" data-aos-duration="1000">&amp;</div>
            <div class="bride">
                <div class="bridegroom-border" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="false">
                                <img class="bridegroom-picture" data-aos="zoom-out-left" data-aos-duration="1000" data-aos-once="false" src="{{asset('src/srcsrcfotofotoera.jpg')}}" alt="">
                            </div>                <div class="bridegroom-details">
                    <h1 data-aos="zoom-in" data-aos-duration="1000">Ni Putu Era Pristiyanti</h1>
                    <p data-aos="fade-up" data-aos-duration="1000">The Daughter of<br>
Mr. I Made Parwadi and Mrs. Ni Luh Sweni</p>
                    <p class="bio" data-aos="fade-up" data-aos-duration="1000"></p>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <a href="https://www.instagram.com/asahyela" target="_blank"> <em></em></a>                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="gallery-wrapper">

    <!-- GALLERY -->
                    <section class="gallery">
                        <div class="title">
                            <h1 data-aos="zoom-out-up" data-aos-duration="1000" class="aos-init aos-animate">Picts of us</h1>
                            <p data-aos="fade-up" data-aos-duration="1000" class="aos-init aos-animate">A successful marriage requires falling in love many times, always with the same person</p>
                        </div>
                        <div class="flexbin" id="lightGallery" lg-uid="lg0"><a data-aos="zoom-in" data-aos-duration="1000" href="{{asset('src/foto-1-gallery.png')}}" target="_blank" class="aos-init aos-animate">
                                    <img src="{{asset('src/foto-1-gallery.png')}}" alt="blake-carpenter-0jyjG3wseqo-unsplash.jpg">
                                </a><a data-aos="zoom-in" data-aos-duration="1000" href="{{asset('src/foto-2-gallery.png')}}" target="_blank" class="aos-init aos-animate">
                                    <img src="{{asset('src/foto-2-gallery.png')}}" alt="blake-carpenter-2uQILb1Ds_k-unsplash.jpg">
                                </a><a data-aos="zoom-in" data-aos-duration="1000" href="{{asset('src/foto-3-gallery.png')}}" target="_blank" class="aos-init aos-animate">
                                    <img src="{{asset('src/foto-3-gallery.png')}}" alt="blake-carpenter-h4SfYQESHkQ-unsplash (1).jpg">
                                </a><a data-aos="zoom-in" data-aos-duration="1000" href="{{asset('src/foto-4-gallery.png')}}" target="_blank" class="aos-init aos-animate">
                                    <img src="{{asset('src/foto-4-gallery.png')}}" alt="blake-carpenter-h4SfYQESHkQ-unsplash.jpg">
                                </a><a data-aos="zoom-in" data-aos-duration="1000" href="{{asset('src/foto-5-gallery.png')}}" target="_blank" class="aos-init aos-animate">
                                    <img src="{{asset('src/foto-5-gallery.png')}}" alt="blake-carpenter-hLlrILZsK4M-unsplash.jpg">
                                </a><a data-aos="zoom-in" data-aos-duration="1000" href="{{asset('src/foto-6-gallery.png')}}" target="_blank" class="aos-init aos-animate">
                                    <img src="{{asset('src/foto-6-gallery.png')}}" alt="blake-carpenter-OVodqP5y_Gk-unsplash.jpg">
                                </a><a data-aos="zoom-in" data-aos-duration="1000" href="{{asset('src/foto-7-gallery.png')}}" target="_blank" class="aos-init aos-animate">
                                    <img src="{{asset('src/foto-7-gallery.png')}}" alt="blake-carpenter-ujEVPnfBDTY-unsplash.jpg">
                                </a></div>
                    </section>
                    <section class="video-gallery">
                            <div class="inner">
                                <div class="title">
                                    <h1 data-aos="zoom-out-up" data-aos-duration="1000" class="aos-init aos-animate">Clip of us</h1>
                                    <p data-aos="fade-up" data-aos-duration="1000" class="aos-init aos-animate">it’s about finding the right person</p>
                                </div>
                                <div class="video-outer"><div class="video">
                                        <div class="preview aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
                                            <img src="https://i9.ytimg.com/vi/BGa5jn4faXY/mq2.jpg?sqp=COS6t4oG&rs=AOn4CLAnJNjIvbshjxG3huVKpUhq_3DnPw" alt="">
                                            <button class="play-btn" data-video-id="BGa5jn4faXY"><i class="fas fa-play"></i></button>
                                        </div>
                                        <div class="title">
                                            <h2 data-aos="fade-up" data-aos-duration="1000" class="aos-init aos-animate">Pre wedding</h2>
                                        </div>
                                    </div></div>
                            </div>
                        </section>
</div>


<!-- EVENT -->
<section class="event-outer">
    <div class="event-inner">
        <div class="head"><div class="title">
                        <h1>It's Wedding Day</h1>
                        <p>True love stands by each other’s side on good days and stands closer on bad days</p>
                    </div><div class="cover-show" id="cover-event"></div></div>        <div class="body">
            <div class="event">
                            <div class="title">
                                <h1>Friday, <br>  October 8<sup>th</sup> 2021</h1>
                                <p></p>
                            </div><div class="activities"><div class="activity">
                                        <div class="title">
                                            <img class="orn orn-party" src="{{asset('media/template/icons/gray/01.png')}}" alt="">
                                            <h1>Mejauman</h1>
                                            <p></p>
                                        </div>
                                        <div class="address">
                                            <p>09:00 - 10:00</p>
                                            
                                            
                                            
                                        </div>
                                        
                                    </div><div class="activity">
                                        <div class="title">
                                            <img class="orn orn-party" src="{{asset('media/template/icons/gray/02.png')}}" alt="">
                                            <h1>Mekala-kalaan Lan Mewidi Widana</h1>
                                            <p></p>
                                        </div>
                                        <div class="address">
                                            <p>09:00 - 12:00</p>
                                            
                                            
                                            
                                        </div>
                                        
                                    </div></div><div class="details">
                                <div class="address">
                                    <p><strong>Bali</strong></p>
                                    <p>Jalan tukad citarum f1 no 81, Renon</p>
                                    <p>Kota Denpasar</p>
                                </div>
                                <a href="https://www.google.com/maps/dir/-8.6780778,115.2481957/Gg.+FI+No.81,+Renon,+Kec.+Denpasar+Sel.,+Kota+Denpasar,+Bali+80226,+Indonesia/@-8.6785893,115.2352703,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2dd240f8a3559999:0x164046c02f63452f!2m2!1d115.2356137!2d-8.6830672" target="_blank">View Maps</a>
                            </div></div>        </div>
	 </div>   
</section>	


<!-- PROTOCOL -->
                <section class="protocol protocol-01">
                    <div class="inner">
                        <div class="head">
                            <p>Diharapkan kepada <br> seluruh tamu undangan untuk mematuhi</p>
                            <h1>Protokol Kesehatan</h1>
                        </div>
                        <div class="body">
                            <div class="picture-outer">
                                <img src="{{asset('media/template/protocol/01/protocol-01.png')}}" alt="">
                            </div>
                            <div class="picture-outer">
                                <img src="{{asset('media/template/protocol/01/protocol-02.png')}}" alt="">
                            </div>
                            <div class="picture-outer">
                                <img src="{{asset('media/template/protocol/01/protocol-03.png')}}" alt="">
                            </div>
                            <div class="picture-outer">
                                <img src="{{asset('media/template/protocol/01/protocol-04.png')}}" alt="">
                            </div>
                            <div class="picture-outer">
                                <img src="{{asset('media/template/protocol/01/protocol-05.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </section>


                <!-- COMMENT -->
                <section class="comment-outer">
                    <div class="comment-inner">
                        <div class="head">
                            <h1>Wedding Wish</h1>
                            <p>Thanks for all the wedding wishes! You made a great day even greater!</p>
                        </div>
                        <form action="{{route('comment.store',['name'=>$g->name])}}" name="yourForm" id="theForm" method="post">  
                          {{csrf_field()}}     
                          <div class="form-group">
                          <textarea class="form-control" name="comment" rows="1" placeholder="Write something..." style="max-height: 350px;"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Send</button>  
                        <div class="comments">
                            <!-- COMMENTS -->
                        </div>
                        <div class="foot">
                        </div>
                    </div>
                </section>

            
<!-- QUOTE END -->
        <section class="quote-end">
            <div class="quote-end-inner">
                <p>
                    "Some people are worth melting for.<br>
<br>
(Olaf, character from Frozen)"
                </p>
            </div>
        </section>
<!-- FOOTNOTE -->
<section class="footnote">
    <div class="footnote-inner">
        <h1>Yudha & Era</h1>
        <p>October 8<sup>th</sup>, 2021</p>
    </div>
</section>

<!-- FOOTER -->
<section class="footer">
    <div class="footer-inner">
        <img src="media/kat/favicon-white.png" alt="">
    </div>
</section>
@endforeach
@endsection
@section('sweetalert')
    @if(Session::has('Sukses'))
        swal("Sukses", "{{Session::get('Sukses')}}", "success");
    @endif
@endsection