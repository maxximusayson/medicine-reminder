<!DOCTYPE html>
<html>
<head>
    <title>Edit Medicine</title>
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
        form {
            background: #fff;
            padding: 20px;
            max-width: 400px;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus {
            border-color: #3498db;
            outline: none;
        }
        button {
            background-color: #2980b9;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #1f5f8b;
        }
        a {
            color: #2980b9;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Edit Medicine</h2>

    <form method="post" action="<?= site_url('medicine/update/' . $medicine['id']) ?>">
        <label>Medicine Name:</label>
        <input type="text" name="name" value="<?= esc($medicine['name']) ?>" required>

        <label>Dosage:</label>
        <input type="text" name="dosage" value="<?= esc($medicine['dosage']) ?>" required>

        <label>Schedule:</label>
        <input type="text" name="schedule" value="<?= esc($medicine['schedule']) ?>" required>

        <button type="submit">Update</button>
    </form>

    <a href="<?= site_url('medicine') ?>">← Back to list</a>
</body>
</html>
