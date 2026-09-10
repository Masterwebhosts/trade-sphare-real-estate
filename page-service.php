<?php
/**
 * Service detail page template.
 *
 * @package Trade_Sphare_Real_Estate
 */

get_header();
?>

<main>

<section class="service-detail-section">

<div class="container">

<div
id="service-detail"
class="service-detail"
>
</div>


<div
id="service-detail-error"
class="property-detail-error"
hidden
>

<h1>
الخدمة غير موجودة
</h1>

<p>
عذرا لم نتمكن من العثور على الخدمة المطلوبة.
</p>

<a
href="<?php echo esc_url( home_url( '/services/' ) ); ?>"
class="btn btn-primary"
>
العودة إلى الخدمات
</a>

</div>

</div>

</section>

</main>

<?php
get_footer();
?>
