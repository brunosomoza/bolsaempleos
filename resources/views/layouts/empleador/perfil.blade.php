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
                                        <a href="employer_profile.html#" title=""><i class="la la-file-text"></i>Company Profile</a>
                                        <ul>
                                            <ol><a href="employer_profile.html#" title="">My Profile</a></ol>
                                            <ol><a href="employer_profile.html#" title="">Social Network</a></ol>
                                            <ol><a href="employer_profile.html#" title="">Contact Information</a></ol>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_profile.html#" title=""><i class="la la-briefcase"></i>Manage Jobs</a>
                                        <ul>
                                            <li><a href="employer_profile.html#" title="">My Profile</a></li>
                                            <li><a href="employer_profile.html#" title="">Social Network</a></li>
                                            <li><a href="employer_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_profile.html#" title=""><i class="la la-money"></i>Transactions</a>
                                        <ul>
                                            <li><a href="employer_profile.html#" title="">My Profile</a></li>
                                            <li><a href="employer_profile.html#" title="">Social Network</a></li>
                                            <li><a href="employer_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_profile.html#" title=""><i class="la la-paper-plane"></i>Resumes</a>
                                        <ul>
                                            <li><a href="employer_profile.html#" title="">My Profile</a></li>
                                            <li><a href="employer_profile.html#" title="">Social Network</a></li>
                                            <li><a href="employer_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_profile.html#" title=""><i class="la la-user"></i>Packages</a>
                                        <ul>
                                            <li><a href="employer_profile.html#" title="">My Profile</a></li>
                                            <li><a href="employer_profile.html#" title="">Social Network</a></li>
                                            <li><a href="employer_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_profile.html#" title=""><i class="la la-file-text"></i>Post a New Job</a>
                                        <ul>
                                            <li><a href="employer_profile.html#" title="">My Profile</a></li>
                                            <li><a href="employer_profile.html#" title="">Social Network</a></li>
                                            <li><a href="employer_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_profile.html#" title=""><i class="la la-flash"></i>Job Alerts</a>
                                        <ul>
                                            <li><a href="employer_profile.html#" title="">My Profile</a></li>
                                            <li><a href="employer_profile.html#" title="">Social Network</a></li>
                                            <li><a href="employer_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="inner-child">
                                        <a href="employer_profile.html#" title=""><i class="la la-lock"></i>Change Password</a>
                                        <ul>
                                            <li><a href="employer_profile.html#" title="">My Profile</a></li>
                                            <li><a href="employer_profile.html#" title="">Social Network</a></li>
                                            <li><a href="employer_profile.html#" title="">Contact Information</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="employer_profile.html#" title=""><i class="la la-unlink"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="profile-title" id="mp">
                                <h3>Completa los datos por favor...</h3>
                                <div class="upload-img-bar">
                                    <span><img src="images/resource/up1.jpg" alt="" /><i>x</i></span>
                                    <div class="upload-info">
                                        <a href="employer_profile.html#" title="">Browse</a>
                                        <span>Max file size is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg & .png</span>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-form-edit">
                                <form method="POST" action="{{ route('actualizar_perfil_empresa') }}" >
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <span class="pf-title">Razón Social</span>
                                            <div class="pf-field">
                                                <input id="namesocial" name="namesocial" type="text" placeholder="Emresa S.A.C" value=" {{ $empresa->namesocial }} " />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <span class="pf-title">RUC # 20 ó 10 </span>
                                            <div class="pf-field">
                                                <input id="ruc" name="ruc" type="numer" placeholder="10111214" value=" {{ $empresa->ruc }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <span class="pf-title">Teléfonos</span>
                                            <div class="pf-field">
                                                <input id="telephone" name="telephone" type="text" placeholder="979-429-321" value=" {{ $empresa->telephone }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Dirección ú Oficina</span>
                                            <div class="pf-field">
                                                <input id="address" name="address" type="text" placeholder="Av. Juan Arona 123, San Isidro, Lima"  value=" {{ $empresa->address }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Sector Empresarial : {{ $empresa->industry_id }} </span>
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
                                            <span class="pf-title">Unicación Departamento :  </span>
                                            <div class="pf-field">
                                                <select id="sel_depart" name="sel_depart" data-placeholder="Please Select Specialism" class="chosen">
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
                                        <div class="col-lg-6">
                                            <span class="pf-title">Distritos : {{ $empresa->code_districts }} </span>
                                            <div class="pf-field">
                                                <input type="text" id="distritos" list="json-datalist" placeholder="_Escribir" name="code_districts"  >
                                                <datalist id="json-datalist" ></datalist>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Description</span>
                                            <div class="pf-field">
                                                <textarea id="description" name="description" placeholder="Una breve descripción historia de las actividades de la empresa">
                                                    {{ $empresa->description }}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit">Actualizar información </button>
                                            <input type="button" name="x1" id="x1">
                                        </div>
                                    </div>
                                    {{ csrf_field() }}

                                </form>
                            </div>
                            <div class="contact-edit" id="ci">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <hr>
@endsection



@push('java')

    <script type='text/javascript'>

        $(document).ready(function(){

            $("#x1").click(function () {
               alert($("#distritos").val());
            });



            // Department Change
            $("#sel_depart").change(function(){

                // Department id
                var id = $(this).val();
                $("#json-datalist").empty();
                // Empty the dropdown
                $("#sel_emp").find("option").not(":first").remove();

                // AJAX request
                $.ajax({
                    url: 'getEmployees/'+id,
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