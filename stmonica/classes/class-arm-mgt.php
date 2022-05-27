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
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Class Arm List</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Manage class arm</li>
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
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered color-table success-table stylish-table" width="100%">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Class Arm</th>
                                                <th>Students</th>


                                                <th>Class Teacher</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td class="sn">1</td>
                                            <td>
                                                <a href="classes/manage-students/e01ac7d6138b318c6d/f578ad0414d67611b" target="_blank" class="text-info">
                                                    JSS 1A </a>
                                            </td>
                                            <td>46</td>


                                            <td>

                                                <a href="staff/staff-profile/6b217d4e2f544c640">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Nnamdi Francis </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">2</td>
                                            <td>
                                                <a href="classes/manage-students/d4048d1413b27cc7ac/bb1037392f9b0cb9d" target="_blank" class="text-info">
                                                    JSS 1B </a>
                                            </td>
                                            <td>46</td>


                                            <td>

                                                <a href="staff/staff-profile/d7a6a4b12b6778c46">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Nnamdi Francis </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">3</td>
                                            <td>
                                                <a href="classes/manage-students/1db2a00913fb5b86a9/dd497c1f3d0b80597" target="_blank" class="text-info">
                                                    JSS 1C </a>
                                            </td>
                                            <td>46</td>


                                            <td>

                                                <a href="staff/staff-profile/b6f419ea2319a0b5d">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Nnamdi Francis </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">4</td>
                                            <td>
                                                <a href="classes/manage-students/7d60775a13acf8ff55/bf8c1aa24ddc916ea" target="_blank" class="text-info">
                                                    JSS 1D </a>
                                            </td>
                                            <td>43</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">5</td>
                                            <td>
                                                <a href="classes/manage-students/c8bfdc491354e00767/67e3969c591589b17" target="_blank" class="text-info">
                                                    JSS 1E </a>
                                            </td>
                                            <td>46</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">6</td>
                                            <td>
                                                <a href="classes/manage-students/718a65e413440bf379/112e4c3f668bf7c60" target="_blank" class="text-info">
                                                    JSS 1G </a>
                                            </td>
                                            <td>45</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">7</td>
                                            <td>
                                                <a href="classes/manage-students/efe0535813d00eed58/4c9bc1d17fc2c06c0" target="_blank" class="text-info">
                                                    JSS 1H </a>
                                            </td>
                                            <td>44</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">8</td>
                                            <td>
                                                <a href="classes/manage-students/6a15a1c11300d68d59/ebdaa919805cca213" target="_blank" class="text-info">
                                                    JSS 1J </a>
                                            </td>
                                            <td>43</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">9</td>
                                            <td>
                                                <a href="classes/manage-students/53385ac2137719f5b5/18677b2b92280b5a7" target="_blank" class="text-info">
                                                    JSS 1K </a>
                                            </td>
                                            <td>43</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">10</td>
                                            <td>
                                                <a href="classes/manage-students/fc08fd8b13d53cb155/a2a338d2103742a950" target="_blank" class="text-info">
                                                    JSS 2A </a>
                                            </td>
                                            <td>48</td>


                                            <td>

                                                <a href="staff/staff-profile/d308680e2b9fa50ac">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Nnamdi Francis </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">11</td>
                                            <td>
                                                <a href="classes/manage-students/7f953cdb130000104c/ce99558d11c9f87ab4" target="_blank" class="text-info">
                                                    JSS 2B </a>
                                            </td>
                                            <td>53</td>


                                            <td>

                                                <a href="staff/staff-profile/c54132b4287ec5d67">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Nnamdi Francis </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">12</td>
                                            <td>
                                                <a href="classes/manage-students/37a03ff613a41a65f4/2e7f0a2812756b6c48" target="_blank" class="text-info">
                                                    JSS 2C </a>
                                            </td>
                                            <td>51</td>


                                            <td>

                                                <a href="staff/staff-profile/faebf21f283fc2cc3">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Nnamdi Francis </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">13</td>
                                            <td>
                                                <a href="classes/manage-students/e8a9615b13db69dc24/c3d7e5ad1380469962" target="_blank" class="text-info">
                                                    JSS 2D </a>
                                            </td>
                                            <td>52</td>


                                            <td>

                                                <a href="staff/staff-profile/7bd3dbc028dd06f0a">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Nnamdi Francis </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">14</td>
                                            <td>
                                                <a href="classes/manage-students/b8531f5d13e7ba46d5/83a63e5114357e2326" target="_blank" class="text-info">
                                                    JSS 2E </a>
                                            </td>
                                            <td>56</td>


                                            <td>

                                                <a href="staff/staff-profile/a82fd7262eacd41cc">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Nnamdi Francis </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">15</td>
                                            <td>
                                                <a href="classes/manage-students/6e26fdd213fe7f4573/e4d09a7a15a77abc82" target="_blank" class="text-info">
                                                    JSS 2G </a>
                                            </td>
                                            <td>51</td>


                                            <td>

                                                <a href="staff/staff-profile/b425dbb522465d43f">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Nnamdi Francis </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">16</td>
                                            <td>
                                                <a href="classes/manage-students/efcfbc3a13f1ebd2dd/cb83058316560b3bf3" target="_blank" class="text-info">
                                                    JSS 2H </a>
                                            </td>
                                            <td>49</td>


                                            <td>

                                                <a href="staff/staff-profile/2c24e56929b3e9727">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Nnamdi Francis </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">17</td>
                                            <td>
                                                <a href="classes/manage-students/b2eb1e9313098de853/3d8b89f01771e2c4d3" target="_blank" class="text-info">
                                                    JSS 2J </a>
                                            </td>
                                            <td>46</td>


                                            <td>

                                                <a href="staff/staff-profile/6f8ff2702617e1936">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Nnamdi Francis </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">18</td>
                                            <td>
                                                <a href="classes/manage-students/a1938933139214a3b6/2e35f7d718024fed55" target="_blank" class="text-info">
                                                    JSS 2K </a>
                                            </td>
                                            <td>26</td>


                                            <td>

                                                <a href="staff/staff-profile/d55ed0032b1944794">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Nnamdi Francis </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">19</td>
                                            <td>
                                                <a href="classes/manage-students/64e40c7413c00469fd/a90d04ec4659c582d8" target="_blank" class="text-info">
                                                    JSS 3A </a>
                                            </td>
                                            <td>56</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">20</td>
                                            <td>
                                                <a href="classes/manage-students/0682bf2113f8baefed/bf3fb8c047607e4a82" target="_blank" class="text-info">
                                                    JSS 3B </a>
                                            </td>
                                            <td>59</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">21</td>
                                            <td>
                                                <a href="classes/manage-students/bce8403d137edcc5cd/f9d214fd48a49fb715" target="_blank" class="text-info">
                                                    JSS 3C </a>
                                            </td>
                                            <td>58</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">22</td>
                                            <td>
                                                <a href="classes/manage-students/9f014aa5138562379d/60ad9c5949f274e3eb" target="_blank" class="text-info">
                                                    JSS 3D </a>
                                            </td>
                                            <td>61</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">23</td>
                                            <td>
                                                <a href="classes/manage-students/3b621bcc137f02820f/17e666a5506b5f30bf" target="_blank" class="text-info">
                                                    JSS 3E </a>
                                            </td>
                                            <td>61</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">24</td>
                                            <td>
                                                <a href="classes/manage-students/4fc266f4139c669207/76d9b3565114796874" target="_blank" class="text-info">
                                                    JSS 3G </a>
                                            </td>
                                            <td>59</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">25</td>
                                            <td>
                                                <a href="classes/manage-students/6e87bfc51383184ea4/521eff1552dc9c5e72" target="_blank" class="text-info">
                                                    JSS 3H </a>
                                            </td>
                                            <td>57</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">26</td>
                                            <td>
                                                <a href="classes/manage-students/88a93d92135a222c8f/00287d4953fce482f4" target="_blank" class="text-info">
                                                    JSS 3J </a>
                                            </td>
                                            <td>59</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">27</td>
                                            <td>
                                                <a href="classes/manage-students/9f5b825113c96986f0/e7784b7954da4a4866" target="_blank" class="text-info">
                                                    JSS 3K </a>
                                            </td>
                                            <td>56</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">28</td>
                                            <td>
                                                <a href="classes/manage-students/eb65e37a13430c6f42/7fc63ff01954ece503" target="_blank" class="text-info">
                                                    SS 1A </a>
                                            </td>
                                            <td>62</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">29</td>
                                            <td>
                                                <a href="classes/manage-students/6f48294f13634f33a5/7f9e6b4320d798fbaf" target="_blank" class="text-info">
                                                    SS 1B </a>
                                            </td>
                                            <td>71</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">30</td>
                                            <td>
                                                <a href="classes/manage-students/4de68cef1380e5b5b5/118831ba55da6eebe2" target="_blank" class="text-info">
                                                    SS 1BECE </a>
                                            </td>
                                            <td>0</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                                <a href="classes/class-arm-delete/bdd84f1855fe61d639" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light class-arm-del" title="Delete this class arm" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">31</td>
                                            <td>
                                                <a href="classes/manage-students/cb04e511138d46a42a/bbeb8a1e21d5ae2af2" target="_blank" class="text-info">
                                                    SS 1C </a>
                                            </td>
                                            <td>61</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">32</td>
                                            <td>
                                                <a href="classes/manage-students/584674561362cf2bc5/3c1271f42282700d04" target="_blank" class="text-info">
                                                    SS 1D </a>
                                            </td>
                                            <td>59</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">33</td>
                                            <td>
                                                <a href="classes/manage-students/e6644ffb13eed44561/878c7bc323ad88f3c2" target="_blank" class="text-info">
                                                    SS 1E </a>
                                            </td>
                                            <td>63</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">34</td>
                                            <td>
                                                <a href="classes/manage-students/4aebf9b71377130e6f/98d2926224dc0a565d" target="_blank" class="text-info">
                                                    SS 1G </a>
                                            </td>
                                            <td>50</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">35</td>
                                            <td>
                                                <a href="classes/manage-students/0e2edf07131321fd24/f9dde1a925767b59c4" target="_blank" class="text-info">
                                                    SS 1H </a>
                                            </td>
                                            <td>51</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">36</td>
                                            <td>
                                                <a href="classes/manage-students/74409965132f13d4dd/a1e49f3d260d139cdd" target="_blank" class="text-info">
                                                    SS 1J </a>
                                            </td>
                                            <td>48</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">37</td>
                                            <td>
                                                <a href="classes/manage-students/604be4c2131ed6e1f3/f6b730ea27518bd355" target="_blank" class="text-info">
                                                    SS 1K </a>
                                            </td>
                                            <td>48</td>


                                            <td>
                                                <span class="label label-light-danger">unassigned</span>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">38</td>
                                            <td>
                                                <a href="classes/manage-students/7e1efb7413d26b908b/20d50efc281067ab98" target="_blank" class="text-info">
                                                    SS 2A </a>
                                            </td>
                                            <td>0</td>


                                            <td>

                                                <a href="staff/staff-profile/af376b8e139445f78">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Fawole John Oluwaseyi </a>
                                            </td>
                                            <td>
                                                <a href="classes/class-arm-delete/4a16086828f36f6b4c" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light class-arm-del" title="Delete this class arm" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">39</td>
                                            <td>
                                                <a href="classes/manage-students/fc5e0f4f13e948a7c3/e2b27e1e291958e441" target="_blank" class="text-info">
                                                    SS 2B </a>
                                            </td>
                                            <td>47</td>


                                            <td>

                                                <a href="staff/staff-profile/49fc79311a72dddf8">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Fawole John Oluwaseyi </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">40</td>
                                            <td>
                                                <a href="classes/manage-students/c12c0a5f134e98e4c0/e930fee130ccb27821" target="_blank" class="text-info">
                                                    SS 2C </a>
                                            </td>
                                            <td>44</td>


                                            <td>

                                                <a href="staff/staff-profile/979257141f844fed1">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Fawole John Oluwaseyi </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">41</td>
                                            <td>
                                                <a href="classes/manage-students/1d59d29e1359a03afa/416611a33117a3f857" target="_blank" class="text-info">
                                                    SS 2D </a>
                                            </td>
                                            <td>47</td>


                                            <td>

                                                <a href="staff/staff-profile/a5426add16e54e9d8">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Fawole John Oluwaseyi </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">42</td>
                                            <td>
                                                <a href="classes/manage-students/8507779613996e38c6/ea4cd28832517715e6" target="_blank" class="text-info">
                                                    SS 2E </a>
                                            </td>
                                            <td>45</td>


                                            <td>

                                                <a href="staff/staff-profile/1132bd951a768f844">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Fawole John Oluwaseyi </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">43</td>
                                            <td>
                                                <a href="classes/manage-students/4749c422137656f3bd/fa298b7333cc7f133e" target="_blank" class="text-info">
                                                    SS 2G </a>
                                            </td>
                                            <td>19</td>


                                            <td>

                                                <a href="staff/staff-profile/cdf506a51d85da57c">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Fawole John Oluwaseyi </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">44</td>
                                            <td>
                                                <a href="classes/manage-students/b520f58c138528eb3a/4f759bb434f68c606a" target="_blank" class="text-info">
                                                    SS 2H </a>
                                            </td>
                                            <td>30</td>


                                            <td>

                                                <a href="staff/staff-profile/81cf802d1e6c0a536">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Fawole John Oluwaseyi </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">45</td>
                                            <td>
                                                <a href="classes/manage-students/0e4c0f0d1384718033/d7de036e35bb913513" target="_blank" class="text-info">
                                                    SS 2J </a>
                                            </td>
                                            <td>48</td>


                                            <td>

                                                <a href="staff/staff-profile/087113cc1f7a30e1e">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Fawole John Oluwaseyi </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">46</td>
                                            <td>
                                                <a href="classes/manage-students/dfbe8dc1135ff7267d/39f94bc336dbc47b8c" target="_blank" class="text-info">
                                                    SS 2K </a>
                                            </td>
                                            <td>49</td>


                                            <td>

                                                <a href="staff/staff-profile/9df12205100c9e3ef">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Fawole John Oluwaseyi </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">47</td>
                                            <td>
                                                <a href="classes/manage-students/1110f32b132ab06089/72ceb20b37a07f931f" target="_blank" class="text-info">
                                                    SS 3A </a>
                                            </td>
                                            <td>46</td>


                                            <td>

                                                <a href="staff/staff-profile/fd49ef804615944b1">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Henry Ebuka </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">48</td>
                                            <td>
                                                <a href="classes/manage-students/63cc66f613553fc958/4fd2e09038d34eec9d" target="_blank" class="text-info">
                                                    SS 3B </a>
                                            </td>
                                            <td>0</td>


                                            <td>

                                                <a href="staff/staff-profile/9a3864634a45045ac">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Henry Ebuka </a>
                                            </td>
                                            <td>
                                                <a href="classes/class-arm-delete/c410d0053849264b31" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light class-arm-del" title="Delete this class arm" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">49</td>
                                            <td>
                                                <a href="classes/manage-students/7a0b2438139bd312d9/2bf510c939c4601272" target="_blank" class="text-info">
                                                    SS 3C </a>
                                            </td>
                                            <td>0</td>


                                            <td>

                                                <a href="staff/staff-profile/a5de88e04a1e981c8">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Henry Ebuka </a>
                                            </td>
                                            <td>
                                                <a href="classes/class-arm-delete/91eea4e639aa1c7316" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light class-arm-del" title="Delete this class arm" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">50</td>
                                            <td>
                                                <a href="classes/manage-students/eedb5739138e5898d0/35e0a11b40986c0297" target="_blank" class="text-info">
                                                    SS 3D </a>
                                            </td>
                                            <td>0</td>


                                            <td>

                                                <a href="staff/staff-profile/0d82627e44d068510">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Henry Ebuka </a>
                                            </td>
                                            <td>
                                                <a href="classes/class-arm-delete/6b65f8db40cf29202f" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light class-arm-del" title="Delete this class arm" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">51</td>
                                            <td>
                                                <a href="classes/manage-students/55cf505b1304ca9f99/edc51d7141dc3fbc23" target="_blank" class="text-info">
                                                    SS 3E </a>
                                            </td>
                                            <td>0</td>


                                            <td>

                                                <a href="staff/staff-profile/ec88121d4932df95c">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Henry Ebuka </a>
                                            </td>
                                            <td>
                                                <a href="classes/class-arm-delete/47ce850b41f6b7ba44" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light class-arm-del" title="Delete this class arm" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">52</td>
                                            <td>
                                                <a href="classes/manage-students/e48f8ca213c7d40bec/01ecf37342aeb0012d" target="_blank" class="text-info">
                                                    SS 3G </a>
                                            </td>
                                            <td>0</td>


                                            <td>

                                                <a href="staff/staff-profile/61e67c4749116a0e3">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Henry Ebuka </a>
                                            </td>
                                            <td>
                                                <a href="classes/class-arm-delete/94662e9442e107943b" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light class-arm-del" title="Delete this class arm" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">53</td>
                                            <td>
                                                <a href="classes/manage-students/2432e3aa13bbd30950/be4c635143ba043732" target="_blank" class="text-info">
                                                    SS 3H </a>
                                            </td>
                                            <td>0</td>


                                            <td>

                                                <a href="staff/staff-profile/786d2f3c4780a9389">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Henry Ebuka </a>
                                            </td>
                                            <td>
                                                <a href="classes/class-arm-delete/72d6fb5243858d2b20" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light class-arm-del" title="Delete this class arm" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">54</td>
                                            <td>
                                                <a href="classes/manage-students/ad3abb6613599be570/712fef85443fde188f" target="_blank" class="text-info">
                                                    SS 3J </a>
                                            </td>
                                            <td>0</td>


                                            <td>

                                                <a href="staff/staff-profile/0eabf75948f24b94f">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Henry Ebuka </a>
                                            </td>
                                            <td>
                                                <a href="classes/class-arm-delete/230b28a644d29b1e4d" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light class-arm-del" title="Delete this class arm" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">55</td>
                                            <td>
                                                <a href="classes/manage-students/d7e61b321330183f17/f2091d5e45a3de2d75" target="_blank" class="text-info">
                                                    SS 3K </a>
                                            </td>
                                            <td>0</td>


                                            <td>

                                                <a href="staff/staff-profile/acc70b4a4fd0b4216">

                                                    <img src="uploads/nobody_m.jpg" width="40" class="img-circle" />
                                                    Obinozie Henry Ebuka </a>
                                            </td>
                                            <td>
                                                <a href="classes/class-arm-delete/8a730010452d0a05fb" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light class-arm-del" title="Delete this class arm" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    //===== Run when user attempts to delete a grade ==============
                    $('.class-arm-del').click(function(e) {
                        e.preventDefault();
                        var a = $(this);
                        var url = a.attr('href');
                        swal({
                            title: "Are you sure?",
                            text: "Your action will delete this Class Arm completely. \n The class teacher will also be automatically unassigned! \n Are you sure want to do this??",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function() {
                            var xhr = get_request(url);
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    a.parent().parent().fadeOut(2000, function() {
                                        $(this).remove();
                                        $('.sn').each(function(i) {
                                            $(this).text(i + 1);
                                        });
                                    });
                                }
                            });
                        });
                    });
                    //====================================================================
                </script><!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                   &copy; <?php echo date('Y'); ?> School Database Management System (Edu-Portal) Powered By <a href="https://binozydigital.com" target="_blank">BiNoZy DiGiTaL KoNcEpT</a>
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
        <?php include('../layout/script.php') ?>
</body>

</html>
