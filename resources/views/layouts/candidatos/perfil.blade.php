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
                                        <a href="candidates_profile.html#" title=""><i class="la la-file-text"></i>Company Profile</a>
                                        <ul>
                                            <ol><a href="candidates_profile.html#" title="">My Profile</a></ol>
                                            <ol><a href="candidates_profile.html#" title="">Social Network</a></ol>
                                            <ol><a href="candidates_profile.html#" title="">Contact Information</a></ol>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_profile.html#" title=""><i class="la la-briefcase"></i>Manage Jobs</a>
                                        <ul>
                                            <li><a href="candidates_profile.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_profile.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_profile.html#" title=""><i class="la la-money"></i>Transactions</a>
                                        <ul>
                                            <li><a href="candidates_profile.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_profile.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_profile.html#" title=""><i class="la la-paper-plane"></i>Resumes</a>
                                        <ul>
                                            <li><a href="candidates_profile.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_profile.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_profile.html#" title=""><i class="la la-user"></i>Packages</a>
                                        <ul>
                                            <li><a href="candidates_profile.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_profile.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_profile.html#" title=""><i class="la la-file-text"></i>Post a New Job</a>
                                        <ul>
                                            <li><a href="candidates_profile.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_profile.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_profile.html#" title=""><i class="la la-flash"></i>Job Alerts</a>
                                        <ul>
                                            <li><a href="candidates_profile.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_profile.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="candidates_profile.html#" title=""><i class="la la-lock"></i>Change Password</a>
                                        <ul>
                                            <li><a href="candidates_profile.html#" title="">My Profile</a></li>
                                            <li><a href="candidates_profile.html#" title="">Social Network</a></li>
                                            <li><a href="candidates_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="candidates_profile.html#" title=""><i class="la la-unlink"></i>Logout</a></li>
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
                            <div class="profile-title">
                                <form action="{{ route('avatar.upload.post.candidate') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <h3>Completa tus datos por favor...</h3>
                                    <div class="upload-img-bar">
                                            <span>
                                                <img src="{{$url}}" alt="" /><i>x</i>
                                            </span>
                                        <div class="upload-info">
                                            <input type="file" name="avatar" id="avatar">
                                            <span>Max is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg & .png</span>
                                            <button type="submit" class="upload-img-bar">Guardar </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="profile-form-edit">
                                <form method="POST" action="{{ route('actualizar_perfil_candidato') }}" >
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <span class="pf-title">Nombe Completo</span>
                                            <div class="pf-field">
                                                <input id="name" name="name" type="text" placeholder="Nombre y Apellido" value=" {{ $candidato->name  }}" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Área Profesional : {{ $candidato->profession_id }}</span>
                                            <div class="pf-field">
                                                <select name="industria" id="industria" data-placeholder="_Sector Empresarial" class="chosen">
                                                    <option value="0">_Escribir</option>
                                                    <option value="1">1) AFJP</option>
                                                    <option value="2">2) Agro-Industrial</option>
                                                    <option value="3">3) Agropecuaria</option>
                                                    <option value="4">4) Alimenticia</option>
                                                    <option value="5">5) Arquitectura</option>
                                                    <option value="6">6) Artesanal</option>
                                                    <option value="7">7) Automotriz</option>
                                                    <option value="8">8) Aérea</option>
                                                    <option value="9">9) Banca / Financiera</option>
                                                    <option value="10">10) Biotecnología</option>
                                                    <option value="11">11) Comercio</option>
                                                    <option value="12">12) Comercio Exterior</option>
                                                    <option value="13">13) Construcción</option>
                                                    <option value="14">14) Consultoría</option>
                                                    <option value="15">15) Consumo masivo</option>
                                                    <option value="16">16) Correo</option>
                                                    <option value="17">17) Defensa</option>
                                                    <option value="18">18) Diseño</option>
                                                    <option value="19">19) Editorial</option>
                                                    <option value="20">20) Educación</option>
                                                    <option value="21">21) Energía</option>
                                                    <option value="22">22) Entretenimiento</option>
                                                    <option value="23">23) Farmacéutica</option>
                                                    <option value="24">24) Ferroviaria</option>
                                                    <option value="25">25) Financiera</option>
                                                    <option value="26">Forestal</option>
                                                    <option value="27">Ganadería</option>
                                                    <option value="28">Gastronomía</option>
                                                    <option value="29">Gobierno</option>
                                                    <option value="30">Higiene y Perfumería</option>
                                                    <option value="32">Holding</option>
                                                    <option value="33">Hotelería</option>
                                                    <option value="34">Imprenta</option>
                                                    <option value="35">Información e Investigación</option>
                                                    <option value="36">Informática / Tecnología</option>
                                                    <option value="37">Inmobiliaria</option>
                                                    <option value="38">Internet</option>
                                                    <option value="39">Jurídica</option>
                                                    <option value="40">Laboratorio</option>
                                                    <option value="41">Manufactura</option>
                                                    <option value="42">Medios</option>
                                                    <option value="43">Minería / Petróleo / Gas</option>
                                                    <option value="44">ONGs</option>
                                                    <option value="45">Otra</option>
                                                    <option value="46">Papelera</option>
                                                    <option value="47">Pesca</option>
                                                    <option value="48">Petroquímica</option>
                                                    <option value="49">Plásticos</option>
                                                    <option value="50">Publicidad / Marketing / RRPP</option>
                                                    <option value="51">Química</option>
                                                    <option value="52">Retail</option>
                                                    <option value="53">Salud</option>
                                                    <option value="54">Seguros</option>
                                                    <option value="55">Servicios</option>
                                                    <option value="56">Siderurgia</option>
                                                    <option value="57">Supermercado / Hipermercado</option>
                                                    <option value="58">Tabacalera</option>
                                                    <option value="59">Telecomunicaciones</option>
                                                    <option value="60">Textil</option>
                                                    <option value="61">Transportadora</option>
                                                    <option value="62">Transporte</option>
                                                    <option value="63">Turismo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Sueldo Mínimo (Soles)</span>
                                            <div class="pf-field">
                                                <input type="number"  value="{{$candidato->salary}}" name="salary" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Años de Experience : {{ $candidato->years_experience }} </span>
                                            <div class="pf-field">
                                                <select data-placeholder="Años de experiencia" class="chosen" name="years_experience">
                                                    <option value="1">1) Solo 1 Año</option>
                                                    <option value="3">2) De 2 a 3 Años</option>
                                                    <option value="5">3) De 4 a 5 Años</option>
                                                    <option value="7">4) De 6 a 7 Años</option>
                                                    <option value="9">5) De 8 a 9 Años</option>
                                                    <option value="13">6) De 10 a 13 Años</option>
                                                    <option value="20">7) De 14 a 20 Años</option>
                                                    <option value="21">8) Soy un Sensei</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Nacimiento : {{ $candidato->birthdate }}</span>
                                            <div class="pf-field">
                                                <input type="date" name="birthdate" id="birthdate" value="{{$candidato->birthdate}}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <span class="pf-title">Precio x hora Min (Soles)</span>
                                            <div class="pf-field">
                                                <input type="number" value="{{$candidato->price_hour_min}}" name="price_hour_min" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <span class="pf-title">Precio x hora (Soles)</span>
                                            <div class="pf-field">
                                                <input type="number" value="{{$candidato->price_hour}}" name="price_hour" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Lengua Extranjera : {{$candidato->language}}</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Seleccione Idioma" class="chosen" id="languaue" name="language">
                                                    <option value="0">_Seleccionar</option>
                                                    <option value="ingles">1) Inglés</option>
                                                    <option value="portuges">2) Portugés</option>
                                                    <option value="frances">3) Francés</option>
                                                    <option value="portugues|frances">4) Portugés - Francés</option>
                                                    <option value="ingles|frances">5) Inglés - Francés</option>
                                                    <option value="ingles|portugues">6) Inglés - Portugés</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Nivel de Comunicación</span>
                                            <div class="pf-field">
                                                <div class="pf-field">
                                                    <select data-placeholder="Please Select Specialism" class="chosen" id="level_language" name="level_language">
                                                        <option value="0">_Seleccionar</option>
                                                        <option value="basico">Básico</option>
                                                        <option value="intermedio">Intermedio</option>
                                                        <option value="avanzado">Avanzado</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class="col-lg-12">--}}
{{--                                            <span class="pf-title">Conocimientos Resaltantes</span>--}}
{{--                                            <div class="pf-field no-margin">--}}
{{--                                                <ul class="tags">--}}
{{--                                                    <li class="addedTag">Photoshop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Photoshop"></li>--}}
{{--                                                    <li class="addedTag">Digital & Creative<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Digital"></li>--}}
{{--                                                    <li class="addedTag">Agency<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Agency"></li>--}}
{{--                                                    <li class="tagAdd taglist">--}}
{{--                                                        <input type="text" id="search-field">--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="col-lg-12">
                                            <span class="pf-title">Descripción Profesional: Proyectos, Logros, etc.</span>
                                            <div class="pf-field">
                                                <textarea id="objective" name="objective"> {{ $candidato->objective }} </textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit">Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="contact-edit">
                                <h3>Contacto Personal</h3>
                                <form method="POST" action="{{ route('actualizar_perfil_contacto') }}" >
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <span class="pf-title">Número Celular</span>
                                            <div class="pf-field">
                                                <input type="text" placeholder="" name="telephone" value=" {{ $candidato->telephone }} " />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <span class="pf-title">Genero : {{ $candidato->sexo }}</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Please Select Specialism" class="chosen" name="sexo">
                                                    <option value="0">_SELECCIONAR</option>
                                                    <option value="masculino">Masculino</option>
                                                    <option value="femenino">Femenino</option>
                                                    <option value="otro">Otro</option>
                                                </select>
                                            </div>
                                        </div>
{{--                                        <div class="col-lg-4">--}}
{{--                                            <span class="pf-title">Estado Civil</span>--}}
{{--                                            <div class="pf-field">--}}
{{--                                                <select data-placeholder="Please Select Specialism" class="chosen" name="civil">--}}
{{--                                                    <option value="0">_SELECCIONAR</option>--}}
{{--                                                    <option value="soltero">Solter@</option>--}}
{{--                                                    <option value="casado">Casad@</option>--}}
{{--                                                    <option value="otro">Otro</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-4">--}}
{{--                                            <span class="pf-title">Nacionalidad de  País</span>--}}
{{--                                            <div class="pf-field">--}}
{{--                                                <select data-placeholder="Please Select Specialism" class="chosen">--}}
{{--                                                    <option>Web Development</option>--}}
{{--                                                    <option>Web Designing</option>--}}
{{--                                                    <option>Art & Culture</option>--}}
{{--                                                    <option>Reading & Writing</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="col-lg-4">
                                            <span class="pf-title">Departamento Actual : {{ $candidato->region }}</span>
                                            <div class="pf-field">
                                                <select id="departamentos" name="code_depa" data-placeholder="Please Select Specialism" class="chosen">
                                                    <option value="0">_SELECCIONAR</option>
                                                    <option value="010000">Amazonas</option>
                                                    <option value="020000">Ancash</option>
                                                    <option value="030000">Apurimac</option>
                                                    <option value="040000">Arequipa</option>
                                                    <option value="050000">Ayacucho</option>
                                                    <option value="060000">Cajamarca</option>
                                                    <option value="070000">Cuzco</option>
                                                    <option value="080000">Gobierno Regional del Callao</option>
                                                    <option value="090000">Huancavelica</option>
                                                    <option value="100000">Huánuco</option>
                                                    <option value="110000">Ica</option>
                                                    <option value="120000">Junin</option>
                                                    <option value="130000">La Libertad</option>
                                                    <option value="140000">Lambayeque</option>
                                                    <option value="150000">Lima</option>
                                                    <option value="160000">Loreto</option>
                                                    <option value="170000">Madre de Dios</option>
                                                    <option value="180000">Moquegua</option>
                                                    <option value="190000">Pasco</option>
                                                    <option value="200000">Piura</option>
                                                    <option value="210000">Puno</option>
                                                    <option value="220000">San Martín</option>
                                                    <option value="230000">Tacna</option>
                                                    <option value="240000">Tumbes</option>
                                                    <option value="250000">Ucayali</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <span class="pf-title">Distrito Actual : {{ $candidato->district }}</span>
                                            <div class="pf-field">
                                                <input type="text" id="distritos" list="json-datalist" placeholder="_Escribir" name="code_districts" value="{{ $candidato->district }}"  >
                                                <datalist id="json-datalist" ></datalist>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <span class="pf-title">Cargo o título breve del currículum</span>
                                            <div class="pf-field">
                                                <input type="text" placeholder="Cargo o título breve del currículum" name="title" value=" {{ $candidato->title }} " />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit">Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('java')

    <script type='text/javascript'>

        $(document).ready(function(){

            $("#x1").click(function () {
                alert($("#distritos").val());
            });

            // Department Change
            $("#departamentos").change(function(){

                // Department id
                var idDepartmento = $(this).val();
                $("#json-datalist").empty();

                // AJAX request
                $.ajax({
                    url: 'getDistritos/'+idDepartmento,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        var len = 0;
                        if(response['data'] != null){
                            len = response['data'].length;
                            console.log(len);
                            $("#json-datalist").empty();
                        }

                        if(len > 0){
                            // Read data and create <option >
                            for(var i=0; i<len; i++){

                                var id = response['data'][i].id;
                                var name = response['data'][i].name;
                                var option = "<option value='"+name+"'>";
                                //var option = "<option  value='"+id+"'>"+name+"</option>";

                                $("#json-datalist").append(option);

                            }
                        }

                    }
                });
            });

        });

    </script>

@endpush