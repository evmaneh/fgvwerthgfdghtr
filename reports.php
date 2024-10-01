<?php
// Path to the JSON file where the submissions will be stored
$file = 'survey_results.json';

// Initialize an empty array to hold all submissions
$all_submissions = [];

// Check if the JSON file already exists and has content
if (file_exists($file)) {
    $json_data = file_get_contents($file);
    $all_submissions = json_decode($json_data, true) ?: [];
}

// Handle POST data from the form (when form is submitted)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $submission = [
        'Moderator Thoughts' => $_POST['moderator_thoughts'],
        'Age' => $_POST['age'],
        'Time Zone' => $_POST['timezone'],
        'Experience' => $_POST['experience'],
        'Illegal Content Handling' => $_POST['illegal_content'],
        'Handling Spamming' => $_POST['spamming'],
        'Unsure Situation' => $_POST['unsure_situation'],
        'Why Want to be Moderator' => $_POST['why_moderator'],
        'Essential Qualities' => $_POST['qualities'],
        'Comfort with Distressing Content' => $_POST['distressing_content'],
        'Immediate Actions for Illegal Content' => $_POST['immediate_actions'],
        'Discord Username' => $_POST['discord_username']
    ];

    // Add the new submission to the array of all submissions
    $all_submissions[] = $submission;

    // Save all submissions back to the JSON file
    file_put_contents($file, json_encode($all_submissions, JSON_PRETTY_PRINT));
}

// Display all survey submissions
echo "<h1>All Survey Submissions</h1>";
if (!empty($all_submissions)) {
    foreach ($all_submissions as $index => $survey_data) {
        echo "<h2>Submission #" . ($index + 1) . "</h2>";
        echo "<table border='1' cellpadding='10'>";
        foreach ($survey_data as $question => $response) {
            echo "<tr><td><strong>$question</strong></td><td>$response</td></tr>";
        }
        echo "</table><br>";
    }
} else {
    echo "<p>No survey submissions yet.</p>";
}
?>
