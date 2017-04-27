@extends('template')

@section('body_content')

    <section id="home">
        <div class="home-pattern"></div>
        <div id="main-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators hidden">
                <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#main-carousel" data-slide-to="1"></li>
                <li data-target="#main-carousel" data-slide-to="2"></li>
            </ol><!--/.carousel-indicators-->
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/home_map.png)">
                    <div class="carousel-caption" style="background: rgba(0, 0, 0, 0.7)">
                        <div>
                            <h2 class="heading animated bounceInDown">{{ config('app.name') }}</h2>
                            <p class="animated bounceInUp">Move through campus easily with our map :: Get your departmental time-table</p>
                            <a style="margin-right: 10px;" class="btn btn-default slider-btn animated fadeIn" href="{{ route('find-centre') }}"><span class="fa fa-map-marker"></span> Find a location</a>
                            <a class="btn btn-default slider-btn animated fadeIn"  data-toggle="modal" data-target="#timeTableForm"><span class="fa fa-calendar-o"></span> Get timetable</a>
                        </div>
                    </div>
                </div>
            </div><!--/.carousel-inner-->

            <a class="carousel-left hidden member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="carousel-right hidden member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>

    </section><!--/#home-->

    <div class="modal fade" id="timeTableForm" tabindex="-1" role="dialog" aria-labelledby="timeTableFormLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="timeTableFormLabel">What department and level are you?</h4>
                </div>
                @if($errors->count() > 0)

                    <div class="alert alert-danger">
                        {!! $errors->first() !!}
                    </div>

                @elseif(Session::has('success'))

                    <div class="alert alert-success">
                        {!! Session::get('success') !!}
                    </div>

                @elseif(Session::has('warning'))

                    <div class="alert alert-warning">
                        {!! Session::get('warning') !!}
                    </div>

                @elseif(Session::has('danger'))

                    <div class="alert alert-danger">
                        {!! Session::get('danger') !!}
                    </div>

                @endif
                <form method="post" action="{{ route('submit-timetable') }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your Email address" required>
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <select class="form-control" name="department" required>
                                <option disabled>Faculty of Tech</option>
                                <option value="computer_science">Department of Computer Science and Engineering</option>
                                <option value="elect_elect">Department of Electrical and Electronics Engineering</option>
                                <option value="chem_engine">Department of Chemical Engineering</option>
                                <option value="food_science">Department of Food Science and Engineering</option>
                                <option value="material_science">Department of Materials Science and Engineering</option>
                                <option value="civil_engineering">Department of Civil Engineering</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level" required>
                                <option value="100">100L</option>
                                <option value="200">200L</option>
                                <option value="300">300L</option>
                                <option value="400">400L</option>
                                <option value="500">500L</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="semester" value="harmattan" required>
                                Harmattan Semester
                            </label>
                            <label>
                                <input type="radio" name="semester" value="rain" required>
                                Rain Semester
                            </label>
                        </div>
                </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <section id="about-us">
        <div class="container">
            <div class="text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">Select a location on campus</h2>
                    <p class="hidden">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <br clear="all">
            <div class="about-us row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel-body text-center">
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'awolowo hall']) }}">Awo Hall</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'department of chemistry']) }}">Yellow house</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'white house']) }}">white house</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Faculty of Law basement']) }}">Faculty of Law basement</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Students Union Building']) }}">Students Union Building</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Humanities']) }}">Humanities</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Humanities car park']) }}">Humanities car park</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Forks and Fingers']) }}">Forks and Fingers</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Skye Bank Single ATM Machine']) }}">Skye Bank Single ATM Machine</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Bims Catering Services']) }}">Bims Catering Services</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Risky Joint']) }}">Risky Joint</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Moremi buttery']) }}">Moremi buttery</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Bus stop 1']) }}">Bus stop 1</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Bus stop 2']) }}">Bus stop 2</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Health Centre']) }}">Health Centre</a>
                        <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-success" href="{{ route('find-centre', ['location' => 'Oduduwa hall']) }}">Amphitheatre</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#about-us-->

    <section id="services" class="parallax-section hidden">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="our-service">
                        <div class="services row">
                            <div class="col-sm-4">
                                <div class="single-service">
                                    <i class="fa fa-th"></i>
                                    <h2>Modern Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-service">
                                    <i class="fa fa-html5"></i>
                                    <h2>Web Development</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-service">
                                    <i class="fa fa-users"></i>
                                    <h2>Online Marketing</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                                </div>
                            </div></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#service-->

    <section id="our-team" class="hidden">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">Meet The Team</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                </div>
            </div>
            <div id="team-carousel" class="carousel slide" data-interval="false">
                <a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                <div class="carousel-inner team-members">
                    <div class="row item active">
                        <div class="col-sm-6 col-md-3">
                            <div class="single-member">
                                <img src="images/our-team/member1.jpg" alt="team member" />
                                <h4>William Hurt</h4>
                                <h5>Sr. Web Developer</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                                <div class="socials">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="single-member">
                                <img src="images/our-team/member2.jpg" alt="team member" />
                                <h4>Alekjandra Jony</h4>
                                <h5>Creative Designer</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                                <div class="socials">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="single-member">
                                <img src="images/our-team/member3.jpg" alt="team member" />
                                <h4>Paul Johnson</h4>
                                <h5>Skilled Programmer</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                                <div class="socials">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="single-member">
                                <img src="images/our-team/member4.jpg" alt="team member" />
                                <h4>John Richerds</h4>
                                <h5>Marketing Officer</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                                <div class="socials">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-sm-6 col-md-3">
                            <div class="single-member">
                                <img src="images/our-team/member1.jpg" alt="team member" />
                                <h4>William Hurt</h4>
                                <h5>Sr. Web Developer</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                                <div class="socials">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="single-member">
                                <img src="images/our-team/member3.jpg" alt="team member" />
                                <h4>Paul Johnson</h4>
                                <h5>Skilled Programmer</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                                <div class="socials">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="single-member">
                                <img src="images/our-team/member2.jpg" alt="team member" />
                                <h4>Alekjandra Jony</h4>
                                <h5>Creative Designer</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                                <div class="socials">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="single-member">
                                <img src="images/our-team/member4.jpg" alt="team member" />
                                <h4>John Richerds</h4>
                                <h5>Marketing Officer</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                                <div class="socials">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#Our-Team-->

    <section id="contact" class="hidden">
        <div class="container">
            <div class="row text-center clearfix">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="contact-heading">
                        <h2 class="title-one">Contact With Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contact-details">
                <div class="pattern"></div>
                <div class="row text-center clearfix">
                    <div class="col-sm-6">
                        <div class="contact-address"><address><p><span>Devs</span>Cluster</p><strong>36 North Kafrul<br>Dhaka Cantonment Area<br> Dhaka-1206, Bangladesh</strong><br><small>( Lorem ipsum dolor sit amet, consectetuer adipiscing elit )</small></address>
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="contact-form-section">
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--/#contact-->

@endsection

@section('page_scripts')
    <script>

    </script>
@endsection