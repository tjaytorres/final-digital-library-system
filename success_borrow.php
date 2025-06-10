<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    <style>
        body {
            background-color: #ccc;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .modal {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .modal-content {
            background-color: #fff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            text-align: center;
            width: 400px;
        }

        .modal-content h2 {
            color: #28a745;
            margin-bottom: 10px;
        }

        .modal-content p {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #003366;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: 15px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0055aa;
        }

        .icon {
            font-size: 50px;
            color: #28a745;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="modal">
    <div class="modal-content">
        <div class="icon">✅</div>
        <h2>SUCCESSFUL</h2>
        <p>
            Your request to borrow 
            <strong>
                <?= htmlspecialchars($_GET['title'] ?? 'a book') ?>
            </strong> is now under review. Kindly wait for approval.
        </p>
        <a href="index.php" class="btn">Continue</a>
    </div>
</div>

</body>
</html>
