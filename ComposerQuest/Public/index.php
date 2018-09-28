<?php
/**
 * Created by PhpStorm.
 * User: worti
 * Date: 28/09/18
 * Time: 09:31
 */


require __DIR__ . '/../vendor/autoload.php';

/*use HelloWorld\SayHello;
use App\Wcs\Hello;

echo SayHello::world();
echo "<br>";
echo Hello::talk();
*/

$hello = new App\Wcs\Hello();
$hello_world = new \HelloWorld\SayHello();

echo $hello->talk();
echo "<br>";
echo $hello_world->world();


