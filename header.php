<?php
            $filepath = $_SERVER['PHP_SELF'];
            ?>
<header>
    <!-- place navbar here -->
        <nav class="nav">
            <p>Sazid's Blog</p>
            <input type="checkbox">
            <P class="three_dot">|||</P>
        <ul>
            <li><a href="index" class="<?php if($filepath == "/blog/index.php"){echo "active";} ?>">Home</a></li>
            <li><a href="contact" class="<?php if($filepath == "/blog/contact.php"){echo "active";} ?>">Contact</a></li>
            <li><a href="#" class="<?php if($filepath == "/blog/post.php"){echo "active";} ?>">Post</a></li>
            <li><a href="#" class="<?php if($filepath == "/blog/aboutme.php"){echo "active";} ?>">About me</a></li>
        </ul>
        </nav>
</header>

  