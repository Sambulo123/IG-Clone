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
    <link rel="stylesheet" href="/IG-Clone/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

<aside class="left">
       <div class="left-container">

        <div class="logo-container">
          <img src="svgs/instagram.svg" alt="">
        </div>

        <div class="menu-container">
          <span class="menu-element">
            <img src="svgs/home.svg" alt="">
            <p>Home</p>
          </span>

           <span class="menu-element">
            <img src="svgs/videos.svg" alt="">
            <p>Reels</p>
          </span>

           <span class="menu-element">
            <img src="svgs/send.svg" alt="">
            <p>Messages</p>
          </span>

           <span class="menu-element">
            <img src="svgs/search.svg" alt="">
            <p>Search</p>
          </span>

           <span class="menu-element">
            <img src="svgs/compass.svg" alt="">
            <p>Explore</p>
          </span>

           <span class="menu-element">
            <img src="svgs/heart.svg" alt="">
            <p>Notifications</p>
          </span>

           <span class="menu-element">
            <img src="svgs/post.svg" alt="">
            <p>Create</p>
          </span>

           <span class="menu-element">
            <img src="svgs/instagram.svg" alt="">
            <p>Profile</p>
          </span>
        </div>

        <div class="more-options">
           <span class="more-element">
            <img src="svgs/menu.svg" alt="">
            <p>More</p>
          </span>

          <span class="more-element">
            <img src="svgs/More.svg" alt="">
            <p>Also from Meta</p>
          </span>
        </div>

       </div> 


      </aside>

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
            


  <aside class="right">
    
    <div class = "user">
      <img src="https://www.ciphersyndicate.co.za/logo.jpg">

      <div class="user-info">
      <span class="username">CipherSyndicate</span>
      <span class="bio">Code.Create.Captivate</span>
      </div>

      <a href="#" class="switch">Switch</a>
    </div>

    <!---The Suggestsed header-->
    <div class="suggestions-header">
      <span>Suggested for you </span>
      <a href="#">See All</a>
    </div>

    <!----The Start of Suggested users-->
    <div class="suggestion">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6RPWa-CxpCA2sBe5WuLsTcbIlSOYhcZFNJg&s">
      <div class="info">
        <strong>BinaryBloom</strong>
        <span>Followed by CipherSyndicate</span>
      </div>
      <a href="#" class="follow">Follow</a>
    </div>

    <div class="suggestion">
      <img src="https://t3.ftcdn.net/jpg/18/37/17/06/240_F_1837170664_WH93y6zIKnKLq2DMxuP1EU3rutkM2DBY.jpg">
      <div class="info">
        <strong>Coddesa</strong>
        <span>Followed by Shadow Byte</span>
      </div>
      <a href="#" class="follow">Follow</a>
    </div>

    <div class="suggestion">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQghKUmrzXWwtIi_bYlZeVEO_I_zu2lZJypOw&s">
      <div class="info">
        <strong>Shadow Byte</strong>
        <span>Followed by Alpha Koder</span>
      </div>
      <a href="#" class="follow">Follow</a>
    </div>

    <div class="suggestion">
      <img src="https://t4.ftcdn.net/jpg/18/23/02/31/240_F_1823023179_zB2fYcUbezu9MxSqxT3FL59GwMevoYZX.jpg">
      <div class="info">
        <strong>Cache kat</strong>
        <span>Followed by Silent Server</span>
      </div>
      <a href="#" class="follow">Follow</a>
    </div>

    <div class="suggestion">
      <img src="https://t3.ftcdn.net/jpg/18/64/04/06/240_F_1864040678_xVppK5L44hhE3XJSNWtr55zTGC07hoUG.jpg">
      <div class="info">
        <strong>Alpha Koder</strong>
        <span>Followed by BinaryBloom</span>
      </div>
      <a href="#" class="follow">Follow</a>
    </div>


    <div class = "suggestion-footer">
      <div class="footer-links">
        <a href="#">About</a>.
        <a href="#">Help</a>.
        <a href="#">Press</a>.
        <a href="#">API</a>.
        <A href="#">Jobs</A>.
        <a href="#">Privacy</a>.
        <a href="#">Terms</a>.
        <a href="#">Location</a>.
        <a  href="#">Language</a>
        <a href="#">Meta Verified</a>
      </div>

      <p class="copyright">
        2025 INSTAGRAM FROM META
      </p>
    </div>


</aside>
<script src="script.js"></script>
</body>
</html>
