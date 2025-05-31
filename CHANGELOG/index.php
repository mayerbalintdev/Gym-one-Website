<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM One - Updates</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        :root {
            --main-color: #0950DC;
            --second-color: #59F8E4;
            --third-color: #FB7B18;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        .gym-gradient-bg {
            /* background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSO2SjjhGNdqTv5C-6ALOAdle_WrXq8e3qCVg&s);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center; */
             background: rgb(9, 80, 220);
            background: linear-gradient(90deg, rgba(9, 80, 220, 1) 0%, rgba(9, 88, 210, 1) 50%, rgba(9, 110, 210, 1) 100%); 
        }

        .gym-header {
            position: relative;
            overflow: hidden;
            border-radius: 0.5rem;
        }

        .gym-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='1' d='M0,96L48,112C96,128,192,160,288,186.7C384,213,480,235,576,213.3C672,192,768,128,864,128C960,128,1056,192,1152,202.7C1248,213,1344,171,1392,149.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E") no-repeat bottom center;
            background-size: cover;
        }

        .changelog-item {
            border-left: 4px solid var(--main-color);
            transition: all 0.3s ease;
        }

        .changelog-item:hover {
            transform: translateX(3px);
            box-shadow: 0 6px 15px rgba(9, 80, 220, 0.1);
        }

        .version-badge {
            background-color: var(--main-color);
            color: white;
        }

        .feature-tag {
            background-color: var(--second-color);
            color: var(--main-color);
            font-weight: 600;
        }

        .bugfix-tag {
            background-color: var(--third-color);
            color: white;
            font-weight: 600;
        }

        .improvement-tag {
            background-color: #E1EDFF;
            color: var(--main-color);
            font-weight: 600;
        }

        .changelog-img {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 2px solid transparent;
        }

        .changelog-img:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.16);
            border: 2px solid var(--second-color);
        }

        .gym-btn {
            background-color: var(--main-color);
            color: white;
            transition: all 0.3s ease;
            border-radius: 6px;
            font-weight: 600;
            padding: 0.5rem 1.25rem;
        }

        .gym-btn:hover {
            background-color: #0747c0;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(9, 80, 220, 0.2);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 700;
            color: #222;
        }

        .section-divider {
            height: 4px;
            background: linear-gradient(90deg, var(--main-color), var(--second-color));
            border-radius: 2px;
            width: 100%;
            margin: 1.5rem 0;
        }

        .gym-container {
            max-width: 1140px;
            margin: 0 auto;
        }

        .gym-logo span {
            color: var(--third-color);
        }
    </style>
</head>

<body>
    <?php
    $current_version = "1.1.0";
    $release_date = "2025. May 31.";

    $changes = [
        [
            "type" => "feature",
            "title" => "Updater",
            "description" => "The GYM One automatic updater ensures you always have the latest features and bug fixes — seamlessly, securely, and without any manual intervention.",
            "image" => null
        ],
        [
            "type" => "bugfix",
            "title" => "Mobile Display Issues Fixed",
            "description" => "Fixed issues causing certain elements to render incorrectly on mobile devices by correcting the viewport configuration.",
            "image" => null
        ],
        [
            "type" => "bugfix",
            "title" => "Admin page responsive Issue Fixed",
            "description" => "We’ve fixed the responsiveness issues on the admin pages! The interface now adapts smoothly across all devices — whether you're on a phone, tablet, or desktop — ensuring a much-improved user experience and easier navigation.",
            "image" => null
        ]
    ];
    ?>

    <div class="p-4 md:p-6">
        <div class="gym-header gym-gradient-bg text-white p-6 md:p-8 mb-8">
            <div class="gym-container">
                <img src="https://gymoneglobal.com/assets/img/text-logo.png" alt="LOGO" class="img img-fluid mb-2" width="200px">
                <div class="flex flex-wrap items-center gap-3 mb-8">
                    <span class="px-4 py-2 rounded-full text-sm md:text-base">
                        Version: V<?php echo $current_version; ?>
                    </span>
                    <span class="bg-white text-black bg-opacity-20 px-4 py-2 rounded-full text-sm md:text-base">
                        Published: <?php echo $release_date; ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="gym-container">
            <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                <h2 class="text-2xl font-bold">Version overview</h2>
                <div class="section-divider"></div>
                <p class="text-gray-700 mb-5">
                    Version <strong>V<?php echo $current_version; ?></strong> brings significant improvements in both user experience and performance.
                    In this release, the focus has been on new features and optimization of the existing system.
                </p>

                <div class="flex flex-wrap gap-3">
                    <?php
                    $featureCount = count(array_filter($changes, fn($item) => $item['type'] == 'feature'));
                    $improvementCount = count(array_filter($changes, fn($item) => $item['type'] == 'improvement'));
                    $bugfixCount = count(array_filter($changes, fn($item) => $item['type'] == 'bugfix'));
                    ?>

                    <?php if ($featureCount > 0): ?>
                        <span class="feature-tag px-4 py-2 rounded-full text-sm">
                            <?= $featureCount ?> new feature
                        </span>
                    <?php endif; ?>

                    <?php if ($improvementCount > 0): ?>
                        <span class="improvement-tag px-4 py-2 rounded-full text-sm">
                            <?= $improvementCount ?> development
                        </span>
                    <?php endif; ?>

                    <?php if ($bugfixCount > 0): ?>
                        <span class="bugfix-tag px-4 py-2 rounded-full text-sm">
                            <?= $bugfixCount ?> bug fix
                        </span>
                    <?php endif; ?>
                </div>

            </div>

            <h2 class="text-2xl font-bold mb-2">Change Log in detail</h2>
            <div class="section-divider mb-6"></div>

            <div class="space-y-6">
                <?php foreach ($changes as $change): ?>
                    <div class="changelog-item bg-white rounded-lg shadow-sm p-6">
                        <?php
                        $tag_class = '';
                        $tag_text = '';

                        switch ($change['type']) {
                            case 'feature':
                                $tag_class = 'feature-tag';
                                $tag_text = 'New Feature';
                                break;
                            case 'improvement':
                                $tag_class = 'improvement-tag';
                                $tag_text = 'Development';
                                break;
                            case 'bugfix':
                                $tag_class = 'bugfix-tag';
                                $tag_text = 'Bug Fix';
                                break;
                        }
                        ?>

                        <div class="flex flex-wrap gap-6 items-start">
                            <div class="flex-1">
                                <span class="<?php echo $tag_class; ?> px-3 py-1 rounded-full text-sm mb-3 inline-block">
                                    <?php echo $tag_text; ?>
                                </span>
                                <h3 class="text-xl font-bold mb-3"><?php echo $change['title']; ?></h3>
                                <p class="text-gray-700 mb-4"><?php echo $change['description']; ?></p>
                            </div>

                            <?php if ($change['image']): ?>
                                <div class="w-full md:w-auto mt-4 md:mt-0">
                                    <img src="<?php echo $change['image']; ?>" alt="<?php echo $change['title']; ?> Illustration"
                                        class="changelog-img object-cover max-w-full" width="320" height="180">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS és Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>