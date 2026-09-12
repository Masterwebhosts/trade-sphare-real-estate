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
Project Not Found
</h1>

<p>
Sorry, we could not find the requested project.
</p>

<a
href="<?php echo esc_url( home_url( '/projects/' ) ); ?>"
class="btn btn-primary"
>
Back to Projects
</a>

</div>

</div>

</section>

</main>

<?php
get_footer();
?>

