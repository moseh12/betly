<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <h1>My Profile</h1>
        <a href="logout.php">Logout</a>
    </header>
    <div class="profile-container">
        <section class="payment-methods">
            <h2>Payment Methods</h2>
            <ul>
                <li>Airtel Money</li>
                <li>MTM</li>
            </ul>
            <button id="add-payment-btn">Add Payment Method</button>
        </section>
        <section class="withdrawal-accounts">
            <h2>My Withdrawal Accounts</h2>
            <ul>
                <li>Bank Account 1</li>
                <li>Bank Account 2</li>
            </ul>
            <button id="add-account-btn" disabled>Add Account</button>
        </section>
        <section class="support-box">
            <h2>Support</h2>
            <p>Your support content goes here.</p>
        </section>
        <section class="services-box">
            <h2>Services</h2>
            <p>Your services content goes here.</p>
        </section>
    </div>
    <div class="mt-3">
            <nav class="navbar fixed-bottom mt-6">
                <div class="container border rounded" style="background-color: #1b132f;">
                    <div class="d-flex flex-column nav-item">
                        <a href="" class="btn text-white">
                            <div class="text-white">
                                <i class="bi bi-house"></i>
                            </div>
                            <span>Home</span>
                        </a>
                    </div>
            
                    <div class="d-flex flex-column">
                        <a href="" class="btn text-white">
                            <div>
                                <i class="bi bi-folder"></i>
                            </div>
                            <span>Bets</span>
                        </a>
                    </div>
            
                    <div class="d-flex flex-column">
                        <a href="wallet.php" class="btn text-white">
                            <div>
                                <i class="bi bi-wallet"></i>
                            </div>
                            <span>Wallet</span>
                        </a>
                    </div>
            
                    <div class="d-flex flex-column text-white">
                        <a href="profile.php" class="btn text-white">
                            <div>
                                <i class="bi bi-person"></i>
                            </div>
                            <span>Profile</span>
                        </a>
                    </div>
                </div>
</body>
</html>
