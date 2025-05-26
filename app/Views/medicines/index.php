<!DOCTYPE html>
<html>
<head>
    <title>All Medicines</title>
</head>
<body>
    <h2>Medicine Reminders</h2>
    <a href="<?= site_url('medicine/create') ?>">➕ Add New Medicine</a><br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Medicine</th>
                <th>Dosage</th>
                <th>Schedule</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($medicines as $medicine): ?>
            <tr>
                <td><?= esc($medicine['name']) ?></td>
                <td><?= esc($medicine['dosage']) ?></td>
                <td><?= esc($medicine['schedule']) ?></td>
                <td><?= $medicine['taken'] ? '✅ Taken' : '⏰ Not yet' ?></td>
                <td>
                    <a href="<?= site_url('medicine/view/' . $medicine['id']) ?>">👁️ View</a> |
                    <a href="<?= site_url('medicine/edit/' . $medicine['id']) ?>">✏️ Edit</a> | 
                    <a href="<?= site_url('medicine/delete/' . $medicine['id']) ?>" onclick="return confirm('Delete this medicine?')">🗑️ Delete</a> |
                    <?php if (!$medicine['taken']): ?>
                        <a href="<?= site_url('medicine/markAsTaken/' . $medicine['id']) ?>">✔️ Mark as Taken</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
