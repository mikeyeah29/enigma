document.addEventListener('DOMContentLoaded', () => {
    var cookieName = 'enigma_cookie_notice_accepted';
    var notice = document.getElementById('enigma-cookie-notice');
    var button = document.getElementById('enigma-cookie-notice-accept');

    if (!notice || !button) {
        return;
    }

    function hasCookie(name) {
        return document.cookie.split('; ').some((item) => item.indexOf(name + '=1') === 0);
    }

    function setCookie(name, value, days) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));

        var cookieValue = name + '=' + value
            + '; expires=' + expires.toUTCString()
            + '; path=/; SameSite=Lax';

        if (window.location.protocol === 'https:') {
            cookieValue += '; Secure';
        }

        document.cookie = cookieValue;
    }

    if (!hasCookie(cookieName)) {
        notice.hidden = false;
    }

    button.addEventListener('click', () => {
        setCookie(cookieName, '1', 365);
        notice.hidden = true;
    });
});
