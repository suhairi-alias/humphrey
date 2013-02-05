# Humphrey Child Theme

## Installation
1. Upload the Humphrey child theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)

2. Go to your WordPress dashboard and select Appearance.

3. Activate the Humphrey theme.

4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

## Usage

### Widgets

The homepage features 4 custom widget areas:

1. Home Slider. For use with the Genesis Responsive Slider plugin.

2. Home Welcome. Use a text widget here to display a welcome message etc.

3. Home Left. Use the Genesis Featured Posts widget here.

4. Home Right. You can use a variety of widgets here such as a text widget, Genesis Latest Tweets widget, Genesis eNews Extended widget etc.

Humphrey contains 2 additional custom widget areas.

1. After Post Block. This widget area appears after a post on all single post pages. You can use a text widget or even the Genesis eNews Extended widget here.

2. 404 Error Page. The 404 error page is completely widgetized. You can add all sorts of widgets here as seen on the demo site.

## Configuring the widgets as seen on the demo site

### Genesis Responsive Slider

1. Maximum Slider Width = 1100.
2. Maximum Slider Height = 350.
3. Check Display Next / Previous Arrows in Slider?
4. Check Display Pagination in Slider?
5. Check Display Post/Page Title in Slider?
6. Check Display Content in Slider?
7. Select Display post content from drop menu.
8. Enter 150 into Limit content to text field.
9. Slider Excerpt Width = 50
10. Excerpt Location vertical = Bottom
11. Excerpt Location horizontal = Left

### Genesis Featured Posts

1. Check Show Featured Image
2. Select Image Size homepage 150x150 from drop menu
3. Select Left for Image Alignment
4. Check Show Post Title. Do not check Show Post Info
5. Select Show Content Limit for Content Type from drop menu
6. Enter 300 into Limit content to text field

The rest of the widgets are self-evident I think.

## Portfolio Page
The Portfolio Page makes use of a Custom Post Type called Portfolio. To add items to your Portfolio Page:

1. From the menu click on Portfolio > Add New
2. Add a short title
3. Upload an image to the post. You must also set this image as Feature Image
4. Add a short description

On the demo site I uploaded large images with the Max Width being set as 1024 as per the settings at Settings > Media. These are displayed on the Portfolio single post pages.
The theme creates the 340 x 230 image size which is displayed on the Portfolio category page. Be sure to re-save your permalinks or the Custom Post Type may not display.

## Image Sizes
In addition to the image sizes created by WordPress as per your settings at Settings > Media, Humphrey comes with the following image sizes as defined in the `functions.php` file:

1. homepage (120 x 120)
2. small (80 x 80)
3. portfolio (340 x 230)

You will probably have to regenerate your images for them to display properly. Refer to the section below called Recommended Plugins for details.

## Custom Content Boxes
The custom content boxes make use of DIV classes. For example,

`<div class="content-box-blue">some random text</div>`

There are 6 styles to choose from. Refer to the style sheet for details.

## Gradient Buttons
Each button has a unique class.

`<a class="button-green" href="#">Link Text</a>`

The above will render the Green button. There are 11 styles to choose from. Refer to the style sheet for details.

## Post Formats
Humphrey comes with support for the following Post Formats:

1. Aside
2. Audio
3. Chat
4. Gallery
5. Image
6. Link
7. Quote
8. Status
9. Video

To use them simply select the appropriate Format from the Post Format metabox in the Add New Post screen.

Further reading on Post Formats at http://codex.wordpress.org/Post_Formats

## Recommended Plugins
1. [Genesis Responsive Slider](http://wordpress.org/extend/plugins/genesis-responsive-slider/)
2. [Genesis eNews Extended](http://wordpress.org/extend/plugins/genesis-enews-extended/)
3. [Regenerate Thumbnails](http://wordpress.org/extend/plugins/regenerate-thumbnails/)

## Credit
1. Content Boxes by Brian Gardner - http://www.briangardner.com/genesis-content-boxes/
2. Custom Post Type Portfolio Page by Brian Gardner - http://www.briangardner.com/portfolio-page/
3. Gradient Buttons by Brian Gardner - http://www.briangardner.com/social-media-buttons/
4. Widgetized 404 Page by David Decker - http://genesisthemes.de/en/2011-08/tutorial-widgetized-404-error-page-in-genesis/
5. Icons for eNews input fields by iconmonstr - http://iconmonstr.com/
6. Post Format icons by StudioPress - http://www.studiopress.com/graphics/post-format-icons

## Further
1. [Theme Release Page](http://wpcanada.ca/our-themes/humphrey/)
2. [Theme Demo](http://demo.wpcanada.ca/humphrey/)
3. Download from [Google](http://code.google.com/p/humphrey-theme/)
4. Download from [GitHub](https://github.com/lenkutchma/humphrey)

## Bug Reports
1. [Google](http://code.google.com/p/humphrey-theme/issues/list)
2. [GitHub](https://github.com/lenkutchma/humphrey/issues)

Enjoy!