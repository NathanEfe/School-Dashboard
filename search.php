<?php include('./includes/header.php'); ?>

<?php
$query = isset($_GET['q']) ? trim($_GET['q']) : '';
$results = [];

if ($query !== '') {
    $filesToSearch = [
        ['title' => 'Dashboard', 'file' => './index.php'],
        ['title' => 'Courses', 'file' => './courses.php'],
        ['title' => 'Library', 'file' => './library.php'],
        ['title' => 'Discussion', 'file' => './discussion.php'],
        ['title' => 'Grades', 'file' => './grades.php'],
        ['title' => 'Profile', 'file' => './profile.php'],
        ['title' => 'Schedule', 'file' => './schedule.php']
        // Add more files as needed
    ];

    foreach ($filesToSearch as $page) {
        if (file_exists($page['file'])) {
            $content = file_get_contents($page['file']);
            if (stripos($content, $query) !== false || stripos($page['title'], $query) !== false) {
                $results[] = [
                    'title' => $page['title'],
                    'link' => $page['file']
                ];
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
    <div class="max-w-xl mx-auto mt-10 bg-white rounded-lg shadow p-6" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-2xl font-bold mb-4">Search Results for "<?php echo htmlspecialchars($query); ?>"</h2>

        <?php if ($query === ''): ?>
            <p class="text-gray-600">Please enter a search query.</p>
        <?php elseif (empty($results)): ?>
            <p class="text-gray-600">No results found.</p>
        <?php else: ?>
            <ul class="divide-y divide-gray-200">
                <?php foreach ($results as $result): ?>
                    <li class="py-3">
                        <a href="<?php echo $result['link']; ?>" class="text-primary font-semibold hover:underline">
                            <?php echo htmlspecialchars($result['title']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <a href="index.php" class="inline-block mt-6 text-blue-600 hover:underline">&larr; Back to Dashboard</a>
    </div>
</body>
</html>

<?php include('./includes/footer.php'); ?>
