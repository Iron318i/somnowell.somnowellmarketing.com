<?php
/**
 * The template for displaying search forms
 *
 * @package somnowell
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search">
    <div class="input-group">
        <input class="field form-control" id="s" name="s" type="text" value="<?php the_search_query(); ?>">
        <button class="btn" id="searchsubmit" name="submit" type="submit">
            <svg class="icon">
                <use xlink:href="#search"></use>
            </svg>
        </button>
    </div>
</form>
