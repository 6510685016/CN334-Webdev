<!DOCTYPE html>
<html>
<head>
    <title>PHP Configuration Check</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 4px;
        }
        .success {
            color: #28a745;
        }
        .warning {
            color: #ffc107;
        }
        .error {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Configuration Status</h1>
        
        <div class="section">
            <h2>PHP Version</h2>
            <?php echo PHP_VERSION; ?>
        </div>

        <div class="section">
            <h2>Memory and Execution Settings</h2>
            <ul>
                <li>Memory Limit: <?php echo ini_get('memory_limit'); ?></li>
                <li>Max Execution Time: <?php echo ini_get('max_execution_time'); ?> seconds</li>
                <li>Upload Max Filesize: <?php echo ini_get('upload_max_filesize'); ?></li>
                <li>Post Max Size: <?php echo ini_get('post_max_size'); ?></li>
            </ul>
        </div>

        <div class="section">
            <h2>Error Reporting Settings</h2>
            <ul>
                <li>Error Reporting: <?php echo ini_get('error_reporting'); ?></li>
                <li>Display Errors: <?php echo ini_get('display_errors'); ?></li>
                <li>Log Errors: <?php echo ini_get('log_errors'); ?></li>
            </ul>
        </div>

        <div class="section">
            <h2>Timezone Settings</h2>
            <ul>
                <li>PHP Timezone: <?php echo date_default_timezone_get(); ?></li>
                <li>Current Time: <?php echo date('Y-m-d H:i:s'); ?></li>
            </ul>
        </div>

        <div class="section">
            <h2>Loaded Extensions</h2>
            <ul>
            <?php 
            $required_extensions = ['mysqli', 'pdo_mysql', 'zip'];
            foreach ($required_extensions as $ext) {
                $loaded = extension_loaded($ext);
                $class = $loaded ? 'success' : 'error';
                echo "<li class='$class'>$ext: " . ($loaded ? '✓' : '✗') . "</li>";
            }
            ?>
            </ul>
        </div>

        <div class="section">
            <h2>Database Connection Test</h2>
            <?php
            try {
                $conn = new PDO("mysql:host=mariadb;dbname=db_test", "db_user", "db_pw");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "<p class='success'>Database connection successful ✓</p>";
                $conn = null;
            } catch(PDOException $e) {
                echo "<p class='error'>Connection failed: " . htmlspecialchars($e->getMessage()) . "</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
