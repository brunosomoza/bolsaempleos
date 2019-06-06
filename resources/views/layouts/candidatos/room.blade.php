@extends('layouts.app')
@section('content')
    <section>
        <div class="block no-padding">
            <div class="container">
                <div class="row no-gape">
                    <aside class="col-lg-3 column border-right">
                        <div class="widget">
                            <div class="tree_widget-sec">
                                <ul>
                                    <li class="inner-child">
                                        <a href="employer_post_new.html#" title=""><i class="la la-file-text"></i>Company Profile</a>
                                        <ul>
                                            <ol><a href="employer_post_new.html#" title="">My Profile</a></ol>
                                            <ol><a href="employer_post_new.html#" title="">Social Network</a></ol>
                                            <ol><a href="employer_post_new.html#" title="">Contact Information</a></ol>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_post_new.html#" title=""><i class="la la-briefcase"></i>Manage Jobs</a>
                                        <ul>
                                            <li><a href="employer_post_new.html#" title="">My Profile</a></li>
                                            <li><a href="employer_post_new.html#" title="">Social Network</a></li>
                                            <li><a href="employer_post_new.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_post_new.html#" title=""><i class="la la-money"></i>Transactions</a>
                                        <ul>
                                            <li><a href="employer_post_new.html#" title="">My Profile</a></li>
                                            <li><a href="employer_post_new.html#" title="">Social Network</a></li>
                                            <li><a href="employer_post_new.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_post_new.html#" title=""><i class="la la-paper-plane"></i>Resumes</a>
                                        <ul>
                                            <li><a href="employer_post_new.html#" title="">My Profile</a></li>
                                            <li><a href="employer_post_new.html#" title="">Social Network</a></li>
                                            <li><a href="employer_post_new.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_post_new.html#" title=""><i class="la la-user"></i>Packages</a>
                                        <ul>
                                            <li><a href="employer_post_new.html#" title="">My Profile</a></li>
                                            <li><a href="employer_post_new.html#" title="">Social Network</a></li>
                                            <li><a href="employer_post_new.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_post_new.html#" title=""><i class="la la-file-text"></i>Post a New Job</a>
                                        <ul>
                                            <li><a href="employer_post_new.html#" title="">My Profile</a></li>
                                            <li><a href="employer_post_new.html#" title="">Social Network</a></li>
                                            <li><a href="employer_post_new.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_post_new.html#" title=""><i class="la la-flash"></i>Job Alerts</a>
                                        <ul>
                                            <li><a href="employer_post_new.html#" title="">My Profile</a></li>
                                            <li><a href="employer_post_new.html#" title="">Social Network</a></li>
                                            <li><a href="employer_post_new.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_post_new.html#" title=""><i class="la la-lock"></i>Change Password</a>
                                        <ul>
                                            <li><a href="employer_post_new.html#" title="">My Profile</a></li>
                                            <li><a href="employer_post_new.html#" title="">Social Network</a></li>
                                            <li><a href="employer_post_new.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="employer_post_new.html#" title=""><i class="la la-unlink"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="profile-title">
                                <h3>EmpleadoCrear reunion</h3>
                            </div>
                            <div class="profile-form-edit">
                                <form method="POST" action="{{route('candidato.unirse.reunion.post')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <span class="pf-title">ID Meeting</span>
                                            <div class="pf-field">
                                                <input type="text" name="meetingID" placeholder="Nombre de la reunion " />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <span class="pf-title">Su nombre</span>
                                            <div class="pf-field">
                                                <input type="text" name="name" placeholder="Nombre de la reunion " />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <span class="pf-title">Clave reunion</span>
                                            <div class="pf-field">
                                                <input type="text" name="attendee_password" placeholder="Nombre de la reunion " />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="pf-field">
                                                <button type="submit">Unirse Reunion</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="contact-edit">
                                {{--                                <form>--}}
                                {{--                                    <div class="row">--}}
                                {{--                                        <div class="col-lg-6">--}}
                                {{--                                            <span class="pf-title">Find On Map</span>--}}
                                {{--                                            <div class="pf-field">--}}
                                {{--                                                <input type="text" placeholder="Collins Street West, Victoria 8007, Australia." />--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="col-lg-3">--}}
                                {{--                                            <span class="pf-title">Latitude</span>--}}
                                {{--                                            <div class="pf-field">--}}
                                {{--                                                <input type="text" placeholder="41.1589654" />--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="col-lg-3">--}}
                                {{--                                            <span class="pf-title">Longitude</span>--}}
                                {{--                                            <div class="pf-field">--}}
                                {{--                                                <input type="text" placeholder="21.1589654" />--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="col-lg-12">--}}
                                {{--                                            <button type="submit">Next</button>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </form>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection