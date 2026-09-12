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
Service Not Found
</h1>

<p>
Sorry, we could not find the requested service.
</p>

<a
href="<?php echo esc_url( home_url( '/services/' ) ); ?>"
class="btn btn-primary"
>
Back to Services
</a>

</div>

</div>

</section>

</main>

<?php
get_footer();
?>