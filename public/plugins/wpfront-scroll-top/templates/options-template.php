<?php
/*
  WPFront Scroll Top Plugin
  Copyright (C) 2013, WPFront.com
  Website: wpfront.com
  Contact: syam@wpfront.com

  WPFront Scroll Top Plugin is distributed under the GNU General Public License, Version 3,
  June 2007. Copyright (C) 2007 Free Software Foundation, Inc., 51 Franklin
  St, Fifth Floor, Boston, MA 02110, USA

  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
  ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
  WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
  DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
  ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
  (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
  LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
  ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
  (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
  SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

namespace WPFront\Scroll_Top;

/**
 * Template for WPFront Scroll Top Options
 *
 * @author Syam Mohan <syam@wpfront.com>
 * @copyright 2013 WPFront.com
 */
?>

<?php @$this->options_page_header(__('WPFront Scroll Top Settings', 'wpfront-scroll-top'), WPFront_Scroll_Top::OPTIONS_GROUP_NAME); ?>

<h3><?php echo __('Display', 'wpfront-scroll-top'); ?></h3>
<table class="form-table">
    <tr>
        <th scope="row">
            <?php echo $this->options->enabled_label(); ?>
        </th>
        <td>
            <input type="checkbox" name="<?php echo $this->options->enabled_name(); ?>" <?php echo $this->options->enabled() ? 'checked' : ''; ?> />
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->javascript_async_label(); ?>
        </th>
        <td>
            <input type="checkbox" name="<?php echo $this->options->javascript_async_name(); ?>" <?php echo $this->options->javascript_async() ? 'checked' : ''; ?> />
            <span class="description"><?php echo __('[Increases site performance. Keep it enabled, if there are no conflicts.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->scroll_offset_label(); ?>
        </th>
        <td>
            <input class="pixels" name="<?php echo $this->options->scroll_offset_name(); ?>" value="<?php echo $this->options->scroll_offset(); ?>" />px 
            <span class="description"><?php echo __('[Number of pixels to be scrolled before the button appears.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo __('Button Size', 'wpfront-scroll-top'); ?>
        </th>
        <td>
            <input class="pixels" name="<?php echo $this->options->button_width_name(); ?>" value="<?php echo $this->options->button_width(); ?>" />px 
            X
            <input class="pixels" name="<?php echo $this->options->button_height_name(); ?>" value="<?php echo $this->options->button_height(); ?>" />px 
            <span class="description"><?php echo __('[Set 0px to auto fit.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->button_opacity_label(); ?>
        </th>
        <td>
            <input class="seconds" name="<?php echo $this->options->button_opacity_name(); ?>" value="<?php echo $this->options->button_opacity(); ?>" />%
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->button_fade_duration_label(); ?>
        </th>
        <td>
            <input class="seconds" name="<?php echo $this->options->button_fade_duration_name(); ?>" value="<?php echo $this->options->button_fade_duration(); ?>" />ms 
            <span class="description"><?php echo __('[Button fade duration in milliseconds.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->scroll_duration_label(); ?>
        </th>
        <td>
            <input class="seconds" name="<?php echo $this->options->scroll_duration_name(); ?>" value="<?php echo $this->options->scroll_duration(); ?>" />ms 
            <span class="description"><?php echo __('[Window scroll duration in milliseconds.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->auto_hide_label(); ?>
        </th>
        <td>
            <input type="checkbox" name="<?php echo $this->options->auto_hide_name(); ?>" <?php echo $this->options->auto_hide() ? "checked" : ""; ?> />
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->auto_hide_after_label(); ?>
        </th>
        <td>
            <input class="seconds" name="<?php echo $this->options->auto_hide_after_name(); ?>" value="<?php echo $this->options->auto_hide_after(); ?>" />sec 
            <span class="description"><?php echo __('[Button will be auto hidden after this duration in seconds, if enabled.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->hide_small_device_label(); ?>
        </th>
        <td>
            <input type="checkbox" name="<?php echo $this->options->hide_small_device_name(); ?>" <?php echo $this->options->hide_small_device() ? "checked" : ""; ?> />
            <span class="description"><?php echo __('[Button will be hidden on small devices when the width matches.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->small_device_width_label(); ?>
        </th>
        <td>
            <input class="pixels" name="<?php echo $this->options->small_device_width_name(); ?>" value="<?php echo $this->options->small_device_width(); ?>" />px 
            <span class="description"><?php echo __('[Button will be hidden on devices with lesser or equal width.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->hide_small_window_label(); ?>
        </th>
        <td>
            <input type="checkbox" name="<?php echo $this->options->hide_small_window_name(); ?>" <?php echo $this->options->hide_small_window() ? "checked" : ""; ?> />
            <span class="description"><?php echo __('[Button will be hidden on broswer window when the width matches.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->small_window_width_label(); ?>
        </th>
        <td>
            <input class="pixels" name="<?php echo $this->options->small_window_width_name(); ?>" value="<?php echo $this->options->small_window_width(); ?>" />px 
            <span class="description"><?php echo __('[Button will be hidden on browser window with lesser or equal width.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->hide_wpadmin_label(); ?>
        </th>
        <td>
            <input type="checkbox" name="<?php echo $this->options->hide_wpadmin_name(); ?>" <?php echo $this->options->hide_wpadmin() ? "checked" : ""; ?> />
            <span class="description"><?php echo __('[Button will be hidden on \'wp-admin\'.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->hide_iframe_label(); ?>
        </th>
        <td>
            <input type="checkbox" name="<?php echo $this->options->hide_iframe_name(); ?>" <?php echo $this->options->hide_iframe() ? "checked" : ""; ?> />
            <span class="description"><?php echo __('[Button will be hidden on iframes, usually inside popups.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->button_style_label(); ?>
        </th>
        <td>
            <div>
                <label><input type="radio" class="button-style" name="<?php echo $this->options->button_style_name(); ?>" value="image" <?php echo $this->options->button_style() == 'image' ? 'checked' : ''; ?> /> <?php echo __('Image', 'wpfront-scroll-top'); ?></label>
                <br />
                <label><input type="radio" class="button-style" name="<?php echo $this->options->button_style_name(); ?>" value="text" <?php echo $this->options->button_style() == 'text' ? 'checked' : ''; ?> /> <?php echo __('Text', 'wpfront-scroll-top'); ?></label>
                <br />
                <label><input type="radio" class="button-style" name="<?php echo $this->options->button_style_name(); ?>" value="font-awesome" <?php echo $this->options->button_style() == 'font-awesome' ? 'checked' : ''; ?> /> <?php echo __('Font Awesome', 'wpfront-scroll-top'); ?></label>
            </div>
        </td>
    </tr>
</table>

<h3><?php echo __('Location', 'wpfront-scroll-top'); ?></h3>
<table class="form-table">
    <tr>
        <th scope="row">
            <?php echo $this->options->location_label(); ?>
        </th>
        <td>
            <select name="<?php echo $this->options->location_name(); ?>">
                <option value="1" <?php echo $this->options->location() == 1 ? 'selected' : ''; ?> ><?php echo __('Bottom Right', 'wpfront-scroll-top'); ?></option>
                <option value="2" <?php echo $this->options->location() == 2 ? 'selected' : ''; ?> ><?php echo __('Bottom Left', 'wpfront-scroll-top'); ?></option>
                <option value="3" <?php echo $this->options->location() == 3 ? 'selected' : ''; ?> ><?php echo __('Top Right', 'wpfront-scroll-top'); ?></option>
                <option value="4" <?php echo $this->options->location() == 4 ? 'selected' : ''; ?> ><?php echo __('Top Left', 'wpfront-scroll-top'); ?></option>
            </select> 
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->marginX_label(); ?>
        </th>
        <td>
            <input class="pixels" name="<?php echo $this->options->marginX_name(); ?>" value="<?php echo $this->options->marginX(); ?>" />px 
            <span class="description"><?php echo __('[Negative value allowed.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->marginY_label(); ?>
        </th>
        <td>
            <input class="pixels" name="<?php echo $this->options->marginY_name(); ?>" value="<?php echo $this->options->marginY(); ?>" />px 
            <span class="description"><?php echo __('[Negative value allowed.]', 'wpfront-scroll-top'); ?></span>
        </td>
    </tr>
</table>

<h3><?php echo __('Filter', 'wpfront-scroll-top'); ?></h3>
<table class="form-table">
    <tr>
        <th scope="row">
            <?php echo $this->options->display_pages_label(); ?>
        </th>
        <td>
            <label>
                <input type="radio" name="<?php echo $this->options->display_pages_name(); ?>" value="1" <?php echo $this->options->display_pages() == 1 ? 'checked' : ''; ?> />
                <span><?php echo __('All pages.', 'wpfront-scroll-top'); ?></span>
            </label>
            <br />
            <label>
                <input type="radio" name="<?php echo $this->options->display_pages_name(); ?>" value="2" <?php echo $this->options->display_pages() == 2 ? 'checked' : ''; ?> />
                <span><?php echo __('Include in following pages', 'wpfront-scroll-top'); ?></span>&#160;<span class="description"><?php echo __('[Use the textbox below to specify the post IDs as a comma separated list.]', 'wpfront-scroll-top'); ?></span>
            </label>
            <br />
            <input class="post-id-list" name="<?php echo $this->options->include_pages_name(); ?>" value="<?php echo $this->options->include_pages(); ?>" />
            <div class="pages-selection">
                <?php
                $objects = $this->get_filter_objects();
                foreach ($objects as $key => $value) {
                    ?>
                    <div class="page-div">
                        <label>
                            <input type="checkbox" value="<?php echo $key; ?>" <?php echo $this->filter_pages_contains($this->options->include_pages(), $key) === FALSE ? '' : 'checked'; ?> />
                            <?php echo $value; ?>
                        </label>
                    </div>
                    <?php
                }
                ?>
            </div>
            <label>
                <input type="radio" name="<?php echo $this->options->display_pages_name(); ?>" value="3" <?php echo $this->options->display_pages() == 3 ? 'checked' : ''; ?> />
                <span><?php echo __('Exclude in following pages', 'wpfront-scroll-top'); ?></span>&#160;<span class="description"><?php echo __('[Use the textbox below to specify the post IDs as a comma separated list.]', 'wpfront-scroll-top'); ?></span>
            </label>
            <br />
            <input class="post-id-list" name="<?php echo $this->options->exclude_pages_name(); ?>" value="<?php echo $this->options->exclude_pages(); ?>" />
            <div class="pages-selection">
                <?php
                $objects = $this->get_filter_objects();
                foreach ($objects as $key => $value) {
                    ?>
                    <div class="page-div">
                        <label>
                            <input type="checkbox" value="<?php echo $key; ?>" <?php echo $this->filter_pages_contains($this->options->exclude_pages(), $key) === FALSE ? '' : 'checked'; ?> />
                            <?php echo $value; ?>
                        </label>
                    </div>
                    <?php
                }
                ?>
            </div>
        </td>
    </tr>
</table>

<h3 class="button-options text"><?php echo __('Text Button', 'wpfront-scroll-top'); ?></h3>
<table class="form-table button-options text">
    <tr>
        <th scope="row">
            <?php echo $this->options->text_button_text_label(); ?>
        </th>
        <td>
            <input name="<?php echo $this->options->text_button_text_name(); ?>" value="<?php echo $this->options->text_button_text(); ?>" />
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->text_button_text_color_label(); ?>
        </th>
        <td>
            <div class="color-selector-div">
                <div class="color-selector" color="<?php echo $this->options->text_button_text_color(); ?>"></div>&#160;<span><?php echo $this->options->text_button_text_color(); ?></span>
                <input type="hidden" name="<?php echo $this->options->text_button_text_color_name(); ?>" value="<?php echo $this->options->text_button_text_color(); ?>" />
            </div>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->text_button_background_color_label(); ?>
        </th>
        <td>
            <div class="color-selector-div">
                <div class="color-selector" color="<?php echo $this->options->text_button_background_color(); ?>"></div>&#160;<span><?php echo $this->options->text_button_background_color(); ?></span>
                <input type="hidden" name="<?php echo $this->options->text_button_background_color_name(); ?>" value="<?php echo $this->options->text_button_background_color(); ?>" />
            </div>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->text_button_hover_color_label(); ?>
        </th>
        <td>
            <div class="color-selector-div">
                <div class="color-selector" color="<?php echo $this->options->text_button_hover_color(); ?>"></div>&#160;<span><?php echo $this->options->text_button_hover_color(); ?></span>
                <input type="hidden" name="<?php echo $this->options->text_button_hover_color_name(); ?>" value="<?php echo $this->options->text_button_hover_color(); ?>" />
            </div>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->text_button_css_label(); ?>
        </th>
        <td>
            <textarea name="<?php echo $this->options->text_button_css_name(); ?>" rows="5" cols="100"><?php echo $this->options->text_button_css(); ?></textarea>
            <br />
            <span class="description"><?php echo '[' . __('ex:', 'wpfront-scroll-top') . ' font-size: 1.5em; padding: 10px;]'; ?></span>
        </td>
    </tr>
</table>

<h3 class="button-options font-awesome"><?php echo __('Font Awesome Button', 'wpfront-scroll-top'); ?></h3>
<table class="form-table button-options font-awesome">
    <tr>
        <th scope="row">
            <?php echo $this->options->fa_button_class_label(); ?>
        </th>
        <td>
            <input class="regular-text" name="<?php echo $this->options->fa_button_class_name(); ?>" value="<?php echo $this->options->fa_button_class(); ?>" />
            <span class="description"><?php echo '[' . __('ex:', 'wpfront-scroll-top') . ' fa fa-arrow-circle-up fa-5x]'; ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->fa_button_URL_label(); ?>
        </th>
        <td>
            <input class="url" name="<?php echo $this->options->fa_button_URL_name(); ?>" value="<?php echo $this->options->fa_button_URL(); ?>" />
            <br />
            <span class="description"><?php echo '[Leave blank to use BootstrapCDN URL by MaxCDN. Otherwise specify the URL you want to use.]'; ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->fa_button_exclude_URL_label(); ?>
        </th>
        <td>
            <input type="checkbox" name="<?php echo $this->options->fa_button_exclude_URL_name(); ?>" <?php echo $this->options->fa_button_exclude_URL() ? "checked" : ""; ?> />
            <span class="description"><?php echo '[Enable this setting if your site already has Font Awesome. Usually your theme includes it.]'; ?></span>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->fa_button_text_color_label(); ?>
        </th>
        <td>
            <div class="color-selector-div">
                <div class="color-selector" color="<?php echo $this->options->fa_button_text_color(); ?>"></div>&#160;<span><?php echo $this->options->fa_button_text_color(); ?></span>
                <input type="hidden" name="<?php echo $this->options->fa_button_text_color_name(); ?>" value="<?php echo $this->options->fa_button_text_color(); ?>" />
            </div>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo $this->options->fa_button_css_label(); ?>
        </th>
        <td>
            <textarea name="<?php echo $this->options->fa_button_css_name(); ?>" rows="5" cols="100"><?php echo $this->options->fa_button_css(); ?></textarea>
            <br />
            <span class="description"><?php echo '[' . __('ex:', 'wpfront-scroll-top') . ' #wpfront-scroll-top-container i:hover{ color: #000000; }]'; ?></span>
        </td>
    </tr>
</table>

<h3 class="button-options image"><?php echo __('Image Button', 'wpfront-scroll-top'); ?></h3>
<div class="button-options image">
    <div class="icons-container">
        <?php
        $files = scandir($this->iconsDIR);
        foreach ($files as $file) {
            if ($file == '.' || $file == '..')
                continue;
            echo '<div ' . ($this->options->image() == $file ? 'class="selected"' : '') . '>';
            echo '<input id="' . $file . '" name="' . $this->options->image_name() . '" type="radio" value="' . $file . '" ' . ($this->options->image() == $file ? 'checked' : '') . ' />';
            echo '<label for="' . $file . '"><img src="' . $this->iconsURL . $file . '"/></label>';
            echo '</div>';
        }
        ?>
    </div>
    <div>
        <input id="custom" name="<?php echo $this->options->image_name(); ?>" type="radio" value="custom" <?php echo ($this->options->image() == 'custom' ? 'checked' : ''); ?> />
        <label for="custom"><?php echo __('Custom URL', 'wpfront-scroll-top'); ?>
            <input class="url" name="<?php echo $this->options->custom_url_name(); ?>" value="<?php echo $this->options->custom_url(); ?>"/>
        </label>
    </div>
    <table class="form-table">
        <tr>
            <th scope="row">
                <?php echo $this->options->image_alt_label(); ?>
            </th>
            <td>
                <input class="altText" name="<?php echo $this->options->image_alt_name(); ?>" value="<?php echo $this->options->image_alt(); ?>" />
            </td>
        </tr>
    </table>
</div>

<?php @$this->options_page_footer('scroll-top-plugin-settings/', 'scroll-top-plugin-faq/'); ?>

<script type="text/javascript">
    (function($) {
        function setColorPicker(div) {
            div.ColorPicker({
                color: div.attr('color'),
                onShow: function(colpkr) {
                    $(colpkr).fadeIn(500);
                    return false;
                }, onHide: function(colpkr) {
                    $(colpkr).fadeOut(500);
                    return false;
                },
                onChange: function(hsb, hex, rgb) {
                    div.css('backgroundColor', '#' + hex);
                    div.next().text('#' + hex).next().val('#' + hex);
                }
            }).css('backgroundColor', div.attr('color'));
        }

        $('#wpfront-scroll-top-options').find(".color-selector").each(function(i, e) {
            setColorPicker($(e));
        });

        $('#wpfront-scroll-top-options .pages-selection input[type="checkbox"]').change(function() {
            var $this = $(this);
            var $input = $this.parent().parent().parent().prev();
            var $text = $input.val();
            
            if($this.prop('checked')) {
                $text += ',' + $this.val();
            } else {
                $text = (',' + $text + ',').replace(',' + $this.val() + ',', ',');
            }
            
            $text = $text.replace(/(^[,\s]+)|([,\s]+$)/g, '');
            $input.val($text);
        });
        
        $('#wpfront-scroll-top-options input.button-style').change(function() {
            $('#wpfront-scroll-top-options .button-options').hide().filter('.' + $(this).val()).show();
        });
        
        $('#wpfront-scroll-top-options .button-options').hide().filter('.<?php echo $this->options->button_style(); ?>').show();
    })(jQuery);
</script>

