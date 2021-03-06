
<?php

/*
 Template Name: Store-page__Template
*/ 

get_header(); 

?>
<div class="page__bg" style="background-image: linear-gradient(rgba(156, 19, 20, .85), rgba(156, 19, 20, .85)), url('<?php echo bloginfo('template_directory') ?>/images/freshman-2016.jpg')">

<div class='store page__content'>

    <div class="page__modal-bg hidden"  scroll="no" style="overflow: hidden">        
        <button><i class="page__modal-exit far fa-times-circle fa-3x"></i></i></button>

        <div class="page__modal">
            

        <img id='white-hat-modal' class='store__item-image--modal hidden' src="<?php echo get_template_directory_uri();?>/images/white-hat.jpg" alt="One Voice Basketball white hat"/>
        <img id='black-hat-modal' class='store__item-image--modal hidden' src="<?php echo get_template_directory_uri(); ?>/images/black-hat.png" alt="One Voice Basketball black hat"/>
        <img id='tshirts-modal' class='store__item-image--modal hidden' src="<?php echo get_template_directory_uri(); ?>/images/ovb-tshirts.jpg" alt="One Voice Basketball t-shirts"/>
        <img id='magnets-modal' class='store__item-image--modal hidden' src="<?php echo get_template_directory_uri(); ?>/images/magnets.jpg" alt="One Voice Basketball white hat"/>

    </div>
    </div>
    <h2 class="page__h2">OVB Store</h2>

    <div class="store__item-choice-parent">

        <div class="store__item">
        <h3 class="page__h3">Hats</h3>
        <div class="store__item-content">

            <img data-img-name='white-hat-modal' class='store__item-image' id='white-hat' src="<?php echo get_template_directory_uri(); ?>/images/white-hat.jpg" alt="One Voice Basketball white hat">
            <img data-img-name='black-hat-modal' class='store__item-image hidden' id='black-hat' src="<?php echo get_template_directory_uri(); ?>/images/black-hat.png" alt="One Voice Basketball black hat">
            
             <div class="store__item-container">
                <div class="store__item-cost">$17.00 each</div>
                <label for="hat-color">Color: </label>
                <select id='hat-color' name="hat-color">
                    <option value="White">White</option>
                    <option value="Black">Black</option>
                </select>
            </div>
        </div>

        <button id='add-hat' class="store__add-item-btn"><i class="fas fa-plus-circle fa-2x"></i></button>
    </div>



    <div class="store__item">
    <h3 class="page__h3">Shirts</h3>


    <div class="store__item-content">
        <img data-img-name='tshirts-modal' class='store__item-image' id='tshirts' src="<?php echo get_template_directory_uri(); ?>/images/ovb-tshirts.jpg" alt="One Voice Basketball t-shirts">
        
         <div class="store__item-container">
            <div class="store__item-cost">$10.00 each</div>
            <label for="tshirt color">Color: </label>
            <select id='tshirt-color' name="tshirt color">
                <option value="White">White</option>
                <option value="Grey">Grey</option>
                <option value="Black">Black</option>
            </select>
        <div class="store__mobile-input-parent">
            <label for="size">Sizes: </label>
            <select id='tshirt-size' name="t-shirt size">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="Extra Large">Extra Large</option>
            </select>
        </div>
        </div>

        </div>

        <button id='add-tshirt' class="store__add-item-btn"><i class="fas fa-plus-circle fa-2x"></i></button>
    </div>

        <div class="store__item">
        <h3 class="page__h3">Magnets</h3>
        <div class="store__item-content">

            <img data-img-name='magnets-modal' class='store__item-image' id='magnet-picture' src="<?php echo get_template_directory_uri(); ?>/images/magnets.jpg" alt="One Voice Basketball white hat">
            
             <div class="store__item-container">
                <div class="store__item-cost">$3.00 each</div>
                <div class="store__item-description">5 1/2 inch diameter</div>
            </div>
</div>

            <button id='add-magnet' class="store__add-item-btn"><i class="fas fa-plus-circle fa-2x"></i></button>
        </div>
    
    </div>

    <div class="store__order-summary">
        <h3 class="page__h3 store__order-header">Order Summary</h3>
        <ul class="store__ordered-items">
            No items in your order yet.
        </ul>

        <div class="hidden store__total-cost"></div>

        <form class="store__order-form">

            <input required type="text" class="store__name-input" placeholder='Full name'>
            <input required type="email" class="store__email-input" placeholder='Email'>
            <textarea row='3' col='20' type="textarea" class="store__comment-input" placeholder='Order comments'></textarea>
            <div class="store__explanation">
            Submiting this form will send your order details to Bob Peterman who will bring your order to the next practice or meeting. 
            </div>
            <button data-post-url='<?php echo admin_url('admin-ajax.php'); ?>' type='submit' class="store__submit-btn">Submit Order</button>
          
        </form>

    </div>
</div>
<?php get_footer(); ?>
</div>

