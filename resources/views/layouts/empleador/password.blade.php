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
                                    <a href="employer_change_password.html#" title=""><i class="la la-file-text"></i>Company Profile</a>
                                    <ul>
                                        <ol><a href="employer_change_password.html#" title="">My Profile</a></ol>
                                        <ol><a href="employer_change_password.html#" title="">Social Network</a></ol>
                                        <ol><a href="employer_change_password.html#" title="">Contact Information</a></ol>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="employer_change_password.html#" title=""><i class="la la-briefcase"></i>Manage Jobs</a>
                                    <ul>
                                        <li><a href="employer_change_password.html#" title="">My Profile</a></li>
                                        <li><a href="employer_change_password.html#" title="">Social Network</a></li>
                                        <li><a href="employer_change_password.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="employer_change_password.html#" title=""><i class="la la-money"></i>Transactions</a>
                                    <ul>
                                        <li><a href="employer_change_password.html#" title="">My Profile</a></li>
                                        <li><a href="employer_change_password.html#" title="">Social Network</a></li>
                                        <li><a href="employer_change_password.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="employer_change_password.html#" title=""><i class="la la-paper-plane"></i>Resumes</a>
                                    <ul>
                                        <li><a href="employer_change_password.html#" title="">My Profile</a></li>
                                        <li><a href="employer_change_password.html#" title="">Social Network</a></li>
                                        <li><a href="employer_change_password.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="employer_change_password.html#" title=""><i class="la la-user"></i>Packages</a>
                                    <ul>
                                        <li><a href="employer_change_password.html#" title="">My Profile</a></li>
                                        <li><a href="employer_change_password.html#" title="">Social Network</a></li>
                                        <li><a href="employer_change_password.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="employer_change_password.html#" title=""><i class="la la-file-text"></i>Post a New Job</a>
                                    <ul>
                                        <li><a href="employer_change_password.html#" title="">My Profile</a></li>
                                        <li><a href="employer_change_password.html#" title="">Social Network</a></li>
                                        <li><a href="employer_change_password.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="employer_change_password.html#" title=""><i class="la la-flash"></i>Job Alerts</a>
                                    <ul>
                                        <li><a href="employer_change_password.html#" title="">My Profile</a></li>
                                        <li><a href="employer_change_password.html#" title="">Social Network</a></li>
                                        <li><a href="employer_change_password.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="employer_change_password.html#" title=""><i class="la la-lock"></i>Change Password</a>
                                    <ul>
                                        <li><a href="employer_change_password.html#" title="">My Profile</a></li>
                                        <li><a href="employer_change_password.html#" title="">Social Network</a></li>
                                        <li><a href="employer_change_password.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li><a href="employer_change_password.html#" title=""><i class="la la-unlink"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <div class="col-lg-9 column">
                    <div class="padding-left">
                        <div class="manage-jobs-sec">
                            <h3>Change Password</h3>
                            <div class="change-password">
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <span class="pf-title">Old Password</span>
                                            <div class="pf-field">
                                                <input type="password" />
                                            </div>
                                            <span class="pf-title">New Password</span>
                                            <div class="pf-field">
                                                <input type="password" />
                                            </div>
                                            <span class="pf-title">Confirm Password</span>
                                            <div class="pf-field">
                                                <input type="password" />
                                            </div>
                                            <button type="submit">Update</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <i class="la la-key big-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection