<?php
/**
 * Project detail page template.
 *
 * @package Trade_Sphare_Real_Estate
 */

get_header();
?>

<main>

<section class="property-detail-section">

<div class="container">

<div
id="project-detail"
class="property-detail"
>
</div>


<div
id="project-detail-error"
class="property-detail-error"
hidden
>

<h1>
المشروع غير موجود
</h1>

<p>
عذرا لم نتمكن من العثور على المشروع المطلوب.
</p>

<a
href="<?php echo esc_url( home_url( '/projects/' ) ); ?>"
class="btn btn-primary"
>
العودة إلى المشاريع
</a>

</div>

</div>

</section>

</main>

<?php
get_footer();
?>
