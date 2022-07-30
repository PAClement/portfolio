<?php
$projects = $json->projects;
$modalProjects = $json->projects;
?>
<div class="project--title">
    <h1>
        <svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:baseline;" fill="white" width="35" height="35" viewBox="0 0 24 24">
            <path d="M1.979 8l-.979-6h6.972c1.265 1.583 1.327 2 3.306 2h11.722l-.96 4h-2.04l.469-2h-9.191c-2.326 0-3.166-.612-4.278-2h-3.694l.694 4h-2.021zm22.021 2l-2 12h-20l-2-12h6.278l2.308-3 3.9 3h1.97l-1.429-1.097 1.465-1.903 3.9 3h5.608zm-2.331 2h-19.338l1.385 8h16.568l1.385-8z" />
        </svg>&nbsp;&nbsp;&nbsp;MES PROJETS
    </h1>
</div>
<section class="project_view">
    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <?php foreach ($projects as $projects) : ?>
                    <li class="splide__slide">
                        <article>
                            <h2><?= $projects->name ?></h2>
                            <p><?= $projects->description ?></p>
                            <div class="project_button">
                                <?php if ($projects->url !== "") : ?>
                                    <a target="_BLANK" href="<?= $projects->url ?>">
                                        <button class="btn-grad">
                                            Visiter le projet&nbsp;
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="15" height="15" viewBox="0 0 24 24">
                                                <path d="M21 13v10h-21v-19h12v2h-10v15h17v-8h2zm3-12h-10.988l4.035 4-6.977 7.07 2.828 2.828 6.977-7.07 4.125 4.172v-11z" />
                                            </svg>
                                        </button>
                                    </a>
                                <?php else : ?>
                                    <button id="myBtn_<?= $projects->id ?>" class="btn-grad" style="background-color: #6210B4;">
                                        Voir le projet
                                    </button>
                                <?php endif; ?>
                                <?php if ($projects->gitHub !== "") : ?>
                                    <a target="_BLANK" href="<?= $projects->gitHub ?>">
                                        <button class="btn-grad" style="background-color: gray;">
                                            Projet GitHub&nbsp;
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="15" height="15" viewBox="0 0 24 24">
                                                <path d="M21 13v10h-21v-19h12v2h-10v15h17v-8h2zm3-12h-10.988l4.035 4-6.977 7.07 2.828 2.828 6.977-7.07 4.125 4.172v-11z" />
                                            </svg>
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="splide--img-comp">
                                <?= $projects->img ?>
                            </div>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
<?php foreach ($modalProjects as $projects) : ?>
    <?php if ($projects->url == "") : ?>
        <div id="myModal_<?= $projects->id ?>" class="modal" style="padding-bottom: 1em;">
            <!-- Modal content -->
            <div class="modal-content" style="overflow: auto;">
                <span id="closeModal_<?= $projects->id ?>" class="close">&times;</span>
                <?php foreach ($projects->modalProjectInfos as $info) : ?>
                    <h2 style="color: white; font-weight:400px;">- <?= $info->first ?></h2>
                    <div style="display: flex; justify-content:space-evenly; flex-wrap:wrap;">
                        <?php for ($i = 0; $i < count($info->img); $i++) : ?>
                            <img src="<?= $info->img[$i] ?>" alt="" height="500" style="margin: 1em;">
                        <?php endfor; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <script>
            // Get the modal
            let modal_<?= $projects->id ?> = document.getElementById("myModal_<?= $projects->id ?>");
            let btn_<?= $projects->id ?> = document.getElementById("myBtn_<?= $projects->id ?>");
            let span_<?= $projects->id ?> = document.getElementById("closeModal_<?= $projects->id ?>");


            btn_<?= $projects->id ?>.onclick = function() {
                modal_<?= $projects->id ?>.style.display = "block";
            }


            span_<?= $projects->id ?>.onclick = function() {
                modal_<?= $projects->id ?>.style.display = "none";
            }


            window.addEventListener("click", function(event) {
                if (event.target == modal_<?= $projects->id ?>) {
                    modal_<?= $projects->id ?>.style.display = "none";
                }
            });
        </script>
    <?php endif; ?>

<?php endforeach; ?>