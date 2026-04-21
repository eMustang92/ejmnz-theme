import Alpine from 'alpinejs';

document.addEventListener('alpine:init', () => {
  Alpine.data('contactForm', () => ({
    form: { name: '', email: '', company: '', service: 'Web Development', message: '' },
    loading: false,
    async submitForm() {
      this.loading = true;
      try {
        const res = await fetch(window.location.origin + '/wp-json/ejmnz/v1/contact', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(this.form),
        });
        if (res.ok) alert('Message sent!');
        else alert('Error sending message');
      } catch (e) {
        alert('Network error');
      } finally {
        this.loading = false;
      }
    },
  }));
});

Alpine.start();
