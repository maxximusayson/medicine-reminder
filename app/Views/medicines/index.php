<!DOCTYPE html>
<html>
<head>
    <title>All Medicines</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 20px;
            color: #333;
        }
        h2 {
            color: #2c3e50;
        }
        a {
            color: #2980b9;
            text-decoration: none;
            margin-right: 8px;
        }
        a:hover {
            text-decoration: underline;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #3498db;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }
        tr:hover {
            background-color: #f1f8ff;
        }
        .add-new {
            display: inline-block;
            background-color: #27ae60;
            color: white;
            padding: 8px 15px;
            border-radius: 4px;
            margin-bottom: 15px;
            transition: background-color 0.3s ease;
        }
        .add-new:hover {
            background-color: #219150;
        }
    </style>
</head>
<body>
    <h2>Medicine Reminders</h2>
    <a href="<?= site_url('medicine/create') ?>" class="add-new">➕ Add New Medicine</a><br><br>

    <table>
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
