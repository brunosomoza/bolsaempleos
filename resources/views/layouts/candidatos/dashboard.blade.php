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
                                    <a href="candidates_dashboard.html#" title=""><i class="la la-file-text"></i>Company Profile</a>
                                    <ul>
                                        <ol><a href="candidates_dashboard.html#" title="">My Profile</a></ol>
                                        <ol><a href="candidates_dashboard.html#" title="">Social Network</a></ol>
                                        <ol><a href="candidates_dashboard.html#" title="">Contact Information</a></ol>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="candidates_dashboard.html#" title=""><i class="la la-briefcase"></i>Manage Jobs</a>
                                    <ul>
                                        <li><a href="candidates_dashboard.html#" title="">My Profile</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Social Network</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="candidates_dashboard.html#" title=""><i class="la la-money"></i>Transactions</a>
                                    <ul>
                                        <li><a href="candidates_dashboard.html#" title="">My Profile</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Social Network</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="candidates_dashboard.html#" title=""><i class="la la-paper-plane"></i>Resumes</a>
                                    <ul>
                                        <li><a href="candidates_dashboard.html#" title="">My Profile</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Social Network</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="candidates_dashboard.html#" title=""><i class="la la-user"></i>Packages</a>
                                    <ul>
                                        <li><a href="candidates_dashboard.html#" title="">My Profile</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Social Network</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="candidates_dashboard.html#" title=""><i class="la la-file-text"></i>Post a New Job</a>
                                    <ul>
                                        <li><a href="candidates_dashboard.html#" title="">My Profile</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Social Network</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="candidates_dashboard.html#" title=""><i class="la la-flash"></i>Job Alerts</a>
                                    <ul>
                                        <li><a href="candidates_dashboard.html#" title="">My Profile</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Social Network</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li class="inner-child">
                                    <a href="candidates_dashboard.html#" title=""><i class="la la-lock"></i>Change Password</a>
                                    <ul>
                                        <li><a href="candidates_dashboard.html#" title="">My Profile</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Social Network</a></li>
                                        <li><a href="candidates_dashboard.html#" title="">Contact Information</a></li>
                                    </ul>
                                </li>
                                <li><a href="candidates_dashboard.html#" title=""><i class="la la-unlink"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="skill-perc">
                            <h3>Skills Percentage </h3>
                            <p>Put value for "Cover Image" field to increase your skill up to "15%"</p>
                            <div class="skills-bar">
                                <span>85%</span>
                                <div
                                        class="second circle"
                                        data-size="155"
                                        data-thickness="60">
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="col-lg-9 column">
                    <div class="padding-left">
                        <div class="manage-jobs-sec">
                            <h3>Candidates Dashboard</h3>
                            <div class="cat-sec">
                                <div class="row no-gape">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="p-category">
                                            <a href="candidates_dashboard.html#" title="">
                                                <i class="la la-briefcase"></i>
                                                <span>Applied Job</span>
                                                <p>14 Applications</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="p-category view-resume-list">
                                            <a href="candidates_dashboard.html#" title="">
                                                <i class="la la-eye"></i>
                                                <span>View Resume</span>
                                                <p>22 View Statistic</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="p-category">
                                            <a href="candidates_dashboard.html#" title="">
                                                <i class="la la-file-text "></i>
                                                <span>My Resume</span>
                                                <p>Create New Resume</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-sec">
                                <div class="row no-gape">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="p-category">
                                            <a href="candidates_dashboard.html#" title="">
                                                <i class="la la-check"></i>
                                                <span>Appropriate For Me</span>
                                                <p>(05 Jobs)</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="p-category follow-companies-popup">
                                            <a href="candidates_dashboard.html#" title="">
                                                <i class="la la-user"></i>
                                                <span>Follow Companies</span>
                                                <p>56 Companies</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="p-category">
                                            <a href="candidates_dashboard.html#" title="">
                                                <i class="la la-file"></i>
                                                <span>My Profile</span>
                                                <p>View Profile</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection