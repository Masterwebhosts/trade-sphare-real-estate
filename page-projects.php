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
مشاريع التطوير العقاري
</span>

<h1>
مشاريع نبني بها قيمة مستدامة
</h1>

<p>
استكشف مجموعة من المشاريع العقارية
السكنية والتجارية ومتعددة الاستخدامات.
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
محفظة المشاريع
</span>

<h2 id="projects-title">
المشاريع الحالية والقادمة
</h2>

</div>

<p
id="projects-count"
class="properties-count"
aria-live="polite"
>
جاري تحميل المشاريع...
</p>

</div>


<form
id="projects-filters"
class="property-filters"
>

<div class="property-filter-field">

<label for="project-search">
البحث
</label>

<input
type="search"
id="project-search"
placeholder="ابحث باسم المشروع أو الموقع..."
autocomplete="off"
>

</div>


<div class="property-filter-field">

<label for="project-category">
التصنيف
</label>

<select id="project-category">

<option value="">
جميع التصنيفات
</option>

</select>

</div>


<div class="property-filter-field">

<label for="project-status">
الحالة
</label>

<select id="project-status">

<option value="">
جميع الحالات
</option>

</select>

</div>


<div class="property-filter-field">

<label for="project-location">
الموقع
</label>

<select id="project-location">

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
id="project-reset"
class="btn btn-secondary"
>
إعادة التعيين
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
لم يتم العثور على مشاريع
</h3>

<p>
جرب تغيير كلمات البحث أو خيارات التصفية.
</p>

<button
type="button"
id="project-empty-reset"
class="btn btn-secondary"
>
عرض جميع المشاريع
</button>

</div>


<div
id="projects-error"
class="data-error"
hidden
>
تعذر تحميل المشاريع حاليا.
</div>

</div>

</section>

</main>

<?php
get_footer();
?>
