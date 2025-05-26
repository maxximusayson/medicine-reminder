<!DOCTYPE html>
<html>
<head>
    <title>View Medicine Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 20px;
            color: #333;
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        p {
            background: #fff;
            padding: 12px 15px;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            max-width: 500px;
            font-size: 16px;
            margin-bottom: 12px;
        }
        strong {
            color: #2980b9;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #2980b9;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Medicine Details</h2>

    <p><strong>Medicine Name:</strong> <?= esc($medicine['name']) ?></p>
    <p><strong>Dosage:</strong> <?= esc($medicine['dosage']) ?></p>
    <p><strong>Schedule:</strong> <?= esc($medicine['schedule']) ?></p>
    <p><strong>Status:</strong> <?= $medicine['taken'] ? '✅ Taken' : '⏰ Not yet' ?></p>


    <a href="<?= site_url('medicine') ?>">← Back to list</a>
</body>
</html>
