// window.Vue = require('vue');
import blog from './components/blog.vue'
import example from './components/ExampleComponent.vue'
import bootstrap from './bootstrap.js'
import Vue from 'vue'
import task from './components/task.vue'
import VueRouter from 'vue-router'
import foo from './components/foo.vue'
import bar from './components/bar.vue'

import { routes } from './route';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes
});




const app = new Vue({
    el: '#app',
    components:{
    	example,
    	blog,
    	task,
    	foo,
    	bar
    },
    router
});
