<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Register;

session_start();
class RegisterController extends Controller
{
    protected function register(Request $accounts)
    {
        // $register = new Register();
        // return $register->create_account();


        // $posts = DB::select('select * from profile_info');
        // var_dump($posts);

        // $posts = DB::table('profile_info')->select('*')->get();

        $data = Register::where('email', ($accounts->email))->first();

        if ($data) {

            if (($data->email) == ($accounts->email) && ($data->password) == ($accounts->password)) {
                if (str_contains($data->email, '@admin')) {
                    echo "<script>window.location.href ='/gpay.com/dashboard/' </script>";
                    setcookie("email_client", $accounts->email, time() + (86400 * 30), "/");
                    $_SESSION['email'] = $accounts->email;
                } else {
                    echo "<script>alert('other page!')</script>";
                }
            } else {
                echo "<script>alert('No account occurred!')</script>";
                echo "<script>window.location.href ='/gpay.com/register/' </script>";
            }
        } else {
            echo "<script>alert('No account occurred!')</script>";
            echo "<script>window.location.href ='/gpay.com/register/' </script>";
        }
    }
}
