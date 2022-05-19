<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="opacity: 0.5;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

    <!--========= AJAX load overlay =========== -->
    <div style="width: 100%; height:100%; background-color: white; position: fixed; top:0; left:0; z-index: 1000; opacity:0.3; display: none;" id="DivOverlay">
    </div>
    <!-----===================================----->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <?php include('../layout/topbar.php') ?>
        <?php include('../layout/sidebar.php') ?>
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper"><!-- =======================  This page styles =================== ---->
<link href="../assets/plugins/wizard/steps.css" rel="stylesheet">
<link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
      rel="stylesheet">
<!-- =======================  This page styles =================== ---->


<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Create New Staff Account</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Staff</a></li>
                <li class="breadcrumb-item active">create</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p>Enter Details of the staff you want to create an account for</p>
                    <hr>
                    <form action="https://krystalng.com/fggconitsha/staff/create-process" id="create-staff" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <section>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="title">Title :</label>
                                    <input type="text" name="staff[title]" class="form-control" id="title" minlength="2"
                                           required>
                                    <small class="form-control-feedback"></small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="surname">Last Name :</label>
                                    <input type="text" name="staff[surname]" class="form-control" id="surname" minlength="3" required>
                                    <small class="form-control-feedback"></small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="first_name">First Name :</label>
                                    <input type="text" name="staff[first_name]" class="form-control" id="first_name" required>
                                    <small class="form-control-feedback"></small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="sec_name">Other Name :</label>
                                    <input type="text" name="staff[sec_name]" class="form-control" id="sec_name" minlength="3">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label">Gender :</label>
                                    <div class="col-md-12" style="padding-left: 0">
                                        <input name="staff[gender]" type="radio" id="radio_1" class="with-gap radio-col-deep-purple" value="M" checked/>
                                        <label class="form-control-label" for="radio_1">Male</label>

                                        <input name="staff[gender]" type="radio" id="radio_2"
                                               class="with-gap radio-col-deep-purple" value="F"/>
                                        <label class="form-control-label" for="radio_2">Female</label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="dob">Date of Birth</label>
                                    <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="staff[dob]" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="email">Email Address :</label>
                                    <input type="email" name="staff[email]" class="form-control to-validate" id="email" minlength="6" required>
                                    <small class="form-control-feedback"></small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="phone">Phone number :</label>
                                    <input type="text" name="staff[phone]" class="form-control to-validate" id="phone" minlength="10" required>
                                    <small class="form-control-feedback"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="state" class="form-control-label col-form-label">State of Origin</label>
                                <select class="custom-select form-control select2" id="state" name="staff[state_id]" style="width: 100%">
                                    <option value=""></option>
                                                                            <option value="1">ABIA</option>
                                                                            <option value="2">ADAMAWA</option>
                                                                            <option value="3">AKWA IBOM</option>
                                                                            <option value="4">ANAMBRA</option>
                                                                            <option value="5">BAUCHI</option>
                                                                            <option value="6">BAYELSA</option>
                                                                            <option value="7">BENUE </option>
                                                                            <option value="8">BORNO</option>
                                                                            <option value="9">CROSS RIVER</option>
                                                                            <option value="10">DELTA</option>
                                                                            <option value="11">EBONYI</option>
                                                                            <option value="12">EDO</option>
                                                                            <option value="13">EKITI</option>
                                                                            <option value="14">ENUGU</option>
                                                                            <option value="15">FCT</option>
                                                                            <option value="16">GOMBE </option>
                                                                            <option value="17">IMO</option>
                                                                            <option value="18">JIGAWA</option>
                                                                            <option value="19">KADUNA</option>
                                                                            <option value="20">KANO</option>
                                                                            <option value="21">KATSINA</option>
                                                                            <option value="22">KEBBI </option>
                                                                            <option value="23">KOGI</option>
                                                                            <option value="24">KWARA</option>
                                                                            <option value="25">LAGOS</option>
                                                                            <option value="26">NASSARAWA</option>
                                                                            <option value="27">NIGER</option>
                                                                            <option value="28">OGUN</option>
                                                                            <option value="29">ONDO</option>
                                                                            <option value="30">OSUN</option>
                                                                            <option value="31">OYO</option>
                                                                            <option value="32">PLATEAU</option>
                                                                            <option value="33">RIVERS</option>
                                                                            <option value="34">SOKOTO</option>
                                                                            <option value="35">TARABA</option>
                                                                            <option value="36">YOBE</option>
                                                                            <option value="37">ZAMFARA</option>
                                                                    </select>
                            </div>
                            
                            <div class="form-group col-md-3">
                                <label for="lga" class="form-control-label col-form-label">LGA of Origin</label>
                                <select class="custom-select form-control" id="lga" name="staff[lga_id]" style="width: 100%">
                                    <option value="0"></option>
                                                                                                                        <option value="2" data-state-id="1" class="lga">
                                                Aba North                                            </option>
                                                                                    <option value="3" data-state-id="1" class="lga">
                                                Aba South                                            </option>
                                                                                    <option value="4" data-state-id="1" class="lga">
                                                Arochukwu                                            </option>
                                                                                    <option value="5" data-state-id="1" class="lga">
                                                Bende                                            </option>
                                                                                    <option value="6" data-state-id="1" class="lga">
                                                Ikwuano                                            </option>
                                                                                    <option value="7" data-state-id="1" class="lga">
                                                Isiala-Ngwa North                                            </option>
                                                                                    <option value="8" data-state-id="1" class="lga">
                                                Isiala-Ngwa South                                            </option>
                                                                                    <option value="9" data-state-id="1" class="lga">
                                                Isuikwato                                            </option>
                                                                                    <option value="10" data-state-id="1" class="lga">
                                                Ngwa                                            </option>
                                                                                    <option value="11" data-state-id="1" class="lga">
                                                Obi Nwa                                            </option>
                                                                                    <option value="12" data-state-id="1" class="lga">
                                                Ohafia                                            </option>
                                                                                    <option value="13" data-state-id="1" class="lga">
                                                Osisioma                                            </option>
                                                                                    <option value="14" data-state-id="1" class="lga">
                                                Ugwunagbo                                            </option>
                                                                                    <option value="15" data-state-id="1" class="lga">
                                                Ukwa East                                            </option>
                                                                                    <option value="16" data-state-id="1" class="lga">
                                                Ukwa West                                             </option>
                                                                                    <option value="17" data-state-id="1" class="lga">
                                                Umu-Neochi                                            </option>
                                                                                    <option value="18" data-state-id="1" class="lga">
                                                Umuahia North                                            </option>
                                                                                    <option value="19" data-state-id="1" class="lga">
                                                Umuahia South                                            </option>
                                                                                                                                                                <option value="20" data-state-id="10" class="lga">
                                                Aniocha                                            </option>
                                                                                    <option value="21" data-state-id="10" class="lga">
                                                Aniocha South                                            </option>
                                                                                    <option value="22" data-state-id="10" class="lga">
                                                Bomadi                                            </option>
                                                                                    <option value="23" data-state-id="10" class="lga">
                                                Burutu                                            </option>
                                                                                    <option value="24" data-state-id="10" class="lga">
                                                Ethiope East                                            </option>
                                                                                    <option value="25" data-state-id="10" class="lga">
                                                Ethiope West                                            </option>
                                                                                    <option value="26" data-state-id="10" class="lga">
                                                Ika North-East                                            </option>
                                                                                    <option value="27" data-state-id="10" class="lga">
                                                Ika South                                            </option>
                                                                                    <option value="28" data-state-id="10" class="lga">
                                                Isoko North                                            </option>
                                                                                    <option value="29" data-state-id="10" class="lga">
                                                Isoko south                                            </option>
                                                                                    <option value="30" data-state-id="10" class="lga">
                                                Ndokwa East                                            </option>
                                                                                    <option value="31" data-state-id="10" class="lga">
                                                Ndokwa West                                            </option>
                                                                                    <option value="32" data-state-id="10" class="lga">
                                                Okpe                                            </option>
                                                                                    <option value="33" data-state-id="10" class="lga">
                                                Oshimili                                            </option>
                                                                                    <option value="34" data-state-id="10" class="lga">
                                                Oshimili North                                            </option>
                                                                                    <option value="35" data-state-id="10" class="lga">
                                                Patani                                            </option>
                                                                                    <option value="36" data-state-id="10" class="lga">
                                                Sapele                                            </option>
                                                                                    <option value="37" data-state-id="10" class="lga">
                                                Udu                                            </option>
                                                                                    <option value="38" data-state-id="10" class="lga">
                                                Ughelli North                                            </option>
                                                                                    <option value="39" data-state-id="10" class="lga">
                                                Ughelli South                                            </option>
                                                                                    <option value="40" data-state-id="10" class="lga">
                                                Ukwani                                             </option>
                                                                                    <option value="41" data-state-id="10" class="lga">
                                                Uvwie                                            </option>
                                                                                    <option value="42" data-state-id="10" class="lga">
                                                Warri Central                                             </option>
                                                                                    <option value="43" data-state-id="10" class="lga">
                                                Warri North                                            </option>
                                                                                    <option value="44" data-state-id="10" class="lga">
                                                Warri South                                            </option>
                                                                                                                                                                <option value="45" data-state-id="11" class="lga">
                                                Abakaliki                                            </option>
                                                                                    <option value="46" data-state-id="11" class="lga">
                                                Afikpo North                                            </option>
                                                                                    <option value="47" data-state-id="11" class="lga">
                                                Afikpo South                                            </option>
                                                                                    <option value="48" data-state-id="11" class="lga">
                                                Ebonyi                                            </option>
                                                                                    <option value="49" data-state-id="11" class="lga">
                                                Ezza                                            </option>
                                                                                    <option value="50" data-state-id="11" class="lga">
                                                Ezza South                                            </option>
                                                                                    <option value="51" data-state-id="11" class="lga">
                                                Ishielu                                            </option>
                                                                                    <option value="52" data-state-id="11" class="lga">
                                                Ivo                                            </option>
                                                                                    <option value="53" data-state-id="11" class="lga">
                                                lkwo                                            </option>
                                                                                    <option value="54" data-state-id="11" class="lga">
                                                Ohaozara                                            </option>
                                                                                    <option value="55" data-state-id="11" class="lga">
                                                Ohaukwu                                            </option>
                                                                                    <option value="56" data-state-id="11" class="lga">
                                                Onicha                                            </option>
                                                                                                                                                                <option value="57" data-state-id="12" class="lga">
                                                Akoko Edo                                            </option>
                                                                                    <option value="58" data-state-id="12" class="lga">
                                                Egor                                            </option>
                                                                                    <option value="59" data-state-id="12" class="lga">
                                                Esan Central                                            </option>
                                                                                    <option value="60" data-state-id="12" class="lga">
                                                Esan North-East                                            </option>
                                                                                    <option value="61" data-state-id="12" class="lga">
                                                Esan South-East                                            </option>
                                                                                    <option value="62" data-state-id="12" class="lga">
                                                Esan West                                            </option>
                                                                                    <option value="63" data-state-id="12" class="lga">
                                                Etsako Central                                            </option>
                                                                                    <option value="64" data-state-id="12" class="lga">
                                                Etsako East                                            </option>
                                                                                    <option value="65" data-state-id="12" class="lga">
                                                Etsako West                                            </option>
                                                                                    <option value="66" data-state-id="12" class="lga">
                                                Igueben                                            </option>
                                                                                    <option value="67" data-state-id="12" class="lga">
                                                Ikpoba Okha                                            </option>
                                                                                    <option value="68" data-state-id="12" class="lga">
                                                Oredo                                            </option>
                                                                                    <option value="69" data-state-id="12" class="lga">
                                                Orhiomwon                                            </option>
                                                                                    <option value="70" data-state-id="12" class="lga">
                                                Ovia North East                                            </option>
                                                                                    <option value="71" data-state-id="12" class="lga">
                                                Ovia SouthWest                                            </option>
                                                                                    <option value="72" data-state-id="12" class="lga">
                                                Owan East                                            </option>
                                                                                    <option value="73" data-state-id="12" class="lga">
                                                Owan West                                            </option>
                                                                                    <option value="74" data-state-id="12" class="lga">
                                                Uhunmwonde                                            </option>
                                                                                    <option value="75" data-state-id="12" class="lga">
                                                Ukpoba                                            </option>
                                                                                                                                                                <option value="76" data-state-id="13" class="lga">
                                                 Ilejemeje                                            </option>
                                                                                    <option value="77" data-state-id="13" class="lga">
                                                Ado                                            </option>
                                                                                    <option value="78" data-state-id="13" class="lga">
                                                Efon                                            </option>
                                                                                    <option value="79" data-state-id="13" class="lga">
                                                Ekiti South-West                                            </option>
                                                                                    <option value="80" data-state-id="13" class="lga">
                                                Ekiti-East                                            </option>
                                                                                    <option value="81" data-state-id="13" class="lga">
                                                Ekiti-West                                            </option>
                                                                                    <option value="82" data-state-id="13" class="lga">
                                                Emure/Ise/Orun                                            </option>
                                                                                    <option value="83" data-state-id="13" class="lga">
                                                Gbonyin                                            </option>
                                                                                    <option value="84" data-state-id="13" class="lga">
                                                Ido/Osi                                            </option>
                                                                                    <option value="85" data-state-id="13" class="lga">
                                                Ijero                                            </option>
                                                                                    <option value="86" data-state-id="13" class="lga">
                                                Ikare                                            </option>
                                                                                    <option value="87" data-state-id="13" class="lga">
                                                Ikole                                            </option>
                                                                                    <option value="88" data-state-id="13" class="lga">
                                                Irepodun                                            </option>
                                                                                    <option value="89" data-state-id="13" class="lga">
                                                Ise/Orun                                            </option>
                                                                                    <option value="90" data-state-id="13" class="lga">
                                                Moba                                            </option>
                                                                                    <option value="91" data-state-id="13" class="lga">
                                                Oye                                            </option>
                                                                                                                                                                <option value="92" data-state-id="14" class="lga">
                                                Agwu                                            </option>
                                                                                    <option value="93" data-state-id="14" class="lga">
                                                Aninri                                            </option>
                                                                                    <option value="94" data-state-id="14" class="lga">
                                                Enugu Eas                                            </option>
                                                                                    <option value="95" data-state-id="14" class="lga">
                                                Enugu North                                            </option>
                                                                                    <option value="96" data-state-id="14" class="lga">
                                                Enugu South                                            </option>
                                                                                    <option value="97" data-state-id="14" class="lga">
                                                Ezeagu                                            </option>
                                                                                    <option value="98" data-state-id="14" class="lga">
                                                Igbo-Ekiti                                            </option>
                                                                                    <option value="99" data-state-id="14" class="lga">
                                                Igbo-Eze South                                            </option>
                                                                                    <option value="100" data-state-id="14" class="lga">
                                                IgboEze North                                            </option>
                                                                                    <option value="101" data-state-id="14" class="lga">
                                                Isi-Uzo                                            </option>
                                                                                    <option value="102" data-state-id="14" class="lga">
                                                Nkanu                                            </option>
                                                                                    <option value="103" data-state-id="14" class="lga">
                                                Nkanu East                                            </option>
                                                                                    <option value="104" data-state-id="14" class="lga">
                                                Nsukka                                            </option>
                                                                                    <option value="105" data-state-id="14" class="lga">
                                                Oji-River                                            </option>
                                                                                    <option value="106" data-state-id="14" class="lga">
                                                Udenu                                            </option>
                                                                                    <option value="107" data-state-id="14" class="lga">
                                                Udi                                            </option>
                                                                                    <option value="108" data-state-id="14" class="lga">
                                                Uzo-Uwani                                            </option>
                                                                                                                                                                <option value="109" data-state-id="16" class="lga">
                                                Akko                                            </option>
                                                                                    <option value="110" data-state-id="16" class="lga">
                                                Balanga                                            </option>
                                                                                    <option value="111" data-state-id="16" class="lga">
                                                Billiri                                            </option>
                                                                                    <option value="112" data-state-id="16" class="lga">
                                                Dukku                                            </option>
                                                                                    <option value="113" data-state-id="16" class="lga">
                                                Funakaye                                            </option>
                                                                                    <option value="114" data-state-id="16" class="lga">
                                                Gombe                                            </option>
                                                                                    <option value="115" data-state-id="16" class="lga">
                                                Kaltungo                                            </option>
                                                                                    <option value="116" data-state-id="16" class="lga">
                                                Kwami                                            </option>
                                                                                    <option value="117" data-state-id="16" class="lga">
                                                Nafada/Bajoga                                            </option>
                                                                                    <option value="118" data-state-id="16" class="lga">
                                                Shomgom                                            </option>
                                                                                    <option value="119" data-state-id="16" class="lga">
                                                Yamaltu/Delta                                            </option>
                                                                                                                                                                <option value="120" data-state-id="17" class="lga">
                                                Aboh-Mbaise                                            </option>
                                                                                    <option value="121" data-state-id="17" class="lga">
                                                Ahiazu-Mbaise                                            </option>
                                                                                    <option value="122" data-state-id="17" class="lga">
                                                Ehime-Mbano                                            </option>
                                                                                    <option value="123" data-state-id="17" class="lga">
                                                Ezinihitte                                            </option>
                                                                                    <option value="124" data-state-id="17" class="lga">
                                                Ideato North                                            </option>
                                                                                    <option value="125" data-state-id="17" class="lga">
                                                Ideato South                                            </option>
                                                                                    <option value="126" data-state-id="17" class="lga">
                                                Ihitte/Uboma                                            </option>
                                                                                    <option value="127" data-state-id="17" class="lga">
                                                Ikeduru                                            </option>
                                                                                    <option value="128" data-state-id="17" class="lga">
                                                Isiala Mbano                                            </option>
                                                                                    <option value="129" data-state-id="17" class="lga">
                                                Isu                                            </option>
                                                                                    <option value="130" data-state-id="17" class="lga">
                                                Mbaitoli                                            </option>
                                                                                    <option value="131" data-state-id="17" class="lga">
                                                Ngor-Okpala                                            </option>
                                                                                    <option value="132" data-state-id="17" class="lga">
                                                Njaba                                            </option>
                                                                                    <option value="133" data-state-id="17" class="lga">
                                                Nkwerre                                            </option>
                                                                                    <option value="134" data-state-id="17" class="lga">
                                                Nwangele                                            </option>
                                                                                    <option value="135" data-state-id="17" class="lga">
                                                Obowo                                            </option>
                                                                                    <option value="136" data-state-id="17" class="lga">
                                                Oguta                                            </option>
                                                                                    <option value="137" data-state-id="17" class="lga">
                                                Ohaji/Egbema                                            </option>
                                                                                    <option value="138" data-state-id="17" class="lga">
                                                Okigwe                                            </option>
                                                                                    <option value="139" data-state-id="17" class="lga">
                                                Orlu                                            </option>
                                                                                    <option value="140" data-state-id="17" class="lga">
                                                Orsu                                            </option>
                                                                                    <option value="141" data-state-id="17" class="lga">
                                                Oru East                                            </option>
                                                                                    <option value="142" data-state-id="17" class="lga">
                                                Oru West                                            </option>
                                                                                    <option value="143" data-state-id="17" class="lga">
                                                Owerri North                                            </option>
                                                                                    <option value="144" data-state-id="17" class="lga">
                                                Owerri West                                            </option>
                                                                                    <option value="145" data-state-id="17" class="lga">
                                                Owerri-Municipal                                            </option>
                                                                                                                                                                <option value="146" data-state-id="18" class="lga">
                                                Auyo                                            </option>
                                                                                    <option value="147" data-state-id="18" class="lga">
                                                Babura                                            </option>
                                                                                    <option value="148" data-state-id="18" class="lga">
                                                Biriniwa                                            </option>
                                                                                    <option value="149" data-state-id="18" class="lga">
                                                Birni Kudu                                            </option>
                                                                                    <option value="150" data-state-id="18" class="lga">
                                                Buji                                            </option>
                                                                                    <option value="151" data-state-id="18" class="lga">
                                                Dutse                                            </option>
                                                                                    <option value="152" data-state-id="18" class="lga">
                                                Gagarawa                                            </option>
                                                                                    <option value="153" data-state-id="18" class="lga">
                                                Garki                                            </option>
                                                                                    <option value="154" data-state-id="18" class="lga">
                                                Gumel                                            </option>
                                                                                    <option value="155" data-state-id="18" class="lga">
                                                Guri                                            </option>
                                                                                    <option value="156" data-state-id="18" class="lga">
                                                Gwaram                                            </option>
                                                                                    <option value="157" data-state-id="18" class="lga">
                                                Gwiwa                                            </option>
                                                                                    <option value="158" data-state-id="18" class="lga">
                                                Hadejia                                            </option>
                                                                                    <option value="159" data-state-id="18" class="lga">
                                                Jahun                                            </option>
                                                                                    <option value="160" data-state-id="18" class="lga">
                                                Kafin Hausa                                            </option>
                                                                                    <option value="161" data-state-id="18" class="lga">
                                                Kaugama Kazaure                                            </option>
                                                                                    <option value="162" data-state-id="18" class="lga">
                                                Kiri Kasamma                                            </option>
                                                                                    <option value="163" data-state-id="18" class="lga">
                                                Kiyawa                                            </option>
                                                                                    <option value="164" data-state-id="18" class="lga">
                                                Maigatari                                            </option>
                                                                                    <option value="165" data-state-id="18" class="lga">
                                                Malam Madori                                            </option>
                                                                                    <option value="166" data-state-id="18" class="lga">
                                                Miga                                            </option>
                                                                                    <option value="167" data-state-id="18" class="lga">
                                                Ringim                                            </option>
                                                                                    <option value="168" data-state-id="18" class="lga">
                                                Roni                                            </option>
                                                                                    <option value="169" data-state-id="18" class="lga">
                                                Sule-Tankarkar                                            </option>
                                                                                    <option value="170" data-state-id="18" class="lga">
                                                Taura                                            </option>
                                                                                    <option value="171" data-state-id="18" class="lga">
                                                Yankwashi                                            </option>
                                                                                                                                                                <option value="172" data-state-id="19" class="lga">
                                                Birni-Gwari                                            </option>
                                                                                    <option value="173" data-state-id="19" class="lga">
                                                Chikun                                            </option>
                                                                                    <option value="174" data-state-id="19" class="lga">
                                                Giwa                                            </option>
                                                                                    <option value="175" data-state-id="19" class="lga">
                                                Igabi                                            </option>
                                                                                    <option value="176" data-state-id="19" class="lga">
                                                Ikara                                            </option>
                                                                                    <option value="177" data-state-id="19" class="lga">
                                                jaba                                            </option>
                                                                                    <option value="178" data-state-id="19" class="lga">
                                                Jemaa                                            </option>
                                                                                    <option value="179" data-state-id="19" class="lga">
                                                Kachia                                            </option>
                                                                                    <option value="180" data-state-id="19" class="lga">
                                                Kaduna North                                            </option>
                                                                                    <option value="181" data-state-id="19" class="lga">
                                                Kaduna South                                            </option>
                                                                                    <option value="182" data-state-id="19" class="lga">
                                                Kagarko                                            </option>
                                                                                    <option value="183" data-state-id="19" class="lga">
                                                Kajuru                                            </option>
                                                                                    <option value="184" data-state-id="19" class="lga">
                                                Kaura                                            </option>
                                                                                    <option value="185" data-state-id="19" class="lga">
                                                Kauru                                            </option>
                                                                                    <option value="186" data-state-id="19" class="lga">
                                                Kubau                                            </option>
                                                                                    <option value="187" data-state-id="19" class="lga">
                                                Kudan                                            </option>
                                                                                    <option value="188" data-state-id="19" class="lga">
                                                Lere                                            </option>
                                                                                    <option value="189" data-state-id="19" class="lga">
                                                Makarfi                                            </option>
                                                                                    <option value="190" data-state-id="19" class="lga">
                                                Sabon-Gari                                            </option>
                                                                                    <option value="191" data-state-id="19" class="lga">
                                                Sanga                                            </option>
                                                                                    <option value="192" data-state-id="19" class="lga">
                                                Soba                                            </option>
                                                                                    <option value="193" data-state-id="19" class="lga">
                                                Zango-Kataf                                             </option>
                                                                                    <option value="194" data-state-id="19" class="lga">
                                                Zaria                                            </option>
                                                                                                                                                                <option value="195" data-state-id="20" class="lga">
                                                Ajingi                                            </option>
                                                                                    <option value="196" data-state-id="20" class="lga">
                                                Albasu                                            </option>
                                                                                    <option value="197" data-state-id="20" class="lga">
                                                Bagwai                                            </option>
                                                                                    <option value="198" data-state-id="20" class="lga">
                                                Bebeji                                            </option>
                                                                                    <option value="199" data-state-id="20" class="lga">
                                                Bichi                                            </option>
                                                                                    <option value="200" data-state-id="20" class="lga">
                                                Bunkure                                            </option>
                                                                                    <option value="201" data-state-id="20" class="lga">
                                                Dala                                            </option>
                                                                                    <option value="202" data-state-id="20" class="lga">
                                                Dambatta                                            </option>
                                                                                    <option value="203" data-state-id="20" class="lga">
                                                Dawakin Kudu                                            </option>
                                                                                    <option value="204" data-state-id="20" class="lga">
                                                Dawakin Tofa                                            </option>
                                                                                    <option value="205" data-state-id="20" class="lga">
                                                Doguwa                                            </option>
                                                                                    <option value="206" data-state-id="20" class="lga">
                                                Fagge                                            </option>
                                                                                    <option value="207" data-state-id="20" class="lga">
                                                Gabasawa                                            </option>
                                                                                    <option value="208" data-state-id="20" class="lga">
                                                Garko                                            </option>
                                                                                    <option value="209" data-state-id="20" class="lga">
                                                Garum                                            </option>
                                                                                    <option value="210" data-state-id="20" class="lga">
                                                Gaya                                            </option>
                                                                                    <option value="211" data-state-id="20" class="lga">
                                                Gezawa                                            </option>
                                                                                    <option value="212" data-state-id="20" class="lga">
                                                Gwale                                            </option>
                                                                                    <option value="213" data-state-id="20" class="lga">
                                                Gwarzo                                            </option>
                                                                                    <option value="214" data-state-id="20" class="lga">
                                                Kabo                                            </option>
                                                                                    <option value="215" data-state-id="20" class="lga">
                                                Kano Municipal                                            </option>
                                                                                    <option value="216" data-state-id="20" class="lga">
                                                Karaye                                            </option>
                                                                                    <option value="217" data-state-id="20" class="lga">
                                                Kibiya                                            </option>
                                                                                    <option value="218" data-state-id="20" class="lga">
                                                Kiru                                            </option>
                                                                                    <option value="219" data-state-id="20" class="lga">
                                                kumbotso                                            </option>
                                                                                    <option value="220" data-state-id="20" class="lga">
                                                Kunchi                                            </option>
                                                                                    <option value="221" data-state-id="20" class="lga">
                                                Kura                                            </option>
                                                                                    <option value="222" data-state-id="20" class="lga">
                                                Madobi                                            </option>
                                                                                    <option value="223" data-state-id="20" class="lga">
                                                Makoda                                            </option>
                                                                                    <option value="224" data-state-id="20" class="lga">
                                                Mallam                                            </option>
                                                                                    <option value="225" data-state-id="20" class="lga">
                                                Minjibir                                            </option>
                                                                                    <option value="226" data-state-id="20" class="lga">
                                                Nasarawa                                            </option>
                                                                                    <option value="227" data-state-id="20" class="lga">
                                                Rano                                            </option>
                                                                                    <option value="228" data-state-id="20" class="lga">
                                                Rimin Gado                                            </option>
                                                                                    <option value="229" data-state-id="20" class="lga">
                                                Rogo                                            </option>
                                                                                    <option value="230" data-state-id="20" class="lga">
                                                Shanono                                            </option>
                                                                                    <option value="231" data-state-id="20" class="lga">
                                                Sumaila                                            </option>
                                                                                    <option value="232" data-state-id="20" class="lga">
                                                Takali                                            </option>
                                                                                    <option value="233" data-state-id="20" class="lga">
                                                Tarauni                                            </option>
                                                                                    <option value="234" data-state-id="20" class="lga">
                                                Tofa                                            </option>
                                                                                    <option value="235" data-state-id="20" class="lga">
                                                Tsanyawa                                            </option>
                                                                                    <option value="236" data-state-id="20" class="lga">
                                                Tudun Wada                                            </option>
                                                                                    <option value="237" data-state-id="20" class="lga">
                                                Ungogo                                            </option>
                                                                                    <option value="238" data-state-id="20" class="lga">
                                                Warawa                                            </option>
                                                                                    <option value="239" data-state-id="20" class="lga">
                                                Wudil                                            </option>
                                                                                                                                                                <option value="240" data-state-id="2" class="lga">
                                                Demsa                                            </option>
                                                                                    <option value="241" data-state-id="2" class="lga">
                                                Fufore                                            </option>
                                                                                    <option value="242" data-state-id="2" class="lga">
                                                Ganaye                                            </option>
                                                                                    <option value="243" data-state-id="2" class="lga">
                                                Gireri                                            </option>
                                                                                    <option value="244" data-state-id="2" class="lga">
                                                Gombi                                            </option>
                                                                                    <option value="245" data-state-id="2" class="lga">
                                                Guyuk                                            </option>
                                                                                    <option value="246" data-state-id="2" class="lga">
                                                Hong                                            </option>
                                                                                    <option value="247" data-state-id="2" class="lga">
                                                Jada                                            </option>
                                                                                    <option value="248" data-state-id="2" class="lga">
                                                Lamurde                                            </option>
                                                                                    <option value="249" data-state-id="2" class="lga">
                                                Madagali                                            </option>
                                                                                    <option value="250" data-state-id="2" class="lga">
                                                Maiha                                            </option>
                                                                                    <option value="251" data-state-id="2" class="lga">
                                                Mayo-Belwa                                            </option>
                                                                                    <option value="252" data-state-id="2" class="lga">
                                                Michika                                            </option>
                                                                                    <option value="253" data-state-id="2" class="lga">
                                                Mubi North                                            </option>
                                                                                    <option value="254" data-state-id="2" class="lga">
                                                Mubi South                                            </option>
                                                                                    <option value="255" data-state-id="2" class="lga">
                                                Numan                                            </option>
                                                                                    <option value="256" data-state-id="2" class="lga">
                                                Shelleng                                            </option>
                                                                                    <option value="257" data-state-id="2" class="lga">
                                                Song                                            </option>
                                                                                    <option value="258" data-state-id="2" class="lga">
                                                Toungo                                            </option>
                                                                                    <option value="259" data-state-id="2" class="lga">
                                                Yola North                                            </option>
                                                                                    <option value="260" data-state-id="2" class="lga">
                                                Yola South                                            </option>
                                                                                                                                                                <option value="261" data-state-id="21" class="lga">
                                                Bakori                                            </option>
                                                                                    <option value="262" data-state-id="21" class="lga">
                                                Batagarawa                                            </option>
                                                                                    <option value="263" data-state-id="21" class="lga">
                                                Batsari                                            </option>
                                                                                    <option value="264" data-state-id="21" class="lga">
                                                Baure                                            </option>
                                                                                    <option value="265" data-state-id="21" class="lga">
                                                Bindawa                                            </option>
                                                                                    <option value="266" data-state-id="21" class="lga">
                                                Charanchi                                            </option>
                                                                                    <option value="267" data-state-id="21" class="lga">
                                                Dan Musa                                            </option>
                                                                                    <option value="268" data-state-id="21" class="lga">
                                                Dandume                                            </option>
                                                                                    <option value="269" data-state-id="21" class="lga">
                                                Danja                                            </option>
                                                                                    <option value="270" data-state-id="21" class="lga">
                                                Daura                                            </option>
                                                                                    <option value="271" data-state-id="21" class="lga">
                                                Dutsi                                            </option>
                                                                                    <option value="272" data-state-id="21" class="lga">
                                                Dutsin-Ma                                            </option>
                                                                                    <option value="273" data-state-id="21" class="lga">
                                                Faskari                                            </option>
                                                                                    <option value="274" data-state-id="21" class="lga">
                                                Funtua                                            </option>
                                                                                    <option value="275" data-state-id="21" class="lga">
                                                Ingawa                                            </option>
                                                                                    <option value="276" data-state-id="21" class="lga">
                                                Jibia                                            </option>
                                                                                    <option value="277" data-state-id="21" class="lga">
                                                Kafur                                            </option>
                                                                                    <option value="278" data-state-id="21" class="lga">
                                                Kaita                                            </option>
                                                                                    <option value="279" data-state-id="21" class="lga">
                                                Kankara                                            </option>
                                                                                    <option value="280" data-state-id="21" class="lga">
                                                Kankia                                            </option>
                                                                                    <option value="281" data-state-id="21" class="lga">
                                                Katsina                                            </option>
                                                                                    <option value="282" data-state-id="21" class="lga">
                                                Kurfi                                            </option>
                                                                                    <option value="283" data-state-id="21" class="lga">
                                                Kusada                                            </option>
                                                                                    <option value="284" data-state-id="21" class="lga">
                                                MaiAdua                                            </option>
                                                                                    <option value="285" data-state-id="21" class="lga">
                                                Malumfashi                                            </option>
                                                                                    <option value="286" data-state-id="21" class="lga">
                                                Mani                                            </option>
                                                                                    <option value="287" data-state-id="21" class="lga">
                                                Mashi                                            </option>
                                                                                    <option value="288" data-state-id="21" class="lga">
                                                Matazuu                                            </option>
                                                                                    <option value="289" data-state-id="21" class="lga">
                                                Musawa                                            </option>
                                                                                    <option value="290" data-state-id="21" class="lga">
                                                Rimi                                            </option>
                                                                                    <option value="291" data-state-id="21" class="lga">
                                                Sabuwa                                            </option>
                                                                                    <option value="292" data-state-id="21" class="lga">
                                                Safana                                            </option>
                                                                                    <option value="293" data-state-id="21" class="lga">
                                                Sandamu                                            </option>
                                                                                    <option value="294" data-state-id="21" class="lga">
                                                Zango                                            </option>
                                                                                                                                                                <option value="295" data-state-id="22" class="lga">
                                                Aleiro                                            </option>
                                                                                    <option value="296" data-state-id="22" class="lga">
                                                Arewa-Dandi                                            </option>
                                                                                    <option value="297" data-state-id="22" class="lga">
                                                Argungu                                            </option>
                                                                                    <option value="298" data-state-id="22" class="lga">
                                                Augie                                            </option>
                                                                                    <option value="299" data-state-id="22" class="lga">
                                                Bagudo                                            </option>
                                                                                    <option value="300" data-state-id="22" class="lga">
                                                Birnin Kebbi                                            </option>
                                                                                    <option value="301" data-state-id="22" class="lga">
                                                Bunza                                            </option>
                                                                                    <option value="302" data-state-id="22" class="lga">
                                                Dandi                                            </option>
                                                                                    <option value="303" data-state-id="22" class="lga">
                                                Fakai                                            </option>
                                                                                    <option value="304" data-state-id="22" class="lga">
                                                Gwandu                                            </option>
                                                                                    <option value="305" data-state-id="22" class="lga">
                                                Jega                                            </option>
                                                                                    <option value="306" data-state-id="22" class="lga">
                                                Kalgo                                            </option>
                                                                                    <option value="307" data-state-id="22" class="lga">
                                                Koko/Besse                                            </option>
                                                                                    <option value="308" data-state-id="22" class="lga">
                                                Maiyama                                            </option>
                                                                                    <option value="309" data-state-id="22" class="lga">
                                                Ngaski                                            </option>
                                                                                    <option value="310" data-state-id="22" class="lga">
                                                Sakaba                                            </option>
                                                                                    <option value="311" data-state-id="22" class="lga">
                                                Shanga                                            </option>
                                                                                    <option value="312" data-state-id="22" class="lga">
                                                Suru                                            </option>
                                                                                    <option value="313" data-state-id="22" class="lga">
                                                Wasagu/Danko                                            </option>
                                                                                    <option value="314" data-state-id="22" class="lga">
                                                Yauri                                            </option>
                                                                                    <option value="315" data-state-id="22" class="lga">
                                                Zuru                                            </option>
                                                                                                                                                                <option value="316" data-state-id="23" class="lga">
                                                Adavi                                            </option>
                                                                                    <option value="317" data-state-id="23" class="lga">
                                                Ajaokuta                                            </option>
                                                                                    <option value="318" data-state-id="23" class="lga">
                                                Ankpa                                            </option>
                                                                                    <option value="319" data-state-id="23" class="lga">
                                                Bassa                                            </option>
                                                                                    <option value="320" data-state-id="23" class="lga">
                                                Dekina                                            </option>
                                                                                    <option value="321" data-state-id="23" class="lga">
                                                Ibaji                                            </option>
                                                                                    <option value="322" data-state-id="23" class="lga">
                                                Idah                                            </option>
                                                                                    <option value="323" data-state-id="23" class="lga">
                                                Igalamela-Odolu                                            </option>
                                                                                    <option value="324" data-state-id="23" class="lga">
                                                Ijumu                                            </option>
                                                                                    <option value="325" data-state-id="23" class="lga">
                                                Kabba/Bunu                                            </option>
                                                                                    <option value="326" data-state-id="23" class="lga">
                                                Kogi                                            </option>
                                                                                    <option value="327" data-state-id="23" class="lga">
                                                Lokoja                                            </option>
                                                                                    <option value="328" data-state-id="23" class="lga">
                                                Mopa-Muro                                            </option>
                                                                                    <option value="329" data-state-id="23" class="lga">
                                                Ofu                                            </option>
                                                                                    <option value="330" data-state-id="23" class="lga">
                                                Ogori/Mangongo                                            </option>
                                                                                    <option value="331" data-state-id="23" class="lga">
                                                Okehi                                            </option>
                                                                                    <option value="332" data-state-id="23" class="lga">
                                                Okene                                            </option>
                                                                                    <option value="333" data-state-id="23" class="lga">
                                                Olamabolo                                            </option>
                                                                                    <option value="334" data-state-id="23" class="lga">
                                                Omala                                            </option>
                                                                                    <option value="335" data-state-id="23" class="lga">
                                                Yagba East                                            </option>
                                                                                    <option value="336" data-state-id="23" class="lga">
                                                Yagba West                                            </option>
                                                                                                                                                                <option value="337" data-state-id="24" class="lga">
                                                Asa                                            </option>
                                                                                    <option value="338" data-state-id="24" class="lga">
                                                Baruten                                            </option>
                                                                                    <option value="339" data-state-id="24" class="lga">
                                                Edu                                            </option>
                                                                                    <option value="340" data-state-id="24" class="lga">
                                                Ekiti                                            </option>
                                                                                    <option value="341" data-state-id="24" class="lga">
                                                Ifelodun                                            </option>
                                                                                    <option value="342" data-state-id="24" class="lga">
                                                Ilorin East                                            </option>
                                                                                    <option value="343" data-state-id="24" class="lga">
                                                Ilorin West                                            </option>
                                                                                    <option value="344" data-state-id="24" class="lga">
                                                Irepodun                                            </option>
                                                                                    <option value="345" data-state-id="24" class="lga">
                                                Isin                                            </option>
                                                                                    <option value="346" data-state-id="24" class="lga">
                                                Kaiama                                            </option>
                                                                                    <option value="347" data-state-id="24" class="lga">
                                                Moro                                            </option>
                                                                                    <option value="348" data-state-id="24" class="lga">
                                                Offa                                            </option>
                                                                                    <option value="349" data-state-id="24" class="lga">
                                                Oke-Ero                                            </option>
                                                                                    <option value="350" data-state-id="24" class="lga">
                                                Oyun                                            </option>
                                                                                    <option value="351" data-state-id="24" class="lga">
                                                Pategi                                            </option>
                                                                                                                                                                <option value="352" data-state-id="25" class="lga">
                                                Agege                                            </option>
                                                                                    <option value="353" data-state-id="25" class="lga">
                                                Ajeromi-Ifelodun                                            </option>
                                                                                    <option value="354" data-state-id="25" class="lga">
                                                Alimosho                                            </option>
                                                                                    <option value="355" data-state-id="25" class="lga">
                                                Amuwo-Odofin                                            </option>
                                                                                    <option value="356" data-state-id="25" class="lga">
                                                Apapa                                            </option>
                                                                                    <option value="357" data-state-id="25" class="lga">
                                                Badagry                                            </option>
                                                                                    <option value="358" data-state-id="25" class="lga">
                                                Epe                                            </option>
                                                                                    <option value="359" data-state-id="25" class="lga">
                                                Eti-Osa                                            </option>
                                                                                    <option value="360" data-state-id="25" class="lga">
                                                Ibeju/Lekki                                            </option>
                                                                                    <option value="361" data-state-id="25" class="lga">
                                                Ifako-Ijaye                                            </option>
                                                                                    <option value="362" data-state-id="25" class="lga">
                                                Ikeja                                            </option>
                                                                                    <option value="363" data-state-id="25" class="lga">
                                                Ikorodu                                            </option>
                                                                                    <option value="364" data-state-id="25" class="lga">
                                                Kosofe                                            </option>
                                                                                    <option value="365" data-state-id="25" class="lga">
                                                Lagos Island                                            </option>
                                                                                    <option value="366" data-state-id="25" class="lga">
                                                Lagos Mainland                                            </option>
                                                                                    <option value="367" data-state-id="25" class="lga">
                                                Mushin                                            </option>
                                                                                    <option value="368" data-state-id="25" class="lga">
                                                Ojo                                            </option>
                                                                                    <option value="369" data-state-id="25" class="lga">
                                                Oshodi-Isolo                                            </option>
                                                                                    <option value="370" data-state-id="25" class="lga">
                                                Shomolu                                            </option>
                                                                                    <option value="371" data-state-id="25" class="lga">
                                                Surulere                                            </option>
                                                                                                                                                                <option value="372" data-state-id="26" class="lga">
                                                 Lafia                                            </option>
                                                                                    <option value="373" data-state-id="26" class="lga">
                                                Akwanga                                            </option>
                                                                                    <option value="374" data-state-id="26" class="lga">
                                                Awe                                            </option>
                                                                                    <option value="375" data-state-id="26" class="lga">
                                                Doma                                            </option>
                                                                                    <option value="376" data-state-id="26" class="lga">
                                                Karu                                            </option>
                                                                                    <option value="377" data-state-id="26" class="lga">
                                                Keana                                            </option>
                                                                                    <option value="378" data-state-id="26" class="lga">
                                                Keffi                                            </option>
                                                                                    <option value="379" data-state-id="26" class="lga">
                                                Kokona                                            </option>
                                                                                    <option value="380" data-state-id="26" class="lga">
                                                Nasarawa                                            </option>
                                                                                    <option value="381" data-state-id="26" class="lga">
                                                Nasarawa-Eggon                                            </option>
                                                                                    <option value="382" data-state-id="26" class="lga">
                                                Obi                                            </option>
                                                                                    <option value="383" data-state-id="26" class="lga">
                                                Toto                                            </option>
                                                                                    <option value="384" data-state-id="26" class="lga">
                                                Wamba                                            </option>
                                                                                                                                                                <option value="385" data-state-id="27" class="lga">
                                                Agaie                                            </option>
                                                                                    <option value="386" data-state-id="27" class="lga">
                                                Agwara                                            </option>
                                                                                    <option value="387" data-state-id="27" class="lga">
                                                Bida                                            </option>
                                                                                    <option value="388" data-state-id="27" class="lga">
                                                Borgu                                            </option>
                                                                                    <option value="389" data-state-id="27" class="lga">
                                                Bosso                                            </option>
                                                                                    <option value="390" data-state-id="27" class="lga">
                                                Chanchaga                                            </option>
                                                                                    <option value="391" data-state-id="27" class="lga">
                                                Edati                                            </option>
                                                                                    <option value="392" data-state-id="27" class="lga">
                                                Gbako                                            </option>
                                                                                    <option value="393" data-state-id="27" class="lga">
                                                Gurara                                            </option>
                                                                                    <option value="394" data-state-id="27" class="lga">
                                                Katcha                                            </option>
                                                                                    <option value="395" data-state-id="27" class="lga">
                                                Kontagora                                            </option>
                                                                                    <option value="396" data-state-id="27" class="lga">
                                                Lapai                                            </option>
                                                                                    <option value="397" data-state-id="27" class="lga">
                                                Lavun                                            </option>
                                                                                    <option value="398" data-state-id="27" class="lga">
                                                Magama                                            </option>
                                                                                    <option value="399" data-state-id="27" class="lga">
                                                Mariga                                            </option>
                                                                                    <option value="400" data-state-id="27" class="lga">
                                                Mashegu                                            </option>
                                                                                    <option value="401" data-state-id="27" class="lga">
                                                Mokwa                                            </option>
                                                                                    <option value="402" data-state-id="27" class="lga">
                                                Muya                                            </option>
                                                                                    <option value="403" data-state-id="27" class="lga">
                                                Pailoro                                            </option>
                                                                                    <option value="404" data-state-id="27" class="lga">
                                                Rafi                                            </option>
                                                                                    <option value="405" data-state-id="27" class="lga">
                                                Rijau                                            </option>
                                                                                    <option value="406" data-state-id="27" class="lga">
                                                Shiroro                                            </option>
                                                                                    <option value="407" data-state-id="27" class="lga">
                                                Suleja                                            </option>
                                                                                    <option value="408" data-state-id="27" class="lga">
                                                Tafa                                            </option>
                                                                                    <option value="409" data-state-id="27" class="lga">
                                                Wushishi                                            </option>
                                                                                                                                                                <option value="410" data-state-id="28" class="lga">
                                                Abeokuta North                                            </option>
                                                                                    <option value="411" data-state-id="28" class="lga">
                                                Abeokuta South                                            </option>
                                                                                    <option value="412" data-state-id="28" class="lga">
                                                Ado-Odo/Ota                                            </option>
                                                                                    <option value="413" data-state-id="28" class="lga">
                                                Ewekoro                                            </option>
                                                                                    <option value="414" data-state-id="28" class="lga">
                                                Ifo                                            </option>
                                                                                    <option value="415" data-state-id="28" class="lga">
                                                Ijebu East                                            </option>
                                                                                    <option value="416" data-state-id="28" class="lga">
                                                Ijebu North                                            </option>
                                                                                    <option value="417" data-state-id="28" class="lga">
                                                Ijebu North East                                            </option>
                                                                                    <option value="418" data-state-id="28" class="lga">
                                                Ijebu Ode                                            </option>
                                                                                    <option value="419" data-state-id="28" class="lga">
                                                Ikenne                                            </option>
                                                                                    <option value="420" data-state-id="28" class="lga">
                                                Imeko-Afon                                            </option>
                                                                                    <option value="421" data-state-id="28" class="lga">
                                                Ipokia                                            </option>
                                                                                    <option value="422" data-state-id="28" class="lga">
                                                Obafemi-Owode                                            </option>
                                                                                    <option value="423" data-state-id="28" class="lga">
                                                Odeda                                            </option>
                                                                                    <option value="424" data-state-id="28" class="lga">
                                                Odogbolu                                            </option>
                                                                                    <option value="425" data-state-id="28" class="lga">
                                                Ogun Waterside                                            </option>
                                                                                    <option value="426" data-state-id="28" class="lga">
                                                Remo North                                            </option>
                                                                                    <option value="427" data-state-id="28" class="lga">
                                                Shagamu                                            </option>
                                                                                    <option value="428" data-state-id="28" class="lga">
                                                Yewa North                                            </option>
                                                                                    <option value="429" data-state-id="28" class="lga">
                                                Yewa South                                            </option>
                                                                                                                                                                <option value="430" data-state-id="29" class="lga">
                                                Akoko North East                                            </option>
                                                                                    <option value="431" data-state-id="29" class="lga">
                                                Akoko North West                                            </option>
                                                                                    <option value="432" data-state-id="29" class="lga">
                                                Akoko South Akure East                                            </option>
                                                                                    <option value="433" data-state-id="29" class="lga">
                                                Akoko South West                                            </option>
                                                                                    <option value="434" data-state-id="29" class="lga">
                                                Akure North                                            </option>
                                                                                    <option value="435" data-state-id="29" class="lga">
                                                Akure South                                            </option>
                                                                                    <option value="436" data-state-id="29" class="lga">
                                                Ese-Odo                                            </option>
                                                                                    <option value="437" data-state-id="29" class="lga">
                                                Idanre                                            </option>
                                                                                    <option value="438" data-state-id="29" class="lga">
                                                Ifedore                                            </option>
                                                                                    <option value="439" data-state-id="29" class="lga">
                                                Ilaje                                            </option>
                                                                                    <option value="440" data-state-id="29" class="lga">
                                                Ile-Oluji                                            </option>
                                                                                    <option value="441" data-state-id="29" class="lga">
                                                Irele                                            </option>
                                                                                    <option value="442" data-state-id="29" class="lga">
                                                Odigbo                                            </option>
                                                                                    <option value="443" data-state-id="29" class="lga">
                                                Okeigbo                                            </option>
                                                                                    <option value="444" data-state-id="29" class="lga">
                                                Okitipupa                                            </option>
                                                                                    <option value="445" data-state-id="29" class="lga">
                                                Ondo East                                            </option>
                                                                                    <option value="446" data-state-id="29" class="lga">
                                                Ondo West                                            </option>
                                                                                    <option value="447" data-state-id="29" class="lga">
                                                Ose                                            </option>
                                                                                    <option value="448" data-state-id="29" class="lga">
                                                Owo                                            </option>
                                                                                                                                                                <option value="449" data-state-id="30" class="lga">
                                                 Aiyedire                                            </option>
                                                                                    <option value="450" data-state-id="30" class="lga">
                                                Aiyedade                                            </option>
                                                                                    <option value="451" data-state-id="30" class="lga">
                                                Atakumosa East                                            </option>
                                                                                    <option value="452" data-state-id="30" class="lga">
                                                Atakumosa West                                            </option>
                                                                                    <option value="453" data-state-id="30" class="lga">
                                                Boluwaduro                                            </option>
                                                                                    <option value="454" data-state-id="30" class="lga">
                                                Boripe                                            </option>
                                                                                    <option value="455" data-state-id="30" class="lga">
                                                Ede North                                            </option>
                                                                                    <option value="456" data-state-id="30" class="lga">
                                                Ede South                                            </option>
                                                                                    <option value="457" data-state-id="30" class="lga">
                                                Egbedore                                            </option>
                                                                                    <option value="458" data-state-id="30" class="lga">
                                                Ejigbo                                            </option>
                                                                                    <option value="459" data-state-id="30" class="lga">
                                                Ife Central                                            </option>
                                                                                    <option value="460" data-state-id="30" class="lga">
                                                Ife East                                            </option>
                                                                                    <option value="461" data-state-id="30" class="lga">
                                                Ife North                                            </option>
                                                                                    <option value="462" data-state-id="30" class="lga">
                                                Ife South                                            </option>
                                                                                    <option value="463" data-state-id="30" class="lga">
                                                Ifedayo                                            </option>
                                                                                    <option value="464" data-state-id="30" class="lga">
                                                Ifelodun                                            </option>
                                                                                    <option value="465" data-state-id="30" class="lga">
                                                Ila                                            </option>
                                                                                    <option value="466" data-state-id="30" class="lga">
                                                Ilesha East                                            </option>
                                                                                    <option value="467" data-state-id="30" class="lga">
                                                Ilesha West                                            </option>
                                                                                    <option value="468" data-state-id="30" class="lga">
                                                Irepodun                                            </option>
                                                                                    <option value="469" data-state-id="30" class="lga">
                                                Irewole                                            </option>
                                                                                    <option value="470" data-state-id="30" class="lga">
                                                Isokan                                            </option>
                                                                                    <option value="471" data-state-id="30" class="lga">
                                                Iwo                                            </option>
                                                                                    <option value="472" data-state-id="30" class="lga">
                                                Obokun                                            </option>
                                                                                    <option value="473" data-state-id="30" class="lga">
                                                Odo-Otin                                            </option>
                                                                                    <option value="474" data-state-id="30" class="lga">
                                                Ola-Oluwa                                            </option>
                                                                                    <option value="475" data-state-id="30" class="lga">
                                                Olorunda                                            </option>
                                                                                    <option value="476" data-state-id="30" class="lga">
                                                Oriade                                            </option>
                                                                                    <option value="477" data-state-id="30" class="lga">
                                                Orolu                                            </option>
                                                                                    <option value="478" data-state-id="30" class="lga">
                                                Osogbo                                            </option>
                                                                                                                                                                <option value="479" data-state-id="3" class="lga">
                                                Abak                                            </option>
                                                                                    <option value="480" data-state-id="3" class="lga">
                                                Eastern Obolo                                            </option>
                                                                                    <option value="481" data-state-id="3" class="lga">
                                                Eket                                            </option>
                                                                                    <option value="482" data-state-id="3" class="lga">
                                                Esit Eket                                            </option>
                                                                                    <option value="483" data-state-id="3" class="lga">
                                                Essien Udim                                            </option>
                                                                                    <option value="484" data-state-id="3" class="lga">
                                                Etim Ekpo                                            </option>
                                                                                    <option value="485" data-state-id="3" class="lga">
                                                Etinan                                            </option>
                                                                                    <option value="486" data-state-id="3" class="lga">
                                                Ibeno                                            </option>
                                                                                    <option value="487" data-state-id="3" class="lga">
                                                Ibesikpo Asutan                                            </option>
                                                                                    <option value="488" data-state-id="3" class="lga">
                                                Ibiono Ibom                                            </option>
                                                                                    <option value="489" data-state-id="3" class="lga">
                                                Ika                                            </option>
                                                                                    <option value="490" data-state-id="3" class="lga">
                                                Ikono                                            </option>
                                                                                    <option value="491" data-state-id="3" class="lga">
                                                Ikot Abasi                                            </option>
                                                                                    <option value="492" data-state-id="3" class="lga">
                                                Ikot Ekpene                                            </option>
                                                                                    <option value="493" data-state-id="3" class="lga">
                                                Ini                                            </option>
                                                                                    <option value="494" data-state-id="3" class="lga">
                                                Itu                                            </option>
                                                                                    <option value="495" data-state-id="3" class="lga">
                                                Mbo                                            </option>
                                                                                    <option value="496" data-state-id="3" class="lga">
                                                Mkpat Enin                                            </option>
                                                                                    <option value="497" data-state-id="3" class="lga">
                                                Nsit Atai                                            </option>
                                                                                    <option value="498" data-state-id="3" class="lga">
                                                Nsit Ibom                                            </option>
                                                                                    <option value="499" data-state-id="3" class="lga">
                                                Nsit Ubium                                            </option>
                                                                                    <option value="500" data-state-id="3" class="lga">
                                                Obot Akara                                            </option>
                                                                                    <option value="501" data-state-id="3" class="lga">
                                                Okobo                                            </option>
                                                                                    <option value="502" data-state-id="3" class="lga">
                                                Onna                                            </option>
                                                                                    <option value="503" data-state-id="3" class="lga">
                                                Oron                                            </option>
                                                                                    <option value="504" data-state-id="3" class="lga">
                                                Oruk Anam                                            </option>
                                                                                    <option value="505" data-state-id="3" class="lga">
                                                Udung Uko                                            </option>
                                                                                    <option value="506" data-state-id="3" class="lga">
                                                Ukanafun                                            </option>
                                                                                    <option value="507" data-state-id="3" class="lga">
                                                Uruan                                            </option>
                                                                                    <option value="508" data-state-id="3" class="lga">
                                                Urue-Offong/Oruko                                            </option>
                                                                                    <option value="509" data-state-id="3" class="lga">
                                                Uyo                                            </option>
                                                                                                                                                                <option value="510" data-state-id="31" class="lga">
                                                 Irepo                                            </option>
                                                                                    <option value="511" data-state-id="31" class="lga">
                                                Afijio                                            </option>
                                                                                    <option value="512" data-state-id="31" class="lga">
                                                Akinyele                                            </option>
                                                                                    <option value="513" data-state-id="31" class="lga">
                                                Atiba                                            </option>
                                                                                    <option value="514" data-state-id="31" class="lga">
                                                Atigbo                                            </option>
                                                                                    <option value="515" data-state-id="31" class="lga">
                                                Egbeda                                            </option>
                                                                                    <option value="516" data-state-id="31" class="lga">
                                                Ibadan North                                            </option>
                                                                                    <option value="517" data-state-id="31" class="lga">
                                                Ibadan North West                                            </option>
                                                                                    <option value="518" data-state-id="31" class="lga">
                                                Ibadan South East                                            </option>
                                                                                    <option value="519" data-state-id="31" class="lga">
                                                Ibadan South West                                            </option>
                                                                                    <option value="520" data-state-id="31" class="lga">
                                                IbadanCentral                                            </option>
                                                                                    <option value="521" data-state-id="31" class="lga">
                                                Ibarapa Central                                            </option>
                                                                                    <option value="522" data-state-id="31" class="lga">
                                                Ibarapa East                                            </option>
                                                                                    <option value="523" data-state-id="31" class="lga">
                                                Ibarapa North                                            </option>
                                                                                    <option value="524" data-state-id="31" class="lga">
                                                Ido                                            </option>
                                                                                    <option value="525" data-state-id="31" class="lga">
                                                Iseyin                                            </option>
                                                                                    <option value="526" data-state-id="31" class="lga">
                                                Itesiwaju                                            </option>
                                                                                    <option value="527" data-state-id="31" class="lga">
                                                Iwajowa                                            </option>
                                                                                    <option value="528" data-state-id="31" class="lga">
                                                Kajola                                            </option>
                                                                                    <option value="529" data-state-id="31" class="lga">
                                                Lagelu Ogbomosho North                                            </option>
                                                                                    <option value="530" data-state-id="31" class="lga">
                                                Ogbmosho South                                            </option>
                                                                                    <option value="531" data-state-id="31" class="lga">
                                                Ogo Oluwa                                            </option>
                                                                                    <option value="532" data-state-id="31" class="lga">
                                                Olorunsogo                                            </option>
                                                                                    <option value="533" data-state-id="31" class="lga">
                                                Oluyole                                            </option>
                                                                                    <option value="534" data-state-id="31" class="lga">
                                                Ona-Ara                                            </option>
                                                                                    <option value="535" data-state-id="31" class="lga">
                                                Orelope                                            </option>
                                                                                    <option value="536" data-state-id="31" class="lga">
                                                Ori Ire                                            </option>
                                                                                    <option value="537" data-state-id="31" class="lga">
                                                Oyo East                                            </option>
                                                                                    <option value="538" data-state-id="31" class="lga">
                                                Oyo West                                            </option>
                                                                                    <option value="539" data-state-id="31" class="lga">
                                                Saki East                                            </option>
                                                                                    <option value="540" data-state-id="31" class="lga">
                                                Saki West                                            </option>
                                                                                    <option value="541" data-state-id="31" class="lga">
                                                Surulere                                            </option>
                                                                                                                                                                <option value="542" data-state-id="32" class="lga">
                                                Barikin Ladi                                            </option>
                                                                                    <option value="543" data-state-id="32" class="lga">
                                                Bassa                                            </option>
                                                                                    <option value="544" data-state-id="32" class="lga">
                                                Bokkos                                            </option>
                                                                                    <option value="545" data-state-id="32" class="lga">
                                                Jos East                                            </option>
                                                                                    <option value="546" data-state-id="32" class="lga">
                                                Jos North                                            </option>
                                                                                    <option value="547" data-state-id="32" class="lga">
                                                Jos South                                            </option>
                                                                                    <option value="548" data-state-id="32" class="lga">
                                                Kanam                                            </option>
                                                                                    <option value="549" data-state-id="32" class="lga">
                                                Kanke                                            </option>
                                                                                    <option value="550" data-state-id="32" class="lga">
                                                Langtang North                                            </option>
                                                                                    <option value="551" data-state-id="32" class="lga">
                                                Langtang South                                            </option>
                                                                                    <option value="552" data-state-id="32" class="lga">
                                                Mangu                                            </option>
                                                                                    <option value="553" data-state-id="32" class="lga">
                                                Mikang                                            </option>
                                                                                    <option value="554" data-state-id="32" class="lga">
                                                Pankshin                                            </option>
                                                                                    <option value="555" data-state-id="32" class="lga">
                                                Qua an Pan                                            </option>
                                                                                    <option value="556" data-state-id="32" class="lga">
                                                Riyom                                            </option>
                                                                                    <option value="557" data-state-id="32" class="lga">
                                                Shendam                                            </option>
                                                                                    <option value="558" data-state-id="32" class="lga">
                                                Wase                                            </option>
                                                                                                                                                                <option value="559" data-state-id="33" class="lga">
                                                 Oyigbo                                            </option>
                                                                                    <option value="560" data-state-id="33" class="lga">
                                                Abua/Odual                                            </option>
                                                                                    <option value="561" data-state-id="33" class="lga">
                                                Ahoada East                                            </option>
                                                                                    <option value="562" data-state-id="33" class="lga">
                                                Ahoada West                                            </option>
                                                                                    <option value="563" data-state-id="33" class="lga">
                                                Akuku Toru                                            </option>
                                                                                    <option value="564" data-state-id="33" class="lga">
                                                Andoni                                            </option>
                                                                                    <option value="565" data-state-id="33" class="lga">
                                                Asari-Toru                                            </option>
                                                                                    <option value="566" data-state-id="33" class="lga">
                                                Bonny                                            </option>
                                                                                    <option value="567" data-state-id="33" class="lga">
                                                Degema                                            </option>
                                                                                    <option value="568" data-state-id="33" class="lga">
                                                Eleme                                            </option>
                                                                                    <option value="569" data-state-id="33" class="lga">
                                                Emohua                                            </option>
                                                                                    <option value="570" data-state-id="33" class="lga">
                                                Etche                                            </option>
                                                                                    <option value="571" data-state-id="33" class="lga">
                                                Gokana                                            </option>
                                                                                    <option value="572" data-state-id="33" class="lga">
                                                Ikwerre                                            </option>
                                                                                    <option value="573" data-state-id="33" class="lga">
                                                Khana                                            </option>
                                                                                    <option value="574" data-state-id="33" class="lga">
                                                Obia/Akpor                                            </option>
                                                                                    <option value="575" data-state-id="33" class="lga">
                                                Ogba/Egbema/Ndoni                                            </option>
                                                                                    <option value="576" data-state-id="33" class="lga">
                                                Ogu/Bolo                                            </option>
                                                                                    <option value="577" data-state-id="33" class="lga">
                                                Okrika                                            </option>
                                                                                    <option value="578" data-state-id="33" class="lga">
                                                Omumma                                            </option>
                                                                                    <option value="579" data-state-id="33" class="lga">
                                                Opobo/Nkoro                                            </option>
                                                                                    <option value="580" data-state-id="33" class="lga">
                                                Port-Harcourt                                            </option>
                                                                                    <option value="581" data-state-id="33" class="lga">
                                                Tai                                            </option>
                                                                                                                                                                <option value="582" data-state-id="34" class="lga">
                                                Binji                                            </option>
                                                                                    <option value="583" data-state-id="34" class="lga">
                                                Bodinga                                            </option>
                                                                                    <option value="584" data-state-id="34" class="lga">
                                                Dange-shnsi                                            </option>
                                                                                    <option value="585" data-state-id="34" class="lga">
                                                Gada                                            </option>
                                                                                    <option value="586" data-state-id="34" class="lga">
                                                Gawabawa                                            </option>
                                                                                    <option value="587" data-state-id="34" class="lga">
                                                Goronyo                                            </option>
                                                                                    <option value="588" data-state-id="34" class="lga">
                                                Gudu                                            </option>
                                                                                    <option value="589" data-state-id="34" class="lga">
                                                Illela                                            </option>
                                                                                    <option value="590" data-state-id="34" class="lga">
                                                Isa                                            </option>
                                                                                    <option value="591" data-state-id="34" class="lga">
                                                kebbe                                            </option>
                                                                                    <option value="592" data-state-id="34" class="lga">
                                                Kware                                            </option>
                                                                                    <option value="593" data-state-id="34" class="lga">
                                                Rabah                                            </option>
                                                                                    <option value="594" data-state-id="34" class="lga">
                                                Sabon birni                                            </option>
                                                                                    <option value="595" data-state-id="34" class="lga">
                                                Shagari                                            </option>
                                                                                    <option value="596" data-state-id="34" class="lga">
                                                Silame                                            </option>
                                                                                    <option value="597" data-state-id="34" class="lga">
                                                Sokoto North                                            </option>
                                                                                    <option value="598" data-state-id="34" class="lga">
                                                Sokoto South                                            </option>
                                                                                    <option value="599" data-state-id="34" class="lga">
                                                Tambuwal                                            </option>
                                                                                    <option value="600" data-state-id="34" class="lga">
                                                Tqngaza                                            </option>
                                                                                    <option value="601" data-state-id="34" class="lga">
                                                Tureta                                            </option>
                                                                                    <option value="602" data-state-id="34" class="lga">
                                                Wamako                                            </option>
                                                                                    <option value="603" data-state-id="34" class="lga">
                                                Wurno                                            </option>
                                                                                    <option value="604" data-state-id="34" class="lga">
                                                Yabo                                            </option>
                                                                                                                                                                <option value="605" data-state-id="35" class="lga">
                                                Ardo-kola                                            </option>
                                                                                    <option value="606" data-state-id="35" class="lga">
                                                Bali                                            </option>
                                                                                    <option value="607" data-state-id="35" class="lga">
                                                Cassol                                            </option>
                                                                                    <option value="608" data-state-id="35" class="lga">
                                                Donga                                            </option>
                                                                                    <option value="609" data-state-id="35" class="lga">
                                                Gashaka                                            </option>
                                                                                    <option value="610" data-state-id="35" class="lga">
                                                Ibi                                            </option>
                                                                                    <option value="611" data-state-id="35" class="lga">
                                                Jalingo                                            </option>
                                                                                    <option value="612" data-state-id="35" class="lga">
                                                Karin-Lamido                                            </option>
                                                                                    <option value="613" data-state-id="35" class="lga">
                                                Kurmi                                            </option>
                                                                                    <option value="614" data-state-id="35" class="lga">
                                                Lau                                            </option>
                                                                                    <option value="615" data-state-id="35" class="lga">
                                                Sardauna                                            </option>
                                                                                    <option value="616" data-state-id="35" class="lga">
                                                Takum                                            </option>
                                                                                    <option value="617" data-state-id="35" class="lga">
                                                Ussa                                            </option>
                                                                                    <option value="618" data-state-id="35" class="lga">
                                                Wukari                                            </option>
                                                                                    <option value="619" data-state-id="35" class="lga">
                                                Yorro                                            </option>
                                                                                    <option value="620" data-state-id="35" class="lga">
                                                Zing                                            </option>
                                                                                                                                                                <option value="621" data-state-id="36" class="lga">
                                                Bade                                            </option>
                                                                                    <option value="622" data-state-id="36" class="lga">
                                                Bursari                                            </option>
                                                                                    <option value="623" data-state-id="36" class="lga">
                                                Damaturu                                            </option>
                                                                                    <option value="624" data-state-id="36" class="lga">
                                                Fika                                            </option>
                                                                                    <option value="625" data-state-id="36" class="lga">
                                                Fune                                            </option>
                                                                                    <option value="626" data-state-id="36" class="lga">
                                                Geidam                                            </option>
                                                                                    <option value="627" data-state-id="36" class="lga">
                                                Gujba                                            </option>
                                                                                    <option value="628" data-state-id="36" class="lga">
                                                Gulani                                            </option>
                                                                                    <option value="629" data-state-id="36" class="lga">
                                                Jakusko                                            </option>
                                                                                    <option value="630" data-state-id="36" class="lga">
                                                Karasuwa                                            </option>
                                                                                    <option value="631" data-state-id="36" class="lga">
                                                Karawa                                            </option>
                                                                                    <option value="632" data-state-id="36" class="lga">
                                                Machina                                            </option>
                                                                                    <option value="633" data-state-id="36" class="lga">
                                                Nangere                                            </option>
                                                                                    <option value="634" data-state-id="36" class="lga">
                                                Nguru Potiskum                                            </option>
                                                                                    <option value="635" data-state-id="36" class="lga">
                                                Tarmua                                            </option>
                                                                                    <option value="636" data-state-id="36" class="lga">
                                                Yunusari                                            </option>
                                                                                    <option value="637" data-state-id="36" class="lga">
                                                Yusufari                                            </option>
                                                                                                                                                                <option value="638" data-state-id="37" class="lga">
                                                Anka                                            </option>
                                                                                    <option value="639" data-state-id="37" class="lga">
                                                Bakura                                            </option>
                                                                                    <option value="640" data-state-id="37" class="lga">
                                                Birnin Magaji                                            </option>
                                                                                    <option value="641" data-state-id="37" class="lga">
                                                Bukkuyum                                             </option>
                                                                                    <option value="642" data-state-id="37" class="lga">
                                                Bungudu                                            </option>
                                                                                    <option value="643" data-state-id="37" class="lga">
                                                Gummi                                            </option>
                                                                                    <option value="644" data-state-id="37" class="lga">
                                                Gusau                                            </option>
                                                                                    <option value="645" data-state-id="37" class="lga">
                                                Kaura                                            </option>
                                                                                    <option value="646" data-state-id="37" class="lga">
                                                Maradun                                            </option>
                                                                                    <option value="647" data-state-id="37" class="lga">
                                                Maru                                            </option>
                                                                                    <option value="648" data-state-id="37" class="lga">
                                                Namoda                                            </option>
                                                                                    <option value="649" data-state-id="37" class="lga">
                                                Shinkafi                                            </option>
                                                                                    <option value="650" data-state-id="37" class="lga">
                                                Talata Mafara                                            </option>
                                                                                    <option value="651" data-state-id="37" class="lga">
                                                Tsafe                                            </option>
                                                                                    <option value="652" data-state-id="37" class="lga">
                                                Zurmi                                            </option>
                                                                                                                                                                <option value="653" data-state-id="15" class="lga">
                                                Abaji                                            </option>
                                                                                    <option value="654" data-state-id="15" class="lga">
                                                Abuja Municipal                                            </option>
                                                                                    <option value="655" data-state-id="15" class="lga">
                                                Bwari                                            </option>
                                                                                    <option value="656" data-state-id="15" class="lga">
                                                Gwagwalada                                            </option>
                                                                                    <option value="657" data-state-id="15" class="lga">
                                                Kuje                                            </option>
                                                                                    <option value="658" data-state-id="15" class="lga">
                                                Kwali                                            </option>
                                                                                                                                                                <option value="659" data-state-id="4" class="lga">
                                                Aguata                                            </option>
                                                                                    <option value="660" data-state-id="4" class="lga">
                                                Anambra East                                            </option>
                                                                                    <option value="661" data-state-id="4" class="lga">
                                                Anambra West                                            </option>
                                                                                    <option value="662" data-state-id="4" class="lga">
                                                Anaocha                                            </option>
                                                                                    <option value="663" data-state-id="4" class="lga">
                                                Awka North                                            </option>
                                                                                    <option value="664" data-state-id="4" class="lga">
                                                Awka South                                            </option>
                                                                                    <option value="665" data-state-id="4" class="lga">
                                                Ayamelum                                            </option>
                                                                                    <option value="666" data-state-id="4" class="lga">
                                                Dunukofia                                            </option>
                                                                                    <option value="667" data-state-id="4" class="lga">
                                                Ekwusigo                                            </option>
                                                                                    <option value="668" data-state-id="4" class="lga">
                                                Idemili North                                            </option>
                                                                                    <option value="669" data-state-id="4" class="lga">
                                                Idemili south                                            </option>
                                                                                    <option value="670" data-state-id="4" class="lga">
                                                Ihiala                                            </option>
                                                                                    <option value="671" data-state-id="4" class="lga">
                                                Njikoka                                            </option>
                                                                                    <option value="672" data-state-id="4" class="lga">
                                                Nnewi North                                            </option>
                                                                                    <option value="673" data-state-id="4" class="lga">
                                                Nnewi South                                            </option>
                                                                                    <option value="674" data-state-id="4" class="lga">
                                                Ogbaru                                            </option>
                                                                                    <option value="675" data-state-id="4" class="lga">
                                                Onitsha North                                            </option>
                                                                                    <option value="676" data-state-id="4" class="lga">
                                                Onitsha South                                            </option>
                                                                                    <option value="677" data-state-id="4" class="lga">
                                                Orumba North                                            </option>
                                                                                    <option value="678" data-state-id="4" class="lga">
                                                Orumba South                                            </option>
                                                                                    <option value="679" data-state-id="4" class="lga">
                                                Oyi                                            </option>
                                                                                                                                                                <option value="680" data-state-id="5" class="lga">
                                                Alkaleri                                            </option>
                                                                                    <option value="681" data-state-id="5" class="lga">
                                                Bauchi                                            </option>
                                                                                    <option value="682" data-state-id="5" class="lga">
                                                Bogoro                                            </option>
                                                                                    <option value="683" data-state-id="5" class="lga">
                                                Damban                                            </option>
                                                                                    <option value="684" data-state-id="5" class="lga">
                                                Darazo                                            </option>
                                                                                    <option value="685" data-state-id="5" class="lga">
                                                Dass                                            </option>
                                                                                    <option value="686" data-state-id="5" class="lga">
                                                Ganjuwa                                            </option>
                                                                                    <option value="687" data-state-id="5" class="lga">
                                                Giade                                            </option>
                                                                                    <option value="688" data-state-id="5" class="lga">
                                                Itas/Gadau                                            </option>
                                                                                    <option value="689" data-state-id="5" class="lga">
                                                Jama'are                                            </option>
                                                                                    <option value="690" data-state-id="5" class="lga">
                                                Katagum                                            </option>
                                                                                    <option value="691" data-state-id="5" class="lga">
                                                Kirfi                                            </option>
                                                                                    <option value="692" data-state-id="5" class="lga">
                                                Misau                                            </option>
                                                                                    <option value="693" data-state-id="5" class="lga">
                                                Ningi                                            </option>
                                                                                    <option value="694" data-state-id="5" class="lga">
                                                Shira                                            </option>
                                                                                    <option value="695" data-state-id="5" class="lga">
                                                Tafawa-Balewa                                            </option>
                                                                                    <option value="696" data-state-id="5" class="lga">
                                                Toro                                            </option>
                                                                                    <option value="697" data-state-id="5" class="lga">
                                                Warji                                            </option>
                                                                                    <option value="698" data-state-id="5" class="lga">
                                                Zaki                                            </option>
                                                                                                                                                                <option value="699" data-state-id="6" class="lga">
                                                Brass                                            </option>
                                                                                    <option value="700" data-state-id="6" class="lga">
                                                Ekeremor                                            </option>
                                                                                    <option value="701" data-state-id="6" class="lga">
                                                Kolokuma/Opokuma                                            </option>
                                                                                    <option value="702" data-state-id="6" class="lga">
                                                Nembe                                            </option>
                                                                                    <option value="703" data-state-id="6" class="lga">
                                                Ogbia                                            </option>
                                                                                    <option value="704" data-state-id="6" class="lga">
                                                Sagbama                                            </option>
                                                                                    <option value="705" data-state-id="6" class="lga">
                                                Southern Jaw                                            </option>
                                                                                    <option value="706" data-state-id="6" class="lga">
                                                Yenegoa                                            </option>
                                                                                                                                                                <option value="707" data-state-id="7" class="lga">
                                                Ado                                            </option>
                                                                                    <option value="708" data-state-id="7" class="lga">
                                                Agatu                                            </option>
                                                                                    <option value="709" data-state-id="7" class="lga">
                                                Apa                                            </option>
                                                                                    <option value="710" data-state-id="7" class="lga">
                                                Buruku                                            </option>
                                                                                    <option value="711" data-state-id="7" class="lga">
                                                Gboko                                            </option>
                                                                                    <option value="712" data-state-id="7" class="lga">
                                                Guma                                            </option>
                                                                                    <option value="713" data-state-id="7" class="lga">
                                                Gwer East                                            </option>
                                                                                    <option value="714" data-state-id="7" class="lga">
                                                Gwer West                                            </option>
                                                                                    <option value="715" data-state-id="7" class="lga">
                                                Katsina-Ala                                            </option>
                                                                                    <option value="716" data-state-id="7" class="lga">
                                                Konshisha                                            </option>
                                                                                    <option value="717" data-state-id="7" class="lga">
                                                Kwande                                            </option>
                                                                                    <option value="718" data-state-id="7" class="lga">
                                                Logo                                            </option>
                                                                                    <option value="719" data-state-id="7" class="lga">
                                                Makurdi                                            </option>
                                                                                    <option value="720" data-state-id="7" class="lga">
                                                Obi                                            </option>
                                                                                    <option value="721" data-state-id="7" class="lga">
                                                Ogbadibo                                            </option>
                                                                                    <option value="722" data-state-id="7" class="lga">
                                                Ohimini                                            </option>
                                                                                    <option value="723" data-state-id="7" class="lga">
                                                Oju                                            </option>
                                                                                    <option value="724" data-state-id="7" class="lga">
                                                Okpokwu                                            </option>
                                                                                    <option value="725" data-state-id="7" class="lga">
                                                Oturkpo                                            </option>
                                                                                    <option value="726" data-state-id="7" class="lga">
                                                Tarka                                            </option>
                                                                                    <option value="727" data-state-id="7" class="lga">
                                                Ukum                                            </option>
                                                                                    <option value="728" data-state-id="7" class="lga">
                                                Ushongo                                            </option>
                                                                                    <option value="729" data-state-id="7" class="lga">
                                                Vandeikya                                            </option>
                                                                                                                                                                <option value="730" data-state-id="8" class="lga">
                                                Abadam                                            </option>
                                                                                    <option value="731" data-state-id="8" class="lga">
                                                Askira/Uba                                            </option>
                                                                                    <option value="732" data-state-id="8" class="lga">
                                                Bama                                            </option>
                                                                                    <option value="733" data-state-id="8" class="lga">
                                                Bayo                                            </option>
                                                                                    <option value="734" data-state-id="8" class="lga">
                                                Biu                                            </option>
                                                                                    <option value="735" data-state-id="8" class="lga">
                                                Chibok                                            </option>
                                                                                    <option value="736" data-state-id="8" class="lga">
                                                Damboa                                            </option>
                                                                                    <option value="737" data-state-id="8" class="lga">
                                                Dikwa                                            </option>
                                                                                    <option value="738" data-state-id="8" class="lga">
                                                Gubio                                            </option>
                                                                                    <option value="739" data-state-id="8" class="lga">
                                                Guzamala                                            </option>
                                                                                    <option value="740" data-state-id="8" class="lga">
                                                Gwoza                                            </option>
                                                                                    <option value="741" data-state-id="8" class="lga">
                                                Hawul                                            </option>
                                                                                    <option value="742" data-state-id="8" class="lga">
                                                Jere                                            </option>
                                                                                    <option value="743" data-state-id="8" class="lga">
                                                Kaga                                            </option>
                                                                                    <option value="744" data-state-id="8" class="lga">
                                                Kala/Balge                                            </option>
                                                                                    <option value="745" data-state-id="8" class="lga">
                                                Konduga                                            </option>
                                                                                    <option value="746" data-state-id="8" class="lga">
                                                Kukawa                                            </option>
                                                                                    <option value="747" data-state-id="8" class="lga">
                                                Kwaya Kusar                                            </option>
                                                                                    <option value="748" data-state-id="8" class="lga">
                                                Mafa                                            </option>
                                                                                    <option value="749" data-state-id="8" class="lga">
                                                Magumeri                                            </option>
                                                                                    <option value="750" data-state-id="8" class="lga">
                                                Maiduguri                                            </option>
                                                                                    <option value="751" data-state-id="8" class="lga">
                                                Marte                                            </option>
                                                                                    <option value="752" data-state-id="8" class="lga">
                                                Mobbar                                            </option>
                                                                                    <option value="753" data-state-id="8" class="lga">
                                                Monguno                                            </option>
                                                                                    <option value="754" data-state-id="8" class="lga">
                                                Ngala                                            </option>
                                                                                    <option value="755" data-state-id="8" class="lga">
                                                Nganzai                                            </option>
                                                                                    <option value="756" data-state-id="8" class="lga">
                                                Shani                                            </option>
                                                                                                                                                                <option value="757" data-state-id="9" class="lga">
                                                Abi                                            </option>
                                                                                    <option value="758" data-state-id="9" class="lga">
                                                Akamkpa                                            </option>
                                                                                    <option value="759" data-state-id="9" class="lga">
                                                Akpabuyo                                            </option>
                                                                                    <option value="760" data-state-id="9" class="lga">
                                                Bakassi                                            </option>
                                                                                    <option value="761" data-state-id="9" class="lga">
                                                Bekwara                                            </option>
                                                                                    <option value="762" data-state-id="9" class="lga">
                                                Biase                                            </option>
                                                                                    <option value="763" data-state-id="9" class="lga">
                                                Boki                                            </option>
                                                                                    <option value="764" data-state-id="9" class="lga">
                                                Calabar Municipality                                            </option>
                                                                                    <option value="765" data-state-id="9" class="lga">
                                                Calabar South                                            </option>
                                                                                    <option value="766" data-state-id="9" class="lga">
                                                Etung                                            </option>
                                                                                    <option value="767" data-state-id="9" class="lga">
                                                Ikom                                            </option>
                                                                                    <option value="768" data-state-id="9" class="lga">
                                                Obanliku                                            </option>
                                                                                    <option value="769" data-state-id="9" class="lga">
                                                Obubra                                            </option>
                                                                                    <option value="770" data-state-id="9" class="lga">
                                                Obudu                                            </option>
                                                                                    <option value="771" data-state-id="9" class="lga">
                                                Odukpani                                            </option>
                                                                                    <option value="772" data-state-id="9" class="lga">
                                                Ogoja                                            </option>
                                                                                    <option value="773" data-state-id="9" class="lga">
                                                Yala                                            </option>
                                                                                    <option value="774" data-state-id="9" class="lga">
                                                Yarkur                                            </option>
                                                                                                            </select>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="address">Home Address :</label>
                                    <input type="text" name="staff[address]" class="form-control" id="address"
                                           minlength="10">
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="type_id">Staff Type :</label>
                                    <select name="staff[type_id]" class="selectpicker" data-style="form-control btn-secondary" id="type_id" required>
                                        <option></option>
                                        <option value="1">Teaching Staff</option>
                                        <option value="2">Principal</option>
                                        <option value="3">Bursary Staff</option>
                                        <option value="4">Chief Bursar</option>
                                        <option value="5">Other Non Teaching Staff</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="academic_qualification">Academic Qualification :</label>
                                    <input type="text" name="staff[academic_qualification]" class="form-control" id="academic_qualification">
                                    <small class="form-control-feedback"></small>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label class="form-control-label" for="rank">Rank :</label>
                                <input type="text" name="staff[rank]" class="form-control" id="rank">
                                <small class="form-control-feedback"></small>
                            </div>
                            
                            <div class="form-group col-md-2">
                                <label class="form-control-label" for="grade_level">Grade Level :</label>
                                <input type="number" name="staff[grade_level]" class="form-control" id="grade_level" min="1" max="100">
                            </div>
                            
                            <div class="form-group col-sm-2">
                                <label for="step" class="form-control-label col-form-label">Step</label>
                                <input type="number" class="form-control" id="step" name="staff[step]" max="20">
                            </div>
                            
                            <div class="form-group col-md-3">
                                <label for="first_appt_date" class="form-control-label col-form-label">Date of first appointment</label>
                                <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="first_appt_date" name="staff[first_appt_date]">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="present_appt_date" class="form-control-label col-form-label">Date of present appointment</label>
                                <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="present_appt_date" name="staff[present_appt_date]">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="present_posting_date" class="form-control-label col-form-label">Date of present posting</label>
                                <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="present_posting_date" name="staff[present_posting_date]">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="conf_date" class="form-control-label col-form-label">Date of confirmation</label>
                                <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="conf_date" name="staff[conf_date]">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="hq_file_no" class="form-control-label col-form-label">Head Quarters file number</label>
                                <input type="text" class="form-control to-validate" id="hq_file_no" name="staff[hq_file_no]" maxlength="45">
                                <small class="form-control-feedback"></small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="ippis" class="form-control-label col-form-label">IPPIS</label>
                                <input type="text" class="form-control to-validate" id="ippis" name="staff[ippis]" maxlength="45">
                                <small class="form-control-feedback"></small>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="passport">Upload Staff Passport :</label>
                                    <input type="file" name="staff_passport" class="form-control" id="passport" required>
                                    <small class="text-info">(JPG, JPEG, or PNG. Max Size: 100KB)</small>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="house_id">Sport House <small>(if any)</small> :</label>
                                    <select class="select2 m-b-10" name="staff[house_id]" style="width: 100%" id="house_id">
                                        <option></option>
                                                                                    <option value="1">ALPHA</option>
                                                                                    <option value="2">Beta</option>
                                                                                    <option value="3">Gamma</option>
                                                                                    <option value="4">Phyle</option>
                                                                            </select>
                                </div>
                            </div>
                            
                            <div class="col-md-6 hide" id="select-staff-department">
                                <div class="form-group">
                                    <label class="form-control-label" for="dept">Staff Department(s):</label>
                                    <select class="select2 select2-multiple" multiple="multiple" name="dept_id[]" style="width: 100%" id="dept">
                                        <option></option>
                                                                                    <option value="1">
                                                Krystal&rsquo;s IT Academy                                            </option>
                                                                            </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Create Staff account</button>
                                <span class="processor"></span>
                            </div>
                        </div>
                    </section>
                    </form>                </div>
            </div>
        </div>
    </div>
