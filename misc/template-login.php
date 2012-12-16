<?php
/*
Template Name: Login Page
*/
?>
<?php get_header(); ?>
       
	<div id="featured">
        <div id="page-title" class="content">
            <h2 class="page"><?php the_title(); ?></h2>
        </div>
    </div>
           
    <!-- Content Starts -->
	<div id="main-content" class="page">           
    <div class="content">
        <div id="main" class="full">
        
        <?php if (have_posts()) : $count = 0; ?>
        <?php while (have_posts()) : the_post(); $count++; ?>
                                                                    
            <!-- Post Starts -->
            <div class="post wrap">
                
				<?php if (!(current_user_can('level_0'))){ ?>
				<h2>Login</h2>
				<form action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
				<input type="text" name="log" id="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" size="20" />
				<input type="password" name="pwd" id="pwd" size="20" />
				<input type="submit" name="submit" value="Send" class="button" />
					<p>
					   <label for="rememberme"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> Remember me</label>
					   <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
					</p>
				</form>
				<a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword">Recover password</a>
				<?php } else { ?>
				<h2>Logout</h2>
				<a href="<?php echo wp_logout_url(urlencode($_SERVER['REQUEST_URI'])); ?>">logout</a><br />
				<a href="http://XXX/wp-admin/">admin</a>
				<?php }?>

				
                <?php the_content(); ?>
                
                <div id="comments">
                    <?php //comments_template(); ?>
                </div>

            </div>
            <!-- Post Ends -->
                                                
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.',woothemes); ?></p>
        <?php endif; ?>  
    
		</div>
    </div>
    </div><!-- Content Ends -->
		
<?php get_footer(); ?>