@extends('layouts.app')

@section('content')

    <section>
        <div class="block remove-top">
            <div class="container">
                <div class="row no-gape">
                    <aside class="col-lg-3 column border-right">
                        <div class="widget">
                            <div class="tree_widget-sec">
                                <ul>
                                    <li class="inner-child">
                                        <a href="candidates_my_resume.html#" title=""><i class="la la-file-text"></i>Company Profile</a>
                                        <ul>
                                            <ol><a href="candidates_my_resume.html#" title="">My Profile</a></ol>
                                            <ol><a href="candidates_my_resume.html#" title="">Social Network</a></ol>
                                            <ol><a href="candidates_my_resume.html#" title="">Contact Information</a></ol>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_my_resume.html#" title=""><i class="la la-briefcase"></i>Manage Jobs</a>
                                        <ul>
                                            <li><a href="candidates_my_resume.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_my_resume.html#" title=""><i class="la la-money"></i>Transactions</a>
                                        <ul>
                                            <li><a href="candidates_my_resume.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_my_resume.html#" title=""><i class="la la-paper-plane"></i>Resumes</a>
                                        <ul>
                                            <li><a href="candidates_my_resume.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_my_resume.html#" title=""><i class="la la-user"></i>Packages</a>
                                        <ul>
                                            <li><a href="candidates_my_resume.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_my_resume.html#" title=""><i class="la la-file-text"></i>Post a New Job</a>
                                        <ul>
                                            <li><a href="candidates_my_resume.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_my_resume.html#" title=""><i class="la la-flash"></i>Job Alerts</a>
                                        <ul>
                                            <li><a href="candidates_my_resume.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_my_resume.html#" title=""><i class="la la-lock"></i>Change Password</a>
                                        <ul>
                                            <li><a href="candidates_my_resume.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_my_resume.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="candidates_my_resume.html#" title=""><i class="la la-unlink"></i>Logout</a></li>
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
                                <div class="border-title"><h3>Estudios realizados</h3><a class="estudios-popup " title=""><i class="la la-plus"></i> Agregar estudios</a></div>
                                @forelse($estudios as $e)
                                    <div class="edu-history-sec" >
                                        <div class="edu-history">
                                            <i class="la la-graduation-cap"></i>
                                            <div class="edu-hisinfo">
                                                <h3>{{$e->id}}Universuty</h3>
                                                <i> 2008 - 2012</i>
                                                <span>Middle East Technical University <i>Computer Science</i></span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                            </div>
                                            <ul class="action_job">
                                                <li class="btnEditarEstudio"><span>Editar</span><a title=""><i class="la la-pencil"></i></a></li>
                                                <li class="btnEliminarEstudio" id="7b499bbe-b269-38fd-b6a3-fb3b01fcfe09"><span>Eliminar</span><a title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                                <div class="border-title"><h3>Work Experience</h3><a title=""><i class="la la-plus"></i> Add Experience</a></div>
                                <div class="edu-history-sec">
                                    <div class="edu-history style2">
                                        <i></i>
                                        <div class="edu-hisinfo">
                                            <h3>Web Designer <span>Inwave Studio</span></h3>
                                            <i>2008 - 2012</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="candidates_my_resume.html#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="candidates_my_resume.html#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="edu-history style2">
                                        <i></i>
                                        <div class="edu-hisinfo">
                                            <h3>CEO Founder <span>Inwave Studio</span></h3>
                                            <i>2008 - 2012</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="candidates_my_resume.html#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="candidates_my_resume.html#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="border-title"><h3>Portfolio</h3><a href="candidates_my_resume.html#" title=""><i class="la la-plus"></i> Add Portfolio</a></div>
                                <div class="mini-portfolio">
                                    <div class="mp-row">
                                        <div class="mp-col">
                                            <div class="mportolio"><img src="images/resource/p1.jpg" alt="" /><a href="candidates_my_resume.html#" title=""><i class="la la-search"></i></a></div>
                                            <ul class="action_job">
                                                <li><span>Edit</span><a href="candidates_my_resume.html#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="candidates_my_resume.html#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="mp-col">
                                            <div class="mportolio"><img src="images/resource/p2.jpg" alt="" /><a href="candidates_my_resume.html#" title=""><i class="la la-search"></i></a></div>
                                            <ul class="action_job">
                                                <li><span>Edit</span><a href="candidates_my_resume.html#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="candidates_my_resume.html#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="mp-col">
                                            <div class="mportolio"><img src="images/resource/p3.jpg" alt="" /><a href="candidates_my_resume.html#" title=""><i class="la la-search"></i></a></div>
                                            <ul class="action_job">
                                                <li><span>Edit</span><a href="candidates_my_resume.html#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="candidates_my_resume.html#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="mp-col">
                                            <div class="mportolio"><img src="images/resource/p4.jpg" alt="" /><a href="candidates_my_resume.html#" title=""><i class="la la-search"></i></a></div>
                                            <ul class="action_job">
                                                <li><span>Edit</span><a href="candidates_my_resume.html#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="candidates_my_resume.html#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-title"><h3>Professional Skills</h3><a href="candidates_my_resume.html#" title=""><i class="la la-plus"></i> Add Skills</a></div>
                                <div class="progress-sec">
                                    <div class="progress-sec with-edit">
                                        <span>Adobe Photoshop</span>
                                        <div class="progressbar"> <div class="progress" style="width: 80%;"><span>80%</span></div> </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="candidates_my_resume.html#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="candidates_my_resume.html#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="progress-sec with-edit">
                                        <span>Production In Html</span>
                                        <div class="progressbar"> <div class="progress" style="width: 60%;"><span>60%</span></div> </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="candidates_my_resume.html#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="candidates_my_resume.html#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="progress-sec with-edit">
                                        <span>Graphic Design</span>
                                        <div class="progressbar"> <div class="progress" style="width: 75%;"><span>75%</span></div> </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="candidates_my_resume.html#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="candidates_my_resume.html#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="border-title"><h3>Professional Skills</h3><a href="candidates_my_resume.html#" title=""><i class="la la-plus"></i> Add Skills</a></div>
                                <div class="edu-history-sec">
                                    <div class="edu-history style2">
                                        <i></i>
                                        <div class="edu-hisinfo">
                                            <h3>Perfect Attendance Programs</h3>
                                            <i>2008 - 2012</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="candidates_my_resume.html#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="candidates_my_resume.html#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="edu-history style2">
                                        <i></i>
                                        <div class="edu-hisinfo">
                                            <h3>Top Performer Recognition</h3>
                                            <i>2008 - 2012</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="candidates_my_resume.html#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="candidates_my_resume.html#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="edu-history style2">
                                        <i></i>
                                        <div class="edu-hisinfo">
                                            <h3>King LLC</h3>
                                            <i>2008 - 2012</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="candidates_my_resume.html#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="candidates_my_resume.html#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inicio Agregar Estudio -->
    <div class="account-popup-area estudios-popup-box" >
        <div class="account-popup">
            <span class="close-popup"><i class="la la-close"></i></span>
            <h3>Registrar Estudios</h3>
            <form id="agregarStudy">
                {{ csrf_field() }}
                <div class="cfield">
                    <input type="text" placeholder="Nombre institucion educativa" name="nombreUniversidad" id="nombreUniversidad" />
                    <i class="la la-home"></i>
                </div>
                <div class="cfield">
                    <input type="text" placeholder="Nombre carrera ó curso" name="nombreCarrera" id="nombreCarrera" />
                    <i class="la la-book"></i>
                </div>
                <div class="cfield" style="width: 50%">
                    <input type="date" name="inicioEstudio" id="inicioEstudio" />
                    <i class="la la-calendar-minus-o"></i>
                </div>
                <div class="cfield" style="width: 50%">
                    <input type="date"  name="finEstudio" id="finEstudio"  />
                    <i class="la la-calendar-plus-o"></i>

                </div>
                <div class="cfield">
                    <input type="text" placeholder="Email" />
                    <i class="la la-envelope-o"></i>
                </div>
                <div class="dropdown-field">
                    <select data-placeholder="Please Select Specialism" class="chosen" name="estado">
                        <option value="0">_SELECCIONAR ESTADO</option>
                        <option value="TERMINADO">TERMINADO</option>
                        <option value="ESTUDIANDO">ESTUDIANDO</option>
                        <option value="ABANDONADO">ABANDONADO</option>
                    </select>
                </div>
                <button type="submit" class="agregarEstudio" >Guardar</button>
            </form>
            <div class="extra-login">
                <span>Or</span>
                <div class="login-social">
                    <a class="fb-login" href="login.html#" title=""><i class="fa fa-facebook"></i></a>
                    <a class="tw-login" href="login.html#" title=""><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN Agregar Estudio -->



    <!-- Eliminar Estudio-->
    <div class="account-popup-area eliminar-estudios-popup-box" id="eliminar-estudios-popup-box" >
        <div class="account-popup" >
            <span class="close-popup"><i class="la la-close"></i></span>
            <h4>Eliminará el estudio seleccionado ?</h4>
            <form id="frmEliminarIDEstudio">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <input type="hidden" id="IDEstudio" name="IDEstudio">
                <button type="submit" class="" >Eliminar</button>
            </form>
            <div class="extra-login">
                <span>Or</span>
                <div class="login-social">
                    <a class="fb-login" href="login.html#" title=""><i class="fa fa-facebook"></i></a>
                    <a class="tw-login" href="login.html#" title=""><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Eliminar Estudio -->
@endsection
@push('java')
    <script type='text/javascript'>

        $(document).ready(function(){
            $('.btnEliminarEstudio').on('click', function(){
                console.log('click');
                $('.eliminar-estudios-popup-box').fadeIn('fast');
                $('html').addClass('no-scroll');
                $('#IDEstudio').val($(this).attr('id'));
            });

            $('#frmEliminarIDEstudio').on('submit', function(e){
                e.preventDefault();
                var id = $('#IDEstudio').val();
               console.log(id);
                $.ajax({
                    type: "POST",
                    url: "/eliminarIDEstudio/"+id,
                    data: $('#frmEliminarIDEstudio').serialize(),
                    success: function (response) {
                        console.log(id);
                        $('.eliminar-estudios-popup-box').fadeOut('fast');
                        $('html').removeClass('no-scroll');
                        alert('Se borro con exito.');
                    },
                    error: function (error) {
                        console.log(error)
                        alert("Error :" +error);
                    }
                });
            });

        });

    </script>
@endpush