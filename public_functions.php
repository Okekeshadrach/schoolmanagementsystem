<?php
class sms_engine
{
    // Database conection
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $database = 'dbms';


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
                $id = $row['id'];
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


    public function get_classarm_select()
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
                echo '<option value="' . $id . '' . $name . '">' . $id . ' ' . $name . '</option>';
            }
        } else {
            echo '<option>No Data Found</option>';
        }
    }



    public function get_regno()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);

        $query = "select * from student order by id desc limit 1";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);
        $last_id = $row['id'];
        if ($last_id == "") {
            $customer_ID = "CUS1";
            echo '<input type="text" name="admission_no" class="form-control" value="' . $customer_ID . '" placeholder="" readonly/>
            ';
        } else {
            $customer_ID = substr($last_id, 3);
            $customer_ID = intval($customer_ID);
            $customer_ID = "CUS" . (1 + $row['id']);
            echo '<input type="text" name="admission_no" class="form-control" value="' . $customer_ID . '" placeholder="" />
            ';
        }
    }









    public function add_class($name)
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = 'INSERT INTO class(name) VALUES("' . $name . '")';
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

    public function register_student()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }
    public function register_staff()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }
    public function register_parent()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
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

    public function get_arm()
    {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $sql = "SELECT * FROM arm";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $name = $row['arm_name'];
                echo '<tr>
                <td class="sn">' . $id . '</td>
                <td>' . $name . '</td>
                <td>
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
}
