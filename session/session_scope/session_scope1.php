<?php
/*
 * -Data Sharing Domain to subdomain Access
 *
 */
session_name('our_app');
session_start([
    'cookie_domain'=>'.st.com',
    'cookie_path'=>'/'

]);

$_SESSION['name']="IRFAN";
echo $_SESSION['name'];


