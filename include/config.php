<?php
$__pattern = '/vubi';

include 'conf.php';

class Config
{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "vubi";
    private $username = "root";
    private $password = "";
    private $port = "3306";
    protected $conn;
    public $u;
    public $me;
    public $request;
    public $JS;

    public function __construct()
    {
        $this->JS = '';
        $this->currentURL = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $this->u = (isset($_SESSION['username'])) ? $_SESSION['username'] : null;
        if ($this->getConnection()) {
            $this->me = $this->getUserInfo();
            return true;
        } else {
            return false;
        }

    }

    function breadcumb($ar) {
        $html = '<div class="breadcrumb"><div class="main">
        <ul>
        <li><a href="/">Trang chủ</a></li>';
        foreach ($ar as $iK => $iO) {
            $html .= '<li><a href="#">&gt;</a></li>
            <li><a href="'.$iO['link'].'">'.$iO['title'].' </a></li>';
        }
        $html .= '</ul>
        </div></div>';
        return $html;
    }

    // get the database connection
    public function getConnection()
    {

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql: host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

    // used for the 'created' field when creating a product
    public function getTimestamp()
    {
        date_default_timezone_set('Asia/Manila');
        $this->timestamp = date('Y-m-d H:i:s');
    }

    public function getUserInfo($u = '', $fields = '')
    {
        if (!$u) {
            $u = $this->u;
        }

        $defaultFields = '*';
        $query = "SELECT
					*
				FROM
                    members
				WHERE
                    username = ? OR id = ?
				LIMIT
					0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $u);
        $stmt->bindParam(2, $u);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (isset($row['id']) && $row['id']) {
            return $row;
        }
        return false;
    }

    public function get($char)
    {
        $request = $this->request;
        if ($request && check($request, $char) > 0) {
            $ca = explode($char . '=', $request);
            if (isset($ca[1])) {
                $c = $ca[1];
                $c = explode('&', $c)[0];
                $request = str_replace("{$char}={$c}&", "", $request);
                return $c;
            }
        }
        return null;
    }

    // show errors
    public function E($errorCode)
    {
        $config->errors[] = $errorCode;
    }
    public function E_show()
    {
        foreach ($config->errors as $errorCode) {
            switch ($errorCode) {
                case "1": // no item found
                    $eHTML = 'No item found!';
                    break;
            }
            echo '<div class="alerts alert-error">' . $eHTML . '</div>';
        }
    }

    public function addJS($type, $link)
    {
        if ($type == -1) {
            $this->JS .= $link . '|';
        } else {
            if ($type == 'dist') {
                $type = 'dist/js';
            } else if ($type != 'plugins') {
                $type = 'js';
            }
            $this->JS .= ASSETS . '/' . $type . '/' . $link . '|';
        }
    }
    public function echoJS()
    {
        $exJS = explode('|', $this->JS);
        foreach ($exJS as $exjs) {
            if ($exjs) {
                echo '<script src="' . $exjs . '"></script>';
            }

        }
    }

}

function mb_ucfirst($string, $encoding = "UTF-8")
{
    $strlen = mb_strlen($string, $encoding);
    $firstChar = mb_substr($string, 0, 1, $encoding);
    $then = mb_substr($string, 1, $strlen - 1, $encoding);
    return mb_strtoupper($firstChar, $encoding) . $then;
}

function checkInternet($sCheckHost = 'www.google.com')
{
    $connected = @fsockopen($sCheckHost, 80);
    return (bool) $connected;
}

function check($haystack, $needle)
{
    //    return strlen(strstr($string, $word)); // Find $word in $string
    return substr_count($haystack, $needle); // Find $word in $string
}

function checkURL($word)
{
    return check($_SERVER['REQUEST_URI'], $word);
}

function strip_comments($str)
{
    $str = preg_replace('!/\*.*?\*/!s', '', $str);
    $str = preg_replace('/\n\s*\n/', "\n", $str);
    $str = preg_replace('![ \t]*//.*[ \t]*[\r\n]!', '', $str);
    return $str;
}

