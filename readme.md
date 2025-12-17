# Employee Management System

> **Project Folder Name:** `employee`  \
> **Database Name:** `employeeigniter`

A **production-style Employee Management System** developed using the **CodeIgniter (PHP MVC) framework**. This project is designed to manage core HR operations such as employee records, department handling, salary processing, and leave management through a structured **Admin–Staff role-based system**.

This repository is written and organized following **industry-standard MVC architecture**, making it suitable for **internships, academic submissions, and real-world deployment**.

---

## 📌 Project Objective

The objective of this project is to build a **centralized employee management platform** that reduces manual HR work and improves data accuracy. It demonstrates strong understanding of:

- MVC-based backend development
- Database-driven applications
- Secure role-based access
- Scalable project structuring

---

## 🚀 Key Functional Modules

### 👨‍💼 Admin Module

- Secure admin login
- Dashboard with system overview
- Department management (Add / Edit / Update / View)
- Staff management (Create, Update, Manage employees)
- Salary management
- Salary invoice generation & printing
- Leave request approval & rejection
- Admin-specific error handling pages

### 👩‍💻 Staff Module

- Secure staff login
- Staff dashboard
- Apply for leave
- View leave status
- View salary details
- Salary invoice view

---

## 🛠️ Technology Stack

### Backend

- PHP (CodeIgniter Framework)
- MVC Architecture

### Frontend

- HTML5
- CSS3
- Bootstrap
- JavaScript

### Database

- MySQL (`employeeigniter`)

### UI & Plugins

- Bootstrap
- DataTables
- Font Awesome
- Ionicons
- Bootstrap Datepicker

---

## 📁 Complete Project Structure

This project strictly follows the **CodeIgniter standard directory structure**.

