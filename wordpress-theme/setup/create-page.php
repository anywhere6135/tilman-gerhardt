<?php
/**
 * Tilman Gerhardt – REST API Content Setup
 * Webprinzip / Anywhere6135
 *
 * Dieses Script legt die Hauptseite via WordPress REST API an.
 * Nach Änderungen am Inhalt: Script erneut ausführen → Seite wird aktualisiert.
 *
 * Ausführung:
 *   php create-page.php [--update] [--url=https://example.com]
 *
 * Gespeicherter State:
 *   page-state.json → enthält page_id für Updates
 */

$config = [
    'wp_url'   => getenv('WP_URL') ?: 'https://danny-nyc-view-reminder.trycloudflare.com',
    'username' => getenv('WP_USER') ?: 'webprinzip',
    'password' => getenv('WP_PASS') ?: 'hyXkFjNwjeXkHrOZYQ9frZAz',
];

$state_file = __DIR__ . '/page-state.json';
$state = file_exists($state_file) ? json_decode(file_get_contents($state_file), true) : [];

$is_update = in_array('--update', $argv ?? []);

// Block content (inline)
$block_content = file_get_contents(__DIR__ . '/block-content.txt');
if (!$block_content) {
    die("ERROR: block-content.txt not found!\n");
}

$page_data = [
    'title'   => 'EVOLVION LEADERSHIP ADVISORY | Dr. Tilman Gerhardt',
    'content' => $block_content,
    'status'  => 'publish',
    'slug'    => 'home',
    'template'=> '',
];

$auth = base64_encode("{$config['username']}:{$config['password']}");

if ($is_update && !empty($state['page_id'])) {
    // Update existing page
    $url = "{$config['wp_url']}/wp-json/wp/v2/pages/{$state['page_id']}";
    $method = 'POST';
    echo "Updating page ID {$state['page_id']}...\n";
} else {
    // Create new page
    $url = "{$config['wp_url']}/wp-json/wp/v2/pages";
    $method = 'POST';
    echo "Creating new page...\n";
}

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST  => $method,
    CURLOPT_POSTFIELDS     => json_encode($page_data),
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        "Authorization: Basic {$auth}",
    ],
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_TIMEOUT        => 30,
]);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$result = json_decode($response, true);
if ($http_code >= 200 && $http_code < 300 && isset($result['id'])) {
    $state['page_id']  = $result['id'];
    $state['page_url'] = $result['link'];
    $state['updated_at'] = date('Y-m-d H:i:s');
    file_put_contents($state_file, json_encode($state, JSON_PRETTY_PRINT));
    echo "✅ Success! Page ID: {$result['id']}\n";
    echo "   URL: {$result['link']}\n";
} else {
    echo "❌ Error (HTTP {$http_code}):\n";
    echo $response . "\n";
}
