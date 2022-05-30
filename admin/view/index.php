<?php
 require ('../../protfolio/model/db.php');
if(!isset($_SESSION['isUserLoggedIn'])){
    echo "<script>Window.location.href = 'login.php';</script>";

} 
$query = "SELECT * FROM home,section_control,about";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
//print_r($user_data);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Protfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">My Protfolio</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            
        </nav>
        
       
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                           
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                section control
                            </a>
                            <a class="nav-link" href="index.php?homesetting=true">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home setting
                            </a>
                            <a class="nav-link" href="index.php?aboutsetting=true">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                about setting
                            </a>
                            <a class="nav-link" href="index.php?resumesetting=true">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                resume setting
                            </a>
                            <a class="nav-link" href="index.php?servicesetting=true">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                services setting
                            </a>
                            <a class="nav-link" href="index.php?protfoliosetting=true">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                protfolio setting
                            </a>
                            <a class="nav-link" href="index.php?contactsetting=true">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                contact setting
                            </a>
                            <a class="nav-link" href="index.php?accountsetting=true">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Account setting
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="../view/login.php "="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Logout
                               
                            </a>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            
                            
                        </div>
                        
                    </div>
                </nav> 
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Control admin Panal</h1>
                        <?php
                        if(isset($_GET['homesetting'])){ ?>
                        home setting
                        <form method="post" action="../view/admin.php">
                        <fieldset abled>
                            <div class="card card-primary col-lg-12">
                            <div class="card-header" >
                            <label for="disabledTextInput">Title</label>
                            <input type="text" id="disabledTextInput" class="form-control"  name="title"  value="<?=$user_data['title']?>" placeholder=" Enter Title">
                            </div>
                            <div class="card-header" >
                            <label for="disabledTextInput">sub-title</label>
                            <input type="text" id="disabledTextInput" class="form-control"   name="sub_title" value="<?=$user_data['sub_title']?>"  placeholder=" Enter sub-title">
                            </div>
                            <div class="card-header" >
                            <label for="disabledTextInput">Little-sub-title</label>
                            <input type="text" id="disabledTextInput" class="form-control"  name="littel_sub_title" value="<?=$user_data['littel_sub_title']?>" placeholder=" Enter-sub-title">
                            </div>
                            <div class="card-header" >
                            <label for="disabledTextInput">home-pic</label>
                            <input type="file" id="disabledTextInput" class="form-control" name="home_pic" value="<?=$user_data['home_pic']?>"  placeholder="home-pic">
                            </div>
                            <br>
                            
                            </div>
                            <button type="submit" name="update-home"  class="btn btn-primary"
                            >save-changes</button>
                            
                        </fieldset>
                        </form>
                        <?php 
                        }elseif(isset($_GET['aboutsetting'])){
                            ?>
                             About setting
                             <img src="../../protfolio/view/images/<?=$user_data['about_pic']?> " class="col-2">
                        <form method="post" action="../view/admin.php" enctype="multipart/form-data">
                        <fieldset abled>
                            <div class="card card-primary col-lg-12">
                            <div class="card-header" >
                            <label for="abledTextInput">About Sub Title</label>
                            <input type="text" id="disabledTextInput" class="form-control"  name="about_sub_title"  value="<?=$user_data['about_sub_title']?>" placeholder=" Enter About Sub Title">
                            </div>
                            <div class="card-header" >
                            <label for="abledTextInput">About description</label><br>
                            <textarea cols="50" name="about_description" value="<?=$user_data['about_description']?>"></textarea>
                            </div>
                            <div class="card-header" >
                            <label for="abledTextInput">About pic</label>
                            <input type="file" id="abledTextInput" class="form-control"  name="about_pic" value="<?=$user_data['about_pic']?>" placeholder=" Enter about_pic">
                            </div>
                            
                            <br>
                            
                            </div>
                            <button type="submit" name="update-about"  class="btn btn-primary"
                            >save-changes</button>
                            
                        </fieldset>
                        </form>
                        <h4>Manage skill:</h4>

                        <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">skill</h3>

                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Skill Name</th>
                                        <th>Skill Level</th>
                                        <th style="width: 40px">Level</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $q= "SELECT * FROM skill";
                                    $r=mysqli_query($db,$q);
                                    $c=1;
                                    while($skill=mysqli_fetch_array($r)){
                                        ?>

                                    <tr>
                                        <td><?=$c?></td>
                                        <td><?=$skill['skill_name']?></td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progess-bar progress-bar-danger" style="width:<?=$skill['skill_level']?>%">

                                                </div>

                                            </div>
                                        
                                        </td>
                                        <td><span class="badge bg-danger"><?=$skill['skill_level']?>%</span></td>
                                        <td> <a href="deleteskill.php?id=<?=$skill['id']?>">Delete</a></td>
                                    </tr>
                                        <?php
                                        $c++;

                                    }
                                    ?>
                                   
                                   
                                </tbody>
                            </table>
                        </div>
                            
                        <form roll="form" method="post" action="../view/admin.php">
                         <div class="card-body">
                                <div class="form-group col-6" >
                                <label for="exampleInputEmail1">Skill Name</label>
                                <input type="text"  class="form-control"  name="skill_name"   placeholder=" Enter Skill name">
                                </div>
                                <div class="form-group col-6"  >
                                    <label for="exampleInputEmail1">Skill Level</label>
                                    <br>
                                    <input type="range" min="1" mix="100" class="form-control" name="skill_level" id="exampleInputEmail1"></input>
                                    </div>
                                    <br>
                                
                                </div>
                                <div class="card-footer">
                                <button type="submit" name="add_skill"  class="btn btn-primary"
                                >add skill</button>

                            </div>
                           
                            
                       
                        </form>

                        <h4>Personal Info</h4>
                        <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manage Personal info</h3>

                        </div>
                        <div class="card-body p-0">
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Lebel</th>
                                        <th>Value</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $q= "SELECT * FROM personal_info";
                                    $r=mysqli_query($db,$q);
                                    $c=1;
                                    while($personal_info=mysqli_fetch_array($r)){
                                        ?>

                                    <tr>
                                        <td><?=$c?></td>
                                        <td><?=$personal_info['lebel']?></td>
                                        <td><?=$personal_info['value']?></td>
                                        <td> <a href="deletePersonalInfo.php?id=<?=$personal_info['id']?>">Delete</a></td>
                                    </tr>
                                        <?php
                                        $c++;

                                    }
                                    ?>
                                   
                                   
                                </tbody>
                            </table>
                        </div>
                            
                        <form roll="form" method="post" action="../view/admin.php">
                         <div class="card-body">
                                <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">Lebel Name</label><br>
                                    <input type="text"  class="form-control" name="lebel" id="exampleInputEmail1"></input>
                                </div>
                                <div class="form-group col-6"  >
                                    <label for="exampleInputEmail1">Value</label>
                                    <br>
                                    <input type="text"  class="form-control" name="value" id="exampleInputEmail1"></input>
                                    
                                    <br>
                                
                                </div>
                               
                                <div class="card-footer">
                                <button type="submit" name="add_pi"  class="btn btn-primary"
                                >add-personal-info</button>
                                </div>

                            </div>
                        </form>
                        <?php

                        }elseif(isset($_GET['resumesetting'])){

                            ?>
                            
                        <h4>Resume Setting</h4>
                        <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Resume Setting</h3>

                        </div>
                        <div class="card-body p-0">
                            <div>
                                <h4>Education & Work</h4>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Type</th>
                                        <th>Title</th>
                                        <th>Time</th>
                                        <th>Institute/Company</th>
                                        <th>About</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $q= "SELECT * FROM resume";
                                    $r=mysqli_query($db,$q);
                                    $c=1;
                                    while($resume=mysqli_fetch_array($r)){
                                        ?>

                                    <tr>
                                        <td><?=$c?></td>
                                        <td><?=$resume['type']?></td>
                                        <td><?=$resume['title']?></td>
                                        <td><?=$resume['time']?></td>
                                        <td><?=$resume['org']?></td>
                                        <td><?=$resume['about_exp']?></td>
                                        <td> <a href="deleteResume.php?id=<?=$resume['id']?>">Delete</a></td>
                                    </tr>
                                        <?php
                                        $c++;

                                    }
                                    ?>
                                   
                                   
                                </tbody>
                            </table>
                        </div>
                            
                        <form roll="form" method="post" action="../view/admin.php">
                         <div class="card-body">
                                <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">Select Type</label><br>
                                    <select name="type" class="form-control">
                                        <option value="e">Education</option>
                                        <option value="p">Professional</option>
                                    </select>
                                </div>
                                <div class="form-group col-6"  >
                                    <label for="exampleInputEmail1">Title</label>
                                    <br>
                                    <input type="text"  class="form-control" name="title" id="exampleInputEmail1"></input>
                                    
                                    <br>
                                
                                </div>
                                <div class="form-group col-6"  >
                                    <label for="exampleInputEmail1">Instution/Company:</label>
                                    <br>
                                    <input type="text"  class="form-control" name="org" id="exampleInputEmail1"></input>
                                    
                                    <br>
                                
                                </div>
                                <div class="form-group col-6"  >
                                    <label for="exampleInputEmail1">Time:</label>
                                    <br>
                                    <input type="text"  class="form-control" name="time" id="exampleInputEmail1"></input>
                                    
                                    <br>
                                
                                </div>
                                <div class="form-group col-6"  >
                                    <label for="exampleInputEmail1">About</label>
                                    <br>
                                    <input type="text"  class="form-control" name="about_exp" id="exampleInputEmail1"></input>
                                    
                                    <br>
                                
                                </div>
                                <div class="card-footer">
                                <button type="submit" name="add_resume"  class="btn btn-primary"
                                >add-resume</button>
                                </div>

                            </div>
                        </form>

                        <?php

                        }elseif(isset($_GET['protfoliosetting'])){

                            ?>
    

                        
                        <h4>Protfolio Info</h4>
                        <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Protfolio Setting</h3>

                        </div>
                        <div class="card-body p-0">
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>project type</th>
                                        <th>project pic</th>
                                        <th>project name</th>
                                        <th>project link</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $q= "SELECT * FROM protfolio";
                                    $r=mysqli_query($db,$q);
                                    $c=1;
                                    while($protfolio=mysqli_fetch_array($r)){
                                        ?>

                                    <tr>
                                        <td><?=$c?></td>
                                        <td><?=$protfolio['pro_type']?></td>
                                        <td><img src="../../protfolio/view/images/<?=$protfolio['pro_pic']?>" style="width:150px"></td>
                                        <td><?=$protfolio['pro_name']?></td>
                                        <td><a href="<?=$protfolio['pro_link']?>" target="_blank">Open link</a></td>
                                        <td> <a href="deleteProtfolio.php?id=<?=$protfolio['id']?>">Delete</a></td>
                                    </tr>
                                        <?php
                                        $c++;

                                    }
                                    ?>
                                   
                                   
                                </tbody>
                            </table>
                        </div>
                            
                        <form roll="form" method="post" action="../view/admin.php">
                         <div class="card-body">
                                <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">Select Type</label><br>
                                    <select name="pro_type" class="form-control">
                                        <option value="APP">APP</option>
                                        <option value="WEBSITE">WEBSITE</option>
                                        <option value="IDEA">IDEA</option>
                                        <option value="WEB DESIGN">WEB DESIGN</option>
                                        <option value="OTHERS">OTHERS</option>
                                    </select>
                                </div>
                                <div class="form-group col-6"  >
                                    <label for="exampleInputEmail1">Project images</label>
                                    <br>
                                    <input type="file"  class="form-control" name="pro_pic" id="exampleInputEmail1"></input>
                                    
                                    <br>
                                
                                </div>
                                <div class="form-group col-6"  >
                                    <label for="exampleInputEmail1">Project Name</label>
                                    <br>
                                    <input type="text"  class="form-control" name="pro_name" id="exampleInputEmail1"></input>
                                    
                                    <br>
                                
                                </div>
                                <div class="form-group col-6"  >
                                    <label for="exampleInputEmail1">Project Link</label>
                                    <br>
                                    <input type="text"  class="form-control" name="pro_link" id="exampleInputEmail1"></input>
                                    
                                    <br>
                                
                                </div>
                               
                                <div class="card-footer"></div>
                                <button type="submit" name="add_project"  class="btn btn-primary"
                                >Add-Project</button>
                                </div>

                            </div>
                        </form>
                           
                            <?php
                        }elseif(isset($_GET['contactsetting'])){
                            ?>
                             <form method="post" action="../view/admin.php">
                        <fieldset abled>
                            <h3>Update contract details</h3>
                            <div class="card card-primary col-lg-12">
                                <div class="card-header" >
                                <label for="disabledTextInput">Adress</label>
                                <input type="text" id="disabledTextInput" class="form-control"  name="adress"  value="<?=$user_data['adress']?>" placeholder=" Enter Adress">
                            </div>
                            <div class="card-header" >
                                <label for="disabledTextInput">Email Id</label>
                                <input type="text" id="disabledTextInput" class="form-control"   name="email" value="<?=$user_data['email']?>"  placeholder=" Enter Your Email">
                            </div>
                            <div class="card-header" >
                                <label for="disabledTextInput">Phone number</label>
                                <input type="text" id="disabledTextInput" class="form-control"  name="phone_num" value="<?=$user_data['phone_num']?>" placeholder=" Enter Your Phone Number">
                            </div>
                            
                            <br>
                            
                            </div>
                            <button type="submit" name="update_contact"  class="btn btn-primary"
                            >Update contact</button>
                            
                            <br>

                        </fieldset>
                             </form>
                        <form method="post" action="../view/admin.php">
                        <fieldset abled>
                            <h3>Update Social media details</h3>
                            <div class="card card-primary col-lg-12">
                                <div class="card-header" >
                                <label for="disabledTextInput">twitter</label>
                                <input type="text" id="disabledTextInput" class="form-control"  name="twitter"  value="<?=$user_data['twitter']?>" placeholder=" Plase Enter">
                            </div>
                            <div class="card-header" >
                                <label for="disabledTextInput"> Facebook</label>
                                <input type="text" id="disabledTextInput" class="form-control"   name="facebook" value="<?=$user_data['facebook']?>"  placeholder=" Plase Enter">
                            </div>
                            <div class="card-header" >
                                <label for="disabledTextInput">Instagram</label>
                                <input type="text" id="disabledTextInput" class="form-control"  name="instagram" value="<?=$user_data['instagram']?>" placeholder="  Plase Enter">
                            </div>
                            <div class="card-header" >
                                <label for="disabledTextInput">LinkedIn</label>
                                <input type="text" id="disabledTextInput" class="form-control"  name="linkedin" value="<?=$user_data['linkedin']?>" placeholder="  Plase Enter">
                            </div>
                            <div class="card-header" >
                                <label for="disabledTextInput">skip</label>
                                <input type="text" id="disabledTextInput" class="form-control"  name="skip" value="<?=$user_data['skip']?>" placeholder="  Plase Enter">
                            </div>
                            
                            <br>
                            
                            </div>
                            <button type="submit" name="update_account"  class="btn btn-primary"
                            >Update Account</button>
                            
                            <br>
                            
                        </fieldset>
                        </form>
                            <?php

                        }elseif(isset($_GET['changebackground'])){
                            ?>
                            <form method="post" action="../view/admin.php">
                        <fieldset abled>
                            <h3>Update contract details</h3>
                            <div class="card card-primary col-lg-12">
                                <div class="card-header" >
                                <label for="disabledTextInput">background change</label>
                                <input type="text" id="disabledTextInput" class="form-control"  name="background_change"  value="<?=$user_data['background_change']?>" placeholder=" Change Your background">
                            </div>
                            
                            
                            <br>
                            
                            </div>
                            <button type="submit" name="update_background"  class="btn btn-primary"
                            >Update Background</button>
                            
                            <br>

                        </fieldset>
                             </form>
                            <?php
                        }else{
                            
                            ?>
                    
                        
                        <form method="post" action="../view/admin.php">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                    
                                    
                                    <label>Home</label>
                                    <br>
                                    <label class="switch" > 
                                        <input type="checkbox" name ="home"  
                                        <?php
                                    if($user_data['home_section']){
                                        echo "checked";
                                    }
                                    ?>
                                        
                                        >
                                        
                                        <span class="slider round"></span>
                                        
                                        
                                        </label>
                                    
                                    
                                    
                                        
                                    
                                    
                                        <style>
                                    .switch {
                                    position: relative;
                                    display: inline-block;
                                    width: 60px;
                                    height: 34px;
                                    }

                                    .switch input { 
                                    opacity: 0;
                                    width: 0;
                                    height: 0;
                                    }

                                    .slider {
                                    position: absolute;
                                    cursor: pointer;
                                    top: 0;
                                    left: 0;
                                    right: 0;
                                    bottom: 0;
                                    background-color: #ccc;
                                    -webkit-transition: .4s;
                                    transition: .4s;
                                    }

                                    .slider:before {
                                    position: absolute;
                                    content: "";
                                    height: 26px;
                                    width: 26px;
                                    left: 4px;
                                    bottom: 4px;
                                    background-color: white;
                                    -webkit-transition: .4s;
                                    transition: .4s;
                                    }

                                    input:checked + .slider {
                                    background-color: #2196F3;
                                    }

                                    input:focus + .slider {
                                    box-shadow: 0 0 1px #2196F3;
                                    }

                                    input:checked + .slider:before {
                                    -webkit-transform: translateX(26px);
                                    -ms-transform: translateX(26px);
                                    transform: translateX(26px);
                                    }

                                    /* Rounded sliders */
                                    .slider.round {
                                    border-radius: 34px;
                                    }

                                    .slider.round:before {
                                    border-radius: 50%;
                                    }
                                    </style>

                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                    <label>about</label>
                                    <br>
                                    <label class="switch"> 
                                        <input type="checkbox" name ="about" 
                                        <?php
                                    if($user_data['about_section']){
                                        echo "checked";
                                    }
                                    ?>
                                        
                                        >
                                        
                                        <span class="slider round"></span>
                                        
                                        
                                        </label>
                                        
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                    <label>resume</label>
                                    <br>
                                    <label class="switch"> 
                                        <input type="checkbox" name ="resume" 
                                        <?php
                                    if($user_data['resume_section']){
                                        echo "checked";
                                    }
                                    ?>
                                        
                                        >
                                        
                                        <span class="slider round"></span>
                                        
                                        
                                        </label>
                                        
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                    <label>services</label>
                                    <br>
                                    <label class="switch"> 
                                        <input type="checkbox" name ="services" 
                                        <?php
                                    if($user_data['services_section']){
                                        echo "checked";
                                    }
                                    ?>
                                        
                                        >
                                        
                                        <span class="slider round"></span>
                                        
                                        
                                        </label>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                    <label>protfolio</label>
                                    <br>
                                    <label class="switch"> 
                                        <input type="checkbox" name ="protfolio" 
                                        <?php
                                    if($user_data['protfolio_section']){
                                        echo "checked";
                                    }
                                    ?>
                                        
                                        >
                                        
                                        <span class="slider round"></span>
                                        
                                        
                                        </label>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                    <label>contact</label>
                                    <br>
                                    <label class="switch"> 
                                        <input type="checkbox" name ="contact"
                                        <?php
                                    if($user_data['contact_section']){
                                        echo "checked";
                                    }
                                    ?>
                                        
                                        >
                                        
                                        <span class="slider round"></span>
                                        
                                        
                                        </label>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                    <label>Background Change</label>
                                    <br>
                                    <label class="switch"> 
                                        <input type="checkbox" name ="background_change"
                                        <?php
                                    if($user_data['background_change_section']){
                                        echo "checked";
                                    }
                                    ?>
                                        
                                        >
                                        
                                        <span class="slider round"></span>
                                        
                                        
                                        </label>
                                    </div>
                                </div>
                                
                            
                            
                            </div>
                            <br>
                            <input type="submit"  class="btn btn-primary" name="update-section"  value="save-changes">
                        </form>
<?php
}
?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>  
       </div>
            
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
      
    </body>
    
</html>
