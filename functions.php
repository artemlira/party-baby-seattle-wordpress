<?php
/**
 * partybaby functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package partybaby
 */

if (!defined('_S_VERSION')) {
  // Replace the version number of the theme on each release.
  define('_S_VERSION', '1.0.8');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function partybaby_setup()
{
  /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on partybaby, use a find and replace
    * to change 'partybaby' to the name of your theme in all the template files.
    */
  load_theme_textdomain('partybaby', get_template_directory() . '/languages');

  // Add default posts and comments RSS feed links to head.
  add_theme_support('automatic-feed-links');

  /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
  add_theme_support('title-tag');

  /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
  add_theme_support('post-thumbnails');

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus(
    array(
      'menu-main' => esc_html__('Main Menu', 'partybaby'),
      'menu-top' => esc_html__('Top Line Menu', 'partybaby'),
      'menu-footer' => esc_html__('Footer Menu', 'partybaby'),
    )
  );

  /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );

  // Set up the WordPress core custom background feature.
  add_theme_support(
    'custom-background',
    apply_filters(
      'partybaby_custom_background_args',
      array(
        'default-color' => 'ffffff',
        'default-image' => '',
      )
    )
  );

  // Add theme support for selective refresh for widgets.
  add_theme_support('customize-selective-refresh-widgets');

  /**
   * Add support for core custom logo.
   *
   * @link https://codex.wordpress.org/Theme_Logo
   */
  add_theme_support(
    'custom-logo',
    array(
      'height' => 250,
      'width' => 250,
      'flex-width' => true,
      'flex-height' => true,
    )
  );
}

