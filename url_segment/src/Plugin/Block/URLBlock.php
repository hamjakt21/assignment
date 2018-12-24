<?php

/**
 * @file is for custom block where we can write the second segment of URL.
 * @author Hamja <hamja.kutarvadliwala@infobeans.com>
 */

namespace Drupal\url_segment\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Component\Utility\Xss;

/**
 * @Block(
 *   id = "url_segment_block",
 *   admin_label = @Translation("URL Segment Custom Block"),
 * )
 */
class URLBlock extends BlockBase {

  /**
   * {@inheritdoc}
   * @method will check second URL segment and print it.
   * @return array.
   */
  public function build() {

    $content = 'NOTHING-TO-SEE';
    $uri = explode('/', \Drupal::request()->getRequestUri());
    if (isset($uri[2])) { // Print Second URL segment
      $content = Xss::filter($uri[2]);
    }
    return array(
      '#type' => 'markup',
      '#markup' => $content,
    );
  }

}
