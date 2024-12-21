document.getElementById('user').addEventListener('focus', function() {
    this.setAttribute('data-placeholder', this.getAttribute('placeholder'));
    this.setAttribute('placeholder', '');
});

document.getElementById('user').addEventListener('blur', function() {
    this.setAttribute('placeholder', this.getAttribute('data-placeholder')); 
});

document.getElementById('pass').addEventListener('focus', function() {
    this.setAttribute('data-placeholder', this.getAttribute('placeholder'));
    this.setAttribute('placeholder', '');
});

document.getElementById('pass').addEventListener('blur', function() {
    this.setAttribute('placeholder', this.getAttribute('data-placeholder')); 
});