add_action('after_setup_theme', 'partybaby_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function partybaby_content_width()
{
  $GLOBALS['content_width'] = apply_filters('partybaby_content_width', 640);
}

add_action('after_setup_theme', 'partybaby_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function partybaby_widgets_init()
{
  register_sidebar(
    array(
      'name' => esc_html__('Sidebar', 'partybaby'),
      'id' => 'sidebar-1',
      'description' => esc_html__('Add widgets here.', 'partybaby'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    )
  );
}

add_action('widgets_init', 'partybaby_widgets_init');

/**
 * Enqueue scripts and styles.
 */

function partybaby_scripts()
{
  // Fonts
  wp_enqueue_style('sweetsansfont', get_template_directory_uri() . '/fonts/sweetsansfont.css', [], _S_VERSION);

  // Critical CSS: Використовуйте лише для сторінок, де це потрібно
  if (!is_singular('package')) {
    wp_enqueue_style('partybaby-animate', get_template_directory_uri() . '/animate.css', [], _S_VERSION);
  }

  // Slick Carousel & Lightbox
  wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/slick.min.css', [], _S_VERSION);
  wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/css/slick-theme.min.css', [], _S_VERSION);
  wp_enqueue_style('slick-lightbox-css', get_template_directory_uri() . '/css/slick-lightbox.css', [], _S_VERSION);
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@7.3.0/swiper-bundle.min.css', [], _S_VERSION);
  wp_enqueue_style('fancybox-css', get_template_directory_uri() . '/css/jquery.fancybox.min.css', [], _S_VERSION);

  // Main stylesheet
  wp_enqueue_style('partybaby-style', get_stylesheet_uri(), [], _S_VERSION);
  wp_style_add_data('partybaby-style', 'rtl', 'replace');


  wp_enqueue_script('partybaby-wow', get_template_directory_uri() . '/js/wow.js', [], _S_VERSION, true);


  // Slick Carousel
  wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.min.js', ['jquery'], _S_VERSION, true);
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@7.3.0/swiper-bundle.min.js', ['jquery'], _S_VERSION, true);

  // Acuity Scheduling (завантаження лише на сторінках package)
  if (is_singular('package') || is_page(319)) {
    wp_enqueue_script('acuity-js', 'https://embed.acuityscheduling.com/js/embed.js', ['jquery'], _S_VERSION, true);
  }

  // Slick Lightbox
  wp_enqueue_script('slick-lightbox-js', get_template_directory_uri() . '/js/slick-lightbox.min.js', ['jquery'], _S_VERSION, true);

  // Custom Scripts
  wp_enqueue_script('fancybox-js', get_template_directory_uri() . '/js/fancybox.min.js', ['jquery'], _S_VERSION, true);
  wp_enqueue_script('partybaby-scripts', get_template_directory_uri() . '/js/scripts.js', ['jquery', 'fancybox-js'], _S_VERSION, true);


  // // Preload Critical Images
  // if (is_front_page()) {
  //     echo '<link rel="preload" as="image" href="' . get_template_directory_uri() . '/img/image-1-min.webp" />';
  // }
}

add_action('wp_enqueue_scripts', 'partybaby_scripts');

add_action('wp_head', function () {
  $upload_dir = wp_upload_dir(); // Отримуємо інформацію про директорію завантажень
  $image_url = $upload_dir['baseurl'] . '/2024/12/image-1-min.webp'; // Формуємо повний шлях до зображення
  echo '<link rel="preload" as="image" href="' . esc_url($image_url) . '" />';
});

add_action('wp_head', function () {
  // Preload для стилів
  echo '<link rel="preload" as="style" href="' . get_template_directory_uri() . '/css/slick-theme.min.css" crossorigin="anonymous">' . "\n";

  echo '<link rel="preload" as="style" href="' . get_template_directory_uri() . '/fonts/sweetsansfont.css" crossorigin="anonymous">' . "\n";

  echo '<link rel="preload" as="style" href="' . get_template_directory_uri() . '/style.css" crossorigin="anonymous">' . "\n";

  // Preload для скриптів
  echo '<link rel="preload" as="script" href="' . get_template_directory_uri() . '/js/slick.min.js" crossorigin="anonymous">' . "\n";
  echo '<link rel="preload" as="script" href="' . get_template_directory_uri() . '/js/scripts.js" crossorigin="anonymous">' . "\n";
});

add_action('wp_head', function () {
  echo '<link rel="preload" as="font" href="' . get_template_directory_uri() . '/fonts/SweetSansPro-Light.woff2" type="font/woff2" crossorigin="anonymous">' . "\n";
  echo '<link rel="preload" as="font" href="' . get_template_directory_uri() . '/fonts/Montserrat-Regular.woff" type="font/woff" crossorigin="anonymous">' . "\n";
});

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Function get permalink by slug
 */
function get_permalink_by_slug($slug)
{
  $post = get_page_by_path($slug, OBJECT, 'page');
  if ($post) {
    return get_permalink($post->ID);
  } else {
    return 'No post found';
  }
}

function thumbnail_size_ban($size)
{
  unset($size['thumbnail']);
  unset($size['medium']);
  unset($size['medium_large']);
  unset($size['large']);
  unset($size['1536x1536']);
  unset($size['2048x2048']);

  return $size;
}

add_filter('intermediate_image_sizes_advanced', 'thumbnail_size_ban');

// Встановлює максимальну якість JPEG-зображень (100%)
add_filter('jpeg_quality', function ($arg) {
  return 100;
});

// Встановлює максимальну якість для всіх типів зображень
add_filter('wp_editor_set_quality', function ($arg) {
  return 85;
});


function custom_excerpt($length = 150)
{
  $excerpt = get_the_excerpt(); // Отримуємо стандартний текст
  $excerpt = substr($excerpt, 0, $length); // Обрізаємо текст до потрібної кількості символів
  $excerpt = rtrim($excerpt, " \t\n\r\0\x0B,."); // Видаляємо зайві символи в кінці
  $excerpt .= '...'; // Додаємо троеточие в кінці

  return $excerpt;
}


// Вимкнення категорій для типу поста "post"
function remove_post_categories()
{
  unregister_taxonomy_for_object_type('category', 'post'); // Вимкнення категорій для постів типу "post"
}

add_action('init', 'remove_post_categories');


if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title' => 'Theme Options',
    'menu_title' => 'Theme Options',
    'menu_slug' => 'theme-options',
    'capability' => 'edit_posts',
    'redirect' => true
  ));
}

