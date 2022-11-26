<section class="hero-top">
    <div class="top-bar">
        <div class="container">
            <div class="row c-mr-0">
                <div class="col-md-7 col-12 col-sm-8">
                    @foreach($contacts as $contact)
                    <ul class="left-ul">
                        <li><i class="fa-solid fa-envelope"></i></li>
                        <li>{{$contact->contact_mail}}</li>
                        <li>|</li>
                        <li><i class="fa-solid fa-phone"></i></li>
                        <li>{{$contact->contact_number}}</li>
                    </ul>
                </div>
                <div class="col-md-5 col-12 col-sm-4">
                    <ul class="right-ul">
                        <li><a href="{{$contact->fblink}}"><i class="fa-brands fa-facebook"></i></a></li>
                        <li>|</li>
                        <li><a href="{{$contact->twitlink}}"><i class="fa-brands fa-twitter"></i></a></li>
                        <li>|</li>
                        <li><a href="{{$contact->instalink}}"><i class="fa-brands fa-instagram"></i></a></li>
                        <li>|</li>
                        <li><a href="{{$contact->ytlink}}"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
