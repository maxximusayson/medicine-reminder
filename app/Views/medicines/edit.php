<!DOCTYPE html>
<html>
<head>
    <title>Edit Medicine</title>
</head>
<body>
    <h2>Edit Medicine</h2>

    <form method="post" action="<?= site_url('medicine/update/' . $medicine['id']) ?>">
        <label>Medicine Name:</label><br>
        <input type="text" name="name" value="<?= esc($medicine['name']) ?>" required><br><br>

        <label>Dosage:</label><br>
        <input type="text" name="dosage" value="<?= esc($medicine['dosage']) ?>" required><br><br>

        <label>Schedule:</label><br>
        <input type="text" name="schedule" value="<?= esc($medicine['schedule']) ?>" required><br><br>

        <button type="submit">Update</button>
    </form>

    <br><a href="<?= site_url('medicine') ?>">← Back to list</a>
</body>
</html>
