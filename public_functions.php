<?php
error_reporting(E_ALL);
class sms_engine
{
    // Database conection
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $database = 'dbms';

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
                $id = $row['id'];
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
                echo '<option value="'.$class_arm .'">' . $id . ' ' . $name . '</option>';
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
        FROM enroll
            LEFT JOIN class ON class_id = class.id
        GROUP BY `class`.`class_name`";
        // $sql = "SELECT class_id, COUNT(student_id) 
        // as totalUsers FROM enroll GROUP BY class_id ORDER BY class_id ASC";
        $query = mysqli_query($db, $sql) or die(mysqli_error($db));
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {

                $class_numeric = $row['count_of_student'];
                $name = $row['class_name'];
                $per = 0;
                if ($class_numeric > 10) {
                    $per = 50;
                } else {
                    $per = 50;
                }
                echo '<tr>
                <td>' . $name . '</td>
                <td class="center">' . $class_numeric . '</td>
                <td width="50%">
                    <div class="progress">
                        <div class="progress-bar bg-danger active progress-bar-striped" style="width: ' . $per . '%; height:14px;" role="progressbar">' . $per . '%</div>
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


            // if ($parent_id == '') {
            //     $sqli = 'SELECT mobileno FROM parent Where mobileno = ' . $mobileno . ' AND email =' . $email . '';
            //     $queryi = mysqli_query($db, $sqli);
            //     if ($queryi == true) {
            //         echo "<script>alert('Parent Already Exists');</script>";
            //     } else {
                    // $this->add_parent(
            //             $title,
            //             $email,
            //             $p_surname,
            //             $p_firstname,
            //             $p_othername,
            //             $p_email,
            //             $mobileno,
            //             $next_kin,
            //             $next_mobile,
            //             $home_address,
            //             $office_address
            //         );
            //     }
            // } else {
            //     echo "<script>alert('Parent Saved Successfully');</script>";
            // }
        } else {
            echo "<script>alert('Error  $sql_query Occured Try Again');</script>";
            echo '<div>"' . $admission_no . '", "' . $admission_date . '","' . $surname . '", "' . $firstname . '", "' . $othername . '", "' . $bloog_group . '", "' . $genotype . '", "' . $dob . '", "' . $pob . '", "' . $religion . '","' . $gender . '", "' . $email . '", "' . $state . '", "' . $lga . '", "' . $state_origin . '", "' . $lga_origin . '", "' . $mobileno . '",  "' . $photo . '", "' . $sport_house . '", "' . $prev_d . '"</div>';
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
    )
    {
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
                $id = $row['id'];
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
    }public function get_student_list()
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
                    <span class="label label-success">'.$class.'</span>
                </td>
                <td>' . $regno . '</td>

                <td>' . $gender . '</td>

                <td>' . $sport_house . '</td>
                <td>
                '.$email.' </td>
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
            ON department.id=subject.department_id
        WHERE subject.department_id Is NOT NULL";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $subject_name = $row['subject_name'];
                $subject_code = $row['subject_code'];
                $department_id = $row['department_name'];
                echo '<tr>
                <td class="sn">' . $id . '</td>
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
                if ($row['gender'] == 'M') {
                    $img = "../../uploads/nobody_m.jpg";
                } else {
                    $img = "../../uploads/nobody_f.jpg";
                }
                echo '<tr>
                <td>' . ++$counter . '</td>
                <td>
                    <img src=' . $img . ' width="50" class="img-circle" />
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
        }else{
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
                $class_name = $row['class_name'] .'<b> '. $row['arm_name'] .'<b>';
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
    public function assign_teacherclass()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
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
