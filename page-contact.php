<?php
/**
 * Contact page template.
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
تواصل معنا
</span>

<h1>
دعنا نتحدث عن مشروعك العقاري
</h1>

<p>
سواء كنت تبحث عن فرصة استثمارية أو ترغب
في تطوير مشروع جديد أو تحتاج إلى استشارة
عقارية يسعدنا الاستماع إلى فكرتك.
</p>

</div>

</div>

</section>


<!-- Contact -->

<section class="section contact-section">

<div class="container">

<div class="contact-layout">

<!-- Contact Information -->

<aside class="contact-info">

<span class="section-eyebrow">
معلومات التواصل
</span>

<h2>
نحن هنا لمساعدتك
</h2>

<p class="contact-info-lead">
أخبرنا بما تحتاج إليه وسيتولى فريقنا
مراجعة طلبك والتواصل معك.
</p>


<div class="contact-info-list">

<div class="contact-info-item">

<span class="contact-info-label">
البريد الإلكتروني
</span>

<a href="mailto:info@example.com">
info@example.com
</a>

</div>


<div class="contact-info-item">

<span class="contact-info-label">
الهاتف
</span>

<a href="tel:+966500000000">
+966 50 000 0000
</a>

</div>


<div class="contact-info-item">

<span class="contact-info-label">
ساعات العمل
</span>

<span>
الأحد – الخميس
<br>
9:00 صباحا – 5:00 مساء
</span>

</div>


<div class="contact-info-item">

<span class="contact-info-label">
الموقع
</span>

<span>
المملكة العربية السعودية
</span>

</div>

</div>

</aside>


<!-- Contact Form -->

<div class="contact-form-wrapper">

<div class="contact-form-header">

<span class="section-eyebrow">
أرسل استفسارك
</span>

<h2>
كيف يمكننا مساعدتك
</h2>

<p>
املأ النموذج التالي وسنراجع طلبك.
</p>

</div>


<form
id="contact-form"
class="contact-form"
novalidate
>

<div class="contact-form-grid">

<div class="form-field">

<label for="contact-name">
الاسم
<span aria-hidden="true">*</span>
</label>

<input
type="text"
id="contact-name"
name="name"
autocomplete="name"
placeholder="اكتب اسمك"
required
minlength="2"
>

<small
class="form-error"
data-error-for="name"
></small>

</div>


<div class="form-field">

<label for="contact-email">
البريد الإلكتروني
<span aria-hidden="true">*</span>
</label>

<input
type="email"
id="contact-email"
name="email"
autocomplete="email"
placeholder="name@example.com"
required
>

<small
class="form-error"
data-error-for="email"
></small>

</div>


<div class="form-field">

<label for="contact-phone">
رقم الهاتف
</label>

<input
type="tel"
id="contact-phone"
name="phone"
autocomplete="tel"
placeholder="05xxxxxxxx"
>

<small
class="form-error"
data-error-for="phone"
></small>

</div>


<div class="form-field">

<label for="contact-type">
نوع الاستفسار
<span aria-hidden="true">*</span>
</label>

<select
id="contact-type"
name="type"
required
>

<option value="">
اختر نوع الاستفسار
</option>

<option value="development">
تطوير مشروع
</option>

<option value="investment">
استثمار عقاري
</option>

<option value="property">
شراء عقار
</option>

<option value="consulting">
استشارة عقارية
</option>

<option value="partnership">
شراكة
</option>

<option value="other">
استفسار آخر
</option>

</select>

<small
class="form-error"
data-error-for="type"
></small>

</div>


<div class="form-field form-field-full">

<label for="contact-message">
الرسالة
<span aria-hidden="true">*</span>
</label>

<textarea
id="contact-message"
name="message"
rows="7"
placeholder="اكتب تفاصيل مشروعك أو استفسارك..."
required
minlength="10"
></textarea>

<small
class="form-error"
data-error-for="message"
></small>

</div>

</div>


<div
id="contact-form-status"
class="contact-form-status"
role="status"
aria-live="polite"
></div>


<button
type="submit"
class="button button-primary contact-submit"
>
إرسال الاستفسار
</button>


<p class="contact-form-note">
في هذه المرحلة يتم التحقق من النموذج
داخل المتصفح فقط. سيتم ربط الإرسال
الفعلي بالـBackend لاحقا.
</p>

</form>

</div>

</div>

</div>

</section>


<!-- CTA -->

<section class="section">

<div class="container">

<div class="cta">

<div>

<span class="section-eyebrow">
المشاريع والفرص
</span>

<h2>
تعرف على مشاريعنا العقارية
</h2>

<p>
استكشف المشاريع الحالية والقادمة
وتعرف على فرص التطوير والاستثمار.
</p>

</div>

<div class="hero-actions">

<a
href="<?php echo esc_url( home_url( '/projects/' ) ); ?>"
class="button button-primary"
>
استكشف المشاريع
</a>

<a
href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"
class="button button-secondary"
>
تصفح العقارات
</a>

</div>

</div>

</div>

</section>

</main>

<?php
get_footer();
?>