```
Folder PATH listing
Volume serial number is 063F-7C21
C:.
|   .editorconfig
|   .htaccess
|   composer.json
|   index.php
|   structure.txt
|   _config.yml
|   
+---application
|   |   .htaccess
|   |   index.html
|   |   
|   +---cache
|   |       index.html
|   |       
|   +---config
|   |       autoload.php
|   |       config.php
|   |       constants.php
|   |       database.php
|   |       doctypes.php
|   |       foreign_chars.php
|   |       hooks.php
|   |       index.html
|   |       memcached.php
|   |       migration.php
|   |       mimes.php
|   |       profiler.php
|   |       routes.php
|   |       smileys.php
|   |       user_agents.php
|   |       
|   +---controllers
|   |       Department.php
|   |       Home.php
|   |       Leave.php
|   |       Salary.php
|   |       Staff.php
|   |       
|   +---core
|   |       index.html
|   |       
|   +---helpers
|   |       index.html
|   |       
|   +---hooks
|   |       index.html
|   |       
|   +---language
|   |   |   index.html
|   |   |   
|   |   \---english
|   |           index.html
|   |           
|   +---libraries
|   |       index.html
|   |       
|   +---logs
|   |       index.html
|   |       
|   +---models
|   |       Department_model.php
|   |       Home_model.php
|   |       Leave_model.php
|   |       Salary_model.php
|   |       Staff_model.php
|   |       
|   +---third_party
|   |       index.html
|   |       
|   \---views
|       |   404error.php
|       |   login.php
|       |   
|       +---admin
|       |       404error.php
|       |       add-department.php
|       |       add-salary.php
|       |       add-staff.php
|       |       approve-leave.php
|       |       dashboard.php
|       |       edit-department.php
|       |       edit-staff.php
|       |       error_page.php
|       |       footer.php
|       |       header.php
|       |       invoice-print.php
|       |       manage-department.php
|       |       manage-leave.php
|       |       manage-salary.php
|       |       manage-staff.php
|       |       salary-invoice.php
|       |       
|       +---errors
|       |   |   index.html
|       |   |   
|       |   +---cli
|       |   |       error_404.php
|       |   |       error_db.php
|       |   |       error_exception.php
|       |   |       error_general.php
|       |   |       error_php.php
|       |   |       index.html
|       |   |       
|       |   \---html
|       |           error_404.php
|       |           error_db.php
|       |           error_exception.php
|       |           error_general.php
|       |           error_php.php
|       |           index.html
|       |           
|       \---staff
|               apply-leave.php
|               dashboard.php
|               footer.php
|               header.php
|               salaryinvoice.php
|               view-leave.php
|               view-salary.php
|               
+---assets
|   +---bower_components
|   |   +---bootstrap
|   |   |   |   .bower.json
|   |   |   |   bower.json
|   |   |   |   CHANGELOG.md
|   |   |   |   Gemfile
|   |   |   |   Gemfile.lock
|   |   |   |   Gruntfile.js
|   |   |   |   ISSUE_TEMPLATE.md
|   |   |   |   LICENSE
|   |   |   |   package-lock.json
|   |   |   |   package.js
|   |   |   |   package.json
|   |   |   |   README.md
|   |   |   |   
|   |   |   +---dist
|   |   |   |   +---css
|   |   |   |   |       bootstrap-theme.css
|   |   |   |   |       bootstrap-theme.css.map
|   |   |   |   |       bootstrap-theme.min.css
|   |   |   |   |       bootstrap-theme.min.css.map
|   |   |   |   |       bootstrap.css
|   |   |   |   |       bootstrap.css.map
|   |   |   |   |       bootstrap.min.css
|   |   |   |   |       bootstrap.min.css.map
|   |   |   |   |       
|   |   |   |   +---fonts
|   |   |   |   |       glyphicons-halflings-regular.eot
|   |   |   |   |       glyphicons-halflings-regular.svg
|   |   |   |   |       glyphicons-halflings-regular.ttf
|   |   |   |   |       glyphicons-halflings-regular.woff
|   |   |   |   |       glyphicons-halflings-regular.woff2
|   |   |   |   |       
|   |   |   |   \---js
|   |   |   |           bootstrap.js
|   |   |   |           bootstrap.min.js
|   |   |   |           npm.js
|   |   |   |           
|   |   |   +---fonts
|   |   |   |       glyphicons-halflings-regular.eot
|   |   |   |       glyphicons-halflings-regular.svg
|   |   |   |       glyphicons-halflings-regular.ttf
|   |   |   |       glyphicons-halflings-regular.woff
|   |   |   |       glyphicons-halflings-regular.woff2
|   |   |   |       
|   |   |   +---grunt
|   |   |   |       .jshintrc
|   |   |   |       .stylelintrc
|   |   |   |       browsers.js
|   |   |   |       bs-commonjs-generator.js
|   |   |   |       bs-glyphicons-data-generator.js
|   |   |   |       bs-lessdoc-parser.js
|   |   |   |       bs-raw-files-generator.js
|   |   |   |       change-version.js
|   |   |   |       configBridge.json
|   |   |   |       generate-sri.js
|   |   |   |       karma.conf.js
|   |   |   |       
|   |   |   +---js
|   |   |   |       .jscsrc
|   |   |   |       .jshintrc
|   |   |   |       affix.js
|   |   |   |       alert.js
|   |   |   |       button.js
|   |   |   |       carousel.js
|   |   |   |       collapse.js
|   |   |   |       dropdown.js
|   |   |   |       modal.js
|   |   |   |       popover.js
|   |   |   |       scrollspy.js
|   |   |   |       tab.js
|   |   |   |       tooltip.js
|   |   |   |       transition.js
|   |   |   |       
|   |   |   +---less
|   |   |   |   |   alerts.less
|   |   |   |   |   badges.less
|   |   |   |   |   bootstrap.less
|   |   |   |   |   breadcrumbs.less
|   |   |   |   |   button-groups.less
|   |   |   |   |   buttons.less
|   |   |   |   |   carousel.less
|   |   |   |   |   close.less
|   |   |   |   |   code.less
|   |   |   |   |   component-animations.less
|   |   |   |   |   dropdowns.less
|   |   |   |   |   forms.less
|   |   |   |   |   glyphicons.less
|   |   |   |   |   grid.less
|   |   |   |   |   input-groups.less
|   |   |   |   |   jumbotron.less
|   |   |   |   |   labels.less
|   |   |   |   |   list-group.less
|   |   |   |   |   media.less
|   |   |   |   |   mixins.less
|   |   |   |   |   modals.less
|   |   |   |   |   navbar.less
|   |   |   |   |   navs.less
|   |   |   |   |   normalize.less
|   |   |   |   |   pager.less
|   |   |   |   |   pagination.less
|   |   |   |   |   panels.less
|   |   |   |   |   popovers.less
|   |   |   |   |   print.less
|   |   |   |   |   progress-bars.less
|   |   |   |   |   responsive-embed.less
|   |   |   |   |   responsive-utilities.less
|   |   |   |   |   scaffolding.less
|   |   |   |   |   tables.less
|   |   |   |   |   theme.less
|   |   |   |   |   thumbnails.less
|   |   |   |   |   tooltip.less
|   |   |   |   |   type.less
|   |   |   |   |   utilities.less
|   |   |   |   |   variables.less
|   |   |   |   |   wells.less
|   |   |   |   |   
|   |   |   |   \---mixins
|   |   |   |           alerts.less
|   |   |   |           background-variant.less
|   |   |   |           border-radius.less
|   |   |   |           buttons.less
|   |   |   |           center-block.less
|   |   |   |           clearfix.less
|   |   |   |           forms.less
|   |   |   |           gradients.less
|   |   |   |           grid-framework.less
|   |   |   |           grid.less
|   |   |   |           hide-text.less
|   |   |   |           image.less
|   |   |   |           labels.less
|   |   |   |           list-group.less
|   |   |   |           nav-divider.less
|   |   |   |           nav-vertical-align.less
|   |   |   |           opacity.less
|   |   |   |           pagination.less
|   |   |   |           panels.less
|   |   |   |           progress-bar.less
|   |   |   |           reset-filter.less
|   |   |   |           reset-text.less
|   |   |   |           resize.less
|   |   |   |           responsive-visibility.less
|   |   |   |           size.less
|   |   |   |           tab-focus.less
|   |   |   |           table-row.less
|   |   |   |           text-emphasis.less
|   |   |   |           text-overflow.less
|   |   |   |           vendor-prefixes.less
|   |   |   |           
|   |   |   \---nuget
|   |   |           bootstrap.less.nuspec
|   |   |           bootstrap.nuspec
|   |   |           MyGet.ps1
|   |   |           
|   |   +---bootstrap-datepicker
|   |   |   |   .bower.json
|   |   |   |   .editorconfig
|   |   |   |   .travis.yml
|   |   |   |   bower.json
|   |   |   |   CHANGELOG.md
|   |   |   |   CODE_OF_CONDUCT.md
|   |   |   |   composer.json
|   |   |   |   CONTRIBUTING.md
|   |   |   |   Gruntfile.js
|   |   |   |   LICENSE
|   |   |   |   package.json
|   |   |   |   README.md
|   |   |   |   yarn.lock
|   |   |   |   
|   |   |   +---.github
|   |   |   |       ISSUE_TEMPLATE.md
|   |   |   |       PULL_REQUEST_TEMPLATE.md
|   |   |   |       
|   |   |   +---build
|   |   |   |       build.less
|   |   |   |       build3.less
|   |   |   |       build_standalone.less
|   |   |   |       build_standalone3.less
|   |   |   |       
|   |   |   +---dist
|   |   |   |   +---css
|   |   |   |   |       bootstrap-datepicker.css
|   |   |   |   |       bootstrap-datepicker.css.map
|   |   |   |   |       bootstrap-datepicker.min.css
|   |   |   |   |       bootstrap-datepicker.standalone.css
|   |   |   |   |       bootstrap-datepicker.standalone.css.map
|   |   |   |   |       bootstrap-datepicker.standalone.min.css
|   |   |   |   |       bootstrap-datepicker3.css
|   |   |   |   |       bootstrap-datepicker3.css.map
|   |   |   |   |       bootstrap-datepicker3.min.css
|   |   |   |   |       bootstrap-datepicker3.standalone.css
|   |   |   |   |       bootstrap-datepicker3.standalone.css.map
|   |   |   |   |       bootstrap-datepicker3.standalone.min.css
|   |   |   |   |       
|   |   |   |   +---js
|   |   |   |   |       bootstrap-datepicker.js
|   |   |   |   |       bootstrap-datepicker.min.js
|   |   |   |   |       
|   |   |   |   \---locales
|   |   |   |           bootstrap-datepicker-en-CA.min.js
|   |   |   |           bootstrap-datepicker.ar-tn.min.js
|   |   |   |           bootstrap-datepicker.ar.min.js
|   |   |   |           bootstrap-datepicker.az.min.js
|   |   |   |           bootstrap-datepicker.bg.min.js
|   |   |   |           bootstrap-datepicker.bn.min.js
|   |   |   |           bootstrap-datepicker.br.min.js
|   |   |   |           bootstrap-datepicker.bs.min.js
|   |   |   |           bootstrap-datepicker.ca.min.js
|   |   |   |           bootstrap-datepicker.cs.min.js
|   |   |   |           bootstrap-datepicker.cy.min.js
|   |   |   |           bootstrap-datepicker.da.min.js
|   |   |   |           bootstrap-datepicker.de.min.js
|   |   |   |           bootstrap-datepicker.el.min.js
|   |   |   |           bootstrap-datepicker.en-AU.min.js
|   |   |   |           bootstrap-datepicker.en-CA.min.js
|   |   |   |           bootstrap-datepicker.en-GB.min.js
|   |   |   |           bootstrap-datepicker.en-IE.min.js
|   |   |   |           bootstrap-datepicker.en-NZ.min.js
|   |   |   |           bootstrap-datepicker.en-ZA.min.js
|   |   |   |           bootstrap-datepicker.eo.min.js
|   |   |   |           bootstrap-datepicker.es.min.js
|   |   |   |           bootstrap-datepicker.et.min.js
|   |   |   |           bootstrap-datepicker.eu.min.js
|   |   |   |           bootstrap-datepicker.fa.min.js
|   |   |   |           bootstrap-datepicker.fi.min.js
|   |   |   |           bootstrap-datepicker.fo.min.js
|   |   |   |           bootstrap-datepicker.fr-CH.min.js
|   |   |   |           bootstrap-datepicker.fr.min.js
|   |   |   |           bootstrap-datepicker.gl.min.js
|   |   |   |           bootstrap-datepicker.he.min.js
|   |   |   |           bootstrap-datepicker.hi.min.js
|   |   |   |           bootstrap-datepicker.hr.min.js
|   |   |   |           bootstrap-datepicker.hu.min.js
|   |   |   |           bootstrap-datepicker.hy.min.js
|   |   |   |           bootstrap-datepicker.id.min.js
|   |   |   |           bootstrap-datepicker.is.min.js
|   |   |   |           bootstrap-datepicker.it-CH.min.js
|   |   |   |           bootstrap-datepicker.it.min.js
|   |   |   |           bootstrap-datepicker.ja.min.js
|   |   |   |           bootstrap-datepicker.ka.min.js
|   |   |   |           bootstrap-datepicker.kh.min.js
|   |   |   |           bootstrap-datepicker.kk.min.js
|   |   |   |           bootstrap-datepicker.km.min.js
|   |   |   |           bootstrap-datepicker.ko.min.js
|   |   |   |           bootstrap-datepicker.kr.min.js
|   |   |   |           bootstrap-datepicker.lt.min.js
|   |   |   |           bootstrap-datepicker.lv.min.js
|   |   |   |           bootstrap-datepicker.me.min.js
|   |   |   |           bootstrap-datepicker.mk.min.js
|   |   |   |           bootstrap-datepicker.mn.min.js
|   |   |   |           bootstrap-datepicker.ms.min.js
|   |   |   |           bootstrap-datepicker.nl-BE.min.js
|   |   |   |           bootstrap-datepicker.nl.min.js
|   |   |   |           bootstrap-datepicker.no.min.js
|   |   |   |           bootstrap-datepicker.oc.min.js
|   |   |   |           bootstrap-datepicker.pl.min.js
|   |   |   |           bootstrap-datepicker.pt-BR.min.js
|   |   |   |           bootstrap-datepicker.pt.min.js
|   |   |   |           bootstrap-datepicker.ro.min.js
|   |   |   |           bootstrap-datepicker.rs-latin.min.js
|   |   |   |           bootstrap-datepicker.rs.min.js
|   |   |   |           bootstrap-datepicker.ru.min.js
|   |   |   |           bootstrap-datepicker.si.min.js
|   |   |   |           bootstrap-datepicker.sk.min.js
|   |   |   |           bootstrap-datepicker.sl.min.js
|   |   |   |           bootstrap-datepicker.sq.min.js
|   |   |   |           bootstrap-datepicker.sr-latin.min.js
|   |   |   |           bootstrap-datepicker.sr.min.js
|   |   |   |           bootstrap-datepicker.sv.min.js
|   |   |   |           bootstrap-datepicker.sw.min.js
|   |   |   |           bootstrap-datepicker.ta.min.js
|   |   |   |           bootstrap-datepicker.tg.min.js
|   |   |   |           bootstrap-datepicker.th.min.js
|   |   |   |           bootstrap-datepicker.tk.min.js
|   |   |   |           bootstrap-datepicker.tr.min.js
|   |   |   |           bootstrap-datepicker.uk.min.js
|   |   |   |           bootstrap-datepicker.uz-cyrl.min.js
|   |   |   |           bootstrap-datepicker.uz-latn.min.js
|   |   |   |           bootstrap-datepicker.vi.min.js
|   |   |   |           bootstrap-datepicker.zh-CN.min.js
|   |   |   |           bootstrap-datepicker.zh-TW.min.js
|   |   |   |           
|   |   |   +---docs
|   |   |   |   |   conf.py
|   |   |   |   |   events.rst
|   |   |   |   |   i18n.rst
|   |   |   |   |   index.rst
|   |   |   |   |   keyboard.rst
|   |   |   |   |   make.bat
|   |   |   |   |   Makefile
|   |   |   |   |   markup.rst
|   |   |   |   |   methods.rst
|   |   |   |   |   options.rst
|   |   |   |   |   README.md
|   |   |   |   |   requirements.txt
|   |   |   |   |   
|   |   |   |   +---_screenshots
|   |   |   |   |   |   demo_head.html
|   |   |   |   |   |   markup_component.html
|   |   |   |   |   |   markup_daterange.html
|   |   |   |   |   |   markup_inline.html
|   |   |   |   |   |   markup_input.html
|   |   |   |   |   |   option_calendarweeks.html
|   |   |   |   |   |   option_clearbtn.html
|   |   |   |   |   |   option_daysofweekdisabled.html
|   |   |   |   |   |   option_enddate.html
|   |   |   |   |   |   option_language.html
|   |   |   |   |   |   option_multidate.html
|   |   |   |   |   |   option_startdate.html
|   |   |   |   |   |   option_todaybtn.html
|   |   |   |   |   |   option_todayhighlight.html
|   |   |   |   |   |   option_weekstart.html
|   |   |   |   |   |   
|   |   |   |   |   \---script
|   |   |   |   |           common.css
|   |   |   |   |           common.js
|   |   |   |   |           debug.js
|   |   |   |   |           html-imports.min.js
|   |   |   |   |           screenshot.js
|   |   |   |   |           
|   |   |   |   \---_static
|   |   |   |       \---screenshots
|   |   |   |               demo_head.png
|   |   |   |               markup_component.png
|   |   |   |               markup_daterange.png
|   |   |   |               markup_inline.png
|   |   |   |               markup_input.png
|   |   |   |               option_calendarweeks.png
|   |   |   |               option_clearbtn.png
|   |   |   |               option_daysofweekdisabled.png
|   |   |   |               option_enddate.png
|   |   |   |               option_language.png
|   |   |   |               option_multidate.png
|   |   |   |               option_startdate.png
|   |   |   |               option_todaybtn.png
|   |   |   |               option_todayhighlight.png
|   |   |   |               option_weekstart.png
|   |   |   |               
|   |   |   +---grunt
|   |   |   |       .jshintrc
|   |   |   |       
|   |   |   +---js
|   |   |   |   |   .jscsrc
|   |   |   |   |   .jshintrc
|   |   |   |   |   bootstrap-datepicker.js
|   |   |   |   |   
|   |   |   |   \---locales
|   |   |   |           bootstrap-datepicker-en-CA.js
|   |   |   |           bootstrap-datepicker.ar-tn.js
|   |   |   |           bootstrap-datepicker.ar.js
|   |   |   |           bootstrap-datepicker.az.js
|   |   |   |           bootstrap-datepicker.bg.js
|   |   |   |           bootstrap-datepicker.bn.js
|   |   |   |           bootstrap-datepicker.br.js
|   |   |   |           bootstrap-datepicker.bs.js
|   |   |   |           bootstrap-datepicker.ca.js
|   |   |   |           bootstrap-datepicker.cs.js
|   |   |   |           bootstrap-datepicker.cy.js
|   |   |   |           bootstrap-datepicker.da.js
|   |   |   |           bootstrap-datepicker.de.js
|   |   |   |           bootstrap-datepicker.el.js
|   |   |   |           bootstrap-datepicker.en-AU.js
|   |   |   |           bootstrap-datepicker.en-CA.js
|   |   |   |           bootstrap-datepicker.en-GB.js
|   |   |   |           bootstrap-datepicker.en-IE.js
|   |   |   |           bootstrap-datepicker.en-NZ.js
|   |   |   |           bootstrap-datepicker.en-ZA.js
|   |   |   |           bootstrap-datepicker.eo.js
|   |   |   |           bootstrap-datepicker.es.js
|   |   |   |           bootstrap-datepicker.et.js
|   |   |   |           bootstrap-datepicker.eu.js
|   |   |   |           bootstrap-datepicker.fa.js
|   |   |   |           bootstrap-datepicker.fi.js
|   |   |   |           bootstrap-datepicker.fo.js
|   |   |   |           bootstrap-datepicker.fr-CH.js
|   |   |   |           bootstrap-datepicker.fr.js
|   |   |   |           bootstrap-datepicker.gl.js
|   |   |   |           bootstrap-datepicker.he.js
|   |   |   |           bootstrap-datepicker.hi.js
|   |   |   |           bootstrap-datepicker.hr.js
|   |   |   |           bootstrap-datepicker.hu.js
|   |   |   |           bootstrap-datepicker.hy.js
|   |   |   |           bootstrap-datepicker.id.js
|   |   |   |           bootstrap-datepicker.is.js
|   |   |   |           bootstrap-datepicker.it-CH.js
|   |   |   |           bootstrap-datepicker.it.js
|   |   |   |           bootstrap-datepicker.ja.js
|   |   |   |           bootstrap-datepicker.ka.js
|   |   |   |           bootstrap-datepicker.kh.js
|   |   |   |           bootstrap-datepicker.kk.js
|   |   |   |           bootstrap-datepicker.km.js
|   |   |   |           bootstrap-datepicker.ko.js
|   |   |   |           bootstrap-datepicker.kr.js
|   |   |   |           bootstrap-datepicker.lt.js
|   |   |   |           bootstrap-datepicker.lv.js
|   |   |   |           bootstrap-datepicker.me.js
|   |   |   |           bootstrap-datepicker.mk.js
|   |   |   |           bootstrap-datepicker.mn.js
|   |   |   |           bootstrap-datepicker.ms.js
|   |   |   |           bootstrap-datepicker.nl-BE.js
|   |   |   |           bootstrap-datepicker.nl.js
|   |   |   |           bootstrap-datepicker.no.js
|   |   |   |           bootstrap-datepicker.oc.js
|   |   |   |           bootstrap-datepicker.pl.js
|   |   |   |           bootstrap-datepicker.pt-BR.js
|   |   |   |           bootstrap-datepicker.pt.js
|   |   |   |           bootstrap-datepicker.ro.js
|   |   |   |           bootstrap-datepicker.rs-latin.js
|   |   |   |           bootstrap-datepicker.rs.js
|   |   |   |           bootstrap-datepicker.ru.js
|   |   |   |           bootstrap-datepicker.si.js
|   |   |   |           bootstrap-datepicker.sk.js
|   |   |   |           bootstrap-datepicker.sl.js
|   |   |   |           bootstrap-datepicker.sq.js
|   |   |   |           bootstrap-datepicker.sr-latin.js
|   |   |   |           bootstrap-datepicker.sr.js
|   |   |   |           bootstrap-datepicker.sv.js
|   |   |   |           bootstrap-datepicker.sw.js
|   |   |   |           bootstrap-datepicker.ta.js
|   |   |   |           bootstrap-datepicker.tg.js
|   |   |   |           bootstrap-datepicker.th.js
|   |   |   |           bootstrap-datepicker.tk.js
|   |   |   |           bootstrap-datepicker.tr.js
|   |   |   |           bootstrap-datepicker.uk.js
|   |   |   |           bootstrap-datepicker.uz-cyrl.js
|   |   |   |           bootstrap-datepicker.uz-latn.js
|   |   |   |           bootstrap-datepicker.vi.js
|   |   |   |           bootstrap-datepicker.zh-CN.js
|   |   |   |           bootstrap-datepicker.zh-TW.js
|   |   |   |           
|   |   |   +---less
|   |   |   |       .csslintrc
|   |   |   |       datepicker.less
|   |   |   |       datepicker3.less
|   |   |   |       
|   |   |   \---tests
|   |   |       |   README.md
|   |   |       |   tests.html
|   |   |       |   timezone.html
|   |   |       |   
|   |   |       +---assets
|   |   |       |       coverage.js
|   |   |       |       jquery-1.7.1.min.js
|   |   |       |       mock.js
|   |   |       |       qunit-logging.js
|   |   |       |       qunit.css
|   |   |       |       qunit.js
|   |   |       |       utils.js
|   |   |       |       
|   |   |       \---suites
|   |   |           |   calendar-weeks.js
|   |   |           |   component.js
|   |   |           |   data-api.js
|   |   |           |   events.js
|   |   |           |   formats.js
|   |   |           |   inline.js
|   |   |           |   methods.js
|   |   |           |   methods_jquery.js
|   |   |           |   noconflict.js
|   |   |           |   options.js
|   |   |           |   timezone.js
|   |   |           |   
|   |   |           +---keyboard_navigation
|   |   |           |       2011.js
|   |   |           |       2012.js
|   |   |           |       all.js
|   |   |           |       
|   |   |           +---mouse_navigation
|   |   |           |       2011.js
|   |   |           |       2012.js
|   |   |           |       all.js
|   |   |           |       
|   |   |           \---touch_navigation
|   |   |                   all.js
|   |   |                   
|   |   +---datatables.net
|   |   |   |   .bower.json
|   |   |   |   bower.json
|   |   |   |   License.txt
|   |   |   |   Readme.md
|   |   |   |   
|   |   |   \---js
|   |   |           jquery.dataTables.js
|   |   |           jquery.dataTables.min.js
|   |   |           
|   |   +---datatables.net-bs
|   |   |   |   .bower.json
|   |   |   |   bower.json
|   |   |   |   
|   |   |   +---css
|   |   |   |       dataTables.bootstrap.css
|   |   |   |       dataTables.bootstrap.min.css
|   |   |   |       
|   |   |   \---js
|   |   |           dataTables.bootstrap.js
|   |   |           dataTables.bootstrap.min.js
|   |   |           
|   |   +---fastclick
|   |   |   |   .bower.json
|   |   |   |   bower.json
|   |   |   |   
|   |   |   \---lib
|   |   |           fastclick.js
|   |   |           
|   |   +---font-awesome
|   |   |   |   .bower.json
|   |   |   |   .npmignore
|   |   |   |   bower.json
|   |   |   |   
|   |   |   +---css
|   |   |   |       font-awesome.css
|   |   |   |       font-awesome.css.map
|   |   |   |       font-awesome.min.css
|   |   |   |       
|   |   |   +---fonts
|   |   |   |       fontawesome-webfont.eot
|   |   |   |       fontawesome-webfont.svg
|   |   |   |       fontawesome-webfont.ttf
|   |   |   |       fontawesome-webfont.woff
|   |   |   |       fontawesome-webfont.woff2
|   |   |   |       FontAwesome.otf
|   |   |   |       
|   |   |   +---less
|   |   |   |       animated.less
|   |   |   |       bordered-pulled.less
|   |   |   |       core.less
|   |   |   |       fixed-width.less
|   |   |   |       font-awesome.less
|   |   |   |       icons.less
|   |   |   |       larger.less
|   |   |   |       list.less
|   |   |   |       mixins.less
|   |   |   |       path.less
|   |   |   |       rotated-flipped.less
|   |   |   |       screen-reader.less
|   |   |   |       stacked.less
|   |   |   |       variables.less
|   |   |   |       
|   |   |   \---scss
|   |   |           font-awesome.scss
|   |   |           _animated.scss
|   |   |           _bordered-pulled.scss
|   |   |           _core.scss
|   |   |           _fixed-width.scss
|   |   |           _icons.scss
|   |   |           _larger.scss
|   |   |           _list.scss
|   |   |           _mixins.scss
|   |   |           _path.scss
|   |   |           _rotated-flipped.scss
|   |   |           _screen-reader.scss
|   |   |           _stacked.scss
|   |   |           _variables.scss
|   |   |           
|   |   +---Ionicons
|   |   |   |   .bower.json
|   |   |   |   bower.json
|   |   |   |   cheatsheet.html
|   |   |   |   component.json
|   |   |   |   composer.json
|   |   |   |   LICENSE
|   |   |   |   readme.md
|   |   |   |   
|   |   |   +---css
|   |   |   |       ionicons.css
|   |   |   |       ionicons.min.css
|   |   |   |       
|   |   |   +---fonts
|   |   |   |       ionicons.eot
|   |   |   |       ionicons.svg
|   |   |   |       ionicons.ttf
|   |   |   |       ionicons.woff
|   |   |   |       
|   |   |   +---less
|   |   |   |       ionicons.less
|   |   |   |       _ionicons-font.less
|   |   |   |       _ionicons-icons.less
|   |   |   |       _ionicons-variables.less
|   |   |   |       
|   |   |   +---png
|   |   |   |   \---512
|   |   |   |           alert-circled.png
|   |   |   |           alert.png
|   |   |   |           android-add-contact.png
|   |   |   |           android-add.png
|   |   |   |           android-alarm.png
|   |   |   |           android-archive.png
|   |   |   |           android-arrow-back.png
|   |   |   |           android-arrow-down-left.png
|   |   |   |           android-arrow-down-right.png
|   |   |   |           android-arrow-forward.png
|   |   |   |           android-arrow-up-left.png
|   |   |   |           android-arrow-up-right.png
|   |   |   |           android-battery.png
|   |   |   |           android-book.png
|   |   |   |           android-calendar.png
|   |   |   |           android-call.png
|   |   |   |           android-camera.png
|   |   |   |           android-chat.png
|   |   |   |           android-checkmark.png
|   |   |   |           android-clock.png
|   |   |   |           android-close.png
|   |   |   |           android-contact.png
|   |   |   |           android-contacts.png
|   |   |   |           android-data.png
|   |   |   |           android-developer.png
|   |   |   |           android-display.png
|   |   |   |           android-download.png
|   |   |   |           android-drawer.png
|   |   |   |           android-dropdown.png
|   |   |   |           android-earth.png
|   |   |   |           android-folder.png
|   |   |   |           android-forums.png
|   |   |   |           android-friends.png
|   |   |   |           android-hand.png
|   |   |   |           android-image.png
|   |   |   |           android-inbox.png
|   |   |   |           android-information.png
|   |   |   |           android-keypad.png
|   |   |   |           android-lightbulb.png
|   |   |   |           android-locate.png
|   |   |   |           android-location.png
|   |   |   |           android-mail.png
|   |   |   |           android-microphone.png
|   |   |   |           android-mixer.png
|   |   |   |           android-more.png
|   |   |   |           android-note.png
|   |   |   |           android-playstore.png
|   |   |   |           android-printer.png
|   |   |   |           android-promotion.png
|   |   |   |           android-reminder.png
|   |   |   |           android-remove.png
|   |   |   |           android-search.png
|   |   |   |           android-send.png
|   |   |   |           android-settings.png
|   |   |   |           android-share.png
|   |   |   |           android-social-user.png
|   |   |   |           android-social.png
|   |   |   |           android-sort.png
|   |   |   |           android-stair-drawer.png
|   |   |   |           android-star.png
|   |   |   |           android-stopwatch.png
|   |   |   |           android-storage.png
|   |   |   |           android-system-back.png
|   |   |   |           android-system-home.png
|   |   |   |           android-system-windows.png
|   |   |   |           android-timer.png
|   |   |   |           android-trash.png
|   |   |   |           android-user-menu.png
|   |   |   |           android-volume.png
|   |   |   |           android-wifi.png
|   |   |   |           aperture.png
|   |   |   |           archive.png
|   |   |   |           arrow-down-a.png
|   |   |   |           arrow-down-b.png
|   |   |   |           arrow-down-c.png
|   |   |   |           arrow-expand.png
|   |   |   |           arrow-graph-down-left.png
|   |   |   |           arrow-graph-down-right.png
|   |   |   |           arrow-graph-up-left.png
|   |   |   |           arrow-graph-up-right.png
|   |   |   |           arrow-left-a.png
|   |   |   |           arrow-left-b.png
|   |   |   |           arrow-left-c.png
|   |   |   |           arrow-move.png
|   |   |   |           arrow-resize.png
|   |   |   |           arrow-return-left.png
|   |   |   |           arrow-return-right.png
|   |   |   |           arrow-right-a.png
|   |   |   |           arrow-right-b.png
|   |   |   |           arrow-right-c.png
|   |   |   |           arrow-shrink.png
|   |   |   |           arrow-swap.png
|   |   |   |           arrow-up-a.png
|   |   |   |           arrow-up-b.png
|   |   |   |           arrow-up-c.png
|   |   |   |           asterisk.png
|   |   |   |           at.png
|   |   |   |           bag.png
|   |   |   |           battery-charging.png
|   |   |   |           battery-empty.png
|   |   |   |           battery-full.png
|   |   |   |           battery-half.png
|   |   |   |           battery-low.png
|   |   |   |           beaker.png
|   |   |   |           beer.png
|   |   |   |           bluetooth.png
|   |   |   |           bonfire.png
|   |   |   |           bookmark.png
|   |   |   |           briefcase.png
|   |   |   |           bug.png
|   |   |   |           calculator.png
|   |   |   |           calendar.png
|   |   |   |           camera.png
|   |   |   |           card.png
|   |   |   |           cash.png
|   |   |   |           chatbox-working.png
|   |   |   |           chatbox.png
|   |   |   |           chatboxes.png
|   |   |   |           chatbubble-working.png
|   |   |   |           chatbubble.png
|   |   |   |           chatbubbles.png
|   |   |   |           checkmark-circled.png
|   |   |   |           checkmark-round.png
|   |   |   |           checkmark.png
|   |   |   |           chevron-down.png
|   |   |   |           chevron-left.png
|   |   |   |           chevron-right.png
|   |   |   |           chevron-up.png
|   |   |   |           clipboard.png
|   |   |   |           clock.png
|   |   |   |           close-circled.png
|   |   |   |           close-round.png
|   |   |   |           close.png
|   |   |   |           closed-captioning.png
|   |   |   |           cloud.png
|   |   |   |           code-download.png
|   |   |   |           code-working.png
|   |   |   |           code.png
|   |   |   |           coffee.png
|   |   |   |           compass.png
|   |   |   |           compose.png
|   |   |   |           connection-bars.png
|   |   |   |           contrast.png
|   |   |   |           cube.png
|   |   |   |           disc.png
|   |   |   |           document-text.png
|   |   |   |           document.png
|   |   |   |           drag.png
|   |   |   |           earth.png
|   |   |   |           edit.png
|   |   |   |           egg.png
|   |   |   |           eject.png
|   |   |   |           email.png
|   |   |   |           eye-disabled.png
|   |   |   |           eye.png
|   |   |   |           female.png
|   |   |   |           filing.png
|   |   |   |           film-marker.png
|   |   |   |           fireball.png
|   |   |   |           flag.png
|   |   |   |           flame.png
|   |   |   |           flash-off.png
|   |   |   |           flash.png
|   |   |   |           flask.png
|   |   |   |           folder.png
|   |   |   |           fork-repo.png
|   |   |   |           fork.png
|   |   |   |           forward.png
|   |   |   |           funnel.png
|   |   |   |           game-controller-a.png
|   |   |   |           game-controller-b.png
|   |   |   |           gear-a.png
|   |   |   |           gear-b.png
|   |   |   |           grid.png
|   |   |   |           hammer.png
|   |   |   |           happy.png
|   |   |   |           headphone.png
|   |   |   |           heart-broken.png
|   |   |   |           heart.png
|   |   |   |           help-buoy.png
|   |   |   |           help-circled.png
|   |   |   |           help.png
|   |   |   |           home.png
|   |   |   |           icecream.png
|   |   |   |           icon-social-google-plus-outline.png
|   |   |   |           icon-social-google-plus.png
|   |   |   |           image.png
|   |   |   |           images.png
|   |   |   |           information-circled.png
|   |   |   |           information.png
|   |   |   |           ionic.png
|   |   |   |           ios7-alarm-outline.png
|   |   |   |           ios7-alarm.png
|   |   |   |           ios7-albums-outline.png
|   |   |   |           ios7-albums.png
|   |   |   |           ios7-americanfootball-outline.png
|   |   |   |           ios7-americanfootball.png
|   |   |   |           ios7-analytics-outline.png
|   |   |   |           ios7-analytics.png
|   |   |   |           ios7-arrow-back.png
|   |   |   |           ios7-arrow-down.png
|   |   |   |           ios7-arrow-forward.png
|   |   |   |           ios7-arrow-left.png
|   |   |   |           ios7-arrow-right.png
|   |   |   |           ios7-arrow-thin-down.png
|   |   |   |           ios7-arrow-thin-left.png
|   |   |   |           ios7-arrow-thin-right.png
|   |   |   |           ios7-arrow-thin-up.png
|   |   |   |           ios7-arrow-up.png
|   |   |   |           ios7-at-outline.png
|   |   |   |           ios7-at.png
|   |   |   |           ios7-barcode-outline.png
|   |   |   |           ios7-barcode.png
|   |   |   |           ios7-baseball-outline.png
|   |   |   |           ios7-baseball.png
|   |   |   |           ios7-basketball-outline.png
|   |   |   |           ios7-basketball.png
|   |   |   |           ios7-bell-outline.png
|   |   |   |           ios7-bell.png
|   |   |   |           ios7-bolt-outline.png
|   |   |   |           ios7-bolt.png
|   |   |   |           ios7-bookmarks-outline.png
|   |   |   |           ios7-bookmarks.png
|   |   |   |           ios7-box-outline.png
|   |   |   |           ios7-box.png
|   |   |   |           ios7-briefcase-outline.png
|   |   |   |           ios7-briefcase.png
|   |   |   |           ios7-browsers-outline.png
|   |   |   |           ios7-browsers.png
|   |   |   |           ios7-calculator-outline.png
|   |   |   |           ios7-calculator.png
|   |   |   |           ios7-calendar-outline.png
|   |   |   |           ios7-calendar.png
|   |   |   |           ios7-camera-outline.png
|   |   |   |           ios7-camera.png
|   |   |   |           ios7-cart-outline.png
|   |   |   |           ios7-cart.png
|   |   |   |           ios7-chatboxes-outline.png
|   |   |   |           ios7-chatboxes.png
|   |   |   |           ios7-chatbubble-outline.png
|   |   |   |           ios7-chatbubble.png
|   |   |   |           ios7-checkmark-empty.png
|   |   |   |           ios7-checkmark-outline.png
|   |   |   |           ios7-checkmark.png
|   |   |   |           ios7-circle-filled.png
|   |   |   |           ios7-circle-outline.png
|   |   |   |           ios7-clock-outline.png
|   |   |   |           ios7-clock.png
|   |   |   |           ios7-close-empty.png
|   |   |   |           ios7-close-outline.png
|   |   |   |           ios7-close.png
|   |   |   |           ios7-cloud-download-outline.png
|   |   |   |           ios7-cloud-download.png
|   |   |   |           ios7-cloud-outline.png
|   |   |   |           ios7-cloud-upload-outline.png
|   |   |   |           ios7-cloud-upload.png
|   |   |   |           ios7-cloud.png
|   |   |   |           ios7-cloudy-night-outline.png
|   |   |   |           ios7-cloudy-night.png
|   |   |   |           ios7-cloudy-outline.png
|   |   |   |           ios7-cloudy.png
|   |   |   |           ios7-cog-outline.png
|   |   |   |           ios7-cog.png
|   |   |   |           ios7-compose-outline.png
|   |   |   |           ios7-compose.png
|   |   |   |           ios7-contact-outline.png
|   |   |   |           ios7-contact.png
|   |   |   |           ios7-copy-outline.png
|   |   |   |           ios7-copy.png
|   |   |   |           ios7-download-outline.png
|   |   |   |           ios7-download.png
|   |   |   |           ios7-drag.png
|   |   |   |           ios7-email-outline.png
|   |   |   |           ios7-email.png
|   |   |   |           ios7-expand.png
|   |   |   |           ios7-eye-outline.png
|   |   |   |           ios7-eye.png
|   |   |   |           ios7-fastforward-outline.png
|   |   |   |           ios7-fastforward.png
|   |   |   |           ios7-filing-outline.png
|   |   |   |           ios7-filing.png
|   |   |   |           ios7-film-outline.png
|   |   |   |           ios7-film.png
|   |   |   |           ios7-flag-outline.png
|   |   |   |           ios7-flag.png
|   |   |   |           ios7-folder-outline.png
|   |   |   |           ios7-folder.png
|   |   |   |           ios7-football-outline.png
|   |   |   |           ios7-football.png
|   |   |   |           ios7-gear-outline.png
|   |   |   |           ios7-gear.png
|   |   |   |           ios7-glasses-outline.png
|   |   |   |           ios7-glasses.png
|   |   |   |           ios7-heart-outline.png
|   |   |   |           ios7-heart.png
|   |   |   |           ios7-help-empty.png
|   |   |   |           ios7-help-outline.png
|   |   |   |           ios7-help.png
|   |   |   |           ios7-home-outline.png
|   |   |   |           ios7-home.png
|   |   |   |           ios7-infinite-outline.png
|   |   |   |           ios7-infinite.png
|   |   |   |           ios7-information-empty.png
|   |   |   |           ios7-information-outline.png
|   |   |   |           ios7-information.png
|   |   |   |           ios7-ionic-outline.png
|   |   |   |           ios7-keypad-outline.png
|   |   |   |           ios7-keypad.png
|   |   |   |           ios7-lightbulb-outline.png
|   |   |   |           ios7-lightbulb.png
|   |   |   |           ios7-location-outline.png
|   |   |   |           ios7-location.png
|   |   |   |           ios7-locked-outline.png
|   |   |   |           ios7-locked.png
|   |   |   |           ios7-loop-strong.png
|   |   |   |           ios7-loop.png
|   |   |   |           ios7-medkit-outline.png
|   |   |   |           ios7-medkit.png
|   |   |   |           ios7-mic-off.png
|   |   |   |           ios7-mic-outline.png
|   |   |   |           ios7-mic.png
|   |   |   |           ios7-minus-empty.png
|   |   |   |           ios7-minus-outline.png
|   |   |   |           ios7-minus.png
|   |   |   |           ios7-monitor-outline.png
|   |   |   |           ios7-monitor.png
|   |   |   |           ios7-moon-outline.png
|   |   |   |           ios7-moon.png
|   |   |   |           ios7-more-outline.png
|   |   |   |           ios7-more.png
|   |   |   |           ios7-musical-note.png
|   |   |   |           ios7-musical-notes.png
|   |   |   |           ios7-navigate-outline.png
|   |   |   |           ios7-navigate.png
|   |   |   |           ios7-paper-outline.png
|   |   |   |           ios7-paper.png
|   |   |   |           ios7-paperplane-outline.png
|   |   |   |           ios7-paperplane.png
|   |   |   |           ios7-partlysunny-outline.png
|   |   |   |           ios7-partlysunny.png
|   |   |   |           ios7-pause-outline.png
|   |   |   |           ios7-pause.png
|   |   |   |           ios7-paw-outline.png
|   |   |   |           ios7-paw.png
|   |   |   |           ios7-people-outline.png
|   |   |   |           ios7-people.png
|   |   |   |           ios7-person-outline.png
|   |   |   |           ios7-person.png
|   |   |   |           ios7-personadd-outline.png
|   |   |   |           ios7-personadd.png
|   |   |   |           ios7-photos-outline.png
|   |   |   |           ios7-photos.png
|   |   |   |           ios7-pie-outline.png
|   |   |   |           ios7-pie.png
|   |   |   |           ios7-play-outline.png
|   |   |   |           ios7-play.png
|   |   |   |           ios7-plus-empty.png
|   |   |   |           ios7-plus-outline.png
|   |   |   |           ios7-plus.png
|   |   |   |           ios7-pricetag-outline.png
|   |   |   |           ios7-pricetag.png
|   |   |   |           ios7-pricetags-outline.png
|   |   |   |           ios7-pricetags.png
|   |   |   |           ios7-printer-outline.png
|   |   |   |           ios7-printer.png
|   |   |   |           ios7-pulse-strong.png
|   |   |   |           ios7-pulse.png
|   |   |   |           ios7-rainy-outline.png
|   |   |   |           ios7-rainy.png
|   |   |   |           ios7-recording-outline.png
|   |   |   |           ios7-recording.png
|   |   |   |           ios7-redo-outline.png
|   |   |   |           ios7-redo.png
|   |   |   |           ios7-refresh-empty.png
|   |   |   |           ios7-refresh-outline.png
|   |   |   |           ios7-refresh.png
|   |   |   |           ios7-reload.png
|   |   |   |           ios7-reverse-camera-outline.png
|   |   |   |           ios7-reverse-camera.png
|   |   |   |           ios7-rewind-outline.png
|   |   |   |           ios7-rewind.png
|   |   |   |           ios7-search-strong.png
|   |   |   |           ios7-search.png
|   |   |   |           ios7-settings-strong.png
|   |   |   |           ios7-settings.png
|   |   |   |           ios7-shrink.png
|   |   |   |           ios7-skipbackward-outline.png
|   |   |   |           ios7-skipbackward.png
|   |   |   |           ios7-skipforward-outline.png
|   |   |   |           ios7-skipforward.png
|   |   |   |           ios7-snowy.png
|   |   |   |           ios7-speedometer-outline.png
|   |   |   |           ios7-speedometer.png
|   |   |   |           ios7-star-half.png
|   |   |   |           ios7-star-outline.png
|   |   |   |           ios7-star.png
|   |   |   |           ios7-stopwatch-outline.png
|   |   |   |           ios7-stopwatch.png
|   |   |   |           ios7-sunny-outline.png
|   |   |   |           ios7-sunny.png
|   |   |   |           ios7-telephone-outline.png
|   |   |   |           ios7-telephone.png
|   |   |   |           ios7-tennisball-outline.png
|   |   |   |           ios7-tennisball.png
|   |   |   |           ios7-thunderstorm-outline.png
|   |   |   |           ios7-thunderstorm.png
|   |   |   |           ios7-time-outline.png
|   |   |   |           ios7-time.png
|   |   |   |           ios7-timer-outline.png
|   |   |   |           ios7-timer.png
|   |   |   |           ios7-toggle-outline.png
|   |   |   |           ios7-toggle.png
|   |   |   |           ios7-trash-outline.png
|   |   |   |           ios7-trash.png
|   |   |   |           ios7-undo-outline.png
|   |   |   |           ios7-undo.png
|   |   |   |           ios7-unlocked-outline.png
|   |   |   |           ios7-unlocked.png
|   |   |   |           ios7-upload-outline.png
|   |   |   |           ios7-upload.png
|   |   |   |           ios7-videocam-outline.png
|   |   |   |           ios7-videocam.png
|   |   |   |           ios7-volume-high.png
|   |   |   |           ios7-volume-low.png
|   |   |   |           ios7-wineglass-outline.png
|   |   |   |           ios7-wineglass.png
|   |   |   |           ios7-world-outline.png
|   |   |   |           ios7-world.png
|   |   |   |           ipad.png
|   |   |   |           iphone.png
|   |   |   |           ipod.png
|   |   |   |           jet.png
|   |   |   |           key.png
|   |   |   |           knife.png
|   |   |   |           laptop.png
|   |   |   |           leaf.png
|   |   |   |           levels.png
|   |   |   |           lightbulb.png
|   |   |   |           link.png
|   |   |   |           load-a.png
|   |   |   |           load-b.png
|   |   |   |           load-c.png
|   |   |   |           load-d.png
|   |   |   |           location.png
|   |   |   |           locked.png
|   |   |   |           log-in.png
|   |   |   |           log-out.png
|   |   |   |           loop.png
|   |   |   |           magnet.png
|   |   |   |           male.png
|   |   |   |           man.png
|   |   |   |           map.png
|   |   |   |           medkit.png
|   |   |   |           merge.png
|   |   |   |           mic-a.png
|   |   |   |           mic-b.png
|   |   |   |           mic-c.png
|   |   |   |           minus-circled.png
|   |   |   |           minus-round.png
|   |   |   |           minus.png
|   |   |   |           model-s.png
|   |   |   |           monitor.png
|   |   |   |           more.png
|   |   |   |           mouse.png
|   |   |   |           music-note.png
|   |   |   |           navicon-round.png
|   |   |   |           navicon.png
|   |   |   |           navigate.png
|   |   |   |           network.png
|   |   |   |           no-smoking.png
|   |   |   |           nuclear.png
|   |   |   |           outlet.png
|   |   |   |           paper-airplane.png
|   |   |   |           paperclip.png
|   |   |   |           pause.png
|   |   |   |           person-add.png
|   |   |   |           person-stalker.png
|   |   |   |           person.png
|   |   |   |           pie-graph.png
|   |   |   |           pin.png
|   |   |   |           pinpoint.png
|   |   |   |           pizza.png
|   |   |   |           plane.png
|   |   |   |           planet.png
|   |   |   |           play.png
|   |   |   |           playstation.png
|   |   |   |           plus-circled.png
|   |   |   |           plus-round.png
|   |   |   |           plus.png
|   |   |   |           podium.png
|   |   |   |           pound.png
|   |   |   |           power.png
|   |   |   |           pricetag.png
|   |   |   |           pricetags.png
|   |   |   |           printer.png
|   |   |   |           pull-request.png
|   |   |   |           qr-scanner.png
|   |   |   |           quote.png
|   |   |   |           radio-waves.png
|   |   |   |           record.png
|   |   |   |           refresh.png
|   |   |   |           reply-all.png
|   |   |   |           reply.png
|   |   |   |           ribbon-a.png
|   |   |   |           ribbon-b.png
|   |   |   |           sad.png
|   |   |   |           scissors.png
|   |   |   |           search.png
|   |   |   |           settings.png
|   |   |   |           share.png
|   |   |   |           shuffle.png
|   |   |   |           skip-backward.png
|   |   |   |           skip-forward.png
|   |   |   |           social-android-outline.png
|   |   |   |           social-android.png
|   |   |   |           social-apple-outline.png
|   |   |   |           social-apple.png
|   |   |   |           social-bitcoin-outline.png
|   |   |   |           social-bitcoin.png
|   |   |   |           social-buffer-outline.png
|   |   |   |           social-buffer.png
|   |   |   |           social-designernews-outline.png
|   |   |   |           social-designernews.png
|   |   |   |           social-dribbble-outline.png
|   |   |   |           social-dribbble.png
|   |   |   |           social-dropbox-outline.png
|   |   |   |           social-dropbox.png
|   |   |   |           social-facebook-outline.png
|   |   |   |           social-facebook.png
|   |   |   |           social-foursquare-outline.png
|   |   |   |           social-foursquare.png
|   |   |   |           social-freebsd-devil.png
|   |   |   |           social-github-outline.png
|   |   |   |           social-github.png
|   |   |   |           social-google-outline.png
|   |   |   |           social-google.png
|   |   |   |           social-googleplus-outline.png
|   |   |   |           social-googleplus.png
|   |   |   |           social-hackernews-outline.png
|   |   |   |           social-hackernews.png
|   |   |   |           social-instagram-outline.png
|   |   |   |           social-instagram.png
|   |   |   |           social-linkedin-outline.png
|   |   |   |           social-linkedin.png
|   |   |   |           social-pinterest-outline.png
|   |   |   |           social-pinterest.png
|   |   |   |           social-reddit-outline.png
|   |   |   |           social-reddit.png
|   |   |   |           social-rss-outline.png
|   |   |   |           social-rss.png
|   |   |   |           social-skype-outline.png
|   |   |   |           social-skype.png
|   |   |   |           social-tumblr-outline.png
|   |   |   |           social-tumblr.png
|   |   |   |           social-tux.png
|   |   |   |           social-twitter-outline.png
|   |   |   |           social-twitter.png
|   |   |   |           social-usd-outline.png
|   |   |   |           social-usd.png
|   |   |   |           social-vimeo-outline.png
|   |   |   |           social-vimeo.png
|   |   |   |           social-windows-outline.png
|   |   |   |           social-windows.png
|   |   |   |           social-wordpress-outline.png
|   |   |   |           social-wordpress.png
|   |   |   |           social-yahoo-outline.png
|   |   |   |           social-yahoo.png
|   |   |   |           social-youtube-outline.png
|   |   |   |           social-youtube.png
|   |   |   |           speakerphone.png
|   |   |   |           speedometer.png
|   |   |   |           spoon.png
|   |   |   |           star.png
|   |   |   |           stats-bars.png
|   |   |   |           steam.png
|   |   |   |           stop.png
|   |   |   |           thermometer.png
|   |   |   |           thumbsdown.png
|   |   |   |           thumbsup.png
|   |   |   |           toggle-filled.png
|   |   |   |           toggle.png
|   |   |   |           trash-a.png
|   |   |   |           trash-b.png
|   |   |   |           trophy.png
|   |   |   |           umbrella.png
|   |   |   |           university.png
|   |   |   |           unlocked.png
|   |   |   |           upload.png
|   |   |   |           usb.png
|   |   |   |           videocamera.png
|   |   |   |           volume-high.png
|   |   |   |           volume-low.png
|   |   |   |           volume-medium.png
|   |   |   |           volume-mute.png
|   |   |   |           wand.png
|   |   |   |           waterdrop.png
|   |   |   |           wifi.png
|   |   |   |           wineglass.png
|   |   |   |           woman.png
|   |   |   |           wrench.png
|   |   |   |           xbox.png
|   |   |   |           
|   |   |   +---scss
|   |   |   |       ionicons.scss
|   |   |   |       _ionicons-font.scss
|   |   |   |       _ionicons-icons.scss
|   |   |   |       _ionicons-variables.scss
|   |   |   |       
|   |   |   \---src
|   |   |           alert-circled.svg
|   |   |           alert.svg
|   |   |           android-add-circle.svg
|   |   |           android-add.svg
|   |   |           android-alarm-clock.svg
|   |   |           android-alert.svg
|   |   |           android-apps.svg
|   |   |           android-archive.svg
|   |   |           android-arrow-back.svg
|   |   |           android-arrow-down.svg
|   |   |           android-arrow-dropdown-circle.svg
|   |   |           android-arrow-dropdown.svg
|   |   |           android-arrow-dropleft-circle.svg
|   |   |           android-arrow-dropleft.svg
|   |   |           android-arrow-dropright-circle.svg
|   |   |           android-arrow-dropright.svg
|   |   |           android-arrow-dropup-circle.svg
|   |   |           android-arrow-dropup.svg
|   |   |           android-arrow-forward.svg
|   |   |           android-arrow-up.svg
|   |   |           android-attach.svg
|   |   |           android-bar.svg
|   |   |           android-bicycle.svg
|   |   |           android-boat.svg
|   |   |           android-bookmark.svg
|   |   |           android-bulb.svg
|   |   |           android-bus.svg
|   |   |           android-calendar.svg
|   |   |           android-call.svg
|   |   |           android-camera.svg
|   |   |           android-cancel.svg
|   |   |           android-car.svg
|   |   |           android-cart.svg
|   |   |           android-chat.svg
|   |   |           android-checkbox-blank.svg
|   |   |           android-checkbox-outline-blank.svg
|   |   |           android-checkbox-outline.svg
|   |   |           android-checkbox.svg
|   |   |           android-checkmark-circle.svg
|   |   |           android-clipboard.svg
|   |   |           android-close.svg
|   |   |           android-cloud-circle.svg
|   |   |           android-cloud-done.svg
|   |   |           android-cloud-outline.svg
|   |   |           android-cloud.svg
|   |   |           android-color-palette.svg
|   |   |           android-compass.svg
|   |   |           android-contact.svg
|   |   |           android-contacts.svg
|   |   |           android-contract.svg
|   |   |           android-create.svg
|   |   |           android-delete.svg
|   |   |           android-desktop.svg
|   |   |           android-document.svg
|   |   |           android-done-all.svg
|   |   |           android-done.svg
|   |   |           android-download.svg
|   |   |           android-drafts.svg
|   |   |           android-exit.svg
|   |   |           android-expand.svg
|   |   |           android-favorite-outline.svg
|   |   |           android-favorite.svg
|   |   |           android-film.svg
|   |   |           android-folder-open.svg
|   |   |           android-folder.svg
|   |   |           android-funnel.svg
|   |   |           android-globe.svg
|   |   |           android-hand.svg
|   |   |           android-hangout.svg
|   |   |           android-happy.svg
|   |   |           android-home.svg
|   |   |           android-image.svg
|   |   |           android-laptop.svg
|   |   |           android-list.svg
|   |   |           android-locate.svg
|   |   |           android-lock.svg
|   |   |           android-mail.svg
|   |   |           android-map.svg
|   |   |           android-menu.svg
|   |   |           android-microphone-off.svg
|   |   |           android-microphone.svg
|   |   |           android-more-horizontal.svg
|   |   |           android-more-vertical.svg
|   |   |           android-navigate.svg
|   |   |           android-notifications-none.svg
|   |   |           android-notifications-off.svg
|   |   |           android-notifications.svg
|   |   |           android-open.svg
|   |   |           android-options.svg
|   |   |           android-people.svg
|   |   |           android-person-add.svg
|   |   |           android-person.svg
|   |   |           android-phone-landscape.svg
|   |   |           android-phone-portrait.svg
|   |   |           android-pin.svg
|   |   |           android-plane.svg
|   |   |           android-playstore.svg
|   |   |           android-print.svg
|   |   |           android-radio-button-off.svg
|   |   |           android-radio-button-on.svg
|   |   |           android-refresh.svg
|   |   |           android-remove-circle.svg
|   |   |           android-remove.svg
|   |   |           android-restaurant.svg
|   |   |           android-sad.svg
|   |   |           android-search.svg
|   |   |           android-send.svg
|   |   |           android-settings.svg
|   |   |           android-share-alt.svg
|   |   |           android-share.svg
|   |   |           android-star-half.svg
|   |   |           android-star-outline.svg
|   |   |           android-star.svg
|   |   |           android-stopwatch.svg
|   |   |           android-subway.svg
|   |   |           android-sunny.svg
|   |   |           android-sync.svg
|   |   |           android-textsms.svg
|   |   |           android-time.svg
|   |   |           android-train.svg
|   |   |           android-unlock.svg
|   |   |           android-upload.svg
|   |   |           android-volume-down.svg
|   |   |           android-volume-mute.svg
|   |   |           android-volume-off.svg
|   |   |           android-volume-up.svg
|   |   |           android-walk.svg
|   |   |           android-warning.svg
|   |   |           android-watch.svg
|   |   |           android-wifi.svg
|   |   |           aperture.svg
|   |   |           archive.svg
|   |   |           arrow-down-a.svg
|   |   |           arrow-down-b.svg
|   |   |           arrow-down-c.svg
|   |   |           arrow-expand.svg
|   |   |           arrow-graph-down-left.svg
|   |   |           arrow-graph-down-right.svg
|   |   |           arrow-graph-up-left.svg
|   |   |           arrow-graph-up-right.svg
|   |   |           arrow-left-a.svg
|   |   |           arrow-left-b.svg
|   |   |           arrow-left-c.svg
|   |   |           arrow-move.svg
|   |   |           arrow-resize.svg
|   |   |           arrow-return-left.svg
|   |   |           arrow-return-right.svg
|   |   |           arrow-right-a.svg
|   |   |           arrow-right-b.svg
|   |   |           arrow-right-c.svg
|   |   |           arrow-shrink.svg
|   |   |           arrow-swap.svg
|   |   |           arrow-up-a.svg
|   |   |           arrow-up-b.svg
|   |   |           arrow-up-c.svg
|   |   |           asterisk.svg
|   |   |           at.svg
|   |   |           backspace-outline.svg
|   |   |           backspace.svg
|   |   |           bag.svg
|   |   |           battery-charging.svg
|   |   |           battery-empty.svg
|   |   |           battery-full.svg
|   |   |           battery-half.svg
|   |   |           battery-low.svg
|   |   |           beaker.svg
|   |   |           beer.svg
|   |   |           bluetooth.svg
|   |   |           bonfire.svg
|   |   |           bookmark.svg
|   |   |           bowtie.svg
|   |   |           briefcase.svg
|   |   |           bug.svg
|   |   |           calculator.svg
|   |   |           calendar.svg
|   |   |           camera.svg
|   |   |           card.svg
|   |   |           cash.svg
|   |   |           chatbox-working.svg
|   |   |           chatbox.svg
|   |   |           chatboxes.svg
|   |   |           chatbubble-working.svg
|   |   |           chatbubble.svg
|   |   |           chatbubbles.svg
|   |   |           checkmark-circled.svg
|   |   |           checkmark-round.svg
|   |   |           checkmark.svg
|   |   |           chevron-down.svg
|   |   |           chevron-left.svg
|   |   |           chevron-right.svg
|   |   |           chevron-up.svg
|   |   |           clipboard.svg
|   |   |           clock.svg
|   |   |           close-circled.svg
|   |   |           close-round.svg
|   |   |           close.svg
|   |   |           closed-captioning.svg
|   |   |           cloud.svg
|   |   |           code-download.svg
|   |   |           code-working.svg
|   |   |           code.svg
|   |   |           coffee.svg
|   |   |           compass.svg
|   |   |           compose.svg
|   |   |           connection-bars.svg
|   |   |           contrast.svg
|   |   |           crop.svg
|   |   |           cube.svg
|   |   |           disc.svg
|   |   |           document-text.svg
|   |   |           document.svg
|   |   |           drag.svg
|   |   |           earth.svg
|   |   |           easel.svg
|   |   |           edit.svg
|   |   |           egg.svg
|   |   |           eject.svg
|   |   |           email-unread.svg
|   |   |           email.svg
|   |   |           erlenmeyer-flask-bubbles.svg
|   |   |           erlenmeyer-flask.svg
|   |   |           eye-disabled.svg
|   |   |           eye.svg
|   |   |           female.svg
|   |   |           filing.svg
|   |   |           film-marker.svg
|   |   |           fireball.svg
|   |   |           flag.svg
|   |   |           flame.svg
|   |   |           flash-off.svg
|   |   |           flash.svg
|   |   |           folder.svg
|   |   |           fork-repo.svg
|   |   |           fork.svg
|   |   |           forward.svg
|   |   |           funnel.svg
|   |   |           gear-a.svg
|   |   |           gear-b.svg
|   |   |           grid.svg
|   |   |           hammer.svg
|   |   |           happy-outline.svg
|   |   |           happy.svg
|   |   |           headphone.svg
|   |   |           heart-broken.svg
|   |   |           heart.svg
|   |   |           help-buoy.svg
|   |   |           help-circled.svg
|   |   |           help.svg
|   |   |           home.svg
|   |   |           icecream.svg
|   |   |           image.svg
|   |   |           images.svg
|   |   |           information-circled.svg
|   |   |           information.svg
|   |   |           ionic.svg
|   |   |           ios-alarm-outline.svg
|   |   |           ios-alarm.svg
|   |   |           ios-albums-outline.svg
|   |   |           ios-albums.svg
|   |   |           ios-americanfootball-outline.svg
|   |   |           ios-americanfootball.svg
|   |   |           ios-analytics-outline.svg
|   |   |           ios-analytics.svg
|   |   |           ios-arrow-back.svg
|   |   |           ios-arrow-down.svg
|   |   |           ios-arrow-forward.svg
|   |   |           ios-arrow-left.svg
|   |   |           ios-arrow-right.svg
|   |   |           ios-arrow-thin-down.svg
|   |   |           ios-arrow-thin-left.svg
|   |   |           ios-arrow-thin-right.svg
|   |   |           ios-arrow-thin-up.svg
|   |   |           ios-arrow-up.svg
|   |   |           ios-at-outline.svg
|   |   |           ios-at.svg
|   |   |           ios-barcode-outline.svg
|   |   |           ios-barcode.svg
|   |   |           ios-baseball-outline.svg
|   |   |           ios-baseball.svg
|   |   |           ios-basketball-outline.svg
|   |   |           ios-basketball.svg
|   |   |           ios-bell-outline.svg
|   |   |           ios-bell.svg
|   |   |           ios-body-outline.svg
|   |   |           ios-body.svg
|   |   |           ios-bolt-outline.svg
|   |   |           ios-bolt.svg
|   |   |           ios-book-outline.svg
|   |   |           ios-book.svg
|   |   |           ios-bookmarks-outline.svg
|   |   |           ios-bookmarks.svg
|   |   |           ios-box-outline.svg
|   |   |           ios-box.svg
|   |   |           ios-briefcase-outline.svg
|   |   |           ios-briefcase.svg
|   |   |           ios-browsers-outline.svg
|   |   |           ios-browsers.svg
|   |   |           ios-calculator-outline.svg
|   |   |           ios-calculator.svg
|   |   |           ios-calendar-outline.svg
|   |   |           ios-calendar.svg
|   |   |           ios-camera-outline.svg
|   |   |           ios-camera.svg
|   |   |           ios-cart-outline.svg
|   |   |           ios-cart.svg
|   |   |           ios-chatboxes-outline.svg
|   |   |           ios-chatboxes.svg
|   |   |           ios-chatbubble-outline.svg
|   |   |           ios-chatbubble.svg
|   |   |           ios-checkmark-empty.svg
|   |   |           ios-checkmark-outline.svg
|   |   |           ios-checkmark.svg
|   |   |           ios-circle-filled.svg
|   |   |           ios-circle-outline.svg
|   |   |           ios-clock-outline.svg
|   |   |           ios-clock.svg
|   |   |           ios-close-empty.svg
|   |   |           ios-close-outline.svg
|   |   |           ios-close.svg
|   |   |           ios-cloud-download-outline.svg
|   |   |           ios-cloud-download.svg
|   |   |           ios-cloud-outline.svg
|   |   |           ios-cloud-upload-outline.svg
|   |   |           ios-cloud-upload.svg
|   |   |           ios-cloud.svg
|   |   |           ios-cloudy-night-outline.svg
|   |   |           ios-cloudy-night.svg
|   |   |           ios-cloudy-outline.svg
|   |   |           ios-cloudy.svg
|   |   |           ios-cog-outline.svg
|   |   |           ios-cog.svg
|   |   |           ios-color-filter-outline.svg
|   |   |           ios-color-filter.svg
|   |   |           ios-color-wand-outline.svg
|   |   |           ios-color-wand.svg
|   |   |           ios-compose-outline.svg
|   |   |           ios-compose.svg
|   |   |           ios-contact-outline.svg
|   |   |           ios-contact.svg
|   |   |           ios-copy-outline.svg
|   |   |           ios-copy.svg
|   |   |           ios-crop-strong.svg
|   |   |           ios-crop.svg
|   |   |           ios-download-outline.svg
|   |   |           ios-download.svg
|   |   |           ios-drag.svg
|   |   |           ios-email-outline.svg
|   |   |           ios-email.svg
|   |   |           ios-eye-outline.svg
|   |   |           ios-eye.svg
|   |   |           ios-fastforward-outline.svg
|   |   |           ios-fastforward.svg
|   |   |           ios-filing-outline.svg
|   |   |           ios-filing.svg
|   |   |           ios-film-outline.svg
|   |   |           ios-film.svg
|   |   |           ios-flag-outline.svg
|   |   |           ios-flag.svg
|   |   |           ios-flame-outline.svg
|   |   |           ios-flame.svg
|   |   |           ios-flask-outline.svg
|   |   |           ios-flask.svg
|   |   |           ios-flower-outline.svg
|   |   |           ios-flower.svg
|   |   |           ios-folder-outline.svg
|   |   |           ios-folder.svg
|   |   |           ios-football-outline.svg
|   |   |           ios-football.svg
|   |   |           ios-game-controller-a-outline.svg
|   |   |           ios-game-controller-a.svg
|   |   |           ios-game-controller-b-outline.svg
|   |   |           ios-game-controller-b.svg
|   |   |           ios-gear-outline.svg
|   |   |           ios-gear.svg
|   |   |           ios-glasses-outline.svg
|   |   |           ios-glasses.svg
|   |   |           ios-grid-view-outline.svg
|   |   |           ios-grid-view.svg
|   |   |           ios-heart-outline.svg
|   |   |           ios-heart.svg
|   |   |           ios-help-empty.svg
|   |   |           ios-help-outline.svg
|   |   |           ios-help.svg
|   |   |           ios-home-outline.svg
|   |   |           ios-home.svg
|   |   |           ios-infinite-outline.svg
|   |   |           ios-infinite.svg
|   |   |           ios-information-empty.svg
|   |   |           ios-information-outline.svg
|   |   |           ios-information.svg
|   |   |           ios-ionic-outline.svg
|   |   |           ios-keypad-outline.svg
|   |   |           ios-keypad.svg
|   |   |           ios-lightbulb-outline.svg
|   |   |           ios-lightbulb.svg
|   |   |           ios-list-outline.svg
|   |   |           ios-list.svg
|   |   |           ios-location-outline.svg
|   |   |           ios-location.svg
|   |   |           ios-locked-outline.svg
|   |   |           ios-locked.svg
|   |   |           ios-loop-strong.svg
|   |   |           ios-loop.svg
|   |   |           ios-medical-outline.svg
|   |   |           ios-medical.svg
|   |   |           ios-medkit-outline.svg
|   |   |           ios-medkit.svg
|   |   |           ios-mic-off.svg
|   |   |           ios-mic-outline.svg
|   |   |           ios-mic.svg
|   |   |           ios-minus-empty.svg
|   |   |           ios-minus-outline.svg
|   |   |           ios-minus.svg
|   |   |           ios-monitor-outline.svg
|   |   |           ios-monitor.svg
|   |   |           ios-moon-outline.svg
|   |   |           ios-moon.svg
|   |   |           ios-more-outline.svg
|   |   |           ios-more.svg
|   |   |           ios-musical-note.svg
|   |   |           ios-musical-notes.svg
|   |   |           ios-navigate-outline.svg
|   |   |           ios-navigate.svg
|   |   |           ios-nutrition-outline.svg
|   |   |           ios-nutrition.svg
|   |   |           ios-paper-outline.svg
|   |   |           ios-paper.svg
|   |   |           ios-paperplane-outline.svg
|   |   |           ios-paperplane.svg
|   |   |           ios-partlysunny-outline.svg
|   |   |           ios-partlysunny.svg
|   |   |           ios-pause-outline.svg
|   |   |           ios-pause.svg
|   |   |           ios-paw-outline.svg
|   |   |           ios-paw.svg
|   |   |           ios-people-outline.svg
|   |   |           ios-people.svg
|   |   |           ios-person-outline.svg
|   |   |           ios-person.svg
|   |   |           ios-personadd-outline.svg
|   |   |           ios-personadd.svg
|   |   |           ios-photos-outline.svg
|   |   |           ios-photos.svg
|   |   |           ios-pie-outline.svg
|   |   |           ios-pie.svg
|   |   |           ios-pint-outline.svg
|   |   |           ios-pint.svg
|   |   |           ios-play-outline.svg
|   |   |           ios-play.svg
|   |   |           ios-plus-empty.svg
|   |   |           ios-plus-outline.svg
|   |   |           ios-plus.svg
|   |   |           ios-pricetag-outline.svg
|   |   |           ios-pricetag.svg
|   |   |           ios-pricetags-outline.svg
|   |   |           ios-pricetags.svg
|   |   |           ios-printer-outline.svg
|   |   |           ios-printer.svg
|   |   |           ios-pulse-strong.svg
|   |   |           ios-pulse.svg
|   |   |           ios-rainy-outline.svg
|   |   |           ios-rainy.svg
|   |   |           ios-recording-outline.svg
|   |   |           ios-recording.svg
|   |   |           ios-redo-outline.svg
|   |   |           ios-redo.svg
|   |   |           ios-refresh-empty.svg
|   |   |           ios-refresh-outline.svg
|   |   |           ios-refresh.svg
|   |   |           ios-reload.svg
|   |   |           ios-reverse-camera-outline.svg
|   |   |           ios-reverse-camera.svg
|   |   |           ios-rewind-outline.svg
|   |   |           ios-rewind.svg
|   |   |           ios-rose-outline.svg
|   |   |           ios-rose.svg
|   |   |           ios-search-strong.svg
|   |   |           ios-search.svg
|   |   |           ios-settings-strong.svg
|   |   |           ios-settings.svg
|   |   |           ios-shuffle-strong.svg
|   |   |           ios-shuffle.svg
|   |   |           ios-skipbackward-outline.svg
|   |   |           ios-skipbackward.svg
|   |   |           ios-skipforward-outline.svg
|   |   |           ios-skipforward.svg
|   |   |           ios-snowy.svg
|   |   |           ios-speedometer-outline.svg
|   |   |           ios-speedometer.svg
|   |   |           ios-star-half.svg
|   |   |           ios-star-outline.svg
|   |   |           ios-star.svg
|   |   |           ios-stopwatch-outline.svg
|   |   |           ios-stopwatch.svg
|   |   |           ios-sunny-outline.svg
|   |   |           ios-sunny.svg
|   |   |           ios-telephone-outline.svg
|   |   |           ios-telephone.svg
|   |   |           ios-tennisball-outline.svg
|   |   |           ios-tennisball.svg
|   |   |           ios-thunderstorm-outline.svg
|   |   |           ios-thunderstorm.svg
|   |   |           ios-time-outline.svg
|   |   |           ios-time.svg
|   |   |           ios-timer-outline.svg
|   |   |           ios-timer.svg
|   |   |           ios-toggle-outline.svg
|   |   |           ios-toggle.svg
|   |   |           ios-trash-outline.svg
|   |   |           ios-trash.svg
|   |   |           ios-undo-outline.svg
|   |   |           ios-undo.svg
|   |   |           ios-unlocked-outline.svg
|   |   |           ios-unlocked.svg
|   |   |           ios-upload-outline.svg
|   |   |           ios-upload.svg
|   |   |           ios-videocam-outline.svg
|   |   |           ios-videocam.svg
|   |   |           ios-volume-high.svg
|   |   |           ios-volume-low.svg
|   |   |           ios-wineglass-outline.svg
|   |   |           ios-wineglass.svg
|   |   |           ios-world-outline.svg
|   |   |           ios-world.svg
|   |   |           ipad.svg
|   |   |           iphone.svg
|   |   |           ipod.svg
|   |   |           jet.svg
|   |   |           key.svg
|   |   |           knife.svg
|   |   |           laptop.svg
|   |   |           leaf.svg
|   |   |           levels.svg
|   |   |           lightbulb.svg
|   |   |           link.svg
|   |   |           load-a.svg
|   |   |           load-b.svg
|   |   |           load-c.svg
|   |   |           load-d.svg
|   |   |           location.svg
|   |   |           lock-combination.svg
|   |   |           locked.svg
|   |   |           log-in.svg
|   |   |           log-out.svg
|   |   |           loop.svg
|   |   |           magnet.svg
|   |   |           male.svg
|   |   |           man.svg
|   |   |           map.svg
|   |   |           medkit.svg
|   |   |           merge.svg
|   |   |           mic-a.svg
|   |   |           mic-b.svg
|   |   |           mic-c.svg
|   |   |           minus-circled.svg
|   |   |           minus-round.svg
|   |   |           minus.svg
|   |   |           model-s.svg
|   |   |           monitor.svg
|   |   |           more.svg
|   |   |           mouse.svg
|   |   |           music-note.svg
|   |   |           navicon-round.svg
|   |   |           navicon.svg
|   |   |           navigate.svg
|   |   |           network.svg
|   |   |           no-smoking.svg
|   |   |           nuclear.svg
|   |   |           outlet.svg
|   |   |           paintbrush.svg
|   |   |           paintbucket.svg
|   |   |           paper-airplane.svg
|   |   |           paperclip.svg
|   |   |           pause.svg
|   |   |           person-add.svg
|   |   |           person-stalker.svg
|   |   |           person.svg
|   |   |           pie-graph.svg
|   |   |           pin.svg
|   |   |           pinpoint.svg
|   |   |           pizza.svg
|   |   |           plane.svg
|   |   |           planet.svg
|   |   |           play.svg
|   |   |           playstation.svg
|   |   |           plus-circled.svg
|   |   |           plus-round.svg
|   |   |           plus.svg
|   |   |           podium.svg
|   |   |           pound.svg
|   |   |           power.svg
|   |   |           pricetag.svg
|   |   |           pricetags.svg
|   |   |           printer.svg
|   |   |           pull-request.svg
|   |   |           qr-scanner.svg
|   |   |           quote.svg
|   |   |           radio-waves.svg
|   |   |           record.svg
|   |   |           refresh.svg
|   |   |           reply-all.svg
|   |   |           reply.svg
|   |   |           ribbon-a.svg
|   |   |           ribbon-b.svg
|   |   |           sad-outline.svg
|   |   |           sad.svg
|   |   |           scissors.svg
|   |   |           search.svg
|   |   |           settings.svg
|   |   |           share.svg
|   |   |           shuffle.svg
|   |   |           skip-backward.svg
|   |   |           skip-forward.svg
|   |   |           social-android-outline.svg
|   |   |           social-android.svg
|   |   |           social-angular-outline.svg
|   |   |           social-angular.svg
|   |   |           social-apple-outline.svg
|   |   |           social-apple.svg
|   |   |           social-bitcoin-outline.svg
|   |   |           social-bitcoin.svg
|   |   |           social-buffer-outline.svg
|   |   |           social-buffer.svg
|   |   |           social-chrome-outline.svg
|   |   |           social-chrome.svg
|   |   |           social-codepen-outline.svg
|   |   |           social-codepen.svg
|   |   |           social-css3-outline.svg
|   |   |           social-css3.svg
|   |   |           social-designernews-outline.svg
|   |   |           social-designernews.svg
|   |   |           social-dribbble-outline.svg
|   |   |           social-dribbble.svg
|   |   |           social-dropbox-outline.svg
|   |   |           social-dropbox.svg
|   |   |           social-euro-outline.svg
|   |   |           social-euro.svg
|   |   |           social-facebook-outline.svg
|   |   |           social-facebook.svg
|   |   |           social-foursquare-outline.svg
|   |   |           social-foursquare.svg
|   |   |           social-freebsd-devil.svg
|   |   |           social-github-outline.svg
|   |   |           social-github.svg
|   |   |           social-google-outline.svg
|   |   |           social-google.svg
|   |   |           social-googleplus-outline.svg
|   |   |           social-googleplus.svg
|   |   |           social-hackernews-outline.svg
|   |   |           social-hackernews.svg
|   |   |           social-html5-outline.svg
|   |   |           social-html5.svg
|   |   |           social-instagram-outline.svg
|   |   |           social-instagram.svg
|   |   |           social-javascript-outline.svg
|   |   |           social-javascript.svg
|   |   |           social-linkedin-outline.svg
|   |   |           social-linkedin.svg
|   |   |           social-markdown.svg
|   |   |           social-nodejs.svg
|   |   |           social-octocat.svg
|   |   |           social-pinterest-outline.svg
|   |   |           social-pinterest.svg
|   |   |           social-python.svg
|   |   |           social-reddit-outline.svg
|   |   |           social-reddit.svg
|   |   |           social-rss-outline.svg
|   |   |           social-rss.svg
|   |   |           social-sass.svg
|   |   |           social-skype-outline.svg
|   |   |           social-skype.svg
|   |   |           social-snapchat-outline.svg
|   |   |           social-snapchat.svg
|   |   |           social-tumblr-outline.svg
|   |   |           social-tumblr.svg
|   |   |           social-tux.svg
|   |   |           social-twitch-outline.svg
|   |   |           social-twitch.svg
|   |   |           social-twitter-outline.svg
|   |   |           social-twitter.svg
|   |   |           social-usd-outline.svg
|   |   |           social-usd.svg
|   |   |           social-vimeo-outline.svg
|   |   |           social-vimeo.svg
|   |   |           social-whatsapp-outline.svg
|   |   |           social-whatsapp.svg
|   |   |           social-windows-outline.svg
|   |   |           social-windows.svg
|   |   |           social-wordpress-outline.svg
|   |   |           social-wordpress.svg
|   |   |           social-yahoo-outline.svg
|   |   |           social-yahoo.svg
|   |   |           social-yen-outline.svg
|   |   |           social-yen.svg
|   |   |           social-youtube-outline.svg
|   |   |           social-youtube.svg
|   |   |           soup-can-outline.svg
|   |   |           soup-can.svg
|   |   |           speakerphone.svg
|   |   |           speedometer.svg
|   |   |           spoon.svg
|   |   |           star.svg
|   |   |           stats-bars.svg
|   |   |           steam.svg
|   |   |           stop.svg
|   |   |           thermometer.svg
|   |   |           thumbsdown.svg
|   |   |           thumbsup.svg
|   |   |           toggle-filled.svg
|   |   |           toggle.svg
|   |   |           transgender.svg
|   |   |           trash-a.svg
|   |   |           trash-b.svg
|   |   |           trophy.svg
|   |   |           tshirt-outline.svg
|   |   |           tshirt.svg
|   |   |           umbrella.svg
|   |   |           university.svg
|   |   |           unlocked.svg
|   |   |           upload.svg
|   |   |           usb.svg
|   |   |           videocamera.svg
|   |   |           volume-high.svg
|   |   |           volume-low.svg
|   |   |           volume-medium.svg
|   |   |           volume-mute.svg
|   |   |           wand.svg
|   |   |           waterdrop.svg
|   |   |           wifi.svg
|   |   |           wineglass.svg
|   |   |           woman.svg
|   |   |           wrench.svg
|   |   |           xbox.svg
|   |   |           
|   |   +---jquery
|   |   |   |   .bower.json
|   |   |   |   AUTHORS.txt
|   |   |   |   bower.json
|   |   |   |   LICENSE.txt
|   |   |   |   README.md
|   |   |   |   
|   |   |   +---dist
|   |   |   |       core.js
|   |   |   |       jquery.js
|   |   |   |       jquery.min.js
|   |   |   |       jquery.min.map
|   |   |   |       jquery.slim.js
|   |   |   |       jquery.slim.min.js
|   |   |   |       jquery.slim.min.map
|   |   |   |       
|   |   |   +---external
|   |   |   |   \---sizzle
|   |   |   |       |   LICENSE.txt
|   |   |   |       |   
|   |   |   |       \---dist
|   |   |   |               sizzle.js
|   |   |   |               sizzle.min.js
|   |   |   |               sizzle.min.map
|   |   |   |               
|   |   |   \---src
|   |   |       |   .eslintrc.json
|   |   |       |   ajax.js
|   |   |       |   attributes.js
|   |   |       |   callbacks.js
|   |   |       |   core.js
|   |   |       |   css.js
|   |   |       |   data.js
|   |   |       |   deferred.js
|   |   |       |   deprecated.js
|   |   |       |   dimensions.js
|   |   |       |   effects.js
|   |   |       |   event.js
|   |   |       |   jquery.js
|   |   |       |   manipulation.js
|   |   |       |   offset.js
|   |   |       |   queue.js
|   |   |       |   selector-native.js
|   |   |       |   selector-sizzle.js
|   |   |       |   selector.js
|   |   |       |   serialize.js
|   |   |       |   traversing.js
|   |   |       |   wrap.js
|   |   |       |   
|   |   |       +---ajax
|   |   |       |   |   jsonp.js
|   |   |       |   |   load.js
|   |   |       |   |   parseXML.js
|   |   |       |   |   script.js
|   |   |       |   |   xhr.js
|   |   |       |   |   
|   |   |       |   \---var
|   |   |       |           location.js
|   |   |       |           nonce.js
|   |   |       |           rquery.js
|   |   |       |           
|   |   |       +---attributes
|   |   |       |       attr.js
|   |   |       |       classes.js
|   |   |       |       prop.js
|   |   |       |       support.js
|   |   |       |       val.js
|   |   |       |       
|   |   |       +---core
|   |   |       |   |   access.js
|   |   |       |   |   camelCase.js
|   |   |       |   |   DOMEval.js
|   |   |       |   |   init.js
|   |   |       |   |   nodeName.js
|   |   |       |   |   parseHTML.js
|   |   |       |   |   ready-no-deferred.js
|   |   |       |   |   ready.js
|   |   |       |   |   readyException.js
|   |   |       |   |   stripAndCollapse.js
|   |   |       |   |   support.js
|   |   |       |   |   toType.js
|   |   |       |   |   
|   |   |       |   \---var
|   |   |       |           rsingleTag.js
|   |   |       |           
|   |   |       +---css
|   |   |       |   |   addGetHookIf.js
|   |   |       |   |   adjustCSS.js
|   |   |       |   |   curCSS.js
|   |   |       |   |   hiddenVisibleSelectors.js
|   |   |       |   |   showHide.js
|   |   |       |   |   support.js
|   |   |       |   |   
|   |   |       |   \---var
|   |   |       |           cssExpand.js
|   |   |       |           getStyles.js
|   |   |       |           isHiddenWithinTree.js
|   |   |       |           rboxStyle.js
|   |   |       |           rnumnonpx.js
|   |   |       |           swap.js
|   |   |       |           
|   |   |       +---data
|   |   |       |   |   Data.js
|   |   |       |   |   
|   |   |       |   \---var
|   |   |       |           acceptData.js
|   |   |       |           dataPriv.js
|   |   |       |           dataUser.js
|   |   |       |           
|   |   |       +---deferred
|   |   |       |       exceptionHook.js
|   |   |       |       
|   |   |       +---effects
|   |   |       |       animatedSelector.js
|   |   |       |       Tween.js
|   |   |       |       
|   |   |       +---event
|   |   |       |       ajax.js
|   |   |       |       alias.js
|   |   |       |       focusin.js
|   |   |       |       support.js
|   |   |       |       trigger.js
|   |   |       |       
|   |   |       +---exports
|   |   |       |       amd.js
|   |   |       |       global.js
|   |   |       |       
|   |   |       +---manipulation
|   |   |       |   |   buildFragment.js
|   |   |       |   |   getAll.js
|   |   |       |   |   setGlobalEval.js
|   |   |       |   |   support.js
|   |   |       |   |   wrapMap.js
|   |   |       |   |   _evalUrl.js
|   |   |       |   |   
|   |   |       |   \---var
|   |   |       |           rcheckableType.js
|   |   |       |           rscriptType.js
|   |   |       |           rtagName.js
|   |   |       |           
|   |   |       +---queue
|   |   |       |       delay.js
|   |   |       |       
|   |   |       +---traversing
|   |   |       |   |   findFilter.js
|   |   |       |   |   
|   |   |       |   \---var
|   |   |       |           dir.js
|   |   |       |           rneedsContext.js
|   |   |       |           siblings.js
|   |   |       |           
|   |   |       \---var
|   |   |               arr.js
|   |   |               class2type.js
|   |   |               concat.js
|   |   |               document.js
|   |   |               documentElement.js
|   |   |               fnToString.js
|   |   |               getProto.js
|   |   |               hasOwn.js
|   |   |               indexOf.js
|   |   |               isFunction.js
|   |   |               isWindow.js
|   |   |               ObjectFunctionString.js
|   |   |               pnum.js
|   |   |               push.js
|   |   |               rcssNum.js
|   |   |               rnothtmlwhite.js
|   |   |               slice.js
|   |   |               support.js
|   |   |               toString.js
|   |   |               
|   |   \---jquery-slimscroll
|   |       |   .bower.json
|   |       |   bower.json
|   |       |   jquery.slimscroll.js
|   |       |   jquery.slimscroll.min.js
|   |       |   package.json
|   |       |   README.md
|   |       |   
|   |       \---examples
|   |           |   allow-page-scroll.html
|   |           |   chaining.html
|   |           |   disable-fade-out.html
|   |           |   dynamic-content.html
|   |           |   height-width.html
|   |           |   index.html
|   |           |   mouse-wheel.html
|   |           |   multiple-elements.html
|   |           |   navigation.html
|   |           |   nested.html
|   |           |   programmatic-scrolling.html
|   |           |   rail.html
|   |           |   scroll-events.html
|   |           |   scrollbar.html
|   |           |   start-position.html
|   |           |   style.css
|   |           |   
|   |           \---libs
|   |               \---prettify
|   |                       prettify.css
|   |                       prettify.js
|   |                       
|   +---build
|   |   +---bootstrap-less
|   |   |   |   .csscomb.json
|   |   |   |   .csslintrc
|   |   |   |   alerts.less
|   |   |   |   badges.less
|   |   |   |   bootstrap.less
|   |   |   |   breadcrumbs.less
|   |   |   |   button-groups.less
|   |   |   |   buttons.less
|   |   |   |   carousel.less
|   |   |   |   close.less
|   |   |   |   code.less
|   |   |   |   component-animations.less
|   |   |   |   dropdowns.less
|   |   |   |   forms.less
|   |   |   |   glyphicons.less
|   |   |   |   grid.less
|   |   |   |   input-groups.less
|   |   |   |   jumbotron.less
|   |   |   |   labels.less
|   |   |   |   list-group.less
|   |   |   |   media.less
|   |   |   |   mixins.less
|   |   |   |   modals.less
|   |   |   |   navbar.less
|   |   |   |   navs.less
|   |   |   |   normalize.less
|   |   |   |   pager.less
|   |   |   |   pagination.less
|   |   |   |   panels.less
|   |   |   |   popovers.less
|   |   |   |   print.less
|   |   |   |   progress-bars.less
|   |   |   |   responsive-embed.less
|   |   |   |   responsive-utilities.less
|   |   |   |   scaffolding.less
|   |   |   |   tables.less
|   |   |   |   theme.less
|   |   |   |   thumbnails.less
|   |   |   |   tooltip.less
|   |   |   |   type.less
|   |   |   |   utilities.less
|   |   |   |   variables.less
|   |   |   |   wells.less
|   |   |   |   
|   |   |   \---mixins
|   |   |           alerts.less
|   |   |           background-variant.less
|   |   |           border-radius.less
|   |   |           buttons.less
|   |   |           center-block.less
|   |   |           clearfix.less
|   |   |           forms.less
|   |   |           gradients.less
|   |   |           grid-framework.less
|   |   |           grid.less
|   |   |           hide-text.less
|   |   |           image.less
|   |   |           labels.less
|   |   |           list-group.less
|   |   |           nav-divider.less
|   |   |           nav-vertical-align.less
|   |   |           opacity.less
|   |   |           pagination.less
|   |   |           panels.less
|   |   |           progress-bar.less
|   |   |           reset-filter.less
|   |   |           reset-text.less
|   |   |           resize.less
|   |   |           responsive-visibility.less
|   |   |           size.less
|   |   |           tab-focus.less
|   |   |           table-row.less
|   |   |           text-emphasis.less
|   |   |           text-overflow.less
|   |   |           vendor-prefixes.less
|   |   |           
|   |   +---grunt
|   |   |       .jshintrc
|   |   |       
|   |   +---js
|   |   |       .jscsrc
|   |   |       .jshintrc
|   |   |       BoxRefresh.js
|   |   |       BoxWidget.js
|   |   |       ControlSidebar.js
|   |   |       DirectChat.js
|   |   |       Layout.js
|   |   |       PushMenu.js
|   |   |       TodoList.js
|   |   |       Tree.js
|   |   |       
|   |   \---less
|   |       |   .csslintrc
|   |       |   404_500_errors.less
|   |       |   AdminLTE-without-plugins.less
|   |       |   AdminLTE.less
|   |       |   alerts.less
|   |       |   bootstrap-social.less
|   |       |   boxes.less
|   |       |   buttons.less
|   |       |   callout.less
|   |       |   carousel.less
|   |       |   control-sidebar.less
|   |       |   core.less
|   |       |   datepicker.less
|   |       |   direct-chat.less
|   |       |   dropdown.less
|   |       |   forms.less
|   |       |   fullcalendar.less
|   |       |   header.less
|   |       |   info-box.less
|   |       |   invoice.less
|   |       |   labels.less
|   |       |   lockscreen.less
|   |       |   login_and_register.less
|   |       |   mailbox.less
|   |       |   miscellaneous.less
|   |       |   mixins.less
|   |       |   modal.less
|   |       |   navs.less
|   |       |   plugins.less
|   |       |   print.less
|   |       |   products.less
|   |       |   profile.less
|   |       |   progress-bars.less
|   |       |   select2.less
|   |       |   sidebar-mini.less
|   |       |   sidebar.less
|   |       |   small-box.less
|   |       |   social-widgets.less
|   |       |   table.less
|   |       |   timeline.less
|   |       |   treeview.less
|   |       |   users-list.less
|   |       |   variables.less
|   |       |   
|   |       \---skins
|   |               skin-black-light.less
|   |               skin-black.less
|   |               skin-blue-light.less
|   |               skin-blue.less
|   |               skin-green-light.less
|   |               skin-green.less
|   |               skin-purple-light.less
|   |               skin-purple.less
|   |               skin-red-light.less
|   |               skin-red.less
|   |               skin-yellow-light.less
|   |               skin-yellow.less
|   |               _all-skins.less
|   |               
|   \---dist
|       +---css
|       |   |   AdminLTE.css
|       |   |   adminlte.css.map
|       |   |   AdminLTE.min.css
|       |   |   adminlte.min.css.map
|       |   |   
|       |   +---alt
|       |   |       AdminLTE-bootstrap-social.css
|       |   |       AdminLTE-bootstrap-social.min.css
|       |   |       AdminLTE-fullcalendar.css
|       |   |       AdminLTE-fullcalendar.min.css
|       |   |       AdminLTE-select2.css
|       |   |       AdminLTE-select2.min.css
|       |   |       AdminLTE-without-plugins.css
|       |   |       AdminLTE-without-plugins.min.css
|       |   |       
|       |   \---skins
|       |           skin-black-light.css
|       |           skin-black-light.min.css
|       |           skin-black.css
|       |           skin-black.min.css
|       |           skin-blue-light.css
|       |           skin-blue-light.min.css
|       |           skin-blue.css
|       |           skin-blue.min.css
|       |           skin-green-light.css
|       |           skin-green-light.min.css
|       |           skin-green.css
|       |           skin-green.min.css
|       |           skin-purple-light.css
|       |           skin-purple-light.min.css
|       |           skin-purple.css
|       |           skin-purple.min.css
|       |           skin-red-light.css
|       |           skin-red-light.min.css
|       |           skin-red.css
|       |           skin-red.min.css
|       |           skin-yellow-light.css
|       |           skin-yellow-light.min.css
|       |           skin-yellow.css
|       |           skin-yellow.min.css
|       |           _all-skins.css
|       |           _all-skins.min.css
|       |           
|       +---img
|       |   |   admin-user.png
|       |   |   default-50x50.gif
|       |   |   icons.png
|       |   |   userav.png
|       |   |   
|       |   \---credit
|       |           american-express.png
|       |           cirrus.png
|       |           mastercard.png
|       |           mestro.png
|       |           paypal.png
|       |           paypal2.png
|       |           visa.png
|       |           
|       \---js
|           |   adminlte.js
|           |   adminlte.min.js
|           |   demo.js
|           |   
|           \---pages
|                   dashboard.js
|                   dashboard2.js
|                   
+---DATABASE FILE
|       employeeigniter.sql
|       
+---system
|   |   .htaccess
|   |   01 LOGIN DETAILS & PROJECT INFO.txt
|   |   index.html
|   |   
|   +---core
|   |   |   Benchmark.php
|   |   |   CodeIgniter.php
|   |   |   Common.php
|   |   |   Config.php
|   |   |   Controller.php
|   |   |   Exceptions.php
|   |   |   Hooks.php
|   |   |   index.html
|   |   |   Input.php
|   |   |   Lang.php
|   |   |   Loader.php
|   |   |   Log.php
|   |   |   Model.php
|   |   |   Output.php
|   |   |   Router.php
|   |   |   Security.php
|   |   |   URI.php
|   |   |   Utf8.php
|   |   |   
|   |   \---compat
|   |           hash.php
|   |           index.html
|   |           mbstring.php
|   |           password.php
|   |           standard.php
|   |           
|   +---database
|   |   |   DB.php
|   |   |   DB_cache.php
|   |   |   DB_driver.php
|   |   |   DB_forge.php
|   |   |   DB_query_builder.php
|   |   |   DB_result.php
|   |   |   DB_utility.php
|   |   |   index.html
|   |   |   
|   |   \---drivers
|   |       |   index.html
|   |       |   
|   |       +---cubrid
|   |       |       cubrid_driver.php
|   |       |       cubrid_forge.php
|   |       |       cubrid_result.php
|   |       |       cubrid_utility.php
|   |       |       index.html
|   |       |       
|   |       +---ibase
|   |       |       ibase_driver.php
|   |       |       ibase_forge.php
|   |       |       ibase_result.php
|   |       |       ibase_utility.php
|   |       |       index.html
|   |       |       
|   |       +---mssql
|   |       |       index.html
|   |       |       mssql_driver.php
|   |       |       mssql_forge.php
|   |       |       mssql_result.php
|   |       |       mssql_utility.php
|   |       |       
|   |       +---mysql
|   |       |       index.html
|   |       |       mysql_driver.php
|   |       |       mysql_forge.php
|   |       |       mysql_result.php
|   |       |       mysql_utility.php
|   |       |       
|   |       +---mysqli
|   |       |       index.html
|   |       |       mysqli_driver.php
|   |       |       mysqli_forge.php
|   |       |       mysqli_result.php
|   |       |       mysqli_utility.php
|   |       |       
|   |       +---oci8
|   |       |       index.html
|   |       |       oci8_driver.php
|   |       |       oci8_forge.php
|   |       |       oci8_result.php
|   |       |       oci8_utility.php
|   |       |       
|   |       +---odbc
|   |       |       index.html
|   |       |       odbc_driver.php
|   |       |       odbc_forge.php
|   |       |       odbc_result.php
|   |       |       odbc_utility.php
|   |       |       
|   |       +---pdo
|   |       |   |   index.html
|   |       |   |   pdo_driver.php
|   |       |   |   pdo_forge.php
|   |       |   |   pdo_result.php
|   |       |   |   pdo_utility.php
|   |       |   |   
|   |       |   \---subdrivers
|   |       |           index.html
|   |       |           pdo_4d_driver.php
|   |       |           pdo_4d_forge.php
|   |       |           pdo_cubrid_driver.php
|   |       |           pdo_cubrid_forge.php
|   |       |           pdo_dblib_driver.php
|   |       |           pdo_dblib_forge.php
|   |       |           pdo_firebird_driver.php
|   |       |           pdo_firebird_forge.php
|   |       |           pdo_ibm_driver.php
|   |       |           pdo_ibm_forge.php
|   |       |           pdo_informix_driver.php
|   |       |           pdo_informix_forge.php
|   |       |           pdo_mysql_driver.php
|   |       |           pdo_mysql_forge.php
|   |       |           pdo_oci_driver.php
|   |       |           pdo_oci_forge.php
|   |       |           pdo_odbc_driver.php
|   |       |           pdo_odbc_forge.php
|   |       |           pdo_pgsql_driver.php
|   |       |           pdo_pgsql_forge.php
|   |       |           pdo_sqlite_driver.php
|   |       |           pdo_sqlite_forge.php
|   |       |           pdo_sqlsrv_driver.php
|   |       |           pdo_sqlsrv_forge.php
|   |       |           
|   |       +---postgre
|   |       |       index.html
|   |       |       postgre_driver.php
|   |       |       postgre_forge.php
|   |       |       postgre_result.php
|   |       |       postgre_utility.php
|   |       |       
|   |       +---sqlite
|   |       |       index.html
|   |       |       sqlite_driver.php
|   |       |       sqlite_forge.php
|   |       |       sqlite_result.php
|   |       |       sqlite_utility.php
|   |       |       
|   |       +---sqlite3
|   |       |       index.html
|   |       |       sqlite3_driver.php
|   |       |       sqlite3_forge.php
|   |       |       sqlite3_result.php
|   |       |       sqlite3_utility.php
|   |       |       
|   |       \---sqlsrv
|   |               index.html
|   |               sqlsrv_driver.php
|   |               sqlsrv_forge.php
|   |               sqlsrv_result.php
|   |               sqlsrv_utility.php
|   |               
|   +---fonts
|   |       index.html
|   |       texb.ttf
|   |       
|   +---helpers
|   |       array_helper.php
|   |       captcha_helper.php
|   |       cookie_helper.php
|   |       date_helper.php
|   |       directory_helper.php
|   |       download_helper.php
|   |       email_helper.php
|   |       file_helper.php
|   |       form_helper.php
|   |       html_helper.php
|   |       index.html
|   |       inflector_helper.php
|   |       language_helper.php
|   |       number_helper.php
|   |       path_helper.php
|   |       security_helper.php
|   |       smiley_helper.php
|   |       string_helper.php
|   |       text_helper.php
|   |       typography_helper.php
|   |       url_helper.php
|   |       xml_helper.php
|   |       
|   +---language
|   |   |   index.html
|   |   |   
|   |   \---english
|   |           calendar_lang.php
|   |           date_lang.php
|   |           db_lang.php
|   |           email_lang.php
|   |           form_validation_lang.php
|   |           ftp_lang.php
|   |           imglib_lang.php
|   |           index.html
|   |           migration_lang.php
|   |           number_lang.php
|   |           pagination_lang.php
|   |           profiler_lang.php
|   |           unit_test_lang.php
|   |           upload_lang.php
|   |           
|   \---libraries
|       |   Calendar.php
|       |   Cart.php
|       |   Driver.php
|       |   Email.php
|       |   Encrypt.php
|       |   Encryption.php
|       |   Form_validation.php
|       |   Ftp.php
|       |   Image_lib.php
|       |   index.html
|       |   Javascript.php
|       |   Migration.php
|       |   Pagination.php
|       |   Parser.php
|       |   Profiler.php
|       |   Table.php
|       |   Trackback.php
|       |   Typography.php
|       |   Unit_test.php
|       |   Upload.php
|       |   User_agent.php
|       |   Xmlrpc.php
|       |   Xmlrpcs.php
|       |   Zip.php
|       |   
|       +---Cache
|       |   |   Cache.php
|       |   |   index.html
|       |   |   
|       |   \---drivers
|       |           Cache_apc.php
|       |           Cache_dummy.php
|       |           Cache_file.php
|       |           Cache_memcached.php
|       |           Cache_redis.php
|       |           Cache_wincache.php
|       |           index.html
|       |           
|       +---Javascript
|       |       index.html
|       |       Jquery.php
|       |       
|       \---Session
|           |   index.html
|           |   Session.php
|           |   SessionHandlerInterface.php
|           |   Session_driver.php
|           |   
|           \---drivers
|                   index.html
|                   Session_database_driver.php
|                   Session_files_driver.php
|                   Session_memcached_driver.php
|                   Session_redis_driver.php
|                   
\---uploads
|   \---profile-pic
|            akash1.png
|            balan1.png
|            default-pic.jpg
|            gopal1.png
|            karth1.png
|            kavin1.png
|            kumar1.png
|            saran1.png
|            vijay1.png
|_config.yml
|.editorconfig
|.htaccess
|composer.json
|index.php
            

```

