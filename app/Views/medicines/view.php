<!DOCTYPE html>
<html>
<head>
    <title>View Medicine Details</title>
</head>
<body>
    <h2>Medicine Details</h2>

    <p><strong>Medicine Name:</strong> <?= esc($medicine['name']) ?></p>
    <p><strong>Dosage:</strong> <?= esc($medicine['dosage']) ?></p>
    <p><strong>Schedule:</strong> <?= esc($medicine['schedule']) ?></p>
    <p><strong>Status:</strong> <?= $medicine['taken'] ? '✅ Taken' : '⏰ Not yet' ?></p>
    <p><strong>Created At:</strong> <?= esc($medicine['created_at']) ?></p>
    <p><strong>Updated At:</strong> <?= esc($medicine['updated_at']) ?></p>

    <a href="<?= site_url('medicine') ?>">← Back to list</a>
</body>
</html>
