@extends('layouts.ieee')

    @section('title')
        Board
    @endsection

    @section('header')
        {!! Html::style('/css/board.style.css') !!}
    @endsection

    @section('navbar-type', 'transparent navbar-inverse')
@section('content')
<section data-spy="scroll">
<!-- Side nav -->
<nav class="side-nav" role="navigation">

    <ul class="nav-side-nav">
        <li><a class="tooltip-side-nav example" href="#section-1" title="" data-original-title="2015_2016" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav example" href="#section-2" title="" data-original-title="2014_2015" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav example" href="#section-3" title="" data-original-title="2013_2014" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav example" href="#section-3" title="" data-original-title="2012_2013" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav example" href="#section-3" title="" data-original-title="2011_2012" data-placement="left"></a></li>
    </ul>

</nav> <!-- /.side-nav -->

<!-- Board of Directors -->
<div class="container-fluid directors">
    <h1>Board of Directors</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="person">
                <img src="/images/man-avatar.png" alt="..." class="img-circle directors-image" id="farokhi">
                <h3>Dr. Fardad<br>Farokhi</h3>
                <h4>Branch Counselor</h4>
                <a href="http://f-farokhi-elec.iauctb.ac.ir/faculty/fa" type="button" class="btn btn-info btn-xs">More Info</a>
                {{--<button type="button" class="btn btn-success btn-xs">Send Message</button>--}}
            </div>
        </div>
        <div class="col-md-6">
            <div class="person">
                <img src="/images/man-avatar.png" alt="..." class="img-circle directors-image" id="kashani_nia">
                <h3>Dr. Alireza<br>Kashani nia</h3>
                <h4>Adviser of EAC<sup>*</sup></h4>
                <a href="http://a-kashaniniya-elec.iauctb.ac.ir/faculty/fa" type="button" class="btn btn-info btn-xs">More Info</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="person">
                <img src="/images/man-avatar.png" alt="..." class="img-circle directors-image" id="jahanshahi">
                <h3>Dr. Mohsen<br>Jahanshahi</h3>
                <h4>Adviser of PAC<sup>**</sup></h4>
                <a href="http://m-jahanshahi-comp.iauctb.ac.ir/faculty/fa" type="button" class="btn btn-info btn-xs">More Info</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="person">
                <img src="/images/woman-avatar.png" alt="..." class="img-circle directors-image" id="shoouri">
                <h3>Dr. Nasrin<br>Sho’ouri</h3>
                <h4>Adviser of WIE<sup>***</sup></h4>
                <a href="http://n-shourie-elec.iauctb.ac.ir/faculty/fa" type="button" class="btn btn-info btn-xs">More Info</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="person">
                <img src="/images/man-avatar.png" alt="..." class="img-circle directors-image" id="sabaghi_nodushan">
                <h3>Dr. Reza<br>Sabaghi-nodushan</h3>
                <h4>Adviser of Conferences</h4>
                <a href="http://r-sabbaghi-elec.iauctb.ac.ir/faculty/fa" type="button" class="btn btn-info btn-xs">More Info</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="person">
                <img src="/images/man-avatar.png" alt="..." class="img-circle directors-image" id="javadi">
                <h3>Dr. Shahram<br>Javadi</h3>
                <h4>Adviser of Chapers</h4>
                <a href="http://s-javadi-elec.iauctb.ac.ir/faculty/" type="button" class="btn btn-info btn-xs">More Info</a>
            </div>
        </div>
    </div>

