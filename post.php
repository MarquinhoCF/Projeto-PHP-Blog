<?php
    include_once('templates/header.php');

    if (isset($_GET['id'])) {
        $postID = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if  ($post['id'] == $postID) {
                $currentPost = $post;
            }
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit commodi unde eaque, eos dolore cupiditate provident minus qui odio quidem autem voluptates deserunt voluptate! Rem fugiat debitis nostrum earum ad.
                Dolor quas aspernatur tempore labore aliquam. Autem natus asperiores, beatae tempora earum, sequi dignissimos dolores repellat tenetur culpa quaerat nam saepe adipisci consectetur molestias architecto molestiae iste dolor odio velit.
                Blanditiis amet unde sequi, facilis quidem tempore accusamus alias pariatur nisi dolores sint repellat commodi beatae corrupti possimus fugiat itaque ullam nobis voluptatibus maiores! Sunt repellat doloremque dolore expedita fuga?
                Excepturi, quis corrupti? Assumenda magnam voluptate voluptas voluptatibus non quaerat, odit, architecto rem possimus ducimus laboriosam perferendis eos! Doloribus magnam ut delectus laborum pariatur cupiditate error vitae similique maxime facere.
                Est repellat quibusdam maiores doloremque nesciunt possimus facilis hic pariatur eveniet? Doloremque fugit molestiae tempore vel a vitae cum labore laboriosam nihil dolor. Aliquam, laboriosam hic explicabo odit consequatur nam?
            </p>
            <p class="post-content">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit commodi unde eaque, eos dolore cupiditate provident minus qui odio quidem autem voluptates deserunt voluptate! Rem fugiat debitis nostrum earum ad.
                Dolor quas aspernatur tempore labore aliquam. Autem natus asperiores, beatae tempora earum, sequi dignissimos dolores repellat tenetur culpa quaerat nam saepe adipisci consectetur molestias architecto molestiae iste dolor odio velit.
                Blanditiis amet unde sequi, facilis quidem tempore accusamus alias pariatur nisi dolores sint repellat commodi beatae corrupti possimus fugiat itaque ullam nobis voluptatibus maiores! Sunt repellat doloremque dolore expedita fuga?
                Excepturi, quis corrupti? Assumenda magnam voluptate voluptas voluptatibus non quaerat, odit, architecto rem possimus ducimus laboriosam perferendis eos! Doloribus magnam ut delectus laborum pariatur cupiditate error vitae similique maxime facere.
                Est repellat quibusdam maiores doloremque nesciunt possimus facilis hic pariatur eveniet? Doloremque fugit molestiae tempore vel a vitae cum labore laboriosam nihil dolor. Aliquam, laboriosam hic explicabo odit consequatur nam?
            </p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tags-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach ?>
            </ul>
        </aside>
    </main>

<?php
    include_once('templates/footer.php');
?>