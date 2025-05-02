<?php
// Start session

// Check if the user has access
if (!isset($_SESSION['access']) || $_SESSION['access'] != 1) {
    header('Location: login.php'); // Redirect to login page if not authorized
    exit();
}

// Include the database connection (adjust path as needed)
include 'db/db.php';

// Handle Approve and Un-approve Actions
if (isset($_POST['toggle_approve'])) {
    $review_id = $_POST['review_id'];
    $current_status = $_POST['current_status'];
    
    // Toggle approval status
    $new_status = $current_status ? 0 : 1; // Toggle between 1 (approved) and 0 (unapproved)
    $sql_toggle = "UPDATE reviews SET approved = ? WHERE id = ?";
    $stmt = mysqli_stmt_init($dbc);

    if (mysqli_stmt_prepare($stmt, $sql_toggle)) {
        mysqli_stmt_bind_param($stmt, 'ii', $new_status, $review_id);
        mysqli_stmt_execute($stmt);
    }
}

// Handle Delete Action
if (isset($_POST['delete_review'])) {
    $delete_id = $_POST['delete_review'];
    $sql_delete = "DELETE FROM reviews WHERE id = ?";
    $stmt = mysqli_stmt_init($dbc);

    if (mysqli_stmt_prepare($stmt, $sql_delete)) {
        mysqli_stmt_bind_param($stmt, 'i', $delete_id);
        mysqli_stmt_execute($stmt);
    }
}

// Fetch reviews from the database
$sql = "SELECT id, name, text, approved FROM reviews ORDER BY id DESC";
$stmt = mysqli_stmt_init($dbc);
$reviews = [];

if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) {
        $reviews[] = $row;
    }
}

mysqli_close($dbc);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Reviews</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        .btn {
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Recenzije</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Tekst</th>
            <th>Prikaži/Sakrij</th>
            <th>Obriši</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($reviews)): ?>
            <?php foreach ($reviews as $review): ?>
                <tr>
                    <td><?php echo $review['id']; ?></td>
                    <td><?php echo htmlspecialchars($review['name']); ?></td>
                    <td><?php echo htmlspecialchars($review['text']); ?></td>
                    <td>
                        <!-- Toggle Approve/Un-approve Form -->
                        <form method="post" action="" style="display:inline;">
                            <input type="hidden" name="review_id" value="<?php echo $review['id']; ?>">
                            <input type="hidden" name="current_status" value="<?php echo $review['approved']; ?>">
                            <button type="submit" class="btn" name="toggle_approve">
                                <?php echo $review['approved'] ? 'Sakrij' : 'Prikaži'; ?>
                            </button>
                        </form>
                    </td>
                    <td>
                        <!-- Separate form for delete to handle individual delete actions -->
                        <form method="post" action="" style="display:inline;">
                            <input type="hidden" name="delete_review" value="<?php echo $review['id']; ?>">
                            <button type="submit" class="btn" name="delete">Obriši</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Nema recenzija</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
