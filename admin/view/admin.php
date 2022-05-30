<?php
require('../../protfolio/model/db.php');

if(isset($_POST['update-section'])){
    //print_r($_POST);
    $home=$_POST['home'] ?? 0;
    $about=$_POST['about'] ?? 0;
    $resume=$_POST['resume'] ?? 0;
    $services=$_POST['services'] ?? 0;
    $protfolio=$_POST['protfolio'] ?? 0;
    $contact=$_POST['contact'] ?? 0;
    
    $query = "UPDATE section_control SET ";
    $query.= "home_section= '$home',";
    $query.= "about_section= '$about',";
    $query.= "resume_section= '$resume',";
    $query.= "services_section= '$services',";
    $query.= "protfolio_section= '$protfolio',";
    $query.= "contact_section= '$contact' WHERE id=2";
    $run = mysqli_query($db,$query);
    if($run){
        echo "<script>Window.location.href = '../admin/index.php';</script>";
    }
}


if(isset($_POST['update-home'])){
    //print_r($_POST);
     $title= mysqli_real_escape_string( $db,$_POST['title'])  ;
    $sub_title=mysqli_real_escape_string( $db,$_POST['sub_title'])  ;
    $littel_sub_title=mysqli_real_escape_string( $db,$_POST['littel_sub_title'])  ;
    $home_pic=$_POST['home_pic'] ?? 0;

    
    $query = "UPDATE home SET ";
    $query.= "title= '$title',";
    $query.= "sub_title= '$sub_title',";
    $query.= "littel_sub_title= '$littel_sub_title',";
    $query.= "home_pic= '$home_pic' WHERE id=1";
    $run = mysqli_query($db,$query);
    if($run){
        echo "<script>Window.location.href = '../admin/index.php?homesetting=true';</script>";
    } 
}

if(isset($_POST['update-about'])){
    //print_r($_POST);
    //var_dump($FILES);
     $title= mysqli_real_escape_string( $db,$_POST['sub_title'])  ;
    $sub_title=mysqli_real_escape_string( $db,$_POST['about_description'])  ;
    $littel_sub_title=mysqli_real_escape_string( $db,$_POST['about_pic'])  ;
    $imagename=time().$_FILES['about_pic']['name'];
    $imgtemp = $_FILES['about_pic']['tmp_name'];
    if($imgtemp==""){
        $query="SELECT * FROM about WHERE 1";
        $run = mysqli_query($db,$query);
        $data = mysqli_fetch_array($run);
        $imagename=$d['about_pic'];
    }
    move_uploaded_file($imgtemp,"../../protfolio/view/images/$imagename");
        $query = "UPDATE about SET ";
    
        $query.= "about_sub_title= '$about_sub_title',";
        $query.= "about_pic= '$imagename',";
        $query.= "about_description= '$about_description' WHERE id=1";
        $run = mysqli_query($db,$query);
        if($run){
        echo "<script>Window.location.href = '../admin/index.php?aboutsetting=true';</script>";
        }   
    
    
   
    
}

//Skill Insert:
if(isset($_POST['add_skill'])){
    //print_r($_POST);
    $skill_name= $_POST['skill_name'];
    $skill_level= $_POST['skill_level'];

    $query = "INSERT INTO skill(skill_name,skill_level)VALUES ('$skill_name','$skill_level')";
    $run = mysqli_query($db,$query);
    if($run){
        echo "<script>Window.location.href = '../admin/index.php?aboutsetting=true';</script>";
    }

    
   
    
}

//Personal Insert:
if(isset($_POST['add_pi'])){
    //print_r($_POST);
     $lebel= $_POST['lebel'];
    $value= $_POST['value'];

    $query = "INSERT INTO personal_info(lebel,value)VALUES ('$lebel','$value')";
    $run = mysqli_query($db,$query);
    if($run){
        echo "<script>Window.location.href = '../admin/index.php?aboutsetting=true';</script>";
    }
 
    
   
    
}

//Resume Insert:
if(isset($_POST['add_resume'])){
    //print_r($_POST);
     $type= $_POST['type'];
    $title= $_POST['title'];
    $time= $_POST['time'];
    $org= $_POST['org'];
    $about_exp= $_POST['about_exp'];
    

    $query = "INSERT INTO resume(type,title,time,org,about_exp)VALUES ('$type','$title','$time','$org','$about_exp')";
    $run = mysqli_query($db,$query);
    if($run){
        echo "<script>Window.location.href = '../admin/index.php?resumesetting=true';</script>";
    }
 
    
   
    
}

//Project Update
if(isset($_POST['add_project'])){
    print_r($_POST);
    print_r($_FILES);
     $pro_type= $_POST['pro_type'];
     $pro_name= $_POST['pro_name'];
     $pro_link= $_POST['pro_link'];
    $pro_image= time().$_FILES['pro_pic'] ['name'];
   

     move_uploaded_file($_FILES['pro_pic']['tmp_name'],"../../../protfolio/view/images/$pro_image");

    $query = "INSERT INTO protfolio(pro_type,pro_pic,pro_name,pro_link)VALUES ('$pro_type','$pro_image','$pro_name','$pro_link)";
    $run = mysqli_query($db,$query);
    if($run){
        echo "<script>Window.location.href = '../admin/index.php?protfoliosetting=true';</script>";
    } 
  
    
   
    
}

//Contact Update:
if(isset($_POST['update_contact'])){
    print_r($_POST);
     $adress= mysqli_real_escape_string( $db,$_POST['adress'])  ;
    $email=$_POST['email']  ;
    $phone_num=$_POST['phone_num'];

    
    $query = "UPDATE contact SET ";
    $query.= "adress= '$adress',";
    $query.= "email= '$email',";
    $query.= "phone_num= '$phone_num',";
    $run = mysqli_query($db,$query);
    if($run){
        echo "<script>Window.location.href = '../admin/index.php?contactsetting=true';</script>";
    } 
}
//social media
if(isset($_POST['update_account'])){
    print_r($_POST);
    $twitter=$_POST['twitter']  ;
    $facebook=$_POST['facebook'];
    $instagram=$_POST['instagram'];
    $linkedin=$_POST['linkedin'];
    $skip=$_POST['skip'];

    
    $query = "UPDATE social_media SET ";
    $query.= "twitter= '$twitter',";
    $query.= "facebook= '$facebook',";
    $query.= "instagram= '$instagram',";
    $query.= "linkedin= '$linkedin',";
    $query.= "skip= '$skip',";
    $run = mysqli_query($db,$query);
    if($run){
        echo "<script>Window.location.href = '../admin/index.php?contactsetting=true';</script>";
    } 
}

?>