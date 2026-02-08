<?php
// expects: $page_title (string), $breadcrumbs (array of [label, link|null])
if(!isset($page_title)) $page_title = "Page";
if(!isset($breadcrumbs)) $breadcrumbs = [["Home","index.php"], [$page_title, null]];

// Banner images mapping
$banner_images = [
  // Note: these are placeholder images (easy to replace with your own local images later).
  // Using source.unsplash.com with Uganda/Africa themed keywords to better match the project.
  'About' => 'img/dan5.jpg',
  'Programs' => 'img/health.jpg',
  'Education Support' => 'img/1 (9).jpg',
  'Community Outreach' => 'img/1 (9).jpg',
  'Orphanage Support' => 'img/1 (9).jpg',
  'Environmental Conservation' => 'img/1 (9).jpg',
  'Health Support' => 'img/1 (9).jpg',
  'Career Development' => 'img/1 (9).jpg',
  'Impact' => 'img/oldmama2.jpg',
  'Gallery' => 'img/dan5.jpg',
  'News' => 'img/dan5.jpg',
  'Contact' => 'img/staff2.jpg',
  'Donate' => 'img/f2.jpg'
];

$banner_image = isset($banner_images[$page_title]) ? $banner_images[$page_title] : '';
?>
<section class="page-banner text-white position-relative" style="background: linear-gradient(rgba(0,76,0,0.7), rgba(0,76,0,0.7)), url('<?php echo $banner_image; ?>') center/cover no-repeat; min-height: 300px;">
  <div class="container position-relative" style="z-index: 2; padding-top: 80px; padding-bottom: 40px;">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
      <h1 class="h3 mb-0 fw-bold"><?php echo htmlspecialchars($page_title); ?></h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <?php foreach($breadcrumbs as $i=>$b){
            $label=$b[0]; $link=$b[1];
            $last = ($i === count($breadcrumbs)-1);
          ?>
            <?php if($last || !$link){ ?>
              <li class="breadcrumb-item active text-white-50" aria-current="page"><?php echo htmlspecialchars($label); ?></li>
            <?php } else { ?>
              <li class="breadcrumb-item"><a class="text-white text-decoration-none" href="<?php echo $link; ?>"><?php echo htmlspecialchars($label); ?></a></li>
            <?php } ?>
          <?php } ?>
        </ol>
      </nav>
    </div>
  </div>
</section>
