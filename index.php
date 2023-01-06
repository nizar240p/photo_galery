<?php
$img = array('anya','bleach','bluelock','bocchi','csm','deku','iamatomic','mob','sugoidekai');
$alam = array('mountaint','beach','swamp','greenfield','paris','japan','italia','spinx','sea');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Galery ORI CSS</title>

    <link rel="preload" as="image" href="img/anime/anya.webp">
    <link rel="preload" as="image" href="img/anime/bleach.webp">
    <link rel="preload" as="image" href="img/anime/bluelock.webp">
    <link rel="preload" as="image" href="img/anime/bocchi.webp">
    <link rel="preload" as="image" href="img/anime/csm.webp">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .container2 {
        position: relative;
        width: 100%;
        height: 300px;
        }

        .image {
        display: block;
        width: 100%;
        height: 100%;
        }

        .overlay {
            opacity: 0%;
            box-sizing: border-box;
        padding: 1rem;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #10b981;
        overflow: scroll;
        width: 100%;
        height: 0;
        transition-duration: 700ms;
        }

        .container2:hover .overlay {
            opacity: 100%;
        height: 100%;
        }
    </style>
</head>
<body>
    <!-- Hero Section Start -->
    <header id="home" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            
        </div>
    </header>
    <!-- Hero Section End -->

    <!-- Main Galery Start -->
    <section id="main">
        <div class="container">
            <div class="parent">
                <?php for($i = 0; $i < 18; $i++): ?>
                <div class="card">
                    <div class="card-content">
                        <div class="container2">
                            <img src="https://source.unsplash.com/720x480?<?=$alam[rand(0,8)]?>" alt="Avatar" loading="lazy" class="image">
                            <div class="overlay">
                                <div class="desc-title"><?=$alam[rand(0,8)]?></div>
                                <div class="desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ipsum temporibus magnam quidem rem deleniti ducimus! Soluta fuga et est ipsam, aperiam, sit deleniti iste quaerat incidunt veritatis cum recusandae?</div>
                                <!-- <div class="desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda blanditiis laborum optio est, unde harum numquam eaque at quam soluta? Similique sint omnis animi incidunt quae deserunt minus eos accusamus! Cumque voluptatem in eius architecto unde, inventore eum laudantium est dolorem quos adipisci at. Explicabo error illum, animi saepe maiores ex culpa totam asperiores dicta? Velit, ipsam. Ut culpa voluptates iusto consequuntur! Sapiente magni tenetur mollitia impedit similique eligendi dolores culpa iste perferendis cupiditate ex veritatis delectus id ut voluptas odio inventore rem deserunt praesentium, eveniet consequatur unde! Blanditiis tempore voluptatibus ex, odit quam molestiae, sed ullam quis nulla in eum delectus explicabo cumque quibusdam quidem sapiente! Repellat necessitatibus error ipsam culpa doloremque, saepe sunt ad, vitae eaque incidunt harum assumenda numquam recusandae dolores animi quod cupiditate ipsum eos nobis nam expedita consequatur. Deleniti, eum harum. Aspernatur dolorem quia explicabo doloremque unde officia exercitationem quo nisi illo inventore, ipsam quisquam ea aliquam tenetur facilis? Consequatur repellat atque accusamus commodi nesciunt perferendis blanditiis, iste dolore. Quis maxime illum fugit, itaque quasi cum dicta debitis omnis quibusdam aut suscipit iusto doloremque libero facilis distinctio perferendis labore. Nulla incidunt delectus autem maxime? Repellendus porro voluptatum dolorum error libero perferendis minima odit tempore tempora. Eius, laudantium et facilis possimus minima similique sequi incidunt rerum officia sapiente eligendi vitae consequuntur, quae dolore ratione delectus non dolor ea laborum qui quaerat dignissimos debitis modi odio! Aperiam illum blanditiis sunt eaque? Quas nesciunt ducimus ad deserunt earum eligendi impedit commodi sunt ullam assumenda, officiis sequi nobis exercitationem temporibus officia aliquam eos architecto maxime a obcaecati? Dicta debitis quibusdam molestiae nesciunt accusamus? Tempora dolores explicabo earum voluptatum, quae eveniet eius neque! Nulla praesentium quaerat veniam quisquam est tempore eligendi iste itaque veritatis. Esse deserunt nisi sed quia nostrum assumenda? Doloribus harum eius ad debitis quod quibusdam! At iusto maxime soluta iste, odio ratione! Totam doloremque obcaecati quae quam autem ullam, ea dolorum. Asperiores voluptatem minima alias culpa, amet accusantium facere, sequi temporibus facilis tempore harum veniam fuga sapiente non accusamus dolorem distinctio itaque! Quas obcaecati, aut facere maiores praesentium est molestiae doloribus maxime amet. Commodi ut quaerat sint aut qui maiores alias quibusdam provident. Minima sequi ea est, ullam corporis dolor ipsam maiores laboriosam libero, sed dicta quidem amet maxime ab quo obcaecati commodi adipisci sapiente cumque quisquam illo ratione illum. Est eaque rem, aperiam, a minima dolorem laboriosam debitis reprehenderit nam ullam praesentium, recusandae similique necessitatibus vero accusantium nisi. Ex veritatis modi corrupti, nostrum suscipit porro neque sit esse eaque dicta inventore magni, aliquam, sint perferendis vitae nam! Accusantium libero blanditiis totam aperiam error fugit asperiores earum labore? Omnis deserunt nulla alias nihil nostrum tempora, consequuntur veritatis? Sapiente nihil inventore consectetur, corrupti deleniti animi, sit in voluptates nobis ullam veritatis, repellendus esse blanditiis necessitatibus est incidunt. Quae hic qui nihil eveniet, itaque in, pariatur, quibusdam omnis dicta explicabo harum perspiciatis nesciunt atque aliquam deserunt veritatis voluptates distinctio? Cupiditate eligendi itaque incidunt reiciendis, ducimus aspernatur iusto quos beatae quo adipisci, magnam placeat! Impedit temporibus ad alias et voluptas ducimus id adipisci mollitia molestiae, in eum assumenda iure nulla animi dolorum ratione nihil odit excepturi cumque consequuntur. Enim eaque velit officia, similique iste quisquam, eius delectus beatae eos possimus veritatis vitae quaerat tempora veniam rerum aliquid. Officia, repellat labore deserunt veritatis omnis saepe quia ipsum quos praesentium quam quibusdam, aut corrupti aliquam quisquam nostrum aliquid, similique culpa! Possimus iste vero doloribus exercitationem, repudiandae repellendus perferendis quae magnam provident velit consequatur cumque eaque temporibus odit est praesentium magni, eum omnis aspernatur cupiditate assumenda. Sint, adipisci. Voluptatem, praesentium id. Iure aliquid ut dolores libero optio officia, cumque nobis omnis cum sunt dolore doloribus consequatur reprehenderit minima deserunt ex fugiat animi ea accusamus alias nemo. A suscipit dolores optio iste libero quia nam expedita eius consequatur id! Animi blanditiis iure molestias error debitis, repellendus quisquam dolorum quos optio facere dignissimos non consectetur ratione nisi neque, labore laboriosam similique expedita quod doloremque minus adipisci? Sint aliquam vel eligendi dolorem nesciunt eveniet quod, vitae modi voluptatum iusto corporis. Aut eaque laborum, repellendus expedita saepe, aperiam eos ad temporibus animi magnam commodi, autem cum deserunt omnis pariatur aliquid recusandae iure velit? Dolor quasi aliquam laborum culpa cumque. Labore possimus aliquam iste velit voluptate. Est eum nihil accusamus voluptatum in ex veritatis placeat eos sunt, nesciunt adipisci dolorum vel incidunt repudiandae sapiente laborum! Quisquam nisi perspiciatis laboriosam blanditiis illo tempora dicta, architecto, quis placeat earum distinctio suscipit excepturi, molestiae minus maiores consectetur totam. Et aspernatur maxime at autem minus enim rerum magnam dignissimos tenetur necessitatibus? Eaque illo illum totam doloribus delectus, enim labore cum deserunt harum error nobis eligendi necessitatibus amet unde suscipit natus temporibus, aspernatur omnis quos vitae! Dolorem ullam incidunt iure at animi repellat quo nobis, explicabo obcaecati id beatae aliquid pariatur aut officia excepturi laborum a debitis ex, dicta repudiandae officiis quis atque totam ab! Repellendus officiis inventore tenetur pariatur esse odit eos, tempora beatae obcaecati non sit temporibus, enim, expedita minima eius repudiandae sed distinctio veniam? Placeat nulla cumque adipisci doloribus voluptatibus, blanditiis impedit alias ut suscipit sed eius fugit veniam nam neque aliquam atque molestias. Asperiores doloribus nulla alias, iste ipsam culpa velit qui, quidem cum exercitationem vel adipisci ea libero ad perspiciatis deleniti odit mollitia explicabo? Assumenda temporibus dolorum, repellendus obcaecati qui ab tempore ut asperiores placeat earum distinctio aliquam, animi porro corrupti! Corporis quibusdam, itaque cum pariatur quam quod qui placeat delectus et minus, distinctio id quisquam velit. Voluptas officiis obcaecati voluptate voluptates, sequi minima magni repellendus cum! Quaerat quos, repellat aperiam animi totam ut voluptates laborum ea commodi numquam odit fugit illo eius est mollitia quo temporibus, architecto amet delectus. Repellat doloremque aperiam quasi eveniet iure assumenda. Esse veniam molestias eius magni quia tenetur est, quo, distinctio corrupti numquam eum velit nisi dignissimos modi quibusdam rerum atque. Eius illo quasi sed eveniet enim, sequi maiores quas excepturi minus nobis commodi quo impedit perferendis voluptates, officiis officia odio perspiciatis quam debitis? Voluptates recusandae, blanditiis eligendi quibusdam natus velit omnis magni vel dolores repellendus ut suscipit nihil, praesentium nobis. Veritatis.</div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <!-- Main Galery End -->

    <!-- Footer Start -->
    <footer>
        <div class="container">
            <p class="footer-text">Made by Nizar menggunakan CSS biasa</p>
            <p class="footer-text">Copyright &copy; 2023</p>
        </div>
    </footer>
    <!-- Footer End -->
</body>
</html>