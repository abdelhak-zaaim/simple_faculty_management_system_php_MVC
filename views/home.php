<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $modules[$curentModule] ?></title>


    <link rel="stylesheet" type="text/css" href="https://zaaim.me/static/css/style.css" media="screen">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="../src/css/tabs.css">

    <style>
        .custom-card {
            border: none;
            background: transparent;

            color: #333;
            border-radius: 10px;

        }

        .custom-card .card-body {
            padding: 20px;
            text-align: left; /* Add this line */
        }

        .custom-card .card-title {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
        }

        .custom-card .card-text {
            color: #666;
            line-height: 1.6;
        }


    </style>
</head>
<body style="background-color: white; ">
<div class="bg-dark" style=" width: 100%; z-index: 100; height: 80px; position: sticky; top: 0; display: flex;">
    <div id="container" style="z-index: 100;   width: 80px; ">
        <div id="burger">
            <div class="bun top"></div>
            <div class="filling"></div>
            <div class="bun bottom"></div>
        </div>
    </div>

</div>


<nav style="z-index: 100; height: 100%;">
    <ul>


        <?php
        function getRandomColore()
        {
            $colors = ['red', 'green', 'blue', 'yellow', 'purple',];
            echo $colors[array_rand($colors)];
        }

        foreach ($modules as $module => $moduleName): ?>

            <li class="<?php getRandomColore() ?>">
                <a href="index.php?module=<?php echo $module; ?>"><?php echo $moduleName; ?></a>
            </li>

        <?php endforeach; ?>

    </ul>
</nav>


<nav class="bg-color" id="navtabs">Adaptive tabs</nav>

<section class="wrapper">
    <ul class="tabs">
        <li class="active">Ajouter</li>

        <li>List des <?php echo $modules[$curentModule]?></li>
    </ul>


    <ul class="tab__content">
        <li class="active">
            <div class="content__wrapper">


          <div class="card custom-card">
    <div class="card-body">
        <h1><?php
            $action = isset($action) ? $action : 'Ajouter';
            echo ucfirst($action) . ' ' . ucfirst($this->module); ?></h1>
        <form method="post" action="">
            <?php foreach (array_keys($data[0]) as $key) {
                if($action == 'edit' && $key == 'id') continue; // Skip 'id' field for 'edit' action
            ?>
                <div class="form-group">
                    <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
                    <input type="text" class="form-control" id="<?php echo $key; ?>" name="<?php echo ucfirst($key); ?>"/>
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary"><?php echo ucfirst($action) . ' ' . $curentModule ?></button>
        </form>
    </div>
</div>


            </div>
        </li>

        <li>
            <div class="content__wrapper">
                <div class="table-responsive" id="tableDiv" style=" align-content: center; ">
                    <div style="margin-right: 30px; ">


                        <table id="sequenceTable" class="table table-striped table-hover">
                            <caption>Tableau des <?php echo $modules[$curentModule] ?></caption>

                            <thead class="thead-dark">
                            <tr>

                                <?php foreach (array_keys($data[0]) as $key) { ?>
                                    <th><?php echo ucfirst($key); ?></th>
                                <?php } ?>


                                <th>Actions</th>


                            </tr>
                            </thead>
                            <tbody>


                            <?php foreach ($data as $row) { ?>
                                <tr>
                                    <?php foreach ($row as $cell) { ?>
                                        <td><?php echo $cell; ?></td>
                                    <?php } ?>
                                    <td>
                                        <a  href="index.php?c=<?php echo $this->module; ?>&action=show&id=<?php echo $row['id']; ?>">View</a>
                                        <a style="margin-left: 5px; margin-right: 5px;" href="index.php?module=<?php echo $this->module; ?>&action=edit&id=<?php echo $row['id']; ?>">Edit</a>
                                        <a href="index.php?module=<?php echo $this->module; ?>&action=delete&id=<?php echo $row['id']; ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>

                            </tr>

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </li>

    </ul>
</section>

<br>
<br>

<footer class="footer mt-auto py-3 bg-dark text-white fixed-bottom"
        style="padding-top: 8px !important; padding-bottom: 8px !important;">
    <div class="container text-center">
        <span>SMI &copy; TwentyTwentyFour </span>
    </div>
</footer>



<script src="../src/js/tabs.js"></script>


<script>
    const nav = document.querySelector('nav')

    document.querySelector('#burger').addEventListener('click', (e) => {
        e.currentTarget.classList.toggle("active")
        nav.classList.toggle('show')
    })

</script>
</body>
</html>