function str_insert_after($str, $search, $insert)
{
    $index = strpos($str, $search);
    if ($index === false) {
        return $str;
    }
    return substr_replace($str, $search . $insert, $index, strlen($search));
}

function str_insert_before($str, $search, $insert)
{
    $index = strpos($str, $search);
    if ($index === false) {
        return $str;
    }
    return substr_replace($str, $insert . $search, $index, strlen($search));
}

function content($content)
{
    $content = nl2br($content);
    $content = str_replace('<br><br>', '<br/>', $content);
//    $content = preg_replace("/(#(\w+))/", '<a href="'.MAIN_URL.'/hashtag/$2">$1</a>', $content);
    //$content = preg_replace('/(^|\s)#(\w*[a-zA-Z_]+\w*)/', '\1#<a href="'.$config->hashtagLink.'\2">\2</a>', $content);
    //    return nl2br($content);
    return $content;
}

function random_color_part()
{
    return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
}

function random_color()
{
    return random_color_part() . random_color_part() . random_color_part();
}

function generateRandomString($length = 6)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function isVn($str)
{
//    $uni = 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|đ|é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|í|ì|ỉ|ĩ|ị|ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|ý|ỳ|ỷ|ỹ|ỵ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ|Đ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ|Í|Ì|Ỉ|Ĩ|Ị|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự|Ý|Ỳ|Ỷ|Ỹ|Ỵ';
    $uni = 'ả|ạ|ắ|ặ|ằ|ẳ|ẵ|ấ|ầ|ẩ|ẫ|ậ|ẻ|ẽ|ẹ|ế|ề|ể|ễ|ệ|ỉ|ĩ|ị|ỏ|ố|ồ|ổ|ỗ|ộ|ớ|ờ|ở|ỡ|ợ|ủ|cũng|ụ|ứ|ừ|ử|ữ|ự|ỷ|ỹ';
    $chars = explode('|', $uni);
    if (preg_match_all("/($uni)/i", $str, $matches)) { // if match
        return true;
    }
    return false;
}

function vn_str_filter($str)
{
    $unicode = array(
        'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
        'd' => 'đ',
        'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'i' => 'í|ì|ỉ|ĩ|ị',
        'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
        'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
        'D' => 'Đ',
        'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
        'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
        'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
    );
    foreach ($unicode as $nonUnicode => $uni) {
        $str = preg_replace("/($uni)/i", $nonUnicode, $str);
    }
    return $str;
}
function encodeURL($string, $special = null)
{
    if (!$special) {
        $special = '-';
    }

    $string = strtolower(str_replace(' ', $special, vn_str_filter($string)));
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}

define('ENCRYPTION_KEY', 'd0a7e7997b6d5fcd55f4b5c32611b87cd923e88837b63bf2941ef819dc8ca282');
// Encrypt Function
function mc_encrypt($encrypt, $key)
{
    $encrypt = serialize($encrypt);
    $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_DEV_URANDOM);
    $key = pack('H*', $key);
    $mac = hash_hmac('sha256', $encrypt, substr(bin2hex($key), -32));
    $passcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $encrypt . $mac, MCRYPT_MODE_CBC, $iv);
    $encoded = base64_encode($passcrypt) . '|' . base64_encode($iv);
    return $encoded;
}
// Decrypt Function
function mc_decrypt($decrypt, $key)
{
    $decrypt = explode('|', $decrypt . '|');
    $decoded = base64_decode($decrypt[0]);
    $iv = base64_decode($decrypt[1]);
    if (strlen($iv) !== mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC)) {
        return false;
    }
    $key = pack('H*', $key);
    $decrypted = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $decoded, MCRYPT_MODE_CBC, $iv));
    $mac = substr($decrypted, -64);
    $decrypted = substr($decrypted, 0, -64);
    $calcmac = hash_hmac('sha256', $decrypted, substr(bin2hex($key), -32));
    if ($calcmac !== $mac) {return false;}
    $decrypted = unserialize($decrypted);
    return $decrypted;
}

