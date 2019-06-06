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
                                        <a href="employer_transactions.html#" title=""><i class="la la-file-text"></i>Company Profile</a>
                                        <ul>
                                            <ol><a href="employer_transactions.html#" title="">My Profile</a></ol>
                                            <ol><a href="employer_transactions.html#" title="">Social Network</a></ol>
                                            <ol><a href="employer_transactions.html#" title="">Contact Information</a></ol>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_transactions.html#" title=""><i class="la la-briefcase"></i>Manage Jobs</a>
                                        <ul>
                                            <li><a href="employer_transactions.html#" title="">My Profile</a></li>
                                            <li><a href="employer_transactions.html#" title="">Social Network</a></li>
                                            <li><a href="employer_transactions.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_transactions.html#" title=""><i class="la la-money"></i>Transactions</a>
                                        <ul>
                                            <li><a href="employer_transactions.html#" title="">My Profile</a></li>
                                            <li><a href="employer_transactions.html#" title="">Social Network</a></li>
                                            <li><a href="employer_transactions.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_transactions.html#" title=""><i class="la la-paper-plane"></i>Resumes</a>
                                        <ul>
                                            <li><a href="employer_transactions.html#" title="">My Profile</a></li>
                                            <li><a href="employer_transactions.html#" title="">Social Network</a></li>
                                            <li><a href="employer_transactions.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_transactions.html#" title=""><i class="la la-user"></i>Packages</a>
                                        <ul>
                                            <li><a href="employer_transactions.html#" title="">My Profile</a></li>
                                            <li><a href="employer_transactions.html#" title="">Social Network</a></li>
                                            <li><a href="employer_transactions.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_transactions.html#" title=""><i class="la la-file-text"></i>Post a New Job</a>
                                        <ul>
                                            <li><a href="employer_transactions.html#" title="">My Profile</a></li>
                                            <li><a href="employer_transactions.html#" title="">Social Network</a></li>
                                            <li><a href="employer_transactions.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_transactions.html#" title=""><i class="la la-flash"></i>Job Alerts</a>
                                        <ul>
                                            <li><a href="employer_transactions.html#" title="">My Profile</a></li>
                                            <li><a href="employer_transactions.html#" title="">Social Network</a></li>
                                            <li><a href="employer_transactions.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_transactions.html#" title=""><i class="la la-lock"></i>Change Password</a>
                                        <ul>
                                            <li><a href="employer_transactions.html#" title="">My Profile</a></li>
                                            <li><a href="employer_transactions.html#" title="">Social Network</a></li>
                                            <li><a href="employer_transactions.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="employer_transactions.html#" title=""><i class="la la-unlink"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="manage-jobs-sec">
                                <h3>Lista de Grabacines</h3>
                                <table>
                                    <thead>
                                    <tr>
                                        <td>recordID</td>
                                        <td>meetingID</td>
                                        <td>published</td>
                                        <td>recordID</td>
                                        <td>name</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($arreglo as $arr)
                                        <tr>
                                            <td>
                                                <span>{{$arr["recordID"]}}</span>
                                            </td>
                                            <td>
                                                <div class="table-list-title">
                                                    <h3>{{$arr["meetingID"]}}</h3>
                                                </div>
                                            </td>
                                            <td>
                                                <span>{{$arr["published"]}}</span>
                                            </td>
                                            <td>
                                                <a href="eliminarGrabacionID/{{$arr["recordID"]}}" target="_blank"><i class="la la-trash-o"></i></a>
                                            </td>
                                            <td>
                                                <span>{{$arr["name"]}}</span>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection