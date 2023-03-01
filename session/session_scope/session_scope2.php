<?php
session_name('our_app');
session_start([
    'cookie_domain'=>'.st.com',
    'cookie_path'=>'/'

]);
$_SESSION['name2']="Hossain";
echo $_SESSION['name'];