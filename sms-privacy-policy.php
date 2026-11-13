<?php
/**
 * Privacy Policy (public URL for carrier / 10DLC review; body lives in includes/partials/sms-privacy-body.php).
 */
require __DIR__ . '/includes/config.php';

$page_title       = 'SMS Privacy Policy | Right Way Medical Billing';
$meta_description = 'How Right Way Medical Billing LLC collects, uses and protects information, including SMS consent, opt-out and mobile information protections.';
$canonical        = 'sms-privacy-policy.php';
$body_class       = 'page-legal';
$breadcrumbs = [
    ['label' => 'Home',    'url' => ''],
    ['label' => 'SMS Privacy Policy', 'url' => 'sms-privacy-policy.php'],
];

include __DIR__ . '/includes/header.php';

rw_partial('page-header', [
    'ph_title'    => 'SMS Privacy Policy',
    'ph_eyebrow'  => 'Legal',
    'ph_lead'     => 'How we collect, use and protect your information, including SMS text messaging.',
    'breadcrumbs' => $breadcrumbs,
]);
?>

<section class="section-pad">
  <div class="container">
    <?php rw_partial('sms-privacy-body'); ?>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php';
