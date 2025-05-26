<!DOCTYPE html>
<html>
<head>
    <title>Medicine Reminder</title>
</head>
<body>
    <div class="container">
        <h2>Medicine Reminders</h2>
        <a href="<?= site_url('medicine/create') ?>" class="add-new">✚ Add New Medicine</a>

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
                    <td>
                        <?php if($medicine['taken']): ?>
                            <span class="status-taken">✅ Taken</span>
                        <?php else: ?>
                            <span class="status-pending">⏰ Not yet</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= site_url('medicine/view/' . $medicine['id']) ?>" title="View">👁️</a>
                        <a href="<?= site_url('medicine/edit/' . $medicine['id']) ?>" title="Edit">✏️</a>
                        <a href="<?= site_url('medicine/delete/' . $medicine['id']) ?>" title="Delete" onclick="return confirm('Delete this medicine?')">🗑️</a>
                        <?php if (!$medicine['taken']): ?>
                            <a href="<?= site_url('medicine/markAsTaken/' . $medicine['id']) ?>" title="Mark as Taken">✔️</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
<style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #e6f0fa;
            margin: 0;
            padding: 30px;
            color: #34495e;
        }
        h2 {
            font-weight: 700;
            color: #2a3f66;
            margin-bottom: 25px;
            text-align: center;
            letter-spacing: 1.2px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
            padding: 30px 40px;
        }
        a.add-new {
            display: inline-block;
            background-color: #4a90e2;
            color: white;
            font-weight: 600;
            padding: 12px 25px;
            border-radius: 30px;
            margin-bottom: 20px;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(74, 144, 226, 0.4);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        a.add-new:hover {
            background-color: #357ABD;
            box-shadow: 0 6px 14px rgba(53, 122, 189, 0.6);
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 12px;
        }
        thead th {
            text-align: left;
            padding: 12px 15px;
            background-color: #4a90e2;
            color: white;
            font-weight: 600;
            font-size: 14px;
            border-radius: 8px 8px 0 0;
            user-select: none;
        }
        tbody tr {
            background: #f6f9ff;
            box-shadow: 0 1px 5px rgba(74, 144, 226, 0.1);
            border-radius: 10px;
            transition: background-color 0.2s ease;
        }
        tbody tr:hover {
            background-color: #d6e4fd;
        }
        tbody td {
            padding: 15px 20px;
            vertical-align: middle;
            color: #34495e;
            font-size: 15px;
        }
        tbody td:first-child {
            font-weight: 600;
            font-size: 16px;
            color: #2a3f66;
        }
        tbody td:last-child a {
            margin-right: 10px;
            text-decoration: none;
            font-size: 16px;
            color: #4a90e2;
            transition: color 0.3s ease;
            cursor: pointer;
        }
        tbody td:last-child a:hover {
            color: #357ABD;
        }
        /* Status badges */
        .status-taken {
            color: #27ae60;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .status-pending {
            color: #e67e22;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
    </style>
</html>
