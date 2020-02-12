require('./bootstrap');
require('./slick');

window.Vue = require('vue');

// Vue.component('api-component', require('./components/FnRestApiComponent.vue').default);
import apicomponent from './components/FnRestApiComponent';
import axios from "axios";
axios.defaults.headers.common['Content-Type'] = 'application/x-www-form-urlencoded';
axios.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');
axios.defaults.headers.common['Access-Control-Allow-Origin'] = '*';
window.Vue.prototype.$http = axios;

const app = new Vue({
    el: '#app',
    components: { 
        apicomponent
    }
});


$('.slick').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: false,
    arrows: false,
    responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 4,
          }
        },
        {
            breakpoint: 426,
            settings: {
              slidesToShow: 2,
            }
        },
    ]
});