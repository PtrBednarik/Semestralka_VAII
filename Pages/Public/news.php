<?php include '../../Partials/header.php'; ?>
<?php include '../Actions/logic.php'; ?>

<div class="title-container">
    <h3>Aktuality</h3>
</div>

<div class="container mt-5">

    <!-- Display any info -->
    <?php if(isset($_REQUEST['info'])){ ?>
        <?php if($_REQUEST['info'] == "added"){?>
            <div class="alert alert-success" role="alert">
                Príspevok bol úspešne pridaný
            </div>
        <?php } else if ($_REQUEST['info'] == "updated") {?>
            <div class="alert alert-success" role="alert">
                Príspevok bol úspešne upravený
            </div>
        <?php } else if ($_REQUEST['info'] == "deleted") {?>
            <div class="alert alert-danger" role="alert">
                Príspevok bol úspešne zmazaný
            </div>
        <?php } ?>
    <?php } ?>
    <?php session_start();
    if (isset($_SESSION['login_admin'])) {
    ?>
    <!-- Create a new Post button -->
    <div class="text-center">
        <a href="../Actions/create.php" class="btn create-button btn-primary">+ Nový príspevok</a>
    </div>

    <?php
    }
    session_write_close();
    ?>

    <!--------Blog section---------------->
    <section id="blog">
        <!--blog-container--->
        <div class="blog-container">
<!--            <!--box-1------->
<!--            <div class="blog-box">-->
<!--                <!--img------->
<!--                <div class="blog-img">-->
<!--                    <img src="Assets/CSS/Images/tulen1.jpg" alt="Blog">-->
<!--                </div>-->
<!--                <!--text------->
<!--                <div class="blog-text">-->
<!--                    <span>18 July 2022 / Web design</span>-->
<!--                    <a href="#" class="blog-title"> Tulene sa mnozia</a>-->
<!--                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                    <a href="#">Read more</a>-->
<!--                </div>-->
<!--            </div>-->

            <?php foreach($query as $q){ ?>
            <!--box-1------->
            <div class="blog-box">
                <!--text------->
                <div class="blog-text">
                    <a class="blog-title" href="../Actions/view.php?tag=news&id=<?php echo $q['id']; ?>"><?php echo $q['title'];?></a>
                    <p><?php echo substr($q['content'], 0, 200);?>...</p>
                    <a href="../Actions/view.php?tag=news&id=<?php echo $q['id']; ?>">Viac</a>
                </div>
            </div>
            <?php }?>
        </div>
    </section>
</div>


<?php include '../../Partials/footer.php'; ?>




