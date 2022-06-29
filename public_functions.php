<?php
error_reporting(E_ALL);
class sms_engine
{
    // Database conection
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $database = 'dbms';

    public function get_teach_class_allocation($staffid)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT  
            teacher_allocation.classarm_id
        ,       class_name as class_name
        ,       arm_name as arm_name
        ,       teacher_id as teacher_id
        FROM teacher_allocation
            RIGHT JOIN classarm ON teacher_allocation.classarm_id = classarm.classarm_id
            LEFT JOIN class ON `classarm`.`class_id` = class.id
            RIGHT JOIN arm ON classarm.arm_id = arm.arm_id
            WHERE `teacher_allocation`.`teacher_id` = '$staffid'";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $class_id = $row['classarm_id'];
                $name = $row['class_name'] . ' ' . $row['arm_name'];
                echo '<a href="../classes/manage-student.php?class_id=' . $class_id . '" class="text-info">' . $name . '</a>,';
            }
        } else {
            echo '<a href="#" class="text-info">Not found</a>,';
        }
    }




    public function get_grade_select()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `grade` ";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['grade_id'];
                $name = $row['grade_name'];
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }
    public function get_class_select()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `class` ";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $name = $row['class_name'];
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }
    public function get_department_select()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `department` ";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['d_id'];
                $name = $row['department_name'];
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }


    public function get_arm_select()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM arm";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['arm_id'];
                $name = $row['arm_name'];
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }

    public function get_sporthouse_select()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM sport_house";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $name = $row['house_name'];
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }


    public function global_schoolyear_select()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LEFT JOIN schoolyear ON session_id = schoolyear.id LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_session = $row['school_year'];
                return $global_school_session;
            }
        }
    }
    public function get_schoolyear_select()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM schoolyear";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $school_year = $row['school_year'];
                echo '<option value="' . $id . '">' . $school_year . '</option>';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }


    public function get_staff_subject_select($staff_department_id)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM subject WHERE department_id = $staff_department_id";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $name = $row['subject_name'];
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }
    public function get_subject_select()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM subject";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $name = $row['subject_name'];
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }
    public function get_classarm_select()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT class.*,classarm.*,arm.* FROM class 
        JOIN classarm
            ON class.id=classarm.class_id
        JOIN arm
            ON classarm.arm_id=arm.arm_id
        WHERE class.id Is NOT NULL ORDER BY classarm.class_id, classarm.arm_id 
