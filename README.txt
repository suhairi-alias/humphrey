<h2>Humphrey Child Theme</h2>

<h4>INSTALLATION</h4>
1. Upload the Humphrey child theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well).
2. Go to your WordPress dashboard and select Appearance.
3. Activate the Humphrey theme.
4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.


<h3>== USAGE ==</h3>

<h4>WIDGETS</h4>

The homepage features 4 custom widget areas:

1. Home Slider. For use with the Genesis Responsive Slider plugin.
2. Home Welcome. Use a text widget here to display a welcome message etc.
3. Home Left. Use the Genesis Featured Posts widget here.
4. Home Right. You can use a variety of widgets here such as a text widget, Genesis Latest Tweets widget, Genesis eNews Extended widget etc.

Humphrey also contains 2 additional widget areas:

1. After Post Block. This widget area appears after a post on all single post pages. You can use a text widget or even the Genesis eNews Extended widget here.
2. 404 Error Page. The 404 error page is completely widgetized. You can add all sorts of widgets here as seen on the demo site.

<h4>CONFIGURING THE WIDGETS AS SEEN ON THE DEMO SITE</h4>

<strong>Genesis Responsive Slider</strong>

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

<strong>Genesis Featured Posts</strong>

1. Check Show Featured Image
2. Select Image Size homepage 120x120 from drop menu
3. Select Left for Image Alignment
4. Check Show Post Title. Do not check Show Post Info
5. Select Show Content Limit for Content Type from drop menu
6. Enter 350 into Limit content to text field

The rest of the widgets are self-evident I think.

<h4>PORTFOLIO PAGE</h4>

The Portfolio Page makes use of a Custom Post Type called Portfolio. To add items to your Portfolio Page:

1. From the menu click on Portfolio > Add New
2. Add a short title
3. Upload an image to the post. You must also set this image as Feature Image
4. Add a short description

On the demo site I uploaded large images with the Max Width being set as 1024 as per the settings at Settings > Media. These are displayed on the Portfolio single post pages.
The theme creates the 340 x 230 image size which is displayed on the Portfolio category page. Be sure to re-save your permalinks or the Custom Post Type may not display.

<h4>IMAGE SIZES</h4>
In addition to the image sizes created by WordPress as per your settings at Settings > Media, Humphrey comes with the following image sizes as defined in the <code>functions.php</code> file:

homepage (120 x 120)
small (80 x 80)
portfolio (340 x 230)

You will probably have to regenerate your images for them to display properly. Refer to the section below called Recommended Plugins for details.

<h4>CUSTOM CONTENT BOXES</h4>
The custom content boxes make use of DIV classes. For example,

<code>&lt;div class="content-box-blue"&gt;some random text&lt;/div&gt;</code>

There are 6 styles to choose from. Refer to the style sheet for details.

<h4>GRADIENT BUTTONS</h4>
Each button has a unique class.

<code>&lt;a class="button-green" href="#"&gt;Link Text&lt;/a&gt;</code> 

The above will render the Green button. There are 11 styles to choose from. Refer to the style sheet for details.

<h4>RECOMMENDED PLUGINS</h4>
1. Genesis Responsive Slider - http://wordpress.org/extend/plugins/genesis-responsive-slider
2. Genesis eNews Extended - http://wordpress.org/extend/plugins/genesis-enews-extended/
3. Regenerate Thumbnails - http://wordpress.org/extend/plugins/regenerate-thumbnails/

<h4>CREDIT</h4>
1. Content Boxes by Brian Gardner - http://www.briangardner.com/genesis-content-boxes/
2. Custom Post Type Portfolio Page by Brian Gardner - http://www.briangardner.com/portfolio-page/ 
3. Gradient Buttons by Brian Gardner - http://www.briangardner.com/social-media-buttons/
4. Widgetized 404 Page by David Decker - http://genesisthemes.de/en/2011-08/tutorial-widgetized-404-error-page-in-genesis/
5. Icons for eNews input fields by iconmonstr - http://iconmonstr.com/

<h4>FURTHER</h4>
1. Theme Page - http://wpcanada.ca/our-themes/humphrey/
2. Theme Demo - http://demo.wpcanada.ca/humphrey/
3. Download from Google - http://code.google.com/p/humphrey-theme/
4. Download from GitHub - https://github.com/lenkutchma/humphrey

<h4>BUG REPORTS</h4>
Bug reports can be filed at:

1. Google - http://code.google.com/p/humphrey-theme/issues/list
2. GitHub - https://github.com/lenkutchma/humphrey/issues

Enjoy!
