<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    $input = $_POST;
}

// Validate required fields
$required_fields = ['name', 'email', 'phone', 'product', 'price'];
foreach ($required_fields as $field) {
    if (empty($input[$field])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing required field: ' . $field]);
        exit;
    }
}

// Sanitize input
$name = htmlspecialchars(trim($input['name']));
$email = filter_var(trim($input['email']), FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars(trim($input['phone']));
$product = htmlspecialchars(trim($input['product']));
$price = htmlspecialchars(trim($input['price']));
$language = isset($input['language']) ? $input['language'] : 'mk';

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid email address']);
    exit;
}

// Email configuration
$to = 'your-email@domain.com'; // Replace with your email address
$subject = 'Нова нарачка - ' . $product;

// Email content based on language
if ($language === 'sq') {
    $subject = 'Porosi e re - ' . $product;
    $emailContent = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .header { background: #2563eb; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; }
            .product-info { background: #f8f9fa; padding: 15px; border-radius: 8px; margin: 15px 0; }
            .customer-info { background: #e3f2fd; padding: 15px; border-radius: 8px; margin: 15px 0; }
        </style>
    </head>
    <body>
        <div class='header'>
            <h1>Porosi e re</h1>
        </div>
        <div class='content'>
            <div class='product-info'>
                <h3>Informacione për produktin:</h3>
                <p><strong>Produkti:</strong> $product</p>
                <p><strong>Çmimi:</strong> €$price</p>
            </div>
            <div class='customer-info'>
                <h3>Informacione për klientin:</h3>
                <p><strong>Emri:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Telefoni:</strong> $phone</p>
            </div>
            <p><strong>Data:</strong> " . date('d.m.Y H:i:s') . "</p>
        </div>
    </body>
    </html>
    ";
} else {
    $emailContent = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .header { background: #2563eb; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; }
            .product-info { background: #f8f9fa; padding: 15px; border-radius: 8px; margin: 15px 0; }
            .customer-info { background: #e3f2fd; padding: 15px; border-radius: 8px; margin: 15px 0; }
        </style>
    </head>
    <body>
        <div class='header'>
            <h1>Нова нарачка</h1>
        </div>
        <div class='content'>
            <div class='product-info'>
                <h3>Информации за производот:</h3>
                <p><strong>Производ:</strong> $product</p>
                <p><strong>Цена:</strong> €$price</p>
            </div>
            <div class='customer-info'>
                <h3>Информации за клиентот:</h3>
                <p><strong>Име:</strong> $name</p>
                <p><strong>Емаил:</strong> $email</p>
                <p><strong>Телефон:</strong> $phone</p>
            </div>
            <p><strong>Датум:</strong> " . date('d.m.Y H:i:s') . "</p>
        </div>
    </body>
    </html>
    ";
}

// Email headers
$headers = array(
    'MIME-Version: 1.0',
    'Content-type: text/html; charset=UTF-8',
    'From: MobilMarket <noreply@mobilmarket.mk>',
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion()
);

// Send email
$mailSent = mail($to, $subject, $emailContent, implode("\r\n", $headers));

if ($mailSent) {
    // Log the order (optional)
    $logEntry = date('Y-m-d H:i:s') . " | $name | $email | $phone | $product | €$price | $language\n";
    file_put_contents('orders.log', $logEntry, FILE_APPEND | LOCK_EX);
    
    echo json_encode([
        'success' => true,
        'message' => $language === 'sq' ? 'Porosia u dërgua me sukses!' : 'Нарачката е успешно испратена!'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'error' => $language === 'sq' ? 'Gabim gjatë dërgimit të porosisë.' : 'Грешка при испраќање на нарачката.'
    ]);
}
?> 