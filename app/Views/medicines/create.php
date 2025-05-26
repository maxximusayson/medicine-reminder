<!DOCTYPE html>
<html>
<head>
    <title>Add Medicine</title>
</head>
<body>
    <h2>Add New Medicine</h2>

    <form method="post" action="<?= site_url('medicine/store') ?>">
        <label>Medicine Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Dosage (e.g., 1 tablet):</label><br>
        <input type="text" name="dosage" required><br><br>

        <label>Schedule (e.g., Morning):</label><br>
        <input type="text" name="schedule" required><br><br>

        <button type="submit">Save</button>
    </form>

    <br><a href="<?= site_url('medicine') ?>">← Back to list</a>
</body>
</html>
