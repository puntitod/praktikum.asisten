<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?= $title; ?>
    </title>

    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000;
            color: #fff;
        }

        .navbar {
            background-color: #000;
        }

        .navbar .navbar-toggler {
            border-color: #fff;
        }

        .navbar .navbar-nav {
            flex-direction: column;
        }

        .navbar .nav-item .nav-link {
            color: #fff;
            padding: 10px;
            transition: 0.3s;
        }

        .navbar .nav-item .nav-link:hover {
            background-color: #333;
        }

        .navbar .dropdown-menu {
            background-color: #000;
        }

        .navbar .dropdown-item {
            color: #fff;
        }

        .navbar .dropdown-item:hover {
            background-color: #333;
        }

        .navbar .bi {
            margin-right: 5px;
        }

        .container {
            margin-top: 20px;
        }
    </style> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/asisten"><i class="bi bi-people"></i> Asisten</a>
                    <a class="nav-item nav-link" href="/asisten/simpan"><i class="bi bi-save"></i> Simpan </a>
                    <a class="nav-item nav-link" href="/asisten/delete"><i class="bi bi-trash"></i> Delete </a>
                    <a class="nav-item nav-link" href="/asisten/update"><i class="bi bi-pencil"></i> Update </a>
                    <a class="nav-item nav-link" href="/asisten/search"><i class="bi bi-search"></i> Search </a>
                </div>
            </div>
            <?php if (session()->has('username')): ?>
                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span>
                                <?= session()->get('username'); ?> <i class="bi bi-person-circle"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/asisten/logout">Log out</a></li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        </div>
    </nav>

    <br>
    <br>

    <div class="container">
        <?= $this->renderSection('content'); ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>