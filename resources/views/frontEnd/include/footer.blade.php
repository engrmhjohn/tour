<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>| Site Map</h4>
                <ul>
                    <li><a href="{{ route('about') }}">about us</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('privacy-policy') }}">privacy policy</a></li>
                    <li><a href="{{ route('t&c') }}">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>| get help</h4>
                @foreach($contacts as $contact)
                <ul>
                    <li><a href="#">{{$contact->contact_number}}</a></li>
                    <li><a class="text-lowercase" href="#">{{$contact->contact_mail}}</a></li>
                    <span>{{$contact->office_location}}</span>
                </ul>
                @endforeach
            </div>
            <div class="footer-col">
                <h4>| We Accept</h4>
                @foreach($payments as $payment)
                <ul>
                    <li><a href="#">Bkash {{$payment->bkash_number}}</a></li>
                    <li><a href="#">Nagad {{$payment->nagad_number}}</a></li>
                    <li><a href="#">Rocket {{$payment->rocket_number}}</a></li>
                    <li><a href="#">Bank {{$payment->bank_acc_number}}</a></li>
                </ul>
                    @endforeach
            </div>
            <div class="footer-col">
                <h4>| follow us</h4>
                @foreach($contacts as $contact)
                <div class="social-links">
                    <a href="{{$contact->fblink}}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{$contact->twitlink}}"><i class="fab fa-twitter"></i></a>
                    <a href="{{$contact->instalink}}"><i class="fab fa-instagram"></i></a>
                    <a href="{{$contact->ytlink}}"><i class="fab fa-youtube"></i></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</footer>
<section class="footer-bottom">
    <div class="container">
        <div class="row c-mr-0">
            @foreach($copyrights as $copyright)
            <div class="col-md-12">
                All rights reserved &copy; {{$copyright->copyright}} | Developed by <a href="https://mhjohn.com/" style="text-decoration: none; color: white;">Mehedi Hasan</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