---

## ⚙️ Installation & Configuration Guide

### Step 1: Prerequisites

- PHP 7.4 or higher
- MySQL Server
- Apache (XAMPP / WAMP / LAMP)

### Step 2: Project Setup

1. Copy the `employee` folder into:

```
htdocs/
```

2. Start Apache and MySQL

### Step 3: Database Setup

1. Create a database named:

```
employeeigniter
```

2. Import your SQL file (DATABASE FILE/employeeigniter)
3. Configure database credentials in:

```
application/config/database.php
```

### Step 4: Base URL Setup

Update base URL in:

```
application/config/config.php
```

### Step 5: Run the Application

Open browser and navigate to:

```
http://localhost/employee/
```

---

## 🔑 Demo Login Credentials

Use the following **pre-configured credentials** to access the system for testing and demonstration purposes.

### 👨‍💼 Admin Login
- **Email:** `admin@gmail.com`
- **Password:** `admin123`

### 👩‍💻 Employee / Staff Logins

| Employee Name | Email | Password |
|--------------|-------|----------|
| Akash | akash@gmail.com | akash123 |
| Kavin | kavin@gmail.com | kavin123 |
| Vijay | vijay@gmail.com | vijay123 |
| Saran | saran@gmail.com | saran123 |
| Balan | balan@gmail.com | balan123 |
| Kumar | kumar@gmail.com | kumar123 |
| Karth | karth@gmail.com | karth123 |
| Gopal | gopal@gmail.com | gopal123 |

