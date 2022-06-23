<?PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
//$sender = 'palinviola@rack-track.com';
//$recipient = 'palinviola@gmail.com';
//
//$subject = "php mail test";
//$message = "php test message";
//$headers = 'From:' . $sender;
//
//if (mail($recipient, $subject, $message, $headers))
//{
//    echo "Message accepted";
//}
//else
//{
//    echo "Error: Message not accepted";
//}
//

//function createRandomID($length = 13): string
//{
////    $random = '';
////    for ($i = 0; $i < $length; $i++)
////    {
////        $random .= chr(rand(ord('0'), ord('z')));
////    }
//
//    $time = strtotime('today')*1000+rand(10000,99999);
//    return str_shuffle($time);
//}
//
//function alphaID($in, $to_num = false, $pad_up = false, $pass_key = null)
//{
//    $out   =   '';
//    $index = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//    $base  = strlen($index);
//
//    if ($pass_key !== null) {
//        // Although this function's purpose is to just make the
//        // ID short - and not so much secure,
//        // with this patch by Simon Franz (http://blog.snaky.org/)
//        // you can optionally supply a password to make it harder
//        // to calculate the corresponding numeric ID
//
//        for ($n = 0; $n < strlen($index); $n++) {
//            $i[] = substr($index, $n, 1);
//        }
//
//        $pass_hash = hash('sha256',$pass_key);
//        $pass_hash = (strlen($pass_hash) < strlen($index) ? hash('sha512', $pass_key) : $pass_hash);
//
//        for ($n = 0; $n < strlen($index); $n++) {
//            $p[] =  substr($pass_hash, $n, 1);
//        }
//
//        array_multisort($p, SORT_DESC, $i);
//        $index = implode($i);
//    }
//
//    if ($to_num) {
//        // Digital number  <<--  alphabet letter code
//        $len = strlen($in) - 1;
//
//        for ($t = $len; $t >= 0; $t--) {
//            $bcp = bcpow($base, $len - $t);
//            $out = $out + strpos($index, substr($in, $t, 1)) * $bcp;
//        }
//
//        if (is_numeric($pad_up)) {
//            $pad_up--;
//
//            if ($pad_up > 0) {
//                $out -= pow($base, $pad_up);
//            }
//        }
//    } else {
//        // Digital number  -->>  alphabet letter code
//        if (is_numeric($pad_up)) {
//            $pad_up--;
//
//            if ($pad_up > 0) {
//                $in += pow($base, $pad_up);
//            }
//        }
//
//        for ($t = ($in != 0 ? floor(log($in, $base)) : 0); $t >= 0; $t--) {
//            $bcp = bcpow($base, $t);
//            $a   = floor($in / $bcp) % $base;
//            $out = $out . substr($index, $a, 1);
//            $in  = $in - ($a * $bcp);
//        }
//    }
//
//    return $out;
//}
////echo createRandomID();
//$number_in = createRandomID();
//$alpha_out  = alphaID($number_in, false, 8);
//
////if ($number_in != $number_out) {
////echo "Conversion failure, ".$alpha_in." returns ".$number_out." instead of the ";
////echo "desired: ".$number_in."\n";
//// }
////if ($alpha_in != $alpha_out) {
////echo "Conversion failure, ".$number_in." returns ".$alpha_out." instead of the ";
//// echo "desired: ".$alpha_in."\n";
//// }
//
// echo $number_in." => ".$alpha_out."\n";
//
//echo "<pre>";
//print_r(get_loaded_extensions());
//echo "<pre/>";


//echo "test: ".bcpow('4.2', '3', 2); // 74.08

$base = "4.2";
$exponent = "3";

// calculates the value
//number without scale value

function power($num, $x)
{
    if ($x == 0) return 1;
    else if ($x > 0) return $num * pow($num, --$x);
    else return 1 / $num * pow($num, ++$x);
}
$result = power($base, $exponent);

//used equal parameters
echo "The output is: ", $result;
?>
