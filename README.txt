CASA RIVA — Architecture & Interiors (PHP)
==========================================

Upload everything in this folder to your hosting's public folder
(public_html / htdocs). Open the domain — index.php loads automatically.

Requirements
- PHP 8.0+ recommended (tested on PHP 8.3), sessions enabled, mail() enabled
- Internet access for the visitor (Google Fonts)

Structure
  index.php               Page entry (single-page site)
  send-enquiry.php        Enquiry form handler (validation + email)
  includes/config.php     Email, phone, address, credit link — edit here
  includes/data.php       Services, projects, process, partners, cities
  includes/sections/      One file per page section
  includes/header.php     <head>, logo, navigation
  includes/footer.php     Footer + "Designed & developed by" credit
  assets/css/style.css    All styles
  assets/js/main.js       Mobile menu, scroll reveal, project filter
  assets/images/          Site images

Notes
- Enquiries are emailed to the address in includes/config.php (CONTACT_EMAIL).
- For reliable delivery set MAIL_FROM in config.php to an address on your own
  domain (e.g. no-reply@yourdomain.com).
- To add/replace a project: put the image in assets/images/ and edit
  includes/data.php.
