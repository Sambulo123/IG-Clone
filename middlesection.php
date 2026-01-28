<?php
$stories = [
    ["name" => "User 1", "image" => "placeholder picture.jpg"],  //add pic here for stories (this is for Alpha Koder)
    ["name" => "User 2", "image" => "placeholder picture.jpg"],  //add pic here for stories
    ["name" => "User 3", "image" => "placeholder picture.jpg"],  //add pic here for stories
    ["name" => "User 4", "image" => "placeholder picture.jpg"],  //add pic here for stories
    ["name" => "User 5", "image" => "placeholder picture.jpg"],  //add pic here for stories
    ["name" => "User 6", "image" => "placeholder picture.jpg"],  //add pic here for stories
    ["name" => "User 7", "image" => "placeholder picture.jpg"],  //add pic here for stories
    ["name" => "User 8", "image" => "placeholder picture.jpg"],  //add pic here for stories
    ["name" => "User 9", "image" => "placeholder picture.jpg"],  //add pic here for stories
    ["name" => "User 10", "image" => "placeholder picture.jpg"],  //add pic here for stories
    ["name" => "User 11", "image" => "placeholder picture.jpg"],  //add pic here for stories
    ["name" => "User 11", "image" => "placeholder picture.jpg"],  //add pic here for stories
    ["name" => "User 12", "image" => "placeholder picture.jpg"],  //add pic here for stories
];

$posts = [
    [
        "username"=> "User 1",
        "profile_pic"=> "placeholder picture.jpg",  //add pic here for posts
        "time"=>"16m",
        "verified"=>true,
        "post_image" => "placeholder picture.jpg",
        "likes_user"=> "User 2",
        "likes_count"=>120,
        "caption"=> "This is the caption for post 1"
    ],
    [
        "username"=> "User 2",     //you can change the username
        "profile_pic"=> "placeholder picture.jpg",  //add pic here for stories
        "time"=>"16m",      //u can change the time
        "verified"=>false,
        "post_image" => "placeholder picture.jpg",  //add pic here for posts
        "likes_user"=> "User 2",  //this is who liked the post
        "likes_count"=>120,    //this is the like count
        "caption"=> "This is the caption for post 2"  //u can add a caption here anyone you want
    ],
    [      //please look at the top post for reference.
        "username"=> "User 3",
        "profile_pic"=> "placeholder picture.jpg",  //add pic here for posts
        "time"=>"16m",
        "verified"=>true,
        "post_image" => "placeholder picture.jpg",
        "likes_user"=> "User 2",
        "likes_count"=>120,
        "caption"=> "This is the caption for post 2"
    ],
    [
        "username"=> "User 4",
        "profile_pic"=> "placeholder picture.jpg",  //add pic here for posts
        "time"=>"16m",
        "verified"=>true,
        "post_image" => "placeholder picture.jpg",
        "likes_user"=> "User 2",
        "likes_count"=>120,
        "caption"=> "This is the caption for post 2"
    ],
    [
        "username"=> "User 5",
        "profile_pic"=> "placeholder picture.jpg",  //add pic here for posts
        "time"=>"16m",
        "verified"=>false,
        "post_image" => "placeholder picture.jpg",
        "likes_user"=> "User 2",
        "likes_count"=>120,
        "caption"=> "This is the caption for post 2"
    ],
    [
        "username"=> "User 6",
        "profile_pic"=> "placeholder picture.jpg",  //add pic here for posts
        "time"=>"16m",
        "verified"=>false,
        "post_image" => "placeholder picture.jpg",
        "likes_user"=> "User 2",
        "likes_count"=>120,
        "caption"=> "This is the caption for post 2"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Clone Project</title>
    <link rel="stylesheet" href="IG clone.css">
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
<script src="IG clone.js"></script>
</body>
</html>
