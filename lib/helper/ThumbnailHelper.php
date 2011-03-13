<?php
/*
 * (c) 2008 Julian Stricker <julian@julianstricker.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @author     Julian Stricker <julian@julianstricker.com>
 * @version    SVN: $Id$
 */



/**
 * Builds Image Tag for Thumbnail Image
 *
 * Example:
 * <code>
 *  <?php echo thumbnail_tag('uploads/pictures/testimage.jpg',100, 80, normal array('style' => 'border: 1px solid #ff0000')) ?>
 * </code>
 *
 * @param string IMG path on server to image
 * @param integer MAXX maximum width of image
 * @param integer MAXY maximum height of image  
 * @param integer MODE resize-mode (normal, crop or stretch)
 * @param array Other attributes for the tag. You can also pass string suitable for _parse_attributes()
 *
 * @return string An HTML img string
 *
 */
function thumbnail_tag($img, $maxx = '128', $maxy = '128', $mode = 'normal', $options = array())
{
  $options = _parse_attributes($options);
  $options['src'] = url_for('sfThumbnailFly/thumbnail').'?img='.$img.'&maxx='.$maxx.'&maxy='.$maxy.'&mode='.$mode;
  return tag('img', $options, true);
}
?>