";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $class_arm = $row['classarm_id'];
                $id = $row['class_name'];
                $name = $row['arm_name'];
                echo '<option value="' . $class_arm . '">' . $id . ' ' . $name . '</option>';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }


    public function get_classarmteachers()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT  student_id as student_id
       ,       classarm.class_id
       ,       classarm.arm_id
       ,       staff.photo
       ,       class_arm_id as class_arm_id
       ,       class_name as class_name
       ,       arm_name as arm_name
       ,       Count(enroll.student_id) AS count_of_student
       FROM enroll
           LEFT JOIN class ON class_id = class.id
           LEFT JOIN arm ON arm_id = arm.arm_id
           RIGHT JOIN classarm ON class_arm_id = classarm.classarm_id
           RIGHT JOIN teacher_allocation ON class_arm_id = teacher_allocation.classarm_id
           RIGHT JOIN staff ON staff.id = teacher_allocation.teacher_id
       GROUP BY `class`.`id`";
        $query = mysqli_query($db, $sql) or die(mysqli_error($db));
        $count = mysqli_num_rows($query);
        $counter = 0;
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {

                $class_numeric = $row['count_of_student'];
                $class_id = $row['class_arm_id'];
                $name = $row['class_name'] . ' ' . $row['arm_name'];
                $per = $row['photo'];
                echo '<tr>
                <td class="sn">' . ++$counter . '</td>
                <td>
                    <a href="../classes/manage-student.php?class_id=' . $class_id . '" target="_blank" class="text-info">
                    
                    ' . $name . '</a>
                </td>
                <td>' . $class_numeric . '</td>


                <td>

                    <a href="staff/staff-profile/6b217d4e2f544c640">

                        <img src="../uploads/' . $per . '" width="40" class="img-circle" />
                        Teachers Name </a>
                </td>
                <td>
                </td>
            </tr>

';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }
    public function get_classnumeric()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT  student_id as student_id
       ,       class_id as class_id
       ,       class_arm_id as class_arm_id
       ,       class_name as class_name
       ,       Count(student_id) AS count_of_student
       ,(COUNT( * ) / ( SELECT COUNT( student_id ) FROM enroll ) * 100) AS percentage
       FROM enroll
           LEFT JOIN class ON class_id = class.id
       GROUP BY `class`.`id`";
        $query = mysqli_query($db, $sql) or die(mysqli_error($db));
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {

                $class_numeric = $row['count_of_student'];
                $name = $row['class_name'];
                $per = $row['percentage'];
                echo '<tr>
               <td>' . $name . '</td>
               <td class="center">' . $class_numeric . '</td>
               <td width="50%">
                   <div class="progress">
                       <div class="progress-bar bg-danger active progress-bar-striped" style="width: ' . round($per) . '%; height:14px;" role="progressbar">' . round($per) . '%</div>
                   </div>
               </td>
               <td>
                   <a href="classes/class-data-completion.php?class_id=' . $row['class_id'] . '&classarm_id=' . $row['class_arm_id'] . '" target="_blank" class="btn btn-success btn-sm btn-rounded waves-effect waves-light">See details
                   </a>
               </td>
           </tr>
';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }

    public function get_classarmnumeric($class_id)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT student_id as student_id
        ,       class_name as class_name
        ,       class_arm_id as class_arm_id
        ,       arm_name as arm_name
        ,       Count(student_id) AS count_of_student
        FROM enroll
            LEFT JOIN class ON class_id = class.id
            LEFT JOIN arm ON arm_id = arm_id
            LEFT JOIN classarm ON class_arm_id = classarm_id
            WHERE class.id = '$class_id' AND classarm.arm_id = arm.arm_id
        GROUP BY `class`.`class_name`,`arm`.`arm_name`,`arm`.`arm_id`
        ORDER BY arm.arm_name ASC
        ";
        $query = mysqli_query($db, $sql) or die(mysqli_error($db));
        $count = mysqli_num_rows($query);
        if ($count == true) {
            $counter = 0;
            while ($row = mysqli_fetch_array($query)) {

                $class_numeric = $row['count_of_student'];
                $name = $row['class_name'] . ' ' . $row['arm_name'];
                $per = 0;
                if ($class_numeric > 10) {
                    $per = 50;
                } else {
                    $per = 50;
                }
                echo '
                <tr>
                                                <td>' . ++$counter . '</td>
                                                <td>' . $name . '</td>
                                                <td>' . $class_numeric . '</td>
                                                <td width="60%">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger active progress-bar-striped" style="width: 0%; height:14px;" role="progressbar">0%
                   </div>
                                                    </div>
        </td>
                                                <td width="15%">
               <a href="class-arm-data-completion.php?classarm_id=' . $row['class_arm_id'] . '&class_id=' . $class_id . '" class="btn btn-success btn-sm btn-rounded waves-effect waves-light">See
                   details
                                                    </a>
                                                </td>
                                            </tr>
';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }



    public function get_regno()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $query = "SELECT student_id FROM enroll ORDER BY student_id DESC";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);
        $lastid = $row['student_id'] ?? null;
        if (empty($lastid)) {
            $number = "STM0000001";
            echo '<input type="text" name="school[admission_no]" class="form-control" value="' . $number . '" placeholder="" readonly/>';
        } else {
            $idd = str_replace("E-", "", $lastid);
            $id = str_pad($idd + 1, 7, 0, STR_PAD_LEFT);
            $number = 'STM' . $id;
            echo '<input type="text" name="school[admission_no]" class="form-control" value="' . $number . '" placeholder="" readonly/>';
        }
    }









    public function add_school_info(
        $school_name,
        $short_name,
        $school_code,
        $footer_text,
        $established,
        $gender,
        $session_id,
        $mobileno,
        $mobileno2,
        $email1,
        $email2,
        $site_keyword,
        $site_desc,
        $address1,
        $address2,
        $logo,
        $princ_sign
    ) {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $check = 'SELECT * FROM `global_settings`';
        $comp = mysqli_query($db, $check) or die(mysqli_error($db));
        if ($comp == true) {
            if (empty($logo) && empty($princ_sign)) {
                $sql = 'UPDATE `global_settings` SET `school_name`="' . $school_name . '",`short_name`="' . $short_name . '",`session_id`="' . $session_id . '",`institution_code`="' . $school_code . '",`institute_email`="' . $email1 . '",`institute_email2`="' . $email2 . '",`address`="' . $address1 . '",`address2`="' . $email2 . '",`mobileno`="' . $mobileno . '",`mobileno2`="' . $mobileno2 . '",`site_keyword`="' . $site_keyword . '",`site_desc`="' . $site_desc . '",`footer_text`="' . $footer_text . '",`established`="' . $established . '",`gender`="' . $gender . '"';
                $query = mysqli_query($db, $sql) or die(mysqli_error($db));
                if ($query == true) {
                    echo "<script>alert('saved')
    history.back()</script>";
                    return true;
                } else {
                    return false;
                }
            } elseif (empty($logo) && !empty($princ_sign)) {
                $sql = 'UPDATE `global_settings` SET `school_name`="' . $school_name . '",`short_name`="' . $short_name . '",`session_id`="' . $session_id . '",`institution_code`="' . $school_code . '",`institute_email`="' . $email1 . '",`institute_email2`="' . $email2 . '",`address`="' . $address1 . '",`address2`="' . $email2 . '",`mobileno`="' . $mobileno . '",`mobileno2`="' . $mobileno2 . '",`site_keyword`="' . $site_keyword . '",`site_desc`="' . $site_desc . '",`footer_text`="' . $footer_text . '",`principal_sign`="' . $princ_sign . '",`established`="' . $established . '",`gender`="' . $gender . '"';
                $query = mysqli_query($db, $sql) or die(mysqli_error($db));
                if ($query == true) {
                    echo "<script>alert('saved')
    history.back()</script>";
                    // echo $session_id . ' ' . $princ_sign;
                    return true;
                } else {
                    return false;
                }
            } elseif (empty($princ_sign) && !empty($logo)) {
                $sql = 'UPDATE `global_settings` SET `school_name`="' . $school_name . '",`short_name`="' . $short_name . '",`session_id`="' . $session_id . '",`institution_code`="' . $school_code . '",`institute_email`="' . $email1 . '",`institute_email2`="' . $email2 . '",`address`="' . $address1 . '",`address2`="' . $email2 . '",`mobileno`="' . $mobileno . '",`mobileno2`="' . $mobileno2 . '",`site_keyword`="' . $site_keyword . '",`site_desc`="' . $site_desc . '",`footer_text`="' . $footer_text . '",`school_logo`="' . $logo . '",`established`="' . $established . '",`gender`="' . $gender . '"';
                $query = mysqli_query($db, $sql) or die(mysqli_error($db));
                if ($query == true) {
                    // echo $session_id . ' ' . $logo;
                    echo "<script>alert('saved')
    history.back()</script>";
                    return true;
                } else {
                    return false;
                }
            } else {
                $sql = 'UPDATE `global_settings` SET `school_name`="' . $school_name . '",`short_name`="' . $short_name . '",`session_id`="' . $session_id . '",`institution_code`="' . $school_code . '",`institute_email`="' . $email1 . '",`institute_email2`="' . $email2 . '",`address`="' . $address1 . '",`address2`="' . $email2 . '",`mobileno`="' . $mobileno . '",`mobileno2`="' . $mobileno2 . '",`site_keyword`="' . $site_keyword . '",`site_desc`="' . $site_desc . '",`footer_text`="' . $footer_text . '",`school_logo`="' . $logo . '",`principal_sign`="' . $princ_sign . '",`established`="' . $established . '",`gender`="' . $gender . '"';
                $query = mysqli_query($db, $sql) or die(mysqli_error($db));
                if ($query == true) {
                    // echo $session_id;
                    echo "<script>alert('saved')
    history.back()</script>";
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            $sql = 'INSERT INTO `global_settings` (`school_name`, `short_name`, `session_id`, `institution_code`, `institute_email`, `institute_email2`, `address`, `address2`, `mobileno`, `mobileno2`, `site_keyword`, `site_desc`, `footer_text`, `school_logo`, `principal_sign`,`established`, `gender`)
         VALUES ("' . $school_name . ',"' . $short_name . '","' . $session_id . '","' . $school_code . '","' . $email1 . '","' . $email2 . '","' . $address1 . '","' . $address2 . '","' . $mobileno . '","' . $mobileno2 . '","' . $site_keyword . '","' . $site_desc . '","' . $footer_text . '", "' . $logo . '","' . $princ_sign . '","' . $established . '","' . $gender . '") ';
            $query = mysqli_query($db, $sql) or die(mysqli_error($db));
            if ($query == true) {
                echo "<script>alert('saved')
    history.back()</script>";
                return true;
            } else {
                return false;
            }
        }
    }
    public function add_grade($grade_name, $grade_remark)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'INSERT INTO grade(grade_name,grade_remark) VALUES("' . $grade_name . '","' . $grade_remark . '")';
        $query = mysqli_query($db, $sql);
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }
    public function add_class($name)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'INSERT INTO class(class_name) VALUES("' . $name . '")';
        $query = mysqli_query($db, $sql);
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }
    public function add_arm($name)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'INSERT INTO arm(arm_name) VALUES("' . $name . '")';
        $query = mysqli_query($db, $sql);
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }
    public function add_department($name, $reg_date, $reg_time)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'INSERT INTO department(department_name,date,time) VALUES("' . $name . '","' . $reg_date . '","' . $reg_time . '")';
        $query = mysqli_query($db, $sql);
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }

    public function add_classarm($class_id, $arm_id)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'INSERT INTO classarm(class_id,arm_id) VALUES("' . $class_id . '","' . $arm_id . '")';
        $query = mysqli_query($db, $sql);
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }

    public function add_sporthouse($name, $color)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'INSERT INTO sport_house(house_name,color) VALUES("' . $name . '","' . $color . '")';
        $query = mysqli_query($db, $sql);
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }

    public function add_subject($subject_name, $subject_code, $department)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'INSERT INTO subject(subject_name,subject_code,department_id) VALUES("' . $subject_name . '","' . $subject_code . '","' . $department . '")';
        $query = mysqli_query($db, $sql);
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }




    // Registration of both students and staff details

    public function add_student(
        $academic_year,
        $admission_no,
        $admission_date,
        $sport_house,
        $class_id,
        $classarm_id,
        $prev_d,
        $surname,
        $firstname,
        $othername,
        $bloog_group,
        $genotype,
        $dob,
        $pob,
        $religion,
        $gender,
        $email,
        $state,
        $lga,
        $state_origin,
        $lga_origin,
        $photo,
        $mobileno,
        $home_address
    ) {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'INSERT INTO `student` (`register_no`, `admission_date`, `surname`, `first_name`, `last_name`, `blood_group`, `genotype`, `birthday`,`place_birth`, `religion`, `gender`, `email`, `state`, `lga`, `state_origin`, `lga_origin`, `mobileno`,`home_address`, `photo`, `sporthouse_id`, `previous_details`) 
        VALUES ("' . $admission_no . '", "' . $admission_date . '","' . $surname . '", "' . $firstname . '", "' . $othername . '", "' . $bloog_group . '", "' . $genotype . '", "' . $dob . '", "' . $pob . '", "' . $religion . '","' . $gender . '", "' . $email . '", "' . $state . '", "' . $lga . '", "' . $state_origin . '", "' . $lga_origin . '", "' . $mobileno . '", "' . $home_address . '", "' . $photo . '", "' . $sport_house . '", "' . $prev_d . '")';
        $sql_query = mysqli_query($db, $sql)  or die(mysqli_error($db));
        if ($sql_query == true) {
            echo "<script>alert('$admission_no');</script>";
            $this->getnew_student_id(
                $admission_no,
                $academic_year,
                $class_id,
                $classarm_id,
            );
        } else {
            echo "<script>alert('Error  $sql_query Occured Try Again');</script>";
            echo '<div>"' . $admission_no . '", "' . $admission_date . '","' . $surname . '", "' . $firstname . '", "' . $othername . '", "' . $bloog_group . '", "' . $genotype . '", "' . $dob . '", "' . $pob . '", "' . $religion . '","' . $gender . '", "' . $email . '", "' . $state . '", "' . $lga . '", "' . $state_origin . '", "' . $lga_origin . '", "' . $mobileno . '",  "' . $photo . '", "' . $sport_house . '", "' . $prev_d . '"</div>';
        }
    }
    public function upload_staff_req($staffid, $photo)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'UPDATE `staff` SET `photo`="' . $photo . '" WHERE `staff_id` ="' . $staffid . '" ';
        $sql_query = mysqli_query($db, $sql)  or die(mysqli_error($db));
        if ($sql_query == true) {
            echo "<script>alert('saved')
                history.back()</script>";
        } else {
            echo "<script>alert('Failed')
                history.back()</script>";
        }
    }

    public function update_staff_req(
        $title,
        $surname,
        $first_name,
        $sec_name,
        $dob,
        $gender,
        $phone,
        $email,
        $state,
        $lga,
        $address,
        $academic_qualification,
        $first_apt_date,
        $staffid
    ) {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'UPDATE `staff` SET `title`="' . $title . '",`first_name`="' . $surname . '",`last_name`="' . $first_name . '",`other_name`="' . $sec_name . '",
        `gender`="' . $gender . '",`birthday`="' . $dob . '",`email`="' . $email . '",`mobileno`="' . $phone . '",`state`="' . $state . '",`lga`="' . $lga . '",
        `home_address`="' . $address . '",`qualification`="' . $academic_qualification . '",`joining_date`="' . $first_apt_date . '" WHERE `staff_id` = "' . $staffid . '" ';
        $sql_query = mysqli_query($db, $sql)  or die(mysqli_error($db));
        if ($sql_query == true) {
            echo "<script>alert('saved')
    history.back()</script>";
        } else {
            echo "<script>alert('Failed')
    history.back()</script>";
        }
    }
    public function update_student_req(
        $surname,
        $first_name,
        $sec_name,
        $dob,
        $student_id,
        $pob,
        $gender,
        $state,
        $lga,
        $house_id,
        $relig_id,
        $blood_group,
        $geno_id,
        $address,
        $phone,
        $email,
        $prev_sch_attended,
        $prev_sch_attended_date
    ) {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'UPDATE `student` SET `surname`="' . $surname . '",`first_name`="' . $first_name . '",`last_name`="' . $sec_name . '",
        `blood_group`="' . $blood_group . '",`genotype`="' . $geno_id . '",`birthday`="' . $dob . '",`place_birth`="' . $pob . '",
        `religion`="' . $relig_id . '",`gender`="' . $gender . '",`email`="' . $email . '",
        `state_origin`="' . $state . '",`lga_origin`="' . $lga . '",`mobileno`="' . $phone . '",`home_address`="' . $address . '",
        `sporthouse_id`="' . $house_id . '" WHERE id ="' . $student_id . '"';
        $sql_query = mysqli_query($db, $sql)  or die(mysqli_error($db));
        if ($sql_query == true) {
            echo "<script>alert('saved')
    history.back()</script>";
        } else {
            echo "<script>alert('Failed')
    history.back()</script>";
        }
    }






    public function getnew_student_id($admission_no, $academic_year, $class_id, $classarm_id)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT id FROM student WHERE register_no='$admission_no'";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            if ($row = mysqli_fetch_array($query)) {
                $student_id = $row['id'];
                echo "<script>alert('Student Id Found $student_id');</script>";
                $this->add_enroll($student_id, $class_id, $classarm_id, $academic_year);
            } else {
            }
        } else {
            echo "<script>alert('Student Id Not Found');</script>";
        }
    }


    public function add_enroll($student_id, $class_id, $classarm_id, $academic_year)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'INSERT INTO `enroll` (`student_id`, `class_id`, `class_arm_id`, `session_id`) 
        VALUES ("' . $student_id . '", "' . $class_id . '", "' . $classarm_id . '", "' . $academic_year . '")';
        $query = mysqli_query($db, $sql) or die(mysqli_error($db));
        if ($query == true) {
            echo "<script>alert('Student Saved Successfully');</script>";
            return true;
        } else {
            return false;
            echo "<script>alert('Student Saved Failed');</script>";
        }
    }



    // public function add_parent(
    //     $title,
    //     $p_surname,
    //     $p_firstname,
    //     $p_othername,
    //     $p_email,
    //     $mobileno,
    //     $next_kin,
    //     $next_mobile,
    //     $home_address,
    //     $office_address
    // ) {
    //     $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);

    //     $sql = 'INSERT INTO `parent` (`title`, `surname`, `firstname`, `othername`, `email`, `mobileno`, `next_kin`, `next_mobile`, `home_address`, `office_address`, `active`) 
    //     VALUES ("' . $title . '", "' . $p_surname . '", "' . $p_firstname . '", "' . $p_othername . '", "' . $p_email . '", "' . $mobileno . '", "' . $next_kin . '", "' . $next_mobile . '", "' . $home_address . '", "' . $office_address . '", "1") ';
    //     $query = mysqli_query($db, $sql);
    //     if ($query == true) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }




    public function add_staff(
        $staff_id,
        $title,
        $firstname,
        $surname,
        $sec_name,
        $gender,
        $birthday,
        $email,
        $mobileno,
        $state,
        $lga,
        $home_address,
        $role_id,
        $qualification,
        $joining_date,
        $photo,
        $sporthouse_id,
        $department_id
    ) {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'INSERT INTO `staff` (`staff_id`, `title`, `first_name`, `last_name`, `other_name`, `gender`, `birthday`, `email`, `mobileno`, `state`, `lga`, `home_address`, `role_id`, `qualification`, `joining_date`,`photo`, `sporthouse_id`, `department_id`) 
                             VALUES ("' . $staff_id . '", "' . $title . '", "' . $firstname . '", "' . $surname . '","' . $sec_name . '", "' . $gender . '", "' . $birthday . '", "' . $email . '", "' . $mobileno . '", "' . $state . '", "' . $lga . '", "' . $home_address . '", "' . $role_id . '", "' . $qualification . '", "' . $joining_date . '", "' . $photo . '", "' . $sporthouse_id . '", "' . $department_id . '")';
        $query = mysqli_query($db, $sql) or die(mysqli_error($db));
        if ($query == true) {
            // return true;
            echo "<script>alert('$staff_id,$lga,$department_id');
        
        </script>";
        } else {
            echo "<script>alert('Failed');
        
        </script>";
        }
    }


    public function register_parent()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }






















    public function get_school_name()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_name = $row['school_name'];

                return $global_school_name;
            }
        }
    }
    public function get_school_footer()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_footer = $row['footer_text'];

                return $global_school_footer;
            }
        }
    }
    public function get_school_princ_sign()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_princ_sign = $row['principal_sign'];

                return $global_school_princ_sign;
            }
        }
    }
    public function get_school_logo()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_logo = $row['school_logo'];

                return $global_school_logo;
            }
        }
    }
    public function get_school_address2()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_address2 = $row['address2'];

                return $global_school_address2;
            }
        }
    }
    public function get_school_address()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_address = $row['address'];

                return $global_school_address;
            }
        }
    }
    public function get_school_sitedesc()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_sitedesc = $row['site_desc'];

                return $global_school_sitedesc;
            }
        }
    }
    public function get_school_sitekeyword()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_sitekeyword = $row['site_keyword'];

                return $global_school_sitekeyword;
            }
        }
    }
    public function get_school_email2()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_email = $row['institute_email2'];

                return $global_school_email;
            }
        }
    }
    public function get_school_email()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_email = $row['institute_email'];

                return $global_school_email;
            }
        }
    }
    public function get_school_mobile2()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_mobile = $row['mobileno2'];

                return $global_school_mobile;
            }
        }
    }
    public function get_school_mobile()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_mobile = $row['mobileno'];

                return $global_school_mobile;
            }
        }
    }
    public function get_school_gender()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_gender = $row['gender'];

                return $global_school_gender;
            }
        }
    }
    public function get_school_established()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_gender = $row['established'];

                return $global_school_gender;
            }
        }
    }
    public function get_school_session()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LEFT JOIN schoolyear ON session_id = schoolyear.id LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_session = $row['school_year'];
                $global_school_sessionid = $row['session_id'];
                echo '<option value="' . $global_school_sessionid . '" selected>' . $global_school_session . '</option>';
                return $global_school_session;
            }
        }
    }
    public function get_school_code()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $global_school_code = $row['institution_code'];

                return $global_school_code;
            }
        }
    }
    public function get_school_short()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `global_settings` LIMIT 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                // $global_school_name = $row['school_name'];
                $global_shot_name = $row['short_name'];
                // return $global_school_name;
                return $global_shot_name;
            }
        }
    }
    public function get_grade()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `grade` ";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['grade_id'];
                $grade_name = $row['grade_name'];
                $grade_remark = $row['grade_remark'];
                echo '
            <tr>
                                            <td class="sn">' . $id . '</td>
                                            <td>' . $grade_name . '</td>
                                            <td>' . $grade_remark . '</td>
                                            <td>
                                                <a href="school-config/grade-edit/' . $id . '" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/' . $id . '" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>';
            }
        } else {
            echo '<tr>
            <tr>
                <td>No</td>
                <td>Data Found</td>
            </tr>
        </tr>';
        }
    }
    public function get_class()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM `class` ";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $name = $row['class_name'];
                echo '<tr>
                <tr>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                </tr>
            </tr>';
            }
        } else {
            echo '<tr>
            <tr>
                <td>No</td>
                <td>Data Found</td>
            </tr>
        </tr>';
        }
    }
    function generate_uuid()
    {
        return sprintf(
            '%04x%04x',
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0C2f) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0x2Aff),
            mt_rand(0, 0xffD3),
            mt_rand(0, 0xff4B)
        );
    }

    public function get_classarm()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT class.*,classarm.*,arm.* FROM class 
        JOIN classarm
            ON class.id=classarm.class_id
        JOIN arm
            ON classarm.arm_id=arm.id
        WHERE class.id Is NOT NULL
