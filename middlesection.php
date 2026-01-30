 <?php
$stories = [
    ["name" => "Khanyisa.sa", "image" => "gyp.jpg"],  //add pic here for stories (this is for Alpha Koder)
    ["name" => "Sthandile.sa", "image" => "boxedRedRoses.jpg"],  //add pic here for stories
    ["name" => "Pathom.Alpha", "image" => "carnations bouqet.jpg"],  //add pic here for stories
    ["name" => "Nhloso-enhle.sa", "image" => "lillies.jpg"],  //add pic here for stories
    ["name" => "Luyanda.M", "image" => "mixedbunchRoses.jpg"],  //add pic here for stories
    ["name" => "Z.ama p", "image" => "PurplepitchPerfect.jpg"],  //add pic here for stories
    ["name" => "sweetrevenge.sa", "image" => "red roses2.jpg"],  //add pic here for stories
    ["name" => "Siphesihle.Mdanda", "image" => "spray roses.jpg"],  //add pic here for stories
    ["name" => "Nandy_k", "image" => "sunflowers.jpg"],  //add pic here for stories
    ["name" => "SugarBear.Ndaba", "image" => "white roses2.jpg"],  //add pic here for stories
    ["name" => "SI.BONGA", "image" => "yellow mixed bunch.jpg"],  //add pic here for stories
    ["name" => "Mel.rolens", "image" => "post6.jpg"],  //add pic here for stories
   
];

$posts = [
    [
        "username"=> "SI.BONGA",
        "profile_pic"=> "lillies.jpg",  //add pic here for posts
        "time"=>"16m",
        "verified"=>true,
        "post_image" => "post1.jpg",
        "likes_user"=> "Khanyisa.sa",
        "likes_count"=>190,
        "caption"=> "ZARA HUN"
    ],
    [
        "username"=> "Pathom.Alpha",     //you can change the username
        "profile_pic"=> "carnations bouqet.jpg",  //add pic here for stories
        "time"=>"16m",      //u can change the time
        "verified"=>false,
        "post_image" => "post2.jpg",  //add pic here for posts
        "likes_user"=> "Ama_tha",  //this is who liked the post
        "likes_count"=>567,    //this is the like count
        "caption"=> "chilled sunday , vibes laid back!"  //u can add a caption here anyone you want
    ],
    [      //please look at the top post for reference.
        "username"=> "wallpapers aesthetics",
        "profile_pic"=> "purple.jpg",  //add pic here for posts
        "time"=>"16m",
        "verified"=>true,
        "post_image" => "post3.jpg",
        "likes_user"=> "lulubear",
        "likes_count"=>904,
        "caption"=> "god is my sherperd i shall not want!"
    ],
    [
        "username"=> "sweetrevenge.sa",
        "profile_pic"=> "spray roses.jpg",  //add pic here for posts
        "time"=>"16m",
        "verified"=>true,
        "post_image" => "post4.jpg",
        "likes_user"=> "standard_user",
        "likes_count"=>120,
        "caption"=> "NO ONE TO CALL WHEN THE PLANE LANDS"
    ],
    [
        "username"=> "Khanyisa.sa",
        "profile_pic"=> "gyp.jpg",  //added
        "time"=>"16m",
        "verified"=>false,
        "post_image" => "post5.jpg",
        "likes_user"=> "sthandile.sa",
        "likes_count"=>200,
        "caption"=> "unique is better than ordinary"
    ],
    [
        "username"=> "Sthandile.sa",
        "profile_pic"=> "petals.jpg",  //added
        "time"=>"16m",
        "verified"=>false,
        "post_image" => "post6.jpg",
        "likes_user"=> "amahlethu.sa",
        "likes_count"=>340,
        "caption"=> "street wear is better than being street smart!"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Clone Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <div class="middle-section">
    <div class="stories-wrapper">
        <button class="scroll-btn left" onclick="scrollStories(-1)">
            <i class="bi bi-arrow-left-circle"></i>
        </button>

        <div class="stories-viewport">
            <div class="stories-track" id="storiesTrack">

            <?php foreach($stories as $story): ?>
                <div class="story">
                    <div class="story-ring">
                        <img src="<?php echo $story['image']; ?>" alt="<?php echo $story['name']; ?>'s story">
            </div>
            <p><?php echo $story['name'];?></p>
            </div>
            <?php endforeach;?>
            </div>
            </div>

            <button class="scroll-btn right" onclick="scrollStories(1)">
                <i class="bi bi-arrow-right-circle"></i>
            </button>
            </div>

    <div class="post-wrapper">
    <?php foreach($posts as $post): ?>
        <div class="post">
            <div class="post-header">
                <div class="user-info">
                    <div class="profile-pic">
                        <img src="<?php echo $post['profile_pic']; ?>" alt="profile pic">
                    </div>
                    <p class="username">
                        <?php echo $post['username']; ?> * <?php echo $post['time']; ?>
                        <?php if($post['verified']): ?>
                            <i class="bi bi-patch-check-fill verified"></i>
                        <?php endif; ?>
                    </p>
                </div>
                <i class="bi bi-three-dots"></i>
            </div>

            <div class="post-image">
                <img src="<?php echo $post['post_image']; ?>" alt="post image">
            </div>

            <div class="post-actions">
                <div class="left-actions">
                    <i class="bi bi-heart"></i>
                    <i class="bi bi-chat"></i>
                    <i class="bi bi-send"></i>
                </div>
                <div class="right-actions">
                    <i class="bi bi-bookmark"></i>
                </div>
            </div>

            <div class="post-likes">
                <p>liked by <strong><?php echo $post['likes_user']; ?></strong> and <strong><?php echo $post['likes_count']; ?> others</strong></p>
            </div>

            <div class="post-caption">
                <p><strong><?php echo $post['username']; ?></strong> <?php echo $post['caption']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
            </div>
<script src="script.js"></script>
</body>
</html>
