php-simple-login
================

Login using a hard coded hashed password in PHP file without username.  
LGPL license  
See 'login.php' for license details.  

You can study 'example-login.php' to see it in action.  

#How To Use PHP Simple Login

1. Download 'login.php' and put it in your project folder.
2. Open 'login.php' with a texteditor.
3. Generate a new SHA1 password.
4. Replace the value of '$login_hash' with your new generated hash.

Include this at beginning of PHP file:

    <?php include("login.php"); ?>

Include this where you want to have the 'edit' link.

    <?php login(); ?>

Here are a short explaination of the settings:

    $login_hash           - The SHA1 hash of the password.
    $login_admin_flag     - The key to the $_SESSION variable that tells the user is admin.
    $login_language       - The user interface language.
    $login_interface_text - The array containing user interface text in the different languages.

##CSS Formatting

The generated HTML by the PHP script puts some ids in the tags.  
These ids can be used to control the look in CSS.

    #editLink {}
    #logoutForm {}
    #loginForm {}
    #loginContainer {}
    $errorErrorLabel {}

You should only have one login link at the entire page at a time.

##SHA1 Hash

The SHA1 hash is used to check if two passwords are the same.
The chance of two different passwords to collide is very low.
Using a hash, you can hide your original password in case it is used more than one place.
It does not give you better protection against hacking, only to prevent others from knowing the cleartext password.

You can use [SHA1 online](http://www.sha1-online.com/),
or you can use the 'login_password_to_hash' function.

##Security Note

The password from the user is sent in cleartext, so unless you use HTTPS,
the password can be read from any place routing the traffic between server and client.
It is also vulnerable against listening to packets on the wireless network.
If the login protects sensitive data, end-to-end encryption is necessary.
