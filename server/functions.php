<?php
    session_start();
    //function for file upload

    function avatar_upload($file){
        $upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/server/assets/uploads/avatars/"; //chanapara depi apload heto el avatar

        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);

        $file_name = time() . "." . $ext; //time jamanakna 1970ic minchev himikva jamanakna varkyannerov
        move_uploaded_file($file['tmp_name'], $upload_dir . $file_name); // texapoxum enq server u veradardznum enq
        // fayli anuny baza texapoxelu hamar
        return $file_name;

    }
    function file_upload($file){
        $upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/server/assets/uploads/files/"; //chanapara depi apload heto el avatar
        // kam docx kam pdf papkaner
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);//get file extension
        $extensions_for_img = array("jpg","jpeg","png");

        //voroshum enq uploadi janaparh@ @st uxarkvac fayli formati aysinqn vortex enq pahel iran
        //baci da arel enq vor baci nkarneric karoxananq pahel docx,pdf

//        switch($ext) {
//            case in_array($ext, $extensions_for_img):
//                $upload_dir .= 'avatars/';
//                break;
//            case "pdf":
//                $upload_dir .= 'pdf/';
//                break;
//            case "docx":
//                $upload_dir .= 'docx/';
//                break;
//            default:
//                $upload_dir .= "";
//                break;
//        } // haskanuma inch enq  upload arel fayli extetion i mijocov u fayly texapoxuma hamapatasxan papkayi mej

        $file_name = time() . "." . $ext; //time jamanakna 1970ic minchev himikva jamanakna varkyannerov
        move_uploaded_file($file['tmp_name'], $upload_dir . $file_name); // texapoxum enq server u veradardznum enq
        // fayli anuny baza texapoxelu hamar
        return $file_name;

    }

    //function for hashing
    function hash_password($password){
        return md5($password);// heshavoeum enq cackagiry baza uxarkelu hamar
    }

    //for inputs security
    function php_input($txt){
        return trim(htmlspecialchars($txt));// erku koxmic maqruma bacatnery ev inputi
        // arjeqnery maqrum enq bolor tesaki sqriptneric
    }

    //for db connect
    function connect($db_name){
        return mysqli_connect("localhost", "root", "", $db_name);
    }

    function print_r_pre($array) {
        echo "<pre>";
            print_r($array);
        echo "</pre>";
        exit;
    }

function clientEdit($data){
    global $conn;
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $avatar = $data['avatar'];
    $id = $data['id'];
    $sql = "UPDATE clients SET last_name = '$last_name', first_name='$first_name', avatar='$avatar' WHERE id = '$id' ";
    $result = mysqli_query($conn, $sql);
    if($result) {
        $_SESSION['msg'] = 'client successfully edited';
        header('location:http://task.loc/views/dashboard/clients/index.php');
    }

    }
   function delete_file($file_id, $a) {
      global $conn;
       mysqli_query($conn,"UPDATE `clients` SET `file_isset` = '0' WHERE `clients`.`id` = '$a'");
       $sql = "DELETE FROM client_files WHERE id='$file_id'";
       $result = mysqli_query ($conn,$sql);

   }



//rename($_SERVER['DOCUMENT_ROOT'] . "/server/assets/uploads/files/aa.docx" , $_SERVER['DOCUMENT_ROOT'] . "/server/assets/uploads/files/bb.docx");