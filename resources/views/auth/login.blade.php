@extends('layouts.app')

@section('content')

    <section>
        <div class="block remove-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-popup-area signin-popup-box static">
                            <div class="account-popup">
                                <h3>Acceso para Empresas</h3>
                                <form>
                                    <div class="cfield">
                                        <input type="text" placeholder="Email" />
                                        <i class="la la-envelope-o"></i>
                                    </div>
                                    <div class="cfield">
                                        <input type="password" placeholder="********" />
                                        <i class="la la-key"></i>
                                    </div>
                                    <p class="remember-label">
                                        <input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
                                    </p>
                                    <a href="login.html#" title="">Forgot Password?</a>
                                    <button type="submit">Login</button>
                                </form>
                            </div>
                        </div><!-- LOGIN POPUP -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
