<?php
namespace Drupal\opportunity\Controller;
use Drupal\Core\Controller\ControllerBase;

class OpportunityController extends ControllerBase {
  public function view() {
    return [
      '#markup' => '<div style="padding:30px; background:#eafaf1; border:2px solid #2ecc71; border-radius:8px; font-family:Arial, sans-serif;">
        <h1 style="color:#27ae60;">💼 Site-A Opportunity Tracker (Updated!)</h1>
        <p style="font-size:16px;">Served from: <code>web/sites/site-a/modules/custom/opportunity</code></p>
        <p style="font-size:16px;">New Feature: <strong>Q3 Pipeline Forecast: $1,250,000</strong></p>
        <p style="color:green; font-weight:bold;">Status: Site-A specific custom logic running perfectly!</p>
      </div>',
    ];
  }
}
