<div class="photo-gallery">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Image Gallery</h2>
            <p class="text-center">Please take a look at some of our past projects. </p>
        </div>
        <div class="row photos">

            <?php foreach($images as $image): ?>
                <div class="col-sm-6 col-md-4 col-lg-3 item">
                    <a href="<?php echo $image['url']; ?>" data-lightbox="photos">
                        <img class="img-fluid" src="<?php echo $image['url']; ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


