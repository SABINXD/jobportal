<?php
require_once 'assets/php/function.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$job_id = (int)$_GET['id'];
$job = getJobById($job_id);

if (!$job) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($job['title']); ?> - Job Details</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <nav>
        <!-- Include your navigation here -->
    </nav>

    <div class="section__container">
        <h1><?php echo htmlspecialchars($job['title']); ?></h1>
        <div class="job-details">
            <p><strong>Company:</strong> <?php echo htmlspecialchars($job['company_name']); ?></p>
            <p><strong>Location:</strong> <?php echo htmlspecialchars($job['job_location']); ?></p>
            <p><strong>Job Type:</strong> <?php echo htmlspecialchars($job['job_type']); ?></p>
            <p><strong>Job Nature:</strong> <?php echo htmlspecialchars($job['job_nature']); ?></p>
            <p><strong>Salary:</strong> <?php echo htmlspecialchars($job['salary']); ?></p>
            <p><strong>Categories:</strong> <?php echo htmlspecialchars($job['categories']); ?></p>
        </div>
        <h2>Job Description</h2>
        <div class="job-description">
            <?php echo nl2br(htmlspecialchars($job['description'])); ?>
        </div>
        <a href="index.php" class="btn">Back to Jobs</a>
    </div>

    <footer>
        <!-- Include your footer here -->
    </footer>
</body>
</html>

