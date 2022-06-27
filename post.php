<?php 
include_once("templates/header.php");

if(isset($_GET['id'])){
    
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if($post['id'] == $postId){
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
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?> " alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates deserunt molestiae quisquam eos accusamus mollitia eveniet, provident excepturi neque! Sed amet vero eligendi iure! Sunt, ipsum adipisci! Reprehenderit, dicta corrupti?
            Repudiandae, eligendi deleniti temporibus commodi sint a animi rerum tenetur dignissimos excepturi aspernatur aut repellat repellendus esse magni consectetur sunt. Animi impedit, dolor molestias dolorum pariatur quis incidunt quo tempora!
            Nulla quidem ipsam incidunt veritatis magni cumque fuga, unde odio aliquid nisi minus deleniti possimus ducimus maiores ratione consequatur totam dolores magnam accusamus quaerat illum veniam. Laboriosam voluptate magni eligendi?
            Accusamus vero odio culpa ut doloribus quisquam repudiandae voluptates asperiores ea ducimus, sapiente similique eius eum explicabo ipsa nam, ipsum incidunt unde autem facere rerum! Cumque quisquam tenetur iste incidunt.
            Est eos necessitatibus consequatur repellendus sit architecto, dicta explicabo culpa, quae dolorum neque saepe dolore quaerat veniam modi sunt sint iste vitae ratione, nihil atque eum beatae facere. Fuga, neque.
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates deserunt molestiae quisquam eos accusamus mollitia eveniet, provident excepturi neque! Sed amet vero eligendi iure! Sunt, ipsum adipisci! Reprehenderit, dicta corrupti?
            Repudiandae, eligendi deleniti temporibus commodi sint a animi rerum tenetur dignissimos excepturi aspernatur aut repellat repellendus esse magni consectetur sunt. Animi impedit, dolor molestias dolorum pariatur quis incidunt quo tempora!
            Nulla quidem ipsam incidunt veritatis magni cumque fuga, unde odio aliquid nisi minus deleniti possimus ducimus maiores ratione consequatur totam dolores magnam accusamus quaerat illum veniam. Laboriosam voluptate magni eligendi?
            Accusamus vero odio culpa ut doloribus quisquam repudiandae voluptates asperiores ea ducimus, sapiente similique eius eum explicabo ipsa nam, ipsum incidunt unde autem facere rerum! Cumque quisquam tenetur iste incidunt.
            Est eos necessitatibus consequatur repellendus sit architecto, dicta explicabo culpa, quae dolorum neque saepe dolore quaerat veniam modi sunt sint iste vitae ratione, nihil atque eum beatae facere. Fuga, neque.
        </p>

        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates deserunt molestiae quisquam eos accusamus mollitia eveniet, provident excepturi neque! Sed amet vero eligendi iure! Sunt, ipsum adipisci! Reprehenderit, dicta corrupti?
            Repudiandae, eligendi deleniti temporibus commodi sint a animi rerum tenetur dignissimos excepturi aspernatur aut repellat repellendus esse magni consectetur sunt. Animi impedit, dolor molestias dolorum pariatur quis incidunt quo tempora!
            Nulla quidem ipsam incidunt veritatis magni cumque fuga, unde odio aliquid nisi minus deleniti possimus ducimus maiores ratione consequatur totam dolores magnam accusamus quaerat illum veniam. Laboriosam voluptate magni eligendi?
            Accusamus vero odio culpa ut doloribus quisquam repudiandae voluptates asperiores ea ducimus, sapiente similique eius eum explicabo ipsa nam, ipsum incidunt unde autem facere rerum! Cumque quisquam tenetur iste incidunt.
            Est eos necessitatibus consequatur repellendus sit architecto, dicta explicabo culpa, quae dolorum neque saepe dolore quaerat veniam modi sunt sint iste vitae ratione, nihil atque eum beatae facere. Fuga, neque.
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates deserunt molestiae quisquam eos accusamus mollitia eveniet, provident excepturi neque! Sed amet vero eligendi iure! Sunt, ipsum adipisci! Reprehenderit, dicta corrupti?
            Repudiandae, eligendi deleniti temporibus commodi sint a animi rerum tenetur dignissimos excepturi aspernatur aut repellat repellendus esse magni consectetur sunt. Animi impedit, dolor molestias dolorum pariatur quis incidunt quo tempora!
            Nulla quidem ipsam incidunt veritatis magni cumque fuga, unde odio aliquid nisi minus deleniti possimus ducimus maiores ratione consequatur totam dolores magnam accusamus quaerat illum veniam. Laboriosam voluptate magni eligendi?
            Accusamus vero odio culpa ut doloribus quisquam repudiandae voluptates asperiores ea ducimus, sapiente similique eius eum explicabo ipsa nam, ipsum incidunt unde autem facere rerum! Cumque quisquam tenetur iste incidunt.
            Est eos necessitatibus consequatur repellendus sit architecto, dicta explicabo culpa, quae dolorum neque saepe dolore quaerat veniam modi sunt sint iste vitae ratione, nihil atque eum beatae facere. Fuga, neque.
        </p>

        </div>

  <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
             <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?> </a></li>
            <?php endforeach; ?>
         </ul>

         <h3 id="categories-title">Categorias</h3>
         <ul id="categories-list">
             <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?> </a></li>
            <?php endforeach; ?>
         </ul>
    </aside>

    </main>
  
<?php
include_once("templates/footer.php");
?>