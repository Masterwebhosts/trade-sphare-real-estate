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
العقارات
</span>

<h1>
اكتشف العقار المناسب لك
</h1>

<p>
مجموعة من العقارات المختارة للبيع والاستثمار
في مواقع مميزة وبخيارات متنوعة.
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
قائمة العقارات
</span>

<h2 id="properties-title">
العقارات المتاحة
</h2>

</div>

<p
id="properties-count"
class="properties-count"
aria-live="polite"
>
جاري تحميل العقارات...
</p>

</div>


<!-- Filters -->

<form
id="properties-filters"
class="property-filters"
>

<div class="property-filter-field">

<label for="property-search">
البحث
</label>

<input
type="search"
id="property-search"
name="search"
placeholder="ابحث باسم العقار أو الموقع..."
autocomplete="off"
>

</div>


<div class="property-filter-field">

<label for="property-type">
نوع العقار
</label>

<select
id="property-type"
name="type"
>

<option value="">
جميع الأنواع
</option>

</select>

</div>


<div class="property-filter-field">

<label for="property-status">
الحالة
</label>

<select
id="property-status"
name="status"
>

<option value="">
جميع الحالات
</option>

</select>

</div>


<div class="property-filter-field">

<label for="property-location">
الموقع
</label>

<select
id="property-location"
name="location"
>

<option value="">
جميع المواقع
</option>

</select>

</div>


<div class="property-filter-actions">

<button
type="submit"
class="btn btn-primary"
>
تطبيق البحث
</button>

<button
type="button"
id="property-reset"
class="btn btn-secondary"
>
إعادة التعيين
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
لم يتم العثور على عقارات
</h3>

<p>
جرب تغيير كلمات البحث أو خيارات التصفية.
</p>

<button
type="button"
id="property-empty-reset"
class="btn btn-secondary"
>
عرض جميع العقارات
</button>

</div>


<!-- Error State -->

<div
id="properties-error"
class="data-error"
hidden
>
تعذر تحميل العقارات حاليا.
</div>

</div>

</section>

</main>

<?php
get_footer();
?>
