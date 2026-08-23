<?php
namespace Drupal\opportunity\Controller;
use Drupal\Core\Controller\ControllerBase;

class OpportunityController extends ControllerBase {
  public function view() {
    return [
      '#markup' => '<div style="padding:30px; background:#eafaf1; border:2px solid #2ecc71; border-radius:8px; font-family:Arial, sans-serif;">
        <h1 style="color:#27ae60;">Site-A Specific Code</h1>
        <p style="font-size:16px;">Served from: <code>web/sites/site-a/modules/custom/opportunity</code></p>
        <p style="font-size:16px;">GitHub Source: <strong>https://github.com/Shubham/drupal-site-a</strong></p>
        <p style="color:green; font-weight:bold;">Status: Successfully loaded for Site-A only!</p>
      </div>',
    ];
  }
}
