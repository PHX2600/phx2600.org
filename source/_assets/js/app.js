import Vue from 'vue';

Vue.component('meeting-component', require('./components/MeetingComponent.vue').default);

let app = new Vue({
    el: "#app"
});
