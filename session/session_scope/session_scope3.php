<?php
session_name('our_app');
session_start([
    'cookie_domain'=>'.st.com',
    'cookie_path'=>'/'

]);
echo $_SESSION['name'];
echo "<br/>";
echo $_SESSION['name2'];