</div>

<!-- =======================  START: This page JS scripts =================== ---->
<script src="https://krystalng.com/fggconitsha/assets/plugins/wizard/jquery.steps.min.js"></script>
<script src="https://krystalng.com/fggconitsha/assets/plugins/moment/moment.js"></script>
<script src="https://krystalng.com/fggconitsha/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>


<script>
    $(function () {
        $('.date').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD',
            maxDate: new Date(2017, 0, 1),
            minDate: new Date(1940, 0, 1),
            time: false
        });
        
        $('#type_id').change(function(){
           var type_id = $(this).val();
           if(type_id === '1'){
               $('#select-staff-department').show('slow');
           }else{
               $('#select-staff-department').hide('slow');
           }
        });

        $('.lga').hide();
        $('#state').change(function(){
            var id = $(this).val();

            $('.lga').hide().attr('disabled', 'disabled');
            $('#lga').val('');
            $('#lga option:selected').text('');
            $('option[data-state-id='+id+']').show().removeAttr('disabled');
        });

        
        $('.to-validate').change(function(){
            var a       = $(this);
            var field   = a.attr('id');
            var val     = a.val();
            var url     = 'https://krystalng.com/fggconitsha/user-account/validate-user-field';
            
            $.post(url, {field : field, value : val, user_type : "staff"}, function (result) {
                if(result.type !== 'success') {
                    a.addClass('form-control-danger');
                    a.parent().addClass('has-danger');
                    a.siblings('small').html(result.msg);
                }
                else{
                    a.removeClass('form-control-danger');
                    a.parent().removeClass('has-danger');
                    a.siblings('small').html('');
                }
            }, 'json');
        });

        
        $('#create-staff').submit(function(e){
            e.preventDefault();
            
            var has_error = $('.form-control-danger');
            if(has_error.length > 0){
                has_error.focus();
            }
            else{
                var xhr = submit_form_multipart('#create-staff');
                xhr.done(function(result){
                    if(result.type === 'success'){
                        // SWEET ALERT
                        swal({
                            title: "Staff Account Created",
                            text: "A notification has been sent to this staff via email! \n Do you want to create another staff account now?",
                            type: "success",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            cancelButtonText: "No! Not now",
                            confirmButtonText: "Yes please!",
                            closeOnConfirm: false,
                            closeOnCancel: false
                        }, function(isConfirm){
                            if(isConfirm){
                                window.location.href = site_url+'staff/create';
                            }else{
                                window.location.href = site_url+'staff/manage';
                            }
                        });
                    }
                });
            }
            
        });
    })
