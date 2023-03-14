<?php
/*
 *
 * - স্ট্রিংয়ে ওয়ার্ডর‍্যাপ
 */
$string="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cupiditate debitis dolorum eaque eos error et illo quo repellat saepe!";
echo wordwrap($string,20);
echo "<br>";
echo wordwrap($string,20,"<br/>",true);
