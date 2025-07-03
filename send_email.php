<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize inputs
    $name     = htmlspecialchars(trim($_POST["name"] ?? ''));
    $address  = htmlspecialchars(trim($_POST["address"] ?? ''));
    $phone    = htmlspecialchars(trim($_POST["phone"] ?? ''));
    $product  = htmlspecialchars(trim($_POST["product"] ?? ''));
    $price    = htmlspecialchars(trim($_POST["price"] ?? ''));
    $language = $_POST["language"] ?? 'mk';

    // Validate required fields
    if (empty($name) || empty($address) || empty($phone) || empty($product) || empty($price)) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'error' => $language === 'sq' ? 'Ju lutemi plotësoni të gjitha fushat.' : 'Пополнете ги сите полиња.'
        ]);
        exit;
    }

    $subject = ($language === 'sq' ? "Porosi e re" : "Нова нарачка") . " - $product";

    $mail = new PHPMailer(true);

    try {
        // Debug output (optional)
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = function ($str, $level) {
            error_log("SMTP Debug level $level: $str");
        };

        // SMTP config
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'presslogic36@gmail.com';
        $mail->Password   = 'qsoz cpnl dvwd ibfs'; // App password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Email content
        $mail->setFrom('no-reply@mobilmarket.mk', 'MobilMarket');
        $mail->addAddress('berkanr17@gmail.com');
        $mail->addAddress('altinejup@gmail.com');

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $subject;
        $mail->Body = "
            <h3 style='color:#2563eb;'>".($language === 'sq' ? "Porosi e re" : "Нова нарачка")."</h3>
            <p><strong>".($language === 'sq' ? "Produkti" : "Производ").":</strong> $product</p>
            <p><strong>".($language === 'sq' ? "Çmimi" : "Цена").":</strong> €$price</p>
            <p><strong>".($language === 'sq' ? "Emri" : "Име").":</strong> $name</p>
            <p><strong>".($language === 'sq' ? "Adresa" : "Адреса").":</strong> $address</p>
            <p><strong>".($language === 'sq' ? "Telefoni" : "Телефон").":</strong> $phone</p>
            <hr>
            <p style='font-size:12px;color:#888;'>".($language === 'sq' ? "Porosi nga mobilmarket.mk" : "Нарачка од mobilmarket.mk")."</p>
        ";
        $mail->AltBody = "$subject\nProdukt: $product\nÇmimi: €$price\nEmri: $name\nAdresa: $address\nTelefoni: $phone";

        $mail->send();

        echo json_encode([
            'success' => true,
            'message' => $language === 'sq' ? 'Porosia u dërgua me sukses!' : 'Нарачката е успешно испратена!'
        ]);
    } catch (Exception $e) {
        error_log("Mail Error: " . $mail->ErrorInfo);
        http_response_code(500);
        echo json_encode([
            'success' => false,
            'error' => $language === 'sq' ? 'Gabim gjatë dërgimit të porosisë.' : 'Грешка при испраќање на нарачката.',
            'debug' => $mail->ErrorInfo
        ]);
    }
} else {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
}
?>
