document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("vpce2Toggle");
  const searchForm = document.querySelector(".vpce2-search");

  function lockScroll() {
    if (toggle && toggle.checked) {
      document.body.classList.add("vpce2-noscroll");
    } else {
      document.body.classList.remove("vpce2-noscroll");
    }
  }

  document.addEventListener("change", lockScroll, true);

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && toggle && toggle.checked) {
      toggle.checked = false;
      lockScroll();
    }
  });

  if (searchForm) {
    searchForm.addEventListener("submit", function (event) {
      event.preventDefault();

      const input = searchForm.querySelector('input[type="search"]');
      const query = input ? input.value.trim() : "";

      if (query) {
        window.location.href = "/?s=" + encodeURIComponent(query);
      }
    });
  }

  function moveNewsletter() {
    const target = document.querySelector(".vpce2-newsletter");
    if (!target) return;

    const candidate = document.querySelector(
      '.mailpoet_form, .tnp-subscription, form.newsletter-form, .wp-block-newsletter-subscription, form[action*="newsletter"]'
    );

    if (candidate && !target.contains(candidate)) {
      target.appendChild(candidate);
    }

    const email = target.querySelector('input[type="email"]');
    if (email) {
      email.placeholder = "Saisissez votre email ici";
    }

    const submit = target.querySelector('input[type="submit"], button[type="submit"]');
    if (submit) {
      if ("value" in submit && submit.value) {
        submit.value = "Envoyer";
      } else {
        submit.textContent = "Envoyer";
      }
    }
  }

  moveNewsletter();

  const observer = new MutationObserver(moveNewsletter);
  observer.observe(document.body, {
    childList:true,
    subtree:true
  });
});