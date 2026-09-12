<?php
/**
* Properties page template. 
*
* @package Trade_Sphare_Real_Estate
*/

get_header();
?>

<main>

<!-- Page Hero -->

<section class="page-hero">

<div class="container">

<div class="page-hero-content">

<span class="section-eyebrow">
Properties
</span>

<h1>
Discover the Right Property for You
</h1>

<p>
A curated selection of properties for sale and investment,
featuring prime locations and diverse options.
</p>

</div>

</div>

</section>


<!-- Properties -->

<section
class="section"
aria-labelledby="properties-title"
>

<div class="container">

<div class="section-header">

<div>

<span class="section-eyebrow">
Property List
</span>

<h2 id="properties-title">
Available Properties
</h2>

</div>

<p
id="properties-count"
class="properties-count"
aria-live="polite"
>
Loading properties...
</p>

</div>


<!-- Filters -->

<form
id="properties-filters"
class="property-filters"
>

<div class="property-filter-field">

<label for="property-search">
Search
</label>

<input
type="search"
id="property-search"
name="search"
placeholder="Search by property name or location..."
autocomplete="off"
>

</div>


<div class="property-filter-field">

<label for="property-type">
Property Type
</label>

<select
id="property-type"
name="type"
>

<option value="">
All Types
</option>

</select>

</div>


<div class="property-filter-field">

<label for="property-status">
Status
</label>

<select
id="property-status"
name="status"
>

<option value="">
All Statuses
</option>

</select>

</div>


<div class="property-filter-field">

<label for="property-location">
Location
</label>

<select
id="property-location"
name="location"
>

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
id="property-reset"
class="btn btn-secondary"
>
Reset
</button>

</div>

</form>


<!-- Results -->

<div
id="properties-list"
class="cards-grid cards-grid-3"
>
</div>


<!-- Empty State -->

<div
id="properties-empty"
class="property-empty"
hidden
>

<h3>
No properties found
</h3>

<p>
Try changing your search terms or filter options.
</p>

<button
type="button"
id="property-empty-reset"
class="btn btn-secondary"
>
View all properties
</button>

</div>


<!-- Error State -->

<div
id="properties-error"
class="data-error"
hidden
>
Unable to load properties at this time.
</div>

</div>

</section>

</main>

<?php
get_footer();
?>