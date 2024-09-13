<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roadmap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid mt-5">
        <h1 class="text-center mb-5">Projekt Roadmap</h1>
        <div class="row">
            <?php
            $roadmap = [
                'Q1' => [
                    'title' => '2024 Q4',
                    'tasks' => [
                        ['name' => 'Projekt indítása', 'completed' => true],
                        ['name' => 'Piackutatás elvégzése', 'completed' => true],
                        ['name' => 'Prototípus fejlesztése', 'completed' => true],
                    ],
                ],
                'Q2' => [
                    'title' => '2025 Q1',
                    'tasks' => [
                        ['name' => 'MVP fejlesztése', 'completed' => true],
                        ['name' => 'Felhasználói tesztek végrehajtása', 'completed' => false],
                        ['name' => 'Iteráció a visszajelzések alapján', 'completed' => false],
                    ],
                ],
                'Q3' => [
                    'title' => '2025 Q2',
                    'tasks' => [
                        ['name' => 'Termék bevezetése', 'completed' => false],
                        ['name' => 'Marketing kampány indítása', 'completed' => false],
                        ['name' => 'Felhasználói támogatás kiépítése', 'completed' => false],
                    ],
                ],
                'Q4' => [
                    'title' => '2025 Q3',
                    'tasks' => [
                        ['name' => 'Teljesítményértékelés', 'completed' => false],
                        ['name' => 'Jövő évi tervezés', 'completed' => false],
                        ['name' => 'Termék optimalizálása', 'completed' => false],
                    ],
                ],
            ];

            foreach ($roadmap as $quarter => $data) {
                echo '<div class="col-md-3 mb-4">';
                echo '<div class="card h-100">';
                echo '<div class="card-header bg-primary text-white text-center">' . $data['title'] . '</div>';
                echo '<div class="card-body">';
                echo '<ul class="list-group list-group-flush">';
                foreach ($data['tasks'] as $task) {
                    $status = $task['completed'] ? '<span class="text-success">&#10003;</span>' : '<span class="text-danger">&#10007;</span>';
                    echo '<li class="list-group-item d-flex justify-content-between align-items-center">' . $task['name'] . $status . '</li>';
                }
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
