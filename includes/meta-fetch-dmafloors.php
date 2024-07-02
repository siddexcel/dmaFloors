<?php
$accessToken = 'your_access_token';
$pageId = 'your_page_id';
$url = "https://graph.facebook.com/v12.0/{$pageId}/posts?access_token={$accessToken}";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

$posts = json_decode($response, true)['data'];

foreach ($posts as $post) {
    // Process and format the post data
    $postId = $post['id'];
    $postMessage = $post['message'] ?? '';
    
    // Publish the post on the website
    publishToWordpress($postId, $postMessage);
}

function publishToWordpress($title, $content) {
    $wordpressUrl = 'https://yourwebsite.com/wp-json/wp/v2/posts';
    $authToken = 'your_wordpress_api_token';

    $postData = [
        'title' => $title,
        'content' => $content,
        'status' => 'publish'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $wordpressUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $headers = [
        'Authorization: Bearer ' . $authToken,
        'Content-Type: application/json'
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);
    if (isset($result['id'])) {
        echo "Post {$result['id']} published successfully.\n";
    } else {
        echo "Failed to publish post: " . $response . "\n";
    }
}
?>