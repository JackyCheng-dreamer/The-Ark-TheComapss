<?php
require './google-drive.php';

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


if(is_array($_FILES)){
    $path = "JCHK Client/";
    $validFile = false;
    if($_FILES["file"]["type"] == 'image/jpg'){
      $file_name =  $_POST['what'] ."-" . $_POST['photos'] .  ".jpg";
      $validFile = true;
    }
    else if($_FILES["file"]["type"] == 'image/jpeg'){
      $file_name =   $_POST['what'] . $_POST['photos'] .  ".jpeg";
      $validFile = true;
    }
    else if($_FILES["file"]["type"] == 'image/png'){
      $file_name =  $_POST['what'] . $_POST['photos'] . ".png";
      $validFile = true;
    }
    else if($_FILES["file"]["type"] == 'application/pdf'){
      $file_name = $_POST['what'] . $_POST['photos'] .  ".pdf";
      $validFile = true;
    }
    if($validFile){
        //valid
      if($_FILES["file"]["size"] > 5000000){
        echo "fail -- exceed limit：5MB";
      }else{
          $path = "JCHK Client/".$_POST['case_id'] ;
          // valid size
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $path)){

            $folder_id = create_folder( $_POST['case_id'] ,"1ZFuXznpnYhWjMIu3dV4PB9b6XtILW9Wy" );
            $success = insert_file_to_drive( $path , $file_name, $folder_id );

            if( $success ){
                echo "Yes," .  $folder_id;
            } else { 
                echo "fail , can't upload the file";
            }
        }else{
          echo "fail , can't create file";
        }
      }
    }
    //unvalid
    else{
      echo "fail -- only support format：JPG/ PNG/ PDF";
    }


}else{
    echo "fail";
  }

// This will create a folder and also sub folder when $parent_folder_id is given
function create_folder( $folder_name, $parent_folder_id ){

    $folder_list = check_folder_exists(  $folder_name );

    // if folder does not exists
    if( count( $folder_list ) == 0 ){
        
        $service = new Google_Service_Drive( $GLOBALS['client'] );
        $folder = new Google_Service_Drive_DriveFile(array(
            'name' => $folder_name,
            'mimeType' => 'application/vnd.google-apps.folder',
            'parents' => array($parent_folder_id) //to create sub dir. under summary folder
    ));

        /*$folder->setName( $folder_name );
        $folder->setMimeType('application/vnd.google-apps.folder');
        if( !empty( $parent_folder_id ) ){
            $folder->setParents( [ $parent_folder_id ] );        
        }*/


        $result = $service->files->create( $folder );
    
        $folder_id = null;
        
        if( isset( $result['id'] ) && !empty( $result['id'] ) ){
            $folder_id = $result['id'];
        }
    
        return $folder_id;
    }
    
    return $folder_list[0]['id'];
    
}

// This will check folders and sub folders by name
function check_folder_exists( $folder_name ){
    
    $service = new Google_Service_Drive($GLOBALS['client']);

    $parameters['q'] = "mimeType='application/vnd.google-apps.folder' and name='$folder_name' and trashed=false";
    $files = $service->files->listFiles($parameters);

    $op = [];
    foreach( $files as $k => $file ){
        $op[] = $file;
    }

    return $op;
}

// This will display list of folders and direct child folders and files.
function get_files_and_folders(){
    $service = new Google_Service_Drive($GLOBALS['client']);

    $parameters['q'] = "mimeType='application/vnd.google-apps.folder' and 'root' in parents and trashed=false";
    $files = $service->files->listFiles($parameters);
    
    echo "<ul>";
    foreach( $files as $k => $file ){
        echo "<li> 
        
            {$file['name']} - {$file['id']} ---- ".$file['mimeType'];

            try {
                // subfiles
                $sub_files = $service->files->listFiles(array('q' => "'{$file['id']}' in parents"));
                echo "<ul>";
                foreach( $sub_files as $kk => $sub_file ) {
                    echo "<li&gt {$sub_file['name']} - {$sub_file['id']}  ---- ". $sub_file['mimeType'] ." </li>";
                }
                echo "</ul>";
            } catch (\Throwable $th) {
                // dd($th);
            }
        
        echo "</li>";
    }
    echo "</ul>";
}

// This will insert file into drive and returns boolean values.
function insert_file_to_drive( $file_path, $file_name, $parent_file_id = null ){
    $service = new Google_Service_Drive( $GLOBALS['client'] );
    $file = new Google_Service_Drive_DriveFile();

    $file->setName( $file_name );

    if( !empty( $parent_file_id ) ){
        $file->setParents( [ $parent_file_id ] );        
    }

    $result = $service->files->create(
        $file,
        array(
            'data' => file_get_contents($file_path),
            'mimeType' => 'application/octet-stream',
            'uploadType' => 'multipart'
        )
    );

    $is_success = false;
    
    if( isset( $result['name'] ) && !empty( $result['name'] ) ){
        $is_success = true;
    }

    return $is_success;
}

if( isset( $_GET['list_files_and_folders'] ) ){
    echo "<h1>Retriving List all files and folders from Google Drive</h1>";
    get_files_and_folders();
}

// Function just for easier debugging
function dd( ...$d ){
    echo "<pre style='background-color:#000;color:#fff;' >";
    print_r($d);
    exit;
}    