</script>
<!-- =======================  END: This page JS scripts =================== ----><!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer">
    © 2018 School Information Management System (MySkool Portal) by <a href="https://krystaldigitalng.com" target="_blank">KRYSTAL DIGITAL SOLUTIONS</a>
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="https://krystalng.com/fggconitsha/assets/plugins/datatables/jquery.dataTables.min.js"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="https://krystalng.com/fggconitsha/assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="https://krystalng.com/fggconitsha/assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="https://krystalng.com/fggconitsha/assets/js/sidebarmenu.js"></script>

<!--stickey kit -->
<script src="https://krystalng.com/fggconitsha/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>

<!--Custom JavaScript -->
<script src="https://krystalng.com/fggconitsha/assets/js/custom.min.js"></script>

<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->


<script src="https://krystalng.com/fggconitsha/assets/js/bootstrap-notify.js"></script>

<script src="https://krystalng.com/fggconitsha/assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="https://krystalng.com/fggconitsha/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<!-- jQuery peity -->
<script src="https://krystalng.com/fggconitsha/assets/plugins/tablesaw-master/dist/tablesaw.js"></script>
<script src="https://krystalng.com/fggconitsha/assets/plugins/tablesaw-master/dist/tablesaw-init.js"></script>


<script>
    $('ul.collapse').each(function (i) {
        if($(this).children().length < 1){
            $(this).parent().remove();
        }
    });
    
    
    $(".select2").select2();
    
    
    $('.ajax-link').contextmenu(function(){
        return false;
    });

    function load_notification(){
        $('#n-center').load(site_url+'other/notification ul', function(){
            if($('.message-center').length > 0){
                $('.notify').html('<span class="heartbit"></span><span class="point"></span>');
            }else{
                $('.notify').html('');
            }
            //setTimeout(load_notification, 120000);
        });
    }
    load_notification();
    
</script>
<!-- ============================================================== -->
</body>

</html>