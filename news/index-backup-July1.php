<!-- <!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr" >
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/custom.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="dma floors, flooring, richmond, central virginia, fredericksburg, williamsburg, charlottesville, carpet, vinyl, epoxy, polished concrete, floor" />
	<meta name="author" content="Mary Layman TriMedia Richmond, VA" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="DMA Floors is a full service commercial and industrial flooring company serving central Virginia, Richmond, Williamsburg, Fredericksburg, Charlottesville, and parts of North Carolina.  We specialize in all flooring including epoxy and resinous systems, concrete stains and polished concrete." />
	<title>DMA Floors - DMA Floors :: Commercial Flooring Since 1979</title>
  <meta charset="UTF-8" />    
    <?php include '../includes/head-scripts.php';?>
</head>
<body class="home">
 <div class="alert">Alert</div>
	<?php include '../includes/header.php';?>
<main class="main-wrapper grid">Main Wrapper Full Width
<div><center>News Post goes here</center></div>
</main>
<footer class="grid">
  <div class="footer-section">Footer Full Width</div>
  <div class="contact-info-bottom">Contact Info Bottom</div>
  <div class="tog2">TOG2</div>
</footer>
	<?php include '../includes/script-utilities.php';?>
</body>
</html> -->







<?php
// Define file paths for storing tokens
$long_lived_user_token_file = 'long_lived_user_token.txt';
$page_access_token_file = 'page_access_token.txt';

// Facebook app credentials
$app_id = '1124647975361041';
$app_secret = '76c0ff7fcbc01d13b4f873551a1b44ac';
$short_lived_token = 'EAAPZB3IMRmhEBO3RS5ZCTz8q6GTS53hcZBGSRVx9hGRxGzFQqEZCkwt9pSLTgC4Y6ZACUaoQchLzYBLKpp9byX4yDxOoTZAjZC1qSfY6n8PfWFlc6eRpWmgeSyZCsqo3rJXAqUbPwV2GEsVDeg6ZBUdSOKAc5h67zcWTcuVie2fhXNEpKP1upvBoD5ZCH4LjNhZCmBWrMozZCh4PFkSXpnDfhqZBhWAZDZD';

// Function to fetch URL content
function fetch_url($url) {
    $response = file_get_contents($url);
    if ($response === FALSE) {
        die('Error occurred while fetching URL: ' . $url);
    }
    return json_decode($response, true);
}

// Step 1: Exchange short-lived token for long-lived user token (only if short-lieved token is provided)
if ($short_lived_token) {
    $url_long_lived_token = "https://graph.facebook.com/oauth/access_token?"
        . "grant_type=fb_exchange_token&"
        . "client_id=$app_id&"
        . "client_secret=$app_secret&"
        . "fb_exchange_token=$short_lived_token";

    $data_long_lived = fetch_url($url_long_lived_token);
    $long_lived_user_token = $data_long_lived['access_token'];

    // Save the long-lived token
    file_put_contents($long_lived_user_token_file, $long_lived_user_token);
}

// Load the long-lived user token from file
$long_lived_user_token = file_get_contents($long_lived_user_token_file);

if (!$long_lived_user_token) {
    die('Long-lived user token not found');
}

// Step 2: Exchange long-lived user token for long-lived page token (only if needed)
if (!file_exists($page_access_token_file) || filesize($page_access_token_file) == 0) {
    $page_id = '445584145523681';
    $url_page_token = "https://graph.facebook.com/$page_id?fields=access_token&access_token=$long_lived_user_token";
    $data_page_token = fetch_url($url_page_token);
    $page_access_token = $data_page_token['access_token'];

    // Save the long-lived page access token
    file_put_contents($page_access_token_file, $page_access_token);
} else {
    $page_access_token = file_get_contents($page_access_token_file);
}

// Step 3: Check and refresh the long-lived user token if it's about to expire
$url_debug = "https://graph.facebook.com/debug_token?input_token=$long_lived_user_token&access_token=$app_id|$app_secret";
$data_debug = fetch_url($url_debug);
$expires_at = $data_debug['data']['expires_at'];
$current_time = time();

// Refresh the token if it expires in less than 10 days
if (($expires_at - $current_time) < 10 * 24 * 60 * 60) {
    $url_refresh = "https://graph.facebook.com/oauth/access_token?"
        . "grant_type=fb_exchange_token&"
        . "client_id=$app_id&"
        . "client_secret=$app_secret&"
        . "fb_exchange_token=$long_lived_user_token";

    $data_refresh = fetch_url($url_refresh);
    $new_long_lived_user_token = $data_refresh['access_token'];

    // Save the new long-lived user token
    file_put_contents($long_lived_user_token_file, $new_long_lived_user_token);

    // Update the token variable
    $long_lived_user_token = $new_long_lived_user_token;
}

// Step 4: Fetch posts using the long-lived page token
$page_id = '445584145523681';
$url_posts = "https://graph.facebook.com/v19.0/$page_id/posts?fields=created_time,message,story,full_picture,from,tags&access_token=$page_access_token";
$data_posts = fetch_url($url_posts);

if (isset($data_posts['data']) && is_array($data_posts['data'])) {
    // Loop through the posts and display them
    foreach ($data_posts['data'] as $post) {
        // Extract relevant information
        $created_time = $post['created_time'];
        $message = isset($post['message']) ? $post['message'] : '';
        $story = isset($post['story']) ? $post['story'] : '';
        $full_picture = isset($post['full_picture']) ? $post['full_picture'] : '';
        $author_name = isset($post['from']['name']) ? $post['from']['name'] : '';
        $post_id = $post['id'];
        
        // Extract tags from the message if available
        preg_match_all('/#(\w+)/', $message, $matches);
        $tags = implode(', ', $matches[1]);

        // Format the date
        $created_date = date('F j, Y', strtotime($created_time));

        // Limit message to 150 characters
        $message_short = strlen($message) > 150 ? substr($message, 0, 150) . '...' : $message;

        // Display the post
        echo "<div class='post'>";
        echo "<h2>" . htmlspecialchars($story) . "</h2>";
        if (!empty($full_picture)) {
            echo "<img src='" . htmlspecialchars($full_picture) . "' alt='Post Image'>";
        }
        echo "<p><strong>Created Date:</strong> " . htmlspecialchars($created_date) . "</p>";
        echo "<p><strong>Author:</strong> " . htmlspecialchars($author_name) . "</p>";
        echo "<p><strong>Message:</strong> " . htmlspecialchars($message_short) . "</p>";
        if (!empty($tags)) {
            echo "<p><strong>Tags:</strong> " . htmlspecialchars($tags) . "</p>";
        }
        echo "<p><strong>Post ID:</strong> " . htmlspecialchars($post_id) . "</p>";
        
        echo "</div><hr>";
        echo "<p><a href='#' class='btn'>Continue Reading</a></p>";
        echo "</div><hr>";
    }
} else {
    echo "No posts found.";
}
?>
