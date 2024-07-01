<?php

namespace App\Core;

use App\Controllers\Account;
use App\Controllers\Accountsecurity;
use App\Controllers\Admin;
use App\Controllers\Blog;
use App\Controllers\Contact;
use App\Controllers\Dashboard;
use App\Controllers\Home;
use App\Controllers\Login;
use App\Controllers\Forgotpassword;
use App\Controllers\Post;
use App\Controllers\Posts;
use App\Controllers\Reception;
use App\Controllers\Register;
use App\Core\Request;
use App\Core\Exception;

/* Utilisation de la condition switch pour optimiser le code */
class Router
{
    protected $routes;
    public function run()
    {

        $request = new Request();
        try {
            if ($request->get('action')) {
                $routes = $request->get('action');
                switch ($routes) {

                    case 'contact':
                        $contact = new Contact();
                        $contact->contact();
                        break;

                    case 'reception':
                        $reception = new Reception();
                        $reception->reception();
                        break;


                    case 'login':
                        $login = new Login();
                        $login->login();
                        break;

                        case 'account':
                            $account = new Account();
                            $account->account();
                            break;

                            case 'accountsecurity':
                                $accountSecurity = new Accountsecurity();
                                $accountSecurity->accountSecurity();
                                break;


                    case 'register':
                        $register = new Register();
                        $register->register();
                        break;

                        case 'forgotpassword':
                            $forgotpassword = new Forgotpassword();
                            $forgotpassword->forgotPassword();
                            break;

                                case 'admin':
                                    $admin = new Admin;
                                    $admin->admin();
                                    break;

                    case 'blog':
                        $blog = new Blog();
                        $blog->blog();
                        break;

                    case 'posts':
                        $posts = new Posts();
                        $posts->posts();
                        break;

                    case 'post':
                        $post = new Post();
                        $post->post();
                        break;

                    case 'home':
                        $home = new Home();
                        $home->accueil();
                        break;

                    default:
                        break;
                }
            } else {
                $home = new Home();
                $home->accueil();
            }
        } catch(Exception $e) {
            $errorMsg = $e->getMessage();
            require('../src/views/404.php');
        }
    }
}