</div>
<!-- ================== Committees ================== -->
<div class="container-fluid committees">
    <!-- executive -->
    <h1>Executive Committee</h1>
    <div class="executive-committee">
        <div class="row">
            <div class="col-md-12">
                <div class="person committee-person">
                    <img src="/images/woman-avatar.png" alt="..." class="img-circle directors-image" id="pourmohammad">
                    <h3>Elaheh Pourmohammad</h3>
                    <h4>Chair</h4>
                    <h5>Hardware Engineer</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="person committee-person">
                    <img src="/images/woman-avatar.png" alt="..." class="img-circle directors-image" id="afshani">
                    <h3>Marzieh Afshani</h3>
                    <h4>Secretary</h4>
                    <h5>Electronic Engineering Senior</h5>
                    <h5>Senior</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="person committee-person">
                    <img src="/images/woman-avatar.png" alt="..." class="img-circle directors-image" id="panahi">
                    <h3>Mohadeseh Panahi Moghadam</h3>
                    <h4>Vice-Chair</h4>
                    <h5>Electronic Engineering</h5>
                    <h5>Senior</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="person committee-person">
                    <img src="/images/woman-avatar.png" alt="..." class="img-circle directors-image" id="khorami">
                    <h3>Elham Khorami</h3>
                    <h4>Treasurer</h4>
                    <h5>Electronic Engineering</h5>
                    <h5>Senior</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>
        </div>
    </div>
    <!-- operative -->
    <h1>Operative Committee</h1>
    <div class="operative-committee">
        <!-- Row one -->
        <div class="row">
            <div class="col-md-3">
                <div class="person committee-person">
                    <img src="/images/man-avatar.png" alt="..." class="img-circle directors-image" id="nazemi">
                    <h3>Mohammad-Hosein Nazemi</h3>
                    <h4>Chapters and PAC</h4>
                    <h5>Computer Engineering</h5>
                    <h5>Senior</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="person committee-person">
                    <img src="/images/man-avatar.png" alt="..." class="img-circle directors-image" id="afrouqeh">
                    <h3>Ashkan Afrouqeh</h3>
                    <h4>Student Activities Committee (SAC)</h4>
                    <h5>Computer Engineering</h5>
                    <h5>Senior</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="person committee-person">
                    <img src="/images/woman-avatar.png" alt="..." class="img-circle directors-image" id="bahman_Abadi">
                    <h3>Fahimeh<br>Bahman-Abadi</h3>
                    <h4>Educational Activities Committee (EAC)</h4>
                    <h5>Electronic Engineering</h5>
                    <h5>Senior</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>

            <div class="col-md-3">
                <div class="person committee-person">
                    <img src="/images/woman-avatar.png" alt="..." class="img-circle directors-image" id="lalat">
                    <h3>Yasaman Lalat</h3>
                    <h4>Informatics</h4>
                    <h5>Computer Engineering</h5>
                    <h5>Senior</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>
        </div>

        <!-- Row tow -->
        <div class="row">
            <div class="col-md-3">
                <div class="person committee-person">
                    <img src="/images/man-avatar.png" alt="..." class="img-circle directors-image" id="iranshahi">
                    <h3>Moein Iranshahi</h3>
                    <h4>Industrial Relations</h4>
                    <h5>Computer Engineering</h5>
                    <h5>Senior</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="person committee-person">
                    <img src="/images/man-avatar.png" alt="..." class="img-circle directors-image" id="cheraghi">
                    <h3>Seyed Emad Cheraghi</h3>
                    <h4>News Coverage</h4>
                    <h5>Computer Engineering</h5>
                    <h5>Senior</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="person committee-person">
                    <img src="/images/woman-avatar.png" alt="..." class="img-circle directors-image" id="adib_zade">
                    <h3>Fatemeh<br>Adib-zade</h3>
                    <h4>Conferences</h4>
                    <h5>Electronic Engineering</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>

            <div class="col-md-3">
                <div class="person committee-person">
                    <img src="/images/woman-avatar.png" alt="..." class="img-circle directors-image" id="beheshti_fard">
                    <h3>Nazanin<br>Beheshti-fard</h3>
                    <h4>Membership Development</h4>
                    <h5>Computer Engineer</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>
        </div>

        <!-- Row three -->
        <div class="row">
            <div class="col-md-3">
                <div class="person committee-person">
                    <img src="/images/man-avatar.png" alt="..." class="img-circle directors-image" id="vadaye_Kheiri">
                    <h3>Salar<br>Vadaye-Kheiri</h3>
                    <h4>Nominations and Appointments</h4>
                    <h5>Electronic Engineering, MSc</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="person committee-person">
                    <img src="/images/man-avatar.png" alt="..." class="img-circle directors-image" id="nikbin">
                    <h3>Mohammad-Reza Nikbin</h3>
                    <h4>Awards and Recognition</h4>
                    <h5>Electronic Engineering, MSc</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="person committee-person">
                    <img src="/images/woman-avatar.png" alt="..." class="img-circle directors-image" id="yousefi">
                    <h3>Zahra Yousefi</h3>
                    <h4>Women In Engineering (WIE)</h4>
                    <h5>Electronic Engineering</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>

            <div class="col-md-3">
                <div class="person committee-person">
                    <img src="/images/man-avatar.png" alt="..." class="img-circle directors-image" id="karimi_mehr">
                    <h3>Shahram<br>Karimi-mehr</h3>
                    <h4>Younger Professionals (GOLD)</h4>
                    <h5>Computer Engineering, MSc</h5>
                    <button type="button" class="btn btn-info btn-xs">More Info</button>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ===================== Subscription ===================== -->
<section>
    <div class="Subscription">
        <div class="container">
            <div class="subscribe-body clearfix text-center">
                <div class="envelope-circle">
                    <a href="{{route('subscription')}}"><span class="glyphicon glyphicon-envelope big-envelope"></span></a>
                </div>
            </div>
            <!-- subscribe text -->
            <div class="col-md-8 subscribe-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore reprehenderit unde, rem at vitae fugiat repellat aliquam repellendus temporibus animi, voluptatem reiciendis odio architecto error quos nostrum et iure aliquid?</p>
            </div>
            <!-- subscribe form -->
            <div class="container subscribe-form">
                {!! Form::open(array('url'=>'/subscribe', 'method' => 'post','class' => 'text-center form-horizontal')) !!}
                <div class="form-group form-subscribe form-group-lg subscribe-form-body">
                    <div class="col-md-7 form-inline subscribe-form-column">
                        {!! Form::label('email-subscribe', 'Stay up to date!') !!}
                        {!! Form::email($name = 'email', $value = null, $attributes = array('class'=>'form-control lg email-input', 'placeholder'=>'input your email here', 'id'=>'email-subscribe')) !!}
                        {!! Form::submit('subscribe' ,array('class' => 'btn btn-primary btn-lg subscribe-button')) !!}
                        <div class="status-div">
                            <span class="glyphicon status-mark" aria-hidden="true" style="display: none"></span>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</section>
@stop

@section('script')
    {!! Html::script('js/ieee.pages.js') !!}
    {!! Html::script('js/board.page.js') !!}
    <script>
        $('.tooltip-side-nav').tooltip();

    </script>
@endsection