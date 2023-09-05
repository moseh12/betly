<?php
// Start a session (for user authentication)
session_start();

// Sample user data (replace with your authentication mechanism)
$loggedInUser = [
    'id' => 1,
    'username' => 'user123',
    // Other user information
];

// Sample array of selected games (replace with database integration)
$selectedGames = [
    ['id' => 1, 'name' => 'Game 1', 'date' => '2023-09-10'],
    ['id' => 2, 'name' => 'Game 2', 'date' => '2023-09-15'],
    // Add more games here
];

// Check if the user is logged in (replace with your authentication mechanism)
if (!isset($_SESSION['user'])) {
    header('Location: login.php'); // Redirect to your login page
    exit();
}

// User is logged in, store the user information
$user = $_SESSION['user'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Bets</title>
</head>
<body>
    <h1>Welcome, <?php echo $user['username']; ?></h1>
    <h2>Your Selected Games</h2>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Game Name</th>
            <th>Date</th>
        </tr>
        <?php foreach ($selectedGames as $game): ?>
        <tr>
            <td><?php echo $game['id']; ?></td>
            <td><?php echo $game['name']; ?></td>
            <td><?php echo $game['date']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <a href="logout.php">Logout</a> <!-- Provide a logout link (replace with your logout logic) -->
</body>
</html>
