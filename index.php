<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moderator Application Survey</title>
</head>
<body>
    <h1>Moderator Application Survey</h1>
    <form action="index.php" method="post">
        <label for="moderator_thoughts">What do you think a moderator will do on a server?</label><br>
        <textarea id="moderator_thoughts" name="moderator_thoughts" required></textarea><br><br>

        <label for="age">What is your age?</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <label for="timezone">What time zone are you in?</label><br>
        <input type="text" id="timezone" name="timezone" required><br><br>

        <label for="experience">Do you have any previous experience moderating a Discord server or any other online community? If yes, please describe where and your experience(s).</label><br>
        <textarea id="experience" name="experience" required></textarea><br><br>

        <label for="illegal_content">What steps would you take if you encountered illegal content on the server? CP, zoophilia etc.</label><br>
        <textarea id="illegal_content" name="illegal_content" required></textarea><br><br>

        <label for="spamming">How would you approach a member spamming?</label><br>
        <textarea id="spamming" name="spamming" required></textarea><br><br>

        <label for="unsure_situation">How would you handle a situation where you are unsure whether the content violates server rules or not?</label><br>
        <textarea id="unsure_situation" name="unsure_situation" required></textarea><br><br>

        <label for="why_moderator">Why do you want to be a moderator?</label><br>
        <textarea id="why_moderator" name="why_moderator" required></textarea><br><br>

        <label for="qualities">What qualities do you believe are essential for a good moderator?</label><br>
        <textarea id="qualities" name="qualities" required></textarea><br><br>

        <label for="distressing_content">Are you comfortable dealing with distressing content?</label><br>
        <textarea id="distressing_content" name="distressing_content" required></textarea><br><br>

        <label for="immediate_actions">If you notice someone posting illegal content, but the owner/fellow staff are unavailable, what immediate actions would you take?</label><br>
        <textarea id="immediate_actions" name="immediate_actions" required></textarea><br><br>

        <label for="discord_username">What's your Discord username?</label><br>
        <input type="text" id="discord_username" name="discord_username" required><br><br>

        <input type="submit" value="Submit Survey">
    </form>
</body>
</html>
