<?php
/**
* Projects page template. 
*
* @package Trade_Sphare_Real_Estate
*/

get_header();
?>

<main>

<section class="page-hero">

<div class="container">

<div class="page-hero-content">

<span class="section-eyebrow">
Real Estate Development Projects
</span>

<h1>
Projects Building Sustainable Value
</h1>

<p>
Explore a range of real estate projects:
residential, commercial, and mixed-use.
</p>

</div>

</div>

</section>


<section
class="section"
aria-labelledby="projects-title"
>

<div class="container">

<div class="section-header">

<div>

<span class="section-eyebrow">
Project Portfolio
</span>

<h2 id="projects-title">
Current and Upcoming Projects
</h2>

</div>

<p
id="projects-count"
class="properties-count"
aria-live="polite"
>
Loading projects...
</p>

</div>


<form
id="projects-filters"
class="property-filters"
>

<div class="property-filter-field">

<label for="project-search">
Search
</label>

<input
type="search"
id="project-search"
placeholder="Search by project name or location..."
autocomplete="off"
>

</div>


<div class="property-filter-field">

<label for="project-category">
Category
</label>

<select id="project-category">

<option value="">
All Categories
</option>

</select>

</div>


<div class="property-filter-field">

<label for="project-status">
Status
</label>

<select id="project-status">

<option value="">
All Statuses
</option>

</select>

</div>


<div class="property-filter-field">

<label for="project-location">
Location
</label>

<select id="project-location">

<option value="">
All Locations
</option>

</select>

</div>


<div class="property-filter-actions">

<button
type="submit"
class="btn btn-primary"
>
Apply Search
</button>

<button
type="button"
id="project-reset"
class="btn btn-secondary"
>
Reset Assign
</button>

</div>

</form>


<div
id="projects-list"
class="cards-grid cards-grid-2"
>
</div>


<div
id="projects-empty"
class="property-empty"
hidden
>

<h3>
No projects found
</h3>

<p>
Try changing your search terms or filter options.
</p>

<button
type="button"
id="project-empty-reset"
class="btn btn-secondary"
>
View all projects
</button>

</div>


<div
id="projects-error"
class="data-error"
hidden
>
Unable to load projects at this time.
</div>

</div>

</section>

</main>

<?php
get_footer();
?>