# Registration App — Web Technology Assignment (Question 2)

**Author:** V SEETHARAMA — 4MW23CS177  
**Project:** Online Registration Form (HTML, CSS, JavaScript, jQuery, PHP)  
**Hosted:** InfinityFree

---

## Project Summary
This project is an online registration application created for the Web Technology assignment.  
Users fill a form (`form.html`) and on submission the data is displayed by a PHP script (`submit.php`). The app uses client-side jQuery validation and simple CSS for styling.

---

## Live demo
- Form page: `http://registrationapp.xo.je/`  
---

## Files in repository
registration-app/
├─ form.html # Registration form (HTML)
├─ submit.php # Receives POST data and displays it (PHP)
├─ index.html # Optional homepage linking to the form
├─ css/
│ └─ style.css # Styling for the form and pages
└─ js/
└─ script.js # jQuery validation and small behaviors


---

## Technologies used
- HTML5
- CSS3
- JavaScript + jQuery
- PHP (server-side)
- Hosted on InfinityFree (free PHP hosting)

---

## How to run locally (for testing)
> Note: PHP must be installed locally to run `submit.php`.

1. Open a terminal in the project folder (`registration-app`).
2. Start PHP’s built-in server:

Fill the form and submit. The server will route the POST to `submit.php`.

---

## How to deploy (already done)
I used InfinityFree (free PHP hosting):
1. Create an account on InfinityFree / iFastNet.
2. In Control Panel → File Manager → `htdocs` upload all project files and folders.
3. Visit `http://registration-app.xo.je/form.html`.

---

## Notes / Assumptions
- Passwords in this demo are displayed for assignment purposes — **do not** show real passwords in production.
- This is a learning project: no DB storage, no authentication.

---

## Improvements (future)
- Save submissions to a database (MySQL)
- Add server-side validation and sanitization
- Export submissions to CSV or PDF
- Add responsive/mobile improvements

---

## Contact
- Email: you@example.com
- GitHub: `https://github.com/vseetharama/registration-app`

