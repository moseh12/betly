<?php
// Include the database connection configuration.
require_once 'includes/config.php';

// Check if the user is logged in. Implement your login system or session handling here.

// Retrieve the user's balance from the database. Replace 'user_id' with your actual user identifier.
$user_id = 1; // You would get this from your authentication system.
$query = "SELECT balance FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error fetching user balance: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
$user_balance = $row['balance'];

// Handle deposit and withdrawal actions if the form is submitted.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["deposit"])) {
        $amount = $_POST["deposit_amount"];
        // Validate and sanitize user input, perform necessary checks.
        // Update the user's balance in the database.
        $query = "UPDATE users SET balance = balance + $amount WHERE id = $user_id";
        $result = mysqli_query($conn, $query);
        
        if (!$result) {
            die("Error depositing funds: " . mysqli_error($conn));
        }
        
        // Redirect to the wallet page or show a success message.
    } elseif (isset($_POST["withdraw"])) {
        $amount = $_POST["withdraw_amount"];
        // Validate and sanitize user input, perform necessary checks.
        // Ensure the user has enough balance before withdrawing.
        if ($user_balance >= $amount) {
            // Update the user's balance in the database.
            $query = "UPDATE users SET balance = balance - $amount WHERE id = $user_id";
            $result = mysqli_query($conn, $query);
            
            if (!$result) {
                die("Error withdrawing funds: " . mysqli_error($conn));
            }
            
            // Redirect to the wallet page or show a success message.
        } else {
            // Display an error message if the user doesn't have enough balance.
            $error_message = "Insufficient balance for withdrawal.";
        }
    }
}

// Close the database connection.
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wallet - Betting Website</title>
</head>
<body>
    <h1>Welcome to Your Wallet</h1>
    <p>Your current balance: $<?php echo $user_balance; ?></p>
    
    <!-- Deposit form -->
    <form method="post">
        <h2>Deposit Funds</h2>
        <input type="number" name="deposit_amount" placeholder="Enter amount to deposit" required>
        <button type="submit" name="deposit">Deposit</button>
    </form>
    
    <!-- Withdraw form -->
    <form method="post">
        <h2>Withdraw Funds</h2>
        <input type="number" name="withdraw_amount" placeholder="Enter amount to withdraw" required>
        <button type="submit" name="withdraw">Withdraw</button>
    </form>

    <?php
    // Display error message if there was an error during deposit or withdrawal.
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
</body>
</html>
