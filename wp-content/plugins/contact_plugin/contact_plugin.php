<?php
/*
*Plugin Name: Contact plugin

*/
require_once 'connection.php';
ob_start();

function contact_form_plugin()
{
    $content = '';
    $content .= '<form method="post" action="http://localhost/wordpress2/thank-you/" >';
    $content .='<label for="your_name">Name : </label> <br />';
    $content .='<input type="text" name="your_name" placeholder="Enter your name" required /> <br />';
    $content .='<label for="your_email">Email : </label> <br />';
    $content .='<input type="email" name="your_email" placeholder="Enter your Email" required /> <br />';
    $content .='<label for="your_subject">Subject : </label> <br />';
    $content .='<input type="text" name="your_subject" placeholder="Enter your subject" required /> <br />';
    $content .='<label for="your_message">Message :</label> <br />';
    $content .='<textarea name="your_comments" placeholder="Message??" required rows="3" cols="33"></textarea>';
    $content .='<input type="submit" name="submit"  value="send"/>';
    $content .= '</form>';
    return $content;

}

function admin_dashborad(){
    add_menu_page('forms','Contact','manage_options','contact-dashbord','admin_menu_main','dashicons-email',4);
}

add_action('admin_menu','admin_dashborad');

function admin_menu_main(){
    require_once 'affichage.php';

}
add_shortcode('contact_form','contact_form_plugin');


    if(isset($_POST['submit']))
    {
        // create_table();
        insert_data();
    }

    function create_table(){

        $con=new DB();
        $cnx=$con->connect();
        $sql = "CREATE TABLE ContactUs( id int NOT NULL PRIMARY KEY AUTO_INCREMENT, fullname varchar(255) NOT NULL, email varchar(55) NOT NULL,subjecte varchar(55) NOT NULL, content varchar(255) NOT NULL)";
        $res=$cnx->prepare($sql);
        $res->execute();
        return $res;

    }
    register_activation_hook(__FILE__,'create_table');

    function Drop_table(){
        $con=new DB();
        $cnx=$con->connect();
        $requette = "DROP TABLE contactus ";
        $res=$cnx->prepare($requette);
        $res->execute();
        return $res;
      
      }
      register_uninstall_hook( __FILE__,'Drop_table');

    function insert_data(){

        $con=new DB();
        $cnx=$con->connect();
        $name = $_POST['your_name'];
        $email = $_POST['your_email'];
        $subject = $_POST['your_subject'];
        $content = $_POST['your_comments'];
        $requette="INSERT INTO ContactUs (fullname,email,subjecte,content)" . "VALUES ('$name','$email','$subject','$content')";
        $res=$cnx->prepare($requette);
        $res->execute();

    }

?>

