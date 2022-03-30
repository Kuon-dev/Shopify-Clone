import axios from 'axios';
// Automatically add CSRF token to every outgoing request
const baseURL = window.App.base_url;
const headers = {
    'X-CSRF-TOKEN'    : window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest',
};

const Parent = axios.create({
    baseURL,
    headers,
});
// Let’s omit this so far, see the explanation below
class Http {} extends Parent;
export default Http;