> ℹ️ These accounts are **sample users** stored in the `employeeigniter` database for demonstration, testing, and evaluation.

---

## 🔐 Authentication & Authorization

- Role-based login (Admin / Staff)
- Restricted admin routes
- Session-based authentication
- Secure routing via `.htaccess`

---

## 🧩 Architecture Overview

This project uses **Model–View–Controller (MVC)** architecture:

- **Model:** Handles database logic
- **View:** Manages UI rendering
- **Controller:** Handles application flow

This separation ensures:

- Clean codebase
- Easy maintenance
- High scalability

---

## 🧪 Error Handling & Logging

- Custom error pages (404, DB errors)
- Logs stored in:

```
application/logs/
```

---

## 🔒 Security Practices

- Direct script access protection
- MVC separation
- URL rewriting & access control
- Centralized configuration files

---

## 🎯 ATS & Internship Readiness

This project demonstrates:

- Real-world MVC project structure
- Backend CRUD operations
- Database integration
- Role-based access control
- Industry-standard folder organization

**Suitable for:**

- Web Development Internships
- Full Stack Developer Roles
- Academic Projects
- Portfolio & GitHub Showcase

---

## 🧭 Future Enhancements

- REST API integration
- Email notifications
- Role-based permission levels
- Improved UI responsiveness
- Advanced reporting module

---

## 👨‍💻 Author

**M.PRAVEEN**\
Full Stack Web Developer

---

## 📄 License

This project is created for **educational and professional portfolio use**. You are free to modify and extend it.

---

⭐ If you find this project helpful, consider giving it a star on GitHub.

