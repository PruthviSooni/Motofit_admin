<?php /** @noinspection ALL */

require "init.php";
$title = "Motofit Services Station";
$msg = $_POST['msg'];
$phone_number = $_POST['phone_number'];
$date = $_POST['date'];
$time = $_POST['time'];
$message = "Your Vehicle is Ready  for Delivery " . $msg . "at \n Date :" . $date . " \n Time :" . $time;

$path_to_test = "https://fcm.googleapis.com/fcm/send";
$server_key = "AAAA0CmO-EU:APA91bFnCIc0zO-lNIclU6IeHSoOf__KI8uZeolUfsHXpz16O1sjDrcfIvB71oRH2y218rAWodBq_yN3chczcscExI83V3V3pEVXyyw3sujj8TtWpB_EAX9ukI9GZvWwICCR0o_U7H1O";
$sql = "SELECT fcm_token FROM fcm_info where phone_num ='$phone_number';";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_row($result);
$key = $row[0];

$headers = array(
    'Authorization:key=' . $server_key,
    'Content-Type:application/json'
);

$fields = array('to' => $key, 'notification' => array('title' => $title, 'body' => $message));

$payload = json_encode($fields);

$curl_session = curl_init();
curl_setopt($curl_session, CURLOPT_URL, $path_to_test);
curl_setopt($curl_session, CURLOPT_POST, true);
curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);

$result = curl_exec($curl_session);

echo $result;


curl_close($curl_session);
mysqli_close($con);

?>