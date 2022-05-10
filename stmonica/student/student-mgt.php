<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php')?>

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
    <div style="width: 100%; height:100%; background-color: white; position: fixed; top:0; left:0; z-index: 1000; opacity:0.3; display: none;"
        id="DivOverlay">
    </div>
    <!-----===================================----->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
    <?php include('../layout/topbar.php')?>
        <?php include('../layout/sidebar.php')?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <style>
                .option,
                .lga {
                    display: none;
                }
            </style>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Student List</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
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
                                <form action="student/student-list" id="student-list" method="post"
                                    accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="filter-by">Filter by :</label>
                                                <select name="filter_by" id="filter-by"
                                                    class="custom-select form-control select2" style="width: 100%">
                                                    <option></option>
                                                    <option value="state">State</option>
                                                    <option value="house">Sport House</option>
                                                    <option value="age">Age</option>
                                                    <option value="res">Residence Type</option>
                                                    <option value="religion">Religion</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 option state">
                                            <div class="form-group">
                                                <label for="state">Select State:</label>
                                                <select name="state" id="state"
                                                    class="custom-select form-control select2" style="width: 100%">
                                                    <option value=""></option>
                                                    <option value=1>ABIA</option>
                                                    <option value=2>ADAMAWA</option>
                                                    <option value=3>AKWA IBOM</option>
                                                    <option value=4>ANAMBRA</option>
                                                    <option value=5>BAUCHI</option>
                                                    <option value=6>BAYELSA</option>
                                                    <option value=7>BENUE </option>
                                                    <option value=8>BORNO</option>
                                                    <option value=9>CROSS RIVER</option>
                                                    <option value=10>DELTA</option>
                                                    <option value=11>EBONYI</option>
                                                    <option value=12>EDO</option>
                                                    <option value=13>EKITI</option>
                                                    <option value=14>ENUGU</option>
                                                    <option value=15>FCT</option>
                                                    <option value=16>GOMBE </option>
                                                    <option value=17>IMO</option>
                                                    <option value=18>JIGAWA</option>
                                                    <option value=19>KADUNA</option>
                                                    <option value=20>KANO</option>
                                                    <option value=21>KATSINA</option>
                                                    <option value=22>KEBBI </option>
                                                    <option value=23>KOGI</option>
                                                    <option value=24>KWARA</option>
                                                    <option value=25>LAGOS</option>
                                                    <option value=26>NASSARAWA</option>
                                                    <option value=27>NIGER</option>
                                                    <option value=28>OGUN</option>
                                                    <option value=29>ONDO</option>
                                                    <option value=30>OSUN</option>
                                                    <option value=31>OYO</option>
                                                    <option value=32>PLATEAU</option>
                                                    <option value=33>RIVERS</option>
                                                    <option value=34>SOKOTO</option>
                                                    <option value=35>TARABA</option>
                                                    <option value=36>YOBE</option>
                                                    <option value=37>ZAMFARA</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 option state">
                                            <div class="form-group">
                                                <label for="lga">L.G.A :</label>
                                                <select name="lga" id="lga" class="custom-select form-control">
                                                    <option value="all" id="lga-all">All</option>
                                                    <option value="2" class="lga state_lga_1">Aba North</option>
                                                    <option value="3" class="lga state_lga_1">Aba South</option>
                                                    <option value="4" class="lga state_lga_1">Arochukwu</option>
                                                    <option value="5" class="lga state_lga_1">Bende</option>
                                                    <option value="6" class="lga state_lga_1">Ikwuano</option>
                                                    <option value="7" class="lga state_lga_1">Isiala-Ngwa North</option>
                                                    <option value="8" class="lga state_lga_1">Isiala-Ngwa South</option>
                                                    <option value="9" class="lga state_lga_1">Isuikwato</option>
                                                    <option value="10" class="lga state_lga_1">Ngwa</option>
                                                    <option value="11" class="lga state_lga_1">Obi Nwa</option>
                                                    <option value="12" class="lga state_lga_1">Ohafia</option>
                                                    <option value="13" class="lga state_lga_1">Osisioma</option>
                                                    <option value="14" class="lga state_lga_1">Ugwunagbo</option>
                                                    <option value="15" class="lga state_lga_1">Ukwa East</option>
                                                    <option value="16" class="lga state_lga_1">Ukwa West </option>
                                                    <option value="17" class="lga state_lga_1">Umu-Neochi</option>
                                                    <option value="18" class="lga state_lga_1">Umuahia North</option>
                                                    <option value="19" class="lga state_lga_1">Umuahia South</option>
                                                    <option value="20" class="lga state_lga_10">Aniocha</option>
                                                    <option value="21" class="lga state_lga_10">Aniocha South</option>
                                                    <option value="22" class="lga state_lga_10">Bomadi</option>
                                                    <option value="23" class="lga state_lga_10">Burutu</option>
                                                    <option value="24" class="lga state_lga_10">Ethiope East</option>
                                                    <option value="25" class="lga state_lga_10">Ethiope West</option>
                                                    <option value="26" class="lga state_lga_10">Ika North-East</option>
                                                    <option value="27" class="lga state_lga_10">Ika South</option>
                                                    <option value="28" class="lga state_lga_10">Isoko North</option>
                                                    <option value="29" class="lga state_lga_10">Isoko south</option>
                                                    <option value="30" class="lga state_lga_10">Ndokwa East</option>
                                                    <option value="31" class="lga state_lga_10">Ndokwa West</option>
                                                    <option value="32" class="lga state_lga_10">Okpe</option>
                                                    <option value="33" class="lga state_lga_10">Oshimili</option>
                                                    <option value="34" class="lga state_lga_10">Oshimili North</option>
                                                    <option value="35" class="lga state_lga_10">Patani</option>
                                                    <option value="36" class="lga state_lga_10">Sapele</option>
                                                    <option value="37" class="lga state_lga_10">Udu</option>
                                                    <option value="38" class="lga state_lga_10">Ughelli North</option>
                                                    <option value="39" class="lga state_lga_10">Ughelli South</option>
                                                    <option value="40" class="lga state_lga_10">Ukwani </option>
                                                    <option value="41" class="lga state_lga_10">Uvwie</option>
                                                    <option value="42" class="lga state_lga_10">Warri Central </option>
                                                    <option value="43" class="lga state_lga_10">Warri North</option>
                                                    <option value="44" class="lga state_lga_10">Warri South</option>
                                                    <option value="45" class="lga state_lga_11">Abakaliki</option>
                                                    <option value="46" class="lga state_lga_11">Afikpo North</option>
                                                    <option value="47" class="lga state_lga_11">Afikpo South</option>
                                                    <option value="48" class="lga state_lga_11">Ebonyi</option>
                                                    <option value="49" class="lga state_lga_11">Ezza</option>
                                                    <option value="50" class="lga state_lga_11">Ezza South</option>
                                                    <option value="51" class="lga state_lga_11">Ishielu</option>
                                                    <option value="52" class="lga state_lga_11">Ivo</option>
                                                    <option value="53" class="lga state_lga_11">lkwo</option>
                                                    <option value="54" class="lga state_lga_11">Ohaozara</option>
                                                    <option value="55" class="lga state_lga_11">Ohaukwu</option>
                                                    <option value="56" class="lga state_lga_11">Onicha</option>
                                                    <option value="57" class="lga state_lga_12">Akoko Edo</option>
                                                    <option value="58" class="lga state_lga_12">Egor</option>
                                                    <option value="59" class="lga state_lga_12">Esan Central</option>
                                                    <option value="60" class="lga state_lga_12">Esan North-East</option>
                                                    <option value="61" class="lga state_lga_12">Esan South-East</option>
                                                    <option value="62" class="lga state_lga_12">Esan West</option>
                                                    <option value="63" class="lga state_lga_12">Etsako Central</option>
                                                    <option value="64" class="lga state_lga_12">Etsako East</option>
                                                    <option value="65" class="lga state_lga_12">Etsako West</option>
                                                    <option value="66" class="lga state_lga_12">Igueben</option>
                                                    <option value="67" class="lga state_lga_12">Ikpoba Okha</option>
                                                    <option value="68" class="lga state_lga_12">Oredo</option>
                                                    <option value="69" class="lga state_lga_12">Orhiomwon</option>
                                                    <option value="70" class="lga state_lga_12">Ovia North East</option>
                                                    <option value="71" class="lga state_lga_12">Ovia SouthWest</option>
                                                    <option value="72" class="lga state_lga_12">Owan East</option>
                                                    <option value="73" class="lga state_lga_12">Owan West</option>
                                                    <option value="74" class="lga state_lga_12">Uhunmwonde</option>
                                                    <option value="75" class="lga state_lga_12">Ukpoba</option>
                                                    <option value="76" class="lga state_lga_13"> Ilejemeje</option>
                                                    <option value="77" class="lga state_lga_13">Ado</option>
                                                    <option value="78" class="lga state_lga_13">Efon</option>
                                                    <option value="79" class="lga state_lga_13">Ekiti South-West
                                                    </option>
                                                    <option value="80" class="lga state_lga_13">Ekiti-East</option>
                                                    <option value="81" class="lga state_lga_13">Ekiti-West</option>
                                                    <option value="82" class="lga state_lga_13">Emure/Ise/Orun</option>
                                                    <option value="83" class="lga state_lga_13">Gbonyin</option>
                                                    <option value="84" class="lga state_lga_13">Ido/Osi</option>
                                                    <option value="85" class="lga state_lga_13">Ijero</option>
                                                    <option value="86" class="lga state_lga_13">Ikare</option>
                                                    <option value="87" class="lga state_lga_13">Ikole</option>
                                                    <option value="88" class="lga state_lga_13">Irepodun</option>
                                                    <option value="89" class="lga state_lga_13">Ise/Orun</option>
                                                    <option value="90" class="lga state_lga_13">Moba</option>
                                                    <option value="91" class="lga state_lga_13">Oye</option>
                                                    <option value="92" class="lga state_lga_14">Agwu</option>
                                                    <option value="93" class="lga state_lga_14">Aninri</option>
                                                    <option value="94" class="lga state_lga_14">Enugu Eas</option>
                                                    <option value="95" class="lga state_lga_14">Enugu North</option>
                                                    <option value="96" class="lga state_lga_14">Enugu South</option>
                                                    <option value="97" class="lga state_lga_14">Ezeagu</option>
                                                    <option value="98" class="lga state_lga_14">Igbo-Ekiti</option>
                                                    <option value="99" class="lga state_lga_14">Igbo-Eze South</option>
                                                    <option value="100" class="lga state_lga_14">IgboEze North</option>
                                                    <option value="101" class="lga state_lga_14">Isi-Uzo</option>
                                                    <option value="102" class="lga state_lga_14">Nkanu</option>
                                                    <option value="103" class="lga state_lga_14">Nkanu East</option>
                                                    <option value="104" class="lga state_lga_14">Nsukka</option>
                                                    <option value="105" class="lga state_lga_14">Oji-River</option>
                                                    <option value="106" class="lga state_lga_14">Udenu</option>
                                                    <option value="107" class="lga state_lga_14">Udi</option>
                                                    <option value="108" class="lga state_lga_14">Uzo-Uwani</option>
                                                    <option value="109" class="lga state_lga_16">Akko</option>
                                                    <option value="110" class="lga state_lga_16">Balanga</option>
                                                    <option value="111" class="lga state_lga_16">Billiri</option>
                                                    <option value="112" class="lga state_lga_16">Dukku</option>
                                                    <option value="113" class="lga state_lga_16">Funakaye</option>
                                                    <option value="114" class="lga state_lga_16">Gombe</option>
                                                    <option value="115" class="lga state_lga_16">Kaltungo</option>
                                                    <option value="116" class="lga state_lga_16">Kwami</option>
                                                    <option value="117" class="lga state_lga_16">Nafada/Bajoga</option>
                                                    <option value="118" class="lga state_lga_16">Shomgom</option>
                                                    <option value="119" class="lga state_lga_16">Yamaltu/Delta</option>
                                                    <option value="120" class="lga state_lga_17">Aboh-Mbaise</option>
                                                    <option value="121" class="lga state_lga_17">Ahiazu-Mbaise</option>
                                                    <option value="122" class="lga state_lga_17">Ehime-Mbano</option>
                                                    <option value="123" class="lga state_lga_17">Ezinihitte</option>
                                                    <option value="124" class="lga state_lga_17">Ideato North</option>
                                                    <option value="125" class="lga state_lga_17">Ideato South</option>
                                                    <option value="126" class="lga state_lga_17">Ihitte/Uboma</option>
                                                    <option value="127" class="lga state_lga_17">Ikeduru</option>
                                                    <option value="128" class="lga state_lga_17">Isiala Mbano</option>
                                                    <option value="129" class="lga state_lga_17">Isu</option>
                                                    <option value="130" class="lga state_lga_17">Mbaitoli</option>
                                                    <option value="131" class="lga state_lga_17">Ngor-Okpala</option>
                                                    <option value="132" class="lga state_lga_17">Njaba</option>
                                                    <option value="133" class="lga state_lga_17">Nkwerre</option>
                                                    <option value="134" class="lga state_lga_17">Nwangele</option>
                                                    <option value="135" class="lga state_lga_17">Obowo</option>
                                                    <option value="136" class="lga state_lga_17">Oguta</option>
                                                    <option value="137" class="lga state_lga_17">Ohaji/Egbema</option>
                                                    <option value="138" class="lga state_lga_17">Okigwe</option>
                                                    <option value="139" class="lga state_lga_17">Orlu</option>
                                                    <option value="140" class="lga state_lga_17">Orsu</option>
                                                    <option value="141" class="lga state_lga_17">Oru East</option>
                                                    <option value="142" class="lga state_lga_17">Oru West</option>
                                                    <option value="143" class="lga state_lga_17">Owerri North</option>
                                                    <option value="144" class="lga state_lga_17">Owerri West</option>
                                                    <option value="145" class="lga state_lga_17">Owerri-Municipal
                                                    </option>
                                                    <option value="146" class="lga state_lga_18">Auyo</option>
                                                    <option value="147" class="lga state_lga_18">Babura</option>
                                                    <option value="148" class="lga state_lga_18">Biriniwa</option>
                                                    <option value="149" class="lga state_lga_18">Birni Kudu</option>
                                                    <option value="150" class="lga state_lga_18">Buji</option>
                                                    <option value="151" class="lga state_lga_18">Dutse</option>
                                                    <option value="152" class="lga state_lga_18">Gagarawa</option>
                                                    <option value="153" class="lga state_lga_18">Garki</option>
                                                    <option value="154" class="lga state_lga_18">Gumel</option>
                                                    <option value="155" class="lga state_lga_18">Guri</option>
                                                    <option value="156" class="lga state_lga_18">Gwaram</option>
                                                    <option value="157" class="lga state_lga_18">Gwiwa</option>
                                                    <option value="158" class="lga state_lga_18">Hadejia</option>
                                                    <option value="159" class="lga state_lga_18">Jahun</option>
                                                    <option value="160" class="lga state_lga_18">Kafin Hausa</option>
                                                    <option value="161" class="lga state_lga_18">Kaugama Kazaure
                                                    </option>
                                                    <option value="162" class="lga state_lga_18">Kiri Kasamma</option>
                                                    <option value="163" class="lga state_lga_18">Kiyawa</option>
                                                    <option value="164" class="lga state_lga_18">Maigatari</option>
                                                    <option value="165" class="lga state_lga_18">Malam Madori</option>
                                                    <option value="166" class="lga state_lga_18">Miga</option>
                                                    <option value="167" class="lga state_lga_18">Ringim</option>
                                                    <option value="168" class="lga state_lga_18">Roni</option>
                                                    <option value="169" class="lga state_lga_18">Sule-Tankarkar</option>
                                                    <option value="170" class="lga state_lga_18">Taura</option>
                                                    <option value="171" class="lga state_lga_18">Yankwashi</option>
                                                    <option value="172" class="lga state_lga_19">Birni-Gwari</option>
                                                    <option value="173" class="lga state_lga_19">Chikun</option>
                                                    <option value="174" class="lga state_lga_19">Giwa</option>
                                                    <option value="175" class="lga state_lga_19">Igabi</option>
                                                    <option value="176" class="lga state_lga_19">Ikara</option>
                                                    <option value="177" class="lga state_lga_19">jaba</option>
                                                    <option value="178" class="lga state_lga_19">Jemaa</option>
                                                    <option value="179" class="lga state_lga_19">Kachia</option>
                                                    <option value="180" class="lga state_lga_19">Kaduna North</option>
                                                    <option value="181" class="lga state_lga_19">Kaduna South</option>
                                                    <option value="182" class="lga state_lga_19">Kagarko</option>
                                                    <option value="183" class="lga state_lga_19">Kajuru</option>
                                                    <option value="184" class="lga state_lga_19">Kaura</option>
                                                    <option value="185" class="lga state_lga_19">Kauru</option>
                                                    <option value="186" class="lga state_lga_19">Kubau</option>
                                                    <option value="187" class="lga state_lga_19">Kudan</option>
                                                    <option value="188" class="lga state_lga_19">Lere</option>
                                                    <option value="189" class="lga state_lga_19">Makarfi</option>
                                                    <option value="190" class="lga state_lga_19">Sabon-Gari</option>
                                                    <option value="191" class="lga state_lga_19">Sanga</option>
                                                    <option value="192" class="lga state_lga_19">Soba</option>
                                                    <option value="193" class="lga state_lga_19">Zango-Kataf </option>
                                                    <option value="194" class="lga state_lga_19">Zaria</option>
                                                    <option value="195" class="lga state_lga_20">Ajingi</option>
                                                    <option value="196" class="lga state_lga_20">Albasu</option>
                                                    <option value="197" class="lga state_lga_20">Bagwai</option>
                                                    <option value="198" class="lga state_lga_20">Bebeji</option>
                                                    <option value="199" class="lga state_lga_20">Bichi</option>
                                                    <option value="200" class="lga state_lga_20">Bunkure</option>
                                                    <option value="201" class="lga state_lga_20">Dala</option>
                                                    <option value="202" class="lga state_lga_20">Dambatta</option>
                                                    <option value="203" class="lga state_lga_20">Dawakin Kudu</option>
                                                    <option value="204" class="lga state_lga_20">Dawakin Tofa</option>
                                                    <option value="205" class="lga state_lga_20">Doguwa</option>
                                                    <option value="206" class="lga state_lga_20">Fagge</option>
                                                    <option value="207" class="lga state_lga_20">Gabasawa</option>
                                                    <option value="208" class="lga state_lga_20">Garko</option>
                                                    <option value="209" class="lga state_lga_20">Garum</option>
                                                    <option value="210" class="lga state_lga_20">Gaya</option>
                                                    <option value="211" class="lga state_lga_20">Gezawa</option>
                                                    <option value="212" class="lga state_lga_20">Gwale</option>
                                                    <option value="213" class="lga state_lga_20">Gwarzo</option>
                                                    <option value="214" class="lga state_lga_20">Kabo</option>
                                                    <option value="215" class="lga state_lga_20">Kano Municipal</option>
                                                    <option value="216" class="lga state_lga_20">Karaye</option>
                                                    <option value="217" class="lga state_lga_20">Kibiya</option>
                                                    <option value="218" class="lga state_lga_20">Kiru</option>
                                                    <option value="219" class="lga state_lga_20">kumbotso</option>
                                                    <option value="220" class="lga state_lga_20">Kunchi</option>
                                                    <option value="221" class="lga state_lga_20">Kura</option>
                                                    <option value="222" class="lga state_lga_20">Madobi</option>
                                                    <option value="223" class="lga state_lga_20">Makoda</option>
                                                    <option value="224" class="lga state_lga_20">Mallam</option>
                                                    <option value="225" class="lga state_lga_20">Minjibir</option>
                                                    <option value="226" class="lga state_lga_20">Nasarawa</option>
                                                    <option value="227" class="lga state_lga_20">Rano</option>
                                                    <option value="228" class="lga state_lga_20">Rimin Gado</option>
                                                    <option value="229" class="lga state_lga_20">Rogo</option>
                                                    <option value="230" class="lga state_lga_20">Shanono</option>
                                                    <option value="231" class="lga state_lga_20">Sumaila</option>
                                                    <option value="232" class="lga state_lga_20">Takali</option>
                                                    <option value="233" class="lga state_lga_20">Tarauni</option>
                                                    <option value="234" class="lga state_lga_20">Tofa</option>
                                                    <option value="235" class="lga state_lga_20">Tsanyawa</option>
                                                    <option value="236" class="lga state_lga_20">Tudun Wada</option>
                                                    <option value="237" class="lga state_lga_20">Ungogo</option>
                                                    <option value="238" class="lga state_lga_20">Warawa</option>
                                                    <option value="239" class="lga state_lga_20">Wudil</option>
                                                    <option value="240" class="lga state_lga_2">Demsa</option>
                                                    <option value="241" class="lga state_lga_2">Fufore</option>
                                                    <option value="242" class="lga state_lga_2">Ganaye</option>
                                                    <option value="243" class="lga state_lga_2">Gireri</option>
                                                    <option value="244" class="lga state_lga_2">Gombi</option>
                                                    <option value="245" class="lga state_lga_2">Guyuk</option>
                                                    <option value="246" class="lga state_lga_2">Hong</option>
                                                    <option value="247" class="lga state_lga_2">Jada</option>
                                                    <option value="248" class="lga state_lga_2">Lamurde</option>
                                                    <option value="249" class="lga state_lga_2">Madagali</option>
                                                    <option value="250" class="lga state_lga_2">Maiha</option>
                                                    <option value="251" class="lga state_lga_2">Mayo-Belwa</option>
                                                    <option value="252" class="lga state_lga_2">Michika</option>
                                                    <option value="253" class="lga state_lga_2">Mubi North</option>
                                                    <option value="254" class="lga state_lga_2">Mubi South</option>
                                                    <option value="255" class="lga state_lga_2">Numan</option>
                                                    <option value="256" class="lga state_lga_2">Shelleng</option>
                                                    <option value="257" class="lga state_lga_2">Song</option>
                                                    <option value="258" class="lga state_lga_2">Toungo</option>
                                                    <option value="259" class="lga state_lga_2">Yola North</option>
                                                    <option value="260" class="lga state_lga_2">Yola South</option>
                                                    <option value="261" class="lga state_lga_21">Bakori</option>
                                                    <option value="262" class="lga state_lga_21">Batagarawa</option>
                                                    <option value="263" class="lga state_lga_21">Batsari</option>
                                                    <option value="264" class="lga state_lga_21">Baure</option>
                                                    <option value="265" class="lga state_lga_21">Bindawa</option>
                                                    <option value="266" class="lga state_lga_21">Charanchi</option>
                                                    <option value="267" class="lga state_lga_21">Dan Musa</option>
                                                    <option value="268" class="lga state_lga_21">Dandume</option>
                                                    <option value="269" class="lga state_lga_21">Danja</option>
                                                    <option value="270" class="lga state_lga_21">Daura</option>
                                                    <option value="271" class="lga state_lga_21">Dutsi</option>
                                                    <option value="272" class="lga state_lga_21">Dutsin-Ma</option>
                                                    <option value="273" class="lga state_lga_21">Faskari</option>
                                                    <option value="274" class="lga state_lga_21">Funtua</option>
                                                    <option value="275" class="lga state_lga_21">Ingawa</option>
                                                    <option value="276" class="lga state_lga_21">Jibia</option>
                                                    <option value="277" class="lga state_lga_21">Kafur</option>
                                                    <option value="278" class="lga state_lga_21">Kaita</option>
                                                    <option value="279" class="lga state_lga_21">Kankara</option>
                                                    <option value="280" class="lga state_lga_21">Kankia</option>
                                                    <option value="281" class="lga state_lga_21">Katsina</option>
                                                    <option value="282" class="lga state_lga_21">Kurfi</option>
                                                    <option value="283" class="lga state_lga_21">Kusada</option>
                                                    <option value="284" class="lga state_lga_21">MaiAdua</option>
                                                    <option value="285" class="lga state_lga_21">Malumfashi</option>
                                                    <option value="286" class="lga state_lga_21">Mani</option>
                                                    <option value="287" class="lga state_lga_21">Mashi</option>
                                                    <option value="288" class="lga state_lga_21">Matazuu</option>
                                                    <option value="289" class="lga state_lga_21">Musawa</option>
                                                    <option value="290" class="lga state_lga_21">Rimi</option>
                                                    <option value="291" class="lga state_lga_21">Sabuwa</option>
                                                    <option value="292" class="lga state_lga_21">Safana</option>
                                                    <option value="293" class="lga state_lga_21">Sandamu</option>
                                                    <option value="294" class="lga state_lga_21">Zango</option>
                                                    <option value="295" class="lga state_lga_22">Aleiro</option>
                                                    <option value="296" class="lga state_lga_22">Arewa-Dandi</option>
                                                    <option value="297" class="lga state_lga_22">Argungu</option>
                                                    <option value="298" class="lga state_lga_22">Augie</option>
                                                    <option value="299" class="lga state_lga_22">Bagudo</option>
                                                    <option value="300" class="lga state_lga_22">Birnin Kebbi</option>
                                                    <option value="301" class="lga state_lga_22">Bunza</option>
                                                    <option value="302" class="lga state_lga_22">Dandi</option>
                                                    <option value="303" class="lga state_lga_22">Fakai</option>
                                                    <option value="304" class="lga state_lga_22">Gwandu</option>
                                                    <option value="305" class="lga state_lga_22">Jega</option>
                                                    <option value="306" class="lga state_lga_22">Kalgo</option>
                                                    <option value="307" class="lga state_lga_22">Koko/Besse</option>
                                                    <option value="308" class="lga state_lga_22">Maiyama</option>
                                                    <option value="309" class="lga state_lga_22">Ngaski</option>
                                                    <option value="310" class="lga state_lga_22">Sakaba</option>
                                                    <option value="311" class="lga state_lga_22">Shanga</option>
                                                    <option value="312" class="lga state_lga_22">Suru</option>
                                                    <option value="313" class="lga state_lga_22">Wasagu/Danko</option>
                                                    <option value="314" class="lga state_lga_22">Yauri</option>
                                                    <option value="315" class="lga state_lga_22">Zuru</option>
                                                    <option value="316" class="lga state_lga_23">Adavi</option>
                                                    <option value="317" class="lga state_lga_23">Ajaokuta</option>
                                                    <option value="318" class="lga state_lga_23">Ankpa</option>
                                                    <option value="319" class="lga state_lga_23">Bassa</option>
                                                    <option value="320" class="lga state_lga_23">Dekina</option>
                                                    <option value="321" class="lga state_lga_23">Ibaji</option>
                                                    <option value="322" class="lga state_lga_23">Idah</option>
                                                    <option value="323" class="lga state_lga_23">Igalamela-Odolu
                                                    </option>
                                                    <option value="324" class="lga state_lga_23">Ijumu</option>
                                                    <option value="325" class="lga state_lga_23">Kabba/Bunu</option>
                                                    <option value="326" class="lga state_lga_23">Kogi</option>
                                                    <option value="327" class="lga state_lga_23">Lokoja</option>
                                                    <option value="328" class="lga state_lga_23">Mopa-Muro</option>
                                                    <option value="329" class="lga state_lga_23">Ofu</option>
                                                    <option value="330" class="lga state_lga_23">Ogori/Mangongo</option>
                                                    <option value="331" class="lga state_lga_23">Okehi</option>
                                                    <option value="332" class="lga state_lga_23">Okene</option>
                                                    <option value="333" class="lga state_lga_23">Olamabolo</option>
                                                    <option value="334" class="lga state_lga_23">Omala</option>
                                                    <option value="335" class="lga state_lga_23">Yagba East</option>
                                                    <option value="336" class="lga state_lga_23">Yagba West</option>
                                                    <option value="337" class="lga state_lga_24">Asa</option>
                                                    <option value="338" class="lga state_lga_24">Baruten</option>
                                                    <option value="339" class="lga state_lga_24">Edu</option>
                                                    <option value="340" class="lga state_lga_24">Ekiti</option>
                                                    <option value="341" class="lga state_lga_24">Ifelodun</option>
                                                    <option value="342" class="lga state_lga_24">Ilorin East</option>
                                                    <option value="343" class="lga state_lga_24">Ilorin West</option>
                                                    <option value="344" class="lga state_lga_24">Irepodun</option>
                                                    <option value="345" class="lga state_lga_24">Isin</option>
                                                    <option value="346" class="lga state_lga_24">Kaiama</option>
                                                    <option value="347" class="lga state_lga_24">Moro</option>
                                                    <option value="348" class="lga state_lga_24">Offa</option>
                                                    <option value="349" class="lga state_lga_24">Oke-Ero</option>
                                                    <option value="350" class="lga state_lga_24">Oyun</option>
                                                    <option value="351" class="lga state_lga_24">Pategi</option>
                                                    <option value="352" class="lga state_lga_25">Agege</option>
                                                    <option value="353" class="lga state_lga_25">Ajeromi-Ifelodun
                                                    </option>
                                                    <option value="354" class="lga state_lga_25">Alimosho</option>
                                                    <option value="355" class="lga state_lga_25">Amuwo-Odofin</option>
                                                    <option value="356" class="lga state_lga_25">Apapa</option>
                                                    <option value="357" class="lga state_lga_25">Badagry</option>
                                                    <option value="358" class="lga state_lga_25">Epe</option>
                                                    <option value="359" class="lga state_lga_25">Eti-Osa</option>
                                                    <option value="360" class="lga state_lga_25">Ibeju/Lekki</option>
                                                    <option value="361" class="lga state_lga_25">Ifako-Ijaye</option>
                                                    <option value="362" class="lga state_lga_25">Ikeja</option>
                                                    <option value="363" class="lga state_lga_25">Ikorodu</option>
                                                    <option value="364" class="lga state_lga_25">Kosofe</option>
                                                    <option value="365" class="lga state_lga_25">Lagos Island</option>
                                                    <option value="366" class="lga state_lga_25">Lagos Mainland</option>
                                                    <option value="367" class="lga state_lga_25">Mushin</option>
                                                    <option value="368" class="lga state_lga_25">Ojo</option>
                                                    <option value="369" class="lga state_lga_25">Oshodi-Isolo</option>
                                                    <option value="370" class="lga state_lga_25">Shomolu</option>
                                                    <option value="371" class="lga state_lga_25">Surulere</option>
                                                    <option value="372" class="lga state_lga_26"> Lafia</option>
                                                    <option value="373" class="lga state_lga_26">Akwanga</option>
                                                    <option value="374" class="lga state_lga_26">Awe</option>
                                                    <option value="375" class="lga state_lga_26">Doma</option>
                                                    <option value="376" class="lga state_lga_26">Karu</option>
                                                    <option value="377" class="lga state_lga_26">Keana</option>
                                                    <option value="378" class="lga state_lga_26">Keffi</option>
                                                    <option value="379" class="lga state_lga_26">Kokona</option>
                                                    <option value="380" class="lga state_lga_26">Nasarawa</option>
                                                    <option value="381" class="lga state_lga_26">Nasarawa-Eggon</option>
                                                    <option value="382" class="lga state_lga_26">Obi</option>
                                                    <option value="383" class="lga state_lga_26">Toto</option>
                                                    <option value="384" class="lga state_lga_26">Wamba</option>
                                                    <option value="385" class="lga state_lga_27">Agaie</option>
                                                    <option value="386" class="lga state_lga_27">Agwara</option>
                                                    <option value="387" class="lga state_lga_27">Bida</option>
                                                    <option value="388" class="lga state_lga_27">Borgu</option>
                                                    <option value="389" class="lga state_lga_27">Bosso</option>
                                                    <option value="390" class="lga state_lga_27">Chanchaga</option>
                                                    <option value="391" class="lga state_lga_27">Edati</option>
                                                    <option value="392" class="lga state_lga_27">Gbako</option>
                                                    <option value="393" class="lga state_lga_27">Gurara</option>
                                                    <option value="394" class="lga state_lga_27">Katcha</option>
                                                    <option value="395" class="lga state_lga_27">Kontagora</option>
                                                    <option value="396" class="lga state_lga_27">Lapai</option>
                                                    <option value="397" class="lga state_lga_27">Lavun</option>
                                                    <option value="398" class="lga state_lga_27">Magama</option>
                                                    <option value="399" class="lga state_lga_27">Mariga</option>
                                                    <option value="400" class="lga state_lga_27">Mashegu</option>
                                                    <option value="401" class="lga state_lga_27">Mokwa</option>
                                                    <option value="402" class="lga state_lga_27">Muya</option>
                                                    <option value="403" class="lga state_lga_27">Pailoro</option>
                                                    <option value="404" class="lga state_lga_27">Rafi</option>
                                                    <option value="405" class="lga state_lga_27">Rijau</option>
                                                    <option value="406" class="lga state_lga_27">Shiroro</option>
                                                    <option value="407" class="lga state_lga_27">Suleja</option>
                                                    <option value="408" class="lga state_lga_27">Tafa</option>
                                                    <option value="409" class="lga state_lga_27">Wushishi</option>
                                                    <option value="410" class="lga state_lga_28">Abeokuta North</option>
                                                    <option value="411" class="lga state_lga_28">Abeokuta South</option>
                                                    <option value="412" class="lga state_lga_28">Ado-Odo/Ota</option>
                                                    <option value="413" class="lga state_lga_28">Ewekoro</option>
                                                    <option value="414" class="lga state_lga_28">Ifo</option>
                                                    <option value="415" class="lga state_lga_28">Ijebu East</option>
                                                    <option value="416" class="lga state_lga_28">Ijebu North</option>
                                                    <option value="417" class="lga state_lga_28">Ijebu North East
                                                    </option>
                                                    <option value="418" class="lga state_lga_28">Ijebu Ode</option>
                                                    <option value="419" class="lga state_lga_28">Ikenne</option>
                                                    <option value="420" class="lga state_lga_28">Imeko-Afon</option>
                                                    <option value="421" class="lga state_lga_28">Ipokia</option>
                                                    <option value="422" class="lga state_lga_28">Obafemi-Owode</option>
                                                    <option value="423" class="lga state_lga_28">Odeda</option>
                                                    <option value="424" class="lga state_lga_28">Odogbolu</option>
                                                    <option value="425" class="lga state_lga_28">Ogun Waterside</option>
                                                    <option value="426" class="lga state_lga_28">Remo North</option>
                                                    <option value="427" class="lga state_lga_28">Shagamu</option>
                                                    <option value="428" class="lga state_lga_28">Yewa North</option>
                                                    <option value="429" class="lga state_lga_28">Yewa South</option>
                                                    <option value="430" class="lga state_lga_29">Akoko North East
                                                    </option>
                                                    <option value="431" class="lga state_lga_29">Akoko North West
                                                    </option>
                                                    <option value="432" class="lga state_lga_29">Akoko South Akure East
                                                    </option>
                                                    <option value="433" class="lga state_lga_29">Akoko South West
                                                    </option>
                                                    <option value="434" class="lga state_lga_29">Akure North</option>
                                                    <option value="435" class="lga state_lga_29">Akure South</option>
                                                    <option value="436" class="lga state_lga_29">Ese-Odo</option>
                                                    <option value="437" class="lga state_lga_29">Idanre</option>
                                                    <option value="438" class="lga state_lga_29">Ifedore</option>
                                                    <option value="439" class="lga state_lga_29">Ilaje</option>
                                                    <option value="440" class="lga state_lga_29">Ile-Oluji</option>
                                                    <option value="441" class="lga state_lga_29">Irele</option>
                                                    <option value="442" class="lga state_lga_29">Odigbo</option>
                                                    <option value="443" class="lga state_lga_29">Okeigbo</option>
                                                    <option value="444" class="lga state_lga_29">Okitipupa</option>
                                                    <option value="445" class="lga state_lga_29">Ondo East</option>
                                                    <option value="446" class="lga state_lga_29">Ondo West</option>
                                                    <option value="447" class="lga state_lga_29">Ose</option>
                                                    <option value="448" class="lga state_lga_29">Owo</option>
                                                    <option value="449" class="lga state_lga_30"> Aiyedire</option>
                                                    <option value="450" class="lga state_lga_30">Aiyedade</option>
                                                    <option value="451" class="lga state_lga_30">Atakumosa East</option>
                                                    <option value="452" class="lga state_lga_30">Atakumosa West</option>
                                                    <option value="453" class="lga state_lga_30">Boluwaduro</option>
                                                    <option value="454" class="lga state_lga_30">Boripe</option>
                                                    <option value="455" class="lga state_lga_30">Ede North</option>
                                                    <option value="456" class="lga state_lga_30">Ede South</option>
                                                    <option value="457" class="lga state_lga_30">Egbedore</option>
                                                    <option value="458" class="lga state_lga_30">Ejigbo</option>
                                                    <option value="459" class="lga state_lga_30">Ife Central</option>
                                                    <option value="460" class="lga state_lga_30">Ife East</option>
                                                    <option value="461" class="lga state_lga_30">Ife North</option>
                                                    <option value="462" class="lga state_lga_30">Ife South</option>
                                                    <option value="463" class="lga state_lga_30">Ifedayo</option>
                                                    <option value="464" class="lga state_lga_30">Ifelodun</option>
                                                    <option value="465" class="lga state_lga_30">Ila</option>
                                                    <option value="466" class="lga state_lga_30">Ilesha East</option>
                                                    <option value="467" class="lga state_lga_30">Ilesha West</option>
                                                    <option value="468" class="lga state_lga_30">Irepodun</option>
                                                    <option value="469" class="lga state_lga_30">Irewole</option>
                                                    <option value="470" class="lga state_lga_30">Isokan</option>
                                                    <option value="471" class="lga state_lga_30">Iwo</option>
                                                    <option value="472" class="lga state_lga_30">Obokun</option>
                                                    <option value="473" class="lga state_lga_30">Odo-Otin</option>
                                                    <option value="474" class="lga state_lga_30">Ola-Oluwa</option>
                                                    <option value="475" class="lga state_lga_30">Olorunda</option>
                                                    <option value="476" class="lga state_lga_30">Oriade</option>
                                                    <option value="477" class="lga state_lga_30">Orolu</option>
                                                    <option value="478" class="lga state_lga_30">Osogbo</option>
                                                    <option value="479" class="lga state_lga_3">Abak</option>
                                                    <option value="480" class="lga state_lga_3">Eastern Obolo</option>
                                                    <option value="481" class="lga state_lga_3">Eket</option>
                                                    <option value="482" class="lga state_lga_3">Esit Eket</option>
                                                    <option value="483" class="lga state_lga_3">Essien Udim</option>
                                                    <option value="484" class="lga state_lga_3">Etim Ekpo</option>
                                                    <option value="485" class="lga state_lga_3">Etinan</option>
                                                    <option value="486" class="lga state_lga_3">Ibeno</option>
                                                    <option value="487" class="lga state_lga_3">Ibesikpo Asutan</option>
                                                    <option value="488" class="lga state_lga_3">Ibiono Ibom</option>
                                                    <option value="489" class="lga state_lga_3">Ika</option>
                                                    <option value="490" class="lga state_lga_3">Ikono</option>
                                                    <option value="491" class="lga state_lga_3">Ikot Abasi</option>
                                                    <option value="492" class="lga state_lga_3">Ikot Ekpene</option>
                                                    <option value="493" class="lga state_lga_3">Ini</option>
                                                    <option value="494" class="lga state_lga_3">Itu</option>
                                                    <option value="495" class="lga state_lga_3">Mbo</option>
                                                    <option value="496" class="lga state_lga_3">Mkpat Enin</option>
                                                    <option value="497" class="lga state_lga_3">Nsit Atai</option>
                                                    <option value="498" class="lga state_lga_3">Nsit Ibom</option>
                                                    <option value="499" class="lga state_lga_3">Nsit Ubium</option>
                                                    <option value="500" class="lga state_lga_3">Obot Akara</option>
                                                    <option value="501" class="lga state_lga_3">Okobo</option>
                                                    <option value="502" class="lga state_lga_3">Onna</option>
                                                    <option value="503" class="lga state_lga_3">Oron</option>
                                                    <option value="504" class="lga state_lga_3">Oruk Anam</option>
                                                    <option value="505" class="lga state_lga_3">Udung Uko</option>
                                                    <option value="506" class="lga state_lga_3">Ukanafun</option>
                                                    <option value="507" class="lga state_lga_3">Uruan</option>
                                                    <option value="508" class="lga state_lga_3">Urue-Offong/Oruko
                                                    </option>
                                                    <option value="509" class="lga state_lga_3">Uyo</option>
                                                    <option value="510" class="lga state_lga_31"> Irepo</option>
                                                    <option value="511" class="lga state_lga_31">Afijio</option>
                                                    <option value="512" class="lga state_lga_31">Akinyele</option>
                                                    <option value="513" class="lga state_lga_31">Atiba</option>
                                                    <option value="514" class="lga state_lga_31">Atigbo</option>
                                                    <option value="515" class="lga state_lga_31">Egbeda</option>
                                                    <option value="516" class="lga state_lga_31">Ibadan North</option>
                                                    <option value="517" class="lga state_lga_31">Ibadan North West
                                                    </option>
                                                    <option value="518" class="lga state_lga_31">Ibadan South East
                                                    </option>
                                                    <option value="519" class="lga state_lga_31">Ibadan South West
                                                    </option>
                                                    <option value="520" class="lga state_lga_31">IbadanCentral</option>
                                                    <option value="521" class="lga state_lga_31">Ibarapa Central
                                                    </option>
                                                    <option value="522" class="lga state_lga_31">Ibarapa East</option>
                                                    <option value="523" class="lga state_lga_31">Ibarapa North</option>
                                                    <option value="524" class="lga state_lga_31">Ido</option>
                                                    <option value="525" class="lga state_lga_31">Iseyin</option>
                                                    <option value="526" class="lga state_lga_31">Itesiwaju</option>
                                                    <option value="527" class="lga state_lga_31">Iwajowa</option>
                                                    <option value="528" class="lga state_lga_31">Kajola</option>
                                                    <option value="529" class="lga state_lga_31">Lagelu Ogbomosho North
                                                    </option>
                                                    <option value="530" class="lga state_lga_31">Ogbmosho South</option>
                                                    <option value="531" class="lga state_lga_31">Ogo Oluwa</option>
                                                    <option value="532" class="lga state_lga_31">Olorunsogo</option>
                                                    <option value="533" class="lga state_lga_31">Oluyole</option>
                                                    <option value="534" class="lga state_lga_31">Ona-Ara</option>
                                                    <option value="535" class="lga state_lga_31">Orelope</option>
                                                    <option value="536" class="lga state_lga_31">Ori Ire</option>
                                                    <option value="537" class="lga state_lga_31">Oyo East</option>
                                                    <option value="538" class="lga state_lga_31">Oyo West</option>
                                                    <option value="539" class="lga state_lga_31">Saki East</option>
                                                    <option value="540" class="lga state_lga_31">Saki West</option>
                                                    <option value="541" class="lga state_lga_31">Surulere</option>
                                                    <option value="542" class="lga state_lga_32">Barikin Ladi</option>
                                                    <option value="543" class="lga state_lga_32">Bassa</option>
                                                    <option value="544" class="lga state_lga_32">Bokkos</option>
                                                    <option value="545" class="lga state_lga_32">Jos East</option>
                                                    <option value="546" class="lga state_lga_32">Jos North</option>
                                                    <option value="547" class="lga state_lga_32">Jos South</option>
                                                    <option value="548" class="lga state_lga_32">Kanam</option>
                                                    <option value="549" class="lga state_lga_32">Kanke</option>
                                                    <option value="550" class="lga state_lga_32">Langtang North</option>
                                                    <option value="551" class="lga state_lga_32">Langtang South</option>
                                                    <option value="552" class="lga state_lga_32">Mangu</option>
                                                    <option value="553" class="lga state_lga_32">Mikang</option>
                                                    <option value="554" class="lga state_lga_32">Pankshin</option>
                                                    <option value="555" class="lga state_lga_32">Qua an Pan</option>
                                                    <option value="556" class="lga state_lga_32">Riyom</option>
                                                    <option value="557" class="lga state_lga_32">Shendam</option>
                                                    <option value="558" class="lga state_lga_32">Wase</option>
                                                    <option value="559" class="lga state_lga_33"> Oyigbo</option>
                                                    <option value="560" class="lga state_lga_33">Abua/Odual</option>
                                                    <option value="561" class="lga state_lga_33">Ahoada East</option>
                                                    <option value="562" class="lga state_lga_33">Ahoada West</option>
                                                    <option value="563" class="lga state_lga_33">Akuku Toru</option>
                                                    <option value="564" class="lga state_lga_33">Andoni</option>
                                                    <option value="565" class="lga state_lga_33">Asari-Toru</option>
                                                    <option value="566" class="lga state_lga_33">Bonny</option>
                                                    <option value="567" class="lga state_lga_33">Degema</option>
                                                    <option value="568" class="lga state_lga_33">Eleme</option>
                                                    <option value="569" class="lga state_lga_33">Emohua</option>
                                                    <option value="570" class="lga state_lga_33">Etche</option>
                                                    <option value="571" class="lga state_lga_33">Gokana</option>
                                                    <option value="572" class="lga state_lga_33">Ikwerre</option>
                                                    <option value="573" class="lga state_lga_33">Khana</option>
                                                    <option value="574" class="lga state_lga_33">Obia/Akpor</option>
                                                    <option value="575" class="lga state_lga_33">Ogba/Egbema/Ndoni
                                                    </option>
                                                    <option value="576" class="lga state_lga_33">Ogu/Bolo</option>
                                                    <option value="577" class="lga state_lga_33">Okrika</option>
                                                    <option value="578" class="lga state_lga_33">Omumma</option>
                                                    <option value="579" class="lga state_lga_33">Opobo/Nkoro</option>
                                                    <option value="580" class="lga state_lga_33">Port-Harcourt</option>
                                                    <option value="581" class="lga state_lga_33">Tai</option>
                                                    <option value="582" class="lga state_lga_34">Binji</option>
                                                    <option value="583" class="lga state_lga_34">Bodinga</option>
                                                    <option value="584" class="lga state_lga_34">Dange-shnsi</option>
                                                    <option value="585" class="lga state_lga_34">Gada</option>
                                                    <option value="586" class="lga state_lga_34">Gawabawa</option>
                                                    <option value="587" class="lga state_lga_34">Goronyo</option>
                                                    <option value="588" class="lga state_lga_34">Gudu</option>
                                                    <option value="589" class="lga state_lga_34">Illela</option>
                                                    <option value="590" class="lga state_lga_34">Isa</option>
                                                    <option value="591" class="lga state_lga_34">kebbe</option>
                                                    <option value="592" class="lga state_lga_34">Kware</option>
                                                    <option value="593" class="lga state_lga_34">Rabah</option>
                                                    <option value="594" class="lga state_lga_34">Sabon birni</option>
                                                    <option value="595" class="lga state_lga_34">Shagari</option>
                                                    <option value="596" class="lga state_lga_34">Silame</option>
                                                    <option value="597" class="lga state_lga_34">Sokoto North</option>
                                                    <option value="598" class="lga state_lga_34">Sokoto South</option>
                                                    <option value="599" class="lga state_lga_34">Tambuwal</option>
                                                    <option value="600" class="lga state_lga_34">Tqngaza</option>
                                                    <option value="601" class="lga state_lga_34">Tureta</option>
                                                    <option value="602" class="lga state_lga_34">Wamako</option>
                                                    <option value="603" class="lga state_lga_34">Wurno</option>
                                                    <option value="604" class="lga state_lga_34">Yabo</option>
                                                    <option value="605" class="lga state_lga_35">Ardo-kola</option>
                                                    <option value="606" class="lga state_lga_35">Bali</option>
                                                    <option value="607" class="lga state_lga_35">Cassol</option>
                                                    <option value="608" class="lga state_lga_35">Donga</option>
                                                    <option value="609" class="lga state_lga_35">Gashaka</option>
                                                    <option value="610" class="lga state_lga_35">Ibi</option>
                                                    <option value="611" class="lga state_lga_35">Jalingo</option>
                                                    <option value="612" class="lga state_lga_35">Karin-Lamido</option>
                                                    <option value="613" class="lga state_lga_35">Kurmi</option>
                                                    <option value="614" class="lga state_lga_35">Lau</option>
                                                    <option value="615" class="lga state_lga_35">Sardauna</option>
                                                    <option value="616" class="lga state_lga_35">Takum</option>
                                                    <option value="617" class="lga state_lga_35">Ussa</option>
                                                    <option value="618" class="lga state_lga_35">Wukari</option>
                                                    <option value="619" class="lga state_lga_35">Yorro</option>
                                                    <option value="620" class="lga state_lga_35">Zing</option>
                                                    <option value="621" class="lga state_lga_36">Bade</option>
                                                    <option value="622" class="lga state_lga_36">Bursari</option>
                                                    <option value="623" class="lga state_lga_36">Damaturu</option>
                                                    <option value="624" class="lga state_lga_36">Fika</option>
                                                    <option value="625" class="lga state_lga_36">Fune</option>
                                                    <option value="626" class="lga state_lga_36">Geidam</option>
                                                    <option value="627" class="lga state_lga_36">Gujba</option>
                                                    <option value="628" class="lga state_lga_36">Gulani</option>
                                                    <option value="629" class="lga state_lga_36">Jakusko</option>
                                                    <option value="630" class="lga state_lga_36">Karasuwa</option>
                                                    <option value="631" class="lga state_lga_36">Karawa</option>
                                                    <option value="632" class="lga state_lga_36">Machina</option>
                                                    <option value="633" class="lga state_lga_36">Nangere</option>
                                                    <option value="634" class="lga state_lga_36">Nguru Potiskum</option>
                                                    <option value="635" class="lga state_lga_36">Tarmua</option>
                                                    <option value="636" class="lga state_lga_36">Yunusari</option>
                                                    <option value="637" class="lga state_lga_36">Yusufari</option>
                                                    <option value="638" class="lga state_lga_37">Anka</option>
                                                    <option value="639" class="lga state_lga_37">Bakura</option>
                                                    <option value="640" class="lga state_lga_37">Birnin Magaji</option>
                                                    <option value="641" class="lga state_lga_37">Bukkuyum </option>
                                                    <option value="642" class="lga state_lga_37">Bungudu</option>
                                                    <option value="643" class="lga state_lga_37">Gummi</option>
                                                    <option value="644" class="lga state_lga_37">Gusau</option>
                                                    <option value="645" class="lga state_lga_37">Kaura</option>
                                                    <option value="646" class="lga state_lga_37">Maradun</option>
                                                    <option value="647" class="lga state_lga_37">Maru</option>
                                                    <option value="648" class="lga state_lga_37">Namoda</option>
                                                    <option value="649" class="lga state_lga_37">Shinkafi</option>
                                                    <option value="650" class="lga state_lga_37">Talata Mafara</option>
                                                    <option value="651" class="lga state_lga_37">Tsafe</option>
                                                    <option value="652" class="lga state_lga_37">Zurmi</option>
                                                    <option value="653" class="lga state_lga_15">Abaji</option>
                                                    <option value="654" class="lga state_lga_15">Abuja Municipal
                                                    </option>
                                                    <option value="655" class="lga state_lga_15">Bwari</option>
                                                    <option value="656" class="lga state_lga_15">Gwagwalada</option>
                                                    <option value="657" class="lga state_lga_15">Kuje</option>
                                                    <option value="658" class="lga state_lga_15">Kwali</option>
                                                    <option value="659" class="lga state_lga_4">Aguata</option>
                                                    <option value="660" class="lga state_lga_4">Anambra East</option>
                                                    <option value="661" class="lga state_lga_4">Anambra West</option>
                                                    <option value="662" class="lga state_lga_4">Anaocha</option>
                                                    <option value="663" class="lga state_lga_4">Awka North</option>
                                                    <option value="664" class="lga state_lga_4">Awka South</option>
                                                    <option value="665" class="lga state_lga_4">Ayamelum</option>
                                                    <option value="666" class="lga state_lga_4">Dunukofia</option>
                                                    <option value="667" class="lga state_lga_4">Ekwusigo</option>
                                                    <option value="668" class="lga state_lga_4">Idemili North</option>
                                                    <option value="669" class="lga state_lga_4">Idemili south</option>
                                                    <option value="670" class="lga state_lga_4">Ihiala</option>
                                                    <option value="671" class="lga state_lga_4">Njikoka</option>
                                                    <option value="672" class="lga state_lga_4">Nnewi North</option>
                                                    <option value="673" class="lga state_lga_4">Nnewi South</option>
                                                    <option value="674" class="lga state_lga_4">Ogbaru</option>
                                                    <option value="675" class="lga state_lga_4">Onitsha North</option>
                                                    <option value="676" class="lga state_lga_4">Onitsha South</option>
                                                    <option value="677" class="lga state_lga_4">Orumba North</option>
                                                    <option value="678" class="lga state_lga_4">Orumba South</option>
                                                    <option value="679" class="lga state_lga_4">Oyi</option>
                                                    <option value="680" class="lga state_lga_5">Alkaleri</option>
                                                    <option value="681" class="lga state_lga_5">Bauchi</option>
                                                    <option value="682" class="lga state_lga_5">Bogoro</option>
                                                    <option value="683" class="lga state_lga_5">Damban</option>
                                                    <option value="684" class="lga state_lga_5">Darazo</option>
                                                    <option value="685" class="lga state_lga_5">Dass</option>
                                                    <option value="686" class="lga state_lga_5">Ganjuwa</option>
                                                    <option value="687" class="lga state_lga_5">Giade</option>
                                                    <option value="688" class="lga state_lga_5">Itas/Gadau</option>
                                                    <option value="689" class="lga state_lga_5">Jama'are</option>
                                                    <option value="690" class="lga state_lga_5">Katagum</option>
                                                    <option value="691" class="lga state_lga_5">Kirfi</option>
                                                    <option value="692" class="lga state_lga_5">Misau</option>
                                                    <option value="693" class="lga state_lga_5">Ningi</option>
                                                    <option value="694" class="lga state_lga_5">Shira</option>
                                                    <option value="695" class="lga state_lga_5">Tafawa-Balewa</option>
                                                    <option value="696" class="lga state_lga_5">Toro</option>
                                                    <option value="697" class="lga state_lga_5">Warji</option>
                                                    <option value="698" class="lga state_lga_5">Zaki</option>
                                                    <option value="699" class="lga state_lga_6">Brass</option>
                                                    <option value="700" class="lga state_lga_6">Ekeremor</option>
                                                    <option value="701" class="lga state_lga_6">Kolokuma/Opokuma
                                                    </option>
                                                    <option value="702" class="lga state_lga_6">Nembe</option>
                                                    <option value="703" class="lga state_lga_6">Ogbia</option>
                                                    <option value="704" class="lga state_lga_6">Sagbama</option>
                                                    <option value="705" class="lga state_lga_6">Southern Jaw</option>
                                                    <option value="706" class="lga state_lga_6">Yenegoa</option>
                                                    <option value="707" class="lga state_lga_7">Ado</option>
                                                    <option value="708" class="lga state_lga_7">Agatu</option>
                                                    <option value="709" class="lga state_lga_7">Apa</option>
                                                    <option value="710" class="lga state_lga_7">Buruku</option>
                                                    <option value="711" class="lga state_lga_7">Gboko</option>
                                                    <option value="712" class="lga state_lga_7">Guma</option>
                                                    <option value="713" class="lga state_lga_7">Gwer East</option>
                                                    <option value="714" class="lga state_lga_7">Gwer West</option>
                                                    <option value="715" class="lga state_lga_7">Katsina-Ala</option>
                                                    <option value="716" class="lga state_lga_7">Konshisha</option>
                                                    <option value="717" class="lga state_lga_7">Kwande</option>
                                                    <option value="718" class="lga state_lga_7">Logo</option>
                                                    <option value="719" class="lga state_lga_7">Makurdi</option>
                                                    <option value="720" class="lga state_lga_7">Obi</option>
                                                    <option value="721" class="lga state_lga_7">Ogbadibo</option>
                                                    <option value="722" class="lga state_lga_7">Ohimini</option>
                                                    <option value="723" class="lga state_lga_7">Oju</option>
                                                    <option value="724" class="lga state_lga_7">Okpokwu</option>
                                                    <option value="725" class="lga state_lga_7">Oturkpo</option>
                                                    <option value="726" class="lga state_lga_7">Tarka</option>
                                                    <option value="727" class="lga state_lga_7">Ukum</option>
                                                    <option value="728" class="lga state_lga_7">Ushongo</option>
                                                    <option value="729" class="lga state_lga_7">Vandeikya</option>
                                                    <option value="730" class="lga state_lga_8">Abadam</option>
                                                    <option value="731" class="lga state_lga_8">Askira/Uba</option>
                                                    <option value="732" class="lga state_lga_8">Bama</option>
                                                    <option value="733" class="lga state_lga_8">Bayo</option>
                                                    <option value="734" class="lga state_lga_8">Biu</option>
                                                    <option value="735" class="lga state_lga_8">Chibok</option>
                                                    <option value="736" class="lga state_lga_8">Damboa</option>
                                                    <option value="737" class="lga state_lga_8">Dikwa</option>
                                                    <option value="738" class="lga state_lga_8">Gubio</option>
                                                    <option value="739" class="lga state_lga_8">Guzamala</option>
                                                    <option value="740" class="lga state_lga_8">Gwoza</option>
                                                    <option value="741" class="lga state_lga_8">Hawul</option>
                                                    <option value="742" class="lga state_lga_8">Jere</option>
                                                    <option value="743" class="lga state_lga_8">Kaga</option>
                                                    <option value="744" class="lga state_lga_8">Kala/Balge</option>
                                                    <option value="745" class="lga state_lga_8">Konduga</option>
                                                    <option value="746" class="lga state_lga_8">Kukawa</option>
                                                    <option value="747" class="lga state_lga_8">Kwaya Kusar</option>
                                                    <option value="748" class="lga state_lga_8">Mafa</option>
                                                    <option value="749" class="lga state_lga_8">Magumeri</option>
                                                    <option value="750" class="lga state_lga_8">Maiduguri</option>
                                                    <option value="751" class="lga state_lga_8">Marte</option>
                                                    <option value="752" class="lga state_lga_8">Mobbar</option>
                                                    <option value="753" class="lga state_lga_8">Monguno</option>
                                                    <option value="754" class="lga state_lga_8">Ngala</option>
                                                    <option value="755" class="lga state_lga_8">Nganzai</option>
                                                    <option value="756" class="lga state_lga_8">Shani</option>
                                                    <option value="757" class="lga state_lga_9">Abi</option>
                                                    <option value="758" class="lga state_lga_9">Akamkpa</option>
                                                    <option value="759" class="lga state_lga_9">Akpabuyo</option>
                                                    <option value="760" class="lga state_lga_9">Bakassi</option>
                                                    <option value="761" class="lga state_lga_9">Bekwara</option>
                                                    <option value="762" class="lga state_lga_9">Biase</option>
                                                    <option value="763" class="lga state_lga_9">Boki</option>
                                                    <option value="764" class="lga state_lga_9">Calabar Municipality
                                                    </option>
                                                    <option value="765" class="lga state_lga_9">Calabar South</option>
                                                    <option value="766" class="lga state_lga_9">Etung</option>
                                                    <option value="767" class="lga state_lga_9">Ikom</option>
                                                    <option value="768" class="lga state_lga_9">Obanliku</option>
                                                    <option value="769" class="lga state_lga_9">Obubra</option>
                                                    <option value="770" class="lga state_lga_9">Obudu</option>
                                                    <option value="771" class="lga state_lga_9">Odukpani</option>
                                                    <option value="772" class="lga state_lga_9">Ogoja</option>
                                                    <option value="773" class="lga state_lga_9">Yala</option>
                                                    <option value="774" class="lga state_lga_9">Yarkur</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 option house">
                                            <div class="form-group">
                                                <label>Select House: </label>

                                                <select name="house" class="custom-select form-control select2"
                                                    style="width: 100%">
                                                    <option value=""></option>
                                                    <option value=1>ALPHA</option>
                                                    <option value=2>Beta</option>
                                                    <option value=3>Gamma</option>
                                                    <option value=4>Phyle</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2 option age">
                                            <div class="form-group">
                                                <label for="age-from">Select Range :</label>
                                                <p>From
                                                    <input name="age_from" type="number" min="7" max="30" id="age-from"
                                                        class="form-control"> To
                                                    <input name="age_to" type="number" min="7" max="31" id="age-to"
                                                        class="form-control">
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4 option res">
                                            <div class="form-group">
                                                <label>Select Residence Type :</label>
                                                <select name="res" class="custom-select form-control select2">
                                                    <option value=""></option>
                                                    <option value=1>Day student</option>
                                                    <option value=2>Boarder</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 option religion">
                                            <div class="form-group">
                                                <label>Select Religion:</label>
                                                <select name="religion" class="custom-select form-control select2">
                                                    <option value=""></option>
                                                    <option value=1>Christianity</option>
                                                    <option value=2>Islam</option>
                                                    <option value=3>Others</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" name="print" value="">
                                                <input type="submit" name="submit" value="Submit"
                                                    class="btn btn-primary btn-rounded">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="student-list-table"></div>

                                <form action="student/student-list-print" target="_blank" method="post"
                                    accept-charset="utf-8">
                                    <textarea style="display: none" name="student_list_json" id="slj"></textarea>
                                    <input type="hidden" name="heading" id="hd" value="">
                                    <button type="submit" class="btn btn-primary btn-rounded"
                                        style="float: right; display: none" id="print-pdf">Print pdf</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function () {

                        $('#filter-by').change(function () {
                            var val = $(this).val();
                            if (val) {
                                $('.option').hide();
                                $('.' + val).show(500);
                            }
                        });

                        $('#state').change(function () {
                            var val = $(this).val();
                            if (val) {
                                $('.lga').hide();
                                $('#lga').val('all');
                                $('#lga option:selected').text('All');
                                $('.state_lga_' + val).show();
                            }
                        });

                        $('#age-from').change(function () {
                            var val = $(this).val();
                            $('#age-to').val('');
                            $('#age-to').attr('min', ++val);
                        });

                        $('#student-list').submit(function (e) {
                            e.preventDefault();
                            student_list();
                        });

                        $(document).on('click', '#print-pdf', function (e) {
                            var json_data = $('#json_data').val();
                            var heading = $('#head').val();
                            $('#slj').val(json_data);
                            $('#hd').val(heading);
                        });
                    });

                </script><!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                    © 2018 School Information Management System (MySkool Portal) by <a
                        href="https://krystaldigitalng.com" target="_blank">KRYSTAL DIGITAL SOLUTIONS</a>
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
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <?php include('../layout/script.php')?>
</body>

</html>