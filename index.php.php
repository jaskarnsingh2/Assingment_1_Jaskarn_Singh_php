<?php

/*******w******** 
    
    Name:jaskarn singh
    Date:
    Description:

****************/

$config = [
    'gallery_name' => 'Jaskarn Gallery',
    'unsplash_categories' => ['forest', 'nature', 'water', 'city', 'mountains', 'animals' ],
    'local_images' => [
        ['filename' => 'image1.jpg', 'photographer' => 'Matthieu Marseille', 'url' => 'https://unsplash.com/@bymatthieum'],
        ['filename' => 'image2.jpg', 'photographer' => 'Richard Stachmann', 'url' => 'https://unsplash.com/@stachmann'],
        ['filename' => 'image3.jpg', 'photographer' => 'Mark McNeill', 'url' => 'https://unsplash.com/@markmcneillphotography'],
        ['filename' => 'image4.jpg', 'photographer' => 'Chalo Gallardo', 'url' => 'https://unsplash.com/@chalogallardo']
    ]
];

$categories = $config['unsplash_categories'];
$categoryCount = count($categories);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title><?= $config['gallery_name']?></title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <h1><?php echo $config['gallery_name']; ?></h1>
    
    <?php for ($i = 0; $i < $categoryCount; $i++):
        $category = $categories[$i]; ?>
        <div class="category">
            <h2><?php echo ucfirst($category); ?></h2>
            <img src="https://source.unsplash.com/300x200/?<?php echo $category; ?>" alt="<?php echo $category; ?> image">
        </div>
    <?php endfor; ?>

    <h1><?= count($config['local_images'])." Local Images" ?></h1>

    <?php
    $images = $config['local_images'];
    $imageCount = count($images);

    for ($i = 0; $i < $imageCount; $i++):
        $image = $images[$i];
    ?>
        <div class="local-image">
            <img src="images/<?php echo $image['filename']; ?>" alt="<?php echo $image['photographer']; ?>">
            <p>
                <a href="<?php echo $image['url']; ?>"><?php echo $image['photographer']; ?></a>
            </p>
        </div>
    <?php endfor; ?>

</body>
</html>
