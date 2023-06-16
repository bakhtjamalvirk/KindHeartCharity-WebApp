    let slideIndex = 1;
    showSlides(slideIndex);
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }                  
      slides[slideIndex-1].style.display = "block";                 
    }
    function validateform() {
      var name = document.forms["vform"]["name"].value;
      var email = document.forms["vform"]["email"].value;
      var subject = document.forms["vform"]["subject"].value;
      var cv = document.forms["vform"]["cv"]

      var nameRegex = /^[a-zA-Z\s]+$/;

      if (name == "") {
        alert("Enter your name.");
        return false;
      }

      if (!nameRegex.test(name)) {
        alert("First name should contain only alphabets.");
        return false;
      }

      if (email == "") {
        alert("Enter your email address.");
        return false;
      }

      // Email validation using regular expression
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert("Enter a valid email address.");
        return false;
      }

      if (subject == "") {
        alert("Enter the subject.");
        return false;
      }

      if (!cv) {
        alert("Select a cv file");
        return false;
      }

      return true;
    }
    // Contact form validation
    function validateForm() {
      var fname = document.forms["send"]["fname"].value;
      var lname = document.forms["send"]["lname"].value;
      var email = document.forms["send"]["email"].value;
      var textarea = document.forms["send"]["textarea"].value;

      var nameRegex = /^[a-zA-Z\s]+$/;
      var alphanumericRegex = /^[a-zA-Z0-9]+$/;

      if (fname == "") {
          alert("Please enter your first name.");
          return false;
      }

      if (!nameRegex.test(fname)) {
          alert("First name should contain only alphabets.");
          return false;
      }

      if (lname == "") {
          alert("Please enter your last name.");
          return false;
      }

      if (!nameRegex.test(lname)) {
          alert("Last name should contain only alphabets.");
          return false;
      }

      if (email == "") {
          alert("Please enter your email address.");
          return false;
      }
  
      // Email validation using regular expression
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
          alert("Please enter a valid email address.");
          return false;
      }

      if (textarea == "") {
          alert("Please enter your message.");
          return false;
      }
  
      // Validation successful
      alert("Form submitted successfully!");
      return true;
  }