<?php
$title = 'Blog';
require('./includes/header.php');
require('./database.php');


$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['DELTE'])) {

      // var_dump($_POST);

      $post_id = $_POST['post_id'];
      $statement = $pdo->prepare("DELETE FROM posts WHERE id = ?");
      $statement->execute([$post_id]);

      header('Location: blog.php');
}
?>

<?php if (isset($_SESSION['post-yaratildi'])): ?>
      <div class="alert alert-info" role="alert">
            <?= $_SESSION['post-yaratildi']; ?>
            <?php unset($_SESSION['post-yaratildi']); ?>
      </div>
<?php endif; ?>

<section class="py-5 text-center container">
      <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                  <h1 class="fw-light">Album example</h1>
                  <p class="lead text-body-secondary">Something short and leading about the collection
                        below—its contents, the creator, etc. Make it short and sweet, but not too short so
                        folks don’t simply skip over it entirely.</p>
                  <p>
                        <a href="./createPost.php" class="btn btn-primary my-2">Post yaratish</a>
                        <a href="/" class="btn btn-secondary my-2">Bosh sahifa</a>
                  </p>
            </div>
      </div>
</section>

<div class="album py-5 bg-body-tertiary">
      <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <?php foreach ($posts as $post): ?>
                        <div class="col">
                              <div class="card shadow-sm">
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                          xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                          preserveAspectRatio="xMidYMid slice" focusable="false">
                                          <title>Placeholder</title>
                                          <rect width="100%" height="100%" fill="#55595c" />
                                          <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                    </svg>
                                    <div class="card-body">
                                          <a href="post.php?id=<?= $post['id']; ?>"
                                                class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                                <h4>
                                                      <?= $post['title']; ?>
                                                </h4>

                                          </a>
                                          <p class="card-text">
                                                <?php
                                                // $post['body']; 
                                          
                                                // $suzlar = array();
                                                // $post['body'] = array();
                                                // foreach($post['body'] as $malumot){
                                                //       $soz = preg_replace('/\PL/u', '', $malumot);
                                                //       if (strlen($soz) > 25) {
                                                //             $soz = substr($soz, 0, 25); // faqat 25 ta harfni olish
                                                //         }
                                                //         $post['body'] = $soz;
                                                // }
                                                echo $post['body'];
                                                ?>
                                          </p>
                                          <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                      <a href="./postEdit.php?id=<?= $post['id'];?>"
                                                            class="btn btn-sm btn-outline-secondary">Edit</a>
                                                      <form action="" method="POST"
                                                            onsubmit="return confirm('Rostdan ham o\'chirmoqchimisiz?');">
                                                            <input type="hidden" name="post_id" value="<?= $post['id']; ?>">
                                                            <input type="hidden" name="DELTE">
                                                            <button type="submit"
                                                                  class="btn btn-sm btn-outline-secondary">Delete</button>
                                                      </form>
                                                </div>
                                                <small>
                                                      <?= $post['create_at']; ?>
                                                </small>

                                          </div>
                                    </div>
                              </div>
                        </div>
                  <?php endforeach; ?>

            </div>
      </div>
</div>

<?php require('./includes/footer.php'); ?>