";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['class_name'];
                $name = $row['arm_name'];
                echo '<tr>
                <tr>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                </tr>
            </tr>';
            }
        } else {
            echo '<tr>
            <tr>
                <td>No</td>
                <td>Data Found</td>
            </tr>
        </tr>';
        }
    }
    public function update_arm($arm, $armid)
    {
        echo $arm;
        echo $armid;
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "UPDATE arm SET arm_name='$arm' WHERE arm_id = '$armid'";
        echo $arm;
        echo $sql;
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query) or die(mysqli_error($db));

        if ($count == true) {
            echo '<script> 
   Toastify({
        text: "Update Successfull",
        offset: {
          x: 50, 
          y: 10 
        },
      }).showToast();</script>';
        } else {
            echo '<script> 
   Toastify({
        text: "Update Failed ' . $count . ' b",
        offset: {
          x: 50, 
          y: 10 
        },
      }).showToast();</script>';
        }
    }
    public function get_arm()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM arm";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['arm_id'];
                $name = $row['arm_name'];
                echo '<tr>
                <td class="sn">' . $id . '</td>
                <td>' . $name . '</td>
                <td>
                    <a href="../classes/arm-edit.php?edit_arm=' . $id . '" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this arm" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                    <a href="../classes/arm-delete.php?del_arm=' . $id . '" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light arm-del" title="Delete this arm" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                </td>
            </tr>';
            }
        } else {
            echo '<tr>
            <td>
            No </td>
            <td>
            Data</td>
            <td>
            Found</td>
        </tr>';
        }
    }
    public function get_department()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM department";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['d_id'];
                $name = $row['department_name'];
                $staff_id = $row['staff_id'];
                $date = $row['date'];
                $time = $row['time'];
                if ($staff_id == "0") {
                    $staff_name = '<span class="label label-light-danger">unassigned</span> ';
                } else {
                    $staff_name = '<a href="staff/staff-department/301255a64d9900c71">' . $row['staff_id'] . '</a>';
                }
                echo '<tr>
                      <td class="sn">' . $id . '</td>
                      <td>' . $name . '</td>
                      <td>
                          ' . $staff_name . '
                      </td>
                      <td class="text-uppercase">' . DATE_FORMAT(new DateTime(strtoupper($date)), 'M d, Y') . ' at ' . $time . '</td>

                      <td class="text-nowrap">
                          <a href="subject/subject1.html/dept-staff-members.php?id=' . $id . '" class="btn btn-sm btn-info btn-circle m-r-10 m-b-5" title="View all Staff in this department" data-toggle="tooltip"><i class="fa fa-users"></i> </a>
                          <a href="subject/subject1.html/dept-subject-members.php?id=' . $id . '" class="btn btn-sm btn-primary btn-circle ajax-link m-b-5 waves-effect waves-light" title="View all subjects this department" data-toggle="tooltip"><i class="fa fa-book"></i> </a>
                      </td>

                      <td class="text-nowrap">
                          <a href="subject/subject1.html/dept-edit.php?id=' . $id . '" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this department" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                          <a href="subject/subject1.html/dept-delete.php?id=' . $id . '" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light dept-del" title="Delete this department" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                     </td>
                                            </tr>';
            }
        } else {
            echo '<tr>
            <td>
            No </td>
            <td>
            Data</td>
            <td>
            Found</td>
        </tr>';
        }
    }
    public function get_student_list()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT  student_id as student_id
        ,       class_id as class_id
        ,       class_arm_id as class_arm_id
        ,       class_name as class_name
        ,       register_no as register_no
        ,       surname as surname
        ,       first_name as first_name
        ,       last_name as last_name
        ,       email as email
        ,       gender as gender
        ,       photo as photo
        ,       house_name as house_name
        FROM enroll
            LEFT JOIN class ON class_id = class.id
            RIGHT JOIN student ON student_id = student.id
            RIGHT JOIN sport_house ON sport_house.id  = `student`.`sporthouse_id` 
        ORDER BY `student`.`register_no` ASC";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            $counter = 0;
            while ($row = mysqli_fetch_array($query)) {
                // $id = $row['id'];
                $name = $row['surname'];
                $names = $row['first_name'] . ' ' . $row['last_name'];
                $regno = $row['register_no'];
                $date = $row['first_name'];
                $class = $row['class_name'];
                $email = $row['email'];
                $gender = $row['gender'];
                $sport_house = $row['house_name'];
                $student_id = $row['student_id'];
                $image = $row['photo'];
                if (empty($image) && $gender == 'Male') {
                    $image = 'nobody_m.jpg';
                } else if (empty($image) && $gender == 'Female') {
                    $image = 'nobody_f.jpg';
                } else {
                    $image = $row['photo'];
                }
                echo '<tr role="row" class="odd">
                <td class="sorting_1">' . ++$counter . '</td>
                <td>
                    <img src="../../uploads/' . $image . '" class="img-circle" width="50">
                </td>
                <td>
                    <a class="text-info" href="../student/student-profile.php?student_id=' . $student_id . '" target="_blank">
                    <b>' . $name . '</b> ' . $names . '</a>
                </td>
                <td>
                    <span class="label label-success">' . $class . '</span>
                </td>
                <td>' . $regno . '</td>

                <td>' . $gender . '</td>

                <td>' . $sport_house . '</td>
                <td>
                ' . $email . ' </td>
                <td class="text-nowrap">
                    <a href="../student/student-profile.php?student_id=' . $student_id  . '" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this arm" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                </td>
            </tr>';
            }
        } else {
            echo '<tr>
            <td>
            No </td>
            <td>
            Data</td>
            <td>
            Found</td>
        </tr>';
        }
    }
    public function get_sporthouse()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM sport_house";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $name = $row['house_name'];
                $color = $row['color'];
                echo '<tr>
                <td class="sn">' . $id . '</td>
                <td>' . $name . '</td>
                <td>' . $color . '</td>
                <td class="text-nowrap">
                    <a href="classes/arm-edit/' . $id . '" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this arm" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                    <a href="classes/arm-delete/' . $id . '" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light arm-del" title="Delete this arm" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                </td>
            </tr>';
            }
        } else {
            echo '<tr>
            <td>
            No </td>
            <td>
            Data</td>
            <td>
            Found</td>
        </tr>';
        }
    }

    public function get_subject()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT subject.*,department.* FROM subject 
        JOIN department
            ON department.d_id=subject.department_id
        WHERE subject.department_id Is NOT NULL";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        $counter = 0;
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $subject_name = $row['subject_name'];
                $subject_code = $row['subject_code'];
                $department_id = $row['department_name'];
                echo '<tr>
                <td class="sn">' . ++$counter . '</td>
                 <td>' . $subject_name . '</td>

                 <td>' . $subject_code . '</td>

                 <td>' . $department_id . '</td>

                 <td class="text-nowrap">
                     <a href="edit.php?id=' . $id . '" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this subject" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                     <a href="delete.php?id=' . $id . '" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light subject-del" title="Delete this subject" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                 </td>
                                            </tr>';
            }
        } else {
            echo '<tr>
            <td>
            No </td>
            <td>
            Data</td>
            <td>
            Found</td>
        </tr>';
        }
    }
    public function get_staff()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * from `staff` Where role_id <> 0";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            $counter = 0;
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];

                $title = $row['title'];
                $lastname = $row['last_name'];
                $firstname = $row['first_name'];
                $othername = $row['other_name'];
                $email = $row['email'];
                $mobileno = $row['mobileno'];
                $staff_id = $row['staff_id'];
                $name = $title . ' ' . $lastname . ' ' . $firstname . ' ' . $othername;
                $usename = 'unassigned';
                // $image = $row['photo'];
                // $img = '';
                $staff_gender = $row['gender'];
                $staff_image = $row['photo'];
                if ($staff_image == "" && $staff_gender == 'Male') {
                    $staff_image = 'nobody_m.jpg';
                } else if ($staff_image == "" && $staff_gender == 'Female') {
                    $staff_image = 'nobody_f.jpg';
                } else {
                    $staff_image = $row['photo'];
                }
                // if ($image == "" && $row['gender'] == 'Male') {
                //     $img = "../../uploads/nobody_m.jpg";
                // } else if ($image == "" && $row['gender'] == 'Female' || 'F') {
                //     $img = "../../uploads/nobody_f.jpg";
                // } else {
                //     $img = "../../uploads/$image";
                // }
                echo '<tr>
                <td>' . ++$counter . '</td>
                <td>
                    <img src="../../uploads/' . $staff_image . ' " width="50" class="img-circle" />
                </td>
                <td>
                    <a href="../staff/staff-profile.php?staffid=' . $staff_id . '" class="text-info" target="_blank">' . $name . '</a>
                </td>
                <td>' . $usename . '</td>
                <td>' . $email . '</td>
                <td>' . $mobileno . '</td>
                <td>
                    <a href="user-account/delete.php?staffid=' . $staff_id . '" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light user-delete" title="Delete this Staff Account" data-toggle="tooltip"><i class="fa fa-user-times"></i> </a>
                </td>
            </tr>';
            }
        } else {
            echo '<tr>
            <td>
            No </td>
            <td>
            Data</td>
            <td>
            Found</td>
        </tr>';
        }
    }




    public function get_student_count()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "select * from student";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            echo $count;
        } else {
            echo $count;
        }
    }
    public function get_class_student_count($classid)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "select * from enroll WHERE class_id ='$classid'";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            echo $count;
        }
    }
    public function get_student_male()
    {

        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "select * from student where gender='Male'";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            echo $count;
        } else {
            $count = 0;
            echo $count;
        }
    }
    public function get_student_female()
    {

        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "select * from student where gender='female'";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            echo $count;
        } else {
            $count = 0;
            echo $count;
        }
    }
    public function get_student_staff()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "select * from staff where id != 1";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            echo $count;
        } else {
            $count = 0;
            echo $count;
        }
    }
    public function get_class_student($class_id)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT  student_id as student_id
        ,       enroll.class_id
        ,       class_arm_id as class_arm_id
        ,       class_name as class_name
        ,       register_no as register_no
        ,       surname as surname
        ,       first_name as first_name
        ,       last_name as last_name
        ,       gender as gender
        ,       photo as photo
        ,       house_name as house_name
        ,       arm_name as arm_name
        FROM enroll
            LEFT JOIN class ON class_id = class.id
            RIGHT JOIN student ON student_id = student.id
            RIGHT JOIN classarm ON class_arm_id = classarm_id
            RIGHT JOIN arm ON classarm.arm_id = arm.arm_id
            RIGHT JOIN sport_house ON sport_house.id  = `student`.`sporthouse_id` 
            WHERE class_arm_id = '$class_id'
        ";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query) or die(mysqli_error($db));
        if ($count == true) {
            $counter = 0;
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['register_no'];
                $class_name = $row['class_name'] . '<b> ' . $row['arm_name'] . '<b>';
                $gender = $row['gender'];
                $student_id = $row['student_id'];
                $surname = strtoupper($row['surname']);
                $sporthouse = $row['house_name'];
                $image = $row['photo'];
                if (empty($image) && $gender == 'Male') {
                    $image = 'nobody_m.jpg';
                } else if (empty($image) && $gender == 'Female') {
                    $image = 'nobody_f.jpg';
                } else {
                    $image = $row['photo'];
                }

                $name = $row['first_name'] . ' ' . $row['last_name'];
                echo '<tr>
                <td>' . ++$counter . '</td>
                <td>
                    <img src="../../uploads/' . $image . '" height="50" class="img-circle" />
                </td>
                <td>
                    <a class="text-info" href="../student/student-profile.php?student_id=' . $student_id . '" target="_blank">
                        <b>' . $surname . ' </b> ' . $name . ' </a>
                </td>
                <td>' . $id . '</td>

                <td>' . $gender . '</td>

                <td>' . $sporthouse . '</td>
                <td>
                    ' . $class_name . ' </td>
            </tr>';
            }
        } else {
            $count = 0;
            echo $count;
        }
    }














    // Assignment of subject and Teacher to Classes
    public function assign_subjectclass()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }
    public function assign_subject_teacher($int, $subject_id, $staffid)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $chk_sql = 'SELECT * FROM `subject_assign` WHERE teacher_id="' . $staffid . '" AND classarm_id ="' . $int . '" ';
        $chk_query = mysqli_query($db, $chk_sql) or die(mysqli_error($db));
        $chk_count = mysqli_num_rows($chk_query);
        if ($chk_count == true) {
            echo "<Script> alert('An Information Already Exists')
            history.back()
            </Script>";
        } else {
            $sql = 'INSERT INTO `subject_assign` (`id`, `classarm_id`, `subject_id`, `teacher_id`, `created_at`) 
        VALUES (NULL, ' . $int . ',' . $subject_id . ',' . $staffid . ',CURRENT_TIMESTAMP) ';
            $query = mysqli_query($db, $sql) or die(mysqli_error($db));
            if ($query == true) {
                echo "<Script> alert('Information Saved')
        history.back()
        </Script>";
            } else {
                echo "<Script> alert('Information Failed $int')
        history.back()
        </Script>";
            }
        }
    }

    public function assign_teacherclass($class_arm_id, $staffid)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $chk_sql = 'SELECT * FROM `teacher_allocation` WHERE teacher_id="' . $staffid . '" AND classarm_id ="' . $class_arm_id . '" ';
        $chk_query = mysqli_query($db, $chk_sql) or die(mysqli_error($db));
        $chk_count = mysqli_num_rows($chk_query);
        if ($chk_count == true) {
            echo "<Script> alert('Information Already Exists')
            history.back()
            </Script>";
        } else {
            $sql = 'INSERT INTO `teacher_allocation` (`id`, `classarm_id`, `teacher_id`) VALUES (NULL,"' . $class_arm_id . '","' . $staffid . '")';
            $query = mysqli_query($db, $sql) or die(mysqli_error($db));
            if ($query == true) {
                echo "<Script> alert('Information Saved')
            history.back()
            </Script>";
            } else {
                echo "<Script> alert('Information Failed $class_arm_id')
            history.back()
            </Script>";
            }
        }
    }

    public function assign_teacher()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }
    public function login_user($username, $password)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM login_credential WHERE username='$username' AND password='$password'";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['user_id'] = $row['user_id'];


                if ($row[5] == 'block') {
                    // echo '<script>window.location="ep/docs/block_account.php"</script>';
                } elseif ($row['role'] == '1') {
                    echo '<script>window.alert("yes")</script>';
                    echo '<script>window.location="admin-account.php?engine=' . $row['user_id'] . '"</script>';
                } elseif ($row['role']) {
                    // update timestructureinvest_member
                    // mysqli_query($db, "UPDATE paywase_member SET last_seen='$last_seen' WHERE user_id='$_SESSION[user_id]'");
                    echo '<script>window.location="admin-account.php?engine=' . $row['user_id'] . '"</script>';
                    echo '<script>window.alert("yes")</script>';
                }
            }
        } else {
            echo '<script>window.alert("username or password is incorrect! try again  ")</script>';
            echo '<div style="padding:19px; background-color:#ff7d7d;color:#870303;" class="sr_flash">
                            <b>Username or password is incorrect!</b> try again "' . $password . '"</a>
                        </div><br /><br />';
        }
    }
}
