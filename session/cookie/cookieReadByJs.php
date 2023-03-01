


<?php

//setcookie('username','irfan',time()+40); //40s


$myData=[
    'id'=>1,
  'name'=>"Irfan"
];

setcookie('username',json_encode($myData),time()+40); //40s
echo $_COOKIE['username'];

foreach (json_decode($_COOKIE['username'],true) as $key=>$value){
    echo $key.'='.$value;

}
?>
<!--//https://www.jsdelivr.com/package/npm/js-cookie-->
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>

<script>
  let data=  Cookies.get('username')
    alert(data)
</script>
