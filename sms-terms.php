<?php
/**
 * SMS Terms of Service (public URL for carrier / 10DLC review; body lives in includes/partials/sms-terms-body.php).
 */
require __DIR__ . '/includes/config.php';

$page_title       = 'SMS Terms of Service | Right Way Medical Billing';
$meta_description = 'SMS Terms of Service for Right Way Medical Billing LLC: program description, message frequency, rates, STOP and HELP instructions.';
$canonical        = 'sms-terms.php';
$body_class       = 'page-legal';
$breadcrumbs = [
    ['label' => 'Home',    'url' => ''],
    ['label' => 'SMS Terms of Service', 'url' => 'sms-terms.php'],
];

include __DIR__ . '/includes/header.php';

rw_partial('page-header', [
    'ph_title'    => 'SMS Terms of Service',
    'ph_eyebrow'  => 'Legal',
    'ph_lead'     => 'Program details, message frequency, rates, and how to opt out of text messages.',
    'breadcrumbs' => $breadcrumbs,
]);
?>

<section class="section-pad">
  <div class="container">
    <?php rw_partial('sms-terms-body'); ?>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php';
