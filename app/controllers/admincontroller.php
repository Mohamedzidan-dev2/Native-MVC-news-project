<?php

namespace MVC\controllers;

use MVC\core\controller;

use MVC\models\users;

use GUMP;

use MVC\core\helper;

use MVC\core\Session;

use MVC\core\model;

use MVC\models\news;

use MVC\models\category;

use MVC\models\tasks;

class admincontroller extends controller{

    // public function __construct()
    // {
    //     Session::Start();
    //     $user_data = Session::Get("user");
    //     if(empty($user_data)){
    //        helper::redirect("admin/Login");
    //        die;
    //     }      
    // }

    /*main page*/
    public function index(){
          Session::Start();
          $user_data = Session::Get("user");
          if(empty($user_data)){
             helper::redirect("admin/Login");
             die;
          }

            $obj = new tasks();
            $news_num       = $obj->getNumberOfNews();
            $admins_num     = $obj->getNumberOfAdmins();
            $users_num      = $obj->getNumberOfUsers();
            $messages_num   = $obj->getNumOfUnreadMessages();
            $info_message   = $obj->getInformationOfNewMessages();
           
           
           
            $title ="index";
            $this->view("dashboard/index",["title"=>$title,"userData"=>$user_data,"num_news"=>$news_num,"num_admins"=>$admins_num,"num_users"=>$users_num,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
   

    }
/*
/////////////////////////////////////////////////////////////////////////////
              *Start of News*
/////////////////////////////////////////////////////////////////////////////
*/
    /*news page*/
    public function news(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        }  
        $title ="Admin News";
        $obj = new news();
        $data = $obj->GetAllNews();

        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();


        

        $this->view("dashboard/news", ["title"=>$title,"data"=>$data,"userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message] );
    }

    /*addnews design page*/
    public function addnews(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 
        
        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();


        $title ="Admin News";
        $this->view("dashboard/addnews",['title'=>$title,"userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
    }

    /*addnews logic page*/
    public function postaddnews(){

        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 


        /*check img name*/
        $img_name = $_FILES['img']['name'];
        $ex =explode(".",$img_name);
        $end=end($ex);
        $arr=["jpg","jpeg"];
        if(!in_array($end,$arr)){
          echo "wrong extentions";
          die;
        }

        /*check img size*/
        $img_size = $_FILES['img']['size'];
        if($img_size >=3000000){
            echo "wrong size";
            die;
        }
         
        /*change img_tmp*/
        $img_tmp  = $_FILES['img']['tmp_name'];
        $new_name =time().rand(1,1000).$img_name;
        move_uploaded_file($img_tmp,"images/$new_name");
         
        foreach($user_data as $nameOfUser){}
    

        $data =["news"=>$_POST['news'],"img"=>$new_name,"user_name"=>$nameOfUser['name']];
        $obj = new news();
        $result = $obj->addnews($data);
        echo $result;
      
    }

    /*editnews design page*/
    public function editnews($id){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 

        $arr =$id;
        $edit_id =$arr[0];
        $obj = new news();
        $data = $obj->editnews($edit_id);
        
        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();


        $this->view("dashboard/editnews",['title'=>"Edit News","data"=>$data,"userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
    }

    /*edit news logic page*/
    public function posteditnews(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 

   if (!empty($_FILES['img']["name"])) {
    /*check img name*/
    $img_name = $_FILES['img']['name'];
    $ex =explode(".", $img_name);
    $end=end($ex);
    $arr=["jpg","jpeg"];
    if (!in_array($end, $arr)) {
        echo "wrong extentions";
        die;
    }

    /*check img size*/
    $img_size = $_FILES['img']['size'];
    if ($img_size >=3000000) {
        echo "wrong size";
        die;
    }

    /*change img_tmp*/
    $img_tmp  = $_FILES['img']['tmp_name'];
    $new_name =time().rand(1, 1000).$img_name;
    move_uploaded_file($img_tmp, "images/$new_name");

    $data =["news"=>$_POST['news'],"img"=>$new_name];

    }else{
        $data =["news"=>$_POST['news'] ];
    }
            $id = ["id"=>$_POST['id']];

        $obj = new news();
        $res =  $obj->editnewslogic($data,$id);
        echo $res;
      
       
    }

    /*delete news*/
    public function deletenews($id){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 
        $arr = $id;
        $news_id = $arr[0];
        $obj = new news();
        $data = $obj->delete($news_id);
        if($data){
            helper::redirect("admin/news");
        }

    }
/*
/////////////////////////////////////////////////////////////////////////////
              *End of News*
/////////////////////////////////////////////////////////////////////////////
*/


/*
/////////////////////////////////////////////////////////////////////////////
              *Start of ctegory*
/////////////////////////////////////////////////////////////////////////////
*/
    /*category design page*/
    public function category(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 
        $obj = new category();
        $data = $obj->GetAllCategory();

        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();

        
        $this->view("dashboard/category",["title"=>"Category Page","data"=>$data,"userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
    }

    /*add category design page*/
    public function addCategory(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 

        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();


        $this->view("dashboard/addcategory",['title'=>"Add Category","userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
    }

    /*add category logic page*/
    public function postaddcategory(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 

        /*check img name*/
        $img_name2 = $_FILES['img']['name'];
        $ex2 =explode(".",$img_name2);
        $end2=end($ex2);
        $arr2=["jpg","jpeg"];
        if(!in_array($end2,$arr2)){
          echo "wrong extentions";
          die;
        }

        /*check img size*/
        $img_size2 = $_FILES['img']['size'];
        if($img_size2 >=3000000){
            echo "wrong size";
            die;
        }
         
        /*change img_tmp*/
        $img_tmp2  = $_FILES['img']['tmp_name'];
        $new_name2 =time().rand(1,1000).$img_name2;
        move_uploaded_file($img_tmp2,"images/$new_name2");

        $data =["name"=>$_POST['name'],"icon"=>$new_name2];
        $obj = new category();
        $result = $obj->addcategory($data);
        echo $result;
    }

    /*delete category*/
    public function deleteCategory($id){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 

        $arr =$id;
        $cat_id =$arr[0];
      
        $obj = new category();
        $data = $obj->deletecategory($cat_id);
        if($data){
            helper::redirect("admin/category");
        }

    }

    /*edit category design page*/
    public function editCategory($id){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 

        $arr =$id;
        $item_id = $arr[0];
        $obj  = new category();
        $data =  $obj->editCategory($item_id);

        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();


        $this->view("dashboard/editcategory",['title'=>"Edit Category",'data'=>$data,"userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
    }

    /*EDIT CATEGORY LOGIC PAGE*/
    public function PostEditCategory(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 

        if(!empty($_FILES["img"]["name"])){
            /*check img name*/
            $img_name = $_FILES['img']['name'];
            $ex =explode(".", $img_name);
            $end=end($ex);
            $arr=["jpg","jpeg"];
            if (!in_array($end, $arr)) {
                echo "wrong extentions";
                die;
            }
        
            /*check img size*/
            $img_size = $_FILES['img']['size'];
            if ($img_size >=3000000) {
                echo "wrong size";
                die;
            }
        
            /*change img_tmp*/
            $img_tmp  = $_FILES['img']['tmp_name'];
            $new_name =time().rand(1, 1000).$img_name;
            move_uploaded_file($img_tmp, "images/$new_name");    

            $data = ["name"=>$_POST['name'],"icon"=>$new_name];     
        }else{
            $data = ["name"=>$_POST['name']];  
        }
    
        $obj = new category();
        $id =["id"=>$_POST['id']];
        $data = $obj ->PostEditCategory($data,$id);
        echo $data;
    }
/*
/////////////////////////////////////////////////////////////////////////////
              *End of Category*
/////////////////////////////////////////////////////////////////////////////
*/

/*
/////////////////////////////////////////////////////////////////////////////
              *Start of Users*
/////////////////////////////////////////////////////////////////////////////
*/
    /*all users design page*/
    public function users(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 
        $obj = new users();
        $data = $obj->AllUsers(); 

        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();


        $this->view("dashboard/users",["title"=>"Users Page","data"=>$data,"userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
    }

    /*add users design page*/
    public function addUser(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 

        $obj = new users();
        $data = $obj->AllGender(); 

        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();


        $this->view("dashboard/adduser",["title"=>"Add User","data"=>$data,"userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
    }

    /*add user logic page*/
    public function PostAddUser(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 

        $obj  = new users();
        $data = ["name"=>$_POST['name'],"email"=>$_POST['email'],"password"=>md5($_POST["password"]),"gender"=>$_POST['gender']];
        $data = $obj->AddUserLogic($data);   
        echo $data; 
    }

    /*edit users design page*/
    public function EditUser($id){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 

        $arr = $id;
        $get_id = $arr[0];
        $obj  = new users();

        $data_users  = $obj -> edituser($get_id);
        $data_gender = $obj-> AllGender();

        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();


        $this->view("dashboard/edituser",["title"=>"edit user","data"=>$data_users,"data_g"=>$data_gender,"userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
    }

    /*edit user logic page*/
    public function PostEditUser(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 
     
        if(!empty($_POST['password'])){
            $data = ["name"=>$_POST['name'],"email"=>$_POST['email'],"gender"=>$_POST['gender'],"password"=>md5($_POST['password'])];
        }else{
            $data = ["name"=>$_POST['name'],"email"=>$_POST['email'],"gender"=>$_POST['gender']];
        }
        $obj  = new users();
        // $data = ["name"=>$_POST['name'],"email"=>$_POST['email']]
        $id_user_edit  = ["id"=> $_POST['id']];
        $res = $obj->EditUserLogic($data,$id_user_edit);
        echo $res;
    }

    /*delete user*/
    public function DeleteUser($id){
        $arr = $id;
        $id2 = $arr[0];
        $obj = new users();
        $res = $obj->deleteUser($id2);
        if($res){
            helper::redirect("admin/users");
        }else{
            echo $res;
        }
    }

    /*
/////////////////////////////////////////////////////////////////////////////
              *End of Users*
/////////////////////////////////////////////////////////////////////////////
*/



/*
/////////////////////////////////////////////////////////////////////////////
              *Start of Admins*
/////////////////////////////////////////////////////////////////////////////
*/
    /*Design page of all admins*/
    public function Admins(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 

        
        $obj = new users();
        $data = $obj->AllAdmins();

        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();


        $this->view("dashboard/admins",["title"=>"title","data"=>$data,"userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
    }

    /*Add More Admins*/
    public function AddAdmins(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 
        
        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();


        $this->view("dashboard/addadmins",["title"=>"add admin","userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
    }

    public function PostAddAdmin(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 
        /*check img name*/
        $img_name = $_FILES['img']['name'];
        $ex =explode(".", $img_name);
        $end=end($ex);
        $arr=["jpg","jpeg"];
        if (!in_array($end, $arr)) {
            echo "wrong extentions";
            die;
        }
    
        /*check img size*/
        $img_size = $_FILES['img']['size'];
        if ($img_size >=3000000) {
            echo "wrong size";
            die;
        }
    
        /*change img_tmp*/
        $img_tmp  = $_FILES['img']['tmp_name'];
        $new_img_name =time().rand(1, 1000).$img_name;
        move_uploaded_file($img_tmp, "images/$new_img_name");  


        if($_POST['priv_number'] == 300){
            $privName ="Owner";
            $data =["name"=>$_POST['name'],"password"=>md5($_POST['password']),"email"=>$_POST['email'],"privliges"=>$privName,"img"=>$new_img_name,"priv_number"=>$_POST["priv_number"]];

        }elseif($_POST['priv_number'] == 200){
            $privName ="Admin";
            $data =["name"=>$_POST['name'],"password"=>md5($_POST['password']),"email"=>$_POST['email'],"privliges"=>$privName,"img"=>$new_img_name,"priv_number"=>$_POST["priv_number"]];

        }elseif($_POST['priv_number'] == 100){
            $privName ="superviser";
            $data =["name"=>$_POST['name'],"password"=>md5($_POST['password']),"email"=>$_POST['email'],"privliges"=>$privName,"img"=>$new_img_name,"priv_number"=>$_POST["priv_number"]];

        }
        
        $obj = new users();
        $result = $obj-> AddAdmins($data);
        echo $result;
    }

    /*Edit Admin DESIGN PAGE*/
    public function EditAdmin($id){

        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 
        $arr = $id;
        $admin_id = $arr[0];

        $obj = new users();
        $result = $obj-> selectAdmin($admin_id);

        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();


        $this->view("dashboard/editadmins",["title"=>"edit admin","data"=>$result,"userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
    }

    /*Edit Admins Logic Page*/
    public function PostEditAdmin(){
    Session::Start();
    $user_data = Session::Get("user");
    if (empty($user_data)) {
        helper::redirect("admin/Login");
        die;
    }




            if(!empty($_FILES['img']['name'])){

                /*check img name*/
                $img_name = $_FILES['img']['name'];
                $ex =explode(".", $img_name);
                $end=end($ex);
                $arr=["jpg","jpeg"];
                if (!in_array($end, $arr)) {
                    echo "wrong extentions";
                    die;
                }

                /*check img size*/
                $img_size = $_FILES['img']['size'];
                if ($img_size >=3000000) {
                    echo "wrong size";
                    die;
                }

                /*change img_tmp*/
                $img_tmp  = $_FILES['img']['tmp_name'];
                $new_name_image =time().rand(1, 1000).$img_name;
                move_uploaded_file($img_tmp, "images/$new_name_image");


                $data = ["img"=>$new_name_image];
                $id =["id"=>$_POST['id']];

                $obj = new users();
                $data  = $obj->updateAdmin($data,$id);
        
            }
          
            if (!empty($_POST['password'])) {
                $pass = md5($_POST['password']);


                $data = ["password"=>$pass];
                $id =["id"=>$_POST['id']];

                $obj = new users();
                $data  = $obj->updateAdmin($data, $id);
            }

            if ($_POST['priv_number'] == 300) {
                $priv_name ="Owner";
                $data =["name"=>$_POST['name'],"email"=>$_POST['email'],"privliges"=>$priv_name,"priv_number"=>$_POST["priv_number"]];
            } elseif ($_POST['priv_number'] == 200) {
                $priv_name ="Admin";
                $data =["name"=>$_POST['name'],"email"=>$_POST['email'],"privliges"=>$priv_name,"priv_number"=>$_POST["priv_number"]];
            } elseif ($_POST['priv_number'] == 100) {
                $priv_name ="superviser";
                $data =["name"=>$_POST['name'],"email"=>$_POST['email'],"privliges"=>$priv_name,"priv_number"=>$_POST["priv_number"]];
            }

            $id =["id"=>$_POST['id']];

            $obj = new users();
            $data  = $obj->updateAdmin($data, $id);
            echo $data;
                    



    }

    /*DELETE ADMINS*/
    public function deleteAdmins($id){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 
        $arr =  $id ;
        $delete_id = $arr[0];
        $obj = new users();
        $data  = $obj->deleteAdmin($delete_id);
        if($data){
            helper::redirect("admin/admins");
        }
    }


    /*
/////////////////////////////////////////////////////////////////////////////
              *End of Admins*
/////////////////////////////////////////////////////////////////////////////
*/


/*
/////////////////////////////////////////////////////////////////////////////
              *Start of Login*
/////////////////////////////////////////////////////////////////////////////
*/
      /*login design page for dashboard*/
    public function Login(){
        $this->view("dashboard/login",["title"=>"Login"]);
    }
    
    /*postlogin */
    public function postLogin(){

        $name = $_POST['name'];
        $password = $_POST['password'];

       $obj = new users();
       $data = $obj->getThatAdmin($name,$password);
    //    print_r($data);
       Session::Start();
       Session::Set("user",$data);
       helper::redirect("admin/index");

    }

/*
/////////////////////////////////////////////////////////////////////////////
              *End of Login*
/////////////////////////////////////////////////////////////////////////////
*/    
/*
/////////////////////////////////////////////////////////////////////////////
              *StART  of Logout*
/////////////////////////////////////////////////////////////////////////////
*/    
    
    public function Logout(){
        Session::Start();
        Session::Stop();
        helper::redirect("admin/Login");
    }


    /*
/////////////////////////////////////////////////////////////////////////////
              *StART  of Messages*
/////////////////////////////////////////////////////////////////////////////
*/    
    // get all messages
    public function Messages(){
        Session::Start();
        $user_data = Session::Get("user");
        if(empty($user_data)){
           helper::redirect("admin/Login");
           die;
        } 

        $obj = new users();
        $data = $obj->getAllMessages();

        $tasks = new tasks();
        $messages_num   = $tasks->getNumOfUnreadMessages();
        $info_message   = $tasks->getInformationOfNewMessages();


        $this->view("dashboard/Messages",["title"=>"Messages Page","data"=>$data,"userData"=>$user_data,"num_unread_messages"=>$messages_num,"info_of_new_message"=>$info_message]);
    }

    // change status of messages to readed 
    public function messageStatus(){
        $data = ["view"=>'1'];
        $id =["id" => $_POST['id']];
        $obj = new users();
        $d = $obj->updateMessage($data,$id);

        if($d){
            echo $d ;
        }else{
            echo $d ;
        }
    }

    // delete messages by id
    public function DeleteMessage($id){
        $arr= $id;
        $mess_id = $arr[0];
        $obj = new users();
        $res = $obj->deleteMessage($mess_id);
        if($res){
            helper::redirect("admin/Messages");
        }else{
            echo "error";
        }

    }
   

}