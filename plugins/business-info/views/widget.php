<!-- This file is used to markup the public-facing widget. -->


    <?php if (strlen(trim($phone))>0): ?>
<div>
        <a href="tel:<?php echo $phone; ?>">
       <i class="fas fa-phone"></i> </a>

</div>
    <?php endif; ?>


    <?php if (strlen(trim($email))>0): ?>
<div>
        <a href="mailto:<?php echo $email; ?>">
        <i class="fa fa-envelope"></i> 
        </a>
</div>
    <?php endif; ?>

    <?php if (strlen(trim($facebook))>0): ?>
<div>
        <a href="https://www.facebook.com/in/<?php echo $facebook; ?>/">
        <i class="fab fa-facebook-f"></i>
        </a>
</div>
    <?php endif; ?>

    <?php if (strlen(trim($instagram))>0): ?>
<div>
        <a href="https://instagram.com/<?php echo $instagram; ?>/">
        <i class="fab fa-instagram"></i>
        </a>
</div>
    <?php endif; ?>

    <?php if (strlen(trim($location))>0): ?>
<div>

        <a href="<?php echo $location; ?>/">
            <span class="business-info"><i class="fab fa-whatsapp"></i></i></span>
        </a>
</div>
    <?php endif; ?>


    <?php if (strlen(trim($youtube))>0): ?>
<div>

        <a href="https://www.google.com/maps/place/<?php echo $youtube; ?>/">
            <span class="business-info"><i class="fab fa-youtube"></i></i></span>
        </a>
</div>
    <?php endif; ?>


    <?php if (strlen(trim($linkedin))>0): ?>
<div>

        <a href="https://www.linkedin.com/<?php echo $linkedin; ?> /">
        <i class="fab fa-whatsapp"></i><
        </a>

</div>
    <?php endif; ?>




