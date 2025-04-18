<?php
require_once __DIR__ . '/mvc/models/users.php';
require_once __DIR__ . '/mvc/views/MarkdownView.php';
require_once __DIR__ . '/mvc/controllers/controller.php';

use patterns\mvc\controllers\Controller;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$controller = new Controller('users.md');
echo "<pre>" . $controller->render() . "</pre>";

echo "<!DOCTYPE html>
<html>
<head>
    <title>Список пользователей</title>
</head>
<body>";

echo "<a href='//www.plantuml.com/plantuml/png/RPDHQrCn5CVVxwSuT0-srnNcqwGWJ2U-wOke3sECS9jseMbISdFjmn2w3b4Ow9k2e2Bu0KfTuMxTwbSu-KQUvEvkiRfHslnp_l_ypWdPoIqpjXZAv0xWLvovOpTr4rpXELvWcUG3eKRCi25aakKv72L0VuzODkWRNQZkhfRQmAj3ONdOUMYC7bVYnjRMzltkTcNGfilDt_gRABpBUwoGzebMzXaRSeeHJ2OUwGikFHJzdoOLmekScy1nbm-Pa1ruRerGVI-CQ7zCHyLQJvWyXCQYPFzg1mUPLharHMQR8NaJwhnDk4dPXDhReWuYfBnYohIKFBD2gqwGz_RNimjVN6_20r25b57MBit0-92goNPKdllrQy777NZApA2hn-ebhTOFw0d9LTHSonSOhkW6cgrQl3qmZeAZgDQV_9XPvayRxUt7LdyptzmKht3btkE2laltCQd6qBZNWBJTXaRQ2DH9r94cFLIjYp54IF_k9bZY9IxSEvnTvojjELWz0jsBnfG0LUCAb-x4rv9Z2dWMJ5Vk51T0ZAHSuehK1IwnX6PWy7EX1VucouHspcfpwTwIMcd-FP0-9r_LvWTenh2jX8O5dYof-8pe7reYNByY_4aS4yAOKM3f9kxaFwJp6rU7B1k0dsdtbs-EFlFm8W7QW3y8kdJ7rqAQuYSV6LBEmKq9zSA3f-ajtGxzecV-1m00' target='_blank' class='diagram-btn'>Просмотреть диаграмму классов</a>";

echo "</body></html>";

