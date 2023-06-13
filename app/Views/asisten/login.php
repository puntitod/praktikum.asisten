<!DOCTYPE html>
<html>

<head>
    <title>Silahkan Login</title>

    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            text-align: center;
            font-weight: bold;
            font-size: 2.5rem;
            margin-top: 50px;
            margin-bottom: 20px;
            color: #fff;
        }

        hr {
            border: 1px solid #fff;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #fff;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #333;
            color: #fff;
            border: none;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            text-align: center;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #218838;
        }

        .alert {
            background-color: #dc3545;
            color: #fff;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('salah')): ?>
        <div class="alert">
            <?= session()->getFlashdata('salah'); ?>
        </div>
    <?php endif; ?>
    <h1 class="display-4">Login</h1>
    <hr>
    <form method="post" action="/asisten/cekLogin">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" id="username" name="username" type="text" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
        </div>
        <button class="btn" name="btnsubmit" value="Search" type="submit">Login</button>
    </form>
</body>

</html>