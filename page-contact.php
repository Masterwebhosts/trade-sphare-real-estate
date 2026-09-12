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
Contact Us
</span>

<h1>
Let's Discuss Your Real Estate Project
</h1>

<p>
Whether you are looking for an investment opportunity,
planning to develop a new project, or need real estate
consulting, we would love to hear your ideas.
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
Contact Information
</span>

<h2>
We Are Here to Help
</h2>

<p class="contact-info-lead">
Let us know what you need, and our team
will review your request and get in touch with you.
</p>


<div class="contact-info-list">

<div class="contact-info-item">

<span class="contact-info-label">
Email
</span>

<a href="mailto:info@example.com">
info@example.com
</a>

</div>


<div class="contact-info-item">

<span class="contact-info-label">
Phone
</span>

<a href="tel:+966500000000">
+966 50 000 0000
</a>

</div>


<div class="contact-info-item">

<span class="contact-info-label">
Business Hours
</span>

<span>
Sunday – Thursday
<br>
9:00 AM – 5:00 PM
</span>

</div>


<div class="contact-info-item">

<span class="contact-info-label">
Location
</span>

<span>
Kingdom of Saudi Arabia
</span>

</div>

</div>

</aside>


<!-- Contact Form -->

<div class="contact-form-wrapper">

<div class="contact-form-header">

<span class="section-eyebrow">
Send your inquiry
</span>

<h2>
How can we help you?
</h2>

<p>
Fill out the form below, and we will review your request.
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
Name
<span aria-hidden="true">*</span>
</label>

<input
type="text"
id="contact-name"
name="name"
autocomplete="name"
placeholder="Enter your name"
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
Email
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
Phone Number
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
Inquiry Type
<span aria-hidden="true">*</span>
</label>

<select
id="contact-type"
name="type"
required
>

<option value="">
Select inquiry type
</option>

<option value="development">
Project Development
</option>

<option value="investment">
Real Estate Investment
</option>

<option value="property">
Property Purchase
</option>

<option value="consulting">
Real Estate Consulting
</option>

<option value="partnership">
Partnership
</option>

<option value="other">
Other Inquiry
</option>

</select>

<small
class="form-error"
data-error-for="type"
></small>

</div>


<div class="form-field form-field-full">

<label for="contact-message">
Message
<span aria-hidden="true">*</span>
</label>

<textarea
id="contact-message"
name="message"
rows="7"
placeholder="Write details about your project or inquiry..."
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
Send Inquiry
</button>


<p class="contact-form-note">
At this stage, form validation occurs
only within the browser. The actual
submission will be connected to the backend later.
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
Projects and Opportunities
</span>

<h2>
Discover Our Real Estate Projects
</h2>

<p>
Explore current and upcoming projects
and learn about development and investment opportunities.
</p>

</div>

<div class="hero-actions">

<a
href="<?php echo esc_url( home_url( '/projects/' ) ); ?>"
class="button button-primary"
>
Explore Projects
</a>

<a
href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"
class="button button-secondary"
>
Browse Properties
</a>

</div>

</div>

</div>

</section>

</main>

<?php
get_footer();
?>