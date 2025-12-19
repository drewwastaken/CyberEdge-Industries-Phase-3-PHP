<?php
include 'db_connect.php';
$result = $conn->query("SELECT * FROM contacts ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Contact Messages</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .admin-container {
            max-width: 1400px;
            margin: 50px auto;
            padding: 0 40px;
        }
        .admin-header {
            background: linear-gradient(135deg, #000 0%, #333 100%);
            color: white;
            padding: 40px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
        }
        .admin-header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }
        .stats-bar {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        .stat-box {
            flex: 1;
            min-width: 200px;
            background: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        .stat-number {
            font-size: 32px;
            font-weight: 900;
            color: #000;
        }
        .stat-label {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }
        .messages-table {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background: #000;
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }
        td {
            padding: 15px;
            border-bottom: 1px solid #e0e0e0;
        }
        tr:hover {
            background: #f9f9f9;
        }
        .badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 11px;
            font-weight: 600;
        }
        .badge-general { background: #e3f2fd; color: #1976d2; }
        .badge-services { background: #f3e5f5; color: #7b1fa2; }
        .badge-quote { background: #fff3e0; color: #e65100; }
        .badge-support { background: #ffebee; color: #c62828; }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: #000;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
        }
        .back-link:hover {
            background: #333;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>📬 Contact Messages Dashboard</h1>
            <p>View and manage all contact form submissions</p>
        </div>

        <?php
        $totalMessages = $result->num_rows;
        $todayMessages = $conn->query("SELECT COUNT(*) as count FROM contacts WHERE DATE(created_at) = CURDATE()")->fetch_assoc()['count'];
        ?>

        <div class="stats-bar">
            <div class="stat-box">
                <div class="stat-number"><?php echo $totalMessages; ?></div>
                <div class="stat-label">Total Messages</div>
            </div>
            <div class="stat-box">
                <div class="stat-number"><?php echo $todayMessages; ?></div>
                <div class="stat-label">Today</div>
            </div>
        </div>

        <div class="messages-table">
            <?php if ($totalMessages > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><strong>#<?php echo $row['id']; ?></strong></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['phone'] ?: '-'); ?></td>
                        <td>
                            <span class="badge badge-<?php echo strtolower($row['subject']); ?>">
                                <?php echo ucfirst(htmlspecialchars($row['subject'])); ?>
                            </span>
                        </td>
                        <td><?php echo htmlspecialchars(substr($row['message'], 0, 100)) . '...'; ?></td>
                        <td><?php echo date('M d, Y', strtotime($row['created_at'])); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php else: ?>
            <div style="text-align: center; padding: 60px;">
                <h2>📭 No Messages Yet</h2>
                <p>Contact form submissions will appear here.</p>
            </div>
            <?php endif; ?>
        </div>

        <div style="text-align: center;">
            <a href="index.php" class="back-link">← Back to Website</a>
        </div>
    </div>
</body>
</html>
<?php $conn->close(); ?>