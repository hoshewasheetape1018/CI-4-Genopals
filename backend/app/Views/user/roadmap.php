<?php
// Fragment: Flattened roadmap items (one card per task)
$roadmapItems = [
    ["title" => "Front end landing page", "status" => "Completed"],
    ["title" => "Front end moodboard", "status" => "Completed"],
    ["title" => "Front end roadmap", "status" => "Completed"],

    ["title" => "Front end Authorization (Login/registration)", "status" => "In Progress"],
    ["title" => "Design / Layout of Care page, Authorization (Login/Sign up)", "status" => "In Progress"],
    ["title" => "Repurposing Shop page for simple CRUD demonstration for inventory system", "status" => "In Progress"],

    ["title" => "Backend CRUD functionality for Authorization", "status" => "Planned"],
    ["title" => "Backend CRUD functionality for Creating and managing pets", "status" => "Planned"],
    ["title" => "Backend CRUD functionality for inventory system", "status" => "Planned"],
    ["title" => "Database connection for Authorization (Login/Signup)", "status" => "Planned"],
    ["title" => "Database connection for creating and managing pets", "status" => "Planned"],
    ["title" => "Database connection for inventory system", "status" => "Planned"],
    ["title" => "Simple functionality for Care page for CRUD demonstration of Inventory and Pet management", "status" => "Planned"],

    ["title" => "Redesign UI", "status" => "Future"],
    ["title" => "Create art assets", "status" => "Future"],
    ["title" => "Create micro-interaction animations", "status" => "Future"],
    ["title" => "Refactor and fragment code", "status" => "Future"],
];

$legend = [
    ["label" => "Completed", "class" => "completed"],
    ["label" => "In Progress", "class" => "inprogress"],
    ["label" => "Planned", "class" => "planned"],
    ["label" => "Future", "class" => "future"],
];
?>

<!DOCTYPE html>
<html lang="en">
<?= view('components/head') ?>

<body>
    <!-- header -->
    <?= view('components/header') ?>

    <!-- Roadmap Section -->
    <section id="roadmap">
        <div class="container">
            <div>
                <h2>ROADMAP</h2>
                <h4>
                    Current development roadmap for Genopals! <br>
                    Progress and features are displayed below and are subject to change
                </h4>
            </div>

         

<!-- Cards Row -->
<div class="card-row">
    <?php foreach ($roadmapItems as $item): 
        $statusClass = strtolower(str_replace(' ', '', $item['status'])); ?>
        <div class="card">
            <h3>
                <?= $item['title'] ?>
                <span class="badge <?= $statusClass ?>"><?= $item['status'] ?></span>
            </h3>
        </div>
    <?php endforeach; ?>
</div>

        </div>
    </section>

</body>

<!-- footer -->
<?= view('components/footer') ?>

</html>
