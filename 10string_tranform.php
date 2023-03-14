<?php
/*
 *   strtolower()
 *   strtoupper()
 *   ucwords()
 *   ucfirst()
 */


$string="

The true story of Santa Claus begins with Nicholas, who was born during the third century in the village of Patara. At the time the area was Greek and is now on the southern coast of Turkey. His wealthy parents, who raised him to be a devout Christian, died in an epidemic while Nicholas was still young. Obeying Jesus' words to \"sell what you own and give the money to the poor,' Nicholas used his whole inheritance to assist the needy, the sick, and the suffering. He dedicated his life to serving God

";


echo "String Lower :<br/>";
echo strtolower($string);
echo "<br/>";

echo "String Upper :<br/>";
echo strtoupper($string);
echo "<br/>";

echo "String UcWords :<br/>";
echo ucwords($string);
echo "<br/>";

echo "String ucfirst :<br/>";
echo ucfirst($string);
echo "<br/>";

