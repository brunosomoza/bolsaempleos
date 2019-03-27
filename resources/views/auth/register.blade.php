@extends('layouts.app')

@section('content')
    <section>
        <div class="block remove-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-popup-area signup-popup-box static">
                            <div class="account-popup">
                                <h3>Sign Up</h3>
                                <div class="select-user">
                                    <span>Candidate</span>
                                    <span>Employer</span>
                                </div>
                                <form>
                                    <div class="cfield">
                                        <input type="text" placeholder="Username" />
                                        <i class="la la-user"></i>
                                    </div>
                                    <div class="cfield">
                                        <input type="password" placeholder="********" />
                                        <i class="la la-key"></i>
                                    </div>
                                    <div class="cfield">
                                        <input type="text" placeholder="Email" />
                                        <i class="la la-envelope-o"></i>
                                    </div>
                                    <div class="dropdown-field">
                                        <select data-placeholder="Please Select Specialism" class="chosen">
                                            <option>Web Development</option>
                                            <option>Web Designing</option>
                                            <option>Art & Culture</option>
                                            <option>Reading & Writing</option>
                                        </select>
                                    </div>
                                    <div class="cfield">
                                        <input type="text" placeholder="Phone Number" />
                                        <i class="la la-phone"></i>
                                    </div>
                                    <button type="submit">Signup</button>
                                </form>
                                <div class="extra-login">
                                    <span>Or</span>
                                    <div class="login-social">
                                        <a class="fb-login" href="register.html#" title=""><i class="fa fa-facebook"></i></a>
                                        <a class="tw-login" href="register.html#" title=""><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- SIGNUP POPUP -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
